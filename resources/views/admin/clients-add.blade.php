

@extends('layouts.adminMaster')

@section('title') Clients @endsection

@section('page-title') Clients @endsection

@section('clients-active') start active open @endsection

@section('content')
    
    <div class="row">
        
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE-->
                <h3 class="page-title"> Clients
                    <small>add</small>
                </h3>
                <!-- END PAGE TITLE-->
                    <form role="form" method="POST" id="events" name="events" action="event_add.php">
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
                                            <label>Event Title</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-info"></i>
                                                </span>
                                                <input type="text" id="title" name="title" class="form-control" placeholder="Describe the event"> 
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