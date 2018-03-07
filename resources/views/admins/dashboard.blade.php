@extends('layouts.app')

@section('content')
@include('admins.head')
         <div class="container">
            <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Instruction about Event Manager 2018 </div>


                <div class="panel-body center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     <img src="images/logo.png" width="300px" height="300px" alt="Event Manager">
                </div>
                         
            </div>
          </div>
      </div></div>
        
@endsection

 

 