
@extends('layouts.adminMaster')

@section('title') About @endsection

@section('page-title') About @endsection

@section('pages-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Home Page
                <small>About</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->

        	<!-- BEGIN TABLE -->
            <table class="table table-striped">
                @if(count($data)>0)
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>              
                                        <th> Title </th>
                                        <th> Sub-Title </th>
                                        <th> First Image </th>
                                        <th> Second Image </th>
                                        <th> Third Image </th>
                                        <th> Edit </th>
                                        <th> Delete </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($data as $data)
                                        <tr>
                                            <td> {{ $data->title }} </td>
                                            <td> {{ $data->sub_title }} </td>
                                            <td> <img src="/storage/assets/img/about/{{ $data ->first_image }}" alt="First Image" style="width: 100px;"> </td>
                                            <td> <img src="/storage/assets/img/about/{{ $data ->second_image }}" alt="Second Image" style="width: 100px;"> </td>
                                            <td> <img src="/storage/assets/img/about/{{ $data ->third_image }}" alt="Third Image" style="width: 100px;"> </td>
                                            
                                            
                                            <td> 
                                                <a href="{{ route('home-page-header-edit', $data->id)}}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('home-page-header-delete', $data->id)}}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="7" style="border-bottom: solid 2px #eeeeee"> {!! $data->description !!} </td>
                                        </tr>
                                    @endforeach

                            </tbody>
                            </table>
                        </div>                    

                    </div> 
                @else
                <table>
                    <tbody>
                        <tr>
                            <td> 
                                <a href="{{ route('home-page-about-create') }}" class='btn blue btn-outline sbold uppercase'>Add New <i class='fa fa-plus'></i> </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @endif
        </div>
    </div>  
    <!-- END ROW -->
@endsection