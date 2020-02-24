
@extends('layouts.adminMaster')

@section('title') Clients @endsection

@section('page-title') Clients @endsection

@section('clients-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Clients
                <small>delete</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->

        	<!-- BEGIN TABLE -->
            <table class="table table-striped">
                <thead>
                    <tr>             
                        <th style="text-align: center;"> Client Name </th>
                        <th > Email Address </th>                        
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>                        
                        <td style="text-align: center; color:#e7505a;"> {{ $clients->name }} </td>
                        <td  style=" color:#e7505a;"> {{ $clients->email }} </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="text-align: center; color:#e7505a;" > 
                            Are you sure you want to delete this record?
                        </td>
                    </tr>
                    
                    <tr>    
                        <td style="text-align: center;">
                            <a href="{{ route('clients-all') }}" class='btn green btn-outline sbold uppercase'> Cancel  </a>
                        </td>
                        <td> 
                            {!! Form::open(['action'=>['ClientController@destroy', $clients->id], 'method'=>'POST']) !!}

                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class'=>'btn red btn-outline sbold uppercase']) }}

                            {!! Form::close() !!}
                        </td>
                    </tr>
                       
                                                                                            
                </tbody>
            </table>
        </div>
    </div>  
    <!-- END ROW -->
@endsection