<!DOCTYPE html>
<html>
<head>
  <title>University Leaver's Checklist</title>
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
    @foreach($leavers as $leaver)
        <?php $student =  App\Student::where('id', $leaver->student_id)->first(); ?>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 25</p>
        <div class="container-fluid row pull-center" style="text-align: right;padding-top: 10px;padding-bottom: 10px;">
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
            <p class="cambria" style="text-align: center;font-weight: bold;">Guidance Center</p>
            <p class="cambria" style="text-align: center;font-weight: bold; font-size: 20px;">UNIVERSITY LEAVER’S CHECKLIST</p>
        </div>
        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-1">
                    <p class="cambria">Name: </p>
                </div>
                <div class="col-md-6">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{$student->lastname}}, {{$student->firstname}} {{substr($student->middlename, 0, 1)}}.</p>
                    <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: -17px;">
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: right;">Year/Section: </p>
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{$student->yearlevel}} / {{$student->section}}</p>
                    <hr style="margin-left: -20px;border-bottom: 1px solid;margin-top: -17px;">
                </div>
            </div>
            <p class="cambria" style="text-align: left;">Reason for Referral:</p>
            <div class="row" style="margin-left: 1rem;">
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($leaver->c1 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Academic Failure/Problem   
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($leaver->c2 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Joining Gangs
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($leaver->c3 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Adjustment Problem 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-4" type="checkbox" class="promoted-input-checkbox" @if($leaver->c4 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-4">
                        Kicked –Out/ Expelled/Terminated
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-5" type="checkbox" class="promoted-input-checkbox" @if($leaver->c5 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-5">
                        Boredom /Motivation Problem 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-6" type="checkbox" class="promoted-input-checkbox" @if($leaver->c6 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-6">
                        Mental Health Problem
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-7" type="checkbox" class="promoted-input-checkbox" @if($leaver->c7 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-7">
                        Change of Course/Career  
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-8" type="checkbox" class="promoted-input-checkbox" @if($leaver->c8 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-8">
                        Prejudice/Discrimination /Bullying
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-9" type="checkbox" class="promoted-input-checkbox" @if($leaver->c9 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-9">
                        Drugs/Drug Abuse
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-10" type="checkbox" class="promoted-input-checkbox" @if($leaver->c10 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-10">
                        School Is Not Important/No one Cares	
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-11" type="checkbox" class="promoted-input-checkbox" @if($leaver->c11 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-11">
                        Early Pregnancy 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-12" type="checkbox" class="promoted-input-checkbox" @if($leaver->c12 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-12">
                        Single Parenting/Early 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-13" type="checkbox" class="promoted-input-checkbox" @if($leaver->c13 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-13">
                        Family Problem 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-14" type="checkbox" class="promoted-input-checkbox" @if($leaver->c14 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-14">
                        Teacher and School Problem
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-15" type="checkbox" class="promoted-input-checkbox" @if($leaver->c15 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-15">
                        Financial Problem  
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-16" type="checkbox" class="promoted-input-checkbox" @if($leaver->c16 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-16">
                        Transfer of Residence
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-17" type="checkbox" class="promoted-input-checkbox" @if($leaver->c17 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-17">
                        Health Problem   
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-18" type="checkbox" class="promoted-input-checkbox" @if($leaver->c18 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-18">
                        Transfer of School/University
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-19" type="checkbox" class="promoted-input-checkbox" @if($leaver->c19 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-19">
                        Homesickness
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-20" type="checkbox" class="promoted-input-checkbox" @if($leaver->c20 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-20">
                        Working Student/Part-time 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-21" type="checkbox" class="promoted-input-checkbox" @if($leaver->c21 == 1) checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-21">
                        Others: (Please specify.)
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6">
                <p class="cambria" style="text-align: left;"><u>{{$leaver->others}}</u></p>
                
                </div>
            </div>
            <p></p>
            <p class="cambria" style="text-align: left;">Details:</p>
            <p class="cambria" style="text-align: left;">{{$leaver->details}}</p>
        </div>
        <div class="container-fluid row pull-center">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="text-align: center;">
                <p class="cambria" style="text-align;padding-top: 60px;margin-bottom: 0rem;font-weight: bold;">{{$student->lastname}}, {{$student->firstname}} {{substr($student->middlename, 0, 1)}}.</p>
                <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: 0px;margin-bottom: 0rem;">
                <p class="cambria" style="text-align;">Name & Signature of Student</p>
            </div>
            <div class="col-md-3"></div>
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