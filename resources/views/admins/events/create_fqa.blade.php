@extends('layouts.app')

@section('title','Adding New Event ')

@section('content')
    @include('admins.head')
         <div class="container">
            <div class="row">
          <div class="col-md-10 col-md-offset-1">
 
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #62EEEE; font-size: 24px;font-weight: bold;text-align: center;">FQA Information</div>

                  
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('admin/addfqa')}}">
                        {{ csrf_field() }}
                        <div> 
                          <p style="font-weight: bold;font-size: 20px;text-align: center;"> <i class="fas fa-bell"></i> &nbsp All information is Required .</p>      
                        </div> 

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <label for="name" class="col-md-4 control-label">Select Event</label>
                           
                            <div class="col-md-6">
                                
                                <select name="cars">
                                     @foreach ($tasks as $task)
                                      <option value="{{$task->title}}"> {{$task->title}}</option>
                                        @endforeach
                                </select> 
                                
                            </div>
                          
                        </div>                        

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">FQA</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="content" name="fqa" cols="40" rows="5" placeholder="Write question and Answe....."></textarea>

                            </div>
                        </div>
                   

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div></div></div></div>
 
@endsection
