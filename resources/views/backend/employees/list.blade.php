@extends('backend.layouts.app')

@section('style')
	<style type="text/css">
		
	</style>
@endsection

@section('content')

  <ul class="breadcrumb">
            <li><a href="">Employees</a></li>
            <li><a href="">Employees List</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Employees List</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    {{-- start --}}
                       @include('message')
                   <a href="{{ url('admin/employees/create') }}" class="btn btn-primary" title="Add New Program"><i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">Add New Employees</span></a>
                    {{-- End --}}

                    {{-- Search Box Start --}}
            <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Employees List Search</h3>
                  </div>

                  <div class="panel-body" style="overflow: auto;">
                    <form action="" method="get">
                        <div class="col-md-3">
                           <label>ID</label>
                           <input type="text" value="{{ Request()->id }}" class="form-control" placeholder="ID" name="id">
                        </div>

                         <div class="col-md-3">
                           <label>Companies Name</label>
                           <input type="text" class="form-control" value="{{ Request()->name }}" placeholder="Companies Name" name="name">
                        </div>

                         <div class="col-md-3">
                           <label>First Name</label>
                           <input type="text" class="form-control" value="{{ Request()->first_name }}" placeholder="First Name" name="first_name">
                        </div>

                        <div class="col-md-3">
                           <label>Last Name</label>
                           <input type="text" class="form-control" value="{{ Request()->last_name }}" placeholder="Last Name" name="last_name">
                        </div>
                        
                        
                        <div style="clear: both;"></div>
                        <br>
                        <div class="col-md-12">
                           <input type="submit" class="btn btn-primary" value="Search">
                           <a href="{{ url('admin/employees') }}" class="btn btn-success">Reset</a>
                        </div>
                     </form>
                  </div>
               </div>  

                    {{-- Search Box End --}}

                    {{-- Section Start --}}
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Employees List</h3>
                  </div>
                 

              <div class="panel-body" style="overflow: auto;">
                  <table  class="table table-striped table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Companies Name</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                    @forelse($getrecord as $value)
                          <tr>
                              <td>{{ $value->id }}</td>
                          
                              <td>{{ !empty($value->get_companies_name->name) ? $value->get_companies_name->name: ''}}</td>
                              <td>{{ $value->first_name }}</td>
                              <td>{{ $value->last_name }}</td>
                              <td>{{ $value->email }}</td>
                             
                              <td>{{ $value->phone }}</td>
                              
                              <td>
                                <a href="{{ url('admin/employees/show/'.$value->id) }}" class="btn btn-primary btn-rounded btn-sm"><span class="fa fa-eye"></span></a> 
                               <a href="{{ url('admin/employees/edit/'.$value->id) }}" class="btn btn-success btn-rounded btn-sm"><span class="fa fa-pencil"></span></a> 
                               <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_record('{{ url('admin/employees/destroy/'.$value->id) }}');"><span class="fa fa-trash-o"></span></button> 
                   


                               <!-- MESSAGE BOX-->
     
                    <!-- END MESSAGE BOX-->    


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
