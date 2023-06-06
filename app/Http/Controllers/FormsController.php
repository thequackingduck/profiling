<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Leaversetting;
use App\Leaver;
use App\Schoolyear;
use App\Student;
use App\InventoryFeedback;
use App\Precounseling;
use App\PeerFacilitatorCircle;
use App\EvaluationForm;
use App\EvaluationActivity;
use App\ClientCounselorFeedback;
use App\Membership;
use App\MembershipSchedule;
use App\NeedsAssessmentInventory;
use App\Needassessmenttabletwo;
use App\Needassessmenttablethree;
use App\Needassessmenttablefour;
use App\Course;
use App\IndividualInventory;
use App\IndividualInventorytwo;
use App\IndividualInventoryThree;
use App\IndividualInventoryFour;
use App\Profile;
use App\FormSetting;
use App\StudentProfileInput;
use Auth;
class FormsController extends Controller
{
    public function leavers(){
         $sy   = Schoolyear::where('status', 1)->first();

        if(!$sy){
            $form = [];
            $notsubmitted = [];
            $courses = [];
            $sections = [];
        }else{
            $form = Leaver::where('schoolyear_id', $sy->id)->get();
            $notsubmitted = DB::table('students as p')
            ->whereRaw("id not in (SELECT student_id FROM leavers)")
            ->where('schoolyear_id', $sy->id)
            ->get();
            $courses = Course::all();
            $sections = DB::table('students')->distinct('section')->get('section');
        }

        return view('admin.forms.leavers', compact('notsubmitted', 'form', 'courses', 'sections', 'sy'));
    }

    public function leavers_settings(Request $request){
        $setting = Leaversetting::count();
        if($request->details == 'on'){
            $details = 1;
        }else{
            $details = 0;
        }

        if($request->enabled == 'on'){
            $enabled = 1;
        }else{
            $enabled = 0;
        }
        
        if($setting == 0){
            $setting = new Leaversetting;
            $setting->enabled = $enabled;
            $setting->req_fields = $request->req_fields;
            $setting->details = $details;
            $setting->save();
        }else{
            $setting = Leaversetting::first();
            $setting->enabled = $enabled;
            $setting->req_fields = $request->req_fields;
            $setting->details = $details;
            $setting->save();
        }
        Session::flash('SettingSaved');
        return redirect('leavers');
    }

    public function leavers_form(){
        $sy   = Schoolyear::where('status', 1)->first();


        $student = Student::where('id_no', Auth::user()->email)->first();
        $submitted = Leaver::where('schoolyear_id', $sy->id)->where('student_id', $student->id)->count();
            if($submitted > 0){
                Session::flash('DuplicateForm');
            }else{
                return view('admin.forms.leaversform');
            }
        return redirect('home');
    }

    public function submit_form(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $student = Student::where('id_no', Auth::user()->email)->first();

        $c1 = 0;
        $c2 = 0;
        $c3 = 0;
        $c4 = 0;
        $c5 = 0;
        $c6 = 0;
        $c7 = 0;
        $c8 = 0;
        $c9 = 0;
        $c10 = 0;
        $c11 = 0;
        $c12 = 0;
        $c13 = 0;
        $c14 = 0;
        $c15 = 0;
        $c16 = 0;
        $c17 = 0;
        $c18 = 0;
        $c19 = 0;
        $c20 = 0;
        $c21 = 0;
        if($request->c1 == 'on'){$c1 = 1;}
        if($request->c2 == 'on'){$c2 = 1;}
        if($request->c3 == 'on'){$c3 = 1;}
        if($request->c4 == 'on'){$c4 = 1;}
        if($request->c5 == 'on'){$c5 = 1;}
        if($request->c6 == 'on'){$c6 = 1;}
        if($request->c7 == 'on'){$c7 = 1;}
        if($request->c8 == 'on'){$c8 = 1;}
        if($request->c9 == 'on'){$c9 = 1;}
        if($request->c10 == 'on'){$c10 = 1;}
        if($request->c11 == 'on'){$c11 = 1;}
        if($request->c12 == 'on'){$c12 = 1;}
        if($request->c13 == 'on'){$c13 = 1;}
        if($request->c14 == 'on'){$c14 = 1;}
        if($request->c15 == 'on'){$c15 = 1;}
        if($request->c16 == 'on'){$c16 = 1;}
        if($request->c17 == 'on'){$c17 = 1;}
        if($request->c18 == 'on'){$c18= 1;}
        if($request->c19 == 'on'){$c19 = 1;}
        if($request->c20 == 'on'){$cp20 = 1;}
        if($request->c21 == 'on'){$c21 = 1;}

        $form = new Leaver;
        $form->schoolyear_id = $sy->id;
        $form->student_id = $student->id;
        $form->c1 = $c1;
        $form->c2 = $c2;
        $form->c3 = $c3;
        $form->c4 = $c4;
        $form->c5 = $c5;
        $form->c6 = $c6;
        $form->c7 = $c7;
        $form->c8 = $c8;
        $form->c9 = $c9;
        $form->c10 = $c10;
        $form->c11 = $c11;
        $form->c12 = $c12;
        $form->c13 = $c13;
        $form->c14 = $c14;
        $form->c15 = $c15;
        $form->c16 = $c16;
        $form->c17 = $c17;
        $form->c18 = $c18;
        $form->c19 = $c19;
        $form->c20 = $c20;
        $form->c21 = $c21;
        $form->others = $request->others;
        $form->details = $request->details;
        $form->save();

        Session::flash('SubmittedForm');
        return redirect('home');
    }


    public function profile(){
        $sy   = Schoolyear::where('status', 1)->first();

        $form = Leaver::where('schoolyear_id', $sy->id)->get();
        $notsubmitted = DB::table('students as p')
        ->whereRaw("id not in (SELECT student_id FROM leavers)")
        ->get();

        return view('admin.forms.leavers', compact('notsubmitted', 'form'));
    }

