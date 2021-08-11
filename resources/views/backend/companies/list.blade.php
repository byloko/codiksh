@extends('backend.layouts.app')

@section('style')
	<style type="text/css">
		
	</style>
@endsection

@section('content')

  <ul class="breadcrumb">
            <li><a href="">Companies</a></li>
            <li><a href="">Companies List</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Companies List</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    {{-- start --}}
                       @include('message')
                   <a href="{{ url('admin/companies/create') }}" class="btn btn-primary" title="Add New Program"><i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">Add New Companies</span></a>
                    {{-- End --}}

                    {{-- Search Box Start --}}
            <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Companies List Search</h3>
                  </div>

                  <div class="panel-body" style="overflow: auto;">
                    <form action="" method="get">
                        <div class="col-md-3">
                           <label>ID</label>
                           <input type="text" value="{{ Request()->id }}" class="form-control" placeholder="ID" name="id">
                        </div>

                         <div class="col-md-3">
                           <label>Name</label>
                           <input type="text" class="form-control" value="{{ Request()->name }}" placeholder="Name" name="name">
                        </div>

                        <div class="col-md-3">
                           <label>Email</label>
                           <input type="email" class="form-control" value="{{ Request()->email }}" placeholder="Email" name="email">
                        </div>
                        
                         <div class="col-md-3">
                           <label>Website</label>
                           <input type="text" class="form-control" value="{{ Request()->website }}" placeholder="Website" name="website">
                        </div>
                        
                        <div style="clear: both;"></div>
                        <br>
                        <div class="col-md-12">
                           <input type="submit" class="btn btn-primary" value="Search">
                           <a href="{{ url('admin/companies') }}" class="btn btn-success">Reset</a>
                        </div>
                     </form>
                  </div>
               </div>  

                    {{-- Search Box End --}}

                    {{-- Section Start --}}
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Companies  List</h3>
                  </div>
                 

              <div class="panel-body" style="overflow: auto;">
                  <table  class="table table-striped table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Logo</th>
                              <th>Website</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                    @forelse($getrecord as $value)
                          <tr>
                              <td>{{ $value->id }}</td>
                          
                              <td>{{ $value->name }}</td>
                              <td>{{ $value->email }}</td>
                                <td>
                                  
                                    @if(!empty($value->logo))
                                 <img src="{{ url('storage/app/public/img/'.$value->logo) }}" style="height:100px;"> 
                                    

                                  @endif
                                </td>
                              <td>{{ $value->website }}</td>
                              
                              <td>
                              <a href="{{ url('admin/companies/show/'.$value->id) }}" class="btn btn-primary btn-rounded btn-sm"><span class="fa fa-eye"></span></a> 
                               <a href="{{ url('admin/companies/edit/'.$value->id) }}" class="btn btn-success btn-rounded btn-sm"><span class="fa fa-pencil"></span></a> 
                               <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_record('{{ url('admin/companies/destroy/'.$value->id) }}');"><span class="fa fa-trash-o"></span></button> 

                              </td>
                          </tr>
                         @empty
                          <tr>
                              <td colspan="100%">Record not found.</td>

                          </tr>
                          @endforelse
                      </tbody>

                  </table>
                  <div style="float: right">
                        {{ $getrecord->links() }} 
                  </div>
              </div>

              </div>
              {{-- Section End --}}
                    
                </div>
            </div>
        </div>


@endsection
  @section('script')
  <script type="text/javascript">
  
  </script>
@endsection
