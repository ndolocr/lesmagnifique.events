
@extends('layouts.adminMaster')

@section('title') Events @endsection

@section('page-title') Events @endsection

@section('events-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Event
                <small>view details</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            <!-- BEGIN ROW -->
            <div class="row">
                
                <!-- BEGIN COL -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    
                    <!-- BEGIN FEATURE IMAGE SECTION -->
                    <div class="feature_image">
                        <img src="/storage/assets/img/events/{{ $events->feature_image }}" alt="Feature Image">
                        
                        <div class="feature_image_cover"> </div>

                        <div class="page_title">
                            {{ $events->title }}
                        </div>

                    </div>
                    <!-- END FEATURE IMAGE SECTION -->

                </div>
                <!-- END COL -->

            </div>
            <!-- END ROW -->

            <!-- BEGIN ROW -->
            <div class="row">
                
                <!-- BEGIN COL -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">

                    <!-- BEGIN DETAILS SECTION -->
                    <div class="page_details">
                        
                        <!-- BEGIN DETAILS LIST -->
                        <ul>
                            <li>
                                <div class="details_topic"> Start Date </div> 
                                <div class="details"> {{ $events->start_date }} </div>
                            </li>
                            <li>
                                <div class="details_topic"> Event End Date </div> 
                                <div class="details"> {{ $events->end_date }} </div>
                            </li>
                            <li>
                                <div class="details_topic"> Delegates </div> 
                                <div class="details"> {{ $events->delegates }} </div>
                            </li>
                            <li>
                                <div class="details_topic"> Nationalities </div> 
                                <div class="details"> {{ $events->nationalities }} </div>
                            </li>
                        </ul>
                        <!-- END DETAILS LIST -->
                    </div>
                    <!-- END DETAILS SECTION -->

                </div>
                <!-- END COL -->

            </div>
            <!-- END ROW -->
        	
            <!-- BEGIN DESCRIPTION ROW -->
            <div class="row">
                
                <!-- BEGIN COL -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                    <!-- BEGIN DESCRIPTION SECTION -->
                    <div class="page_description"> {!! $events->description !!} </div>
                    <!-- END DESCRIPTION SECTION -->
                </div>
                <!-- END COL --> 

            </div>
            <!-- END DESCRIPTION ROW -->
        </div>
    </div>  
    <!-- END ROW -->
@endsection