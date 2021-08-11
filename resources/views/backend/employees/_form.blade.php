   <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
      {{ csrf_field() }}

          <div class="panel-body">
          

           <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Companies Name <span style="color:red"> *</span></label>
                <div class="col-md-7 col-xs-12">
                    <div class="">
                        <select name="companies_id" class="form-control">
                        @foreach ($get_companies as $element)
                           <option {{ !empty($getrecord) ? ($element->id == $getrecord->companies_id) ? 'selected' : '' : '' }} value="{{ $element->id }}">{{ $element->name }}</option>
                         @endforeach
                         </select>
                           <span style="color:red">{{  $errors->first('companies_id') }}</span>
                    </div>
                </div>
            </div>


           <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">First Name <span style="color:red"> *</span></label>
                <div class="col-md-7 col-xs-12">
                    <div class="">
                        <input name="first_name" value="{{ old('first_name', !empty($getrecord) ? $getrecord->first_name : '') }}" placeholder="First Name" type="text" required class="form-control" />
                        <span style="color:red">{{  $errors->first('first_name') }}</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Last Name <span style="color:red"> *</span></label>
                <div class="col-md-7 col-xs-12">
                    <div class="">
                        <input name="last_name" value="{{ old('last_name', !empty($getrecord) ? $getrecord->last_name : '') }}" placeholder="Last Name" type="text" required class="form-control" />
                        <span style="color:red">{{  $errors->first('last_name') }}</span>
                    </div>
                </div>
            </div>

           <div class="form-group">
             <label class="col-md-3 col-xs-12 control-label">Email </label>
                <div class="col-md-7 col-xs-12">
                    <div class="">
                        <input name="email" value="{{ old('email', !empty($getrecord) ? $getrecord->email : '') }}" placeholder="Email" type="email" class="form-control" />
                        <span style="color:red">{{  $errors->first('name') }}</span>
                    </div>
                </div>
            </div>


           <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Phone <span style="color:red"> *</span></label>
                <div class="col-md-7 col-xs-12">
                    <div class="">
                        <input name="phone" value="{{ old('phone', !empty($getrecord) ? $getrecord->phone : '') }}" placeholder="Phone" type="text" class="form-control" />
                        <span style="color:red">{{  $errors->first('phone') }}</span>
                    </div>
                </div>
            </div>

          </div>
          <div class="panel-footer">
              <button class="btn btn-primary pull-right">Submit</button>
          </div>
       </form>