    public function leavers_print(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $leavers = [];
        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $leavers = DB::table('leavers')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->get();
        }

        
        return view('forms.leavers', compact('leavers'));
    }

    public function interviewfeedback_print(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $model = [];

        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $model = DB::table('inventory_feedback')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->get();
        }

        
        return view('forms.interviewfeedback', compact('model'));
    }

    public function precounseling_print(Request $request){

        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $model = [];

        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $model = DB::table('precounselings')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->get();
        }
        
        return view('forms.precounseling', compact('model'));
    }

    public function interviewfeedback(){
        $sy   = Schoolyear::where('status', 1)->first();

        if(!$sy){
            $form = [];
            $notsubmitted = [];
            $courses = [];
            $sections = [];
        }else{
            $form = InventoryFeedback::where('schoolyear_id', $sy->id)->get();
            $notsubmitted = DB::table('students as p')
            ->whereRaw("id not in (SELECT student_id FROM inventory_feedback)")
            ->get();
            $courses = Course::all();
            $sections = DB::table('students')->distinct('section')->get('section');
        }

        return view('admin.forms.interviewfeedback', compact('notsubmitted', 'form', 'sy', 'courses', 'sections'));
    }

    public function precounseling(){
        $sy   = Schoolyear::where('status', 1)->first();


        if(!$sy){
            $form = [];
            $notsubmitted = [];
            $courses = [];
            $sections = [];
        }else{
            $form = Precounseling::where('schoolyear_id', $sy->id)->get();
            $notsubmitted = DB::table('students as p')
            ->whereRaw("id not in (SELECT student_id FROM precounselings)")
            ->get();
            $courses = Course::all();
            $sections = DB::table('students')->distinct('section')->get('section');
        }

        return view('admin.forms.precounseling', compact('notsubmitted', 'form', 'sy', 'courses', 'sections'));
    }

    public function interviewfeedback_form(){
        $sy   = Schoolyear::where('status', 1)->first();

        $student = Student::where('id_no', Auth::user()->email)->first();
        $submitted = InventoryFeedback::where('schoolyear_id', $sy->id)->where('student_id', $student->id)->count();
            if($submitted > 0){
                Session::flash('DuplicateForm');
            }else{
                return view('admin.forms.interviewfeedbackform');
            }
        return redirect('home');
    }

    public function interviewfeedback_formsubmit(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $student = Student::where('id_no', Auth::user()->email)->first();

        $form = new InventoryFeedback;
        $form->schoolyear_id = $sy->id;
        $form->student_id = $student->id;
        $form->a1 = $request->a1;
        $form->a2 = $request->a2;
        $form->a3 = $request->a3;
        $form->a4 = $request->a4;
        $form->a5 = $request->a5;
        $form->a6 = $request->a6;
        $form->save();

        Session::flash('SubmittedForm');
        return redirect('home');
    }

    public function precounseling_form(){
        $sy   = Schoolyear::where('status', 1)->first();


        $student = Student::where('id_no', Auth::user()->email)->first();
        $submitted = Precounseling::where('schoolyear_id', $sy->id)->where('student_id', $student->id)->count();

        if($submitted > 0){
            Session::flash('DuplicateForm');
        }else{
            return view('admin.forms.precounselingform');
        }
        return redirect('home');
    }

    public function precounseling_formsubmit(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $student = Student::where('id_no', Auth::user()->email)->first();

        $form = new Precounseling;
        $form->schoolyear_id = $sy->id;
        $form->student_id = $student->id;
        $form->a1 = $request->a1;
        $form->a2 = $request->a2;
        $form->a3 = $request->a3;
        $form->b1 = $request->b1;
        $form->b2 = $request->b2;
        $form->b3 = $request->b3;
        $form->b4 = $request->b4;
        $form->b5 = $request->b5;
        $form->b6 = $request->b6;
        $form->b7 = $request->b7;
        $form->b8 = $request->b8;
        $form->c1 = $request->c1;
        $form->c2 = $request->c2;
        $form->c3 = $request->c3;
        $form->c4 = $request->c4;
        $form->d1 = $request->d1;
        $form->d2 = $request->d2;
        $form->d3 = $request->d3;
        $form->d4 = $request->d4;
        $form->d5 = $request->d5;
        $form->e1 = $request->e1;
        $form->e2 = $request->e2;
        $form->f1 = $request->f1;
        $form->save();

        Session::flash('SubmittedForm');
        return redirect('home');
    }

    public function pfapplication_print(Request $request){


        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $model = [];

        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $model = DB::table('peer_facilitator_circles')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->get();
        }
        
        return view('forms.pfapplication', compact('model'));
    }

    public function pfapplication(){
        $sy   = Schoolyear::where('status', 1)->first();

        if(!$sy){
            $form = [];
            $notsubmitted = [];
            $courses = [];
            $sections = [];
        }else{
            $form = PeerFacilitatorCircle::where('schoolyear_id', $sy->id)->get();
            $notsubmitted = DB::table('students as p')
            ->whereRaw("id not in (SELECT student_id FROM peer_facilitator_circles)")
            ->get();
            $courses = Course::all();
            $sections = DB::table('students')->distinct('section')->get('section');
        }

        return view('admin.forms.pfapplication', compact('notsubmitted', 'form', 'sy', 'courses', 'sections'));
    }

    public function pfapplication_form(){
        $sy   = Schoolyear::where('status', 1)->first();

        
        $student = Student::where('id_no', Auth::user()->email)->first();
        $submitted = PeerFacilitatorCircle::where('schoolyear_id', $sy->id)->where('student_id', $student->id)->count();

        if($submitted > 0){
            Session::flash('DuplicateForm');
        }else{
            return view('admin.forms.pfapplicationform', compact('student'));
        }
        return redirect('home');
    }

    public function pfapplication_formsubmit(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $student = Student::where('id_no', Auth::user()->email)->first();

        $form = new PeerFacilitatorCircle;
        $form->schoolyear_id = $sy->id;
        $form->student_id = $student->id;
        $form->nickname = $request->nickname;
        $form->contactno = $request->contactno;
        $form->email = $request->email;
        $form->a1 = $request->a1;
        $form->a2 = $request->a2;
        $form->a3 = $request->a3;
        $form->a4 = $request->a4;
        $form->a5 = $request->a5;
        $form->b1 = $request->b1;
        $form->b2 = $request->b2;
        $form->b3 = $request->b3;
        $form->b4 = $request->b4;
        $form->b5 = $request->b5;
        $form->save();

        Session::flash('SubmittedForm');
        return redirect('home');
    }

    public function evaluation_print(Request $request){
       
        $activity = EvaluationActivity::findOrFail($request->id);

        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $model = [];


        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $model = DB::table('evaluation_forms')
            ->where('evaluation_activity_id', $request->id)
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->get();
        }
        
        return view('forms.evaluation', compact('model', 'activity'));
    }

    public function evaluation($id){
        $sy   = Schoolyear::where('status', 1)->first();

        if(!$sy){
            $form = [];
            $notsubmitted = [];
            $courses = [];
            $sections = [];
            $activity = [];
        }else{
            $activity = EvaluationActivity::findOrFail($id);

            $form = EvaluationForm::where('schoolyear_id', $sy->id)->where('evaluation_activity_id', $activity->id)->get();
            $notsubmitted = DB::table('students as p')
            ->whereRaw("id not in (SELECT student_id FROM evaluation_forms WHERE evaluation_activity_id = $activity->id)")
            ->get();
            $courses = Course::all();
            $sections = DB::table('students')->distinct('section')->get('section');
        }

        return view('admin.forms.evaluation', compact('notsubmitted', 'form', 'activity',  'sy', 'courses', 'sections'));
    }

    public function evaluation_form($id){
        $sy   = Schoolyear::where('status', 1)->first();


        $student = Student::where('id_no', Auth::user()->email)->first();
        $activity = EvaluationActivity::findOrFail($id);
        $submitted = EvaluationForm::where('schoolyear_id', $sy->id)->where('evaluation_activity_id', $activity->id)->where('student_id', $student->id)->count();

            if($submitted > 0){
                Session::flash('DuplicateForm');
            }else{
                return view('admin.forms.evaluationform', compact('student', 'activity'));
            }
        return redirect('home');
    }

    public function evaluation_activities(){
        $sy   = Schoolyear::where('status', 1)->first();

        if(!$sy){
            $model = [];
        }else{
            $model = EvaluationActivity::where('schoolyear_id', $sy->id)->get();
        }

        return view('admin.forms.evaluationactivities', compact('model', 'sy'));
    }

    public function evaluationactivitystore(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required', 'max:255',
            'facilitators' => 'required', 'max:255',
            'date' => 'required', 'max:255'
        ]);

        $sy    = Schoolyear::where('status', 1)->first();
        $exist = EvaluationActivity::where('schoolyear_id', $sy->id)->where('title', $request->title)->first();

        if ($exist == null) {

            $model = new EvaluationActivity;
            $model->schoolyear_id = $sy->id;
            $model->title = $request->title;
            $model->facilitators = $request->facilitators;
            $model->date = $request->date;
            $model->save();

            Session::flash('Inserted');
        }else{
            Session::flash('Duplicate');
        }
        
        return redirect('evaluation_activities');
    }
    
    public function evaluation_formsubmit(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $student = Student::where('id_no', Auth::user()->email)->first();

        $form = new EvaluationForm;
        $form->schoolyear_id = $sy->id;
        $form->student_id = $student->id;
        $form->evaluation_activity_id = $request->evaluation_activity_id;
        $form->a1 = $request->a1;
        $form->a2 = $request->a2;
        $form->a3 = $request->a3;
        $form->a4 = $request->a4;
        $form->a5 = $request->a5;
        $form->a6 = $request->a6;
        $form->a7 = $request->a7;
        $form->b1 = $request->b1;
        $form->b2 = $request->b2;
        $form->b3 = $request->b3;
        $form->c1 = $request->c1;
        $form->c2 = $request->c2;
        $form->c3 = $request->c3;
        $form->c4 = $request->c4;
        $form->f1 = $request->f1;
        $form->f2 = $request->f2;
        $form->g1 = $request->g1;
        $form->g2 = $request->g2;
        $form->g3 = $request->g3;
        $form->h1 = $request->h1;
        $form->save();

        Session::flash('SubmittedForm');
        return redirect('home');
    }

    public function clientcounselorfeedback_print(Request $request){

        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $model = [];

        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $model = DB::table('client_counselor_feedback')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->get();
        }
        
        return view('forms.clientcounselorfeedback', compact('model'));
    }

    public function clientcounselorfeedback(){
        $sy   = Schoolyear::where('status', 1)->first();

        if(!$sy){
            $form = [];
            $notsubmitted = [];
            $courses = [];
            $sections = [];
        }else{
            $form = ClientCounselorFeedback::where('schoolyear_id', $sy->id)->get();
            $notsubmitted = DB::table('students as p')
            ->whereRaw("id not in (SELECT student_id FROM client_counselor_feedback)")
            ->get();
            $courses = Course::all();
            $sections = DB::table('students')->distinct('section')->get('section');
        }
        return view('admin.forms.clientcounselorfeedback', compact('notsubmitted', 'form', 'sy', 'courses', 'sections'));
    }

    public function clientcounselorfeedback_form(){
        $sy   = Schoolyear::where('status', 1)->first();


        $student = Student::where('id_no', Auth::user()->email)->first();
        $submitted = ClientCounselorFeedback::where('schoolyear_id', $sy->id)->where('student_id', $student->id)->count();

            if($submitted > 0){
                Session::flash('DuplicateForm');
            }else{
                return view('admin.forms.clientcounselorfeedback_form', compact('student'));
            }
        return redirect('home');
    }

    public function clientcounselorfeedback_formsubmit(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $student = Student::where('id_no', Auth::user()->email)->first();

        $form = new ClientCounselorFeedback;
        $form->schoolyear_id = $sy->id;
        $form->student_id = $student->id;
        $form->a1 = $request->a1;
        $form->a2 = $request->a2;
        $form->a3 = $request->a3;
        $form->a4 = $request->a4;
        $form->a5 = $request->a5;
        $form->a6 = $request->a6;
        $form->a7 = $request->a7;
        $form->a8 = $request->a8;
        $form->a9 = $request->a9;
        $form->a10 = $request->a10;
        $form->a11 = $request->a11;
        $form->a12 = $request->a12;
        $form->a13 = $request->a13;
        $form->a14 = $request->a14;
        $form->save();

        Session::flash('SubmittedForm');
        return redirect('home');
    }

    public function pfmembership_print(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $model = [];

        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $model = DB::table('memberships')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->get();
        }
        
        return view('forms.pfmembership', compact('model'));
    }

    public function pfmembership(){
        $sy   = Schoolyear::where('status', 1)->first();

        if(!$sy){
            $form = [];
            $notsubmitted = [];
            $courses = [];
            $sections = [];
        }else{
            $form = Membership::where('schoolyear_id', $sy->id)->get();
            $notsubmitted = DB::table('students as p')
            ->whereRaw("id not in (SELECT student_id FROM memberships)")
            ->get();
            $courses = Course::all();
            $sections = DB::table('students')->distinct('section')->get('section');
        }

        return view('admin.forms.pfmembership', compact('notsubmitted', 'form', 'sy', 'courses', 'sections'));
    }

    public function pfmembership_form(){
        $sy   = Schoolyear::where('status', 1)->first();

        
        $student = Student::where('id_no', Auth::user()->email)->first();
        $submitted = Membership::where('schoolyear_id', $sy->id)->where('student_id', $student->id)->count();

            if($submitted > 0){
                Session::flash('DuplicateForm');
            }else{
                return view('admin.forms.pfmembership_form', compact('student'));
            }
        return redirect('home');
    }

    public function pfmembership_formsubmit(Request $request){

        $sy   = Schoolyear::where('status', 1)->first();
        $student = Student::where('id_no', Auth::user()->email)->first();

        $form = new Membership;
        $form->schoolyear_id = $sy->id;
        $form->student_id = $student->id;
        $form->a2 = $request->a2;
        $form->a4 = $request->a4;
        $form->a5 = $request->a5;
        $form->a6 = $request->a6;
        $form->a7 = $request->a7;
        $form->a8 = $request->a8;
        $form->a12 = $request->a12;
        $form->a13 = $request->a13;
        $form->a14 = $request->a14;
        $form->b1 = $request->b1;
        $form->b2 = $request->b2;
        $form->b3 = $request->b3;
        $form->b4 = $request->b4;
        $form->b5 = $request->b5;
        $form->b6 = $request->b6;
        $form->b7 = $request->b7;
        $form->b8 = $request->b8;
        $form->b9 = $request->b9;
        $form->b10 = $request->b10;
        $form->b11 = $request->b11;
        $form->c1 = $request->c1;
        $form->c2 = $request->c2;
        $form->c3 = $request->c3;
        $form->c4 = $request->c4;
        $form->c5 = $request->c5;
        $form->c6 = $request->c6;
        $form->c7 = $request->c7;
        $form->c8 = $request->c8;
        $form->c9 = $request->c9;
        $form->c10 = $request->c10;
        $form->c11 = $request->c11;
        $form->c12 = $request->c12;
        $form->c13 = $request->c13;
        $form->c14 = $request->c14;
        $form->c15 = $request->c15;
        $form->c16 = $request->c16;
        $form->d1 = $request->d1;
        $form->d2 = $request->d2;
        $form->d3 = $request->d3;
        $form->save();

        $form1 = new MembershipSchedule;
        $form1->membership_id = $form->id;
        $form1->s1 = $request->s1;
        $form1->s2 = $request->s2;
        $form1->s3 = $request->s3;
        if($request->sa1){$form1->a1 = $request->sa1;}
        if($request->sa2){$form1->a2 = $request->sa2;}
        if($request->sa3){$form1->a3 = $request->sa3;}
        if($request->sa4){$form1->a4 = $request->sa4;}
        if($request->sa5){$form1->a5 = $request->sa5;}
        if($request->sa6){$form1->a6 = $request->sa6;}
        if($request->sa7){$form1->a7 = $request->sa7;}
        if($request->sa8){$form1->a8 = $request->sa8;}
        if($request->sa9){$form1->a9 = $request->sa9;}
        if($request->sa10){$form1->a10 = $request->sa10;}
        if($request->sa11){$form1->a11 = $request->sa11;}
        if($request->sb1){$form1->b1 = $request->sb1;}
        if($request->sb2){$form1->b2 = $request->sb2;}
        if($request->sb3){$form1->b3 = $request->sb3;}
        if($request->sb4){$form1->b4 = $request->sb4;}
        if($request->sb5){$form1->b5 = $request->sb5;}
        if($request->sb6){$form1->b6 = $request->sb6;}
        if($request->sb7){$form1->b7 = $request->sb7;}
        if($request->sb8){$form1->b8 = $request->sb8;}
        if($request->sb9){$form1->b9 = $request->sb9;}
        if($request->sb10){$form1->b10 = $request->sb10;}
        if($request->sb11){$form1->b11 = $request->sb11;}
        if($request->sc1){$form1->c1 = $request->sc1;}
        if($request->sc2){$form1->c2 = $request->sc2;}
        if($request->sc3){$form1->c3 = $request->sc3;}
        if($request->sc4){$form1->c4 = $request->sc4;}
        if($request->sc5){$form1->c5 = $request->sc5;}
        if($request->sc6){$form1->c6 = $request->sc6;}
        if($request->sc7){$form1->c7 = $request->sc7;}
        if($request->sc8){$form1->c8 = $request->sc8;}
        if($request->sc9){$form1->c9 = $request->sc9;}
        if($request->sc10){$form1->c10 = $request->sc10;}
        if($request->sc11){$form1->c11 = $request->sc11;}
        if($request->sd1){$form1->d1 = $request->sd1;}
        if($request->sd2){$form1->d2 = $request->sd2;}
        if($request->sd3){$form1->d3 = $request->sd3;}
        if($request->sd4){$form1->d4 = $request->sd4;}
        if($request->sd5){$form1->d5 = $request->sd5;}
        if($request->sd6){$form1->d6 = $request->sd6;}
        if($request->sd7){$form1->d7 = $request->sd7;}
        if($request->sd8){$form1->d8 = $request->sd8;}
        if($request->sd9){$form1->d9 = $request->sd9;}
        if($request->sd10){$form1->d10 = $request->sd10;}
        if($request->sd11){$form1->d11 = $request->sd11;}
        if($request->se1){$form1->e1 = $request->se1;}
        if($request->se2){$form1->e2 = $request->se2;}
        if($request->se3){$form1->e3 = $request->se3;}
        if($request->se4){$form1->e4 = $request->se4;}
        if($request->se5){$form1->e5 = $request->se5;}
        if($request->se6){$form1->e6 = $request->se6;}
        if($request->se7){$form1->e7 = $request->se7;}
        if($request->se8){$form1->e8 = $request->se8;}
        if($request->se9){$form1->e9 = $request->se9;}
        if($request->se10){$form1->e10 = $request->se10;}
        if($request->se11){$form1->e11 = $request->se11;}
        $form1->save();

        
        Session::flash('SubmittedForm');
        return redirect('home');
    }

    public function needsassessment_print(Request $request){

        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $model = [];

        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $model = DB::table('needs_assessment_inventories')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->get();
        }

        
        return view('forms.needsassessment', compact('model'));
    }

    public function needsassessment(){
        $sy   = Schoolyear::where('status', 1)->first();

        if(!$sy){
            $form = [];
            $notsubmitted = [];
            $courses = [];
            $sections = [];
        }else{
            $form = NeedsAssessmentInventory::where('schoolyear_id', $sy->id)->get();
            $notsubmitted = DB::table('students as p')
            ->whereRaw("id not in (SELECT student_id FROM needs_assessment_inventories)")
            ->get();
            $courses = Course::all();
            $sections = DB::table('students')->distinct('section')->get('section');
        }

        return view('admin.forms.needsassessment', compact('notsubmitted', 'form', 'sy', 'courses', 'sections'));
    }

    public function needsassessment_form(){
        $sy   = Schoolyear::where('status', 1)->first();


        $student = Student::where('id_no', Auth::user()->email)->first();
        $submitted = NeedsAssessmentInventory::where('schoolyear_id', $sy->id)->where('student_id', $student->id)->count();

            if($submitted > 0){
                Session::flash('DuplicateForm');
            }else{
                return view('admin.forms.needsassessment_form', compact('student'));
            }
        return redirect('home');
    }

    public function leaversgetfiltered(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $submitted = 0;
        $notsubmitted = 0;
        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $submitted = DB::table('leavers')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->count();
            $notsubmitted = $students->count() - $submitted;
        }else{
            $notsubmitted = $students->count();
        }
        return response()->json(['Success'=>true,'submitted'=>$submitted, 'notsubmitted'=> $notsubmitted]);
    }

    public function leaversprintindividual($id){
        $leavers = Leaver::where('id', $id)->get();
        
        return view('forms.leavers', compact('leavers'));
    }


    public function individualinventory_print(Request $request){

        
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $model = [];

        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $model = DB::table('individual_inventories')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->get();
        }
        
        return view('forms.individualinventory', compact('model'));
    }
    
    public function individualinventory(){
        $sy   = Schoolyear::where('status', 1)->first();

        if(!$sy){
            $form = [];
            $notsubmitted = [];
            $courses = [];
            $sections = [];
        }else{
            $form = IndividualInventory::where('schoolyear_id', $sy->id)->get();
            $notsubmitted = DB::table('students as p')
            ->whereRaw("id not in (SELECT student_id FROM individual_inventories)")
            ->where('schoolyear_id', $sy->id)
            ->get();
            $courses = Course::all();
            $sections = DB::table('students')->distinct('section')->get('section');
        }

        return view('admin.forms.individualinventory', compact('notsubmitted', 'form', 'courses', 'sections', 'sy'));
    }


    public function individualinventorygetfiltered(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $submitted = 0;
        $notsubmitted = 0;
        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $submitted = DB::table('individual_inventories')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->count();
            $notsubmitted = $students->count() - $submitted;
        }else{
            $notsubmitted = $students->count();
        }
        return response()->json(['Success'=>true,'submitted'=>$submitted, 'notsubmitted'=> $notsubmitted]);
    }

    public function individualinventoryindividual($id){
        $model = IndividualInventory::where('id', $id)->get();
        
        return view('forms.individualInventory', compact('model'));
    }

    public function studentprofile(){
        $sy   = Schoolyear::where('status', 1)->first();
        $profile = Profile::all();
        
        if(!$sy){
            $courses = [];
            $sections = [];
        }else{
            $courses = Course::all();
            $sections = DB::table('students')->where('schoolyear_id', $sy->id)->distinct('section')->get('section');
        }

        return view('admin.forms.studentprofile', compact('courses', 'sections', 'sy', 'model'));
    }

    public function studentprofile_form(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $course = Course::findOrFail($request->course);
        $yearlevel = $request->yearlevel;
        $section = $request->section;
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->get();
        
        if($request->action == 1){
            $model = Profile::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->get();
            return view('forms.studentprofile', compact('model'));
        }else{
            $model = Profile::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->first();
            return view('admin.forms.studentprofile_form', compact('course', 'yearlevel', 'section', 'students', 'model'));
        }
        
    }

    public function studentprofile_form_submit(Request $request){
        

        $sy   = Schoolyear::where('status', 1)->first();

        $course = Course::findOrFail($request->course_id);
        $yearlevel = $request->yearlevel;
        $section = $request->section;

        $model = Profile::where('schoolyear_id', $sy->id)->where('course_id', $course->id)->where('yearlevel', $yearlevel)->where('section', $section)->first();

        if(!$model){
            $model = new Profile;
        }

        $model->schoolyear_id = $sy->id;
        $model->course_id = $course->id;
        $model->yearlevel = $yearlevel;
        $model->section = $section;
        $model->a1a = json_encode($request->a1a);
        $model->a1b = json_encode($request->a1b);
        $model->a1c = json_encode($request->a1c);
        $model->a1d = json_encode($request->a1d);
        $model->a1e = json_encode($request->a1e);
        $model->a1f = json_encode($request->a1f);
        $model->a1g = json_encode($request->a1g);
        $model->a1h = json_encode($request->a1h);
        $model->a1i = json_encode($request->a1i);
        $model->a1j = json_encode($request->a1j);
        $model->a1k = json_encode($request->a1k);
        $model->a1l = json_encode($request->a1l);
        $model->a1m = json_encode($request->a1m);
        $model->a2a = json_encode($request->a2a);
        $model->a2b = json_encode($request->a2b);
        $model->a2c = json_encode($request->a2c);
        $model->a2d = json_encode($request->a2d);
        $model->a2e = json_encode($request->a2e);
        $model->a2f = json_encode($request->a2f);
        $model->a2g = json_encode($request->a2g);
        $model->a3a = json_encode($request->a3a);
        $model->a3b = json_encode($request->a3b);
        $model->a3c = json_encode($request->a3c);
        $model->a3d = json_encode($request->a3d);
        $model->a3e = json_encode($request->a3e);
        $model->a3f = json_encode($request->a3f);
        $model->a3g = json_encode($request->a3g);
        $model->a4a = $request->a4a;
        $model->a4b = json_encode($request->a4b);
        $model->save();

        Session::flash('Saved');
        return redirect('studentprofile');
        
    }


    public function needsassessment_formsubmit(Request $request){

        $sy   = Schoolyear::where('status', 1)->first();
        $student = Student::where('id_no', Auth::user()->email)->first();

        $form = new NeedsAssessmentInventory;
        $form->schoolyear_id = $sy->id;
        $form->student_id = $student->id;
        $form->a1a = $request->a1a;
        $form->a1b = $request->a1b;
        $form->a1c = $request->a1c;
        $form->a2a = $request->a2a;
        $form->a2b = $request->a2b;
        $form->a2c = $request->a2c;
        $form->a3a = $request->a3a;
        $form->a3b = $request->a3b;
        $form->a3c = $request->a3c;
        $form->a4a = $request->a4a;
        $form->a4b = $request->a4b;
        $form->a4c = $request->a4c;
        $form->a5a = $request->a5a;
        $form->a5b = $request->a5b;
        $form->a5c = $request->a5c;
        $form->a6a = $request->a6a;
        $form->a6b = $request->a6b;
        $form->a6c = $request->a6c;
        $form->a7a = $request->a7a;
        $form->a7b = $request->a7b;
        $form->a7c = $request->a7c;
        $form->a8a = $request->a8a;
        $form->a8b = $request->a8b;
        $form->a8c = $request->a8c;
        $form->a9a = $request->a9a;
        $form->a9b = $request->a9b;
        $form->a9c = $request->a9c;
        $form->a10a = $request->a10a;
        $form->a10b = $request->a10b;
        $form->a10c = $request->a10c;
        $form->a10d = $request->a10d;
        $form->a11a = $request->a11a;
        $form->a11b = $request->a11b;
        $form->a11c = $request->a11c;
        $form->a12a = $request->a12a;
        $form->a12b = $request->a12b;
        $form->a12c = $request->a12c;
        $form->a13a = $request->a13a;
        $form->a13b = $request->a13b;
        $form->a13c = $request->a13c;
        $form->a14a = $request->a14a;
        $form->a14b = $request->a14b;
        $form->a14c = $request->a14c;
        $form->a15a = $request->a15a;
        $form->a15b = $request->a15b;
        $form->a15c = $request->a15c;
        $form->a16a = $request->a16a;
        $form->a16b = $request->a16b;
        $form->a16c = $request->a16c;
        $form->a17a = $request->a17a;
        $form->a17b = $request->a17b;
        $form->a17c = $request->a17c;
        $form->a18a = $request->a18a;
        $form->a18b = $request->a18b;
        $form->a18c = $request->a18c;
        $form->a19a = $request->a19a;
        $form->a19b = $request->a19b;
        $form->a19c = $request->a19c;
        $form->a20a = $request->a20a;
        $form->a20b = $request->a20b;
        $form->a20c = $request->a20c;
        $form->a20d = $request->a20d;
        $form->save();


        $form2 = new Needassessmenttabletwo;
        $form2->needs_assessment_inventory_id = $form->id;
        $form2->a21a = $request->a21a;
        $form2->a21b = $request->a21b;
        $form2->a21c = $request->a21c;
        $form2->a22a = $request->a22a;
        $form2->a22b = $request->a22b;
        $form2->a22c = $request->a22c;
        $form2->a23a = $request->a23a;
        $form2->a23b = $request->a23b;
        $form2->a23c = $request->a23c;
        $form2->a24a = $request->a24a;
        $form2->a24b = $request->a24b;
        $form2->a24c = $request->a24c;
        $form2->a25a = $request->a25a;
        $form2->a25b = $request->a25b;
        $form2->a25c = $request->a25c;
        $form2->a26a = $request->a26a;
        $form2->a26b = $request->a26b;
        $form2->a26c = $request->a26c;
        $form2->a27a = $request->a27a;
        $form2->a27b = $request->a27b;
        $form2->a27c = $request->a27c;
        $form2->a28a = $request->a28a;
        $form2->a28b = $request->a28b;
        $form2->a28c = $request->a28c;
        $form2->a29a = $request->a29a;
        $form2->a29b = $request->a29b;
        $form2->a29c = $request->a29c;
        $form2->a30a = $request->a30a;
        $form2->a30b = $request->a30b;
        $form2->a30c = $request->a30c;
        $form2->a30d = $request->a30d;
        $form2->a31a = $request->a31a;
        $form2->a31b = $request->a31b;
        $form2->a31c = $request->a31c;
        $form2->a32a = $request->a32a;
        $form2->a32b = $request->a32b;
        $form2->a32c = $request->a32c;
        $form2->a33a = $request->a33a;
        $form2->a33b = $request->a33b;
        $form2->a33c = $request->a33c;
        $form2->a34a = $request->a34a;
        $form2->a34b = $request->a34b;
        $form2->a34c = $request->a34c;
        $form2->a35a = $request->a35a;
        $form2->a35b = $request->a35b;
        $form2->a35c = $request->a35c;
        $form2->a36a = $request->a36a;
        $form2->a36b = $request->a36b;
        $form2->a36c = $request->a36c;
        $form2->a37a = $request->a37a;
        $form2->a37b = $request->a37b;
        $form2->a37c = $request->a37c;
        $form2->a38a = $request->a38a;
        $form2->a38b = $request->a38b;
        $form2->a38c = $request->a38c;
        $form2->a39a = $request->a39a;
        $form2->a39b = $request->a39b;
        $form2->a39c = $request->a39c;
        $form2->a40a = $request->a40a;
        $form2->a40b = $request->a40b;
        $form2->a40c = $request->a40c;
        $form2->a40d = $request->a40d;
        $form2->save();

        $form3 = new Needassessmenttablethree;
        $form3->needs_assessment_inventory_id = $form->id;
        $form3->a41a = $request->a41a;
        $form3->a41b = $request->a41b;
        $form3->a41c = $request->a41c;
        $form3->a42a = $request->a42a;
        $form3->a42b = $request->a42b;
        $form3->a42c = $request->a42c;
        $form3->a43a = $request->a43a;
        $form3->a43b = $request->a43b;
        $form3->a43c = $request->a43c;
        $form3->a44a = $request->a44a;
        $form3->a44b = $request->a44b;
        $form3->a44c = $request->a44c;
        $form3->a45a = $request->a45a;
        $form3->a45b = $request->a45b;
        $form3->a45c = $request->a45c;
        $form3->a46a = $request->a46a;
        $form3->a46b = $request->a46b;
        $form3->a46c = $request->a46c;
        $form3->a47a = $request->a47a;
        $form3->a47b = $request->a47b;
        $form3->a47c = $request->a47c;
        $form3->a48a = $request->a48a;
        $form3->a48b = $request->a48b;
        $form3->a48c = $request->a48c;
        $form3->a49a = $request->a49a;
        $form3->a49b = $request->a49b;
        $form3->a49c = $request->a49c;
        $form3->a50a = $request->a50a;
        $form3->a50b = $request->a50b;
        $form3->a50c = $request->a50c;
        $form3->a50d = $request->a50d;
        $form3->a50e = $request->a50e;
        $form3->save();


        $form4 = new Needassessmenttablefour;
        $form4->needs_assessment_inventory_id = $form->id;
        $form4->a51a = $request->a51a;
        $form4->a51b = $request->a51b;
        $form4->a51c = $request->a51c;
        $form4->a52a = $request->a52a;
        $form4->a52b = $request->a52b;
        $form4->a52c = $request->a52c;
        $form4->a53a = $request->a53a;
        $form4->a53b = $request->a53b;
        $form4->a53c = $request->a53c;
        $form4->a54a = $request->a54a;
        $form4->a54b = $request->a54b;
        $form4->a54c = $request->a54c;
        $form4->a55a = $request->a55a;
        $form4->a55b = $request->a55b;
        $form4->a55c = $request->a55c;
        $form4->a56a = $request->a56a;
        $form4->a56b = $request->a56b;
        $form4->a56c = $request->a56c;
        $form4->a57a = $request->a57a;
        $form4->a57b = $request->a57b;
        $form4->a57c = $request->a57c;
        $form4->a58a = $request->a58a;
        $form4->a58b = $request->a58b;
        $form4->a58c = $request->a58c;
        $form4->a59a = $request->a59a;
        $form4->a59b = $request->a59b;
        $form4->a59c = $request->a59c;
        $form4->a60a = $request->a60a;
        $form4->a60b = $request->a60b;
        $form4->a60c = $request->a60c;
        $form4->a61a = $request->a61a;
        $form4->a61b = $request->a61b;
        $form4->a61c = $request->a61c;
        $form4->a62a = $request->a62a;
        $form4->a62b = $request->a62b;
        $form4->a62c = $request->a62c;
        $form4->a63a = $request->a63a;
        $form4->a63b = $request->a63b;
        $form4->a63c = $request->a63c;
        $form4->a64a = $request->a64a;
        $form4->a64b = $request->a64b;
        $form4->a64c = $request->a64c;
        $form4->a64d = $request->a64d;
        $form4->a65a = $request->a65a;
        $form4->a65b = $request->a65b;
        $form4->a65c = $request->a65c;
        $form4->a65d = $request->a65d;
        
        $form4->save();
        
        Session::flash('SubmittedForm');
        return redirect('home');
    }
    

    public function individualinventory_form(){
        $sy   = Schoolyear::where('status', 1)->first();


        $student = Student::where('id_no', Auth::user()->email)->first();
        $submitted = IndividualInventory::where('schoolyear_id', $sy->id)->where('student_id', $student->id)->count();

            if($submitted > 0){
                Session::flash('DuplicateForm');
            }else{
                return view('admin.forms.individualinventory_form', compact('student'));
            }
        return redirect('home');
    }


    public function individualinventory_formsubmit(Request $request){


        $sy   = Schoolyear::where('status', 1)->first();
        $student = Student::where('id_no', Auth::user()->email)->first();

        $form = new IndividualInventory;
        $form->schoolyear_id = $sy->id;
        $form->student_id = $student->id;
        $form->a1 = $request->a1;
        $form->a2 = $request->a2;
        $form->a3 = $request->a3;
        $form->a4 = $request->a4;
        $form->a5 = $request->a5;
        $form->a6 = $request->a6;
        $form->a7 = $request->a7;
        $form->a8 = $request->a8;
        $form->a9 = $request->a9;
        $form->b1 = $request->b1;
        $form->b2 = $request->b2;
        $form->b3 = $request->b3;
        $form->b4 = $request->b4;
        $form->b5 = $request->b5;
        $form->b6 = $request->b6;
        $form->b7 = $request->b7;
        $form->b8 = $request->b8;
        $form->b9 = $request->b9;
        $form->b10 = $request->b10;
        $form->b11 = $request->b11;
        $form->b12 = $request->b12;
        $form->b13 = $request->b13;
        $form->b14 = $request->b14;
        $form->b15 = $request->b15;
        $form->b16 = $request->b16;
        $form->b17 = $request->b17;
        $form->b18 = $request->b18;
        $form->c1 = $request->c1;
        $form->c2 = $request->c2;
        $form->c3 = $request->c3;
        $form->c4 = $request->c4;
        $form->c5 = $request->c5;
        $form->nickname=$request->nickname;
        $form->save();


        $form2 = new IndividualInventorytwo;
        $form2->individual_inventory_id = $form->id;
        $form2->d1 = $request->d1;
        $form2->d2 = $request->d2;
        $form2->d3 = $request->d3;
        $form2->d4 = $request->d4;
        $form2->d5 = $request->d5;
        $form2->d6 = $request->d6;
        $form2->d7 = $request->d7;
        $form2->d8 = $request->d8;
        $form2->d9 = $request->d9;
        $form2->d10 = $request->d10;
        $form2->d11 = $request->d11;
        $form2->d12 = $request->d12;
        $form2->d13 = $request->d13;
        $form2->d14 = $request->d14;
        $form2->d15 = $request->d15;
        $form2->e1 = $request->e1;
        $form2->e2 = $request->e2;
        $form2->e3 = $request->e3;
        $form2->e4 = $request->e4;
        $form2->e5 = $request->e5;
        $form2->e6 = $request->e6;
        $form2->f1 = $request->f1;
        $form2->f2 = $request->f2;
        $form2->f3 = $request->f3;
        $form2->f4 = $request->f4;
        $form2->f5 = $request->f5;
        $form2->f6 = $request->f6;
        $form2->f7 = $request->f7;
        $form2->f8 = $request->f8;
        $form2->f9 = $request->f9;
        $form2->f10 = $request->f10;
        $form2->f11 = $request->f11;
        $form2->f12 = $request->f12;
        $form2->f13 = $request->f13;
        $form2->f14 = $request->f14;
        $form2->f15 = $request->f15;
        $form2->f16 = $request->f16;
        $form2->save();

        $form3 = new IndividualInventoryThree;
        $form3->individual_inventory_id = $form->id;
        $form3->g1 = $request->g1;
        $form3->g2 = $request->g2;
        $form3->g3 = $request->g3;
        $form3->g4 = $request->g4;
        $form3->g5 = $request->g5;
        $form3->g6 = $request->g6;
        $form3->g7 = $request->g7;
        $form3->g8 = $request->g8;
        $form3->g9 = $request->g9;
        $form3->g10 = $request->g10;
        $form3->g11 = $request->g11;
        $form3->g12 = $request->g12;
        $form3->g13 = $request->g13;
        $form3->g14 = $request->g14;
        $form3->g15 = $request->g15;
        $form3->h1 = $request->h1;
        $form3->h2 = $request->h2;
        $form3->h3 = $request->h3;
        $form3->h4 = $request->h4;
        $form3->h5 = $request->h5;
        $form3->h6 = $request->h6;
        $form3->h7 = $request->h7;
        $form3->save();


        $form4 = new IndividualInventoryFour;
        $form4->individual_inventory_id = $form->id;
        $form4->i1 = $request->i1;
        $form4->i2 = $request->i2;
        $form4->i3 = $request->i3;
        $form4->i4 = $request->i4;
        $form4->i5 = $request->i5;
        $form4->i6 = $request->i6;
        $form4->i7 = $request->i7;
        $form4->i8 = $request->i8;
        $form4->i9 = $request->i9;
        $form4->i10 = $request->i10;
        $form4->i11 = $request->i11;
        $form4->i12 = $request->i12;
        $form4->i13 = $request->i13;
        $form4->i14 = $request->i14;
        $form4->i15 = $request->i15;
        $form4->i16 = $request->i16;
        $form4->i17 = $request->i17;
        $form4->i18 = $request->i18;
        $form4->i19 = $request->i19;
        $form4->i20 = $request->i20;
        $form4->i21 = $request->i21;
        $form4->i22 = $request->i22;
        $form4->i23 = $request->i23;
        $form4->i24 = $request->i24;
        $form4->i25 = $request->i25;
        $form4->j1 = $request->j1;
        $form4->j2 = $request->j2;
        $form4->j3 = $request->j3;
        $form4->j4 = $request->j4;
        $form4->j5 = $request->j5;
        $form4->k1 = $request->k1;
        $form4->k2 = $request->k2;
        $form4->save();
        
        Session::flash('SubmittedForm');
        return redirect('home');
    }

    public function enable_form($id){
        $form = FormSetting::findOrFail($id);

        if($form->enabled == 1){
            $form->enabled = 0;

            Session::flash('Disabled');
        }else{
            $form->enabled = 1;
            Session::flash('Enabled');
        }
        $form->save();

        return redirect()->back();
    }

    public function clientcounselorindividual($id){
        $model = ClientCounselorFeedback::where('id', $id)->get();
        
        return view('forms.clientcounselorfeedback', compact('model'));
    }

    public function evaluationindividual($id){
        $model = EvaluationForm::where('id', $id)->get();
        $act = $model->first()->evaluation_activity_id;
        
        $activity = EvaluationActivity::findOrFail($act);
        
        return view('forms.evaluation', compact('model', 'activity'));
    }

    public function interviewfeedbackindividual($id){
        $model = InventoryFeedback::where('id', $id)->get();
        
        return view('forms.interviewfeedback', compact('model'));
    }

    public function needsassessmentindividual($id){
        $model = NeedsAssessmentInventory::where('id', $id)->get();
        
        return view('forms.needsassessment', compact('model'));
    }

    public function pfapplicationindividual($id){
        $model = PeerFacilitatorCircle::where('id', $id)->get();
        
        return view('forms.pfapplication', compact('model'));
    }

    public function pfmembershipindividual($id){
        $model = Membership::where('id', $id)->get();
        
        return view('forms.pfmembership', compact('model'));
    }

    public function precounselingindividual($id){
        $model = Precounseling::where('id', $id)->get();
        
        return view('forms.precounseling', compact('model'));
    }

    public function clientcounselorgetfiltered(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $submitted = 0;
        $notsubmitted = 0;
        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $submitted = DB::table('client_counselor_feedback')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->count();
            $notsubmitted = $students->count() - $submitted;
        }else{
            $notsubmitted = $students->count();
        }
        return response()->json(['Success'=>true,'submitted'=>$submitted, 'notsubmitted'=> $notsubmitted]);
    }

    public function evaluationgetfiltered(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $submitted = 0;
        $notsubmitted = 0;
        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $submitted = DB::table('evaluation_forms')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->count();
            $notsubmitted = $students->count() - $submitted;
        }else{
            $notsubmitted = $students->count();
        }
        return response()->json(['Success'=>true,'submitted'=>$submitted, 'notsubmitted'=> $notsubmitted]);
    }

    public function interviewfeedbackgetfiltered(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $submitted = 0;
        $notsubmitted = 0;
        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $submitted = DB::table('inventory_feedback')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->count();
            $notsubmitted = $students->count() - $submitted;
        }else{
            $notsubmitted = $students->count();
        }
        return response()->json(['Success'=>true,'submitted'=>$submitted, 'notsubmitted'=> $notsubmitted]);
    }

    public function needsassessmentgetfiltered(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $submitted = 0;
        $notsubmitted = 0;
        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $submitted = DB::table('needs_assessment_inventories')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->count();
            $notsubmitted = $students->count() - $submitted;
        }else{
            $notsubmitted = $students->count();
        }
        return response()->json(['Success'=>true,'submitted'=>$submitted, 'notsubmitted'=> $notsubmitted]);
    }

    public function pfapplicationgetfiltered(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $submitted = 0;
        $notsubmitted = 0;
        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $submitted = DB::table('peer_facilitator_circles')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->count();
            $notsubmitted = $students->count() - $submitted;
        }else{
            $notsubmitted = $students->count();
        }
        return response()->json(['Success'=>true,'submitted'=>$submitted, 'notsubmitted'=> $notsubmitted]);
    }

    public function pfmembershipgetfiltered(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $submitted = 0;
        $notsubmitted = 0;
        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $submitted = DB::table('memberships')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->count();
            $notsubmitted = $students->count() - $submitted;
        }else{
            $notsubmitted = $students->count();
        }
        return response()->json(['Success'=>true,'submitted'=>$submitted, 'notsubmitted'=> $notsubmitted]);
    }

    public function precounselinggetfiltered(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $submitted = 0;
        $notsubmitted = 0;
        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $submitted = DB::table('precounselings')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->count();
            $notsubmitted = $students->count() - $submitted;
        }else{
            $notsubmitted = $students->count();
        }
        return response()->json(['Success'=>true,'submitted'=>$submitted, 'notsubmitted'=> $notsubmitted]);
    }

    public function evaluationactivity($id){
        $activity = EvaluationActivity::findOrFail($id);

        $sy   = Schoolyear::where('status', 1)->first();

        if(!$sy){
            $model = [];
        }else{
            $model = EvaluationActivity::where('schoolyear_id', $sy->id)->get();
        }

        return view('admin.forms.evaluation_formedit', compact('model', 'sy', 'activity'));
    }

    public function evaluationactivity_update(Request $request, $id)
    {

        $validator = $request->validate([
            'title' => 'required', 'max:255',
            'facilitators' => 'required', 'max:255',
            'date' => 'required', 'max:255'
        ]);

        $sy    = Schoolyear::where('status', 1)->first();

        $model = EvaluationActivity::findOrFail($id);
        $model->title = $request->title;
        $model->facilitators = $request->facilitators;
        $model->date = $request->date;
        $model->save();

        Session::flash('Updated');
        
        return redirect('evaluation_activities');
    }

    public function stud_profile_form(){
        $sy   = Schoolyear::where('status', 1)->first();

        $student = Student::where('id_no', Auth::user()->email)->first();
        $submitted = StudentProfileInput::where('schoolyear_id', $sy->id)->where('student_id', $student->id)->count();

        if($submitted > 0){
            Session::flash('DuplicateForm');
        }else{
            return view('admin.forms.stud_profile_input');
        }
        return redirect('home');
    }

    public function stud_prof_formstore(Request $request){
        $a1a = 0;
        $a1b = 0;
        $a1c = 0;
        $a1d = 0;
        $a1e = 0;
        $a1f = 0;
        $a1g = 0;
        $a1h = 0;
        $a1i = 0;
        $a1j = 0;
        $a1k = 0;
        $a1l = 0;
        $a1m = 0;

        $a2a = 0;
        $a2b = 0;
        $a2c = 0;
        $a2d = 0;
        $a2e = 0;
        $a2f = 0;
        $a2g = 0;

        $a3a = 0;
        $a3b = 0;
        $a3c = 0;
        $a3d = 0;
        $a3e = 0;
        $a3f = 0;
        $a3g = 0;

        if($request->a1a == 'on'){$a1a = 1;}
        if($request->a1b == 'on'){$a1b = 1;}
        if($request->a1c == 'on'){$a1c = 1;}
        if($request->a1d == 'on'){$a1d = 1;}
        if($request->a1e == 'on'){$a1e = 1;}
        if($request->a1f == 'on'){$a1f = 1;}
        if($request->a1g == 'on'){$a1g = 1;}
        if($request->a1h == 'on'){$a1h = 1;}
        if($request->a1i == 'on'){$a1i = 1;}
        if($request->a1j == 'on'){$a1j = 1;}
        if($request->a1k == 'on'){$a1k = 1;}
        if($request->a1l == 'on'){$a1l = 1;}
        if($request->a1m == 'on'){$a1m = 1;}

        if($request->a2a == 'on'){$a2a = 1;}
        if($request->a2b == 'on'){$a2b = 1;}
        if($request->a2c == 'on'){$a2c = 1;}
        if($request->a2d == 'on'){$a2d = 1;}
        if($request->a2e == 'on'){$a2e = 1;}
        if($request->a2f == 'on'){$a2f = 1;}
        if($request->a2g == 'on'){$a2g = 1;}

        if($request->a3a == 'on'){$a3a = 1;}
        if($request->a3b == 'on'){$a3b = 1;}
        if($request->a3c == 'on'){$a3c = 1;}
        if($request->a3d == 'on'){$a3d = 1;}
        if($request->a3e == 'on'){$a3e = 1;}
        if($request->a3f == 'on'){$a3f = 1;}
        if($request->a3g == 'on'){$a3g = 1;}

        
        $sy    = Schoolyear::where('status', 1)->first();
        $student = Student::where('id_no', Auth::user()->email)->first();
        $course_id = $student->course_id;
        $yearlevel = $student->yearlevel;
        $section   = $student->section;

        $model = new StudentProfileInput;
        $model->schoolyear_id = $sy->id;
        $model->student_id = $student->id;
        $model->course_id = $course_id;
        $model->yearlevel = $yearlevel;
        $model->section = $section;

        $model->a1a = $a1a;
        $model->a1b = $a1b;
        $model->a1c = $a1c;
        $model->a1d = $a1d;
        $model->a1e = $a1e;
        $model->a1f = $a1f;
        $model->a1g = $a1g;
        $model->a1h = $a1h;
        $model->a1i = $a1i;
        $model->a1j = $a1j;
        $model->a1k = $a1k;
        $model->a1l = $a1l;
        $model->a1m = $a1m;

        $model->a2a = $a2a;
        $model->a2b = $a2b;
        $model->a2c = $a2c;
        $model->a2d = $a2d;
        $model->a2e = $a2e;
        $model->a2f = $a2f;
        $model->a2g = $a2g;

        $model->a3a = $a3a;
        $model->a3b = $a3b;
        $model->a3c = $a3c;
        $model->a3d = $a3d;
        $model->a3e = $a3e;
        $model->a3f = $a3f;
        $model->a3g = $a3g;

        $model->a4a = $request->a4a;

        $model->save();


        Session::flash('SubmittedForm');
        return redirect('home');

    }

    public function stud_profile(){
        $sy   = Schoolyear::where('status', 1)->first();

        if(!$sy){
            $form = [];
            $notsubmitted = [];
            $courses = [];
            $sections = [];
        }else{
            $form = StudentProfileInput::where('schoolyear_id', $sy->id)->get();
            $notsubmitted = DB::table('students as p')
            ->whereRaw("id not in (SELECT student_id FROM student_profile_inputs)")
            ->where('schoolyear_id', $sy->id)
            ->get();
            $courses = Course::all();
            $sections = DB::table('students')->distinct('section')->get('section');
        }

        return view('admin.forms.stud_profile_new', compact('notsubmitted', 'form', 'courses', 'sections', 'sy'));
    }


    public function stud_profile_print(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $course = Course::findOrFail($request->course);
        $yearlevel = $request->yearlevel;
        $section = $request->section;
        $model = null;

        return view('forms.studentprofile', compact('sy', 'course', 'yearlevel', 'section', 'model'));
    }

    public function stud_profilegetfiltered(Request $request){
        $sy   = Schoolyear::where('status', 1)->first();
        $students = Student::where('schoolyear_id', $sy->id)->where('course_id', $request->course)->where('yearlevel', $request->yearlevel)->where('section', $request->section)->get('id');
        $submitted = 0;
        $notsubmitted = 0;
        if($students->count() > 0){
            foreach($students as $stud){
                $student[] =$stud->id;
            }
            $submitted = DB::table('student_profile_inputs')
            ->whereIn('student_id', $student)
            ->where('schoolyear_id', $sy->id)
            ->count();
            $notsubmitted = $students->count() - $submitted;
        }else{
            $notsubmitted = $students->count();
        }
        return response()->json(['Success'=>true,'submitted'=>$submitted, 'notsubmitted'=> $notsubmitted]);
    }
    
}
