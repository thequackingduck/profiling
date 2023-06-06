@extends('layouts.admin')
@section('leavers')
active
@endsection
@section('content')
  <div class="container p-t-30">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('forms.submit_form')}}" enctype="multipart/form-data" id="myForm" style="font-size: 12px;">
                {{csrf_field()}}
                <p class="cambria fsize_15" style="text-align: center;font-weight: bold;padding-top: 0px;"><b>UNIVERSITY LEAVERS CHECKLIST</b></p>
                <p class="cambria" style="text-align: left;padding-top: 10px;">Reason for Referral:</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-1" type="checkbox" name="c1" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-1">
                            Academic Failure/Problem   
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-2" type="checkbox" name="c2" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-2">
                            Joining Gangs
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-3" type="checkbox" name="c3" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-3">
                            Adjustment Problem 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-4" type="checkbox" name="c4" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-4">
                            Kicked –Out/ Expelled/Terminated
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-5" type="checkbox" name="c5" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-5">
                            Boredom /Motivation Problem 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-6" type="checkbox" name="c6" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-6">
                            Mental Health Problem
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-7" type="checkbox" name="c7" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-7">
                            Change of Course/Career  
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-8" type="checkbox" name="c8" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-8">
                            Prejudice/Discrimination /Bullying
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-9" type="checkbox" name="c9" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-9">
                            Drugs/Drug Abuse
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-10" type="checkbox" name="c10" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-10">
                            School Is Not Important/No one Cares	
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-11" type="checkbox" name="c11" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-11">
                            Early Pregnancy 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-12" type="checkbox" name="c12" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-12">
                            Single Parenting/Early 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-13" type="checkbox" name="c13" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-13">
                            Family Problem 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-14" type="checkbox" name="c14" class="promoted-input-checkbox"/>
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-14">
                            Teacher and School Problem
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-15" type="checkbox" name="c15" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-15">
                            Financial Problem  
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-16" type="checkbox" name="c16" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-16">
                            Transfer of Residence
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-17" type="checkbox" name="c17" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-17">
                            Health Problem   
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-18" type="checkbox" name="c18" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-18">
                            Transfer of School/University
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-19" type="checkbox" name="c19" class="promoted-input-checkbox"/>
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-19">
                            Homesickness
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-20" type="checkbox" name="c20" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-20">
                            Working Student/Part-time 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-21" type="checkbox" name="c21" class="promoted-input-checkbox"/>
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-21">
                            Others: (Please specify.)
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="others" class="form-control cambria" required>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1 cambria">Details</label>
                    <textarea name="details" id="details" class="form-control cambria" cols="30" rows="3" required></textarea>
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
        const form = document.getElementById("myForm");
    form.addEventListener("submit", (event) => {
        const checkboxes = form.querySelectorAll('input[type="checkbox"]');
        const checkedBoxes = Array.from(checkboxes).filter((checkbox) => checkbox.checked);
            if (checkedBoxes.length === 0) {
                event.preventDefault();
                alert("Please select at least one option.");
            }
        });
  </script>
  
@endsection