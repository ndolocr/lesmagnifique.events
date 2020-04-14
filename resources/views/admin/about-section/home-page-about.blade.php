
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
                    Data Available  
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