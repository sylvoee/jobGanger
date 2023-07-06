<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing ;

 class ListingController extends Controller
{
    // Home Listing
    public function index(){
        $params = request()->tag;
        return view('Listings.index', [
        //   This can also work but not sorted  'listing' => Listing::all() ,   
        'listing' => Listing::latest()->filter(request(['tag']))->get() ,
        'title'=> 'Job Listing'
         ]) ; 
    }


    // Show all listings
    public function show($id){
        $result = Listing::find($id) ;  
        return view('Listings.show', ['listing' => $result, 'title' =>$result['title'] ]);
    }


}
