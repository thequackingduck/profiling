@extends('layouts.admin')
@section('schoolyear')
active
@endsection
@section('content')
  <!-- WELCOME-->
  <section class="welcome p-t-30 p-b-10" >
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="title-4">Evaluation Activities
                  </h1>
              </div>
          </div>
      </div>
  </section>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
            <form method="POST" action="{{route('evaluationactivity.store')}}" enctype="multipart/form-data" style="font-size: 12px;">
              {{csrf_field()}}

              <div class="form-group">
                  <label class=" form-control-label">Activity Title <span style="color: red; font-weight: bold;">*</span></label>
                  <input type="text" id="company" class="form-control" name="title" aria-required="true" aria-invalid="false" data-validation="required">
              </div>

              <div class="form-group">
                  <label class=" form-control-label">Facilitators <span style="color: red; font-weight: bold;">*</span></label>
                  <input type="text" id="company" class="form-control" name="facilitators" aria-required="true" aria-invalid="false" data-validation="required">
              </div>

              <div class="form-group">
                  <label class=" form-control-label">Date <span style="color: red; font-weight: bold;">*</span></label>
                  <input type="date" class="form-control" name="date" aria-required="true" aria-invalid="false" data-validation="required">
              </div>

              <div class="form-group">
                  <input type="submit" id="country" @if(!$sy) disabled @endif class="form-control btn btn-success" value="Submit">
              </div>
          </form>
      </div>
        <div class="col-md-8">
            <div class="table-responsive m-b-40">
              <table id="table" class="table table-borderless table-data3" style="width: 100%;">
                <thead style="background-color: #1a8cff;">
                    <tr>
                        <th width="30%" style="font-size: 12px; color: white;">Activity Title</th>
                        <th width="30%" style="font-size: 12px; color: white;">Facilitators</th>
                        <th width="30%" style="font-size: 12px; color: white;">Date</th>
                        <th width="10%"></th>
                    </tr>
                </thead>
                <tbody>
                  @isset($model)
                    @foreach($model as $element)
                      <tr class="tr-shadow" style="font-size: 12px; padding: 5px;">
                        <td>{{$element->title}}</td>
                        <td>{{$element->facilitators}}</td>
                        <td>{{$element->date}}</td>
                        <td style="padding: 0px;">
                          <div class="table-data-feature">
                            <a style=" margin-right: 40px; margin-top: 5px;" href="{{route('forms.evaluationactivity', $element->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                              <i class="zmdi zmdi-edit"></i>
                            </a>
                            <a style=" margin-right: 40px; margin-top: 5px;" href="{{route('forms.evaluation', $element->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Evaluation">
                              <i class="fas fa-copy"></i>
                            </a>

                            <!-- <a href="#" class="item btnDel" data-toggle="tooltip" data-placement="top" title="Delete">
                              <i class="zmdi zmdi-delete"></i>
                            </a>
                            <form action="#" method="DELETE" style="display:none" class="formDelete">
                              {{csrf_field()}}
                              <button class="btn btn-danger" type="submit" autofocus=""></button> 
                            </form> -->
                            
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  @endisset
                </tbody>
              </table>
            </div>
            <!-- END DATA TABLE-->
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
          @if(  Session::has('Inserted') )
            swal(
              'Saved',
              'New Activity added successfully.',
              'success'
            )
          @elseif( Session::has('Deleted') )
            swal(
              'Deleted',
              'Activity deleted successfully.',
              'success'
            )
          @elseif( Session::has('Updated') )
            swal("SUCCESS!", "{!! session('Updated') !!}", "success"); swal(
              'Updated',
              'Activity updated successfully.',
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