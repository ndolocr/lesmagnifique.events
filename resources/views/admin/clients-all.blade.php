
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
                <small>view all</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->

        	<!-- BEGIN TABLE -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>              
                        <th> Name </th>
                        <th> Address </th>
                        <th> Email </th>
                        <th> Phone </th>
                        <th> View </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if($clients)
                        
                        @foreach($clients as $client)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $client->name }} </td>
                                <td> {{ $client->address }} - {{$client->area_code}}, {{$client->town}} </td>
                                <td> {{ $client->email }} </td>
                                <td> 0{{ $client->telephone }} </td>
                                <td>
                                    <a href="{{ route('clients-all', $client->id) }}" class='btn green btn-outline sbold uppercase'> <i class='fa fa-eye'></i> </a>
                                </td>

                                <td> 
                                    <a href="{{ route('clients-edit', $client->id)}}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> </a>
                                </td>

                                <td>
                                    <a href="{{ route('clients-delete', $client->id)}}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> </a>
                                </td>

                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="8"> {{ $clients->links() }} </td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="8"> No records Available! </td>
                        </tr>

                    @endif
                                                                                            
                </tbody>
            </table>
            <!-- END TABLE -->
            
        </div>
    </div>
    
@endsection