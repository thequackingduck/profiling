@extends('layouts.admin')
@section('pfmembership')
active
@endsection
@section('content')
<style>
    input, textarea  {
        font-size: 13px !important;
    }
</style>
  <div class="container p-t-30">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('forms.pfmembership_formsubmit')}}" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
                <div class="container-fluid">
                    <p class="cambria margin-0rem fsize_15" style="text-align: center;font-weight: bold;padding-top: 0px; font-size: 20px;"><b>MEMBERSHIP FORM</b></p>
                    <p class="cambria margin-0rem fsize_15" style="text-align: center;padding-top: 0px;padding-bottom: 20px;">Peer Facilitators’ Circle</p>
                    <div class="row">
                        <div class="col-md-1">
                            <p class="cambria">Name: </p>
                        </div>
                        <div class="col-md-3">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid;">{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</p>
                        </div>
                        <div class="col-md-2.1" style="margin-left: 10px;">
                            <p class="cambria" >Nickname: </p>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="a2" id="a2" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2.1" style="margin-left: 10px;">
                            <p class="cambria" >Course & Year: </p>
                        </div>
                        <div class="col-md-3">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid;">{{$student->course->course}} - {{$student->yearlevel}}</p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2.1" style="margin-left: 10px;">
                            <p class="cambria">City Address: </p>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="a4" id="a4" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2.1" >
                            <p class="cambria" style="margin-left: 10px;">Home Address: </p>
                        </div>
                        <div class="col-md-4" >
                        <input type="text" name="a5" id="a5" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2.1" style="margin-left: 10px;">
                            <p class="cambria">Cellphone No: </p>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="a6" id="a6" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2.1" style="margin-left: 10px;">
                            <p class="cambria" >Landline No.: </p>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="a7" id="a7" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2.1" style="margin-left: 10px;">
                            <p class="cambria" >E-mail Address: </p>
                        </div>
                        <div class="col-md-3">
                        <input type="email" name="a8" id="a8" class="form-control cambria" style="font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-1">
                            <p class="cambria">Age: </p>
                        </div>
                        <div class="col-md-1">
                        <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid; ">{{Carbon\Carbon::parse($student->dateofbirth)->age}}</p>
                        </div>
                        <div class="col-md-1">
                            <p class="cambria">Sex: </p>
                        </div>
                        <div class="col-md-1">
                        <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid;">{{strtoupper($student->sex)}}</p>
                        </div>
                        <div class="col-md-1">
                            <p class="cambria" style="line-height: 15px;">Birth Date: </p>
                        </div>
                        <div class="col-md-3">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid; text-transform: uppercase;">{{Carbon\Carbon::parse($student->dateofbirth)->toFormattedDateString()}}</p>
                        </div>
                        <div class="col-md-1.1" >
                            <p class="cambria" >Birth Place: </p>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="a12" id="a12" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-1.1" style="margin-left: 10px;">
                            <p class="cambria" style="line-height: 15px;">Civil Status: </p>
                        </div>
                        <div class="col-md-3">
                            <select name="a13" id="a13" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                                <option value="SINGLE">SINGLE</option>
                                <option value="MARRIED">MARRIED</option>
                                <option value="DIVORCED">DIVORCED</option>
                                <option value="WIDOWED">WIDOWED</option>
                            </select>
                        </div>
                        <div class="col-md-2.1" >
                            <p class="cambria" style="line-height: 15px;">Religious Preference: </p>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="a14" id="a14" class="form-control cambria" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <p class="cambria margin-0rem fsize_15" style="text-align: center;font-weight: bold;padding-top: 10px;padding-bottom: 20px; font-size: 17.5px;">Family Background</p>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-1">
                            <p class="cambria">Father: </p>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="b1" id="b1" class="form-control cambria" placeholder="Name" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="b2" id="b2" class="form-control cambria" placeholder="Occupation" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="b3" id="b3" class="form-control cambria" placeholder="Contact No." style="text-transform: uppercase;font-weight: bold;" >
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-1" >
                            <p class="cambria" >Mother: &nbsp;&nbsp;</p>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="b4" id="b4" class="form-control cambria" placeholder="Name" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="b5" id="b5" class="form-control cambria" placeholder="Occupation" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="b6" id="b6" class="form-control cambria" placeholder="Contact No." style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-1" >
                            <p class="cambria" style="font-size: 14px;">Guardian: </p>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="b7" id="b7" class="form-control cambria" placeholder="Name" style="text-transform: uppercase;font-weight: bold;">
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="b8" id="b8" class="form-control cambria" placeholder="Occupation" style="text-transform: uppercase;font-weight: bold;">
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="b9" id="b9" class="form-control cambria" placeholder="Contact No." style="text-transform: uppercase;font-weight: bold;">
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2.1" style="margin-left: 13px;">
                            <p class="cambria" style="font-size: 15px;">No. of Siblings: </p>
                        </div>
                        <div class="col-md-1">
                        <input type="number" name="b10" id="b10" class="form-control cambria" value="0" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-1">
                        <p class="cambria" style="font-size: 15px;">Birth Rank: </p>
                        </div>
                        <div class="col-md-1">
                        <input type="number" name="b11" id="b11" class="form-control cambria" value="1" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <p class="cambria margin-0rem fsize_15" style="text-align: center;font-weight: bold;padding-top: 10px;padding-bottom: 20px; font-size: 17.5px;">Educational Background</p>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2" >
                            <p class="cambria" style="font-size: 15px;">Elementary: </p>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="c1" id="c1" class="form-control cambria" placeholder="Name of School & Address" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="c2" id="c2" class="form-control cambria" placeholder="Program" style="text-transform: uppercase;font-weight: bold;" readonly>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="c3" id="c3" class="form-control cambria" placeholder="Year Graduated" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="c4" id="c4" class="form-control cambria" placeholder="Honors Received" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2" >
                            <p class="cambria" style="font-size: 15px;">Secondary: </p>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="c5" id="c5" class="form-control cambria" placeholder="Name of School & Address" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="c6" id="c6" class="form-control cambria" placeholder="Program" style="text-transform: uppercase;font-weight: bold;" readonly>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="c7" id="c7" class="form-control cambria" placeholder="Year Graduated" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="c8" id="c8" class="form-control cambria" placeholder="Honors Received" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2" >
                            <p class="cambria" style="font-size: 15px;">Vocational: </p>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="c9" id="c9" class="form-control cambria" placeholder="Name of School & Address" style="text-transform: uppercase;font-weight: bold;">
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="c10" id="c10" class="form-control cambria" placeholder="Program" style="text-transform: uppercase;font-weight: bold;">
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="c11" id="c11" class="form-control cambria" placeholder="Year Graduated" style="text-transform: uppercase;font-weight: bold;">
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="c12" id="c12" class="form-control cambria" placeholder="Honors Received" style="text-transform: uppercase;font-weight: bold;">
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2" >
                            <p class="cambria" style="font-size: 15px;">College: </p>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="c13" id="c13" class="form-control cambria" placeholder="Name of School & Address" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-3">
                        <input type="text" name="c14" id="c14" class="form-control cambria" placeholder="Program" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="c15" id="c15" class="form-control cambria" placeholder="Year Graduated" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                        <div class="col-md-2">
                        <input type="text" name="c16" id="c16" class="form-control cambria" placeholder="Honors Received" style="text-transform: uppercase;font-weight: bold;" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2" >
                            <p class="cambria" style="font-size: 15px;">Talents: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="d1" id="d1" class="form-control cambria" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2" >
                            <p class="cambria" style="font-size: 15px;">Interests: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="d2" id="d2" class="form-control cambria" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2" >
                            <p class="cambria" style="font-size: 15px;">Hobbies: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="d3" id="d3" class="form-control cambria" required>
                        </div>
                    </div>
                    <p class="cambria margin-0rem fsize_15" style="text-align: center;font-weight: bold;padding-top: 10px;padding-bottom: 20px; font-size: 17.5px;">Class Schedule</p>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria">7:00 AM – 8:00 AM</p>
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa1" type="checkbox" name="sa1" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa1" style="font-size: 14px;">
                                Monday   
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
                                <input id="tmp-sb1" type="checkbox" name="sb1" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb1" style="font-size: 14px;">
                                Tuesday
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
                                <input id="tmp-sc1" type="checkbox" name="sc1" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc1" style="font-size: 14px;">
                                Wednesday
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
                                <input id="tmp-sd1" type="checkbox" name="sd1" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd1" style="font-size: 14px;">
                                Thursday
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
                                <input id="tmp-se1" type="checkbox" name="se1" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se1" style="font-size: 14px;">
                                Friday
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
                            <p class="cambria">8:00 AM – 9:00 AM</p>
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa2" type="checkbox" name="sa2" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa2" style="font-size: 14px;">
                                Monday   
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
                                <input id="tmp-sb2" type="checkbox" name="sb2" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb2" style="font-size: 14px;">
                                Tuesday
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
                                <input id="tmp-sc2" type="checkbox" name="sc2" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc2" style="font-size: 14px;">
                                Wednesday
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
                                <input id="tmp-sd2" type="checkbox" name="sd2" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd2" style="font-size: 14px;">
                                Thursday
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
                                <input id="tmp-se2" type="checkbox" name="se2" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se2" style="font-size: 14px;">
                                Friday
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
                            <p class="cambria">9:00 AM – 10:00 AM</p>
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa3" type="checkbox" name="sa3" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa3" style="font-size: 14px;">
                                Monday   
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
                                <input id="tmp-sb3" type="checkbox" name="sb3" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb3" style="font-size: 14px;">
                                Tuesday
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
                                <input id="tmp-sc3" type="checkbox" name="sc3" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc3" style="font-size: 14px;">
                                Wednesday
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
                                <input id="tmp-sd3" type="checkbox" name="sd3" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd3" style="font-size: 14px;">
                                Thursday
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
                                <input id="tmp-se3" type="checkbox" name="se3" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se3" style="font-size: 14px;">
                                Friday
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
                            <p class="cambria">10:00 AM – 11:00 AM</p>
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa4" type="checkbox" name="sa4" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa4" style="font-size: 14px;">
                                Monday   
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
                                <input id="tmp-sb4" type="checkbox" name="sb4" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb4" style="font-size: 14px;">
                                Tuesday
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
                                <input id="tmp-sc4" type="checkbox" name="sc4" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc4" style="font-size: 14px;">
                                Wednesday
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
                                <input id="tmp-sd4" type="checkbox" name="sd4" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd4" style="font-size: 14px;">
                                Thursday
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
                                <input id="tmp-se4" type="checkbox" name="se4" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se4" style="font-size: 14px;">
                                Friday
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
                            <p class="cambria">11:00 AM – 12:00 PM</p>
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa5" type="checkbox" name="sa5" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa5" style="font-size: 14px;">
                                Monday   
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
                                <input id="tmp-sb5" type="checkbox" name="sb5" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb5" style="font-size: 14px;">
                                Tuesday
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
                                <input id="tmp-sc5" type="checkbox" name="sc5" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc5" style="font-size: 14px;">
                                Wednesday
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
                                <input id="tmp-sd5" type="checkbox" name="sd5" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd5" style="font-size: 14px;">
                                Thursday
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
                                <input id="tmp-se5" type="checkbox" name="se5" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se5" style="font-size: 14px;">
                                Friday
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
                            <p class="cambria">12:00 PM – 1:00 PM</p>
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa6" type="checkbox" name="sa6" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa6" style="font-size: 14px;">
                                Monday   
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
                                <input id="tmp-sb6" type="checkbox" name="sb6" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb6" style="font-size: 14px;">
                                Tuesday
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
                                <input id="tmp-sc6" type="checkbox" name="sc6" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc6" style="font-size: 14px;">
                                Wednesday
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
                                <input id="tmp-sd6" type="checkbox" name="sd6" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd6" style="font-size: 14px;">
                                Thursday
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
                                <input id="tmp-se6" type="checkbox" name="se6" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se6" style="font-size: 14px;">
                                Friday
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
                            <p class="cambria">1:00 PM – 2:00 PM</p>
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa7" type="checkbox" name="sa7" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa7" style="font-size: 14px;"> 
                                Monday   
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
                                <input id="tmp-sb7" type="checkbox" name="sb7" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb7" style="font-size: 14px;">
                                Tuesday
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
                                <input id="tmp-sc7" type="checkbox" name="sc7" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc7" style="font-size: 14px;">
                                Wednesday
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
                                <input id="tmp-sd7" type="checkbox" name="sd7" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd7" style="font-size: 14px;">
                                Thursday
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
                                <input id="tmp-se7" type="checkbox" name="se7" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se7" style="font-size: 14px;">
                                Friday
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
                            <p class="cambria">2:00 PM – 3:00 PM</p>
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa8" type="checkbox" name="sa8" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa8" style="font-size: 14px;">
                                Monday   
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
                                <input id="tmp-sb8" type="checkbox" name="sb8" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb8" style="font-size: 14px;">
                                Tuesday
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
                                <input id="tmp-sc8" type="checkbox" name="sc8" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc8" style="font-size: 14px;">
                                Wednesday
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
                                <input id="tmp-sd8" type="checkbox" name="sd8" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd8" style="font-size: 14px;">
                                Thursday
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
                                <input id="tmp-se8" type="checkbox" name="se8" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se8" style="font-size: 14px;">
                                Friday
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
                            <p class="cambria">3:00 PM – 4:00 PM</p>
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa9" type="checkbox" name="sa9" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa9" style="font-size: 14px;">
                                Monday   
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
                                <input id="tmp-sb9" type="checkbox" name="sb9" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb9" style="font-size: 14px;">
                                Tuesday
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
                                <input id="tmp-sc9" type="checkbox" name="sc9" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc9" style="font-size: 14px;">
                                Wednesday
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
                                <input id="tmp-sd9" type="checkbox" name="sd9" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd9" style="font-size: 14px;">
                                Thursday
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
                                <input id="tmp-se9" type="checkbox" name="se9" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se9" style="font-size: 14px;">
                                Friday
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
                            <p class="cambria">4:00 PM – 5:00 PM</p>
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa10" type="checkbox" name="sa10" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa10" style="font-size: 14px;">
                                Monday   
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
                                <input id="tmp-sb10" type="checkbox" name="sb10" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb10" style="font-size: 14px;">
                                Tuesday
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
                                <input id="tmp-sc10" type="checkbox" name="sc10" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc10" style="font-size: 14px;">
                                Wednesday
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
                                <input id="tmp-sd10" type="checkbox" name="sd10" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd10" style="font-size: 14px;">
                                Thursday
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
                                <input id="tmp-se10" type="checkbox" name="se10" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se10" style="font-size: 14px;">
                                Friday
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
                            <p class="cambria">5:00 PM – 6:00 PM</p>
                        </div>
                        <div class="col-md-2">
                            <div class="checkbox-wrapper-28">
                                <input id="tmp-sa11" type="checkbox" name="sa11" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sa11" style="font-size: 14px;">
                                Monday   
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
                                <input id="tmp-sb11" type="checkbox" name="sb11" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sb11" style="font-size: 14px;">
                                Tuesday
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
                                <input id="tmp-sc11" type="checkbox" name="sc11" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sc11" style="font-size: 14px;">
                                Wednesday
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
                                <input id="tmp-sd11" type="checkbox" name="sd11" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-sd11" style="font-size: 14px;">
                                Thursday
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
                                <input id="tmp-se11" type="checkbox" name="se11" class="promoted-input-checkbox" />
                                <svg><use xlink:href="#checkmark-28" /></svg>
                                <label for="tmp-se11" style="font-size: 14px;">
                                Friday
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
                    <p class="cambria margin-0rem fsize_15" style="text-align: center;font-weight: bold;padding-top: 10px;padding-bottom: 20px; font-size: 17.5px;">Suggestions</p>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria" style="font-size: 14px;">Topics for Campaign: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="s1" id="s1" class="form-control cambria">
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria" style="font-size: 14px;">Activities for the Students: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="s2" id="s2" class="form-control cambria">
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2">
                            <p class="cambria" style="font-size: 14px;">Training Topics for PF: </p>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="s3" id="s3" class="form-control cambria">
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 50px;">
                <button id="Save" type="submit" class="btn btn-sm btn-info btn-block">
                    <i class="fa fa-save fa-sm"></i>&nbsp;
                    <span id="payment-button-amount">Save</span>
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
    var inputFieldFather = document.getElementById('b1');
    var inputFieldMother = document.getElementById('b4');
    var inputFieldGN = document.getElementById('b7');
    var inputFieldGC = document.getElementById('b8');
    var inputFieldGCN = document.getElementById('b9');
    

    inputFieldFather.addEventListener('input', function() {
        if (inputFieldFather.value !== '' || inputFieldMother.value !== '') {
        inputFieldGN.disabled = true;
        inputFieldGC.disabled = true;
        inputFieldGCN.disabled = true;

    }    else {
        inputFieldGN.disabled = false;
        inputFieldGC.disabled = false;
        inputFieldGCN.disabled = false;
    }
    
});
  </script>
  
@endsection