@extends('layout')

@section('content')

    <section class="popupBody" >
       <div class="post-job " style="margin-top:4em;">

        <form action="" class="row col-sm-8 offset-2">
            <h3 class="h3 text-primary">Post Job</h3>

        <div class="col-sm-4">
            <input type="text" name="name" class="form-control" placeholder="Company Name">
        </div>

        <div class="col-sm-4">
            <input type="email" name="email" class="form-control" placeholder="Company Email Address">
        </div>

        <div class="col-sm-4">
            <input type="url" name="website" class="form-control" placeholder="Company website">
        </div>

        <div class="col-sm-6">
            <input type="text" name="url" class="form-control" placeholder="Job Title">
        </div>

        <div class="col-sm-3">
            <input type="text" name="tags" class="form-control" placeholder="tags">
        </div>

        <div class="col-sm-3">
            <input type="date" name="tags" class="form-control" placeholder="Job vancancy expires">
        </div>

        <div class="col-sm-12 ">
           <textArea rows="10" class="col-sm-12" name="description" placeholder="Enter job description "></textArea>
        </div>

        <div class="col-sm-12">
            <button class="btn col-sm-12">Submit Job Post....</button>
         </div>

        </form>


       
       </div>
    </section>

    @endsection
