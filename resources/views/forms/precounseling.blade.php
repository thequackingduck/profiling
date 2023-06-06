<!DOCTYPE html>
<html>
<head>
  <title>Pre-Counseling Form</title>
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
    
    @foreach($model as $prop)
    <?php 
        $student =  App\Student::where('id', $prop->student_id)->first(); 
    ?>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 8</p>
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
            
            <p class="cambria" style="text-align: center;font-weight: bold; font-size: 20px;">PRE-COUNSELING FORM</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <p class="cambria">Name: </p>
                </div>
                <div class="col-md-3">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{$student->lastname}}, {{$student->firstname}} {{substr($student->middlename, 0, 1)}}.</p>
                    <hr style="margin-left: -30px;border-bottom: 1px solid;margin-top: -17px;">
                </div>
                <div class="col-md-1">
                    <p class="cambria">Course/Year: </p>
                </div>
                <div class="col-md-4">
                    <p class="cambria" style="margin-left: 10px;text-align: left;font-weight: bold;">{{$student->course->course}}/{{$student->yearlevel}}</p>
                    <hr style="margin-left: 10px;border-bottom: 1px solid;margin-top: -17px;">
                </div>
                <div class="col-md-1">
                    <p class="cambria" style="text-align: right;">Date: </p>
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{Carbon\Carbon::parse($prop->created_at)->toFormattedDateString()}}</p>
                    <hr style="margin-left: -20px;border-bottom: 1px solid;margin-top: -17px;">
                </div>
            </div>
            <p class="cambria" style="text-align: left;font-weight: bold;">A. Course</p>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">What motivated you to enroll in your course?</p>
                </div>
                <div class="col-md-12">
                    <p class="cambria" style="text-align: left;"><u>{{$prop->a1}}</u></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">Who made the choice regarding your course?</p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->a2}}</u></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">Who is financing your studies?</p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->a3}}</u></p>
                </div>
            </div>
            <p class="cambria" style="text-align: left;font-weight: bold;">B. Residence</p>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">With whom are you staying?</p>
                </div>
                <div class="col-md-3">
                <p class="cambria" style="text-align: left;">{{$prop->b1}}</p>
                <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: -20px;">
                </div>
                <div class="col-md-3">
                    <p class="cambria">What is his/her contact number? </p>
                </div>
                <div class="col-md-3">
                    <p class="cambria" style="text-align: left;"> {{$prop->b2}}</p>
                    <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: -20px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">How is your relationship with him/her/them? </p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->b3}}</u></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">Are you assigned to do any tasks at home?  </p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->b4}}</u></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">Do you have a place to study?  </p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->b5}}</u></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">When do you usually study?   </p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->b6}}</u></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <p class="cambria">Are you able to concentrate studying at home? </p>
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: left;"> {{$prop->b7}}</p>
                    <hr style="margin-left: -80px;border-bottom: 1px solid;margin-top: -20px;">
                </div>
                <div class="col-md-4">
                <p class="cambria">If not, why? </p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->b8}}</u></p>
                </div>
            </div>
        </div>
        
    </div>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 8</p>
        <div class="container-fluid">
            <p class="cambria" style="text-align: left;font-weight: bold;">C. Family</p>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">What is your birth order? </p>
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: left;"> {{$prop->c1}}</p>
                    <hr style="margin-left: -80px;border-bottom: 1px solid;margin-top: -20px;">
                </div>
                <div class="col-md-6">
                    <p class="cambria" style="text-align: left;">Aside from your present family, who else are living with you?</p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->c2}}</u></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">How can you describe your relationship with your parents? Siblings? </p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->c3}}</u></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">Do you have any concerns with your family? </p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->c4}}</u></p>
                </div>
            </div>
            <p class="cambria" style="text-align: left;font-weight: bold;">D. Personal Life</p>
            <p class="cambria">What are your present concerns or apprehensions in the following areas:</p>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">a. Peers</p>
                </div>
                <div class="col-md-10">
                    <p class="cambria" style="text-align: left;">{{$prop->d1}}</p>
                    <hr style="border-bottom: 1px solid;margin-top: -20px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">b. Financial</p>
                </div>
                <div class="col-md-10">
                    <p class="cambria" style="text-align: left;">{{$prop->d2}}</p>
                    <hr style="border-bottom: 1px solid;margin-top: -20px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">c. Spiritual</p>
                </div>
                <div class="col-md-10">
                    <p class="cambria" style="text-align: left;">{{$prop->d3}}</p>
                    <hr style="border-bottom: 1px solid;margin-top: -20px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">d. Health</p>
                </div>
                <div class="col-md-10">
                    <p class="cambria" style="text-align: left;">{{$prop->d4}}</p>
                    <hr style="border-bottom: 1px solid;margin-top: -20px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">If applicable, have you felt homesick since your stay here in BISU?</p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->d5}}</u></p>
                </div>
            </div>
            <p class="cambria" style="text-align: left;font-weight: bold;">E. Academics</p>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">Do you have subjects that you find difficulty to deal with?</p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->e1}}</u></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="cambria">How is your academic adjustment in BISU? </p>
                </div>
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->e2}}</u></p>
                </div>
            </div>
            <p class="cambria" style="text-align: left;font-weight: bold;">F. Remarks</p>
            <div class="row">
                <div class="col-md-12">
                <p class="cambria" style="text-align: left;"><u>{{$prop->f1}}</u></p>
                </div>
            </div>
            <div class="container-fluid row pull-left">
                <div class="col-md-1"></div>
                <div class="col-md-5" style="text-align: center;">
                    <p class="cambria" style="text-align;padding-top: 60px;margin-bottom: 0rem;font-weight: bold;">{{$student->lastname}}, {{$student->firstname}} {{substr($student->middlename, 0, 1)}}.</p>
                    <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: 0px;margin-bottom: 0rem;">
                    <p class="cambria" style="text-align;">Student’s Signature over Printed Name</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5" style="text-align: center;">
                    <p class="cambria" style="text-align;padding-top: 60px;margin-bottom: 0rem;font-weight: bold;">{{Auth::user()->name}}</p>
                    <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: 0px;margin-bottom: 0rem;">
                    <p class="cambria" style="text-align;">Guidance Counselor</p>
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
        $('.promoted-input-checkbox').attr('disabled', 'disabled');
    </script>
</html>