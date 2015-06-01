<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;

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
  public function store(ArticleRequest $request) {
    $article = new Article($request->all());

    Auth::user()->articles()->save($article);

    return redirect('articles');

  }

  public function edit($id) {
    $article = Article::findOrFail($id);

    return view('articles.edit', compact('article'));
  }

  public function update($id, ArticleRequest $request) {
    $article = Article::findOrFail($id);

    $article->update($request->all());

    return redirect('articles');
  }
}
