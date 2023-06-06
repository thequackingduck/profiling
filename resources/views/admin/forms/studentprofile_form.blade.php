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
            <form method="POST" action="{{route('forms.studentprofile_form_submit')}}" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
                <div class="container-fluid">
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    <input type="hidden" name="yearlevel" value="{{$yearlevel}}">
                    <input type="hidden" name="section" value="{{$section}}">
                    <p class="cambria" style="text-align: left;"><b>PROFILE OF STUDENTS</b></p>
                    <p class="cambria" style="text-align: left;">This questionnaire requests lists of students who belong to several categories. This is done to help the Guidance Center create programs responsive to the needs of the students. Please take this seriously. Please also use caution when filling this out. Please make sure that the list you will submit is accurate. Rest assured that confidentiality shall be upheld. Thank you!</p><br>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <p class="cambria">Course/Year/Section: : </p>
                        </div>
                        <div class="col-md-3">
                            <p class="cambria" style="text-align: left;font-weight: bold;border-bottom: 1px solid;">{{$course->course}} - {{$yearlevel}} - {{$section}}</p>
                        </div>
                    </div>
                    
                    <br>
                    <p class="cambria" style="text-align: left;">I. STUDENTS WHO ARE DIFFERENTLY-ABLED</p>
                    <div class="container">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">A. Students who are Nearsighted (Unable to see things clearly unless they are relatively close to the eyes.)</label>
                            <select class="js-example-basic-multiple" name="a1a[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1a != 'null') @if(in_array($student->id, json_decode($model->a1a))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">B. Students who are Farsighted (Unable to see things clearly, especially if they are relatively close to the eyes.)</label>
                            <select class="js-example-basic-multiple" name="a1b[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1b != 'null') @if(in_array($student->id, json_decode($model->a1b))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">C. Students with Crossed Eyes (Having one or both eyes turned inward toward the nose.)</label>
                            <select class="js-example-basic-multiple" name="a1c[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1c != 'null') @if(in_array($student->id, json_decode($model->a1c))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">D. Students with Color Blindness (Difficulty distinguishing certain colors, such as blue and yellow or red and green.)</label>
                            <select class="js-example-basic-multiple" name="a1d[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1d != 'null') @if(in_array($student->id, json_decode($model->a1d))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">E. Students with Blindness (Unable to see because of injury, disease, or a congenital condition.)</label>
                            <select class="js-example-basic-multiple" name="a1e[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1e != 'null') @if(in_array($student->id, json_decode($model->a1e))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">F. Students who are Deaf (Lacking the power of hearing or having impaired hearing.)</label>
                            <select class="js-example-basic-multiple" name="a1f[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1f != 'null') @if(in_array($student->id, json_decode($model->a1f))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">G. Students with Cleft/Lip Palate (Separation that occurs in the lip or the palate (roof of the mouth), or both.)</label>
                            <select class="js-example-basic-multiple" name="a1g[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1g != 'null') @if(in_array($student->id, json_decode($model->a1g))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">H. Students with Stuttering or Stammering Condition (Flow of speech is disrupted by involuntary repetitions and prolongations of sounds, syllables, words or phrases as well as involuntary silent pauses or blocks.)</label>
                            <select class="js-example-basic-multiple" name="a1h[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1h != 'null') @if(in_array($student->id, json_decode($model->a1h))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">I. Students with Dyslexia (Difficulty in learning to read or interpret words, letters, and other symbols.)</label>
                            <select class="js-example-basic-multiple" name="a1i[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1i != 'null') @if(in_array($student->id, json_decode($model->a1i))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">J. Students with Dyscalculia (May have poor comprehension of math symbols, may struggle with memorizing and organizing numbers, have difficulty telling time or have trouble with counting.)</label>
                            <select class="js-example-basic-multiple" name="a1j[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1j != 'null') @if(in_array($student->id, json_decode($model->a1j))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">K. Students with Dysgraphia (May have illegible handwriting, inconsistent spacing, poor spatial planning on paper, poor spelling and difficulty composing writing as well as thinking and writing at the same time.)</label>
                            <select class="js-example-basic-multiple" name="a1k[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1k != 'null') @if(in_array($student->id, json_decode($model->a1k))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">L. Students with Muteness (Lacking the ability to speak.)</label>
                            <select class="js-example-basic-multiple" name="a1l[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1l != 'null') @if(in_array($student->id, json_decode($model->a1l))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">M. Students with Paraplegia (Impairment in motor or sensory function of the lower extremities.)</label>
                            <select class="js-example-basic-multiple" name="a1m[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}" @if(isset($model) ) @if($model->a1m != 'null') @if(in_array($student->id, json_decode($model->a1m))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <br>
                    <p class="cambria" style="text-align: left;">II. STUDENTS WHO ARE AT RISK</p>
                    <div class="container">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">A. Students who are/were Pregnant</label>
                            <select class="js-example-basic-multiple" name="a2a[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a2a != 'null') @if(in_array($student->id, json_decode($model->a2a))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">B. Students who are Married</label>
                            <select class="js-example-basic-multiple" name="a2b[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a2b != 'null') @if(in_array($student->id, json_decode($model->a2b))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">C. Students who are Married with kids 5 years and below</label>
                            <select class="js-example-basic-multiple" name="a2c[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a2c != 'null') @if(in_array($student->id, json_decode($model->a2c))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">D. Students who have Behavioral and Emotional Difficulties (Having suicidal tendencies and nervous breakdown; having a difficulty relating with others.)</label>
                            <select class="js-example-basic-multiple" name="a2d[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a2d != 'null') @if(in_array($student->id, json_decode($model->a2d))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">E. Students who Abuse Substances (e.g. alcohol, tobacco/cigarette, drugs)</label>
                            <select class="js-example-basic-multiple" name="a2e[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a2e != 'null') @if(in_array($student->id, json_decode($model->a2e))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">F. Students who are Frequently Late and/or Absent</label>
                            <select class="js-example-basic-multiple" name="a2f[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a2f != 'null') @if(in_array($student->id, json_decode($model->a2f))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">G. Students with Academic Deficiencies (Consistently having low grades.)</label>
                            <select class="js-example-basic-multiple" name="a2g[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a2g != 'null') @if(in_array($student->id, json_decode($model->a2g))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <br>
                    <p class="cambria" style="text-align: left;">III. STUDENTS WITH SPECIAL NEEDS</p>
                    <div class="container">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">A. Students who are Left-Handed</label>
                            <select class="js-example-basic-multiple" name="a3a[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a3a != 'null') @if(in_array($student->id, json_decode($model->a3a))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">B. Students whose Parent/s is/are Overseas Filipino Workers</label>
                            <select class="js-example-basic-multiple" name="a3b[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a3b != 'null') @if(in_array($student->id, json_decode($model->a3b))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">C. Students whose Parent/s is/are No Longer Alive</label>
                            <select class="js-example-basic-multiple" name="a3c[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a3c != 'null') @if(in_array($student->id, json_decode($model->a3c))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">D. Students whose Parents are Separated</label>
                            <select class="js-example-basic-multiple" name="a3d[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a3d != 'null') @if(in_array($student->id, json_decode($model->a3d))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">E. Students who are Raised by a Single Parent</label>
                            <select class="js-example-basic-multiple" name="a3e[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a3e != 'null') @if(in_array($student->id, json_decode($model->a3e))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">F. Students who Belong to the LGBT Community</label>
                            <select class="js-example-basic-multiple" name="a3f[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a3f != 'null') @if(in_array($student->id, json_decode($model->a3f))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">G. Students who are Overachievers (Performing better or achieving more success than expected.)</label>
                            <select class="js-example-basic-multiple" name="a3g[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a3g != 'null') @if(in_array($student->id, json_decode($model->a3g))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <br>
                    <p class="cambria" style="text-align: left;">IV. OTHERS</p>
                    <div class="container">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1 cambria">Please specify needs: <input type="text" class="form-control cambria" placeholder="Others" name="a4a" value="@if(isset($model) ) {{$model->a4a}} @endif" ></label>

                            <select class="js-example-basic-multiple" name="a4b[]" multiple="multiple">
                                @isset($students)
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(isset($model) ) @if($model->a4b != 'null') @if(in_array($student->id, json_decode($model->a4b))) selected @endif @endif @endif>{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div>
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
            $('.js-example-basic-multiple').select2();
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