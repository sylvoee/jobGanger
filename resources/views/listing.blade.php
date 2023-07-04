@extends('layout')

@section('content')
 
<div id="services" class="services section">
   <div class="container">
     <div class="row">
       <div class="col-lg-8 offset-lg-2">
         <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
           <h4>Amazing <em>Services &amp; Features</em> for you</h4>
           <img src="assets/images/heading-line-dec.png" alt="">
           <div class="filter">
            <input class="form-control" type="text" placeholder="type your kind of job">
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="container">
     <div class="row">

  <!-- echo var_dump($listing) ; -->
  @if(count($listing) == 0) 
  <p> No Listing <p>
 @endif  

      @foreach($listing as $record)

       <div class="col-lg-3">
         <div class="service-item first-service">
           <h4><i class="fa fa-briefcase text-info"></i></h4>
           <h4><a href= "listing/{{$record['id']}} ">  {{$record['title'] }} </a></h4>
           <div class="text-button">
             <a href="listing/{{$record['id']}}">Read More <i class="fa fa-arrow-right"></i></a>
           </div>
         </div>
       </div>
       @endforeach  
       

     </div>
   </div>
 </div>

 @endsection
