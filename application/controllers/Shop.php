<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $product_home_slider_bottom = $this->Product_model->product_home_slider_bottom();
        $categories = $this->Product_model->productListCategories(0);
        $data["categories"] = $categories;
        $data["product_home_slider_bottom"] = $product_home_slider_bottom;
        $customarray = [1, 2];
        $this->db->where_in('id', $customarray);
        $query = $this->db->get('custome_items');
        $customeitem = $query->result();

        $data['shirtcustome'] = $customeitem[0];
        $data['suitcustome'] = $customeitem[1];

        $query = $this->db->get('sliders');
        $data['sliders'] = $query->result();

        $this->load->view('home', $data);
    }

    public function contactus() {
        $data['checksent'] = '';
        $this->load->view('Pages/contactus', $data);
    }

    public function aboutus() {
        $this->load->view('Pages/aboutus');
    }

    public function testinsert() {
        $foldersstrip = ['HL_41007_72.jpg', 'HL_41009_72.jpg', 'HL_41043_72.jpg', 'HL_41044_72.jpg', 'HL_41045_72.jpg', 'HL_41094_72.jpg', 'HL_51045_64.jpg', 'HL_51047_64.jpg', 'HL_51048_64.jpg', 'HL_51077_64.jpg', 'HL_51082_64.jpg', 'HL_51143_64.jpg', 'HL_51145_64.jpg', 'HL_51146_64.jpg', 'HL_51147_64.jpg', 'HL_51148_64.jpg', 'HL_51156_64.jpg', 'HL_51157_64.jpg', 'HL_51158_64.jpg', 'HL_71005_56.jpg', 'HL_71007_56.jpg', 'HL_71008_56.jpg', 'HL_71009_56.jpg', 'HL_71010_56.jpg', 'HL_71058_56.jpg', 'HL_71059_56.jpg', 'HL_71087_56.jpg', 'HL_71088_56.jpg', 'HL_71093_56.jpg', 'HL_71094_56.jpg', 'HL_71098_56.jpg', 'HL_71099_56.jpg', 'HL_71122_56.jpg', 'HL_71124_56.jpg', 'HL_71126_56.jpg', 'HL_71241_56.jpg', 'HL_71242_56.jpg', 'HL_71299_56.jpg', 'HL_71300_56.jpg', 'HL_71301_56.jpg', 'HL_71303_56.jpg'];
        $foldercheck = ['HL_42002_72.jpg', 'HL_42004_72.jpg', 'HL_42004_72.png', 'HL_42009_72.jpg', 'HL_42023_72.jpg', 'HL_42031_72.jpg', 'HL_42032_72.jpg', 'HL_42033_72.jpg', 'HL_42034_72.jpg', 'HL_42035_72.jpg', 'HL_42036_72.jpg', 'HL_42037_72.jpg', 'HL_42038_72.jpg', 'HL_42039_72.jpg', 'HL_42040_56.jpg', 'HL_42040_72.jpg', 'HL_42041_72.jpg', 'HL_42042_72.jpg', 'HL_42067_72.jpg', 'HL_42068_72.jpg', 'HL_42069_72.jpg', 'HL_42071_72.jpg', 'HL_72104_56.jpg', 'HL_72107_56.jpg', 'HL_72108_56.jpg', 'HL_72119_56.jpg', 'HL_72120_56.jpg', 'HL_72121_56.jpg', 'HL_72124_56.jpg', 'HL_72197_56.jpg', 'HL_72198_56.jpg', 'HL_72199_56.jpg', 'HL_72200_56.jpg', 'HL_72211_56.jpg', 'HL_72214_56.jpg', 'HL_72215_56.jpg', 'HL_72217_56.jpg', 'HL_72219_56.jpg', 'HL_72221_56.jpg', 'HL_72222_56.jpg', 'HL_72275_56.jpg', 'HL_72276_56.jpg', 'HL_72277_56.jpg', 'HL_72281_56.jpg', 'HL_72282_56.jpg'];
        $foldersolid = ['HL5600164.jpg', 'HL5601064.jpg', 'HL5601264.jpg', 'HL5601764.jpg', 'HL5601864.jpg', 'HL5602064.jpg', 'HL5602164.jpg', 'HL5602464.jpg', 'HL5602564.jpg', 'HL5602664.jpg', 'HL5603264.jpg', 'HL5603464.jpg', 'HL5603564.jpg', 'HL5702564.jpg', 'HL5702664.jpg'];
        $foldertexture = ['SF618005.jpg', 'SF618006.jpg', 'SF618009.jpg', 'SF618011.jpg', 'SF618012.jpg', 'SF618014.jpg', 'SF618015.jpg', 'SF618023.jpg', 'SF618027.jpg', 'SF618035.jpg', 'SF618036.jpg', 'SF618037.jpg', 'SF618038.jpg', 'SF618039.jpg', 'SF618041.jpg', 'SF618042.jpg', 'SF618044.jpg', 'SF618045.jpg', 'SF618046.jpg', 'SF618047.jpg', 'SF618048.jpg', 'SF618049.jpg', 'SF671017.jpg', 'SF671058.jpg', 'SF671072.jpg', 'SF671083.jpg', 'SF671085.jpg', 'SF671091.jpg', 'SF671093.jpg', 'SF671097.jpg', 'SF671099.jpg', 'SF671106.jpg', 'SF671107.jpg', 'SF671108.jpg', 'SF671109.jpg', 'SF671110.jpg', 'SF671111.jpg', 'SF671113.jpg', 'SF671116.jpg', 'SF671117.jpg', 'SF671118.jpg', 'SF671119.jpg', 'SF671120.jpg', 'SF671121.jpg', 'SF671122.jpg', 'SF671123.jpg', 'SF671125.jpg', 'SF671126.jpg', 'SF671127.jpg', 'SF671128.jpg', 'SF671129.jpg', 'SF671130.jpg', 'SF671131.jpg', 'SF671132.jpg', 'SF671134.jpg', 'SF671138.jpg', 'SF671142.jpg', 'SF671143.jpg', 'SF671144.jpg', 'SF671145.jpg', 'SF671146.jpg', 'SF671152.jpg', 'SF671153.jpg', 'SF671154.jpg', 'SF671155.jpg', 'SF671156.jpg', 'SF671157.jpg', 'SF671158.jpg', 'SF671159.jpg', 'SF671160.jpg', 'SF671161.jpg', 'SF671162.jpg', 'SF671164.jpg', 'SF671166.jpg', 'SF671167.jpg', 'SF671168.jpg', 'SF671170.jpg', 'SF671171.jpg', 'SF671172.jpg', 'SF671301.jpg', 'SF671303.jpg', 'SF671304.jpg', 'SF671305.jpg', 'SF671306.jpg', 'SF671309.jpg', 'SF671311.jpg', 'SF671312.jpg', 'SF671313.jpg', 'SF671314.jpg', 'SF671315.jpg', 'SF671316.jpg', 'SF671317.jpg', 'SF671318.jpg', 'SF671319.jpg', 'SF671320.jpg', 'SF671321.jpg', 'SF671322.jpg', 'SF671323.jpg', 'SF671324.jpg', 'SF671325-.jpg', 'SF671327.jpg', 'SF671328.jpg', 'SF671329.jpg', 'SF671330.jpg', 'SF671331.jpg', 'SF671332.jpg', 'SF671334.jpg', 'SF671335.jpg', 'SF671336.jpg', 'SF671337.jpg', 'SF683002.jpg', 'SF683004.jpg', 'SF683005.jpg', 'SF683006.jpg', 'SF683007.jpg', 'SF683008.jpg', 'SF683009.jpg', 'SF683010.jpg', 'SF683011.jpg', 'SF683013.jpg', 'SF683014.jpg', 'SF683016.jpg', 'SF683017.jpg', 'SF683018.jpg', 'SF683019.jpg', 'SF683020.jpg', 'SF683021.jpg', 'SF683023.jpg', 'SF683024.jpg', 'SF683025.jpg', 'SF683026.jpg', 'SF683027.jpg', 'SF683028.jpg', 'SF683029.jpg', 'SF683030.jpg', 'SF683031.jpg', 'SF683032.jpg', 'SF683033.jpg', 'SF683034.jpg', 'SF683035.jpg', 'SF683038.jpg', 'SF683039.jpg', 'SF683041.jpg', 'SF683043.jpg', 'SF683045.jpg', 'SF683046.jpg', 'SF683047.jpg', 'SF683048.jpg', 'SF683049.jpg', 'SF683050.jpg', 'SF683051.jpg', 'SF683052.jpg', 'SF683055.jpg', 'SF683058.jpg', 'SF683059.jpg', 'SF683060.jpg', 'SF683061.jpg', 'SF683062.jpg', 'SF683063.jpg', 'SF683064.jpg', 'SF683068.jpg', 'SF683069.jpg', 'SF683070.jpg', 'SF683073.jpg', 'SF683074.jpg', 'SF683075.jpg', 'SF683076.jpg', 'SF683077.jpg', 'SF683078.jpg', 'SF683080.jpg', 'SF683081.jpg', 'SF683082.jpg', 'SF683083.jpg', 'SF683084.jpg', 'SF683085.jpg', 'SF683086.jpg', 'SF683087.jpg', 'SF683088.jpg', 'SF683089.jpg', 'SF683090.jpg', 'SF683091.jpg', 'SF683092.jpg', 'SF683093.jpg', 'SF683094.jpg', 'SF683096.jpg', 'SF683097.jpg', 'SF683098.jpg', 'SF683099.jpg', 'SF683100.jpg', 'SF752003.jpg', 'SF752004.jpg', 'SF752005.jpg', 'SF752007.jpg', 'SF752008.jpg', 'SF752015.jpg', 'SF752016.jpg', 'SF752017.jpg', 'SF752018.jpg', 'SF752022.jpg', 'SF752023.jpg', 'SF752024.jpg', 'SF752025.jpg', 'SF752051.jpg', 'SF752052.jpg', 'SF752053.jpg', 'SF752054.jpg', 'SF752055.jpg', 'SF752056.jpg', 'SF752057.jpg', 'SF752058.jpg', 'SF752059.jpg', 'SF752060.jpg', 'SF752061.jpg', 'SF752062.jpg', 'SF752063.jpg', 'SF752064.jpg', 'SF752065.jpg', 'SF752066.jpg', 'SF756016.jpg', 'SF756017.jpg', 'SF756018.jpg', 'SF756043.jpg', 'SF756044.jpg', 'SF756046.jpg', 'SF756048.jpg', 'SF756050.jpg', 'SF756051.jpg', 'SF756052.jpg', 'SF756053.jpg', 'SF756054.jpg', 'SF756056.jpg', 'SF756057.jpg', 'SF756061.jpg', 'SF756062.jpg', 'SF756063.jpg', 'SF756065.jpg', 'SF756066.jpg', 'SF756067.jpg', 'SF756068.jpg', 'SF756076.jpg', 'SF756086.jpg', 'SF756087.jpg', 'SF756088.jpg'];


        foreach ($foldertexture as $key => $value) {
            $folder = $value;
            $foldermain = str_replace(".jpg", "", $folder);
            $titles = explode("_", $folder);


            $title = $foldermain;

            $products = array(
                "category_id" => 42,
                "sku" => $title,
                "category_items_id" => 4,
                "title" => $title,
                "short_description" => "2 Ply 100% Cotton",
                "description" => "2 Ply 100% Cotton",
                "video_link" => "",
                "regular_price" => "95",
                "sale_price" => "0",
                "credit_limit" => "",
                "price" => "95",
                "file_name" => $foldermain . "shirt_model20001.png",
                "file_name1" => $foldermain . "shirt_model10001.png",
                "file_name2" => $foldermain . "fabricx0001.png",
                "file_name3" => "",
                "user_id" => "10",
                "op_date_time" => "",
                "status" => "1",
                "home_slider" => "",
                "home_bottom" => "",
                "keywords" => "",
                "stock_status" => "In Stock",
                "variant_product_of" => "",
                "folder" => $foldermain);
            #$this->db->insert('products', $products);
        }
    }

    public function testinsertsuit() {
        $foldercheck = ['12501.jpg', '12502.jpg', '12503.jpg', '12504.jpg', '12508.jpg', '12509.jpg', '12510.jpg', '12511.jpg', '12512.jpg', '12514.jpg', '12601.jpg', '12602.jpg', '9775.jpg', '9776.jpg', '9777.jpg', '9778.jpg', '9779.jpg', '9780.jpg'];
        $folderchek2 = ['12512.jpg', '12514.jpg', '12601.jpg', '12602.jpg', '12603.jpg', '12604.jpg', '12605.jpg', '12606.jpg', '12611.jpg', '12612.jpg', '12613.jpg', '12615.jpg', '12616.jpg', '12617.jpg', '12618.jpg', '12619.jpg', '12649.jpg', '12650.jpg', '12651.jpg', '12652.jpg', '12653.jpg', '12654.jpg', '12655.jpg', '12656.jpg'];

        $folderstrip = ['SF10057.jpg', 'SF10423.jpg', 'SF10441.jpg', 'SF10750.jpg', 'SF10755.jpg', 'SF10759.jpg', 'SF10760.jpg', 'SF10762.jpg', 'SF11218.jpg', 'SF11222.jpg', 'SF11406.jpg', 'SF11407.jpg', 'SF11553.jpg', 'SF11554.jpg', 'SF11556.jpg', 'SF11557.jpg', 'SF11558.jpg', 'SF11559.jpg', 'SF11562.jpg', 'SF11563.jpg', 'SF11564.jpg', 'SF11566.jpg', 'SF11567.jpg', 'SF11568.jpg', 'SF11569.jpg', 'SF11571.jpg', 'SF11572.jpg', 'SF11573.jpg', 'SF11574.jpg', 'SF11575.jpg', 'SF11576.jpg', 'SF11577.jpg', 'SF11578.jpg', 'SF11580.jpg', 'SF11581.jpg', 'SF12115.jpg', 'SF12116.jpg', 'SF12117.jpg', 'SF12118.jpg', 'SF12119.jpg', 'SF12120.jpg', 'SF12121.jpg', 'SF12122.jpg', 'SF12123.jpg', 'SF12124.jpg', 'SF12125.jpg', 'SF12126.jpg', 'SF12127.jpg', 'SF12128.jpg', 'SF12129.jpg', 'SF12130.jpg', 'SF12131.jpg', 'SF12132.jpg', 'SF12133.jpg', 'SF12134.jpg', 'SF12135.jpg', 'SF12136.jpg', 'SF12137.jpg', 'SF7859.jpg', 'SF9338.jpg'];
        foreach ($folderstrip as $key => $value) {
            $folder = $value;
            $foldermain = str_replace(".jpg", "", $folder);

            if (strpos($folder, '_')) {
                $titles = explode("_", $foldermain);
                $title = "BT" . $titles[1];
            } else {
                $title = "BT" . $foldermain;
            }




            $products = array(
                "category_id" => 43,
                "sku" => $foldermain,
                "title" => $foldermain,
                "category_items_id" => 3,
                "short_description" => "100% Cotton",
                "description" => "100% Cotton",
                "video_link" => "",
                "regular_price" => "800",
                "sale_price" => "0",
                "credit_limit" => "",
                "price" => "800",
                "file_name" => $foldermain . "s1_master_style60001.png",
                "file_name1" => $foldermain . "style_buttons.png",
                "file_name2" => $foldermain . "fabricx0001.png",
                "file_name3" => "",
                "user_id" => "10",
                "op_date_time" => "",
                "status" => "1",
                "home_slider" => "",
                "home_bottom" => "",
                "keywords" => "",
                "stock_status" => "In Stock",
                "variant_product_of" => "",
                "folder" => $foldermain);

            #$this->db->insert('products', $products);
        }
    }

    public function migration() {
        if ($this->db->table_exists('mailchimp_list')) {
            // table exists
        } else {
            $this->db->query('CREATE TABLE IF NOT EXISTS `mailchimp_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` varchar(100) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `datetime` varchar(100) DEFAULT NULL,
  `member_count` varchar(50) NOT NULL,
  `display_index` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;');
        }


        if ($this->db->table_exists('configuration_email')) {
            // table exists
        } else {
            $this->db->query('CREATE TABLE IF NOT EXISTS `configuration_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_type` varchar(200) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `smtp_server` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `smtp_port` varchar(50) NOT NULL,
  `api_key` varchar(512) NOT NULL,
  `api_endpoint` varchar(512) NOT NULL,
  `default` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;');
        }


        if ($this->db->table_exists('mailer_contacts2_check')) {
            // table exists
        } else {
            $this->db->query('CREATE TABLE IF NOT EXISTS `mailer_contacts2_check` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `mailer_contact_id` varchar(50) NOT NULL,
  `status` varchar(500) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1242 ;');
        }


        if ($this->db->table_exists('mailer_contacts')) {
            // table exists
        } else {
            $this->db->query('CREATE TABLE IF NOT EXISTS `mailer_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `mailer_list_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;');
        }

        if ($this->db->table_exists('mailer_list')) {
            // table exists
        } else {
            $this->db->query('CREATE TABLE IF NOT EXISTS `mailer_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` varchar(100) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `datetime` varchar(100) DEFAULT NULL,
  `member_count` varchar(50) NOT NULL,
  `display_index` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;');
        }





        if ($this->db->table_exists('mailer_contacts2')) {
            // table exists
        } else {
            $this->db->query('CREATE TABLE IF NOT EXISTS `mailer_contacts2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `full_name` varchar(200) NOT NULL,
  `mailer_list_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;');
        }


        if ($this->db->table_exists('appointment_list')) {
            // table exists
        } else {
            $this->db->query('CREATE TABLE IF NOT EXISTS `appointment_list` (
  `id` int(122) NOT NULL AUTO_INCREMENT,
  `select_date` varchar(122) NOT NULL,
  `select_time` varchar(122) NOT NULL,
  `first_name` varchar(122) NOT NULL,
  `no_of_person` varchar(30) NOT NULL,
  `last_name` varchar(122) NOT NULL,
  `email` varchar(122) NOT NULL,
  `contact_no` varchar(122) NOT NULL,
  `hotel` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city_state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `referral` varchar(122) NOT NULL,
  `datetime` varchar(122) NOT NULL,
  `appointment_type` varchar(122) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;');
        }


        if ($this->db->field_exists('hotel', 'appointment_list')) {
            // table exists
        } else {
            $this->db->query('ALTER TABLE `appointment_list` ADD `hotel` VARCHAR(200) NOT NULL AFTER `contact_no`, ADD `address` VARCHAR(300) NOT NULL AFTER `hotel`, ADD `city_state` VARCHAR(200) NOT NULL AFTER `address`, ADD `country` VARCHAR(200) NOT NULL AFTER `city_state`;');
        }




        if ($this->db->table_exists('appointment_entry')) {
            // table exists
        } else {
            $this->db->query('CREATE TABLE IF NOT EXISTS `appointment_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` varchar(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city_state` varchar(100) NOT NULL,
  `appointment_type` varchar(50) NOT NULL,
  `hotel` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL,
  `days` varchar(200) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `from_time` varchar(100) NOT NULL,
  `to_time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;');
        }

        if ($this->db->field_exists('display_index', 'category')) {
            // table exists
        } else {
            $this->db->query('ALTER TABLE `category` ADD `display_index` INT NOT NULL AFTER `parent_id`;');
        }

        if ($this->db->field_exists('display_index', 'products ')) {
            // table exists
        } else {
            $this->db->query('ALTER TABLE `products` ADD `display_index` INT NOT NULL AFTER `folder`;');
        }
    }

}
