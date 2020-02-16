

@extends('layouts.adminMaster')

@section('title') Events @endsection

@section('page-title') Events @endsection

@section('events-active') start active open @endsection

@section('content')
    <!-- BEGIN ROW -->
    <div class="row">
        <!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Events
                <small>add</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN FORM CREATION -->
            {!! Form::Open( ['action' => 'EventsController@store', 'method' => 'POST'] ) !!}
                
                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 425px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Event Details </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">
                                
                                <!-- BEGIN FORM GROUP FOR EVENTS FEATURE IMAGE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('image', 'Featured Image - (Image size 800 x 560 pixels)') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-image"></i>
                                        </span>
                                        {{ Form::text('image', '', ['class' => 'form-control']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENTS FEATURE IMAGE -->

                                <!-- BEGIN FORM GROUP FOR EVENTS TITLE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('title', 'Event Title') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        {{ Form::text('title', '', ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Event Title']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENTS TITLE -->

                                <!-- BEGIN FORM GROUP FOR EVENTS START DATE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('title', 'Event Title') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        {{ Form::date('start_date', '', ['class' => 'form-control', 'id' => 'start_date', 'placeholder' => 'Start Date']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENTS END DATE -->

                                <!-- BEGIN FORM GROUP FOR EVENTS START DATE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('title', 'Event Title') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        {{ Form::date('end_date', '', ['class' => 'form-control', 'id' => 'end_date', 'placeholder' => 'End Date']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENTS END DATE -->

                            </div>
                        
                        </div>
                        <!-- END FORM BODY -->

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <!-- END FIRST FORM SECTION COLUMN -->


                <!-- BEGIN SECOND FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 425px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Event Description </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR EVENTS TITLE -->
                                <div class="form-group">
                                    
                                    <div class="input-group">
                                        <span class="input-group-addon"> </span>
                                        {{ Form::textarea('description', '', ['class' => 'ckeditor form-control', 'id' => 'description']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENTS TITLE -->
                                
                                <!-- BEGIN FORM ACTION SECTION -->
                                <div class="form-actions" style="border: none !important">
                                    {{  Form::submit('Save', ['class' => 'btn blue uppercase']) }}
                                    {{ Form::reset('Cancel', ['class' => 'btn red uppercase']) }}
                                </div>
                                <!-- BEGIN FORM ACTION SECTION -->

                            </div>
                        
                        </div>
                        <!-- END FORM BODY -->

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <!-- END SECOND FORM SECTION COLUMN -->

            {!! Form::close() !!}
            <!-- END FORM CREATION -->
        
        </div>
        <!-- END COLUMN -->
    </div> 
    <!-- END ROW --> 

@endsection