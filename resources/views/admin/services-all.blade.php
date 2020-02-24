
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
                        <th> Service Description </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if($services)
                        
                        @foreach($services as $service)
                            <tr>
                                <td> <p> {{ $loop->iteration }} </p> </td>
                                <td> <p> <i class=" {{ $service->icon}} "> </i> </p> </td>
                                <td> <p> {{ $service->name }} </p> </td>
                                <td> {!! $service->description !!} </td>
                                <td>
                                    <p> 
                                        <a href="{{ route('services-edit', $service->id)}}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> </a>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <a href="{{ route('services-delete', $service->id)}}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> </a>
                                    </p>
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