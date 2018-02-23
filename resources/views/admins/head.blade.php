@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <ul class="breadcrumb">
                    <li class="active">Dashboard</li>
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="{{url('/candidate')}}">Registered Candidate</a></li>
                    <li><a href="{{url('/about')}}">About Event</a></li>
                    <li><a href="{{url('/')}}">Speaker</a></li>
                    <li><a href="{{url('/')}}">Schedule</a></li>
                    <li><a href="{{url('/')}}">Partner</a></li>
                    <li><a href="{{url('/')}}">FAQ</a></li>
                    <li><a href="{{url('/')}}">Email</a></li>
                  </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    @yield('content')
                </div>
            </div>
        </div>
@endsection