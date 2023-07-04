@extends('layout')

@section('content')

    <section class="popupBody" >
       <div class="register d-flex justify-content-center" style="margin-top:7em;">
        <form action="" class="form-group col-sm-4" >
            <h3 class="text-info">Register<i class="d-flex justify-content-end fa fa-sign-in-alt"></i></h3>
            <div>
                <input type="text" class="form-control" name="name" placeholder="Full name">
            </div>

            <div>
                <input type="text" class="form-control" name="username" placeholder="username">
            </div>

            <div>
                
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>

            <div>
                
                <input type="password" class="form-control" name="password" placeholder="password" >
            </div>

            <div>
              
                <input type="password" class="form-control" name="password" placeholder="confirm-password">
            </div>

            <div class="mt-3">
                <button class="btn col-sm-7" type="submit">Register</button>
                <button style="background-color:red ;" class="btn btn-danger col-sm-4" type="reset">Reset</button>
            </div>

            <div class="mt-5">
                <a href="/login">Already have an account</a>
            </div>


        </form>
       </div>
    </section>

    @endsection
