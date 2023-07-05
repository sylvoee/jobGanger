<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing ;

 class ListingController extends Controller
{
    // Home Listing
    public function index(){
        return view('Listings.index', [
        'listing' => Listing::all() ,
        'title'=> 'Job Listing'
         ]) ;

        
    }

    // Show all listings

    public function show($id){
        $result = Listing::find($id) ;  
        return view('Listings.show', ['listing' => $result, 'title' =>$result['title'] ]);
    }


}
