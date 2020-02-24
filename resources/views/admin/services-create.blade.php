

@extends('layouts.adminMaster')

@section('title') Services @endsection

@section('page-title') Services @endsection

@section('services-active') start active open @endsection

@section('content')
    <!-- BEGIN ROW -->
    <div class="row">
        <!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Services
                <small>add</small>
            </h3>
            <!-- END PAGE TITLE-->
            
            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            <!-- BEGIN FORM CREATION -->
            {!! Form::Open( ['action' => 'ServicesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
                
                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 260px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Service Details </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR SERVICE NAME -->
                                <div class="form-group">
                                    
                                    {{ Form::label('name', 'Service Name') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        {{ Form::text('name', '', ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Service Name']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR SERVICE NAME -->

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
                    <div class="portlet light bordered" style="height: 260px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Service Icons </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR EVENT DELEGATES -->
                                <div class="form-group">
                                    
                                    <!-- BEGIN ROW -->
                                    <div class="row">
                                        
                                        <!-- BEGIN COL -->
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            
                                            <div class="input-group">
                                                Hotel Service Icons
                                            </div>
                                            
                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-hotel', ['style'=>'float:left;']) }} <i class="fa fa-hotel"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-bed', ['style'=>'float:left;']) }} <i class="fa fa-bed"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-bath', ['style'=>'float:left;']) }} <i class="fa fa-bath"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-shower', ['style'=>'float:left;']) }} <i class="fa fa-shower"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-concierge-bell', ['style'=>'float:left;']) }} <i class="fa fa-concierge-bell"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-utensils', ['style'=>'float:left;']) }} <i class="fa fa-utensils"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-coffee', ['style'=>'float:left;']) }} <i class="fa fa-coffee"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-glass-martini', ['style'=>'float:left;']) }} <i class="fa fa-glass-martini"></i>
                                            </div>
        
                                        </div>
                                        <!-- END COL -->

                                        <!-- BEGIN COL -->
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            
                                            <div class="input-group" style="clear: both;">
                                                Transport Icons
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-plane', ['style'=>'float:left;']) }} <i class="fa fa-plane"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-plane-departure', ['style'=>'float:left;']) }} <i class="fa fa-plane-departure"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-shuttle-van', ['style'=>'float:left;']) }} <i class="fa fa-shuttle-van"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-bus', ['style'=>'float:left;']) }} <i class="fa fa-bus"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-caravan', ['style'=>'float:left;']) }} <i class="fa fa-caravan"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-subway', ['style'=>'float:left;']) }} <i class="fa fa-subway"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-car', ['style'=>'float:left;']) }} <i class="fa fa-car"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-taxi', ['style'=>'float:left;']) }} <i class="fa fa-taxi"></i>
                                            </div>
        
                                        </div>
                                        <!-- END COL -->

                                        <!-- BEGIN COL -->
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            
                                            <div class="input-group" style="clear: both;">
                                                Office Service Icons
                                            </div>
                                            
                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-user', ['style'=>'float:left;']) }} <i class="fa fa-user"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-calendar', ['style'=>'float:left;']) }} <i class="fa fa-calendar"></i>
                                            </div>
                    
                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-print', ['style'=>'float:left;']) }} <i class="fa fa-print"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-file-pdf', ['style'=>'float:left;']) }} <i class="fa fa-file-pdf"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-network-wired', ['style'=>'float:left;']) }} <i class="fa fa-network-wired"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-envelope', ['style'=>'float:left;']) }} <i class="fa fa-envelope"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-keyboard', ['style'=>'float:left;']) }} <i class="fa fa-keyboard"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-pencil-alt', ['style'=>'float:left;']) }} <i class="fa fa-pencil-alt"></i>
                                            </div>
        
                                        </div>
                                        <!-- END COL -->

                                        <!-- BEGIN COL -->
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            
                                            <div class="input-group" style="clear: both;">
                                                Entertainment Icons
                                            </div>
                                            
                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-camera', ['style'=>'float:left;']) }} <i class="fa fa-camera"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-film', ['style'=>'float:left;']) }} <i class="fa fa-film"></i>
                                            </div>
                                            
                                            <div class="input-group" style="padding: 0 15px; float: left;">
                                                {{ Form::radio('icon', 'fa fa-eject', ['style'=>'float:left;']) }} <i class="fa fa-eject"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-gift', ['style'=>'float:left;']) }} <i class="fa fa-gift"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-swimmer', ['style'=>'float:left;']) }} <i class="fa fa-swimmer"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-hiking', ['style'=>'float:left;']) }} <i class="fa fa-hiking"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-biking', ['style'=>'float:left;']) }} <i class="fa fa-biking"></i>
                                            </div>

                                            <div class="input-group" style="padding: 0 15px; float: left;">

                                                {{ Form::radio('icon', 'fa fa-skating', ['style'=>'float:left;']) }} <i class="fa fa-skating"></i>
                                            </div>
                                            
                                            
                                            
        
                                        </div>
                                        <!-- END COL -->

                                    </div>
                                    <!-- END ROW -->

                                </div>
                                <!-- END FORM GROUP FOR EVENT DELEGATES -->

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
                                <span class="caption-subject bold uppercase"> Service Description </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR EVENTS TITLE -->
                                <div class="form-group">
                                    
                                    <div class="input-group">
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