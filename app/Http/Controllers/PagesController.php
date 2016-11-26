<?php 

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller{

	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout(){
		$Firstname = 'Rocheandley';
		$Lastname = 'Kwidama';
		$Full = $Firstname . " " . $Lastname;
		$Email = "alex@gma.com";
		$data=[];
		$data['email']= $Email;
		$data['fullname']= $Full;
		return view('pages.about')->withData($data);
	}

	public function getContact(){
		return view('pages.contact');
	}



}

