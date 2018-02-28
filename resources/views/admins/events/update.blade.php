@extends('layouts.app')

@section('title','Updating Event ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #62EEEE; font-size: 24px;font-weight: bold;text-align: center;">Event Information</div>

                  
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('update',$tasks->id)}}">
                        {{ csrf_field() }}
                        <div> 
                          <p style="font-weight: bold;font-size: 20px;text-align: center;"> <i class="fas fa-bell"></i> &nbsp All information is Required .</p>      
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $tasks->title }}" required autofocus>

                            </div>
                        </div>

                         

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="content" name="content" cols="40" rows="5">{{ $tasks->content }}</textarea>

                            </div>
                        </div>
                   

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Event Date</label>

                            <div class="col-md-6">
                                <input id="edate" type="date" class="form-control" name="edate" value="{{ $tasks->edate }}" required autofocus>

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
            </div>
        </div>
    </div>
</div>
@endsection
