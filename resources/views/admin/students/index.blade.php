@extends('layouts.admin')
@section('students')
active
@endsection
@section('content')
	<div class="container-fluid">
		    <div class="pull-right" style="padding-right: 2px;padding-top: 20px;padding-bottom: 5px;">
            <a href="{{route('add_student')}}" class="btn btn-success" style="font-size: 12px; padding: 4px;">
              <i class="fa fa-plus"></i> Add Student</a>
            <a href="{{route('students.create')}}" class="btn btn-success" style="font-size: 12px; padding: 4px;">
              <i class="fa fa-arrow-up"></i> Upload Students</a>
          </div>

		<div class="table-responsive m-b-40">
			<table id="table" class="table table-borderless table-data3" style="width: 100%;">
				<thead style="background-color: #1a8cff;">
					<th width="10%" style="font-size: 12px; color: white;">ID No.</th>
					<th width="15%" style="font-size: 12px; color: white;">Name</th>
					<th width="10%" style="font-size: 12px; color: white;">College</th>
					<th width="5%" style="font-size: 12px; color: white;">Course</th>
					<th width="5%" style="font-size: 12px; color: white;">Level</th>
          <th width="5%" style="font-size: 12px; color: white;">Section</th>
					<th width="10%" style="font-size: 12px; color: white;">Access Key</th>
					<th width="5%" style="font-size: 12px; color: white;">Sex</th>
					<th width="10%" style="font-size: 12px; color: white;">Address</th>
					<th width="10%" style="font-size: 12px; color: white;">Birthdate</th>
          <th width="5%" style="font-size: 12px; color: white;">Units</th>
					<th width="10%" style="font-size: 12px; color: white;">Action</th>
          
				</thead>
        
				<tbody>
					@isset($model)
						@foreach($model as $element)
							<tr class="tr-shadow" style="font-size: 12px; padding: 5px;">
								<td>{{$element->id_no}}</td>
								<td>{{$element->lastname}}, {{$element->firstname}} {{$element->middlename}}</td>
								<td>{{$element->course->college->name}}</td>
								<td>{{$element->course->code}}</td>
								<td>{{$element->yearlevel}}</td>
                <td>{{$element->section}}</td>
								<td>{{$element->access_key}}</td>
								<td>{{$element->sex}}</td>
								<td>{{$element->address}}</td>
								<td>{{Carbon\Carbon::parse($element->dateofbirth)->toDateString()}}</td>
                <td>{{$element->units}}</td>
								<td>
									<div class="table-data-feature">
										<!-- <a style=" margin-right: 40px; margin-top: 5px;" href="{{route('student_upd', $element->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
										<i class="zmdi zmdi-edit"></i>
									</a> -->

                     <a style=" margin-right: 40px; margin-top: 5px;" href="#" class="item btnDel" data-toggle="tooltip" data-placement="top" title="Delete">
                    <i class="zmdi zmdi-delete" ></i>
                    
                    </a>
                    <form action="{{ route('student_destroy', $element->id) }}" method="POST" style="display:none" class="formDelete">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-danger" type="submit" autofocus=""></button> 
                    </form>  
									
									</div> 
								</td>
							</tr>
						@endforeach
					@endisset
				</tbody>
			</table>
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
              'Students has been added successfully.',
              'success'
            )
          @elseif( Session::has('Deleted') )
            swal(
              'Deleted',
              'Student has been deleted successfully.',
              'success'
            )
          @elseif( Session::has('Updated') )
            swal("SUCCESS!", "{!! session('Updated') !!}", "success"); swal(
              'Updated',
              'Student has been updated successfully.',
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
  <!-- <script>
// Add an event listener to the "Delete" button
document.querySelector('.formDelete button').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission behavior
    
    // Send a DELETE request to the server
    fetch(event.target.closest('form').getAttribute('action'), {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }).then(function(response) {
        if (response.ok) {
            // Reload the page to update the student list
            window.location.reload();
        } else {
            // Display an error message
            alert('Failed to delete student');
        }
    }).catch(function(error) {
        console.error(error);
    });
});
</script> -->
@endsection