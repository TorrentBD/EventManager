@extends('layouts.main')

@section('title','Rag Day 2018')

@section('content')
	<header id="site-header" class="site-header valign-center"> 
        <div class="intro">

        	@if(Session::has('flash_message'))
    			<div class="alert alert-success">
        			{{ Session::get('flash_message') }}
		    	</div>
			@endif

            <h2>25 Freburary, 2018 / Engineering Faculty , RU</h2>
            
            <h1>Rag Day 2018</h1>
            
            <p>Session-2013-14</p>
            
            <a class="btn btn-white" href="{{url('/signup')}}">Register Now</a>
        
        </div>
    </header>



@endsection