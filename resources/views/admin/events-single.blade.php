
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
            <h3 class="page-title"> Events
                <small>view all</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            Show single events
        	
        </div>
    </div>  
    <!-- END ROW -->
@endsection