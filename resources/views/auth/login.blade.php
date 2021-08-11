
@extends('layouts.app')

    @section('content')
        
      <div class="login-box animated fadeInDown">
            <div style="text-align: center;font-size: 26px; color: #ffffff;margin-bottom: 5px;">Codiksh</div>
            <div class="login-body">
               <div class="login-title">Log In to your account</div>
                @include('message')
               <form action="{{ url('login') }}" class="form-horizontal" method="post">
               {{ csrf_field() }}
                  <div class="form-group">
                     <div class="col-md-12">
                        <input type="text" class="form-control" required=""  name="email" placeholder="Email"/>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-12">
                        <input type="password" class="form-control" required="" name="password" placeholder="Password"/>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-6">
                      
                     </div>
                     <div class="col-md-6">
                        <button class="btn btn-info btn-block">Log In</button>
                     </div>
                  </div>
                  <div class="login-subtitle">
                  </div>
               </form>
            </div>
            <div class="login-footer">
               <div class="pull-left">
                  @ {{ date('Y') }} Codiksh
               </div>
            </div>
         </div>
        
    @endsection