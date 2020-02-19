
@extends('layouts.adminMaster')

@section('title') Events @endsection

@section('page-title') Events @endsection

@section('events-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Events
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
                        <th></th>
                        <th> </th>              
                        <th> Event Title </th>
                        <th> Start Date </th>
                        <th> End Date </th>
                        <th> View </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if($events)
                        
                        @foreach($events as $event)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> <img src="/storage/assets/img/events/{{ $event ->feature_image }}" alt="Feature Image" style="width: 45px;"> </td>
                                <td> {{ $event->title }} </td>
                                <td> {{ $event->start_date }} </td>
                                <td> {{ $event->end_date}} </td>
                                <td>
                                    <a href="#" class='btn green btn-outline sbold uppercase'> <i class='fa fa-eye'></i> </a>
                                </td>
                                <td> 
                                    <a href="{{ route('events-edit', $event->id)}}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> </a>
                                </td>
                                <td>
                                    <a href="{{ route('events-delete', $event-id) }}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="7"> {{ $events->links() }} </td>
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