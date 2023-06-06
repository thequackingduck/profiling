@extends('layouts.admin')
@section('interviewfeedback')
active
@endsection
@section('content')
  <div class="container p-t-30">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('forms.interviewfeedback_formsubmit')}}" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
                <p class="cambria fsize_15" style="text-align: center;font-weight: bold;padding-top: 0px; font-size: 20px;"><b>PRE-COUNSELING INTERVIEW FEEDBACK FORM</b></p>
                <p class="cambria" style="text-align: left;padding-top: 10px; font-size: 16px;">Directions: Please select your answer.</p>
                <p class="cambria" style="padding-top: 10px; text-align: center; font-size: 16px;">
                <b> Legend: </b>&nbsp; &nbsp;
                <b>5</b> - Very Good; &nbsp; &nbsp; 
                <b>4</b> - Good; &nbsp; &nbsp; 
                <b>3</b> - Average; &nbsp; &nbsp; 
                <b>2</b> - Poor; &nbsp; &nbsp; 
                <b>1</b> - Very Poor &nbsp; &nbsp; 
            </p>
            <br>
            <br>
            <div class="row">
                <div class="col-md-7">
               <p class="cambria" style="font-size: 16px;">1. Do you think that the venue is suitable?</p>
                </div>
                <div class="col-md-1">
                    <div class="radio">
                        <label for="radio1" class="form-check-label " >
                            <input type="radio" id="radio1" name="a1" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radio2" class="form-check-label ">
                            <input type="radio" id="radio2" name="a1" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radio3" class="form-check-label " >
                            <input type="radio" id="radio3" name="a1" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radio4" class="form-check-label " >
                            <input type="radio" id="radio4" name="a1" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                     <div class="radio">
                        <label for="radio5" class="form-check-label " >
                            <input type="radio" id="radio5" name="a1" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                            <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
           
            <div class="row">
                <div class="col-md-7"> 
                    <p class="cambria" style="font-size: 16px;">2. How was your overall experience of the interview?</p>
                </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio1b" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio1b" name="a2" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio2b" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio2b" name="a2" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio3b" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio3b" name="a2" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio4b" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio4b" name="a2" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio5b" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio5b" name="a2" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-7">
                        <p class="cambria" style="font-size: 16px;">3. How satisfied were you with the time you waited for the service?</p>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio1c" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio1c" name="a3" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio2c" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio2c" name="a3" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio3c" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio3c" name="a3" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio4c" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio4c" name="a3" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio5c" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio5c" name="a3" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
               
                <div class="row">
                    <div class="col-md-7"> 
                        <p class="cambria" style="font-size: 16px;">4. How satisfied were you with your interviewer?</p>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio1d" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio1d" name="a4" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio2d" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio2d" name="a4" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio3d" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio3d" name="a4" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio4d" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio4d" name="a4" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio5d" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio5d" name="a4" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-7">
                        <p class="cambria" style="font-size: 16px;">5. How satisfied were you with the way your facilitator interviewed you?</p>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio1e" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio1e" name="a5" value="1" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>5</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio2e" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio2e" name="a5" value="2" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>4</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio3e" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio3e" name="a5" value="3" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>3</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio4e" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio4e" name="a5" value="4" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>2</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="radio">
                            <label for="radio5e" class="form-check-label " style="padding-top: 10px;">
                                <input type="radio" id="radio5e" name="a5" value="5" class="form-check-input" style="height:2em;width:2em;margin-top: -3px;" required>
                                <span class="cambria" style="padding-left: 10px;"><b>1</b></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <br>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">Are there any comments you would wish to make?</label>
                    <textarea name="a6" id="a6" class="form-control cambria" cols="30" rows="3" style="font-size: 16px;" required></textarea>
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
@endsection