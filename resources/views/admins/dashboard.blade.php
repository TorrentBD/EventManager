@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Instruction about Event Manager 2018 </div>


                <div class="panel-body center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     <img src="images/lego.png" width="300px" height="300px">
                </div>
                         
            </div>
@endsection

 

 