<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\articlesRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\article;
use Illuminate\Support\Facades\Gate;

class articlesController extends Controller
{
    //

    public function articlesAll()
    {
        $data = article::all();
        return view('articles.articles', ['data' => $data, 'id_user_auth' => Auth::id()]);
    }

    public function articleCreate()
    {
      
        
        return view('articles.articleCreate');
    }

    public function articleCreateSubmit(articlesRequest $req)
    {
    
        $article = new article();
        $article->nameAutor = $req->input('nameAutors');
        $article->nameArticle = $req->input('nameArticle');
        $article->annotation = $req->input('articleAnnotation');
        $article->content = $req->input('articleContent');
        $article->id_user = Auth::id();
        $article->statusArticle = 0;
        $article->publishedDate = "29.12.2022";

        $article->save();
        
        return redirect()->route('articlesAll')->with('success', "Ваша статья сохранена");
    }

    public function articleView($id) 
    {
   
        $data = DB::table('articles')->find($id);
       
        return view('articles.viewArticle', ['data' => $data]);
    }
    public function articleEdit($id) 
    {
        if (!Gate::allows('ArticleEdit', $id)) 
        {
            return view('articles.errorArticle');
        }

        $data = DB::table('articles')->find($id);
        return view('articles.articleEdit', ['data' => $data]);
    }

    public function articleEditSubmit($id, articlesRequest $req)
    {
        DB::table('articles')
            ->where('id',$id)
            ->update(
                [
                    'nameArticle' => $req->nameArticle,
                    'annotation' => $req->articleAnnotation,
                    'content' => $req->articleContent,
                ]
                );
        $data = article::all();
        return view('articles.articles', ['data' => $data]);
    }

    public function articleDelet($id) {
        $deleted = DB::table('articles')->where('id', '=', $id)->delete();

        $data = article::all();
        return view('articles.articles', ['data' => $data]);
    }
    public function articlePublished($id) {
        $published = DB::table('articles')->where('id', '=', $id)->update([
            'statusArticle' => 1,
        ]);

        $data = article::all();
        return view('articles.articles', ['data' => $data]);
    }
    public function articleUnPublished($id) {
        $unPublished = DB::table('articles')->where('id', '=', $id)->update([
            'statusArticle' => 0,
        ]);

        $data = article::all();
        return view('articles.articles', ['data' => $data]);
    }

    public function articlesForReview() {
        $published = DB::table('articles')->where('statusArticle', '=', 2)->get();
        return view('articles.articles', ['data' => $published]);
    }

    public function articlesInProgress() {
        $published = DB::table('articles')->where('statusArticle', '=', 0)->get();
        return view('articles.articles', ['data' => $published]);
    }

    public function articlesPublished() {
        $published = DB::table('articles')->where('statusArticle', '=', 1)->get();
        return view('articles.articles', ['data' => $published]);
    }

    public function articleUser() {
        $articleUser = DB::table('articles')->where('id_user', '=', Auth::id())->get();
        return view('articles.articles', ['data' => $articleUser]);
    }
}
