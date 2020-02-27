
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
                        <th></th>             
                        <th> Name </th>
                        <th> Email </th>
                        <th> Sent on </th>
                        <th> View </th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if($messages)
                        
                        @foreach($messages as $message)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $message->first_name }} {{ $message->last_name }} </td>
                                <td> {{ $message->email_address }} </td>
                                <td> {{ $message->created_at }} </td>
                                <td>
                                    <a href="{{ route('message-show', $message->id) }}" class='btn green btn-outline sbold uppercase'> <i class='fa fa-eye'></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="7"> {{ $messages->links() }} </td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="7"> No records Available! </td>
                        </tr>

                    @endif
                                                                                            
                </tbody>
            </table>
        </div>
    </div>  
    <!-- END ROW -->
@endsection