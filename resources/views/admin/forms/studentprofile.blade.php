@extends('layouts.admin')
@section('studentprofile')
active
@endsection
@section('content')
  <div class="container p-t-30">
    <div class="card">
        <div class="card-header">
            <h4>Student Profiles</h4> 
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('forms.studentprofile_form')}}" target="_blank" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
                <div class="row">
                    <!-- <div class="col-md-3">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">School Year</label>
                            <?php $schoolyears = App\Schoolyear::all(); ?>
                            <select name="sy" id="sy" class="form-control">
                                @isset($schoolyears)
                                @foreach($schoolyears as $schoolyear)
                                <option value="{{$schoolyear->id}}" @if($schoolyear->status == 1) selected @endif>{{$schoolyear->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                    </div> -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Course</label>
                            <select name="course" id="course" class="form-control">
                                @isset($courses)
                                @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->course}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Year Level</label>
                                <select name="yearlevel" id="yearlevel" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Section</label>
                                <select name="section" id="section" class="form-control">
                                    @isset($sections)
                                    @foreach($sections as $section)
                                    <option value="{{$section->section}}">{{$section->section}}</option>
                                    @endforeach
                                    @endisset
                                </select>
                            </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Action</label>
                                <select name="action" id="action" class="form-control">
                                    <option value="1">Print Report</option>
                                    <option value="2">New/Update Profiles</option>
                                </select>
                            </div>
                    </div>
                    <div class="col-md-2">
                        <div class="pull-left" style="padding-top: 30px;padding-bottom: 5px;">
                            <button class="btn btn-success" @if(!$sy) disabled @endif style="font-size: 12px; padding: 4px;"><i class="fa fa-refresh"></i> Submit</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
  </div>
@endsection
@section('scripts')
  <script>
      $(document).ready(function(){
          @if(  Session::has('Saved') )
            swal(
              'Saved',
              'Profiles saved successfully.',
              'success'
            )
          @endif
      });
  </script>
@endsection