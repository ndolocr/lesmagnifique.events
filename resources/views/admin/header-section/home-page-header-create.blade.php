

@extends('layouts.adminMaster')

@section('title') Header @endsection

@section('page-title') Header @endsection

@section('pages-active') start active open @endsection

@section('content')
    <!-- BEGIN ROW -->
    <div class="row">
        <!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Home Page
                <small>Header Section</small>
            </h3>
            <!-- END PAGE TITLE-->
            
            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            <!-- BEGIN FORM CREATION -->
            {!! Form::Open( ['action' => 'AdminController@homePageHeaderStore', 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
                
                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Title </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR TITLE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('title', 'Header Title') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        {{ Form::text('title', '', ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Header Title']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR TITLE -->

                                <!-- BEGIN FORM GROUP FOR SUB TITLE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('sub_title', 'Header Sub-Title') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        {{ Form::text('sub_title', '', ['class' => 'form-control', 'id' => 'sub_title', 'placeholder' => 'Header Sub-Title']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR SUB TITLE -->

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
                    <div class="portlet light bordered">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Controls </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">
                                
                                <!-- BEGIN FORM GROUP FOR EVENTS FEATURE IMAGE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('cover_image', 'Cover Image - (Image size 800 x 560 pixels)') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-image"></i>
                                        </span>
                                        {{ Form::file('cover_image', ['class' => 'form-control']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENTS FEATURE IMAGE -->

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