<!DOCTYPE html>
<html>
<head>
  <title>Evaluation Form</title>
    <link rel="icon" type="text/css" href="{{URL::to('logo.png')}}"></head>

    <!-- Bootstrap CSS-->
    <link href="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
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
        tr td{
            line-height: 1;
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

    @foreach($model as $prop)
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left; padding: 5px;font-style: italic;">Guidance Form 20</p>
        <div class="container-fluid row pull-center" style="text-align: right;padding-bottom: 10px;">
            <div class="col-md-3" style="text-align: right; position: relative; left: 60px; bottom: 10px;">
                <img src="{{URL::to('logo.png')}}" style="width: 80px;height:80px;" alt="">
            </div>
            <div class="col-md-6" style="text-align: center; ">
                <p class="cambria margin-0rem fsize_16">Republic of the Philippines</p>
                <p class="cambria margin-0rem fsize_16" style="font-weight: bold;">BOHOL ISLAND STATE UNIVERSITY-BALILIHAN CAMPUS</p>
                <p class="cambria margin-0rem fsize_16">Magsija, Balilihan, Bohol</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="container-fluid" style="text-align: center;">
            <p class="century_gothic" style="font-style: italic;margin-bottom: 0em; "><b>Vision:</b> A premier S & T university for the formation of world class and virtuous human resource for the sustainable development in Bohol and the country.</p>
            <p class="century_gothic" style="border-bottom: solid 1px;font-style: italic; "><b>Mission:</b> Committed to provide quality and innovative education in strategic sectors for the development of Bohol and the country.</p>
            
            <p class="cambria" style="text-align: center;font-weight: bold; font-size: 20px;">EVALUATION FORM</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Title of Activity/Seminar: </p>
                </div>
                <div class="col-md-6" style="margin-left: -80px;">
                    <p class="cambria" style="text-align: left; padding-bottom: 10px;font-weight: bold; text-transform: uppercase;"><u>{{$activity->title}}</u></p>
                    
                </div>
                <div class="col-md-1">
                    <p class="cambria" style="text-align: right;">Date: </p>
                </div>
                <div class="col-md-2" style="margin-left: -25px;">
                    <p class="cambria" style="text-align: left; padding-bottom: 10px;font-weight: bold; text-transform: uppercase;"><u>{{Carbon\Carbon::parse($activity->date)->toFormattedDateString()}}</u></p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Facilitator/s: </p>
                </div>
                <div class="col-md-10" style="margin-left: -80px;">
                    <p class="cambria" style="text-align: left; padding-bottom: 10px;font-weight: bold; text-transform: uppercase;"><u>{{$activity->facilitators}}</u></p>
                    
                </div>
            </div>
            <p class="cambria" style="text-align: left; padding-bottom: 10px;font-style: italic;">Directions: Please evaluate the activity by putting a check mark in the appropriate column by using the scale below.</p>
            
            <div class="row">
                <div class="col-md-6" style="text-align: left; padding: 5px;padding-left: 150px;">
                    <p class="cambria margin-0rem">5 – Excellent</p>
                    <p class="cambria margin-0rem">4 – Very Satisfactory</p>
                    <p class="cambria margin-0rem">3 – Good Enough/Satisfactory</p>
                    <p class="cambria margin-0rem">2 – Fair Enough</p>
                    <p class="cambria">1 – Poor</p>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="text-align: center; font-weight: bold; padding: 10px;" class="cambria">Factors</th>
                    <th style="text-align: center; font-weight: bold; padding: 10px;" class="cambria">5</th>
                    <th style="text-align: center; font-weight: bold; padding: 10px;" class="cambria">4</th>
                    <th style="text-align: center; font-weight: bold; padding: 10px;" class="cambria">3</th>
                    <th style="text-align: center; font-weight: bold; padding: 10px;" class="cambria">2</th>
                    <th style="text-align: center; font-weight: bold; padding: 10px;" class="cambria">1</th>
                    <th style="text-align: center; font-weight: bold; padding: 10px;" class="cambria">NA</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;">A. Presentation</td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">1.	Organization and Flow</td>
                        <td style="text-align: center;">@if($prop->a1 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a1 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a1 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a1 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a1 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a1 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">2.	Clarity</td>
                        <td style="text-align: center;">@if($prop->a2 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a2 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a2 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a2 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a2 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a2 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">3.	Conciseness</td>
                        <td style="text-align: center;">@if($prop->a3 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a3 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a3 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a3 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a3 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a3 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">4.	Methodology</td>
                        <td style="text-align: center;">@if($prop->a4 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a4 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a4 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a4 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a4 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a4 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">5.	Quality of Materials</td>
                        <td style="text-align: center;">@if($prop->a5 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a5 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a5 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a5 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a5 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a5 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">6.	Pacing of Activities</td>
                        <td style="text-align: center;">@if($prop->a6 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a6 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a6 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a6 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a6 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a6 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">7.	Timing of the Activity</td>
                        <td style="text-align: center;">@if($prop->a7 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a7 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a7 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a7 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a7 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->a7 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;">B. Resource Speaker/s</td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">1.	Preparedness</td>
                        <td style="text-align: center;">@if($prop->b1 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b1 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b1 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b1 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b1 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b1 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">2.	Knowledge</td>
                        <td style="text-align: center;">@if($prop->b2 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b2 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b2 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b2 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b2 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b2 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">3.	Communication</td>
                        <td style="text-align: center;">@if($prop->b3 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b3 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b3 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b3 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b3 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->b3 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;">C. Venue</td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">1.	Quality of Audio-Visual Presentation</td>
                        <td style="text-align: center;">@if($prop->c1 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c1 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c1 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c1 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c1 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c1 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">2.	Room Set-Up</td>
                        <td style="text-align: center;">@if($prop->c2 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c2 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c2 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c2 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c2 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c2 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">3.	Sound System</td>
                        <td style="text-align: center;">@if($prop->c3 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c3 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c3 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c3 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c3 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c3 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">4.	Lighting</td>
                        <td style="text-align: center;">@if($prop->c4 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c4 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c4 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c4 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c4 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->c4 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;">F. Theme </td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">1.	Attainment of Objectives</td>
                        <td style="text-align: center;">@if($prop->f1 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->f1 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->f1 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->f1 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->f1 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->f1 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">2.	Relevance of the Activity</td>
                        <td style="text-align: center;">@if($prop->f2 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->f2 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->f2 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->f2 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->f2 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->f2 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;">G. Impact</td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                        <td style="text-align: center;background-color: #adaaaa;"></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">1.	Contribution of Knowledge</td>
                        <td style="text-align: center;">@if($prop->g1 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g1 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g1 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g1 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g1 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g1 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">2.	Skills Development</td>
                        <td style="text-align: center;">@if($prop->g2 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g2 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g2 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g2 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g2 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g2 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;padding-left: 30px;">3.	Involvement of Participants</td>
                        <td style="text-align: center;">@if($prop->g3 == '5')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g3 == '4')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g3 == '3')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g3 == '2')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g3 == '1')<i class="fa fa-check"></i>@endif</td>
                        <td style="text-align: center;">@if($prop->g3 == 'NA')<i class="fa fa-check"></i>@endif</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria" style="text-align: left; padding: 5px;">H. Comments and Suggestions for Improvement</p>
                </div>
                <div class="col-md-12">
                    <p class="cambria" style="text-align: left; padding: 5px;">{{$prop->h1}}</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
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
    </script>
</html>