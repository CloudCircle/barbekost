<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kota extends DataMapper  {

    var $table = 'kota';
    
    public $has_one = array(
    	'provinsi'
    );
    

 }