<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Osoba;

class OsobaController extends Controller
{
	public function form()
	{
		return view("forma_osoba");
	} 
	public function store(Request $r)
	{
		$r->validate([
			"ime"     => "required|string|max:255",
			"prezime" => "required|string|max:255"
		]);
		Osoba::create($r->all());
		return redirect("/form_osoba")->with("success", "Osoba uspješno spremljena.");
	}
	public function show()
	{
		$osobe = Osoba::all();
		return view("show", ["osobe"=>$osobe]);
	}
}
