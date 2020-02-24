
@extends('layouts.adminMaster')

@section('title') Services @endsection

@section('page-title') Services @endsection

@section('services-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Services
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
                        <th> # </th>
                        <th> Icon </th>              
                        <th> Name </th>
                        <th> Information </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if($services)
                        
                        @foreach($services as $service)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $service->icon}} </td>
                                <td> {{ $service->name }} </td>
                                <td> {{ $service->description }} </td>
                                <td> 
                                    <a href="{{ route('events-edit', $service->id)}}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> </a>
                                </td>
                                <td>
                                    <a href="{{ route('events-delete', $service->id)}}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="7"> {{ $services->links() }} </td>
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