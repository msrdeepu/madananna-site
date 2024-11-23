<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\Post;
use App\Models\Page;
use App\Models\Subcategory;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        
        $blogs = Post::where('status', 1)->paginate(6);
        
        return view('user.home', compact("blogs"));
    }
    
    public function allquizzes()
    {
        
        $qyizzes = Quiz::where('status', 1)->paginate(6);
        
        return view('user.quizzes', compact('qyizzes'));
    }
    
    public function frontpage($slug)
    {
        $data = Page::where('slug', $slug)->first();
        
        //dd($data);
        
        return view('front.pageview', compact('data'));
    }
    
    public function readpost($slug)
    {
        $postdata = Post::where('slug', $slug)->first();
        
         if ($postdata) {
       
            $postdata->increment('views');
        }
        
        //dd($postdata);
        
        return view('user.postview', compact("postdata"));
    }
}
