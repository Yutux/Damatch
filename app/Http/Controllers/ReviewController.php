<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\users;
use DB;

class ReviewController extends Controller
{
   //a voir tous les articles ajoutés
    public function page()
    {

        $Review =DB::table('reviews')->get();
        
        return view('review_page')->with('Review', $Review);
        
    }

    //afficher chaque article dans une page précise
    
    public function article($prod)
    {   

        $review=Review::where('title', $prod)->first();
        //dump($review);
        return view('review_t')->withprod($review);  


        /*$title= request('title');

        $reviews=Review::select('title', $title)->first();
        dump($reviews);

        return view('review_t', [
            'title' => $title,
        ]);*/
          
    }


    public function index()
    {
        return view('Reviews');
    }
    //creation de l'article
    public function add(Request $request)
    {
       
        

        $reviews = new Review();

        $reviews->title = $request->get('title');
        $reviews->type = $request->get('type');
        $reviews->contenu = $request->get('contenu');
        
        
        $this->validate($request, ['picture'   => 'required|image|mimes:jpeg,png,jpg,gif|max:2048']);
        $Picture = $request->file('picture');
        $new_name = rand() . '.' . $Picture->getClientOriginalExtension();
        $Picture->move(public_path("img"), $new_name);
       
        $reviews->Picture = $new_name;
        $reviews->save();
        flash("review posted!")->success();
        return redirect('/review_page');
    }

}
