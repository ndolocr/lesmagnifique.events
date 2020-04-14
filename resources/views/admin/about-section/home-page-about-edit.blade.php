
@extends('layouts.adminMaster')

@section('title') About @endsection

@section('page-title') About @endsection

@section('pages-active') start active open @endsection

@section('content')
    <!-- BEGIN ROW -->
    <div class="row">
        <!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Home Page
                <small>About Section</small>
            </h3>
            <!-- END PAGE TITLE-->
            
            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            <!-- BEGIN FORM CREATION -->
            {!! Form::Open( ['action' => ['AdminController@homePageAboutUpdate', $data->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
                
                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 650px">
                        
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
                                    
                                    {{ Form::label('title', 'About Us Title') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        {{ Form::text('title', $data->title, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Header Title']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR TITLE -->

                                <!-- BEGIN FORM GROUP FOR SUB TITLE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('sub_title', 'About Us Sub-Title') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        {{ Form::text('sub_title', $data->sub_title, ['class' => 'form-control', 'id' => 'sub_title', 'placeholder' => 'Header Sub-Title']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR SUB TITLE -->
                                
                                <!-- BEGIN FORM GROUP FOR IMAGE ONE -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            
                                            {{ Form::label('original_first_image', 'First Image') }}
                                            <div class="input-group">
                                                <img src="/storage/assets/img/about/{{ $data ->first_image }}" alt="First Image" style="width: 100px;">
                                            </div> 

                                        </div>

                                        <div class="col-md-8">
                                            
                                            {{ Form::label('first_image', 'Choose New Image - (Image size 800 x 800 pixels)') }}

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-image"></i>
                                                </span>
                                                {{ Form::file('first_image', ['class' => 'form-control']) }}
                                            </div>

                                        </div>
                                    </div>

                                    

                                </div>
                                <!-- END FORM GROUP FOR IMAGE ONE -->

                                <!-- BEGIN FORM GROUP FOR IMAGE TWO -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                                
                                            {{ Form::label('original_second_image', 'Second Image') }}
                                            <div class="input-group">
                                                <img src="/storage/assets/img/about/{{ $data ->second_image }}" alt="First Image" style="width: 100px;">
                                            </div> 

                                        </div>
                                        
                                        <div class="col-md-8">
                                            {{ Form::label('second_image', 'Choose New Image - (Image size 800 x 800 pixels)') }}

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-image"></i>
                                                </span>
                                                {{ Form::file('second_image', ['class' => 'form-control']) }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR IMAGE TWO -->

                                <!-- BEGIN FORM GROUP FOR IMAGE THREE -->
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-md-4">
                                                
                                            {{ Form::label('original_second_image', 'Third Image') }}
                                            <div class="input-group">
                                                <img src="/storage/assets/img/about/{{ $data ->third_image }}" alt="First Image" style="width: 100px;">
                                            </div> 

                                        </div>

                                        <div class="col-md-8">
                                            {{ Form::label('third_image', 'Choose New Image - (Image size 800 x 800 pixels)') }}

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-image"></i>
                                                </span>
                                                {{ Form::file('third_image', ['class' => 'form-control']) }}
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR IMAGE THREE -->

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
                    <div class="portlet light bordered" style="height: 650px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-info font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> ABOUT US </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR DESCRIPTION -->
                                <div class="form-group">
                                    
                                    <div class="input-group">
                                        {{ Form::textarea('description', $data->description, ['class' => 'ckeditor form-control', 'id' => 'description']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR DESCRIPTION -->

                            </div>

                            <!-- BEGIN FORM ACTION SECTION -->
                            <div class="form-actions" style="border: none !important">
                                {{ Form::hidden('_method', 'PUT') }}
                                {{  Form::submit('Save', ['class' => 'btn blue uppercase']) }}
                                {{ Form::reset('Cancel', ['class' => 'btn red uppercase']) }}
                            </div>
                            <!-- BEGIN FORM ACTION SECTION -->
                        
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