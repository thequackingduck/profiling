<!DOCTYPE html>
<html>
<head>
  <title>Interview Feedback Form</title>
    <link rel="icon" type="text/css" href="{{URL::to('logo.png')}}"></head>

    <!-- Bootstrap CSS-->
    <link href="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <style>
        .century_gothic{
            font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
        }
        .cambria{
            font-family: Cambria,Georgia,serif;
        }
        .calibri{
            font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; 
        }
        .margin-0rem{
            margin-bottom: 0rem;
        }
        .fsize_15{
            font-size: 15px;
        }
        .checkbox-wrapper-28 label{
            font-family: Cambria,Georgia,serif;
        }
    </style>

    <style>
    .checkbox-wrapper-28 {
        --size: 25px;
        position: relative;
    }

    .checkbox-wrapper-28 *,
    .checkbox-wrapper-28 *:before,
    .checkbox-wrapper-28 *:after {
        box-sizing: border-box;
    }

    .checkbox-wrapper-28 .promoted-input-checkbox {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .checkbox-wrapper-28 input:checked ~ svg {
        height: calc(var(--size) * 0.6);
        -webkit-animation: draw-checkbox-28 ease-in-out 0.2s forwards;
                animation: draw-checkbox-28 ease-in-out 0.2s forwards;
    }
    .checkbox-wrapper-28 label:active::after {
        background-color: #e6e6e6;
    }
    .checkbox-wrapper-28 label {
        color: black;
        line-height: var(--size);
        cursor: pointer;
        position: relative;
    }
    .checkbox-wrapper-28 label:after {
        content: "";
        height: var(--size);
        width: var(--size);
        margin-right: 8px;
        float: left;
        border: 2px solid black;
        border-radius: 3px;
        transition: 0.15s all ease-out;
    }
    .checkbox-wrapper-28 svg {
        stroke: black;
        stroke-width: 3px;
        height: 0;
        width: calc(var(--size) * 0.6);
        position: absolute;
        left: calc(var(--size) * 0.21);
        top: calc(var(--size) * 0.2);
        stroke-dasharray: 33;
    }

    @-webkit-keyframes draw-checkbox-28 {
        0% {
        stroke-dashoffset: 33;
        }
        100% {
        stroke-dashoffset: 0;
        }
    }

    @keyframes draw-checkbox-28 {
        0% {
        stroke-dashoffset: 33;
        }
        100% {
        stroke-dashoffset: 0;
        }
    }
    </style>



<body>
    
    @foreach($model as $feedback)
    <?php $student =  App\Student::where('id', $feedback->student_id)->first(); ?>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 20B</p>
        <div class="container-fluid row pull-center" style="text-align: right;padding-top: 50px;padding-bottom: 10px;">
            <div class="col-md-3" style="text-align: right; position: relative; left: 60px; bottom: 10px;">
                <img src="{{URL::to('logo.png')}}" style="width: 80px;height:80px;" alt="">
            </div>
            <div class="col-md-6" style="text-align: center;">
                <p class="cambria margin-0rem fsize_15">Republic of the Philippines</p>
                <p class="cambria margin-0rem fsize_15" style="font-weight: bold;">BOHOL ISLAND STATE UNIVERSITY-BALILIHAN CAMPUS</p>
                <p class="cambria margin-0rem fsize_15">Magsija, Balilihan, Bohol</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="container-fluid" style="text-align: center;">
            <p class="century_gothic" style="font-style: italic;margin-bottom: 0em;"><b>Vision:</b> A premier S & T university for the formation of world class and virtuous human resource for the sustainable development in Bohol and the country.</p>

            <p class="century_gothic" style="border-bottom: solid 1px;font-style: italic;"><b>Mission:</b> Committed to provide quality and innovative education in strategic sectors for the development of Bohol and the country.</p>
            <p class="cambria" style="text-align: center;font-weight: bold; font-size: 20px;">PRE-COUNSELING INTERVIEW FEEDBACK FORM</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <p class="cambria">Interviewer: </p>
                </div>
                <div class="col-md-5">
                    <p class="cambria" style="text-align: left;font-weight: bold; padding-left: 20px; text-transform: uppercase;">{{$student->lastname}}, {{$student->firstname}} {{substr($student->middlename, 0, 1)}}.</p>
                    <hr style="margin-left: 10px;border-bottom: 1px solid;margin-top: -20px; ">
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: right;">Date: </p>
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: left;font-weight: bold; text-transform: uppercase;">{{Carbon\Carbon::parse($feedback->created_at)->toFormattedDateString()}}</p>
                    <hr style="margin-left: -20px;border-bottom: 1px solid;margin-top: -20px;">
                </div>
            </div>
            <p class="cambria" style="text-align: left;">Directions: Please check your answer.</p>
            <br>
            <p class="cambria" style="text-align: left;">1. Do you think that the venue is suitable?</p>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($feedback->a1 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Very Good    
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($feedback->a1 == 2) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Good
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($feedback->a1 == 3) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Average
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-4" type="checkbox" class="promoted-input-checkbox" @if($feedback->a1 == 4) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-4">
                        Poor
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-5" type="checkbox" class="promoted-input-checkbox" @if($feedback->a1 == 5) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-5">
                        Very Poor
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <p class="cambria" style="text-align: left;">2. How was your overall experience of the interview?</p>
            <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($feedback->a2 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Very Good    
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($feedback->a2 == 2) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Good
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($feedback->a2 == 3) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Average
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-4" type="checkbox" class="promoted-input-checkbox" @if($feedback->a2 == 4) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-4">
                        Poor
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-5" type="checkbox" class="promoted-input-checkbox" @if($feedback->a2 == 5) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-5">
                        Very Poor
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <p class="cambria" style="text-align: left;">3. How satisfied were you with the time you waited for the service?</p>
            <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($feedback->a3 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Very Good    
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($feedback->a3 == 2) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Good
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($feedback->a3 == 3) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Average
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-4" type="checkbox" class="promoted-input-checkbox" @if($feedback->a3 == 4) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-4">
                        Poor
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-5" type="checkbox" class="promoted-input-checkbox" @if($feedback->a3 == 5) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-5">
                        Very Poor
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <p class="cambria" style="text-align: left;">4. How satisfied were you with your interviewer?</p>
            <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($feedback->a4 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Very Good    
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($feedback->a4 == 2) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Good
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($feedback->a4 == 3) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Average
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-4" type="checkbox" class="promoted-input-checkbox" @if($feedback->a4 == 4) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-4">
                        Poor
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-5" type="checkbox" class="promoted-input-checkbox" @if($feedback->a4 == 5) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-5">
                        Very Poor
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <p class="cambria" style="text-align: left;">5. How satisfied were you with the way your facilitator interviewed you?</p>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($feedback->a5 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Very Good    
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($feedback->a5 == 2) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Good
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($feedback->a5 == 3) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Average
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-4" type="checkbox" class="promoted-input-checkbox" @if($feedback->a5 == 4) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-4">
                        Poor
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-5" type="checkbox" class="promoted-input-checkbox" @if($feedback->a5 == 5) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-5">
                        Very Poor
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-1" style="padding-bottom: 30px;"></div>
            </div>
            <p class="cambria" style="text-align: left; padding-top: 30px;">Are there any comments you would wish to make? </p>
            <p class="cambria" style="text-align: left; margin-left: 2rem; font-weight: bold;">{{$feedback->a6}}</p>
            <br>
            <p class="cambria" style="text-align: center;font-style: italic;">Thank you for your feedback!</p>
        </div>
        
        
    </div>
    @endforeach
    
</body>
  <!-- Jquery JS-->
    <script src="{{URL::to('admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
        window.print();
        $('.promoted-input-checkbox').attr('disabled', 'disabled');
    </script>
</html>