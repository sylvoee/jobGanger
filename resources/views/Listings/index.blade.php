@extends('layout')

@section('content')
 
<div>
   <div class="job-listing cols-m-8 mt-5 row">
    <div class="col-sm-3 d-none d-none d-sm-block" style="margin-top: 22%;">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex praesentium harum vitae, aliquid
       reprehenderit temporibus dolores eum sapiente inventore quisquam.
      </div>

    <div class="col-sm-9 all-job-listings row p-2" style="margin-top: 22%;">
      @foreach ($listing as $job)
      <div class="col-sm-3 shadow">
        <h4 class="h4">{{$job['title']}}</h4>

       <div class="row">
        <div class="col-sm-4"><b>Company </b></div>  <div class="col-sm-8">{{$job['company']}}</div>
        <div class="col-sm-4"><b>Location</b></div>  <div class="col-sm-8">{{$job['location']}}</div>
        <?php
        $tags = explode(" ", $job['tags']);
        ?>
        <div class="col-sm-4"><b>Skills</b></div>  

        @foreach ($tags as $tag)
        <div class="d-flex align-item-center m-1"><a href=""><button class="btn">{{$tag}}</button></a></div>
        @endforeach
        
        
        
       
      </div>  

        <div><a href="listing/{{$job['id']}}">More</a></div>

      </div>
          
      @endforeach
   
    </div> 
    
   </div>


 </div>

 @endsection


