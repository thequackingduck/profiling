<!DOCTYPE html>
<html>
<head>
  <title>PFC Membership Form</title>
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
        $schedule = App\MembershipSchedule::where('membership_id', $prop->id)->first();
    ?>

    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 22</p>
        <div class="container-fluid row pull-center" style="text-align: right;padding-top: 10px;padding-bottom: 10px;">
            <div class="col-md-3" style="text-align: right; position: relative; left: 60px; bottom: 10px;">
                <img src="{{URL::to('logo.png')}}" style="width: 80px;height:80px;" alt="">
            </div>
            <div class="col-md-6" style="text-align: center;">
                <p class="cambria margin-0rem fsize_15">Republic of the Philippines</p>
                <p class="cambria margin-0rem fsize_15" style="font-weight: bold;">BOHOL ISLAND STATE UNIVERSITY-BALILIHAN CAMPUS</p>
                <p class="cambria margin-0rem fsize_15">Magsija, Balilihan, Bohol</p>
            </div>
           
        </div>
        <div class="container-fluid" style="text-align: center;">
            <p class="century_gothic" style="font-style: italic;margin-bottom: 0em;"><b>Vision:</b> A premier S & T university for the formation of world class and virtuous human resource for the sustainable development in Bohol and the country.</p>
            <p class="century_gothic" style="border-bottom: solid 1px;font-style: italic;"><b>Mission:</b> Committed to provide quality and innovative education in strategic sectors for the development of Bohol and the country.</p>
            <p class="cambria margin-0rem" style="text-align: center;font-weight: bold; font-size: 20px;">MEMBERSHIP FORM</p>
            <p class="cambria" style="text-align: center;">Peer Facilitators’ Circle</p>
        </div>

        <div class="row container-fluid">
            <div class="col-md-9">
                <table class="table table-bordered" style="border: 1px solid;">
                    <tr>
                        <td class="cambria" style="text-align: center;font-weight: bold;  padding: 10px;" colspan="5"></td>
                    </tr>
                    
                    <tbody>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 10px;" colspan="2">Complete Name: <b style="padding-left: 20px; font-weight: bold; text-transform: uppercase;">{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</b></td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 10px;">Nickname: <b style="padding-left: 20px; font-weight: bold; text-transform: uppercase;">{{$prop->a2}}</b></td>
                            <td class="cambria" style="text-align: left; padding: 10px;">Course & Year: <b style="padding-left: 20px; font-weight: bold; text-transform: uppercase;">{{$student->course->course}} - {{$student->yearlevel}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;" colspan="2">City Address: <b style="padding-left: 20px; font-weight: bold; text-transform: uppercase;">{{$prop->a4}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;" colspan="2">Home Address: <b style="padding-left: 20px; font-weight: bold; text-transform: uppercase;">{{$prop->a5}}</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3" style="border: 1px solid; height: 200px !Important;">
                <p class="cambria" style="text-align: center;padding-top: 50px;">2x2 Photo</p>
            </div>
        </div>
        <div class="container-fluid">
            <table class="table table-bordered" style="border: 1px solid;">
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;" colspan="2">Cellphone No.: <b style="padding-left: 20px;">{{$prop->a6}}</b></td>
                        <td class="cambria" style="text-align: left; padding: 5px;" colspan="2">Landline No.: <b style="padding-left: 20px;">{{$prop->a7}}</b></td>
                        <td class="cambria" style="text-align: left; padding: 5px;" colspan="2">E-mail Address: <b style="padding-left: 20px;">{{$prop->a8}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;" >Age: <b style="padding-left: 20px;">{{Carbon\Carbon::parse($student->dateofbirth)->age}}</b></td>
                        <td class="cambria" style="text-align: left; padding: 5px; " >Sex: <b style="padding-left: 20px; font-weight: bold; text-transform: uppercase;">{{strtoupper($student->sex)}}</b></td>
                        <td class="cambria" style="text-align: left; padding: 5px;" colspan="2">Birth Date: <b style="padding-left: 10px; font-weight: bold; text-transform: uppercase;">{{Carbon\Carbon::parse($student->dateofbirth)->toFormattedDateString()}}</b></td>
                        <td class="cambria" style="text-align: left; padding: 5px;" colspan="3">Birth Place: <b style="padding-left: 20px; font-weight: bold; text-transform: uppercase;">{{$prop->a12}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;" colspan="3">Civil Status: <b style="padding-left: 20px; font-weight: bold; text-transform: uppercase;">{{$prop->a13}}</b></td>
                        <td class="cambria" style="text-align: left;" colspan="2">Religious Preference: <b style="padding-left: 20px; font-weight: bold; text-transform: uppercase;">{{$prop->a14}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;font-weight: bold;  padding: 5px;" colspan="5">Family Background</td>
                    </tr>
                    <tr>
                        <td class="cambria"></td>
                        <td class="cambria" style="text-align: center;" colspan="2">Name</td>
                        <td class="cambria" style="text-align: center;">Occupation</td>
                        <td class="cambria" style="text-align: center;">Contact No.</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">Father</td>
                        <td class="cambria" style="text-align: center; padding: 10px; font-weight: bold; text-transform: uppercase;" colspan="2"><b>{{$prop->b1}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 10px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->b2}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 10px;"><b>{{$prop->b3}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">Mother</td>
                        <td class="cambria" style="text-align: center; padding: 10px;font-weight: bold; text-transform: uppercase;" colspan="2"><b>{{$prop->b4}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 10px;font-weight: bold; text-transform: uppercase;"><b>{{$prop->b5}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 10px;"><b>{{$prop->b6}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">Guardian</td>
                        <td class="cambria" style="text-align: center; padding: 10px; font-weight: bold; text-transform: uppercase;" colspan="2"><b>{{$prop->b7}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 10px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->b8}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 10px; "><b>{{$prop->b9}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;" colspan="3">No. of Siblings: <b style="padding-left: 20px;">{{$prop->b10}}</b></td>
                        <td class="cambria" style="text-align: left; padding: 10px;" colspan="2">Birth Rank: <b style="padding-left: 20px;">{{$prop->b11}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;font-weight: bold; " colspan="5">Educational Background</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="cambria" style="text-align: center; padding: 5px;">Name of School & Address</td>
                        <td class="cambria" style="text-align: center; padding: 5px;">Program</td>
                        <td class="cambria" style="text-align: center; padding: 5px;">Year Graduated</td>
                        <td class="cambria" style="text-align: center; padding: 5px;">Honors Received</td>
                    </tr>
                        <td class="cambria" style="text-align: left; padding: 10px; ">Elementary</td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c1}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c2}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c3}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c4}}</b></td>
                    </tr>
                    </tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">Secondary</td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c5}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c6}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c7}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c8}}</b></td>
                    </tr>
                    </tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">Vocational</td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c9}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c10}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c11}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c12}}</b></td>
                    </tr>
                    </tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">College</td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c13}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c14}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c15}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; font-weight: bold; text-transform: uppercase;"><b>{{$prop->c16}}</b></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container-fluid">
            <table class="table table-bordered">
                    <tr>
                        <td class="cambria" style="text-align: center;font-weight: bold; background-color: gray; color: white; padding: 10px;" colspan="5"></td>
                    </tr>
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px; width: 100px;" >Talents</td>
                        <td class="cambria" style="text-align: left;" colspan="6"><b style="padding-left: 20px;">{{$prop->d1}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px; width: 100px;">Interests</td>
                        <td class="cambria" style="text-align: left;" colspan="6"><b style="padding-left: 20px;">{{$prop->d2}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 5px; width: 100px;">Hobbies</td>
                        <td class="cambria" style="text-align: left;" colspan="6"><b style="padding-left: 20px;">{{$prop->d3}}</b></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container-fluid row pull-left">
            <div class="col-md-1"></div>
            <div class="col-md-6" style="text-align: center;">
                <p class="cambria" style="text-align;padding-top: 60px;margin-bottom: 0rem;font-weight: bold;font-style: uppercase;">{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</p>
                <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: 0px;margin-bottom: 0rem;">
                <p class="cambria" style="text-align;">Signature over Printed Name</p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4" style="text-align: center;">
                <p class="cambria" style="text-align;padding-top: 60px;margin-bottom: 0rem;font-weight: bold;font-style: uppercase;">{{Carbon\Carbon::parse($prop->created_at)->toFormattedDateString()}}</p>
                <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: 0px;margin-bottom: 0rem;">
                <p class="cambria" style="text-align;">Date</p>
            </div>
        </div>

    </div>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 22</p>

        <div class="container-fluid" style="padding-top: 10px;">
            <p class="cambria" style="text-align: center;font-weight: bold;">{{App\Schoolyear::where('status', 1)->first()->name}}</p>
            <!--<p class="cambria" style="text-align: center;font-weight: bold;">First Semester</p>-->
        </div>

        <div class="container-fluid">
            <table class="table table-bordered">
                <thead>
                    <th class="cambria" colspan="7" style="text-align: center;font-weight: bold;">Class Schedule </th>
                </thead>
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">Time</td>
                        <td class="cambria" style="text-align: center;">Monday</td>
                        <td class="cambria" style="text-align: center;">Tuesday</td>
                        <td class="cambria" style="text-align: center;">Wednesday</td>
                        <td class="cambria" style="text-align: center;">Thursday</td>
                        <td class="cambria" style="text-align: center;">Friday</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">7:00 AM – 8:00 AM</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->a1)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->b1)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->c1)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->d1)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->e1)&#10004;@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">8:00 AM – 9:00 AM</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->a2)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->b2)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->c2)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->d2)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->e2)&#10004;@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">9:00 AM – 10:00 AM</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->a3)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->b3)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->c3)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->d3)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->e3)&#10004;@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">10:00 AM – 11:00 AM</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->a4)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->b4)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->c4)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->d4)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->e4)&#10004;@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">11:00 AM – 12:00 PM</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->a5)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->b5)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->c5)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->d5)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->e5)&#10004;@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">12:00 PM – 1:00 PM</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->a6)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->b6)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->c6)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->d6)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->e6)&#10004;@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">1:00 PM – 2:00 PM</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->a7)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->b7)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->c7)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->d7)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->e7)&#10004;@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">2:00 PM – 3:00 PM</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->a8)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->b8)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->c8)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->d8)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->e8)&#10004;@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">3:00 PM – 4:00 PM</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->a9)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->b9)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->c9)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->d9)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->e9)&#10004;@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">4:00 PM – 5:00 PM</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->a10)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->b10)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->c10)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->d10)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->e10)&#10004;@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center;" colspan="2">5:00 PM – 6:00 PM</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->a11)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->b11)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->c11)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->d11)&#10004;@endif</td>
                        <td class="cambria" style="text-align: center;">@if($schedule->e11)&#10004;@endif</td>
                    </tr>
                    <tr>
                        <td class="cambria" colspan="7" style="text-align: center;font-weight: bold; ">Suggestions </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;" colspan="2">Topics for Campaign</td>
                        <td class="cambria" style="text-align: left; padding: 10px;" colspan="5"><b style="padding-left: 20px;">{{$schedule->s1}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;" colspan="2">Activities for the Students</td>
                        <td class="cambria" style="text-align: left; padding: 10px;" colspan="5"><b style="padding-left: 20px;">{{$schedule->s2}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;" colspan="2">Training Topics for PF</td>
                        <td class="cambria" style="text-align: left; padding: 10px;" colspan="5"><b style="padding-left: 20px;">{{$schedule->s3}}</b></td>
                    </tr>
                </tbody>
            </table>
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