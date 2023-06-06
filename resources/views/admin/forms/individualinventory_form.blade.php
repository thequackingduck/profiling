@extends('layouts.admin')
@section('pfmembership')
active
@endsection
@section('content')

  <div class="container p-t-30">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('forms.individualinventory_formsubmit')}}" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
                <div class="container-fluid">
                    <p class="cambria margin-0rem fsize_15" style="text-align: center;font-weight: bold;padding-top: 0px; font-size: 20px;"><b>INDIVIDUAL INVENTORY FORM</b></p>
                    <div class="row">
                        <div class="col-md-2" >
                            <p class="cambria">Date: </p>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="a1" id="a1" readonly value="{{Carbon\Carbon::now()->toDateString()}}" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div> 
                        <div class="col-md-2" >
                            <input type="text" name="sy" id="sy" readonly value="{{App\Schoolyear::where('status', 1)->first()->name}}" class="form-control cambria" style="text-transform: uppercase;font-weight: bold; font-size: 14px;">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <p class="cambria" style="line-height: 20px;">Student Number/ <br>I.D. Number:  </p>
                        </div>
                        <div class="col-md-3">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid;">{{$student->id_no}}</p>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: right;">Course: </p>
                        </div>
                        <div class="col-md-3">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid;">{{$student->course->course}}</p>
                        </div>
                    </div>
                    <br>
                    <div class="row" >
                        <div class="col-md-1">
                            <p class="cambria" style="line-height: 20px;">(Family Name): </p>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid; font-size: 14px;">{{$student->lastname}}</p>
                        </div>
                        <div class="col-md-1">
                            <p class="cambria" style=" line-height: 20px;">(First Name): </p>
                        </div>
                        <div class="col-md-2">
                        <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid;">{{$student->firstname}}</p>
                        </div>
                        <div class="col-md-1">
                            <p class="cambria" style="text-align: right; line-height: 20px;">(Middle Name): </p>
                        </div>
                        <div class="col-md-2">
                        <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid;">{{$student->middlename}}</p>
                        </div>
                        <div class="col-md-1">
                            <p class="cambria" style="line-height: 20px;">(Nick Name): </p>
                        </div>
                        <div class="col-md-1">
                        <input type="text" name="nickname" id="nickname" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <br>
                    <div class="row" >
                        <div class="col-md-1">
                            <p class="cambria">Age: </p>
                        </div>
                        <div class="col-md-1">
                        <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid;">{{Carbon\Carbon::parse($student->dateofbirth)->age}}</p>
                        </div>
                        <div class="col-md-1">
                            <p class="cambria">Gender: </p>
                        </div>
                        <div class="col-md-1">
                        <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid;">{{strtoupper($student->sex)}}</p>
                        </div>
                        <div class="col-md-1">
                            <p class="cambria" style="line-height: 20px;">Civil Status: </p>
                        </div>
                        <div class="col-md-2">
                            <select name="a2" id="a2" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                                <option value="SINGLE">SINGLE</option>
                                <option value="MARRIED">MARRIED</option>
                                <option value="DIVORCED">DIVORCED</option>
                                <option value="WIDOWED">WIDOWED</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: right;">Date of Birth: </p>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid; text-transform: uppercase">{{Carbon\Carbon::parse($student->dateofbirth)->toFormattedDateString()}}</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2.1" style="margin-left: 12px;">
                            <p class="cambria" style="line-height: 20px;">Place of Birth: &nbsp;&nbsp;</p>
                        </div>
                        <div class="col-md-3.5" style="padding-right: 20px;">
                        <input type="text" name="a3" id="a3" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-1.1">
                            <p class="cambria" >Religion: &nbsp;&nbsp;</p>
                        </div>
                        <div class="col-md-2.9" style="padding-right: 20px;">
                        <input type="text" name="a4" id="a4" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2.1">
                            <p class="cambria" >Nationality: &nbsp;&nbsp;</p>
                        </div>
                        <div class="col-md-3.5">
                        <input type="text" name="a5" id="a5" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2.1" style="margin-left: 12px;">
                            <p class="cambria" style="line-height: 20px;">Mobile No.: &nbsp;&nbsp;</p>
                        </div>
                        <div class="col-md-2.5">
                        <input type="tel" name="a6" id="a6" pattern="[0-9]{11}" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-1">
                            <p class="cambria" >Tel. No.:  </p>
                        </div>
                        <div class="col-md-3.5" style="padding-right: 20px;">
                            <input type="text" name="a7" id="a7" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2.1">
                            <p class="cambria" >Email Address: &nbsp;&nbsp;</p>
                        </div>
                        <div class="col-md-3.5" style="width: 25%;">
                        <input type="email" name="a8" id="a8" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>

                        
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2.9" style="margin-left: 12px;">
                            <p class="cambria" style="line-height: 20px;">City Address: &nbsp; &nbsp; </p>
                        </div>
                        <div class="col-md-5.5" style="width: 40%;">
                        <input type="text" name="a9" id="a9" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: right; line-height: 20px;">Home Address: </p>
                        </div>
                        <div class="col-md-5.5" style="width: 30%;">
                        <input type="text" name="a5" id="a5" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required value="{{$student->address}}" readonly>
                        </div>
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="col-md-2">
                            
                        </div>
                        <div class="col-md-5">
                        <p class="cambria" style="text-align: center;"><b>FATHER</b></p>
                        </div>
                        <div class="col-md-5">
                        <p class="cambria" style="text-align: center;"><b>MOTHER</b></p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Name: </p>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b1" id="b1"  class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b2" id="b2" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Home Address: </p>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b3" id="b3" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b4" id="b4" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Contact Number: </p>
                        </div>
                        <div class="col-md-5">
                        <input type="tel" name="b5" id="b5" pattern="[0-9]{11}" placeholder="XXXXXXXXXXX" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-5">
                        <input type="tel" name="b6" id="b6" pattern="[0-9]{11}" placeholder="XXXXXXXXXXX" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Date of Birth: </p>
                        </div>
                        <div class="col-md-5">
                        <input type="date" name="b7" id="b7" class="form-control cambria" min="01-01-1900" max="01-01-1980" style="text-transform: uppercase;font-weight: bold;" required>
                        <input type="hidden" id="formatted-date7" name="formatted-date7">
                        </div>
                        <div class="col-md-5">
                        <input type="date" name="b8" id="b8" class="form-control cambria" min="01-01-1900" max="01-01-1980" style="text-transform: uppercase;font-weight: bold;" required>
                        <input type="hidden" id="formatted-date8" name="formatted-date8">
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Nationality: </p>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b9" id="b9" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b10" id="b10" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria" style="line-height: 20px;">Educational Attainment: </p>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b11" id="b11" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b12" id="b12" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Occupation: </p>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b13" id="b13" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b14" id="b14" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Place of Employment: </p>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b15" id="b15" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b16" id="b16" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Monthly Income: </p>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b17" id="b17" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-5">
                        <input type="text" name="b18" id="b18" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                <br>
                
                    <p class="cambria margin-0rem" style="text-align: left;font-weight: bold;padding-top: 10px;padding-bottom: 20px;">Parents</p>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa1" type="checkbox" name="c1" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa1">
                                Living Together 
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
                                <input id="tmp-sb1" type="checkbox" name="c2" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb1">
                                Permanently Separated
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
                                <input id="tmp-sc1" type="checkbox" name="c3" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc1">
                                Temporarily Separated
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
                                <input id="tmp-sd1" type="checkbox" name="c4" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd1">
                                Father – OFW 
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
                                <input id="tmp-se1" type="checkbox" name="c5" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se1">
                                Mother – OFW
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                    </div>
                     
                     <br>
                   
                    <div class="row">
                        <div class="col-md-4">
                            <p class="cambria" style="text-align: center"><b>Name of Brothers/Sisters</b> </p>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: center"><b>Age</b></p>
                        </div>
                        <div class="col-md-4">
                            <p class="cambria" style="text-align: center"><b>School/Place of Work</b> </p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                        <input type="text" name="d1" id="d1" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-2">
                        <input type="number" name="d2" id="d2" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="d3" id="d3" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                        <input type="text" name="d4" id="d4" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-2">
                        <input type="number" name="d5" id="d5" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="d6" id="d6" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                        <input type="text" name="d7" id="d7" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-2">
                        <input type="number" name="d8" id="d8" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="d9" id="d9" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                        <input type="text" name="d10" id="d10" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-2">
                        <input type="number" name="d11" id="d11" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="d12" id="d12" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                        <input type="text" name="d13" id="d13" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-2">
                        <input type="number" name="d14" id="d14" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="d15" id="d15" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                    </div>
                    <br>
                    <input type="checkbox" id="enable-input" >
                       
                        <span style="font-size: 16px; ">Check if You are NOT Living with your Parents.</span>
                    </input>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-3">
                            <p class="cambria" style="line-height: 20px;">Guardian  </p>
                        </div>
                        <div class="col-md-9">
                        <input type="text" name="e1" id="e1" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required  readonly>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria" style="line-height: 20px;">Relationship with Guardian:: </p>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="e2" id="e2" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required readonly>
                        </div>
                        <div class="col-md-2.1" >
                            <p class="cambria">Contact No.: &nbsp; &nbsp; </p>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="e3" id="e3" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required readonly>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Address: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="e4" id="e4" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required readonly>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Easiest Subjects: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="e5" id="e5" style="text-transform: uppercase;font-weight: bold;" class="form-control cambria" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Difficult Subjects:  </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="e6" id="e6" style="text-transform: uppercase;font-weight: bold;" class="form-control cambria" required>
                        </div>
                    </div>
                    
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-1">
                           
                        </div>
                        <div class="col-md-4">
                            <p class="cambria" style="text-indent: 105px;"><b>Name & Address of School </b></p>
                        </div>
                        <div class="col-md-3">
                            <p class="cambria" style="text-align: center;"><b>Program</b> </p>
                        </div>
                        <div class="col-md-2">
                        <p class="cambria" style="text-align: center; line-height: 20px;"><b>Inclusive Years of Attendance</b> </p>
                        </div>
                        <div class="col-md-2">
                        <p class="cambria" style="text-align: center; line-height: 20px;"><b>Honors/Awards Received</b></p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Elementary: </p>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="f1" id="f1" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="f2" id="f2" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required readonly>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="f3" id="f3" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="f4" id="f4" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Secondary: </p>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="f5" id="f5" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="f6" id="f6" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required readonly>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="f7" id="f7" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="f8" id="f8" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Tertiary:</p>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="f9" id="f9" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="f10" id="f10" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="f11" id="f11" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="f12" id="f12" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Graduate Studies: </p>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="f13" id="f13" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="f14" id="f14" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="f15" id="f15" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="f16" id="f16" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                    </div>

                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                            <p class="cambria" style="text-align: center;"><b>Name of Organization/s that You are a Member of</b></p>
                        </div>
                        <div class="col-md-4">
                            <p class="cambria" style="text-align: center;"><b>Position</b> </p>
                        </div>
                        <div class="col-md-4">
                        <p class="cambria" style="text-align: center;"><b>School Year</b> </p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                        <input type="text" name="g1" id="g1" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="g2" id="g2" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="g3" id="g3" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                        <input type="text" name="g4" id="g4" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="g5" id="g5" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="g6" id="g6" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                        <input type="text" name="g7" id="g7" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="g8" id="g8" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="g9" id="g9" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                        <input type="text" name="g10" id="g10" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="g11" id="g11" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="g12" id="g12" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                        <input type="text" name="g13" id="g13" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="g14" id="g14" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="g15" id="g15" class="form-control cambria"  style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                    </div>
                    <br>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Interests: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="h1" id="h1" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Skills/Talents: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="h2" id="h2" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Hobbies:  </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="h3" id="h3" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Ambitions: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="h4" id="h4" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Present Concerns: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="h5" id="h5" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Fears: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="h6" id="h6" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px; ">
                        <div class="col-md-2">
                            <p class="cambria" style="line-height: 20px;">Philosophy/Motto in Life: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="h7" id="h7" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    
                    <p class="cambria margin-0rem" style="text-align: left;font-weight: bold;padding-top: 10px;padding-bottom: 20px;">Traits that You Possess:</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i1" type="checkbox" name="i1" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i1">
                                Friendly
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i2" type="checkbox" name="i2" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i2">
                                Easily Troubled
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i3" type="checkbox" name="i3" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i3">
                                Happy-Go-Lucky 
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i4" type="checkbox" name="i4" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i4">
                                Stubborn
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i5" type="checkbox" name="i5" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i5">
                                Confident   
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i6" type="checkbox" name="i6" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i6">
                                Calm
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i7" type="checkbox" name="i7" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i7">
                                Relaxed 
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i8" type="checkbox" name="i8" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i8">
                                Imaginative        
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i9" type="checkbox" name="i9" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i9">
                                Practical
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i10" type="checkbox" name="i10" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i10">
                                Tense
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i11" type="checkbox" name="i11" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i11">
                                Suspicious           
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i12" type="checkbox" name="i12" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i12">
                                Trusting 
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i13" type="checkbox" name="i13" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i13">
                                Worrier
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i14" type="checkbox" name="i14" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i14">
                                Serious 
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i15" type="checkbox" name="i15" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i15">
                                Shy
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i16" type="checkbox" name="i16" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i16">
                                Reserved         
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i17" type="checkbox" name="i17" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i17">
                                Outgoing
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i18" type="checkbox" name="i18" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i18">
                                Dominant                 
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i19" type="checkbox" name="i19" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i19">
                                Self-assured    
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="tmp-i20" type="checkbox" name="i20" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-i20">
                                Perfectionist        
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="i21" type="checkbox" name="i21" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="i21">
                                Flexible                     
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="i22" type="checkbox" name="i22" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="i22">
                                Individualistic  
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="i23" type="checkbox" name="i23" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="i23">
                                Group-Oriented   
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox-wrapper-28" style="text-align: left;">
                                <input id="i24" type="checkbox" name="i24" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="i24">
                                Traditional               
                                </label>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                    <symbol id="checkmark-28" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                    </path>
                                    </symbol>
                                </svg>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria" style="line-height: 20px;">Others (Please specify.):   </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="i25" id="i25" class="form-control cambria">
                        </div>
                    </div>

                    <br>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria" style="line-height: 20px;">Disabilities/<br>Impairments:    </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="j1" id="j1" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">Chronic Illnesses:    </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="j2" id="j2" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria" style="line-height: 20px;">Medicines Regularly Taken:    </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="j3" id="j3" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria" style="line-height: 20px;">Accidents Experienced/Effect:    </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="j4" id="j4" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria" style="line-height: 20px;">Operations Experienced/Effect:  </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="j5" id="j5" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>

                    <br>
                    <p class="cambria margin-0rem" style="text-align: left;padding-top: 10px;padding-bottom: 20px;">To whom would you like to share your concerns and problems with? Why?</p>
                    <div class="row">
                        <div class="col-md-12">
                        <textarea name="k1" id="k1" cols="30" rows="3" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required></textarea>
                        </div>
                    </div>
                    <br>
                    <p class="cambria margin-0rem" style="text-align: left;padding-top: 10px;padding-bottom: 20px;">Would you like to see and talk to your guidance counselor?</p>
                    <div class="row">
                        <div class="col-md-12">
                        <textarea name="k2" id="k2" cols="30" rows="3" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required></textarea>
                        </div>
                    </div>


                </div>
            </div>
            <div style="padding-bottom: 50px;">
                <button id="Save" type="submit" class="btn btn-sm btn-info btn-block" onclick="formatAndSubmit()">
                    <i class="fa fa-save fa-sm"></i>&nbsp;
                    <span id="payment-button-amount" >Save</span>
                </button>
            </div>
            </form>
        </div>
    </div>

    
  </div>
