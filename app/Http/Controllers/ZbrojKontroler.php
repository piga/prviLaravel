<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZbrojKontroler extends Controller
{
	public function add()
	{
		$sum = 7+9;
		return view("sum", ["sum"=>$sum]);
	}
	public function prikazi()
	{
		return view("form", []);
	}
	public function zbroji(Request $r)
	{
		$br1 = $r->input("br1");
		$br2 = $r->input("br2");
		$sum = $br1+$br2;
		return view("sum", ["sum"=>$sum]);
	}
}

?>
