@extends('layouts.admin')
@section('clientcounselorfeedback')
active
@endsection
@section('content')
  <div class="container p-t-30">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('forms.clientcounselorfeedback_formsubmit')}}" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
            <p class="cambria fsize_15" style="text-align: center;font-weight: bold;padding-top: 0px; font-size: 20px;"><b>CLIENT-COUNSELOR FEEDBACK FORM</b></p>
            <div class="row" style="padding-top: 10px;">
                <div class="col-md-5 col-6">
                    <p class="cambria" >Counselor: <b style="padding-left: 20px;">{{strtoupper(App\User::where('role_id', 0)->first()->name)}}</b></p>
                </div>
                <div class="col-md-5 col-6 ">
                    <p class="cambria" style="text-align: right;">Date: <b style="padding-left: 20px;">{{strtoupper(Carbon\Carbon::now()->toFormattedDateString())}}</b></p>
                </div>
            </div>
            <br>
            <p class="cambria col-12" style="text-align: left; font-style: italic; text-indent: 50px; font-size: 16px;">This form allows you an opportunity to provide feedback to your counselor after your sessions have finished. This will help your counselor’s professional development as well as helping him to improve the service offered to others.</p>
            <p class="cambria" style="text-align: left; font-size: 16px;"><br>Directions: Please place a mark in the box which most closely corresponds to how you feel about each statement.<br>
            <b>Legend: </b> <br>
            &nbsp&nbsp&#160&#160&#160&#160<b> 5 </b> - Strongly Agree; 
            &nbsp&nbsp&#160&#160&#160&#160<b> 4 </b> - Somewhat Good; 
            &nbsp&nbsp&#160&#160&#160&#160<b> 3 </b> - No Strong Feeling; 
            &nbsp&nbsp&#160&#160&#160&#160<b> 2 </b> - Somewhat Disagree; 
            &nbsp&nbsp&#160&#160&#160&#160<b> 1 </b> - Strongly Disagree 
            </p>
            <br>
            
            <p class="cambria"><b>About the Working Relationship with your Counselor</b></p>
            <div class="row">
                <div class="col-md-7 " >
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">1. My counselor listened to me effectively.</p>
                </div>
               
                <div class="col-md-1 col-2">
                    <div class="radio">
                        <label for="radioa15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa15" name="a1" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" >
                     <div class="radio">
                        <label for="radioa14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa14" name="a1" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioa13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa13" name="a1" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioa12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa12" name="a1" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioa11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioa11" name="a1" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 ">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">2. My counselor understood things from my point of view.</p>
                </div>
                
                <div class="col-md-1 col-2" style="padding-bottom: 20px;" >
                    <div class="radio">
                        <label for="radiob15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob15" name="a2" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiob14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob14" name="a2" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiob13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob13" name="a2" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiob12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob12" name="a2" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiob11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiob11" name="a2" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">3. My counselor focused on what was important to me.</p>
                </div>
                
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                    <div class="radio">
                        <label for="radioc15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc15" name="a3" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioc14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc14" name="a3" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioc13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc13" name="a3" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioc12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc12" name="a3" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioc11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioc11" name="a3" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">4. My counselor accepted what I said without judging me.</p>
                </div>
                
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                    <div class="radio">
                        <label for="radiod15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiod15" name="a4" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiod14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiod14" name="a4" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiod13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiod13" name="a4" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiod12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiod12" name="a4" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiod11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiod11" name="a4" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 pull-left">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">5. My counselor showed warmth toward me.</p>
                </div>
               
                
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                    <div class="radio">
                        <label for="radioe15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioe15" name="a5" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioe14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioe14" name="a5" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioe13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioe13" name="a5" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioe12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioe12" name="a5" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioe11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioe11" name="a5" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">6. My counselor fostered a safe and trusting environment.</p>
                </div>
                
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                    <div class="radio">
                        <label for="radiof15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof15" name="a6" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiof14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof14" name="a6" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiof13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof13" name="a6" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiof12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof12" name="a6" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiof11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiof11" name="a6" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">7. My counselor began and finished our sessions on time.</p>
                </div>
               
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                    <div class="radio">
                        <label for="radiog15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog15" name="a7" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiog14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog14" name="a7" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiog13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog13" name="a7" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiog12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog12" name="a7" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiog11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiog11" name="a7" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">8. My counselor followed my lead during our sessions whenever that was appropriate.</p>
                </div>
                
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                    <div class="radio">
                        <label for="radioh15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioh15" name="a8" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioh14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioh14" name="a8" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioh13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioh13" name="a8" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioh12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioh12" name="a8" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioh11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioh11" name="a8" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">9. My counselor provided leadership during sessions when/if that was appropriate.</p>
                </div>
                
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                    <div class="radio">
                        <label for="radioi15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioi15" name="a9" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioi14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioi14" name="a9" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioi13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioi13" name="a9" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioi12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioi12" name="a9" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioi11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioi11" name="a9" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">10. My counselor challenged me when/if that was appropriate.</p>
                </div>
               
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                    <div class="radio">
                        <label for="radioj15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioj15" name="a10" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioj14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioj14" name="a10" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioj13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioj13" name="a10" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioj12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioj12" name="a10" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radioj11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radioj11" name="a10" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <p class="cambria" style="font-size: 16px; padding-top: 10px;"><b>About the Results of Working with your Counselor</b></p>
            <div class="row">
                <div class="col-md-7">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">1. The sessions with my counselor helped me with whatever originally led me to seek counseling.</p>
                </div>
                
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                    <div class="radio">
                        <label for="radiok15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiok15" name="a11" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiok14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiok14" name="a11" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiok13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiok13" name="a11" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiok12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiok12" name="a11" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiok11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiok11" name="a11" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">2. Any changes which might have occurred in me as a result of my counseling have been positive.</p>
                </div>

                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                    <div class="radio">
                        <label for="radiol15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiol15" name="a12" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiol14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiol14" name="a12" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiol13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiol13" name="a12" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiol12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiol12" name="a12" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiol11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiol11" name="a12" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <p class="cambria" style="font-size: 16px; padding-top: 10px;">3. Based on my experience, I would recommend my counselor to others.</p>
                </div>
                
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                    <div class="radio">
                        <label for="radiom15" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiom15" name="a13" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiom14" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiom14" name="a13" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiom13" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiom13" name="a13" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiom12" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiom12" name="a13" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-2" style="padding-bottom: 20px;">
                     <div class="radio">
                        <label for="radiom11" class="form-check-label " style="padding-top: 10px;">
                            <input type="radio" id="radiom11" name="a13" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px; padding-top: 10px;"><b>Other Comments</b></label>
                <textarea name="a14" id="a14" class="form-control cambria" cols="30" rows="3" required></textarea>
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