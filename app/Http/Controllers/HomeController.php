<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Career;
use App\Models\ContactUs;
use App\Models\Gallery;
use App\Models\OurService;
use App\Models\PortFolio;
use App\Models\Testimonial;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function Index()
    {
        $testmonials=Testimonial::all();
        $datas=OurService::all();
        $blogs = Blog::all();
        $portfolios=PortFolio::get('logo');
       
        return view('index',compact('datas','blogs','portfolios','testmonials'));
    }

    public function AboutUs()
    {
        $datas = AboutUs::all();
        return view('aboutus', compact('datas'));
    }

    public function Services()
    {
        $datas=OurService::all();
        $works=Work::all();
        return view('services',compact('datas','works'));
    }

    public function Careers()
    {
        $datas=Career::all();
        // $times=Career::orderby('created_at','desc')->limit(5)->get();
        
        return view('careers',compact('datas'));
    }

    public function Blog()
    {
        $datas = Blog::all();

        return view('blog', compact('datas'));
    }

    public function BlogDetail($id)
    {
        $data = Blog::find($id);
        return view('blog_detail', compact('data'));
    }

    public function Gallery()
    {
        $gallery = Gallery::all();

        return view('gallery', compact('gallery'));
    }

    public function ContactUs()
    {
        return view('contactus');
    }

    public function ContactUsSave()
    {
        // request()->validate([
        //     'name'=> 'required',
        //     'email'=> 'required',
        //     'subject'=> 'required',
        //     'comment'=> 'required',
        // ]);

        $user=ContactUs::create([
            'name' => request('name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'message' => request('comment')
        ]);

        Mail::to('muhsinkmhmd@gmail.com')->send(new ContactUsMail($user));
        return redirect()->route('contactus')->with('message', 'message sent successfully!!');
    }

    public function PortFolio()
    {
        $datas = PortFolio::all();
        return view('portfolio', compact('datas'));
    }


    public function Cancelation()
    {
        return view('cancelation');
    }

    public function TermsCondition()
    {
        return view('terms_condition');
    }

    public function PrivacyPolicy()
    {
        return view('privacy_policy');
    }

    public function Support()
    {
        return view('support');
    }
}
