@extends('layout')

@section('content')
 
<div>
  <section>
   <div class="job-listing cols-m-8 mt-5 row">
    <div class="col-sm-3 d-none d-sm-block" style="margin-top: 13%;">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex praesentium harum vitae, aliquid
       reprehenderit temporibus dolores eum sapiente inventore quisquam.
      </div>

    <div class="col-sm-9 all-job-listings row p-2" style="margin-top: 13%;">
      
     {{-- Search form --}}
     <form action="">
      <input type="text" class="form-control col-sm-6" name="search" placeholder="Type in the kind of job you are searching for">
      <button type="submit" class = "btn btn-default">search</button>
     </form>

      @foreach ($listing as $job)
      <div class="col-sm-3 shadow mt-3">
        <a class="text-center" href="listing/{{$job['id']}}"><h5 class="h5 text-center">{{$job['title']}}</h5></a>

      <div class="row d-flex text-center">
        <div><b>Company </b> :  {{$job['company']}}</div> 
        <div><b>Location</b>: {{$job['location']}}</div>
        

          <?php
        $tags = explode(" ", $job['tags']);
        ?>
        <div class="col-sm-7"><b>Skills</b></div>  
        @foreach ($tags as $tag)
        <div><a class="shadow" href="/listing/?tag={{$tag}}">{{$tag}}</a>
        </div>
        @endforeach
      </div>  
      
      </div>
      @endforeach
      
   
    </div> 
    
   </div>
  </section>


 </div>

 @endsection


