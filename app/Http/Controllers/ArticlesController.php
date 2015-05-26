<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller {

  /*
   * Show all published articles.
   *
   * @return articles view
   */
	public function index() {
    $articles = Article::latest()->published()->get();

    return view('articles.index', compact('articles'));
  }

  /*
   * Show a specific articles with id
   *
   * @return article page view
   */
  public function show($id) {
    $article = Article::findOrFail($id);

    return view('articles.show', compact('article'));
  }

  /*
   * Form to create an article.
   *
   * @return create form page
   */
  public function create() {
    return view('articles.create');
  }

  /*
   * Handle POST requests from the create form. Saves an article in the db.
   *
   * @return Redirect to article listings page.
   */
  public function store(CreateArticleRequest $request) {
    Article::create($request->all());

    return redirect('articles');

  }

}
