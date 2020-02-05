
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

        	<!-- BEGIN TABLE -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>              
                        <th> Name </th>
                        <th> Email Address </th>
                        <th> Phone </th>
                        <th> View </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                		<td> 1 </td>                		
						<td> Clementina Muendi </td>
						<td> muendi@lesmagnifique.events </td>
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
    
@endsection