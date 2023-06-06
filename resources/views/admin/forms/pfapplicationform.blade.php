@extends('layouts.admin')
@section('precounseling')
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
            <form method="POST" action="{{route('forms.pfapplication_formsubmit')}}" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
                <div class="container-fluid">
                    <p class="cambria" style="text-align: center; font-size: 16px; font-weight: bold;"><u>Peer Facilitators’ Circle Volunteer Application Form</u> <br></p>
                    <p class="cambria" style="text-align: left; text-indent: 30px; font-size: 16px;">Peer Facilitators’ Circle is the student-driven organization of the Guidance Center of BISU-MC. In this organization, youth empower youth to make informed decisions about their own well-being.</p><br>
                    <p class="cambria" style="text-align: left; text-indent: 30px; font-size: 16px;" >The group assists the Guidance Center in their programs and activities as well as offers campaigns on significant topics such as Bullying, Teenage Pregnancy, Sexual Harassment, Social Media Ethics and more. We are currently looking for Peer Facilitators to be one with us in our goals.</p><br>
                    
                    <p class="cambria" style="text-align: left; font-size: 16px;">We’re looking for volunteers who are…</p>
                    <div class="container-fluid" >
                        <ul>
                            <li class="cambria" style="text-align: left; text-indent: 30px; font-size: 16px;">Excited to facilitate conversations with other students;</li>
                            <li class="cambria" style="text-align: left; text-indent: 30px; font-size: 16px;">Open-minded, non-judgmental and supportive of all students regardless of age, gender and status;</li>
                            <li class="cambria" style="text-align: left; text-indent: 30px; font-size: 16px;">Comfortable speaking with groups of youth or eager to learn;</li>
                            <li class="cambria" style="text-align: left; text-indent: 30px; font-size: 16px;">Punctual and reliable;</li>
                            <li class="cambria" style="text-align: left; text-indent: 30px; font-size: 16px;">Able to commit to volunteering during their vacant periods; and,</li>
                            <li class="cambria" style="text-align: left; text-indent: 30px; font-size: 16px;">Available for trainings and meetings.</li>
                        </ul>
                    </div>
                    <br>
                    <p class="cambria" style="text-align: left; font-size: 16px;">Benefits to Volunteering: You’ll receive trainings on basic facilitation skills as well as on important socio-cultural and psychological topics.</p>
                    <hr style="border-bottom: 1px solid;">
                    <p class="cambria margin-0rem fsize_15" style="text-align: center;font-weight: bold;padding-top: 20px;padding-bottom: 20px; font-size: 20px;">Application Form</p>
                    <div class="row">
                        <div class="col-md-1">
                            <p class="cambria" style="font-size: 16px;">Name: </p>
                        </div>
                        <div class="col-md-4">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid; font-size: 16px;">{{$student->lastname}}, {{$student->firstname}} {{substr($student->middlename, 0, 1)}}.</p>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: right; font-size: 16px;">Nickname: </p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="nickname" id="nickname" class="form-control cambria" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2.1" style="margin-left: 13px;">
                            <p class="cambria" style="font-size: 16px;">Gender: &nbsp;</p>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid; font-size: 16px;">{{$student->sex}}</p>
                        </div>
                        <div class="col-md-1.1" >
                            <p class="cambria" style="font-size: 16px;">Age: </p>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid; font-size: 16px;">{{Carbon\Carbon::parse($student->dateofbirth)->age}}</p>
                        </div>
                        <div class="col-md-2.1">
                            <p class="cambria" style="font-size: 16px;">Course & Year: </p>
                        </div>
                        <div class="col-md-4">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid; font-size: 16px;">{{$student->course->course}}/{{$student->yearlevel}}</p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-2.1" style="margin-left: 13px;">
                            <p class="cambria" style="font-size: 16px;"> Email Address: </p>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="email" id="email" class="form-control cambria" required>
                        </div>
                        <div class="col-md-2.1">
                            <p class="cambria" style="font-size: 16px;">Contact Number: </p>
                        </div>
                        <div class="col-md-4">
                        <input type="text" name="contactno" id="contactno" class="form-control cambria" required>
                        </div>
                    </div>
                    <div class="form-group" style="padding-top: 20px;">
                        <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">1. How did you hear about this program? Why did you decide to join?</label>
                        <textarea name="a1" id="a1" class="form-control cambria" cols="30" rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">2. What’s your experience working with the youth?</label>
                        <textarea name="a2" id="a2" class="form-control cambria" cols="30" rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">3. What do you hope to gain from this experience? Are there any specific areas you feel you need additional support or training?</label>
                        <textarea name="a3" id="a3" class="form-control cambria" cols="30" rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">4.  What could you bring to the team? (This can include skills, abilities, lived experiences, etc.)</label>
                        <textarea name="a4" id="a4" class="form-control cambria" cols="30" rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">5. Please tell us about a social issue that you feel passionately about. Why is it important?</label>
                        <textarea name="a5" id="a5" class="form-control cambria" cols="30" rows="2" required></textarea>
                    </div>
                    <br>
                    <p class="cambria" style="text-align: left; font-size: 16px;">Please provide your availability.</p>
                    <br>
                    <div class="row" style="padding-bottom: 10px;">
                        <div class="col-md-2" >
                            <p class="cambria" style="font-size: 16px;"><b>Example</b></p> 
                            <p class="cambria" style="font-size: 14px;">9:30 AM – <br>11:00 AM</p> 
                            <p class="cambria" style="font-size: 14px;">2:30 PM – <br>4:00 PM</p> 
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: center; font-size: 16px;"><b>Monday</b></p> 
                            <input type="text" name="b1" id="b1" class="form-control cambria" required>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: center; font-size: 16px;"><b>Tuesday</b></p> 
                            <input type="text" name="b2" id="b2" class="form-control cambria" required>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: center; font-size: 16px;"><b>Wednesday</b></p> 
                            <input type="text" name="b3" id="b3" class="form-control cambria" required>
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: center; font-size: 16px;"><b>Thursday</b></p> 
                            <input type="text" name="b4" id="b4" class="form-control cambria" required>  
                        </div>
                        <div class="col-md-2">
                            <p class="cambria" style="text-align: center; font-size: 16px;"><b>Friday</b></p> 
                            <input type="text" name="b5" id="b5" class="form-control cambria" required>
                        </div>
                    </div>


                    <br>
                    <p class="cambria" style="text-align: center;font-style: italic;">Thank you for your interest in applying as a Peer Facilitator this year!</p>
                    <p class="cambria" style="text-align: center;font-style: italic;">You will be contacted shortly.</p>
                    <p class="cambria" style="text-align: center;font-style: italic;">For more information, please contact Ms. Travero at (email account) or (phone number).</p>
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
@endsection