@endsection
@section('scripts')
  <script>
      $(document).ready(function(){
          $('a.btnDel').click(function (event) {
              event.preventDefault();
              swal({
                  title: 'CONFIRM ACTION!',
                  text: 'Are you sure you want to delete this record?',
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#d33',
                  cancelButtonColor: '#3085d6',
                  confirmButtonText: 'DELETE',
                  reverseButtons: true,
                  focusConfirm: false,
              }).then((result) => {
                  if(result.value){
                  $(this).parent().find('.formDelete').submit();
              }
          });
          });
          @if(  Session::has('SettingSaved') )
            swal(
              'Saved',
              'Settings saved successfully.',
              'success'
            )
          @elseif( Session::has('Deleted') )
            swal(
              'Deleted',
              'School Year deleted successfully.',
              'success'
            )
          @elseif( Session::has('Updated') )
            swal("SUCCESS!", "{!! session('Updated') !!}", "success"); swal(
              'Updated',
              'School Year updated successfully.',
              'success'
            )
          @elseif( Session::has('Error') )
            swal(
              'INFO',
              'Unable to delete, this record is used.',
              'info'
            )
          @elseif( Session::has('Duplicate') )
            swal('Duplicate Record.', 'This record already exist.', 'info');
          @endif
      });
  </script>
  <script>
  const birthdateInput = document.getElementById("b7");
  const submitBtn = document.getElementById("Save");
  
  submitBtn.addEventListener("click", function() {
    const b7 = new Date(birthdateInput.value);
    const minDate = new Date("1900-01-01");
    const maxDate = new Date("1980-01-01");
    if (b7 < minDate || b7 > maxDate) {
      swal('The year should not exceed from 1900 below and 1980 above.'); 
      
    
    } else {
     
      
    }
  });
