<!DOCTYPE html>
<html>
<head>
  <title>Client-Counselor Interview Feedback Form</title>
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
     .col-md-3{
        position: relative;
        left: 60px;
        bottom: 10px;
    } 
    </style>



<body>

    @foreach($model as $prop)
    <?php $student =  App\Student::where('id', $prop->student_id)->first(); ?>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left; padding: 10px;font-style: italic; ">Guidance Form 20C</p>
        <div class="container-fluid row pull-center" style="text-align: right;padding-top: 0px;padding-bottom: 10px;">
            <div class="col-md-3 mx-9" style="text-align: right; position: relative; left: 60px; bottom: 10px;">
                <img src="{{URL::to('logo.png')}}" style="width: 80px;height:80px;" alt="">
            </div>
            <div class="col-md-6 " style="text-align: center;">
                <p class="cambria margin-0rem fsize_16">Republic of the Philippines</p>
                <p class="cambria margin-0rem fsize_16" style="font-weight: bold;">BOHOL ISLAND STATE UNIVERSITY-BALILIHAN CAMPUS</p>
                <p class="cambria margin-0rem fsize_16">Magsija, Balilihan, Bohol</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="container-fluid" style="text-align: center;">
            <p class="century_gothic" style="font-style: italic;margin-bottom: 0em; "><b>Vision:</b> A premier S & T university for the formation of world class and virtuous human resource for the sustainable development in Bohol and the country</p>
            
            <p class="century_gothic" style="border-bottom: solid 1px;font-style: italic; "><b>Mission:</b> Committed to provide quality and innovative education in strategic sectors for the development of Bohol and the country.</p>
            <p class="cambria margin-0rem" style="text-align: center;font-weight: bold; padding: 10px; font-size: 20px;">CLIENT-COUNSELOR FEEDBACK FORM</p>
        </div>
        <div class="container-fluid row">
            <div class="col-md-1">
                <p class="cambria">Counselor: </p>
            </div>
            <div class="col-md-5">
                <p class="cambria" style="text-align: left;font-weight: bold;">{{App\User::where('role_id', 0)->first()->name}}</p>
                <hr style="margin-left: 0px;border-bottom: 1px solid;margin-top: -20px; width: 70%;">
            </div>
            <div class="col-md-2">
                <p class="cambria" style="text-align: right;">Date: </p>
            </div>
            <div class="col-md-4" style="position: relative; left: -20px;">
                <p class="cambria" style="text-align: left; font-weight: bold;">{{Carbon\Carbon::parse($prop->created_at)->toFormattedDateString()}}</p>
                <hr style="margin-left: 0px;border-bottom: 1px solid;margin-top: -20px; width: 40%;">
            </div>
        </div>

        <div class="container-fluid">
            <p class="cambria" style="text-align: left; padding-left: 10px;font-style: italic;">This form allows you an opportunity to provide feedback to your counselor after your sessions have finished. This will help your counselor’s professional development as well as helping him to improve the service offered to others.</p>
            <p class="cambria" style="text-align: left; padding-left: 10px;font-style: italic;">Directions: Please place a mark in the box which most closely corresponds to how you feel about each statement.</p>
            <p class="cambria margin-0rem" style="text-align: left; padding: 10px;font-weight: bold;">About the Working Relationship with your Counselor</p>
        </div>

        <table class="table table-bordered">
            <thead>
              <tr>
                  <th style="text-align: center; font-weight: bold;width: 50%;" class="cambria"></th>
                  <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">Strongly Agree</th>
                  <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">Somewhat Agree</th>
                  <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">No Strong Feeling</th>
                  <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">Somewhat Disagree</th>
                  <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">Strongly Disagree</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px; padding: 10px;">My counselor listened to me effectively.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px; padding: 10px;">@if($prop->a1 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a1 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a1 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a1 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a1 == '1') &#10004; @endif</td>
                </tr>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">My counselor understood things from my point of view.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a2 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a2 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a2 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a2 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a2 == '1') &#10004; @endif</td>
                </tr>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">My counselor focused on what was important to me.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a3 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a3 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a3 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a3 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a3 == '1') &#10004; @endif</td>
                </tr>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">My counselor accepted what I said without judging me.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a4 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a4 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a4 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a4 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a4 == '1') &#10004; @endif</td>
                </tr>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">My counselor showed warmth toward me.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a5 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a5 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a5 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a5 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a5 == '1') &#10004; @endif</td>
                </tr>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">My counselor fostered a safe and trusting environment.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a6 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a6 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a6 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a6 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a6 == '1') &#10004; @endif</td>
                </tr>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">My counselor began and finished our sessions on time.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a7 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a7 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a7 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a7 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a7 == '1') &#10004; @endif</td>
                </tr>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">My counselor followed my lead during our sessions whenever that was appropriate.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a8 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a8 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a8 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a8 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a8 == '1') &#10004; @endif</td>
                </tr>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">My counselor provided leadership during sessions when/if that was appropriate.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a9 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a9 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a9 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a9 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a9 == '1') &#10004; @endif</td>
                </tr>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">My counselor challenged me when/if that was appropriate.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a10 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a10 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a10 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a10 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a10 == '1') &#10004; @endif</td>
                </tr>
            </tbody>
        </table>

        <div class="container-fluid">
            <p class="cambria margin-0rem" style="text-align: left; padding: 10px;font-weight: bold;">About the Results of Working with your Counselor</p>
        </div>
        <table class="table table-bordered">
            <thead>
              <tr>
                  <th style="text-align: center; font-weight: bold;width: 50%;" class="cambria"></th>
                  <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">Strongly Agree</th>
                  <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">Somewhat Agree</th>
                  <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">No Strong Feeling</th>
                  <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">Somewhat Disagree</th>
                  <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">Strongly Disagree</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">The sessions with my counselor helped me with whatever originally led me to seek counseling.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a11 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a11 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a11 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a11 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a11 == '1') &#10004; @endif</td>
                </tr>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">Any changes which might have occurred in me as a result of my counseling have been positive.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a12 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a12 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a12 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a12 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a12 == '1') &#10004; @endif</td>
                </tr>
                <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">Based on my experience, I would recommend my counselor to others.</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a13 == '5') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a13 == '4') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a13 == '3') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a13 == '2') &#10004; @endif</td>
                    <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;">@if($prop->a13 == '1') &#10004; @endif</td>
                </tr>
            </tbody>
        </table>

        <p class="cambria" style="text-align: left; font-weight: bold;">Other Comments</p>
        <p class="cambria" style="text-align: left; font-weight: bold; text-transform: uppercase; margin-left: 2em;">{{$prop->a14}}</p>
        
<div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-8" style="text-align: center; position: relative; bottom: -50px; margin-bottom: 0px !important;">       
                <p class="cambria" style="text-align: center; margin-bottom: 0px !important; text-transform: uppercase; font-weight: bold;">{{$student->firstname}} {{$student->middlename}} {{$student->lastname}}</p>
                <hr style="border-bottom: 1px solid; position: relative; top: -20px; width: 70%; margin-bottom: 0px !important;">
                <p class="cambria" style="text-align: center; position: relative; top: -20px;">Name of Student</p>
                
            </div>
</div>
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