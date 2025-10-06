<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;
use App\Page;
use Image;
use App\Mail\NewsletterConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterSubscribedAdmin;
use App\Mail\InquiryReceived;
use App\Mail\ThankYouMail;


class HomeController extends Controller
{
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // use Helper;

    public function __construct()
    {
        //$this->middleware('auth');


        $logo = imagetable::select('img_path')
            ->where('table_name', '=', 'logo')
            ->first();
            
        $favicon = imagetable::select('img_path')
            ->where('table_name', '=', 'favicon')
            ->first();

        View()->share('logo', $logo);
        View()->share('favicon', $favicon);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')
            ->leftJoin('product_imagess', 'products.id', '=', 'product_imagess.product_id')
            ->select('products.*', 'product_imagess.image as additional_image')
            ->get();
        $testimonial = DB::table('testimonials')->get();

        $company_email = DB::table('m_flag')->where('id', 1)->first();
        $facebook = DB::table('m_flag')->where('id', 2)->first();
        $instagram = DB::table('m_flag')->where('id', 3)->first();
        $linkedin = DB::table('m_flag')->where('id', 4)->first();

        // dd($products);

        $legend_wanhu = DB::table('products')
            ->leftJoin('product_imagess', 'products.id', '=', 'product_imagess.product_id')
            ->where('products.id', 17)
            ->select('products.*', 'product_imagess.image as additional_image')
            ->first();

        $macabee_brothers = DB::table('products')
            ->leftJoin('product_imagess', 'products.id', '=', 'product_imagess.product_id')
            ->where('products.id', 19)
            ->select('products.*', 'product_imagess.image as additional_image')
            ->first();

        $farmer_dell_jezebell = DB::table('products')
            ->leftJoin('product_imagess', 'products.id', '=', 'product_imagess.product_id')
            ->where('products.id', 20)
            ->select('products.*', 'product_imagess.image as additional_image')
            ->first();

        $the_crossing = DB::table('products')
            ->leftJoin('product_imagess', 'products.id', '=', 'product_imagess.product_id')
            ->where('products.id', 21)
            ->select('products.*', 'product_imagess.image as additional_image')
            ->first();


        // dd($legend_wanhu);

        return view('welcome', compact('products', 'testimonial', 'facebook', 'instagram', 'linkedin', 'company_email', 'legend_wanhu', 'macabee_brothers', 'farmer_dell_jezebell', 'the_crossing'));
    }

    public function legend_wanhu()
    {
        $product = DB::table('products')
            ->leftJoin('product_imagess', 'products.id', '=', 'product_imagess.product_id')
            ->where('products.id', 17)
            ->select('products.*', 'product_imagess.image as additional_image')
            ->first();
        // dd($product->product_title);

        return view('legend_wanhu', compact('product'));
    }

    public function macabee_brothers()
    {
        $product = DB::table('products')
            ->leftJoin('product_imagess', 'products.id', '=', 'product_imagess.product_id')
            ->where('products.id', 19)
            ->select('products.*', 'product_imagess.image as additional_image')
            ->first();

        return view('macabee_brothers', compact('product'));
    }

    public function farmer_dell_jezebell()
    {
        $product = DB::table('products')
            ->leftJoin('product_imagess', 'products.id', '=', 'product_imagess.product_id')
            ->where('products.id', 20)
            ->select('products.*', 'product_imagess.image as additional_image')
            ->first();

        return view('farmer_dell_jezebell', compact('product'));
    }

    public function the_crossing()
    {
        $product = DB::table('products')
            ->leftJoin('product_imagess', 'products.id', '=', 'product_imagess.product_id')
            ->where('products.id', 21)
            ->select('products.*', 'product_imagess.image as additional_image')
            ->first();

        return view('the_crossing', compact('product'));
    }



    public function about()
    {
        return view('about');
    }

    // public function blogs()
    // {
    //    return view('blogs');
    // }

    public function contact()
    {
        return view('contact');
    }

    public function product_detail($id)
    {
        $product = DB::table('products')->where('id', $id)->get();
        // dd($product);
        // dd($product);
        return view('product-detail', compact('product'));
    }


    public function newsletterSubmit(Request $request)
    {
        $request->validate([
            'newsletter_email' => 'required|email'
        ]);

        $is_email = newsletter::where('newsletter_email', $request->newsletter_email)->count();

        if ($is_email == 0) {
            $inquiry = new newsletter;
            $inquiry->newsletter_email = $request->newsletter_email;
            $inquiry->save();


            Mail::to('mikehuckabee42@gmail.com')->send(new NewsletterSubscribedAdmin($request->newsletter_email));
            sleep(10);
            Mail::to($request->newsletter_email)->send(new NewsletterConfirmation($request->newsletter_email));



            return response()->json([
                'message' => 'Thank you for subscribing. A confirmation email has been sent!',
                'status' => true
            ]);
        } else {
            return response()->json([
                'message' => 'Email already exists',
                'status' => false
            ]);
        }
    }

    public function inquiry(Request $request)
    {
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'notes' => 'required|string',
        ]);

        $inquiry = Inquiry::create($request->all());

        try {
            Mail::to('mikehuckabee42@gmail.com')->send(new InquiryReceived($inquiry));
            sleep(3);
            Mail::to($inquiry->email)->send(new ThankYouMail($inquiry));

            return response()->json([
                'status' => 'success',
                'message' => 'Your inquiry has been submitted successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }
}
