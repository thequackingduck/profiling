@extends('layouts.admin')
@section('leavers')
active
@endsection
@section('content')
  <div class="container p-t-30">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('forms.stud_prof_formstore')}}" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
                <p class="cambria fsize_15" style="text-align: center;font-weight: bold;padding-top: 0px; font-size: 20px;"><b>PROFILE OF STUDENTS</b></p>
                <p class="cambria" style="text-align: left;">This questionnaire requests lists of students who belong to several categories. This is done to help the Guidance Center create programs responsive to the needs of the students. Please take this seriously. Please also use caution when filling this out. Please make sure that the list you will submit is accurate. Rest assured that confidentiality shall be upheld. Thank you!</p>
                <br>
                <p class="cambria"><b>I. STUDENTS WHO ARE DIFFERENTLY-ABLED</b></p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1a" type="checkbox" name="a1a" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1a" style="font-size: 14.5px;">
                            A. Students who are Nearsighted <i style="font-size: 12px;">(Unable to see things clearly unless they are relatively close to the eyes.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1b" type="checkbox" name="a1b" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1b" style="font-size: 14.5px;">
                            B. Students who are Farsighted <i style="font-size: 12px;">(Unable to see things clearly, especially if they are relatively close to the eyes.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1c" type="checkbox" name="a1c" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1c" style="font-size: 14.5px;">
                            C. Students with Crossed Eyes <i style="font-size: 12px;">(Having one or both eyes turned inward toward the nose.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1d" type="checkbox" name="a1d" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1d" style="font-size: 14.5px;">
                            D. Students with Color Blindness <i style="font-size: 12px;">(Difficulty distinguishing certain colors, such as blue and yellow or red and green.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1e" type="checkbox" name="a1e" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1e" style="font-size: 14.5px;">
                            E. Students with Blindness <i style="font-size: 12px;">(Unable to see because of injury, disease, or a congenital condition.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1f" type="checkbox" name="a1f" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1f" style="font-size: 14.5px;">
                            F. Students who are Deaf <i style="font-size: 12px;">(Lacking the power of hearing or having impaired hearing.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1g" type="checkbox" name="a1g" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1g" style="font-size: 14.5px;">
                            G. Students with Cleft/Lip Palate <i style="font-size: 12px;">(Separation that occurs in the lip or the palate (roof of the mouth), or both.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1h" type="checkbox" name="a1h" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1h" style="font-size: 14.5px;">
                            H. Students with Stuttering or Stammering Condition <i style="font-size: 12px;">(Flow of speech is disrupted by involuntary repetitions and prolongations of sounds.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1i" type="checkbox" name="a1i" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1i" style="font-size: 14.5px;">
                            I. Students with Dyslexia <i style="font-size: 12px;">(Difficulty in learning to read or interpret words, letters, and other symbols.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1j" type="checkbox" name="a1j" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1j" style="font-size: 14.5px;">
                            J. Students with Dyscalculia <i style="font-size: 12px;">(May have poor comprehension of math symbols, may struggle with memorizing and organizing numbers.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1k" type="checkbox" name="a1k" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1k" style="font-size: 14.5px;">
                            K. Students with Dysgraphia <i style="font-size: 12px;">(May have illegible handwriting, inconsistent spacing, poor spatial planning on paper, poor spelling.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1l" type="checkbox" name="a1l" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1l" style="font-size: 14.5px;">
                            L. Students with Muteness <i style="font-size: 12px;">(Lacking the ability to speak.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a1m" type="checkbox" name="a1m" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a1m" style="font-size: 14.5px;">
                            M. Students with Paraplegia <i style="font-size: 12px;">(Impairment in motor or sensory function of the lower extremities.)</i>
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
                <p class="cambria"><b>II. STUDENTS WHO ARE AT RISK</b></p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a2a" type="checkbox" name="a2a" class="promoted-input-checkbox"/>
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a2a" style="font-size: 14.5px;">
                            A. Students who are/were Pregnant
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a2b" type="checkbox" name="a2b" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a2b" style="font-size: 14.5px;">
                            B. Students who are Married 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a2c" type="checkbox" name="a2c" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a2c" style="font-size: 14.5px;">
                            C. Students who are Married with kids 5 years and below
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a2d" type="checkbox" name="a2d" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a2d" style="font-size: 14.5px;">
                            D. Students who have Behavioral and Emotional Difficulties <i style="font-size: 12px;">(Having suicidal tendencies and nervous breakdown; having a difficulty relating with others.)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a2e" type="checkbox" name="a2e" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a2e" style="font-size: 14.5px;">
                            E. Students who Abuse Substances <i style="font-size: 12px;">(e.g. alcohol, tobacco/cigarette, drugs)</i>
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a2f" type="checkbox" name="a2f" class="promoted-input-checkbox"/>
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a2f" style="font-size: 14.5px;">
                            F. Students who are Frequently Late and/or Absent
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a2g" type="checkbox" name="a2g" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a2g" style="font-size: 14.5px;">
                            G. Students with Academic Deficiencies <i style="font-size: 12px;">(Consistently having low grades.)</i>
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
                <p class="cambria"><b>III. STUDENTS WITH SPECIAL NEEDS</b></p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a3a" type="checkbox" name="a3a" class="promoted-input-checkbox"/>
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a3a" style="font-size: 14.5px;">
                            A. Students who are Left-Handed
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a3b" type="checkbox" name="a3b" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a3b" style="font-size: 14.5px;">
                            B. Students whose Parent/s is/are Overseas Filipino Workers
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a3c" type="checkbox" name="a3c" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a3c" style="font-size: 14.5px;">
                            C. Students whose Parent/s is/are No Longer Alive
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a3d" type="checkbox" name="a3d" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a3d" style="font-size: 14.5px;">
                            D. Students whose Parents are Separated
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a3e" type="checkbox" name="a3e" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a3e" style="font-size: 14.5px;">
                            E. Students who are Raised by a Single Parent
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a3f" type="checkbox" name="a3f" class="promoted-input-checkbox"/>
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a3f" style="font-size: 14.5px;">
                            F. Students who Belong to the LGBT Community
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-a3g" type="checkbox" name="a3g" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-a3g" style="font-size: 14.5px;">
                            G. Students who are Overachievers  <i style="font-size: 12px;">(Performing better or achieving more success than expected.)</i>
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
                <p class="cambria"><b>IV. OTHERS</b></p>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">Please specify needs:</label>
                    <textarea name="a4a" id="a4a" class="form-control cambria" cols="30" rows="3"></textarea>
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