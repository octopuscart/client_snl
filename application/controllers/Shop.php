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

    public function leather_jacket($gender) {
        $jacketdata = array(
            "Men" => [ '11.jpg', '15.jpg', '17.jpg', '2.jpg', '20.jpg', '23.jpg', '25.jpg', '26.jpg',
                '27.jpg', '29.jpg', '3.jpg', '31.jpg', '32.jpg', '33.jpg', '35.jpg', '36.jpg', '37.jpg', '38.jpg',
                '39.jpg', '4.jpg', '40.jpg', '9.jpg'],
            "Women" => ['10.jpg', '13.jpg', '14.jpg', '16.jpg', '18.jpg',
                '24.jpg', '28.jpg', '30.jpg', '34.jpg', '5.jpg', '6.jpg', '8.jpg'],
        );
        switch ($gender) {
            case "men":
                $data["folder"] = "Men";
                $data["title"] = "Men";
                $data["prefix"] = "SFLJM";
                $data["imagearray"] = $jacketdata["Men"];
                break;
            case "women":
                $data["folder"] = "Women";
                $data["prefix"] = "SFLJW";
                $data["title"] = "Women";
                $data["imagearray"] = $jacketdata["Women"];
                break;
            default:
                $data["folder"] = "Men";
                $data["title"] = "Men";
                $data["prefix"] = "SFLJM";
                $data["imagearray"] = $jacketdata["Men"];
        }
        $this->load->view('Pages/lookbook', $data);
    }

    public function lookbook($gender) {
        $jacketdata = array(
            "Lookbook" => [
                '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg',
                '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg',
                '11.jpg', '12.jpg', '13.jpg', '14.jpg', '15.jpg',
                '16.jpg', '17.jpg', '18.jpg', '19.jpg', '20.jpg'
            ],
        );

        $data["folder"] = "Lookbook";
        $data["prefix"] = "SFL";
        $data["title"] = "Look Book";
        $data["imagearray"] = $jacketdata["Lookbook"];

        $this->load->view('Pages/lookbook', $data);
    }

}
