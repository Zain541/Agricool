@extends('layouts.main')
@section('styles')
    <style>
        .project-area h4{
            font-family: cursive;
            font-size: 28px;
            color: gray;

        }
    </style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="width: 100%; ">
                <img src="{{asset('images/poltery.jpg')}}"  style="height: 500px"  class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="container">
                                <h4 class="text-center">New-Day Poultry Investment</h4>
                                <div class="row mt-5">
                                    <div class="col-sm-12">
                                        <h4>1. Farm Description</h4>
                                        <p>
                                            New-Day Poultry is an agribusiness that is located inMgababa. It is owned by TanduxoloGaxela and
                                            SamukelisiweCele, who both holds N.Dip in Crop Production. They are passionate about agriculture
                                            and they have been running the poultry business for two years. Samukelisiwe is currently
                                            pursuing Btech in Agricultural Management.
                                            They need investment of R30 000 to raise 1000 broilers.
                                        </p>
                                        <h4 class="mt-2">
                                            2. Purpose of the investment
                                        </h4>
                                        <ul>
                                            <li>
                                                Purchase chicks and feed
                                            </li>
                                            <li>
                                                Transport
                                            </li>
                                            <li>
                                                Electricity
                                            </li>
                                            <li>
                                                Vaccine program
                                            </li>
                                            <li>
                                                Stipend
                                            </li>
                                        </ul>
                                        <h4>3. Project Important Dates</h4>
                                        <p>
                                            The project will commence on the 1st of August 2019 and investors are guaranteed to have their
                                            funds by 30th of September 2019 (latest).
                                        </p>
                                        <h4>
                                            4. Project Manager
                                        </h4>
                                        <p>
                                            From AgriCool, the project is managed by Zamokuhle Thwala, who have vast experience in
                                            agriculture.
                                        </p>
                                        <p>
                                            <strong>NOTE:</strong> Please notify Zamokuhle Thwala on 0766476228 or zamokuhlekhu@gmail.com
                                            before investing.
                                        </p>
                                        <h4>5. Want to invest?</h4>
                                        <p><strong>
                                                Send an email to investment@agrikool.com
                                            </strong></p>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--    <section>--}}
{{--    <div class="container">--}}
{{--        <h4 class="text-center">New-Day Poultry Investment</h4>--}}
{{--        <div class="row mt-5">--}}
{{--            <div class="col-sm-12">--}}
{{--                <h4>1. Farm Description</h4>--}}
{{--                <p>--}}
{{--                    New-Day Poultry is an agribusiness that is located inMgababa. It is owned by TanduxoloGaxela and--}}
{{--                    SamukelisiweCele, who both holds N.Dip in Crop Production. They are passionate about agriculture--}}
{{--                    and they have been running the poultry business for two years. Samukelisiwe is currently--}}
{{--                    pursuing Btech in Agricultural Management.--}}
{{--                    They need investment of R30 000 to raise 1000 broilers.--}}
{{--                </p>--}}
{{--                <h4 class="mt-2">--}}
{{--                    2. Purpose of the investment--}}
{{--                </h4>--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        Purchase chicks and feed--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        Transport--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        Electricity--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        Vaccine program--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        Stipend--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <h4>3. Project Important Dates</h4>--}}
{{--                <p>--}}
{{--                    The project will commence on the 1st of August 2019 and investors are guaranteed to have their--}}
{{--                    funds by 30th of September 2019 (latest).--}}
{{--                </p>--}}
{{--                <h4>--}}
{{--                    4. Project Manager--}}
{{--                </h4>--}}
{{--                <p>--}}
{{--                    From AgriCool, the project is managed by Zamokuhle Thwala, who have vast experience in--}}
{{--                    agriculture.--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    <strong>NOTE:</strong> Please notify Zamokuhle Thwala on 0766476228 or zamokuhlekhu@gmail.com--}}
{{--                    before investing.--}}
{{--                </p>--}}
{{--                <h4>5. Want to invest?</h4>--}}
{{--                <p><strong>--}}
{{--                        Send an email to investment@agrikool.com--}}
{{--                    </strong></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </section>--}}
@endsection
