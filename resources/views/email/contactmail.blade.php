<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mail</title>
<style>
    .form-group {
        margin-bottom: 1rem;
    }
    .col-form-label {
        padding-top: calc(.375rem + 1px);
        padding-bottom: calc(.375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5;
    }
    .col-form-label {
        padding-top: calc(.375rem + 1px);
        padding-bottom: calc(.375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5;
    }
    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, col-sm-12, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }
    @media (min-width: 576px){
        .col-sm-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
        }
    }
    .col-sm-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
    }
    col-sm-12 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }
    .form-control-plaintext {
        display: block;
        width: 100%;
        padding-top: .375rem;
        padding-bottom: .375rem;
        margin-bottom: 0;
        line-height: 1.5;
        color: #212529;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0;
    }
    .form-control-plaintext {
        display: block;
        width: 100%;
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        margin-bottom: 0;
        line-height: 1.5;
        color: #212529;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0;
    }
    .col-sm-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }
    .col-form-label {
        padding-top: calc(0.375rem + 1px);
        padding-bottom: calc(0.375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5;
    }
    strong {
        font-weight: bolder;
    }
    .text-center {
        text-align: center !important;
    }
    .container{max-width:1140px}
    .   row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}

</style>
</head>
<body>


<div class="container">
    <div class="form-group row">
        <div class="col-sm-12">
            <img src="{{asset('images/logo.jpg')}}" style="width: 10%;" alt="">
        </div>
    </div>
    <h4 class="text-center">Contact Mail</h4>
    <div class="row">

    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Surname :</strong></label>
        <div class="col-sm-12">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="
            {{$email->surname}}">
        </div>
    </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Name</strong></label>
            <div class="col-sm-12">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $email->name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Email From</strong></label>
            <div class="col-sm-12">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $email->email }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Cell No</strong></label>
            <div class="col-sm-12">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $email->number }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Address</strong></label>
            <div class="col-sm-12">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $email->address }}">
            </div>
        </div>
    </div>
</div>
{{--    <div class="row">--}}
{{--        <div class="col-sm-4">--}}
{{--            <h4>Surname :</h4>--}}
{{--        </div>--}}
{{--        <div class="col-sm-4">--}}
{{--            {{$email->surname}}aaa--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-4">--}}
{{--          <h4>Name :</h4>--}}
{{--        </div>--}}
{{--        <div class="col-sm-4">--}}
{{--            {{ $email->name }}--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-4">--}}
{{--            <h4> Email From :</h4>--}}
{{--        </div>--}}
{{--        <div class="col-sm-4">--}}
{{--            {{$email->email }}--}}

{{--        </div>--}}
{{--        <div class="col-sm-4">--}}
{{--            <h4>Cell  No :</h4>--}}
{{--        </div>--}}
{{--        <div class="col-sm-4">--}}
{{--            {{$email->cell}}--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-4">--}}
{{--            <h4>Address :</h4>--}}
{{--        </div>--}}
{{--        <div class="col-sm-4">--}}
{{--            {{$email->address}}--}}

{{--        </div>--}}
{{--    </div>--}}

   </body>
</html>


