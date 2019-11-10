@extends('layouts.main')
@section('styles')
    <style>
        .breadcrumb-area .breadcrumb-text h2 {
            color: #ffffff;
            text-transform: uppercase;
            margin-bottom: 0;
            font-size: 40px;
        }

    </style>
    @endsection
@section('content')
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('{{asset('images/bg-img/18.jpg')}}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2 class="text-center">Agreement </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="famie-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">

                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Agreement</li>
                    </ol>
                    </nav>
                </div>
            </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center mb-5">
                   <strong>Investors Terms and Condition of AgriCool</strong>
                </h3>
                <p>
                   <strong> Terms and Conditions of AgriCool a project by Woowie [2018/576904/07]
                   </strong>
                </p>
                <h5 class="mb-3"> <strong>
                        <span>
                        1 .
                    </span>
                        Aims And Objectives
                    </strong>
                </h5>
                <p>
                    <span>1.1</span>
                    To promote personal and group development.
                </p>
                <p>
                    <span>1.2</span>
                    To collect funds through crowdfunding with a purpose of investing in agribusinesses.
                </p>
                <p>
                    <span>
                        1.3
                    </span>
                    The aim of this crowd farming or crowdfunding is to pool funds for the following purpose:
                </p>
                <p>
                    <span>1.3.1</span>
                    Empower farmers to start and grow their agribusinesses

                </p>
                <p>
                    <span>
                        1.3.2
                    </span>
                    Create a community for financial empowerment.
                </p>

            </div>
            <div class="col-sm-12 mt-3">
                <h5 class="mb-3"><strong>
                         <span>
                        2.
                    </span>
                        Investor
                    </strong>

                </h5>
                <p>
                    <span>
                        2.1
                    </span>
                    Investors will supply AgriCool with their personal details (ID number, bank account (for funds disbursement), and residential address).
                </p>
                <p>
                    <span>
                        2.2
                    </span>
                    Investors must read and comprehend terms and conditions before investing.
                </p>
            </div>
            <div class="col-sm-12 mt-3">
                <h5 class="mb-3"> <strong>
                         <span>
                        3.
                    </span>
                        Communication
                    </strong>

                </h5>
                <p>
                    <span>3.1</span>
                    Investors are entitled to financials, which will be supplied weekly.
                </p>
                <p>
                    <span>
                        3.2
                    </span>
                    Investors will be updated weekly through WhatsApp groups and emails on farm proceedings.
                </p>
            </div>
            <div class="col-sm-12 mt-3">
                <h5 class="mb-3">
                    <strong>
                         <span>
                        4.
                    </span>
                        Investments
                    </strong>

                </h5>
                <p>
                    <span>
                        4.1
                    </span>
                    Investors can invest from R500 and in units of R500 to a farming project.
                </p>
                <p>
                    <span>4.2</span>
                    Depending whether it is a short, medium- or long-term investment, investors can get return on investment up to 25%.
                </p>
                <p>
                    <span>
                        4.3
                    </span>
                    Investor can invest in more than one projects.
                </p>
                <p>
                    <span>4.4</span>
                    After investing, a proof of payment must be emailed to AgriCool as soon as possible with the name of the project you are invest in.
                </p>
                <p>
                    <span>4.5</span>
                    The investment commences on the date stipulate on farm important dates, not necessarily on the date an investor sends money to AgriCool.
                </p>

            </div>
            <div class="col-sm-12 mt-3">
                <h5 class="mb-3"><strong>
                        <span>5.</span>
                        Funds disbursement
                    </strong>

                </h5>
                <p>
                    <span>
                        5.1
                    </span>
                    Return on investment will be paid after the duration of the investment plus a maximum of 14 clearance days
                </p>
                <p>
                    <span>
                        5.2
                    </span>
                    Return on investment will be paid directly to the member’s bank account.
                </p>

            </div>
            <div class="col-sm-12 mt-3">
                <h5 class="mb-3"><strong>
                         <span>
                        6.
                    </span>
                        Withdrawal from investing
                    </strong>

                </h5>
                <p>
                    <span>6.1</span>
                    The investor must give thirty (30) days’ notice prior to withdrawing. As a penalty, return of investment will be forfeited.
                </p>
            </div>
            <div class="col-sm-12 mt-3 mb-5">
                <h5 class="mb-3"><strong>
                        <span>
                        7.
                    </span>
                        Declaration
                    </strong>

                </h5>
                <p>
                    <span>
                          <input type="checkbox" class="form-check-input mr-2" value="">
                    </span>
                    I, ……………………………………………………………………., ID ………………………………………………………. <br>
                    hereby accept the terms and conditions constituted herein. This agreement was made on the …………. day of ……………in the year …………
                </p>
            </div>
        </div>
    </div><div class="container">
        <div class="row">
                <div class="col-sm-12 mb-3">
                    <a href="{{route('form')}}" class="btn btn-primary">Apply Now</a>
                </div>
        </div>

    </div>

    @endsection
