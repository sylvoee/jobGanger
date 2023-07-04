@extends('layout')

@section('content')

    <section class="popupBody" >
       <div class="login d-flex justify-content-center" style="margin-top:7em;">
        <form action="" class="form-group col-sm-4" >
            <h3 class="text-info">Login<i class="d-flex justify-content-end fa fa-sign-in-alt"></i></h3>

            <div>
                <input type="text" class="form-control" name="username" placeholder="username">
            </div>

            <div>
                
                <input type="password" class="form-control" name="password" placeholder="password" >
            </div>

            <div class="mt-3">
                <button class="btn col-sm-12" type="submit">login</button>
               
            </div>

            <div class="mt-5 row">
                <a class="col-sm-5" href="/register">I don't have an account</a> 
                <a class="col-sm-5 text-danger" href="/forget-password">Forget password</a>
            </div>


        </form>
       </div>
    </section>

    @endsection
