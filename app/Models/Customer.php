<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class customer extends Sximo  {
	
	protected $table = 'customer';
	protected $primaryKey = 'ID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT customer.* FROM customer  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE customer.ID IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
