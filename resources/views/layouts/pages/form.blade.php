@extends('layouts.main')
@section('styles')
    <style>
        .form-custom {
            margin-left: 21%;
            width: 60%;
            background-color: #c1c6ca8f;
            margin-bottom: 40px;
            padding: 25px;
            margin-top: 20px;
        }
    </style>
    @endsection

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
                <form action="{{route('aggrement.store')}}" method="post">
                    @csrf
                    <div class="form-custom form_data">
                        <div class="container">
                            <div class="row bg-dark mb-5">
                                <div class="col-sm-12">
                                    <div class="row">

                                        <div class="col-sm-6 offset-3 pt-2">
                                            <h3 class="text-white text-center">Agreement Form</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="col-sm-4 mb-3">

                                <label for="first_name">Surname</label>
                                <input type="text" class="form-control" name="surname"  placeholder="Enter surname" required>
                                <div class="invalid-feedback">This field is required</div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="middle_name">Name</label>
                                <input type="text" class="form-control"  name="name" placeholder="Name" required>
                                <div class="invalid-feedback">This field is required</div>
                            </div>

                        </div>
                        <div class="form-row justify-content-center">
                            <div class="col-sm-4 mb-3">

                                <label for="first_name">Email Address</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Email Address" required>
                                <div class="invalid-feedback">This field is required</div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="middle_name">Cell No</label>
                                <input type="text" class="form-control"  name="number" placeholder="Enter Cell no" required>
                                <div class="invalid-feedback">This field is required</div>
                            </div>

                        </div>
                        <div class="form-row justify-content-center">
                            <div class="col-sm-8 mb-3">

                                <label for="first_name">Address</label>
                                <input type="text" class="form-control" name="address"  placeholder="Enter Address" required>
                                <div class="invalid-feedback">This field is required</div>
                            </div>
                        </div>
                        <div class="form-row float-right">
                            <div class="col-sm-8 ">

                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @endsection
