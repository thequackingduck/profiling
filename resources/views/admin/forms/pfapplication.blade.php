@extends('layouts.admin')
@section('pfapplication')
active
@endsection
@section('content')
  <div class="container p-t-30">
    <div class="card">
        <div class="card-header">
            <h4>PF-Application Form</h4>
        </div>
        <div class="card-body">
            <div class="default-tab">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active show" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Submitted</a>
                        <a class="nav-item nav-link" id="nav-nosubmit-tab" data-toggle="tab" href="#nav-nosubmit" role="tab" aria-controls="nav-nosubmit" aria-selected="false">Not Submitted</a>
                        <a class="nav-item nav-link" id="nav-reports-tab" data-toggle="tab" href="#nav-reports" role="tab" aria-controls="nav-reports" aria-selected="false">Reports</a>
                    </div>
                </nav>
                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <table id="table" class="table table-borderless table-data3" style="width: 100%;">
                            <thead style="background-color: #1a8cff;">
                                <th width="20%" style="font-size: 12px; color: white;">ID No.</th>
                                <th width="40%" style="font-size: 12px; color: white;">Name</th>
                                <th width="10%" style="font-size: 12px; color: white;">College</th>
                                <th width="10%" style="font-size: 12px; color: white;">Course</th>
                                <th width="10%" style="font-size: 12px; color: white;">Level</th>
                                <th width="10%" style="font-size: 12px; color: white;">Section</th>
                                <th width="5%"></th>
                            </thead>
                            <tbody>
                                @isset($form)
                                    @foreach($form as $submitted)
                                    <tr class="tr-shadow" style="font-size: 12px; padding: 5px;">
                                        <td>{{$submitted->student->id_no}}</td>
                                        <td>{{$submitted->student->lastname}}, {{$submitted->student->firstname}} {{$submitted->student->middlename}}</td>
                                        <td>{{$submitted->student->course->college->name}}</td>
                                        <td>{{$submitted->student->course->code}}</td>
                                        <td>{{$submitted->student->yearlevel}}</td>
                                        <td>{{$submitted->student->section}}</td>
                                        <td><a target="_blank" href="{{route('pfapplicationindividual', $submitted->id)}}"><i class="fa fa-print"></i></a></td>
                                    </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-nosubmit" role="tabpanel" aria-labelledby="nav-nosubmit-tab">
                        <table id="table2" class="table table-borderless table-data3" style="width: 100%;">
                            <thead style="background-color: #1a8cff;">
                                <th width="20%" style="font-size: 12px; color: white;">ID No.</th>
                                <th width="40%" style="font-size: 12px; color: white;">Name</th>
                                <th width="10%" style="font-size: 12px; color: white;">College</th>
                                <th width="10%" style="font-size: 12px; color: white;">Course</th>
                                <th width="10%" style="font-size: 12px; color: white;">Level</th>
                                <th width="10%" style="font-size: 12px; color: white;">Section</th>
                            </thead>
                            <tbody>
                                @isset($notsubmitted)
                                    @foreach($notsubmitted as $nosubmit)
                                        <?php $course = App\Course::where('id', $nosubmit->course_id)->first(); ?>
                                        <tr class="tr-shadow" style="font-size: 12px; padding: 5px;">
                                            <td>{{$nosubmit->id_no}}</td>
                                            <td>{{$nosubmit->lastname}}, {{$nosubmit->firstname}} {{$nosubmit->middlename}}</td>
                                            <td>{{$course->college->name}}</td>
								            <td>{{$course->code}}</td>
                                            <td>{{$nosubmit->yearlevel}}</td>
                                            <td>{{$nosubmit->section}}</td>
                                        </tr>
                                    @endforeach
                                @endisset 
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-reports" role="tabpanel" aria-labelledby="nav-reports-tab">
                        <form method="POST" action="{{route('pfapplication_print')}}" target="_blank" enctype="multipart/form-data" style="font-size: 12px;">
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
                                <div class="col-md-3">
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
                                <div class="col-md-1">
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
                                <div class="col-md-3">
                                    <div class="pull-left" style="padding-top: 30px;padding-bottom: 5px;">
                                        <button class="btn btn-success" @if(!$sy) disabled @endif style="font-size: 12px; padding: 4px;"><i class="fa fa-print"></i> Print Report</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="au-card m-b-30">
                        <div id="canvasheader" class="au-card-inner"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="LeaversChart" height="296" style="display: block; height: 237px; width: 475px;" width="593" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
  </div>
  
