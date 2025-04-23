<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;


class ItemController extends Controller
{



    public function index(request $request)
    {

        return view('welcome');
    }



    public function who_we_are(request $request)
    {
        return view('who-we-are');

    }

    public function contact_us(request $request)
    {
        return view('contact-us');

    }

    public function submit_form(request $request)
    {
        return view('contact-us');

    }


    public function service(request $request)
    {

       $service =  Service::where('id', $request->id)->first();
       $services =  Service::all();

       return view('service', compact('service', 'services'));


    }






}









