<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index() 
	{
		$lessons = ["My First Lesson", 'My Second Lesson', 'My Third Lesson'];

		return view('home', compact('lessons'));
	}

	public function about() 
	{
		return view('about');
	}
}
