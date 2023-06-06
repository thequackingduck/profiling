<!DOCTYPE html>
<html>
<head>
  <title>Individual Inventory Form</title>
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



<body style="line-height: 21px;">
    <?php $sy = App\Schoolyear::where('status', 1)->first();?>

    @foreach($model as $mod)
    <?php 
        $prop = App\IndividualInventory::findOrFail($mod->id);
        $student =  App\Student::where('id', $prop->student_id)->first(); 
        
        ?>
    <div style="height: 1550px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 3</p>
        <div class="container-fluid row pull-center" style="text-align: right;padding-bottom: 10px;">
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
            <p class="century_gothic" style="font-style: italic;margin-bottom: 0em; font-size: 15px;"><b>Vision:</b> A premier S & T university for the formation of world class and virtuous human resource for the sustainable development in Bohol and the country.</p>
            <p class="century_gothic" style="border-bottom: solid 1px;font-style: italic; font-size: 15px;"><b>Mission:</b> Committed to provide quality and innovative education in strategic sectors for the development of Bohol and the country.</p>
            <p class="cambria" style="text-align: center;font-weight: bold; font-size: 20px;">INDIVIDUAL INVENTORY FORM</p>
        </div>

        <div class="container-fluid" style="padding-top: 15px;">
            <p class="cambria margin-0rem" style="text-align: left; font-size: 18px; padding-bottom: 10px;">Dear Student,</p>
            <p class="cambria margin-0rem" style="text-align: left;line-height: 30px; text-indent: 50px; font-size: 18px;">The purpose of this form is to gather essential information that will enable your Guidance Counselor to help you in whatever way possible.
            Be assured that <b>all information</b> shall be kept with <b>utmost confidentiality</b>. </p>
        </div>
    
        <div class="row container-fluid">
            <div class="col-md-9" style="padding-top: 30px;">
                <table class="table table-bordered" >
                    <tbody>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" colspan="3">Date: <b> {{Carbon\Carbon::parse($prop->a1)->toDateString()}} </b> : <b> {{$sy->name}}</b>  </td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" colspan="2">Student Number/I.D. Number: <b style="padding-left: 20px;">{{$student->id_no}}</b></td>
                            <td class="cambria" style="text-align: left; padding: 5px;">Course: <b style="padding-left: 20px; text-transform: uppercase;">{{$student->course->course}}</b></td>
                        </tr>
                </table>
                <table class="table table-bordered" style="position: relative; top: -17px;">
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px; text-transform: uppercase;" ><b>{{$student->lastname}}</b> </td>
                            <td class="cambria" style="text-align: left; padding: 5px; text-transform: uppercase;"><b>{{$student->firstname}}</b> </td>
                            <td class="cambria" style="text-align: left; padding: 5px; text-transform: uppercase;"><b>{{$student->middlename}}</b> </td>
                            <td class="cambria" style="text-align: left; padding: 5px; text-transform: uppercase;"><b>{{$prop->nickname}}</b> </td>
                            
                            
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" ><span>(Family Name)</span></td>
                            <td class="cambria" style="text-align: left; padding: 5px;" ><span>(First Name)</span></td>
                            <td class="cambria" style="text-align: left; padding: 5px;" ><span>(Middle Name)</span></td>
                            <td class="cambria" style="text-align: left; padding: 5px;" ><span>(Nick Name)</span></td>
                            
                        
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3" style="border: 1px solid;height: 200px !Important; width: 200px;">
                <p class="cambria" style="text-align: center;padding-top: 80px;">2x2 Photo</p>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered" style="border: 1px solid;padding-top: 15px;">
                    <tbody>
                        
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;">Age: <b style="padding-left: 20px; text-transform: uppercase;">{{Carbon\Carbon::parse($student->dateofbirth)->age}}</b></td>
                            <td class="cambria" style="text-align: left; padding: 5px;">Gender: <b style="padding-left: 20px; text-transform: uppercase;">{{strtoupper($student->sex)}}</b></td>
                            <td class="cambria" style="text-align: left; padding: 5px;">Civil Status: <b style="padding-left: 20px; text-transform: uppercase;">{{$prop->a2}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;" colspan="2">Date of Birth: <b style="padding-left: 10px; text-transform: uppercase;">{{Carbon\Carbon::parse($student->dateofbirth)->toFormattedDateString()}}</b></td>
                        <td class="cambria" style="text-align: left; padding: 5px;">Place of Birth: <b style="padding-left: 20px; text-transform: uppercase;">{{$prop->a3}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;" colspan="2">Religion: <b style="padding-left: 20px; text-transform: uppercase;">{{$prop->a4}}</b></td>
                        <td class="cambria" style="text-align: left; padding: 5px;">Nationality: <b style="padding-left: 20px; text-transform: uppercase;">{{$prop->a5}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;" colspan="2">Mobile #.: <b style="padding-left: 20px;">{{$prop->a6}}</b></td>
                        <td class="cambria" style="text-align: left; padding: 5px;">Tel #: <b style="padding-left: 20px; text-transform: uppercase;">{{$prop->a7}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;" colspan="3">E-mail Address: <b style="padding-left: 20px;">{{$prop->a8}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;" colspan="3">City Address: <b style="padding-left: 20px; text-transform: uppercase;">{{$prop->a9}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left; padding: 5px;" colspan="3">Home Address: <b style="padding-left: 20px; text-transform: uppercase;">{{$student->address}}</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-12" style="position: relative; top: -17px;">
                <table class="table table-bordered" style="border: 1px solid;">
                    <thead>
                    <tr>
                        <td style="text-align: center; font-weight: bold;width: 30%;" class="cambria"></td>
                        <td style="text-align: center; width: 35%;" class="cambria">Father</td>
                        <td style="text-align: center; width: 35%;" class="cambria">Mother</td>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" >Name  </td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b1}}</td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b2}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" >Home Address  </td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b3}}</td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b4}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" >Contact Number  </td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b5}}</td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b6}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" >Date of Birth  </td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b7}}</td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b8}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" >Nationality  </td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b9}}</td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b10}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" >Educational Attainment  </td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b11}}</td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b12}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" >Occupation  </td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b13}}</td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b14}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" >Place of Employment  </td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b15}}</td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b16}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left; padding: 5px;" >Monthly Income  </td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b17}}</td>
                            <td class="cambria" style="text-align: center; text-transform: uppercase; font-weight: bold; padding: 5px;" >{{$prop->b18}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
                <div class="row" style="margin-left: 1em; position: relative; top: -17px;">
                    <p class="cambria " style="text-align: left; margin-left: 1em;">Parents:</p>
                    <div class="cambria" style="text-transform: uppercase; font-weight: bold; margin-left: 1em;">
                      @if($prop->c1 == 'on') Living Together @endif
                        @if($prop->c2 == 'on') Permanently Separated @endif
                        @if($prop->c3 == 'on') Temporarily Separated @endif
                        @if($prop->c4 == 'on') Father - OFW @endif
                        @if($prop->c5 == 'on') Mother - OFW @endif
                    </div> 
                </div>
            <table class="table table-bordered" style="margin-left: 0.5em; width: 96%; padding-top: 10px; position: relative; top: -17px;">
                <thead>
                    <td style="text-align: center; width: 30%;" class="cambria">Name of Brothers/Sisters</td>
                    <td style="text-align: center; width: 10%;" class="cambria">Age</td>
                    <td style="text-align: center; width: 60%;" class="cambria">School/Place of Work</td>
                </thead>
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: center; text-transform: uppercase; padding: 5px;"><b>{{$prop->tabletwo->d1}}</b></td>
                        <td class="cambria" style="text-align: center; text-transform: uppercase; padding: 5px;"><b>{{$prop->tabletwo->d2}}</b></td>
                        <td class="cambria" style="text-align: center; text-transform: uppercase; padding: 5px;"><b>{{$prop->tabletwo->d3}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d4}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d5}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d6}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d7}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d8}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d9}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d10}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d11}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d12}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d13}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d14}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->d15}}</b></td>
                    </tr>
                </tbody>
            </table>
            <p class="cambria" style="text-align: left;font-size: 13px; position: relative; top: -17px;"><i>Place + sign after name, if deceased.</i></p>
                <div style="position: relative; top: -17px;">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="cambria">Guardian (if not living with Parents):  </p>
                        </div>
                        <div class="col-md-8" style="position: relative; left: -100px; text-transform: uppercase;">
                        <p class="cambria" style="text-align: left; font-weight: bold;"> {{$prop->tabletwo->e1}} </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="cambria">Relationship with Guardian:  </p>
                        </div>
                        <div class="col-md-3">
                        <p class="cambria" style="text-align: left;position: relative; left: -70px; text-transform: uppercase; font-weight: bold;"> {{$prop->tabletwo->e2}} </p>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria">Contact #: </p>
                        </div>
                        <div class="col-md-4" style="position: relative; left: -100px;">
                            <p class="cambria" style="text-align: left; font-weight: bold; "> {{$prop->tabletwo->e3}} </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <p class="cambria">Address:  </p>
                        </div>
                        <div class="col-md-10" style="position: relative; left: -100px;">
                        <p class="cambria" style="text-align: left; text-transform: uppercase; font-weight: bold;">{{$prop->tabletwo->e4}}</p>
                        </div>
                    </div>
                </div>    
    </div>
            
   

    <div style="height: 1500px;">
        

            
            <div class="row">
                <div class="col-md-2" >
                    <p class="cambria">Easiest Subjects:  </p>
                </div>
                <div class="col-md-10" style="position: relative; left: -50px;">
                <p class="cambria" style="text-align: left; text-transform: uppercase; font-weight: bold;">{{$prop->tabletwo->e5}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Difficult Subjects:  </p>
                </div>
                <div class="col-md-10" style="position: relative; left: -50px;">
                <p class="cambria" style="text-align: left; text-transform: uppercase; font-weight: bold;">{{$prop->tabletwo->e6}}</p>
                </div>
            </div>

            <table class="table table-bordered" style="border: 1px solid;">
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: center;font-weight: bold; text-transform: uppercase;" colspan="5">Educational Background</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="cambria" style="text-align: center; padding-top: 10px;">Name & Address of School</td>
                        <td class="cambria" style="text-align: center; padding-top: 10px;">Program</td>
                        <td class="cambria" style="text-align: center;">Inclusive Years of Attendance</td>
                        <td class="cambria" style="text-align: center;">Honors/Awards <br>Received</td>
                    </tr>
                        <td class="cambria" style="text-align: left; padding: 5px;">Elementary</td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f1}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f2}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f3}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f4}}</b></td>
                    </tr>
                    </tr>
                        <td class="cambria" style="text-align: left; padding: 5px;">Secondary</td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f5}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f6}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f7}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f8}}</b></td>
                    </tr>
                    </tr>
                        <td class="cambria" style="text-align: left; padding: 5px;">Tertiary</td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f9}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f10}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f11}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f12}}</b></td>
                    </tr>
                    </tr>
                        <td class="cambria" style="text-align: left; padding: 5px;">Graduate Studies</td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f13}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f14}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;" ><b>{{$prop->tabletwo->f15}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tabletwo->f16}}</b></td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-bordered" colspan="5">
                <thead>
                    <td style="text-align: center; width: 60%; padding: 10px;" class="cambria">Name of Organization/s that You are a Member of</td>
                    <td style="text-align: center; width: 20%; padding: 10px;" class="cambria">Position</td>
                    <td style="text-align: center; width: 20%; padding: 10px;" class="cambria">School Year</td>
                </thead>
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g1}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g2}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g3}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g4}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g5}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g6}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g7}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g8}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g9}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g10}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g11}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g12}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g13}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g14}}</b></td>
                        <td class="cambria" style="text-align: center; padding: 5px; text-transform: uppercase;"><b>{{$prop->tablethree->g15}}</b></td>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Interests:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left; font-weight: bold; text-transform: uppercase;"> {{$prop->tablethree->h1}} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Skills/Talents:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left; font-weight: bold; text-transform: uppercase;"> {{$prop->tablethree->h2}} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Hobbies:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;font-weight: bold; text-transform: uppercase;"> {{$prop->tablethree->h3}} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Ambitions:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;font-weight: bold; text-transform: uppercase;"> {{$prop->tablethree->h4}} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Present Concerns:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;font-weight: bold; text-transform: uppercase;"> {{$prop->tablethree->h5}} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Fears:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;font-weight: bold; text-transform: uppercase;"> {{$prop->tablethree->h6}} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Philosophy/Motto in Life:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;font-weight: bold; text-transform: uppercase;"> {{$prop->tablethree->h7}} </p>
                </div>
            </div> 
                
                <div class="row">
                <div class="col-md-2">
                <p class="cambria " style="text-align: left;">Traits that You Possess: </p>
                </div>
                <div class="col-md-9">
                    <p class="cambria" style="text-transform: uppercase;text-align: left;">
                             <b>@if($prop->tablefour->i1 == 'on') Friendly, @endif 
                            @if($prop->tablefour->i2 == 'on') Easily Troubled, @endif
                            @if($prop->tablefour->i3 == 'on') Happy-Go-Lucky, @endif
                            @if($prop->tablefour->i4 == 'on') Stubborn, @endif
                            @if($prop->tablefour->i5 == 'on') Confident, @endif
                            @if($prop->tablefour->i6 == 'on') Calm, @endif
                            @if($prop->tablefour->i7 == 'on') Relaxed, @endif
                            @if($prop->tablefour->i8 == 'on') Imaginative, @endif
                            @if($prop->tablefour->i9 == 'on') Practical, @endif
                            @if($prop->tablefour->i10 == 'on') Tense, @endif
                            @if($prop->tablefour->i11 == 'on') Suspicious, @endif
                            @if($prop->tablefour->i12 == 'on') Trusting, @endif
                            @if($prop->tablefour->i13 == 'on') Worrier, @endif
                            @if($prop->tablefour->i14 == 'on') Serious, @endif
                            @if($prop->tablefour->i15 == 'on') Shy, @endif
                            @if($prop->tablefour->i16 == 'on') Reserved, @endif
                            @if($prop->tablefour->i17 == 'on') Outgoing, @endif
                            @if($prop->tablefour->i18 == 'on') Dominant, @endif
                            @if($prop->tablefour->i19 == 'on') Self-assured, @endif
                            @if($prop->tablefour->i20 == 'on') Perfectionist, @endif
                            @if($prop->tablefour->i21 == 'on') Flexible, @endif
                            @if($prop->tablefour->i22 == 'on') Individualistic, @endif
                            @if($prop->tablefour->i23 == 'on') Group-Oriented, @endif
                            @if($prop->tablefour->i24 == 'on') Traditional, @endif
                            @if($prop->tablefour->i25) {{$prop->tablefour->i25}}@endif</b> </p>
                </div>
            </div>
        
        <!-- </div>
        
        </div> -->
       

    <!-- </div>
