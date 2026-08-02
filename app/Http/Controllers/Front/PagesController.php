<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $services = Service::where('is_featured', 1)->latest()->take(8)->get();
        if ($services->isEmpty()) {
            $services = Service::latest()->take(8)->get();
        }
        $blogs = \Illuminate\Support\Facades\Cache::remember('home_recent_blogs', 60, function () {
            return Blog::with(['category:id,name'])->select('id', 'slug', 'title', 'excerpt', 'image', 'created_at', 'category_id')->latest()->take(10)->get();
        });
        $testimonials = \App\Models\Testimonial::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $categories = Category::withCount('services')->get();
        
        $faqs = \App\Models\Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        
        return view('front.home', compact('services','blogs','testimonials', 'categories', 'faqs'));
    }

    public function about()
    {
        $categories = Category::withCount('services')->limit(10)->get();
        return view('front.about',compact('categories'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function privacyPolicy()
    {
        return view('front.privacy-policy');
    }

    public function termsConditions()
    {
        return view('front.terms-conditions');
    }

    public function cookiePolicy()
    {
        return view('front.cookie-policy');
    }

    public function serviceDelivery()
    {
        return view('front.service-delivery');
    }

    public function login()
    {
        return view('front.login');
    }

    public function register()
    {
        return view('front.register');
    }

    public function blogs()
    {
        $blogs = Blog::with(['category'])->paginate(9);

        return view('front.blogs',compact('blogs'));
    }

    public function singleBlog(Blog $blog)
    {
        $blog->load('category');

        $blogs = Blog::latest()->where('category_id',$blog->category_id)
        ->where('id','<>',$blog->id)
        ->take(3)->get();

        return view('front.single-blog',compact('blog','blogs'));
    }

    public function services(Request $request)
    {
        $services = Service::query();

        if($request->filled('area_id')){
            $services->whereHas('areas',function ($services) use ($request){
                $services->where('id',$request->query('area_id'));
            });
        }

        if($request->filled('category_id')){
            $services->whereHas('category',function($services) use ($request){
                $services->where('id',$request->query('category_id'));
            });
        }

        return view('front.services',[
            'services'                  =>$services->paginate(9),
            'areas'                     =>Area::select('id','name')->get(),
            'categories'                =>Category::select('id','name')->get(),
        ]);
    }

    public function faq()
    {
        $faqs = \App\Models\Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        return view('front.faqs', compact('faqs'));
    }

    public function serviceDetails(Service $service)
    {
        $service->load([
            'areas','category',
        ]);

        return view('front.single-service',compact('service'));
    }

    public function forgot()
    {
        return view('front.forgot');
    }
}
