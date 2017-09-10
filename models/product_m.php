<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductModel extends DB {
	public function __construct(){
		parent::__construct();
	}
	protected $table = "products";

}