<br>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 3</p>
        
        
        
        <div class="container-fluid"> -->
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Disabilities/Impairments:    </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;font-weight: bold; text-transform: uppercase;"> {{$prop->tablefour->j1}} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Chronic Illnesses:     </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;font-weight: bold; text-transform: uppercase;"> {{$prop->tablefour->j2}} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Medicines Regularly Taken:   </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;font-weight: bold; text-transform: uppercase;"> {{$prop->tablefour->j3}} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Accidents Experienced/Effect:    </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;font-weight: bold; text-transform: uppercase;"> {{$prop->tablefour->j4}} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Operations Experienced/Effect:    </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;font-weight: bold; text-transform: uppercase;"> {{$prop->tablefour->j5}} </p>
                </div>
            </div>
            <p class="cambria" style="text-align: left;">To whom would you like to share your concerns and problems with? Why?</p>
            <p class="cambria col-6" style="text-align: left; font-weight: bold; text-transform: uppercase;"> {{$prop->tablefour->k1}} </p>
            <br>
            <p class="cambria" style="text-align: left;">Would you like to see and talk to your guidance counselor?</p>
            <p class="cambria col-6" style="text-align: left; font-weight: bold; text-transform: uppercase;"> {{$prop->tablefour->k2}} </p>
            
        <div class="row">

        <div class="col-md-4"> </div>
            <div class="col-md-8 pull-right" style="text-align: center; position: relative; bottom: -60px;">
                <p class="cambria" style="border-bottom: 1px black solid; font-weight: bold;text-transform: uppercase;">{{$student->firstname}} {{$student->middlename}} {{$student->lastname}}</p>
               
                <p class="cambria" style="text-align: center; position: relative; top: -15px;">Signature over Printed Name</p>
          
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