@extends('layouts.admin')
@section('college')
active
@endsection
@section('content')
  <!-- WELCOME-->
  <section class="welcome p-t-30 p-b-10" >
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="title-4">School Year
                  </h1>
              </div>
          </div>
      </div>
  </section>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
            <form method="POST" action="{{route('college.update' , $collection->id)}}" enctype="multipart/form-data" style="font-size: 12px;">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="PATCH">

              <div class="form-group">
              <label class=" form-control-label">College <span style="color: red; font-weight: bold;">*</span></label>
                  <input type="text" id="company" value="{{$collection->name}}" placeholder="Enter Department" class="form-control" name="name" aria-required="true" aria-invalid="false" data-validation="required">
              </div>

              <div class="form-group">
                  <input type="submit" id="country" class="form-control btn btn-success" value="Submit">
              </div>
          </form>
      </div>
        <div class="col-md-8">
            <div class="table-responsive m-b-40">
                <table id="table" class="table table-borderless table-data3" style="width: 100%;">
                    <thead style="background-color: #1a8cff;">
                        <tr>
                            <th width="40%" style="font-size: 12px; color: white;">School Year</th>
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                      @isset($model)
                        @foreach($model as $element)
                          <tr class="tr-shadow" style="font-size: 12px; padding: 5px;">
                            <td>{{$element->name}}</td>
                            <td style="padding: 0px;">
                              <!-- <div class="table-data-feature">
                                <a style=" margin-right: 40px; margin-top: 5px;" href="{{route('college.edit', $element->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                  <i class="zmdi zmdi-edit"></i>
                                </a> -->

                                <!-- <a href="#" class="item btnDel" data-toggle="tooltip" data-placement="top" title="Delete">
                                  <i class="zmdi zmdi-delete"></i>
                                </a>
                                <form action="#" method="DELETE" style="display:none" class="formDelete">
                                  {{csrf_field()}}
                                  <button class="btn btn-danger" type="submit" autofocus=""></button> 
                                </form> -->
                                
                              <!-- </div> -->
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
              'New College added successfully.',
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
          @endif
      });
  </script>
@endsection