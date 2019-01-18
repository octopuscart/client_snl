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
        $foldertexture = ['SF46019.jpg', 'SF46021.jpg', 'SF46022.jpg', 'SF47008.jpg', 'SF47031.jpg', 'SF47032.jpg', 
            'SF47034.jpg', 'SF47035.jpg', 'SF47036.jpg', 'SF47037.jpg', 'SF47038.jpg', 'SF47039.jpg', 'SF47040.jpg',
            'SF47041.jpg', 'SF47043.jpg', 'SF47044.jpg', 'SF47045.jpg', 'SF47046.jpg', 'SF47047.jpg', 'SF47048.jpg',
            'SF47049.jpg', 'SF47051.jpg', 'SF47052.jpg', 'SF47053.jpg', 'SF47057.jpg', 'SF47059.jpg', 'SF47060.jpg', 
            'SF47063.jpg', 'SF47064.jpg', 'SF47066.jpg', 'SF47067.jpg', 'SF47068.jpg', 'SF47069.jpg', 'SF47070.jpg',
            'SF47071.jpg', 'SF47072.jpg', 'SF47073.jpg', 'SF47074.jpg', 'SF47075.jpg', 'SF47076.jpg', 'SF47077.jpg', 
            'SF47078.jpg', 'SF47079.jpg', 'SF47080.jpg', 'SF47081.jpg', 'SF47082.jpg', 'SF47083.jpg', 'SF47084.jpg', 
            'SF47085.jpg', 'SF47101.jpg', 'SF47103.jpg', 'SF47104.jpg', 'SF47105.jpg', 'SF47106.jpg', 'SF47107.jpg', 
            'SF47108.jpg', 'SF47109.jpg', 'SF47110.jpg', 'SF47111.jpg', 'SF47112.jpg', 'SF47113.jpg', 'SF47114.jpg', 
            'SF47115.jpg', 'SF47116.jpg', 'SF47117.jpg', 'SF47118.jpg', 'SF47119.jpg', 'SF47120.jpg', 'SF47121.jpg', 
            'SF47122.jpg', 'SF47123.jpg', 'SF47124.jpg', 'SF47125.jpg', 'SF47126.jpg', 'SF47127.jpg', 'SF47128.jpg', 
            'SF47129.jpg', 'SF47130.jpg', 'SF47131.jpg', 'SF47132.jpg', 'SF47133.jpg', 'SF47134.jpg', 'SF47135.jpg', 
            'SF47136.jpg', 'SF47137.jpg', 'SF47138.jpg', 'SF47139.jpg', 'SF47140.jpg', 'SF47141.jpg', 'SF47142.jpg', 
            'SF47144.jpg', 'SF47145.jpg', 'SF47146.jpg', 'SF47147.jpg', 'SF47148.jpg', 'SF47149.jpg', 'SF47150.jpg', 
            'SF47151.jpg', 'SF47153.jpg', 'SF47154.jpg', 'SF47155.jpg', 'SF47156.jpg', 'SF47157.jpg', 'SF57026.jpg', 
            'SF57178.jpg', 'SF57179.jpg', 'SF57210.jpg', 'SF57249.jpg', 'SF57251.jpg', 'SF57253.jpg', 'SFE5801.jpg', 
            'SFE5805.jpg', 'SFE5811.jpg', 'SFE5820.jpg', 'SFE5825.jpg', 'SFE5826.jpg', 'SFE5827.jpg', 'SFE5831.jpg', 
            'SFE5846.jpg', 'SFE5913.jpg', 'SFE5915.jpg', 'SFE5916.jpg', 'SFE5918.jpg', 'SFE5919.jpg', 'SFE5925.jpg', 
            'SFE5926.jpg', 'SFE5927.jpg', 'SFE5928.jpg', 'SFE5929.jpg', 'SFE5930.jpg', 'SFE5931.jpg', 'SFE5951.jpg', 
            'SFE5952.jpg', 'SFE5953.jpg', 'SFE5955.jpg', 'SFE5956.jpg', 'SFE5958.jpg', 'SFE5959.jpg', 'SFE5961.jpg', 
            'SFE9601.jpg', 'SFE9602.jpg', 'SFE9603.jpg', 'SFE9604.jpg', 'SFE9605.jpg', 'SFE9606.jpg', 'SFE9607.jpg', 
            'SFE9608.jpg', 'SFE9609.jpg', 'SFE9610.jpg', 'SFE9611.jpg', 'SFE9612.jpg', 'SFE9613.jpg', 'SFE9614.jpg', 
            'SFE9615.jpg', 'SFE9616.jpg', 'SFE9906.jpg', 'SFE9911.jpg', 'SFE9913.jpg', 'SFE9914.jpg', 'SFE9915.jpg',
            'SFE9917.jpg', 'SFE9918.jpg', 'SFE9920.jpg', 'SFE9923.jpg', 'SFE9924.jpg', 'SFE9925.jpg', 'SFE9926.jpg', 
            'SFE9928.jpg', 'SFE9929.jpg', 'SFE9930.jpg', 'SFE9931.jpg', 'SFE9932.jpg', 'SFE9933.jpg', 'SFE9934.jpg', 
            'SFE9935.jpg', 'SFE9936.jpg', 'SFE9937.jpg', 'SFE9938.jpg', 'SFE9939.jpg', 'SFE9940.jpg'];


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
       
        $folderstrip = ['SF4713.jpg', 'SF4714.jpg', 'SF4715.jpg', 'SF4716.jpg', 'SF4717.jpg', 
            'SF4718.jpg', 'SF4739.jpg', 'SF4740.jpg', 'SF4741.jpg', 'SF4743.jpg', 'SF4744.jpg',
            'SF4745.jpg', 'SF4746.jpg', 'SF4747.jpg', 'SF4749.jpg', 'SF4751.jpg', 'SF4752.jpg', 
            'SF4753.jpg', 'SF4754.jpg', 'SF4763.jpg', 'SF4768.jpg', 'SF4769.jpg', 'SF4771.jpg', 
            'SF4772.jpg', 'SF4773.jpg', 'SF4774.jpg', 'SF4775.jpg', 'SF4776.jpg', 'SF4777.jpg', 
            'SF4778.jpg', 'SF4779.jpg', 'SF4780.jpg', 'SF4781.jpg', 'SF4784.jpg', 'SF4785.jpg', 
            'SF4786.jpg', 'SF4787.jpg', 'SF4788.jpg', 'SF4789.jpg', 'SF4790.jpg', 'SF4791.jpg',
            'SF4792.jpg', 'SF4796.jpg', 'SF4797.jpg', 'SF4799.jpg', 'SF4800.jpg', 'SF4801.jpg', 
            'SF4802.jpg', 'SF4803.jpg', 'SF4804.jpg', 'SF4805.jpg', 'SF4806.jpg', 'SF4807.jpg', 
            'SF4808.jpg', 'SF4809.jpg', 'SF4810.jpg', 'SF4811.jpg', 'SF4812.jpg', 'SF4813.jpg', 
            'SF4814.jpg', 'SF4815.jpg', 'SF4816.jpg'];
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

}
