<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Vokemaker extends CI_Controller
{


    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()

    {


        parent::__construct();

        $this->load->helper('url');

        $this->load->helper("functions");

        $this->load->library("session");

    }

    public function index()

    {

        __Islogin();

        $data["username"] = $this->session->userdata("username");

        $data["usertype"] = $this->session->userdata("usertype");


        $data["sidebar_index"] = 1;

        $this->load->view('admin/header', $data);

        $this->load->view('admin/sidebar', $data);


        $CI =& get_instance();

        $CI->load->library("session");

        $CI->load->database();

        //get categories

        $sql = "SELECT t1.*, t2.cnt FROM (

                    SELECT tc.id AS cate_id, tc.category_name,tv.voke_name,tv.voke_order FROM tbl_category AS tc

                    LEFT JOIN tbl_voke AS tv ON tc.id = tv.`category_id` ORDER BY cate_id ASC

                    ) AS t1 LEFT JOIN

                    ( SELECT category, voke_order, COUNT(*) cnt FROM tbl_artist GROUP BY category, voke_order) t2

                    ON t1.cate_id = t2.category AND t1.voke_order = t2.voke_order";


        $rlt = $CI->db->query($sql)->result();


        $cateInfo = [];

        foreach ($rlt as $item) {

            $cate_id = $item->cate_id;

            $cate_name = $item->category_name;

            $data_item = [

                "voke_name" => $item->voke_name,

                "voke_order" => $item->voke_order,

                "cnt" => $item->cnt

            ];

            $cateInfo["$cate_id,$cate_name"][] = $data_item;

        }

        $data["cates"] = $cateInfo;


        $rlt = $CI->db->query($sql)->result();

        $data["categories"] = $rlt;

        $this->load->view('admin/dashboard', $data);

        $this->load->view('admin/footer');

    }

    public function setting()
    {
        __Islogin();
        $data["username"] = $this->session->userdata("username");
        $data["usertype"] = $this->session->userdata("usertype");

        $CI =& get_instance();
        $CI->load->library("session");
        $CI->load->database();

        //get categories
        $sql = "SELECT t1.*, t2.cnt FROM (
                    SELECT tc.id AS cate_id, tc.category_name, tc.que_txt, tc.description, tc.allowed_choices,tv.voke_name,tv.voke_order, tv.thumbnail, tv.thumbnail_url FROM tbl_category AS tc
                    LEFT JOIN tbl_voke AS tv ON tc.id = tv.`category_id` ORDER BY cate_id ASC
                    ) AS t1 LEFT JOIN
                    ( SELECT category, voke_order, COUNT(*) cnt FROM tbl_artist GROUP BY category, voke_order) t2
                    ON t1.cate_id = t2.category AND t1.voke_order = t2.voke_order";


        $rlt = $CI->db->query($sql)->result();
        $cateInfo = [];
        foreach ($rlt as $item) {
            $cate_id = $item->cate_id;
            $cate_name = $item->category_name;
            $que_txt = $item->que_txt;
            $description = $item->description;
            $allowed_choices = $item->allowed_choices;
            $data_item = [
                "voke_name"     => $item->voke_name,
                "voke_order"    => $item->voke_order,
                "thumbnail"     => $item->thumbnail,
                "thumbnail_url" => $item->thumbnail_url,
                "cnt"           => $item->cnt
            ];

            //$cateInfo["$cate_id,$cate_name"][] = $data_item;
            $cateInfo["$cate_id"]["cate_name"] = $cate_name;
            $cateInfo["$cate_id"]["que_txt"] = $que_txt;
            $cateInfo["$cate_id"]["description"] = $description;
            $cateInfo["$cate_id"]["allowed_choices"] = $allowed_choices;
            $cateInfo["$cate_id"]["data_item"][] = $data_item;

        }

        $data["cates"] = $cateInfo;
        $rlt = $CI->db->query($sql)->result();
        $data["categories"] = $rlt;
        $data["sidebar_index"] = 2;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/setting', $data);
        $this->load->view('admin/footer');
    }

    public function paticipants()

    {

        __Islogin();

        $data["username"] = $this->session->userdata("username");

        $data["usertype"] = $this->session->userdata("usertype");


        $CI =& get_instance();

        $CI->load->library("session");

        $CI->load->database();

        //get categories

        $sql = "select * from tbl_ip";


        $rlt = $CI->db->query($sql)->result();

        $data["paticipants"] = $rlt;


        $data["sidebar_index"] = 3;

        $this->load->view('admin/header', $data);

        $this->load->view('admin/sidebar', $data);

        $this->load->view('admin/paticipants', $data);

        $this->load->view('admin/footer');

    }

    public function login()
    {


        if ($this->input->post("username")) {

            $username = $this->input->post("username");

            $userpass = $this->input->post("password");

            $userChkFlag = checkUser($username, $userpass);

            if ($userChkFlag != -1) {

                $this->index();

            }

        }

        if (!$this->session->userdata('islogin')) {

            $this->load->view('header');

            $this->load->view('admin/login');

            $this->load->view('footer');

        } else {

            redirect('./admin/vokemaker/');

        }

    }

    public function signup()
    {

        $userid = $this->input->post("username");

        $password = $this->input->post("password");

        $email = $this->input->post("email");


        $userInfo = [

            "username" => $userid,

            "password" => md5($password),

            "email" => $email

        ];

        $this->load->model("publicmodel");

        $ret = $this->publicmodel->register($userInfo);

        if ($ret > 0) {

            $userChkFlag = checkUser($userid, $password);

            if ($userChkFlag != -1) {

                $this->index();

            } else {

                redirect('./admin/vokemaker/login/');

            }

        } else {

            redirect('./admin/vokemaker/login/');

        }

    }

    public function logout()
    {

        $this->session->sess_destroy();

        redirect('./admin/vokemaker/login');

    }

    public function save()
    {
        $datas = $this->input->post();
        $this->load->model("publicmodel");
        $ret = $this->publicmodel->save_categories($datas);
        return json_encode(["rlt" => "ok", "msg" => "success"]);
    }

    public function cat_add()
    {

        $datas = $this->input->post();

        $this->load->model("publicmodel");

        $ret = $this->publicmodel->add_categories($datas);

        redirect('./admin/vokemaker/setting');

    }

    public function cat_delete($id)
    {

        $this->load->model("publicmodel");

        $ret = $this->publicmodel->del_categories($id);

        redirect('./admin/vokemaker/setting');

    }

}



/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */