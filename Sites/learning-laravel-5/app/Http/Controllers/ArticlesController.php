<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\HttpResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class ArticlesController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['except' => 'index']);
	}

	public function index()
	{

		$articles = Article::latest('published_at')->published()->get();

		return view('articles.index', compact('articles'));
	}

	public function show($id)
	{

		$article = Article::findOrFail($id);

		return view('articles.show', compact('article'));
	}

	public function create()
	{

		return view('articles.create');
	}

	public function store(Request $request)
	{
}




