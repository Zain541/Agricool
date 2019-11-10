@extends('layouts.adminpanel.app')

@section('content')

 <div class="row clearfix">
                <div class="col-lg-4 col-md-12">


                    <div class="card">
                        <div class="m-b-20">
                            <div class="contact-grid">
                                <div class="profile-header bg-dark">
                                    <div class="user-name">Project</div>
                                    <div class="name-center">{{$project->project_name}}</div>
                                </div>
                                <img src="{{ asset('storage/' . $project->project_image) }}" class="user-img" alt="">
                                
                               
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="m-b-20">
                            <div class="contact-grid">
                                <div class="profile-header bg-dark">
                                    <div class="user-name">Farm Owner</div>
                                    <div class="name-center">{{$project->farm_owner}}</div>
                                </div>
                                <img src="{{ asset('storage/' . $project->owner_image) }}" class="user-img" alt="">
                               
                                
                               
                            </div>
                        </div>
                    </div>
                     <div class="card">
                        <div class="m-b-20">
                            <div class="contact-grid">
                                <div class="profile-header bg-dark">
                                    <div class="user-name">Project Manager</div>
                                    <div class="name-center"></div>
                                </div>
                                <img src="{{ asset('storage/' . $project->project_manager_image) }}" class="user-img" alt="">
                                
                                
                               
                            </div>
                        </div>
                    </div>
                   
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>About</h2>
                                        </div>
                                        <div class="body">
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Project Name</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $project->project_name }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Project Start Data</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $project->project_start_date }}</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Project End Data</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $project->project_end_date }}</p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <strong>Location</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $project->location }}</p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <strong>Investment</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $project->invetment }}</p>
                                                </div>

                                                 <div class="col-md-3 col-6">
                                                    <strong>Commodity</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $project->commodity }}</p>
                                                </div>

                                                <div class="col-md-3 col-6">
                                                    <strong>Rio</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $project->rio }}</p>
                                                </div>

                                                <div class="col-md-3 col-6">
                                                    <strong>Collected Funds</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $project->collected_funds }}</p>
                                                </div>

                                                <div class="col-md-3 col-6">
                                                    <strong>Project Date</strong>
                                                    <br>
                                                    <p class="text-muted">{{ $project->project_date }}</p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>Project Manager Details</h2>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>{{$project->project_manager_detail}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>Farm Description</h2>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                <li>{{$project->farm_description}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="timeline" aria-expanded="false">
                        </div>
                       
                    </div>
                </div>
            </div>


@endsection