<?php

/**
 * Created by PhpStorm.
 * User: Aimon.M
 * Date: 1/31/2016
 * Time: 12:08 PM
 */
class PublicModel extends CI_Model
{


    function __construct()
    {

        parent::__construct();

    }

    function save($table, $data)
    {

        $CI =& get_instance();

        $CI->load->library("session");

        $CI->load->database();

        $CI->db->insert($table, $data);

        return $CI->db->insert_id();

    }

    // update person by id

    function update($table, $data, $id, $field)
    {

        $CI =& get_instance();

        $CI->load->library("session");

        $CI->load->database();

        $CI->db->where($field, $id);

        $CI->db->update($table, $data);

    }


    // delete person by id

    function delete($table, $id, $field, $id2 = '', $field2 = '')
    {

        $CI =& get_instance();

        $CI->load->library("session");

        $CI->load->database();

        $CI->db->where($field, $id);

        if ($field2 != '') {

            $CI->db->where($field2, $id2);

        }

        $CI->db->delete($table);

    }

    function login_check($user, $password)
    {

        $CI =& get_instance();

        $CI->load->library("session");

        $CI->load->database();

        $userid = null;

        $query = "select * from tbl_user where email='" . $user . "' and password=MD5('" . $password . "')";

        $result = $CI->db->query($query)->result();

        if (sizeof($result) > 0) {

            $username = $result[0]->username;

            $userdata = [

                "islogin" => true,

                "username" => $username

            ];

            $CI->session->set_userdata($userdata);

            return 1;

        } else {

            return -1;

        }

    }

    function register($userInfo)
    {

        $CI =& get_instance();

        $CI->load->library("session");

        $CI->load->database();

        //check user duplication

        $username = $userInfo["username"];

        $email = $userInfo["email"];


        $userInfo["date"] = date('Y-m-d h:i:s', time());

        $query_email = $CI->db->query("SELECT email FROM tbl_user

                           WHERE email = '$email' limit 1");

        $query_userid = $CI->db->query("SELECT username FROM tbl_user

                           WHERE username = '$username' limit 1");

        return (($query_email->num_rows() != 0) || ($query_userid->num_rows() != 0)) ? 0 : $this->db->insert('tbl_user', $userInfo);

    }

    function cleanIp($time)
    {

        $CI =& get_instance();

        $CI->load->library("session");

        $CI->load->database();

        $sql = "DELETE FROM tbl_ip WHERE exp_time < '$time'";

        $CI->db->query($sql);

        return "1";

    }

    function checkIp($ip)
    {

        $CI =& get_instance();

        $CI->load->library("session");

        $CI->load->database();

        $time = time();

        $sql = "SELECT * FROM tbl_ip WHERE ip = '$ip' and exp_time > $time";

        $result = $CI->db->query($sql)->result();

        return count($result);

    }

    function insertIp($ip, $name, $email, $phone)
    {

        $exp_time = time() + 60 * 60 * 24;

        $data = [

            "ip" => $ip,

            "name" => $name,

            "email" => $email,

            "phone" => $phone,

            "exp_time" => $exp_time

        ];

        $CI =& get_instance();

        $CI->load->library("session");

        $CI->load->database();

        $result = $this->save("tbl_ip", $data);

        return $result;

    }

    function insert_data($data)
    {

        $CI =& get_instance();

        $CI->load->library("session");

        $CI->load->database();


        $cate_array = explode(",", $data["cate_ids"]);

        $voke_orders = explode(",", $data["voke_orders"]);


        $voker = $data["voker_id"];


        //initialize tbl_artist

        $init_artist = "DELETE FROM tbl_artist where voker_id = '$voker'";

        $CI->db->query($init_artist);


        for ($i = 0; $i < count($cate_array); $i++) {

            $cate_item = $cate_array[$i];

            $order_item = $voke_orders[$i];

            $data = [

                "category" => $cate_item,

                "voke_order" => $order_item,

                "voker_id" => $voker

            ];

            $this->save("tbl_artist", $data);

        }


        return true;

    }

    function add_categories($datas)
    {

        $cate_name = $datas["cat_name"];

        //initialize category

        $data = [
            "category_name" => $cate_name,
            "uid"           => $this->generateRandomString()
        ];

        $this->save("tbl_category", $data);

        return true;

    }

    function del_categories($id)
    {

        $this->delete("tbl_category", $id, "id");

        return true;

    }

    function save_categories($datas)
    {
        $cate_id = $datas["cate_id"];
        $cate_name = $datas["cate_name"];
        $que_txt = $datas["que_txt"];
        $description = $datas["description"];
        $allowed_choices = $datas["allowed_choices"];
        $voke_names = $datas["voke_names"];
        $voke_orders = $datas["voke_orders"];
        $thumbnails = $datas["thumbnails"];
        $thumbnail_urls = $datas["thumbnail_urls"];
        $voke_order_array = explode(",", $voke_orders);
        $voke_name_array = explode(",", $voke_names);
        $thumbnails_array = explode(",", $thumbnails);
        $thumbnail_urls_array = explode(",", $thumbnail_urls);

        //initialize category
        $data = [
            "category_name"   => $cate_name,
            "que_txt"         => $que_txt,
            "description"     => $description,
            "allowed_choices" => $allowed_choices
        ];

        $this->update("tbl_category", $data, $cate_id, "id");
        //delete from tbl_voke
        $CI =& get_instance();
        $CI->load->library("session");
        $CI->load->database();

        $query_dele = "delete from tbl_voke where category_id = '$cate_id'";
        $CI->db->query($query_dele);
        for ($i = 0; $i < count($voke_order_array); $i++) {
            $voke = $voke_name_array[$i];
            $order = $voke_order_array[$i];
            $thumb = !empty($thumbnails_array[$i]) ? $thumbnails_array[$i] : null;
            $thumb_url = !empty($thumbnail_urls_array[$i]) ? $thumbnail_urls_array[$i] : null;
            $data = [
                "category_id"   => $cate_id,
                "voke_name"     => $voke,
                "voke_order"    => $order,
                "thumbnail"     => $thumb,
                "thumbnail_url" => $thumb_url
            ];
            $this->save("tbl_voke", $data);
        }
        return true;
    }

    function generateRandomString($length = 25)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}

?>