@extends('layouts.app')

@section('title','Adding New Event ')

@section('content')
@include('admins.head')
         <div class="container">
            <div class="row">
          <div class="col-md-10 col-md-offset-1">
 
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #62EEEE; font-size: 24px;font-weight: bold;text-align: center;">Event Information</div>

                  
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('admin/e_create')}}">
                        {{ csrf_field() }}
                        <div> 
                          <p style="font-weight: bold;font-size: 20px;text-align: center;"> <i class="fas fa-bell"></i> &nbsp All information is Required .</p>      
                        </div>

                        

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" placeholder="Atmost length of 30 " value=" " required autofocus>

                            </div>
                        </div>

                         

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="content" name="content" required></textarea>

                            </div>
                        </div>

                   

                        <div class="form-group{{ $errors->has('sdate') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Start Date</label>

                            <div class="col-md-6">
                                <input id="sdate" type="date" min="{{date('Y-m-d', strtotime('+1 day'))}}" class="form-control" name="sdate" value=""  required autofocus>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('edate') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">End Date</label>

                            <div class="col-md-6">
                                <input id="edate" type="date" class="form-control" name="edate" value="" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div></div></div></div>
 
@endsection
