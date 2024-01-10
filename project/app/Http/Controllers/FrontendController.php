<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Bible;
use App\Models\Helio;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Generalsetting;
use App\Models\Page;
use App\Models\Team;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $articles = Blog::orderBy('id', 'desc')->get();
        $videos = Video::orderBy('id', 'desc')->get();
        $partners  =Team::orderBy('id', 'desc')->first();
        return view('frontend.index', compact('articles', 'videos','partners'));
    }

    public function stripeCharge(Request $request){
        $gs = Generalsetting::findOrFail(1);

        \Stripe\Stripe::setApiKey($gs->header_text);


        $session = \Stripe\Checkout\Session::create([
            "line_items" => [
                [
                    "quantity" => 1,
                    "price_data" => [
                        "currency" => 'usd',
                        "unit_amount" =>$request->amount*100,
                        "product_data" => [
                            "name" => 'Donation'
                        ]
                    ]
                ]
                ],
            'mode' => 'payment',
            "locale" => "auto",
            'success_url' => route('checkout.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('checkout.cancel', [], true),
          ]);
          return redirect($session->url);


    }

    public function success(Request $request)
    {

       
        $gs= Generalsetting::first();
        
        $sessionId = $request->get('session_id');

        try{
            
            $session = \Stripe\Checkout\Session::retrieve($sessionId);

        
            if (!$session) {
                throw new NotFoundHttpException;
            }
          
          

            if ($session->payment_status == 'paid'  && $session->status=='complete') {

                return redirect()->route('donate')->with('success', 'Payment completed successfully !');
            } else {
                return redirect()->route('donate')->with('unsuccess', 'Payment failed !');
                
               
            }

        }catch (Exception $e){
            return back()->with('unsuccess', $e->getMessage());
        }

    }

    public function cancel()
    {
        return redirect()->route('donate')->with('unsuccess', 'Payment failed !');
    }

    public function donate()
    {
        return view('frontend.donate');
    }

    public function blog()
    {
        $blogs = Blog::orderBy('id', 'desc')
        ->whereHas('category', function ($q) {
            $q->where('status', 1)->when(request('category'), function ($cat) {
                return $cat->where('slug', request('category'));
            });
        })
        ->paginate(6);
        
        $bcategory = BlogCategory::orderBy('id', 'desc')->get();
        return view('frontend.blog', compact('blogs', 'bcategory'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('frontend.blog-details', compact('blog'));
    }

    public function video(){

        $videos = Video::orderBy('id', 'desc')->get();
        $chunk = array_chunk($videos->toArray(), 2);
       

        $first= [];
        $second = [];
        
        foreach ($chunk as  $key=>$value) {
           if($key == 0){
            $first = $value;
           }
           else{
            $second = $value;
           }
        }

        $singlevideo = Video::orderBy('id', 'desc')->latest()->first();
        return view('frontend.video',compact('first','singlevideo','second'));
    }
    
    
    public function heliopolis(){
        $photos = Helio::orderBy('id','desc')->where('is_video',0)->get();
        $videos = Helio::orderBy('id','desc')->where('is_video',1)->get();
        return view('frontend.helios',compact('photos','videos'));
    }

    public function videoDetails($slug){
        $video = Video::where('slug',$slug)->first();
        return view('frontend.video-details',compact('video'));
    }

    public function partner(){
        $teams = Team::orderBy('id', 'desc')->get();
        return view('frontend.partner',compact('teams'));
    }

    public function page($slug){
        $page = Page::where('slug',$slug)->first();

        return view('frontend.page',compact('page'));
    }

    public function bible($id){
       
        $bibles = Bible::where('genesis',$id)->orderBy('id','DESC')->get();

        // if request json 
        if(request()->ajax()){
          
            return response()->json($bibles);
        }
        else{
            return view('frontend.bible',compact('bibles','id'));
        }
      
    }
    
    

    public function about(){
        $about = About::first();
        
        return view('frontend.about',compact('about'));
    }
}
