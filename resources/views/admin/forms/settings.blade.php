@extends('layouts.admin')
@section('content')
  <!-- WELCOME-->
  <section class="welcome p-t-30 p-b-10" >
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="title-4">Form Settings
                  </h1>
              </div>
          </div>
      </div>
  </section>
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="table-responsive m-b-40">
                <table id="table" class="table table-borderless table-data3" style="width: 100%;">
                    <thead style="background-color: #1a8cff;">
                        <tr>
                            <th width="40%" style="font-size: 12px; color: white;">Form</th>
                            <th width="40%" style="font-size: 12px; color: white;">Status</th>
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $model = App\FormSetting::all(); ?>
                      @isset($model)
                        @foreach($model as $element)
                            <?php 
                                $name = '';
                                if($element->form == 1){
                                    $name = 'Counselor Feedback';
                                }
                                else if($element->form == 2){
                                    $name = 'Evaluation';
                                }
                                else if($element->form == 3){
                                    $name = 'Individual Inventory';
                                }
                                else if($element->form == 4){
                                    $name = 'Interview Feedback';
                                }
                                else if($element->form == 5){
                                    $name = 'Leavers Checklist';
                                }
                                else if($element->form == 6){
                                    $name = 'Membership';
                                }
                                else if($element->form == 7){
                                    $name = 'Needs Assessment';
                                }
                                else if($element->form == 8){
                                    $name = 'PF-Application ';
                                }
                                else{
                                    $name = 'Pre-Counseling';
                                }
                                
                            
                            ?>
                          <tr class="tr-shadow" style="font-size: 12px; padding: 5px;">
                            <td>{{$name}}</td>
                            <td>@if($element->enabled == 1) <b style="color: green;">ENABLED</b> @else <b style="color: red;">DISABLED</b>@endif</td>
                            <td style="padding: 0px;">
                              <div class="table-data-feature">
                                <a style=" margin-right: 40px; margin-top: 5px;" href="{{route('enable_form', $element->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="@if($element->enabled == 1) Disable @else Enable @endif">
                                  <i class="zmdi zmdi-edit"></i>
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
          @if(  Session::has('Enabled') )
            swal(
              'Saved',
              'Form enabled successfully.',
              'success'
            )
          @elseif(  Session::has('Disabled') )
            swal(
              'Saved',
              'Form disabled successfully.',
              'success'
            )
          @elseif( Session::has('Deleted') )
            swal(
              'Deleted',
              'College deleted successfully.',
              'success'
            )
          @elseif( Session::has('Updated') )
            swal("SUCCESS!", "{!! session('Updated') !!}", "success"); swal(
              'Updated',
              'College updated successfully.',
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