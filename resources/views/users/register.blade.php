@extends('layouts.master')

@section('title','Register Event ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #62EEEE; font-size: 24px;font-weight: bold;text-align: center;">Register This Event 2018</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('create')}}">
                        {{ csrf_field() }}
                        <div> 
                          <p style="font-weight: bold;font-size: 20px;text-align: center;"> <i class="fas fa-bell"></i> &nbsp All information is Required .</p>      
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Roll</label>

                            <div class="col-md-6">
                                <input id="roll" type="text" class="form-control" name="roll" value="{{ old('roll') }}" required autofocus>
                                @if ($errors->has('roll'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roll') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Father Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" value="" required autofocus>

                            </div>
                        </div>
                   

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Birth Date</label>

                            <div class="col-md-6">
                                <input id="bdate" type="date" class="form-control" name="bdate" value="" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }} " required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                 
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Phone No#</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="" required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Education Qualification</label>

                            <div class="col-md-6">
                                <input id="aca" type="text" class="form-control" name="aca" value="" required autofocus>

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
        </div>
    </div>
</div>
@endsection
