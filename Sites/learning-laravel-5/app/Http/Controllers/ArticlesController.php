<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

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

		$this->validate($request, ["title" => 'required', 'body' => 'required']);

		Article::create($request->all());

		return redirect('articles');
	}

	public function edit($id)
	{
		$article = Article::findOrFail($id);

		return view('articles.edit', compact('article'));
	}

	public function update($id, ArticleRequest $request)
	{

		$article = Article::findOrFail($id);

		$article->update($request->all());

		// how does it know to return to proper id?
		return redirect('articles');
	}


}





