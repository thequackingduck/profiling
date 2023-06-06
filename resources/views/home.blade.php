@extends('layouts.admin')

@section('content')
<div class="container" style="padding-top: 40px;">
    <div class="row justify-content-center" >
       
        <br>
       
        <div class="col-md-9" >
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{url('/admin/images/home.png')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/admin/images/inventory.png')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/admin/images/assessment.png')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/admin/images/evaluation.png')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/admin/images/leavers.png')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/admin/images/client-counselor.png')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/admin/images/feedback.png')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/admin/images/pre-counseling.png')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/admin/images/application.png')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/admin/images/membership.png')}}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          
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
          @if(  Session::has('DisabledForm') )
            swal(
              'Info',
              'Form is currently unavailable.',
              'info'
            )
          @elseif( Session::has('DuplicateForm') )
            swal(
              'Info',
              'Form already submitted.',
              'info'
            )
          @elseif( Session::has('SubmittedForm') )
            swal(
              'Saved',
              'Form submitted successfully.',
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
            @elseif(  Session::has('UpdatedAccount') )
            swal(
              'Saved',
              'Account has been updated successfully.',
              'success'
            )
          @elseif( Session::has('Duplicate') )
            swal('Duplicate Record.', 'This record already exist.', 'info');
          @endif
      });
  </script>
@endsection