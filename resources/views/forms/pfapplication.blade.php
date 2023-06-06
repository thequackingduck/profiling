<!DOCTYPE html>
<html>
<head>
  <title>Peer Facilitator's Circle Application Form</title>
    <link rel="icon" type="text/css" href="{{URL::to('logo.png')}}"></head>

    <!-- Bootstrap CSS-->
    <link href="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <style>
        .century_gothic{
            font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
        }
        .cambria{
            font-family: Cambria,Georgia,serif;
        }
        .calibri{
            font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; 
        }
        .margin-0rem{
            margin-bottom: 0rem;
        }
        .fsize_15{
            font-size: 15px;
        }
        .checkbox-wrapper-28 label{
            font-family: Cambria,Georgia,serif;
        }
    </style>

    <style>
    .checkbox-wrapper-28 {
        --size: 25px;
        position: relative;
    }

    .checkbox-wrapper-28 *,
    .checkbox-wrapper-28 *:before,
    .checkbox-wrapper-28 *:after {
        box-sizing: border-box;
    }

    .checkbox-wrapper-28 .promoted-input-checkbox {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .checkbox-wrapper-28 input:checked ~ svg {
        height: calc(var(--size) * 0.6);
        -webkit-animation: draw-checkbox-28 ease-in-out 0.2s forwards;
                animation: draw-checkbox-28 ease-in-out 0.2s forwards;
    }
    .checkbox-wrapper-28 label:active::after {
        background-color: #e6e6e6;
    }
    .checkbox-wrapper-28 label {
        color: black;
        line-height: var(--size);
        cursor: pointer;
        position: relative;
    }
    .checkbox-wrapper-28 label:after {
        content: "";
        height: var(--size);
        width: var(--size);
        margin-right: 8px;
        float: left;
        border: 2px solid black;
        border-radius: 3px;
        transition: 0.15s all ease-out;
    }
    .checkbox-wrapper-28 svg {
        stroke: black;
        stroke-width: 3px;
        height: 0;
        width: calc(var(--size) * 0.6);
        position: absolute;
        left: calc(var(--size) * 0.21);
        top: calc(var(--size) * 0.2);
        stroke-dasharray: 33;
    }

    @-webkit-keyframes draw-checkbox-28 {
        0% {
        stroke-dashoffset: 33;
        }
        100% {
        stroke-dashoffset: 0;
        }
    }

    @keyframes draw-checkbox-28 {
        0% {
        stroke-dashoffset: 33;
        }
        100% {
        stroke-dashoffset: 0;
        }
    }
    </style>



<body>

    @foreach($model as $prop)
    <?php 
        $student =  App\Student::where('id', $prop->student_id)->first(); 
    ?>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 23</p>
        <div class="container-fluid row pull-center" style="text-align: right;padding-bottom: 10px;">
            <div class="col-md-3" style="text-align: right; position: relative; left: 60px; bottom: 10px;">
                <img src="{{URL::to('logo.png')}}" style="width: 80px;height:80px;" alt="">
            </div>
            <div class="col-md-6" style="text-align: center;">
                <p class="cambria margin-0rem fsize_15">Republic of the Philippines</p>
                <p class="cambria margin-0rem fsize_15" style="font-weight: bold;">BOHOL ISLAND STATE UNIVERSITY-BALILIHAN CAMPUS</p>
                <p class="cambria margin-0rem fsize_15">Magsija, Balilihan, Bohol</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="container-fluid" style="text-align: center;">
            <p class="century_gothic" style="font-style: italic;margin-bottom: 0em;"><b>Vision:</b> A premier S & T university for the formation of world class and virtuous human resource for the sustainable development in Bohol and the country.</p>
            <p class="century_gothic" style="border-bottom: solid 1px;font-style: italic;"><b>Mission:</b> Committed to provide quality and innovative education in strategic sectors for the development of Bohol and the country.</p>
            <br>
            <div class="row">
                <div class="col-md-5" style="text-align: right;">
                    <img src="{{URL::to('peers.png')}}" style="width: 80px;height:80px;" alt="">
                </div>
                <div class="col-md-3" style="text-align: center;margin-left: -50px;margin-top: 20px;">
                    <p class="cambria margin-0rem fsize_15" style="font-weight: bold;">Guidance Center</p>
                    <p class="cambria margin-0rem fsize_15" style="font-weight: bold;">Peer Facilitators’ Circle</p>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <br><br>
        <div class="container-fluid">
            <p class="cambria" style="text-align: left;"><u>Peer Facilitators’ Circle Volunteer Application Form</u></p>
            <br>
            <p class="cambria" style="text-align: left;">Peer Facilitators’ Circle is the student-driven organization of the Guidance Center of BISU-MC. In this organization, youth empower youth to make informed decisions about their own well-being.</p>
            <p class="cambria" style="text-align: left;">The group assists the Guidance Center in their programs and activities as well as offers campaigns on significant topics such as Bullying, Teenage Pregnancy, Sexual Harassment, Social Media Ethics and more. We are currently looking for Peer Facilitators to be one with us in our goals.</p>
            
            <p class="cambria" style="text-align: left;">We’re looking for volunteers who are…</p>
            <ul>
                <li class="cambria">Excited to facilitate conversations with other students;</li>
                <li class="cambria">Open-minded, non-judgmental and supportive of all students regardless of age, gender and status;</li>
                <li class="cambria">Comfortable speaking with groups of youth or eager to learn;</li>
                <li class="cambria">Punctual and reliable;</li>
                <li class="cambria">Able to commit to volunteering during their vacant periods; and,</li>
                <li class="cambria">Available for trainings and meetings.</li>
            </ul>
            <p class="cambria" style="text-align: left;">Benefits to Volunteering: You’ll receive trainings on basic facilitation skills as well as on important socio-cultural and psychological topics.</p>
            <hr style="border-bottom: 1px solid;">
            <p class="cambria margin-0rem fsize_15" style="text-align: center;font-weight: bold;padding-top: 30px;padding-bottom: 30px; font-size: 20px;">APPLICATION FORM</p>
            <div class="row">
                <div class="col-md-1">
                    <p class="cambria">Name: </p>
                </div>
                <div class="col-md-5">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{$student->lastname}}, {{$student->firstname}} {{substr($student->middlename, 0, 1)}}.</p>
                    <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: -17px;">
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: right;">Nickname: </p>
                </div>
                <div class="col-md-4">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{$prop->nickname}}</p>
                    <hr style="margin-left: -20px;border-bottom: 1px solid;@isset($prop->nickname)margin-top: -17px;@endisset">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <p class="cambria">Gender: </p>
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{$student->sex}}</p>
                    <hr style="margin-left: -25px;border-bottom: 1px solid;margin-top: -20px;">
                </div>
                <div class="col-md-1">
                    <p class="cambria">Age: </p>
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{Carbon\Carbon::parse($student->dateofbirth)->age}}</p>
                    <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: -20px;">
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: right;">Course & Year: </p>
                </div>
                <div class="col-md-4">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{$student->course->course}}/{{$student->yearlevel}}</p>
                    <hr style="margin-left: -20px;border-bottom: 1px solid;margin-top: -20px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Email Address: : </p>
                </div>
                <div class="col-md-4">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{$prop->email}}</p>
                    <hr style="margin-left: -50px;border-bottom: 1px solid;@isset($prop->email)margin-top: -20px;@endisset">
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="text-align: right;">Contact Number: </p>
                </div>
                <div class="col-md-4">
                    <p class="cambria" style="text-align: left;font-weight: bold;">{{$prop->contactno}}</p>
                    <hr style="margin-left: -15px;border-bottom: 1px solid;@isset($prop->contactno)margin-top: -20px;@endisset">
                </div>
                
            </div>
            <br>
        <p class="cambria" style="text-align: left;">1. How did you hear about this program? Why did you decide to join?</p>
        <p class="cambria" style="text-align: left;"><ul><li>{{$prop->a1}}</li></ul></p>
        <p class="cambria" style="text-align: left;">2. What’s your experience working with the youth?</p>
        <p class="cambria" style="text-align: left;"><ul><li>{{$prop->a2}}</li></ul></p>
        <p class="cambria" style="text-align: left;">3. What do you hope to gain from this experience? Are there any specific areas you feel you need additional support or training?</p>
        <p class="cambria" style="text-align: left;"><ul><li>{{$prop->a3}}</li></ul></p>
        <p class="cambria" style="text-align: left;">4.  What could you bring to the team? (This can include skills, abilities, lived experiences, etc.)</p>
        <p class="cambria" style="text-align: left;"><ul><li>{{$prop->a4}}</li></ul></p>
    </div>
    </div>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 23</p>
     
    
        
        <p class="cambria" style="text-align: left;">5. Please tell us about a social issue that you feel passionately about. Why is it important?</p>
        <p class="cambria" style="text-align: left;"><ul><li>{{$prop->a5}}</li></ul></p>

        <br><br>
        <p class="cambria" style="text-align: left;">Please provide your availability.</p>

        <table class="table table-bordered">
            <thead>
              <tr>
                  <th style="text-align: center; font-weight: bold;" class="cambria">Example</th>
                  <th style="text-align: center; font-weight: bold;" class="cambria">Monday</th>
                  <th style="text-align: center; font-weight: bold;" class="cambria">Tuesday</th>
                  <th style="text-align: center; font-weight: bold;" class="cambria">Wednesday</th>
                  <th style="text-align: center; font-weight: bold;" class="cambria">Thursday</th>
                  <th style="text-align: center; font-weight: bold;" class="cambria">Friday</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="cambria" style="text-align: center;">9:30 AM – 11:00 AM</td>
                    <td class="cambria" style="text-align: center;font-weight: bold;">{{$prop->b1}}</td>
                    <td class="cambria" style="text-align: center;font-weight: bold;">{{$prop->b2}}</td>
                    <td class="cambria" style="text-align: center;font-weight: bold;">{{$prop->b3}}</td>
                    <td class="cambria" style="text-align: center;font-weight: bold;">{{$prop->b4}}</td>
                    <td class="cambria" style="text-align: center;font-weight: bold;">{{$prop->b5}}</td>
                </tr>
            </tbody>
        </table>
            <br><br>
          <p class="cambria" style="text-align: center;font-style: italic;">Thank you for your interest in applying as a Peer Facilitator this year!</p>
          <p class="cambria" style="text-align: center;font-style: italic;">You will be contacted shortly.</p>
          <p class="cambria" style="text-align: center;font-style: italic;">For more information, please contact Ms. Travero at (email account) or (phone number).</p>
        
    </div>
    @endforeach
    
</body>
  <!-- Jquery JS-->
    <script src="{{URL::to('admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
         window.print();
    </script>
</html>