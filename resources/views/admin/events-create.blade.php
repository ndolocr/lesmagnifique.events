

@extends('layouts.adminMaster')

@section('title') Events @endsection

@section('page-title') Events @endsection

@section('events-active') start active open @endsection

@section('content')
    
    <div class="row">
        
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE-->
                <h3 class="page-title"> Events
                    <small>add</small>
                </h3>
                <!-- END PAGE TITLE-->

                <!-- BEGIN FORM CREATION -->
                {!! Form::Open( ['action' => 'EventsController@store', 'method' => 'POST'] ) !!}
                    
                    <!-- BEGIN FIRST FORM SECTION -->
                    <div class="col-md-6">
                        
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet light bordered">
                            
                            <!-- BEGIN FORM TITLE -->
                            <div class="portlet-title">
                                <div class="caption font-red-sunglo">
                                    <i class="icon-settings font-red-sunglo"></i>
                                    <span class="caption-subject bold uppercase"> Event Details </span>
                                </div>                                   
                            </div>
                            <!-- END FORM TITLE -->
                        </div>
                        <!-- END SAMPLE FORM PORTLET-->

                    </div>
                    <!-- END FIRST FORM SECTION -->

                {!! Form::close() !!}
                <!-- END FORM CREATION -->
                    <form role="form" method="POST" id="events" name="events" action="{{ route('events-store') }}">
                        {{csrf_field()}}
                         
                        <div class="col-md-6">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Event Details </span>
                                    </div>                                   
                                </div>
                                
                                <div class="portlet-body form">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>Featured Image - (Image size 800 x 560 pixels)</label>
                                            <div class="member-image">
                                                <img src="" id="image">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-image"></i>
                                                </span>
                                                <input type="file" onchange="showImage.call(this)" name="image" class="form-control" placeholder="Picture">                                                                                   
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Event Title</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-info"></i>
                                                </span>
                                                <input type="text" id="title" name="title" class="form-control" placeholder="Event Title"> 
                                            </div>
                                            <span class="error_form" id="description_error_message"> </span>
                                        </div>                          

                                        <div class="form-group">
                                            <label>Event Start Date</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="date"  id="from" name="from"  class="form-control" placeholder="Choose Date"> 
                                            </div>
                                            <span class="error_form" id="from_error_message"> </span>
                                        </div>

                                        <div class="form-group">
                                            <label>Event End Date</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="date"  id="to" name="to" class="form-control" placeholder="Choose Date"> 
                                            </div>
                                            <span class="error_form" id="to_error_message"> </span>
                                        </div>

                                    </div>                                                                                                            
                                </div>
                            </div>                        
                        </div>
                        <!-- END COL-MD-6 -->
                
                        <!-- BEGIN COL-MD-6 -->
                        <div class="col-md-6">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Event Description</span>
                                    </div>                                                                       
                                </div>

                                <!-- BEGIN DESCRIPTION -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <textarea class="ckeditor" name="description"></textarea>
                                    </div>
                                </div>
                                <!-- END DESCRIPTION -->

                                <div class="form-actions">
                                    <input type="submit" value="Save" name="save_new" class="btn blue uppercase" />
                                    <input type="reset"  value="Cancel" class="btn red uppercase">
                                </div>                     
                            </div>
                        </div>
                        <!-- END COL-MD-6 -->
                    </form> 
                    </div>
                </div> <!-- --> 

@endsection