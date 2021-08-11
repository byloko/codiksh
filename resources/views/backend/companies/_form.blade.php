   <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
      {{ csrf_field() }}

          <div class="panel-body">
          
           <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Name <span style="color:red"> *</span></label>
                <div class="col-md-7 col-xs-12">
                    <div class="">
                        <input name="name" value="{{ old('name', !empty($getrecord) ? $getrecord->name : '') }}" placeholder="Name" type="text" required class="form-control" />
                        <span style="color:red">{{  $errors->first('name') }}</span>
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
            <label class="col-md-3 col-xs-12 control-label">Logo </label>
                <div class="col-md-7 col-xs-12">
                    <div class="">
                        <input name="logo" value="{{ old('logo') }}"  type="file" class="form-control" />
                          @if(!empty($getrecord->logo))
                            <img src="{{ url('storage/app/public/img/'.$getrecord->logo) }}" style="height:100px;">
                          @endif
                        <span style="color:red">{{  $errors->first('logo') }}</span>
                    </div>
                </div>
            </div>

           <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Website </label>
                <div class="col-md-7 col-xs-12">
                    <div class="">
                        <input name="website" value="{{ old('website', !empty($getrecord) ? $getrecord->website : '') }}" placeholder="Website" type="text" class="form-control" />
                        <span style="color:red">{{  $errors->first('website') }}</span>
                    </div>
                </div>
            </div>

          </div>
          <div class="panel-footer">
              <button class="btn btn-primary pull-right">Submit</button>
          </div>
       </form>