</script>
<script>
  const birthdateInput = document.getElementById("b8");
  const submitBtn = document.getElementById("Save");
  
  submitBtn.addEventListener("click", function() {
    const b8 = new Date(birthdateInput.value);
    const minDate = new Date("1900-01-01");
    const maxDate = new Date("1980-01-01");
    if (b8 < minDate || b8 > maxDate) {
        swal('The year should not exceed from 1900 below and 1980 above.');
       
     
    } else {
      
    }
  });
</script>
<script>
const checkbox = document.querySelector('#enable-input');
const input1 = document.querySelector('#e1');
const input2 = document.querySelector('#e2');
const input3 = document.querySelector('#e3');
const input4 = document.querySelector('#e4');

// Add an event listener to the button
checkbox.addEventListener('change', () => {
  // Remove the readonly attribute from the input field
  if(checkbox.checked){
    input1.removeAttribute('readonly');
    input2.removeAttribute('readonly');
    input3.removeAttribute('readonly');
    input4.removeAttribute('readonly');
   
  }
  else{
    input1.setAttribute('readonly', 'true');
    input2.setAttribute('readonly', 'true');
    input3.setAttribute('readonly', 'true');
    input4.setAttribute('readonly', 'true');
    input1.value = "";
    input2.value = "";
    input3.value = "";
    input4.value = "";
   
  }
  
});
</script>
<script>
    function formatAndSubmit(){
        const dateInput = document.getElementById("b7").value;

        const date = new Date(dateInput);
        const month = date.toLocaleString('default',{ month: 'long' });
        const day = date.getDate();
        const year = date.getFullYear();

        const formattedDate = '${month} ${day}, ${year}';

        document.getElementbyId("b7").value = formattedDate;

        document.getElementbyId("Save").submit();
    }
</script>
<script>
    function formatAndSubmit(){
        const dateInput = document.getElementById("b8").value;

        const date = new Date(dateInput);
        const month = date.toLocaleString('default',{ month: 'long' });
        const day = date.getDate();
        const year = date.getFullYear();

        const formattedDate = '${month} ${day}, ${year}';

        document.getElementbyId("b8").value = formattedDate;

        document.getElementbyId("Save").submit();
    }
</script>
<!-- <script>
    const phoneNumberInput = document.getElementById('a6');
        if (!isValidPhoneNumber(phoneNumberInput.value)) {
  // Show an error message to the user
        alert('Please enter a valid phone number (format: XXX-XXX-XXXX)');
  // Prevent form submission
        event.preventDefault();
}
</script> -->

@endsection