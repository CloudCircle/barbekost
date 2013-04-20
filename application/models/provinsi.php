<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Provinsi extends DataMapper  {

    var $table = 'provinsi';
    public $has_many = array(
        'kota' 
    );   

}