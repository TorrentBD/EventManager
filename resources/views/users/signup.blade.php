@extends('layouts.main')

@section('title','Sign Up')

@section('content')


    <section class="section registration">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Registration </h3>
                </div>
            </div>
                
            <form method="POST" action="{{url('/create')}}">

                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12" style="display:none;">
                        <div class="alert"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" class="form-control" name="name" value="" placeholder="Full Name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group{{ $errors->has('roll') ? ' has-error' : '' }}">
                            <input id="roll" type="text" class="form-control" name="roll" value="{{ old('roll') }}" placeholder="Student Roll" required autofocus>
                                @if ($errors->has('roll'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roll') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }} " placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <input id="phone" type="tel" class="form-control" name="phone" value="" placeholder="Phone" required autofocus>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                                <input id="fname" type="text" class="form-control" name="fname" value="" placeholder="Fathers Name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group{{ $errors->has('bdate') ? ' has-error' : '' }}">
                                <input id="bdate" type="date"  min="1994-03-08" max="2001-10-21" class="form-control" name="bdate" value="" placeholder="Birthh Date" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <select name="aca" class="form-control">            
                                    <option value="1st year"> 1st Year</option>
                                    <option value="2nd year"> 2nd Year</option>
                                    <option value="3rd year"> 3rd Year</option>
                                    <option value="4th year"> 4th Year</option>
                                    <option value="Masters"> Masters</option>
                                </select>
                        </div>

                         
                    </div>
                </div>
                <div class="text-center mt20">
                    <button type="submit" class="btn btn-black"  >Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
  <script>
    $("#phone").intlTelInput({
       
      utilsScript: "{{asset('build/js/utils.js')}}"
    });
  </script>
@endsection