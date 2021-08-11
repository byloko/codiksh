
@extends('backend.layouts.app')
  @section('style')
    <style type="text/css">
      
    </style>
  @endsection 
@section('content')

        <ul class="breadcrumb">
            <li><a href="">Companies</a></li>
            <li><a href="">View Companies</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> View Companies</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    {{-- start --}}
                     <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
            
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h3 class="panel-title">View Companies</h3>
                           </div>
                           <div class="panel-body">
                              
                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 ID :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                    
                                    {{ $getrecord->id }}

                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 Name :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                  {{ !empty($getrecord->name) ? $getrecord->name : '' }}
                                 </div>
                              </div>

                            
                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 Email :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                  {{ !empty($getrecord->email) ? $getrecord->email : '' }}
                                 </div>
                              </div>

                               <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 Logo :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                 @if(!empty($getrecord->logo))
                                 <img src="{{ url('storage/app/public/img/'.$getrecord->logo) }}" style="height:100px;"> 
                                    

                                  @endif
                                 </div>
                              </div>
                              
                             <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 Website :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                  {{ !empty($getrecord->website) ? $getrecord->website : '' }}
                                 </div>
                              </div>



                           </div>
                           <div class="panel-footer">
                             <a class="btn btn-primary pull-right" href="{{ url('admin/companies') }}"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;<span class="bold">Back</span></a>
                           
                           </div>
                        </div>
                   </form>
                    {{-- End --}}
                    
                </div>
            </div>
        </div>
 
@endsection
  @section('script')
  <script type="text/javascript">
   
  </script>
@endsection



