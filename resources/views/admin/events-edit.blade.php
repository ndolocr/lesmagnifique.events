

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
                <small>edit</small>
            </h3>
            <!-- END PAGE TITLE-->
            
            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            <!-- BEGIN FORM CREATION -->
            {!! Form::Open( ['action' => ['EventsController@update', $events->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
                
                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 350px">
                        
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

                                <!-- BEGIN FORM GROUP FOR EVENTS TITLE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('title', 'Event Title') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        {{ Form::text('title', $events->title, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Event Title']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENTS TITLE -->

                                <!-- BEGIN FORM GROUP FOR EVENTS START DATE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('start_date', 'Events Start Date') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        {{ Form::date('start_date', $events->start_date, ['class' => 'form-control', 'id' => 'start_date', 'placeholder' => 'Start Date']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENTS END DATE -->

                                <!-- BEGIN FORM GROUP FOR EVENTS START DATE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('end_date', 'Events End Date') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        {{ Form::date('end_date', $events->end_date, ['class' => 'form-control', 'id' => 'end_date', 'placeholder' => 'End Date']) }}
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
                    <div class="portlet light bordered" style="height: 350px">
                        
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

                                <!-- BEGIN FORM GROUP FOR EVENT DELEGATES -->
                                <div class="form-group">
                                    
                                    {{ Form::label('delegate', 'Number of Delegates') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-users"></i>
                                        </span>
                                        {{ Form::number('delegates', $events->delegates, ['class' => 'form-control', 'id' => 'delegates', 'placeholder' => 'Number of Delegates']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENT DELEGATES -->

                                <!-- BEGIN FORM GROUP FOR DELEGATE NATIONALITIES -->
                                <div class="form-group">
                                    
                                    {{ Form::label('nationality', 'Number of Nationalities Attending') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-map"></i>
                                        </span>
                                        {{ Form::number('nationality', $events->nationalities, ['class' => 'form-control', 'id' => 'nationality', 'placeholder' => 'Number of Nationalities Attending']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR DELEGATE NATIONALITIES -->

                                <!-- BEGIN FORM GROUP FOR EVENTS FEATURE IMAGE -->
                                <div class="form-group">
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            {{ Form::label('original_feature_image', 'Featured Image') }}
                                            <div class="input-group">
                                                <img src="/storage/assets/img/events/{{ $events ->feature_image }}" alt="Feature Image" style="width: 100px;">
                                            </div> 
                                        </div>

                                        <div class="col-md-8">
                                            {{ Form::label('feature_image', 'Choose New Featured Image - (Image size 800 x 560 pixels)') }}

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-image"></i>
                                                </span>
                                                {{ Form::file('feature_image', ['class' => 'form-control']) }}
                                            </div>
                                        </div>

                                    </div>  

                                </div>
                                <!-- END FORM GROUP FOR EVENTS FEATURE IMAGE -->

                            </div>
                        
                        </div>
                        <!-- END FORM BODY -->

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <!-- END SECOND FORM SECTION COLUMN -->


                <!-- BEGIN THIRD FORM SECTION COLUMN-->
                <div class="col-md-12">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 600px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-info font-red-sunglo"></i>
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
                                        {{ Form::textarea('description', $events->description, ['class' => 'ckeditor form-control', 'id' => 'description']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENTS TITLE -->
                                
                                <!-- BEGIN FORM ACTION SECTION -->
                                <div class="form-actions" style="border: none !important">
                                    {{ Form::hidden('_method', 'PUT') }}
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