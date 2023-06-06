@extends('layouts.admin')
@section('interviewfeedback')
active
@endsection
@section('content')
  <div class="container p-t-30">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('forms.evaluation_formsubmit')}}" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
            <input type="hidden" name="evaluation_activity_id" value="{{$activity->id}}">
            <p class="cambria fsize_15" style="text-align: center;font-weight: bold;padding-top: 0px; font-size: 20px;"><b>EVALUATION FORM</b></p>
            <div class="row" style="padding-top: 10px;">
                <div class="col-md-9">
                    <p class="cambria" style="text-align: left;font-size: 14px;">Title of Activity/Seminar: <b>{{strtoupper($activity->title)}}</b></p>
                </div>
                <div class="col-md-3">
                    <p class="cambria" style="text-align: left;font-size: 14px;">Date: <b>{{strtoupper(Carbon\Carbon::parse($activity->date)->toFormattedDateString())}}</b></p>
                </div>
                <div class="col-md-12">
                    <p class="cambria" style="text-align: left;font-size: 14px;">Facilitator/s: <b>{{strtoupper($activity->facilitators)}}</b></p>
                </div>
            </div>
            <br>
            <p class="cambria" style="text-align: left;font-style: italic; font-size: 16px;">Directions: Please evaluate the activity by putting a check mark in the appropriate column by using the scale below.</p>
            
            <div class="row">
                <div class="col-md-12" style="text-align: left;padding-left: 150px; font-size: 16px;">
                    <p class="cambria margin-0rem" style="font-size: 16px;">
                        <b>5</b> – Excellent; &nbsp;&nbsp;
                        <b>4</b> – Very Satisfactory; &nbsp;&nbsp;
                        <b>3</b> – Good Enough/Satisfactory; &nbsp;&nbsp;
                        <b>2</b> – Fair Enough; &nbsp;&nbsp;
                        <b>1</b> – Poor
                    </p>
                    
                </div>
            </div>
            <p class="cambria" style="font-size: 16px;"><b>A. Presentation</b></p>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">1.	Organization and Flow</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radioa15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa15" name="a1" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa14" name="a1" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa13" name="a1" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa12" name="a1" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa11" name="a1" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa1na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa1na" name="a1" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">2.	Clarity</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radioa25" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa25" name="a2" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa24" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa24" name="a2" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa23" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa23" name="a2" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa22" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa22" name="a2" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa21" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa21" name="a2" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa2na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa2na" name="a2" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">3.	Conciseness</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radioa35" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa35" name="a3" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa34" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa34" name="a3" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa33" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa33" name="a3" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa32" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa32" name="a3" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa31" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa31" name="a3" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa3na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa3na" name="a3" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">4.	Methodology</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radioa45" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa45" name="a4" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa44" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa44" name="a4" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa43" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa43" name="a4" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa42" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa42" name="a4" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa41" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa41" name="a4" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa4na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa4na" name="a4" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">5.	Quality of Materials</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radioa55" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa55" name="a5" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa54" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa54" name="a5" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa53" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa53" name="a5" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa52" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa52" name="a5" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa51" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa51" name="a5" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa5na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa5na" name="a5" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">6.	Pacing of Activities</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radioa65" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa65" name="a6" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa64" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa64" name="a6" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa63" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa63" name="a6" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa62" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa62" name="a6" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa61" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa61" name="a6" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa6na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa6na" name="a6" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">7.	Timing of the Activity</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radioa75" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa75" name="a7" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa74" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa74" name="a7" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa73" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa73" name="a7" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa72" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa72" name="a7" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa71" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa71" name="a7" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioa7na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa7na" name="a7" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <p class="cambria" style="font-size: 16px;"><b>B. Resource Speaker/s</b></p>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">1.	Preparedness</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radiob15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob15" name="b1" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob14" name="b1" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob13" name="b1" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob12" name="b1" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob11" name="b1" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob1na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob1na" name="b1" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">2.	Knowledge</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radiob25" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob25" name="b2" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob24" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob24" name="b2" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob23" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob23" name="b2" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob22" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob22" name="b2" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob21" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob21" name="b2" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob2na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob2na" name="b2" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">3.	Communication</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radiob35" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob35" name="b3" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob34" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob34" name="b3" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob33" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob33" name="b3" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob32" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob32" name="b3" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob31" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob31" name="b3" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiob3na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob3na" name="b3" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <p class="cambria" style="font-size: 16px;"><b>C. Venue</b></p>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">1.	Quality of Audio-Visual Presentation</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radioc15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc15" name="c1" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc14" name="c1" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc13" name="c1" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc12" name="c1" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc11" name="c1" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc1na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc1na" name="c1" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">2.	Room Set-Up</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radioc25" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc25" name="c2" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc24" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc24" name="c2" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc23" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc23" name="c2" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc22" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc22" name="c2" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc21" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc21" name="c2" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc2na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc2na" name="c2" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">3.	Sound System</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radioc35" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc35" name="c3" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc34" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc34" name="c3" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc33" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc33" name="c3" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc32" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc32" name="c3" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc31" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc31" name="c3" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc3na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc3na" name="c3" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">4.	Lighting</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radioc45" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc45" name="c4" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc44" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc44" name="c4" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc43" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc43" name="c4" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc42" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc42" name="c4" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc41" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc41" name="c4" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radioc4na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc4na" name="c4" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <p class="cambria" style="font-size: 16px;"><b>F. Theme</b></p>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">1.	Attainment of Objectives</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radiof15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof15" name="f1" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiof14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof14" name="f1" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiof13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof13" name="f1" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiof12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof12" name="f1" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiof11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof11" name="f1" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiof1na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof1na" name="f1" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">2.	Relevance of the Activity</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radiof25" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof25" name="f2" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiof24" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof24" name="f2" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiof23" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof23" name="f2" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiof22" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof22" name="f2" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiof21" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof21" name="f2" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiof2na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof2na" name="f2" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <p class="cambria" style="font-size: 16px;"><b>G. Impact</b></p>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">1.	Contribution of Knowledge</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radiog15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog15" name="g1" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog14" name="g1" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog13" name="g1" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog12" name="g1" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog11" name="g1" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog1na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog1na" name="g1" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">2.	Skills Development</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radiog25" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog25" name="g2" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog24" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog24" name="g2" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog23" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog23" name="g2" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog22" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog22" name="g2" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog21" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog21" name="g2" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog2na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog2na" name="g2" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5" style="padding-top: 10px;"><p class="cambria" style="font-size: 16px;">3.	Involvement of Participants</p></div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radiog35" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog35" name="g3" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog34" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog34" name="g3" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog33" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog33" name="g3" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog32" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog32" name="g3" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog31" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog31" name="g3" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radiog3na" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog3na" name="g3" value="NA" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required><span class="cambria" style="padding-left: 10px;"><b>NA</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;"><b>H. Comments and Suggestions for Improvement</b></label>
                <textarea name="h1" id="h1" class="form-control cambria" cols="30" rows="3" required></textarea>
            </div>
            <p class="cambria" style="text-align: center;font-style: italic;">Thank you for your feedback!</p>
            <br>
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
@endsection