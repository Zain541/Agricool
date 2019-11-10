@extends('layouts.adminpanel.app')

@section('content')

 <div class="table-responsive">
 	<div class="header" style="margin-top: 25px">
                    <h2>
                        <strong>View Projects</strong></h2>
                   
                </div>
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Farm Name</th>
                                            <th>Project Start Date</th>
                                            <th>Project End Date</th>
                                            <th>Location</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($projects as $project)
                                       		<tr>
                                       		<td>{{ $project->project_name }}</td>
                                       		<td>{{ $project->farm_name }}</td>
                                       		<td>{{ $project->project_start_date }}</td>
                                       		<td>{{ $project->project_end_date }}</td>
                                       		<td>{{ $project->location }}</td>
                                       		
                                       		<td><a href="{{ route('project.show',$project->id) }}">View</a></td>

                                       		</tr>
                                       	@endforeach
                                    </tbody>
                                </table>
                                {{ $projects->links() }}
                            </div>



@endsection