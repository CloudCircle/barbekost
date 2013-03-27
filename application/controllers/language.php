<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller {

	function Language(){
		parent::__construct();
	}

	function changeLanguage($code='en') {
	  $this->config->set_item('language', $code);
	  $this->session->set_userdata('language',$code);
	 redirect(site_url());
	}
}