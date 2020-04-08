
@extends('layouts.adminMaster')

@section('title') Header Title @endsection

@section('page-title') Header Ttile @endsection

@section('pages-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Home Page
                <small>Header</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->

        	<!-- BEGIN TABLE -->
            <table class="table table-striped">
                @if(count($data)>0)
                    <thead>
                        <tr>              
                            <th> Cover Image </th>
                            <th> Title </th>
                            <th> Sub-Title </th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                            <tr>
                                <td> <img src="/storage/assets/img/homepage/{{ $data ->cover_image }}" alt="Cover Image" style="width: 150px;"> </td>
                                <td> {{ $data->sub_title }} </td>
                                <td> {{ $data->title }} </td>
                                <td> 
                                    <a href="{{ route('home-page-header-edit', $data->id)}}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> </a>
                                </td>
                                <td>
                                    <a href="{{ route('home-page-header-delete', $data->id)}}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> </a>
                                </td>
                            </tr>
                        @endforeach                   
                    </tbody>
                @else
                    <tbody>
                        <tr>
                            <td> 
                                <a href="{{ route('home-page-header-create') }}" class='btn blue btn-outline sbold uppercase'>Add New <i class='fa fa-plus'></i> </a>
                            </td>
                        </tr>
                    </tbody>
                @endif
            </table>
        </div>
    </div>  
    <!-- END ROW -->
@endsection