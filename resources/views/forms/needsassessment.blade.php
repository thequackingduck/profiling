<!DOCTYPE html>
<html>
<head>
  <title>Needs Assessment Inventory</title>
    <link rel="icon" type="text/css" href="{{URL::to('logo.png')}}"></head>

    <!  Bootstrap CSS >
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
        table td{
            color: black !important;
        }
    </style>

    <style>
    .checkbox-wrapper-28 {
         size: 25px;
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
        height: calc(var( size) * 0.6);
        -webkit-animation: draw-checkbox-28 ease-in-out 0.2s forwards;
                animation: draw-checkbox-28 ease-in-out 0.2s forwards;
    }
    .checkbox-wrapper-28 label:active::after {
        background-color: #e6e6e6;
    }
    .checkbox-wrapper-28 label {
        color: black;
        line-height: var( size);
        cursor: pointer;
        position: relative;
    }
    .checkbox-wrapper-28 label:after {
        content: "";
        height: var( size);
        width: var( size);
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
        width: calc(var( size) * 0.6);
        position: absolute;
        left: calc(var( size) * 0.21);
        top: calc(var( size) * 0.2);
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
        $tabletwo = App\Needassessmenttabletwo::where('needs_assessment_inventory_id', $prop->id)->first();
        $tablethree = App\Needassessmenttablethree::where('needs_assessment_inventory_id', $prop->id)->first();
        $tablefour = App\Needassessmenttablefour::where('needs_assessment_inventory_id', $prop->id)->first();
    ?>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 7</p>
        <div class="container-fluid row pull-center" style="text-align: right;padding-top: 0px;padding-bottom: 10px;">
            <div class="col-md-3" style="text-align: right; position: relative; left: 60px; bottom: 10px;">
                <img src="{{URL::to('logo.png')}}" style="width: 80px;height:80px;" alt="">
            </div>
            <div class="col-md-6" style="text-align: center; padding: 10px;">
                <p class="cambria margin-0rem fsize_15">Republic of the Philippines</p>
                <p class="cambria margin-0rem fsize_15" style="font-weight: bold;">BOHOL ISLAND STATE UNIVERSITY-BALILIHAN CAMPUS</p>
                <p class="cambria margin-0rem fsize_15">Magsija, Balilihan, Bohol</p>
            </div>
            
        </div>
        <div class="container-fluid" style="text-align: center; padding: 10px;">
            <p class="century_gothic" style="font-style: italic;margin-bottom: 0em;"><b>Vision:</b> A premier S & T university for the formation of world class and virtuous human resource for the sustainable development in Bohol and the country.</p>
            <p class="century_gothic" style="border-bottom: solid 1px;font-style: italic;"><b>Mission:</b> Committed to provide quality and innovative education in strategic sectors for the development of Bohol and the country.</p>

            <p class="cambria" style="text-align: center;font-weight: bold; font-size: 20px;">NEEDS ASSESSMENT INVENTORY</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <p class="cambria">Name: </p>
                </div>
                <div class="col-md-4">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{$student->lastname}}, {{$student->firstname}} {{substr($student->middlename, 0, 1)}}.</p>
                    <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: -20px;">
                </div>
                <div class="col-md-2">
                    <p class="cambria">Year & Course: </p>
                </div>
                <div class="col-md-5">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{$student->yearlevel}} - {{$student->course->course}}</p>
                    <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: -20px;">
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <p class="cambria margin-0rem" style="text-align: left; padding: 10px;">The following are some of the needs experiences by the people of your age. Please help us identify which needs you experience and whether you believe the Guidance Program should help you with these needs.</p>
            <p class="cambria margin-0rem" style="text-align: center; padding: 10px;"><u>PART I–AREAS OF CONCERN</u></p>
            <p class="cambria margin-0rem" style="text-align: left; padding: 10px;">A. In column A, use the following code to indicate the extent to which it is important to you that the Guidance Center does something to respond to the specific need. Please write the appropriate letter under Column A.</p>
            <div class="row">
                <div class="col-md-1" style="text-align: right;padding-left: 100px;">
                    <p class="cambria margin-0rem">NIA</p>
                    <p class="cambria margin-0rem">SI</p>
                    <p class="cambria margin-0rem">MI</p>
                    <p class="cambria margin-0rem">VI</p>
                    <p class="cambria margin-0rem">EI</p>
                </div>
                <div class="col-md-6" style="text-align: left;padding-left: 40px;">
                    <p class="cambria margin-0rem">Not Important at All</p>
                    <p class="cambria margin-0rem">Somewhat Important </p>
                    <p class="cambria margin-0rem">Moderately Important </p>
                    <p class="cambria margin-0rem">Very Important </p>
                    <p class="cambria margin-0rem">Extremely Important </p>
                </div>
            </div>
            <p class="cambria margin-0rem" style="text-align: left; padding: 10px;">B. In column B, please indicate with a check mark whether the Guidance Center is already attending to these needs.</p>
            <p class="cambria margin-0rem" style="text-align: left; padding: 10px;">C. In Column C, use the following code to indicate your satisfaction with the way that your Guidance Center is responding to each of these needs. Please write the appropriate numbers under Column C.</p>
            <div class="row">
                <div class="col-md-1" style="text-align: right;padding-left: 100px;">
                    <p class="cambria margin-0rem">1-</p>
                    <p class="cambria margin-0rem">2-</p>
                    <p class="cambria margin-0rem">3-</p>
                    <p class="cambria margin-0rem">4-</p>
                    <p class="cambria margin-0rem">5-</p>
                </div>
                <div class="col-md-6" style="text-align: left;padding-left: 40px;">
                    <p class="cambria margin-0rem">Not Satisfied</p>
                    <p class="cambria margin-0rem">Minimally Satisfied</p>
                    <p class="cambria margin-0rem">Somewhat Satisfied</p>
                    <p class="cambria margin-0rem">Moderately Satisfied</p>
                    <p class="cambria margin-0rem">Very Much Satisfied</p>
                </div>
            </div>
        </div>

        <div class="container-fluid row pull-center">
        <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: left;font-weight: bold; padding: 10px;"><i>SELF- DEVELOPMENT</i></td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">1. Know and understand myself better</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a1a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a1b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a1c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">2.Get rid of my fears</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a2a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a2b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a2c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">3. Manage my time</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a3a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a3b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a3c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">4. Plan my life</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a4a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a4b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a4c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">5. Develop self-confidence </td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a5a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a5b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a5c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">6. Discover my talents and develop them</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a6a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a6b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a6c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">7. Improve my appearance</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a7a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a7b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a7c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">8. Learn more about the world outside</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a8a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a8b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a8c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">9. Get rid of personal vices/uncontrollable habits (drugs, alcohol, stealing, violence,<br> smoking, sex, gambling, computer addiction)</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a9a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a9b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a9c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">10. Other (Pls. Specify) <b style="padding-left: 10px;">  {{$prop->a10d}}</b></td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a10a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a10b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a10c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-weight: bold; padding: 10px;"><i>FAMILY RELATIONSHIPS</i></td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">1.Improve my relationship with my siblings </td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a11a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a11b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a11c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">2. Manage siblings in a parentless home</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a12a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a12b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a12c}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    <div style="height: 1500px;padding-top: 20px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 7</p>
        <div class="container-fluid row pull-center">
        <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">3. Develop the ability to discuss problems with parents </td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a13a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a13b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a13c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">4. Balance between warring/separated parents </td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a14a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a14b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a14c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">5. Teach parents how to handle their children effectively </td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a15a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a15b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a15c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">6. Help parents manage stress/marital problems (Pls. Underline)</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a16a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a16b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a16c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">7. Live with relatives</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a17a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a17b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a17c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">8. Cope with the expectations/demands of parents </td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a18a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a18b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a18c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">9. Relate with a stepparent/step siblings (Pls. Underline)</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a19a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a19b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a19c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">10. Other (Pls. Specify)<b style="padding-left: 10px;"> {{$prop->a20d}}</b></td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a20a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($prop->a20b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$prop->a20c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-weight: bold;"><i>SOCIAL RELATIONSHIPS </i></td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">1. Develop skills for starting /maintaining friendships</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a21a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a21b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a21c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">2. Make myself  attractive to others </td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a22a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a22b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a22c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">3. Develop the ability to avoid being taken advantage of</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a23a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a23b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a23c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">4. Know how to choose friends </td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a24a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a24b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a24c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">5. Get rid of fear of social situations</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a25a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a25b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a25c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">6. Settle quarrels with/among friends </td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a26a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a26b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a26c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">7. Handle boy-girl relationship </td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a27a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a27b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a27c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">8. Handle peer pressure </td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a28a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a28b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a28c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">9. Deal effectively with bullies </td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a29a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a29b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a29c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">10.Other (Pls. Specify)<b style="padding-left: 10px;">   {{$tabletwo->a30d}}</b></td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a30a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a30b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a30c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-weight: bold; padding: 10px;"><i>STUDIES</i></td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">1. Understand my lessons</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a31a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a31b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a31c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">2. Find time to finish assignments and socialize</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a32a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a32b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a32c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">3. Develop confidence in recitations  and discussions</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a33a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a33b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a33c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">4. Talk to teacher about difficulty in understanding lessons </td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a34a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a34b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a34c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">5. Balance between work at home and studies</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a35a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a35b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a35c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">6. Work with classmates on projects </td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a36a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a36b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a36c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">7. Cope with financial demands of subjects</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a37a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a37b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a37c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">8. Develop professionalism among teachers </td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a38a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a38b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a38c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">9. Improve teaching effectiveness of teachers </td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a39a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a39b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a39c}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    <div style="height: 1500px;padding-top: 20px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 7</p>

        <div class="container-fluid row pull-center">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">10. Other (Pls. Specify)<b style="padding-left: 10px;">   {{$tabletwo->a40d}}</b></td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a40a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tabletwo->a40b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tabletwo->a40c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-weight: bold; padding: 10px;"><i>SPECIFIC SOCIAL ISSUES </i></td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">1. Learn more about physical abuse </td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a41a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tablethree->a41b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a41c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">2. Learn more about sexual abuse/harassment </td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a42a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tablethree->a42b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a42c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">3. Learn more about emotional and verbal abuse</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a43a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tablethree->a43b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a43c}}</td>
                    </tr>
                    
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">4. Handle experiences of abuse (physical, sexual, emotional ,verbal)</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a44a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tablethree->a44b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a44c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">5. Handle alcoholic/or drug-dependent family member </td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a45a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tablethree->a45b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a45c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">6. Handle effects of disaster/crisis/calamities </td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a46a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tablethree->a46b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a46c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">7. Cope with losses (separation, abandonment, death, overseas work)</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a47a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tablethree->a47b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a47c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">8. Deal with parents’ extramarital affairs</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a48a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tablethree->a48b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a48c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">9. Handle adjustment caused by financial crises </td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a49a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tablethree->a49b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a49c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">10. Others (Pls. Specify)<b style="padding-left: 10px;">   {{$tablethree->a50d}}</b></td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a50a}}</td>
                        <td style="text-align: center; padding: 10px;">@if($tablethree->a50b)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablethree->a50c}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="cambria" style="text-align: left; padding: 10px;">Please feel free to write down any additional needs or concerns that you wish the Guidance Program would address. </p>
        <div class="row">
            <div class="col-md-12">
                <p class="cambria" style="text-align: left; padding: 10px;"><u>{{$tablethree->a50e}}</u></p>
            </div>
        </div>

        <p class="cambria margin-0rem" style="text-align: center; padding: 10px;"><u>PART II-GUIDANCE SERVICES</u></p>
        <p class="cambria margin-0rem" style="text-align: left; padding: 10px;">Below are some of the services that the Guidance Center can offer or is already offering.</p>
        <p class="cambria margin-0rem" style="text-align: left; padding: 10px;">A. In Column A, please indicate with a check mark whether the Guidance Office is already offering these services. </p>
        <p class="cambria margin-0rem" style="text-align: left; padding: 10px;">B. In Column B, use the following to indicate your satisfaction with the way that your Guidance Office is offering these services. Please write the appropriate numbers under Column B.</p>
        <div class="row">
            <div class="col-md-1" style="text-align: right;padding-left: 100px;">
                <p class="cambria margin-0rem">1-</p>
                <p class="cambria margin-0rem">2-</p>
                <p class="cambria margin-0rem">3-</p>
                <p class="cambria margin-0rem">4-</p>
                <p class="cambria margin-0rem">5-</p>
            </div>
            <div class="col-md-6" style="text-align: left;padding-left: 40px;">
                <p class="cambria margin-0rem">Not Satisfied</p>
                <p class="cambria margin-0rem">Minimally Satisfied</p>
                <p class="cambria margin-0rem">Somewhat Satisfied</p>
                <p class="cambria margin-0rem">Moderately Satisfied</p>
                <p class="cambria margin-0rem">Very Much Satisfied</p>
            </div>
        </div>
        <p class="cambria margin-0rem" style="text-align: left; padding: 10px;">C. In Column C, use the following code to indicate the extent to which it is important to you that the Guidance Office offers the specific services. Please write the appropriate letters under column C.</p>
        <div class="row">
            <div class="col-md-1" style="text-align: right;padding-left: 100px;">
                <p class="cambria margin-0rem">NIA</p>
                <p class="cambria margin-0rem">SI</p>
                <p class="cambria margin-0rem">MI</p>
                <p class="cambria margin-0rem">VI</p>
                <p class="cambria margin-0rem">EI</p>
            </div>
            <div class="col-md-6" style="text-align: left;padding-left: 40px;">
                <p class="cambria margin-0rem">Not Important at All</p>
                <p class="cambria margin-0rem">Somewhat Important </p>
                <p class="cambria margin-0rem">Moderately Important </p>
                <p class="cambria margin-0rem">Very Important </p>
                <p class="cambria margin-0rem">Extremely Important </p>
            </div>
        </div>
        <div class="container-fluid row pull-center">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: center;font-weight: bold; padding: 10px;"><i>SERVICES</i></td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">1. Collect and interpret information (test and non-test) about me to<br> help my understand myself </td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a51a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a51b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a51c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">2. Provide reading materials/films that will give information on how<br> I can become a better person</td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a52a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a52b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a52c}}</td>
                    </tr>
                    <tr>
                    <td class="cambria" style="text-align: left; padding: 10px;">3. Provide seminars and workshops that will enlighten me on my concerns<br> –personal-interpersonal, vocational-occupational, academic-educational)</td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a53a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a53b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a53c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">4. Arrange meetings with small groups to discuss similar concerns</td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a54a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a54b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a54c}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- <div style="height: 1500px;padding-top: 20px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 7</p> -->
        <div class="container-fluid row pull-center">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">5. Regularly meet my class/section/department to run relevant activities</td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a55a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a55b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a55c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">6. Call me every now and then to check on how I am </td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a56a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a56b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a56c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">7. All in groups of people to settle interpersonal difficulties</td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a57a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a57b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a57c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">8. Allow me to come in at anytime  to discuss anything I feel like discussing </td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a58a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a58b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a58c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">9. Provide training sessions for parents/guardian/spouses to help them <br> function better.</td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a59a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a59b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a59c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">10. Call in my parent/spouse to explain my concerns and problems </td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a60a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a60b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a60c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">11. Help me find the right people I can go to for my concerns</td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a61a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a61b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a61c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">12. Help me get into a place or activity that is suited for me</td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a62a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a62b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a62c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">13. Conduct research to help me understand how I am in relation to people <br> of my own age and sex </td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a63a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a63b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a63c}}</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; padding: 10px;">14. Others (Pls. Specify)<b style="padding-left: 10px;">   {{$tablefour->a64d}}</b></td>
                        <td style="text-align: center; padding: 10px;">@if($tablefour->a64a)&#10004;@endif</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a64b}}</td>
                        <td style="text-align: center; padding: 10px;">{{$tablefour->a64c}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="cambria" style="text-align: left; padding: 10px;">I wish the Guidance Center would offer the following seminars/workshops/services…</p>
        <div class="row">
            <div class="col-md-12">
                <p class="cambria" style="text-align: left; padding: 10px;"><u>{{$tablefour->a65a}}</u></p>
            </div>
        </div>
        <p class="cambria" style="text-align: left; padding: 10px;">I wish the Guidance Program would…</p>
        <p class="cambria" style="text-align: left; padding: 10px;">STOP</p>
        <div class="row">
            <div class="col-md-12">
                <p class="cambria" style="text-align: left; padding: 10px;"><u>{{$tablefour->a65b}}</u></p>
            </div>
        </div>
        <p class="cambria" style="text-align: left; padding: 10px;">CONTINUE</p>
        <div class="row">
            <div class="col-md-12">
                <p class="cambria" style="text-align: left; padding: 10px;"><u>{{$tablefour->a65c}}</u></p>
            </div>
        </div>
        <p class="cambria" style="text-align: left; padding: 10px;">START</p>
        <div class="row">
            <div class="col-md-12">
                <p class="cambria" style="text-align: left; padding: 10px;"><u>{{$tablefour->a65d}}</u></p>
            </div>
        </div>
    </div>
    @endforeach
    
</body>
  <!  Jquery JS >
    <script src="{{URL::to('admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!  Bootstrap JS >
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
        window.print();
        $('.promoted-input-checkbox').attr('disabled', 'disabled');
    </script>
</html>