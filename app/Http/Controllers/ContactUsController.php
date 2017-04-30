<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
	public function index() {
		//return "ContactUsController.Index";
		return view("contact.index");
	}

	public function store() {
		//dd( request() -> all() );
		/*
		 "name" => "Liu"
  		"surname" => "Tzuhung"
  		"email" => "xerg0715@gmail.com"
  		"phone" => "0928751300"
  		"message" => "Message"
  		*/
  		$newContact = new Contact();
  		$newContact->firstname = request() -> get("name");
  		$newContact->lastname = request() -> get("surname");
  		$newContact->email = request() -> get("email");
  		$newContact->phone = request()->has("phone") ?request()->get("phone"): "";
  		$newContact->message = request()->has("message") ? request() -> get("message"): "";
  		$newContact->save();

	}
}
