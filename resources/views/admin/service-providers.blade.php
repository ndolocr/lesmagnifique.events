
@extends('layouts.adminMaster')

@section('title') Service Provider @endsection

@section('page-title') Service Provider @endsection

@section('service-provider-active') start active open @endsection

@section('content')
	
	<!-- BEGIN ROW -->
    <div class="row"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			
			<!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Service Providers
                <small>view all</small>
            </h3>
            <!-- END PAGE TITLE-->

        	<!-- BEGIN TABLE -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>              
                        <th> Service Provider Name </th>
                        <th> Address </th>
                        <th> Email </th>
                        <th> Phone </th>
                        <th> View </th>
						<th> Edit </th>
						<th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                		<td> 1 </td>                		
						<td> Mutule Transporters </td>
						<td> 93422-80102 Mombasa </td>
						<td> admin@agriculture.com </td>
						<td> 0712345678 </td>						
						<td>
							<a href="#" class='btn green btn-outline sbold uppercase'> <i class='fa fa-eye'></i> </a>
						</td>
						<td> 
							<a href="#" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> </a>
						</td>
						<td>
							<a href="#" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> </a>
						</td>
                	</tr>                                                                                            
                </tbody>
            </table>
        </div>
    </div>  
    <!-- END ROW -->    
    
@endsection