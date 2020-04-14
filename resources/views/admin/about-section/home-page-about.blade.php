
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
                                @foreach($data as $data)
                                    <thead>
                                        <tr> 
                                            <th colspan="3" style="font-size: 3rem; text-transform: uppercase; text-align: center;"> 
                                                {{ $data->title }} 
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>                                            
                                            <td> <img src="/storage/assets/img/about/{{ $data ->first_image }}" alt="First Image" style="width: 150px;" class="img-thumbnail"> </td>
                                            <td> <img src="/storage/assets/img/about/{{ $data ->second_image }}" alt="Second Image" style="width: 150px;" class="img-thumbnail"> </td>
                                            <td> <img src="/storage/assets/img/about/{{ $data ->third_image }}" alt="Third Image" style="width: 150px;" class="img-thumbnail"> </td>
                                        </tr>

                                        <tr> 
                                            <td colspan="3" style="font-size: 2rem;"> {{ $data->sub_title }} </td>
                                        </tr>

                                        <tr>
                                            <td colspan="3"> {!! $data->description !!} </td>
                                        </tr>

                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                             <td style="text-align: right;"> 
                                                <a href="{{ route('home-page-about-edit', $data->id)}}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> Edit </a>
                                            
                                                <a href="{{ route('home-page-about-delete', $data->id)}}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> Delete </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                @endforeach
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