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
            <form method="POST" action="{{route('forms.precounseling_formsubmit')}}" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
            <p class="cambria fsize_15" style="text-align: center;font-weight: bold;padding-top: 0px; font-size: 20px;"><b>PRE-COUNSELING FORM</b></p>
            
            <p class="cambria" style="text-align: left;font-weight: bold;padding-top: 10px; font-size: 16px;">A. Course</p>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">1. What motivated you to enroll in your course? </label>
                <textarea name="a1" id="a1" class="form-control cambria" cols="30" rows="2" required></textarea>
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">2. Who made the choice regarding your course? </label>
                <textarea name="a2" id="a2" class="form-control cambria" cols="30" rows="2" required></textarea>
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">3. Who is financing your studies?  </label>
                <textarea name="a3" id="a3" class="form-control cambria" cols="30" rows="2" required></textarea>
            </div>
            <br>
            <p class="cambria" style="text-align: left;font-weight: bold; font-size: 16px;">B. Residence</p>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-2">
                    <p class="cambria" style="font-size: 16px; line-height: 20px;" >1. With whom are you staying?</p> 
                </div>
                <div class="col-md-3">
                    <input type="text" name="b1" id="b1" class="form-control cambria" required>
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="font-size: 16px; line-height: 20px; ">2. What is his/her contact number? </p> 
                </div>
                <div class="col-md-3">
                    <input type="text" name="b2" id="b2" class="form-control cambria" required>
                </div>
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">3. How is your relationship with him/her/them? </label>
                <textarea name="b3" id="b3" class="form-control cambria" cols="30" rows="2" required></textarea>
            </div>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-3">
                    <p class="cambria" style="font-size: 16px; line-height: 20px;" >4. Are you assigned to do any tasks at home? </p> 
                </div>
                <div class="col-md-9">
                    <input type="text" name="b4" id="b4" class="form-control cambria" required>
                </div>
            </div>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-2">
                    <p class="cambria" style="font-size: 16px;line-height: 20px; ">5. Do you have a place to study? </p> 
                </div>
                <div class="col-md-4">
                    <input type="text" name="b5" id="b5" class="form-control cambria" required>
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="font-size: 16px;line-height: 20px; ">6. When do you usually study?  </p> 
                </div>
                <div class="col-md-4">
                    <input type="text" name="b6" id="b6" class="form-control cambria" required>
                </div>
            </div>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-3">
                    <p class="cambria" style="font-size: 16px;line-height: 20px; ">7. Are you able to concentrate studying at home? </p> 
                </div>
                <div class="col-md-1">
                    <input type="text" name="b7" id="b7" class="form-control cambria" required>
                </div>
                <div class="col-md-1">
                    <p class="cambria" style="font-size: 16px;line-height: 20px; ">8. If not, why?</p> 
                </div>
                <div class="col-md-7">
                    <input type="text" name="b8" id="b8" class="form-control cambria" >
                </div>
            </div>
            <br>
            <p class="cambria" style="text-align: left;font-weight: bold; font-size: 16px;">C. Family</p>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-2">
                    <p class="cambria" style="font-size: 16px; line-height: 20px;" >1. What is your birth order?</p> 
                </div>
                <div class="col-md-1">
                    <input type="text" name="c1" id="c1" class="form-control cambria" required>
                </div>
                <div class="col-md-3">
                    <p class="cambria" style="font-size: 16px; line-height: 20px;">2. Aside from your present family, who else are living with you?</p> 
                </div>
                <div class="col-md-6">
                    <input type="text" name="c2" id="c2" class="form-control cambria"required>
                </div>
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">3. How can you describe your relationship with your parents? Siblings?</label>
                <textarea name="c3" id="c3" class="form-control cambria" cols="30" rows="2" required></textarea>
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">4. Do you have any concerns with your family? </label>
                <textarea name="c4" id="c4" class="form-control cambria" cols="30" rows="2" required></textarea>
            </div>
            <br>
            <p class="cambria" style="text-align: left;font-weight: bold;font-size: 16px; ">D. Personal Life</p>
            <p class="cambria" style="font-size: 16px;">1. What are your present concerns or apprehensions in the following areas:</p>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-2"  >
                    <p class="cambria" style="font-size: 16px;">a. Peers</p> 
                </div>
                <div class="col-md-9">
                    <input type="text" name="d1" id="d1" class="form-control cambria" required>
                </div>
            </div>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-2"  >
                    <p class="cambria" style="font-size: 16px;">b. Financial</p> 
                </div>
                <div class="col-md-9">
                    <input type="text" name="d2" id="d2" class="form-control cambria" required>
                </div>
            </div>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-2" >
                    <p class="cambria" style="font-size: 16px;" >c. Spiritual</p> 
                </div>
                <div class="col-md-9">
                    <input type="text" name="d3" id="d3" class="form-control cambria" required>
                </div>
            </div>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-2">
                    <p class="cambria" style="font-size: 16px; ">d. Health </p> 
                </div>
                <div class="col-md-9">
                    <input type="text" name="d4" id="d4" class="form-control cambria" required>
                </div>
            </div>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-4">
                    <p class="cambria" style="font-size: 16px; line-height: 20px;">2. If applicable, have you felt homesick since your stay here in BISU? </p> 
                </div>
                <div class="col-md-8">
                    <input type="text" name="d5" id="d5" class="form-control cambria" required>
                </div>
            </div>
            <br>
            <p class="cambria" style="text-align: left;font-weight: bold; font-size: 16px;">E. Academics</p>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-4">
                    <p class="cambria" style="font-size: 16px; line-height: 20px;">1. Do you have subjects that you find difficulty to deal with?</p> 
                </div>
                <div class="col-md-8">
                    <input type="text" name="e1" id="e1" class="form-control cambria" required>
                </div>
            </div>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-3">
                    <p class="cambria" style="font-size: 16px; line-height: 20px;">2. How is your academic adjustment in BISU?</p> 
                </div>
                <div class="col-md-9">
                    <input type="text" name="e2" id="e2" class="form-control cambria" required>
                </div>
            </div>
            <br>
            <p class="cambria" style="text-align: left;font-weight: bold; font-size: 16px;">F. Remarks</p>
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-12">
                    <textarea name="f1" id="f1" class="form-control cambria" cols="30" rows="2" required></textarea>
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