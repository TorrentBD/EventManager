@extends('layouts.master')

@section('title','Register Event ')

@section('content')

            <div class="panel panel-default" style="margin-top: 100px;">
                <div class="panel-heading" style="background-color: #62EEEE; font-size: 24px;font-weight: bold;text-align: center;">Register This Event 2018</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/create')}}">
                        {{ csrf_field() }}
                        <div> 
                          <p style="font-weight: bold;font-size: 20px;text-align: center;"> <i class="fas fa-bell"></i> &nbsp All information is Required .</p>      
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }} " placeholder="Name" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('roll') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Roll</label>

                            <div class="col-md-6">
                                <input id="roll" type="text" class="form-control" name="roll" value="{{ old('roll') }}" placeholder="Each Roll" required autofocus>
                                <span class="help-block"> &#x2606; Always unique.</span>
                                @if ($errors->has('roll'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roll') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Father Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }} " placeholder="Father's Name" required autofocus>

                            </div>
                        </div>
                   

                        <div class="form-group{{ $errors->has('bdate') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Birth Date</label>

                            <div class="col-md-6">
                                <input id="bdate" type="date"  min="1994-01-01" max="2001-01-01" class="form-control" name="bdate" value="{{ old('bdate') }} "required autofocus>
                                <span class="help-block">&#x2606; 1994 to 2001 </span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }} " placeholder="Email" required> <span class="help-block"> &#x2606; Always unique </span>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                 
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Phone No#</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control" name="phone" required autofocus> <span class="help-block"> &#x2606; Must be 11 digits </span>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('aca') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Education Qualification</label>

                            <div class="col-md-6">
                                <select name="aca" class="form-control">            
                                    <option value="1st year"> 1st Year</option>
                                    <option value="2nd year"> 2nd Year</option>
                                    <option value="3rd year"> 3rd Year</option>
                                    <option value="4th year"> 4th Year</option>
                                    <option value="Masters"> Masters</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register Me
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
 
@endsection

@section('script')
<script>
    $("#phone").intlTelInput({
       
      utilsScript: "public/build/js/utils.js"
    });
  </script>
@endsection