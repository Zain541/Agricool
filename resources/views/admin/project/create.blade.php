@extends('layouts.adminpanel.app')

@section('content')

<div class="container-fluid" style="max-width: 850px">
 <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>Add a new Project</strong></h2>
                   
                </div>
                <div class="body" id="form_validation" novalidate="novalidate">
                    <form method="post" action="{{ route('project.store') }}" enctype="multipart/form-data">
                    	@csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="project_name" name="project_name" class="form-control" value="{{ old('project_name') }}">
                                <label class="form-label">Project Name</label>
                            </div>
                             @error('project_name')
                           		<label id="name-error" class="error" for="project_name">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="farm_name" name="farm_name" class="form-control" value="{{ old('farm_name') }}">
                                <label class="form-label">Farm Name</label>
                            </div>
                             @error('farm_name')
                           		<label id="name-error" class="error" for="farm_name">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="project_start_date" name="project_start_date" class="form-control" value="{{ old('project_start_date') }}">
                                <label class="form-label">Project Start Date</label>
                            </div>
                            @error('project_start_date')
                           		<label id="name-error" class="error" for="project_start_date">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="project_end_date" name="project_end_date" class="form-control" value="{{ old('project_end_date') }}">
                                <label class="form-label">Project End Date</label>
                            </div>
                            @error('project_end_date')
                           		<label id="name-error" class="error" for="project_end_date">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="investment" name="investment" class="form-control" value="{{ old('investment') }}">
                                <label class="form-label">investment</label>
                            </div>
                            @error('investment')
                           		<label id="name-error" class="error" for="investment">{{ $message }}</label>
                            @enderror
                        </div>

                         <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="location" name="location" class="form-control" value="{{ old('location') }}">
                                <label class="form-label">Location</label>
                            </div>
                            @error('location')
                           		<label id="name-error" class="error" for="location">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="commodity" name="commodity" class="form-control" value="{{ old('commodity') }}">
                                <label class="form-label">Commodity</label>
                            </div>
                            @error('commodity')
                           		<label id="name-error" class="error" for="commodity">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="rio" name="rio" class="form-control" value="{{ old('rio') }}">
                                <label class="form-label">Rio</label>
                            </div>
                            @error('commodity')
                           		<label id="name-error" class="error" for="commodity">{{ $message }}</label>
                            @enderror
                        </div>


                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="collected_funds" name="collected_funds" class="form-control" value="{{ old('collected_funds') }}">
                                <label class="form-label">Collected Funds</label>
                            </div>
                            @error('collected_funds')
                           		<label id="name-error" class="error" for="collected_funds">{{ $message }}</label>
                            @enderror
                        </div>

                         <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="risk" name="risk" class="form-control" value="{{ old('risk') }}">
                                <label class="form-label">Risk</label>
                            </div>
                            @error('risk')
                           		<label id="name-error" class="error" for="risk">{{ $message }}</label>
                            @enderror
                        </div>


                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea id="farm_description" name="farm_description" class="form-control">{{ old('farm_description') }}</textarea>
                                <label class="form-label">Farm Description</label>
                            </div>
                            @error('farm_description')
                           		<label id="name-error" class="error" for="farm_description">{{ $message }}</label>
                            @enderror
                        </div>


                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="project_date" name="project_date" class="form-control" value="{{ old('project_date') }}">
                                <label class="form-label">Project Date</label>
                            </div>
                            @error('project_date')
                           		<label id="name-error" class="error" for="project_date">{{ $message }}</label>
                            @enderror
                        </div>

                         <div class="form-group form-float">
                            <div class="form-line">
                                <textarea id="project_manager_detail" name="project_manager_detail" class="form-control">{{ old('project_manager_detail') }}</textarea>
                                <label class="form-label">Project Manager Detail</label>
                            </div>
                            @error('project_manager_detail')
                           		<label id="name-error" class="error" for="project_manager_detail">{{ $message }}</label>
                            @enderror
                        </div>

                         <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="farm_owner" name="farm_owner" class="form-control" value="{{ old('farm_owner') }}">
                                <label class="form-label">Farm Owner</label>
                            </div>
                             @error('farm_owner')
                           		<label id="name-error" class="error" for="farm_owner">{{ $message }}</label>
                            @enderror
                        </div>

                         <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" style="padding-left: 180px !important;" id="project_image" name="project_image" class="form-control" placeholder="Project Image" value="{{ old('project_image') }}">
                                <label class="form-label">Project Image</label>
                            </div>
                            @error('project_image')
                           		<label id="name-error" class="error" for="project_image">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" style="padding-left: 180px !important;" id="owner_image" name="owner_image" class="form-control" placeholder="Project Image" value="{{ old('owner_image') }}">
                                <label class="form-label">Owner Image</label>
                            </div>
                             @error('owner_image')
                           		<label id="name-error" class="error" for="owner_image">{{ $message }}</label>
                            @enderror
                        </div>

                         <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" style="padding-left: 180px !important;" id="project_manager_image" name="project_manager_image" class="form-control" placeholder="Project Image" value="{{ old('project_manager_image') }}">
                                <label class="form-label">Project Manager Image</label>
                            </div>
                             @error('project_manager_image')
                           		<label id="name-error" class="error" for="project_manager_image">{{ $message }}</label>
                            @enderror
                        </div>
                       
                        <br>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                    </form>
                </div>
            </div>
           </div>
          </div>
         </div>
@endsection