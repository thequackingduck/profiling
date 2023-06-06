<!DOCTYPE html>
<html>
<head>
  <title>Students' Profile</title>
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
    <?php 

    

        $a1a = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1a', 1)->get();
        $a1b = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1b', 1)->get();
        $a1c = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1c', 1)->get();
        $a1d = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1d', 1)->get();
        $a1e = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1e', 1)->get();
        $a1f = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1f', 1)->get();
        $a1g = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1g', 1)->get();
        $a1h = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1h', 1)->get();
        $a1i = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1i', 1)->get();
        $a1j = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1j', 1)->get();
        $a1k = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1k', 1)->get();
        $a1l = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1l', 1)->get();
        $a1m = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a1m', 1)->get();


        $a2a = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a2a', 1)->get();
        $a2b = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a2b', 1)->get();
        $a2c = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a2c', 1)->get();
        $a2d = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a2d', 1)->get();
        $a2e = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a2e', 1)->get();
        $a2f = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a2f', 1)->get();
        $a2g = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a2g', 1)->get();
        
        $a3a = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a3a', 1)->get();
        $a3b = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a3b', 1)->get();
        $a3c = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a3c', 1)->get();
        $a3d = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a3d', 1)->get();
        $a3e = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a3e', 1)->get();
        $a3f = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a3f', 1)->get();
        $a3g = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a3g', 1)->get();

        $a4a = App\StudentProfileInput::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->where('a4a','<>',null)->get();
    ?>
    
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 3</p>
        <div class="container-fluid row pull-center" style="text-align: right;padding-bottom: 10px;">
            <div class="col-md-3" style="text-align: right; position: relative; left: 60px; bottom: 10px;">
                <img src="{{URL::to('logo.png')}}" style="width: 80px;height:80px;" alt="">
            </div>
            <div class="col-md-6" style="text-align: center; ">
                <p class="cambria margin-0rem fsize_16">Republic of the Philippines</p>
                <p class="cambria margin-0rem fsize_16" style="font-weight: bold;">BOHOL ISLAND STATE UNIVERSITY-BALILIHAN CAMPUS</p>
                <p class="cambria margin-0rem fsize_16">Magsija, Balilihan, Bohol</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="container-fluid" style="text-align: center;">
            <p class="century_gothic" style="font-style: italic;margin-bottom: 0em; "><b>Vision:</b> A premier S & T university for the formation of world class and virtuous human resource for the sustainable development in Bohol and the country.</p>
            <p class="century_gothic" style="border-bottom: solid 1px;font-style: italic; "><b>Mission:</b> Committed to provide quality and innovative education in strategic sectors for the development of Bohol and the country.</p>
            
            <p class="cambria" style="text-align: center;font-weight: bold; font-size: 20px;">PROFILE OF STUDENTS</p>
        </div>

        <div class="container-fluid">
            <p class="cambria margin-0rem" style="text-align: left;">This questionnaire requests lists of students who belong to several categories. This is done to help the Guidance Center create programs responsive to the needs of the students. Please take this seriously. Please also use caution when filling this out. Please make sure that the list you will submit is accurate. Rest assured that confidentiality shall be upheld. </p>
            <p class="cambria" style="text-align: left;">Thank you!</p>
            <p class="cambria margin-0rem" style="text-align: left;">Course/Year/Section: <b style="border-bottom: 1px solid;">{{$course->course}} - {{$yearlevel}} - {{$section}}</b></p><br>
            <p class="cambria margin-0rem" style="text-align: left;">I. STUDENTS WHO ARE DIFFERENTLY-ABLED</p>
            <div class="container">
                <p class="cambria margin-0rem" style="text-align: left;">A. Students who are Nearsighted (Unable to see things clearly unless they are relatively close to the eyes.)</p>
                <div class="row">
                    @isset($a1a)
                        @foreach($a1a as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">B. Students who are Farsighted (Unable to see things clearly, especially if they are relatively close to the eyes.)</p>
                <div class="row">
                    @isset($a1b)
                        @foreach($a1b as $aa1a)
                            
                            <div class="col-md-6">
                            <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">C. Students with Crossed Eyes (Having one or both eyes turned inward toward the nose.)</p>
                <div class="row">
                    @isset($a1c)
                        @foreach($a1c as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">D. Students with Color Blindness (Difficulty distinguishing certain colors, such as blue and yellow or red and green.)</p>
                <div class="row">
                    @isset($a1d)
                        @foreach($a1d as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">E. Students with Blindness (Unable to see because of injury, disease, or a congenital condition.)</p>
                <div class="row">
                    @isset($a1e)
                        @foreach($a1e as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">F. Students who are Deaf (Lacking the power of hearing or having impaired hearing.)</p>
                <div class="row">
                    @isset($a1f)
                        @foreach($a1f as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">G. Students with Cleft/Lip Palate (Separation that occurs in the lip or the palate (roof of the mouth), or both.)</p>
                <div class="row">
                    @isset($a1g)
                        @foreach($a1g as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">H. Students with Stuttering or Stammering Condition (Flow of speech is disrupted by involuntary repetitions and prolongations of sounds, syllables, words or phrases as well as involuntary silent pauses or blocks.)</p>
                <div class="row">
                    @isset($a1h)
                        @foreach($a1h as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">I. Students with Dyslexia (Difficulty in learning to read or interpret words, letters, and other symbols.)</p>
                <div class="row">
                    @isset($a1i)
                        @foreach($a1i as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">J. Students with Dyscalculia (May have poor comprehension of math symbols, may struggle with memorizing and organizing numbers, have difficulty telling time or have trouble with counting.)</p>
                <div class="row">
                    @isset($a1j)
                        @foreach($a1j as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">K. Students with Dysgraphia (May have illegible handwriting, inconsistent spacing, poor spatial planning on paper, poor spelling and difficulty composing writing as well as thinking and writing at the same time.)</p>
                <div class="row">
                    @isset($a1k)
                        @foreach($a1k as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">L. Students with Muteness (Lacking the ability to speak.)</p>
                <div class="row">
                    @isset($a1l)
                        @foreach($a1l as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">M. Students with Paraplegia (Impairment in motor or sensory function of the lower extremities.)</p>
                <div class="row">
                    @isset($a1m)
                        @foreach($a1m as $aa1a)
                            
                            <div class="col-md-6">
                            <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
            </div>
            <br>
            <p class="cambria margin-0rem" style="text-align: left;">II. STUDENTS WHO ARE AT RISK</p>
            <div class="container">
                <p class="cambria margin-0rem" style="text-align: left;">A. Students who are/were Pregnant</p>
                <div class="row">
                    @isset($a2a)
                        @foreach($a2a as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">B. Students who are Married </p>
                <div class="row">
                    @isset($a2b)
                        @foreach($a2b as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">C. Students who are Married with kids 5 years and below</p>
                <div class="row">
                    @isset($a2c)
                        @foreach($a2c as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">D. Students who have Behavioral and Emotional Difficulties (Having suicidal tendencies and nervous breakdown; having a difficulty relating with others.)</p>
                <div class="row">
                    @isset($a2d)
                        @foreach($a2d as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">E. Students who Abuse Substances (e.g. alcohol, tobacco/cigarette, drugs)</p>
                <div class="row">
                    @isset($a2e)
                        @foreach($a2e as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">F. Students who are Frequently Late and/or Absent</p>
                <div class="row">
                    @isset($a2f)
                        @foreach($a2f as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">G. Students with Academic Deficiencies (Consistently having low grades.)</p>
                <div class="row">
                    @isset($a2g)
                        @foreach($a2g as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
            </div>
            <br>
            <p class="cambria margin-0rem" style="text-align: left;">III. STUDENTS WITH SPECIAL NEEDS</p>
            <div class="container">
                <p class="cambria margin-0rem" style="text-align: left;">A. Students who are Left-Handed</p>
                <div class="row">
                    @isset($a3a)
                        @foreach($a3a as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">B. Students whose Parent/s is/are Overseas Filipino Workers</p>
                <div class="row">
                    @isset($a3b)
                        @foreach($a3b as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">C. Students whose Parent/s is/are No Longer Alive</p>
                <div class="row">
                    @isset($a3c)
                        @foreach($a3c as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">D. Students whose Parents are Separated</p>
                <div class="row">
                    @isset($a3d)
                        @foreach($a3d as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">E. Students who are Raised by a Single Parent</p>
                <div class="row">
                    @isset($a3e)
                        @foreach($a3e as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">F. Students who Belong to the LGBT Community</p>
                <div class="row">
                    @isset($a3f)
                        @foreach($a3f as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">G. Students who are Overachievers (Performing better or achieving more success than expected.)</p>
                <div class="row">
                    @isset($a3g)
                        @foreach($a3g as $aa1a)
                            
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
            </div>
            <br>
            <p class="cambria margin-0rem" style="text-align: left;">IV. OTHERS</p>
            <div class="container">
                <p class="cambria margin-0rem" style="text-align: left;">Please specify needs: </p>
                <div class="row">
                    @isset($a4a)
                        @foreach($a4a as $aa1a)
                        
                            <div class="col-md-6">
                            <p class="cambria margin-0rem" style="text-align: left;border-bottom: 1px solid;">{{$aa1a->student->lastname}}, {{$aa1a->student->firstname}} {{$aa1a->student->middlename}} : ({{$aa1a->a4a}})</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
            </div>
            <br><br>
            <p class="cambria margin-0rem" style="text-align: left;">Prepared by: ___________________________________________________________________ (Name and Signature of Class Mayor)</p>
            <p class="cambria margin-0rem" style="text-align: left;padding-left: 91px;">___________________________________________________________________ (Date)</p>
        </div>
    
        
    </div>

    
    
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