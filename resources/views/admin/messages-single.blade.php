
@extends('layouts.adminMaster')

@section('title') Messages @endsection

@section('page-title') Messages @endsection

@section('messages-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row"> 
        <!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Messages
                <small>inbox</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->

            <!-- BEGIN TABLE -->
            <table class="table table-striped">
                <thead>
                    <tr>            
                        <th> {{ $messages->first_name }} {{ $messages->last_name }}: {{ $messages->email_address }} </th>
                        <th> </th>
                        <th>  </th>
                        <th> {{ $messages->created_at }} </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                        
                        <td colspan="4"> {!! $messages->message !!} </td>
                    </tr>                        
                </tbody>
            </table>
        </div>
    </div>  
    <!-- END ROW -->
@endsection