@endsection
@section('scripts')
  <script>
      $(document).ready(function(){
        try {
        //doughut chart
        var ctx = document.getElementById("LeaversChart");
        var submitted = <?php if($form){echo $form->count();} else{ echo 0; } ?>;
        var notsubmitted = <?php if($notsubmitted){echo  $notsubmitted->count(); } else{ echo 0; }  ?>;
        if (ctx) {
        ctx.height = 150;
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
            datasets: [{
                data: [submitted, notsubmitted],
                backgroundColor: [
                "rgba(0, 123, 255,0.9)",
                "rgba(0, 123, 255,0.5)",
                ],
                hoverBackgroundColor: [
                "rgba(0, 123, 255,0.9)",
                "rgba(0, 123, 255,0.5)",
                ]

            }],
            labels: [
                "Submitted",
                "Not Submitted",
            ]
            },
            options: {
            legend: {
                position: 'top',
                labels: {
                fontFamily: 'Poppins'
                }

            },
            responsive: true
            }
        });
        }


        } catch (error) {
        console.log(error);
        }

        $('#sy').on('change', function() {
            var course = $('#course').val();
            var section = $('#section').val();
            var yearlevel = $('#yearlevel').val();
            var sy = $('#sy').val();
            $.ajax({
              url: '/pfapplicationgetfiltered',
              type: 'post',
              data: {'course': course, 'section':section, 'yearlevel': yearlevel, 'sy': sy, '_token': $('input[name=_token]').val()},
              dataType: 'json',
              success:function(result){
                    $('#LeaversChart').remove();
                    $('#canvasheader').append('<canvas id="LeaversChart" height="296" style="display: block; height: 237px; width: 475px;" width="593" class="chartjs-render-monitor"></canvas>');
                    var ctx = document.getElementById("LeaversChart");

                    var submitted = <?php if($form){echo $form->count();} else{ echo 0; } ?>;
                    var notsubmitted = <?php if($notsubmitted){echo  $notsubmitted->count(); } else{ echo 0; }  ?>;
                    if (ctx) {
                        ctx.height = 150;
                        var myChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                            datasets: [{
                                data: [result.submitted, result.notsubmitted],
                                backgroundColor: [
                                "rgba(0, 123, 255,0.9)",
                                "rgba(0, 123, 255,0.5)",
                                ],
                                hoverBackgroundColor: [
                                "rgba(0, 123, 255,0.9)",
                                "rgba(0, 123, 255,0.5)",
                                ]

                            }],
                            labels: [
                                "Submitted",
                                "Not Submitted",
                            ]
                            },
                            options: {
                            legend: {
                                position: 'top',
                                labels: {
                                fontFamily: 'Poppins'
                                }

                            },
                            responsive: true
                            }
                        });
                        
                    }


              }
            });
        });

        
        $('#course').on('change', function() {
            var course = $('#course').val();
            var section = $('#section').val();
            var yearlevel = $('#yearlevel').val();
            var sy = $('#sy').val();
            $.ajax({
              url: '/pfapplicationgetfiltered',
              type: 'post',
              data: {'course': course, 'section':section, 'yearlevel': yearlevel, 'sy': sy, '_token': $('input[name=_token]').val()},
              dataType: 'json',
              success:function(result){
                    $('#LeaversChart').remove();
                    $('#canvasheader').append('<canvas id="LeaversChart" height="296" style="display: block; height: 237px; width: 475px;" width="593" class="chartjs-render-monitor"></canvas>');
                    var ctx = document.getElementById("LeaversChart");

                    var submitted = <?php if($form){echo $form->count();} else{ echo 0; } ?>;
                    var notsubmitted = <?php if($notsubmitted){echo  $notsubmitted->count(); } else{ echo 0; }  ?>;
                    if (ctx) {
                        ctx.height = 150;
                        var myChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                            datasets: [{
                                data: [result.submitted, result.notsubmitted],
                                backgroundColor: [
                                "rgba(0, 123, 255,0.9)",
                                "rgba(0, 123, 255,0.5)",
                                ],
                                hoverBackgroundColor: [
                                "rgba(0, 123, 255,0.9)",
                                "rgba(0, 123, 255,0.5)",
                                ]

                            }],
                            labels: [
                                "Submitted",
                                "Not Submitted",
                            ]
                            },
                            options: {
                            legend: {
                                position: 'top',
                                labels: {
                                fontFamily: 'Poppins'
                                }

                            },
                            responsive: true
                            }
                        });
                        
                    }


              }
            });
        });

        $('#section').on('change', function() {
            var course = $('#course').val();
            var section = $('#section').val();
            var yearlevel = $('#yearlevel').val();
            var sy = $('#sy').val();
            $.ajax({
              url: '/pfapplicationgetfiltered',
              type: 'post',
              data: {'course': course, 'section':section, 'yearlevel': yearlevel, 'sy': sy, '_token': $('input[name=_token]').val()},
              dataType: 'json',
              success:function(result){
                    $('#LeaversChart').remove();
                    $('#canvasheader').append('<canvas id="LeaversChart" height="296" style="display: block; height: 237px; width: 475px;" width="593" class="chartjs-render-monitor"></canvas>');
                    var ctx = document.getElementById("LeaversChart");
                    var submitted = <?php if($form){echo $form->count();} else{ echo 0; } ?>;
                    var notsubmitted = <?php if($notsubmitted){echo  $notsubmitted->count(); } else{ echo 0; }  ?>;
                    if (ctx) {
                        ctx.height = 150;
                        var myChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                            datasets: [{
                                data: [result.submitted, result.notsubmitted],
                                backgroundColor: [
                                "rgba(0, 123, 255,0.9)",
                                "rgba(0, 123, 255,0.5)",
                                ],
                                hoverBackgroundColor: [
                                "rgba(0, 123, 255,0.9)",
                                "rgba(0, 123, 255,0.5)",
                                ]

                            }],
                            labels: [
                                "Submitted",
                                "Not Submitted",
                            ]
                            },
                            options: {
                            legend: {
                                position: 'top',
                                labels: {
                                fontFamily: 'Poppins'
                                }

                            },
                            responsive: true
                            }
                        });
                        
                    }


              }
            });
        });

        $('#yearlevel').on('change', function() {
            var course = $('#course').val();
            var section = $('#section').val();
            var yearlevel = $('#yearlevel').val();
            var sy = $('#sy').val();
            $.ajax({
              url: '/pfapplicationgetfiltered',
              type: 'post',
              data: {'course': course, 'section':section, 'yearlevel': yearlevel, 'sy': sy, '_token': $('input[name=_token]').val()},
              dataType: 'json',
              success:function(result){
                    $('#LeaversChart').remove();
                    $('#canvasheader').append('<canvas id="LeaversChart" height="296" style="display: block; height: 237px; width: 475px;" width="593" class="chartjs-render-monitor"></canvas>');
                    var ctx = document.getElementById("LeaversChart");
                    var submitted = <?php if($form){echo $form->count();} else{ echo 0; } ?>;
                    var notsubmitted = <?php if($notsubmitted){echo  $notsubmitted->count(); } else{ echo 0; }  ?>;
                    if (ctx) {
                        ctx.height = 150;
                        var myChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                            datasets: [{
                                data: [result.submitted, result.notsubmitted],
                                backgroundColor: [
                                "rgba(0, 123, 255,0.9)",
                                "rgba(0, 123, 255,0.5)",
                                ],
                                hoverBackgroundColor: [
                                "rgba(0, 123, 255,0.9)",
                                "rgba(0, 123, 255,0.5)",
                                ]

                            }],
                            labels: [
                                "Submitted",
                                "Not Submitted",
                            ]
                            },
                            options: {
                            legend: {
                                position: 'top',
                                labels: {
                                fontFamily: 'Poppins'
                                }

                            },
                            responsive: true
                            }
                        });
                        
                    }


              }
            });
        });


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