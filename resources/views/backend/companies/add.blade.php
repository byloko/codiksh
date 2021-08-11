@extends('backend.layouts.app')
	
	@section('style')
	<style type="text/css">
		
	</style>
	@endsection
@section('content')

  <ul class="breadcrumb">
            <li><a href="">Companies </a></li>
            <li><a href="">Add Companies </a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Add Companies </h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    {{-- Section Start --}}
                   
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> Add Companies</h3>
                                </div>
                                    @include('backend.companies._form')

                     
                            </div>
                    
                    {{-- Section End --}}
                </div>
            </div>
        </div>

@endsection
  

