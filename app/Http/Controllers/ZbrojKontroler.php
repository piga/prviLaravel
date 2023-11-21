<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;

class ZbrojKontroler extends Controller
{
	public function add()
	{
		$sum = 7+9;
		return view("sum", ["sum"=>$sum]);
	}
}

?>
