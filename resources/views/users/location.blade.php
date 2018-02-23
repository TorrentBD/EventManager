@extends('layouts.main')

@section('title','Photo Scetion')

@section('content') 

<section id="facts" class="section bg-image-1 facts text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <i class="ion-ios-calendar"></i>
                    <h3>2015<br>June 25</h3>
                
                </div>
                <div class="col-sm-3">

                    <i class="ion-ios-location"></i>
                    <h3>California<br>USA</h3>
                
                </div>
                <div class="col-sm-3">

                    <i class="ion-pricetags"></i>
                    <h3>150<br>Tickets</h3>
                
                </div>
                <div class="col-sm-3">
                
                    <i class="ion-speakerphone"></i>
                    <h3>06<br>Speakers</h3>
                
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>





    <section id="contribution" class="section bg-image-2 contribution">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase mt0 font-400">Submit Your Contribution Work</h3>
                    
                    <p>You've inspired new consumer, racked up click-thru's, blown-up brand awareness. We can't give you back the weekends you worked, or erase the pain of being forced to make the logo bigger. But if you submit your best work.</p>

                    <a class="btn btn-white" href="#">Submit</a>
                </div>
            </div>
        </div>
    </section>

@endsection