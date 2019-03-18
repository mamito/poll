<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Voker extends CI_Controller
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
        $data["username"] = $this->session->userdata("username");
        $data["usertype"] = $this->session->userdata("usertype");
        $CI =& get_instance();
        $CI->load->library("session");
        $CI->load->database();

        $this->load->view('header');

        $sql = "SELECT tc.id AS cate_id, tc.category_name, tc.uid, tc.que_txt, tc.description, tc.allowed_choices,tv.voke_name,tv.voke_order, tv.thumbnail, tv.thumbnail_url FROM tbl_category AS tc LEFT JOIN tbl_voke AS tv ON tc.id = tv.`category_id` ORDER BY cate_id ASC,tv.voke_order";
        $rlt = $CI->db->query($sql)->result();
        $cateInfo = [];
        $uid = null;
        foreach ($rlt as $item) {
            $cate_id = $item->cate_id;
            $uid = $item->uid;
            $cate_name = $item->category_name;
            $que_txt = $item->que_txt;
            $description = $item->description;
            $allowed_choices = $item->allowed_choices;
            $data_item = [
                "voke_name"     => $item->voke_name,
                "voke_order"    => $item->voke_order,
                "thumbnail"     => $item->thumbnail,
                "thumbnail_url" => $item->thumbnail_url
            ];
            //$cateInfo["$cate_id,$cate_name"][] = $data_item;

            $cateInfo["$cate_id"]["cate_name"] = $cate_name;
            $cateInfo["$cate_id"]["que_txt"] = $que_txt;
            $cateInfo["$cate_id"]["description"] = $description;
            $cateInfo["$cate_id"]["allowed_choices"] = $allowed_choices;
            $cateInfo["$cate_id"]["data_item"][] = $data_item;
        }
        $data["cates"] = $cateInfo;
        //$data["is_ip_exists"] = checkIp(getIp());
        $data["is_ip_exists"] = checkCookie($uid);
        $this->load->view('vokerMain', $data);
        $this->load->view('footer');
    }

    public function already_subChk()
    {
        $ip = getIp();
        $cnt = checkIp($ip);
        echo json_encode(["rlt" => "ok", "msg" => $cnt]);
    }

    public function save()
    {
        $this->load->helper('cookie');
        $CI =& get_instance();
        $CI->load->library("session");
        $CI->load->database();
        $array = $this->input->post();
        $name = $array["name"];
        $email = $array["email"];
        $phone = $array["phone"];


        $categoryId = explode(",", $array["cate_ids"]);
        $categoryId = $categoryId[0];


        $sql = "SELECT tc.id, tc.uid FROM tbl_category AS tc WHERE id=" . $categoryId;
        $rlt = $CI->db->query($sql)->result();
        $uid = '';
        foreach ($rlt as $item) {
            $uid = $item->uid;
            break;
        }

        $ip = getIp();
        $cnt = checkIp($ip);
        $cookieExists = get_cookie($uid, true);


        //if ($cnt > 0) {
        if (!empty($cookieExists)) {
            echo json_encode(["rlt" => "existIp", "msg" => "tommorrow"]);
        } else {
            $this->load->model("publicmodel");
            //save categories and answers

            $insert_ip = $this->publicmodel->insertIp($ip, $name, $email, $phone);


            set_cookie($uid, true, 60 * 60 * 24);
            $array["voker_id"] = $insert_ip;
            $mail_body = $this->publicmodel->insert_data($array);
			
			

			//Input Code for SMA 2018
			//Post Params 
			$famousartistmen    = $_POST['famousartistmen'];  
			$famousartistwomen  = $_POST['famousartistwomen'];  
		
			//Query INSERT 
            $query = " INSERT INTO famousartist (famousartistmen, famousartistwomen )  VALUES ( '$famousartistmen', '$famousartistwomen' ) "; 
			$result = $this->db->query($query);
			
			//Post Params 
			$youngidolname = $_POST['youngidolname'];  

			//Query 
			//INSERT 
			$query1 = " INSERT INTO youngidol (youngidolname)  VALUES ( '$youngidolname' ) "; 
			$result1 = $this->db->query($query1);
			
			 
			//END Input Code for SMA 2018
			 

            /*if($mail_body == true){
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'Uncarry1978@gmail.com', // change it to yours
                    'smtp_pass' => 'CarriesChan#?', // change it to yours
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'wordwrap' => TRUE
                );

                $email_subject = "Message from votting";
                $email_body = "<b>Name</b> - ".$name."<br />
                        <b>Phone</b> - ".$phone." <br />
                        <b>Email</b> - ".$email."<br /><br /><br />".$mail_body;

                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from('Uncarry1978@gmail.com'); // change it to yours
                $this->email->to('joensen19727@gmail.com');// change it to yours
                $this->email->subject($email_subject);
                $this->email->message($email_body);
                if($this->email->send())
                {

                }
            }*/
            echo json_encode(["rlt" => "ok", "msg" => "success"]);
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */