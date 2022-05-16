<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class sales extends Sximo  {
	
	protected $table = 'bookings';
	protected $primaryKey = 'ID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT bookings.* FROM bookings  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE bookings.ID IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
