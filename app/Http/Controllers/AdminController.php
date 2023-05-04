<?php

namespace App\Http\Controllers;

use App\Models\AlumniTestimonial;
use App\Models\Applicants;
use App\Models\AppliedCourse;
use App\Models\EntrepreneurApply;
use App\Models\Institute;
use App\Models\McqQuiz;
use App\Models\McqQuizSubmission;
use App\Models\News;
use App\Models\SelfieSubmission;
use App\Models\Setting;
use App\Models\Subject;
use App\Models\User;
use App\Models\Vote;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function drawing(Request $request)
    {
        $numbers = 25;
        $query = Applicants::orderBy('created_at', 'DESC');
        if (isset($_GET['is_short_listed'])) {
            if ($request['is_short_listed'] != null) {
                $query->where('is_short_listed', $request['is_short_listed']);
            }
            if ($request['class_group'] != null) {
                $query->where('class_group', $request['class_group']);
            }
        }

        $applications = $query->paginate($numbers);
        $counter_start = 1;
        if (isset($_GET['page'])) {
            $counter_start = ($_GET['page'] - 1) * $numbers + 1;
        }

        return view('admin.application.show')
            ->with('start_number', $counter_start)
            ->with('results', $applications);
    }

    public function drawingStatus($id, $status)
    {
        try {
            Applicants::where('id', $id)->update([
                'is_short_listed' => $status
            ]);
        } catch (\Exception $exception) {

        }

        Session::flash('message', 'Successfully Updated!');
        return back()->with("message", "Successfully Updated");


    }

    public function dashboard()
    {


        $numbers=Vote::count();
        $option1=Vote::where('option', 1)->count();
        $option2=Vote::where('option', 2)->count();
        $option3=Vote::where('option', 3)->count();
        $option4=Vote::where('option', 4)->count();
        $option5=Vote::where('option', 5)->count();
        $option6=Vote::where('option', 6)->count();

        return view('admin.dashboard.index')
            ->with("votes",$numbers)
            ->with("option1",$option1)
            ->with("option2",$option2)
            ->with("option3",$option3)
            ->with("option4",$option4)
            ->with("option5",$option5)
            ->with("option6",$option6);
    }

    public function applications()
    {

        $data = DB::table('entrepreneur_applies')->orderBy('id', 'DESC')->get();
        return view('admin.application.show')
            ->with('results', $data);
    }

    public function companyDetails($id)
    {

        $data = DB::table('entrepreneur_applies')->where('id', $id)->first();
        return view('admin.application.details')
            ->with('result', $data);
    }

    public function settings()
    {
        $data = Setting::first();
        return view('admin.setting.index')->with('result', $data);
    }

    public function settingUpdate(Request $request)
    {
        if ($request['is_expired'] == null) {
            $request['is_expired'] = false;
        }
        try {
            Setting::where('id', 1)->update([
                'app_version_code' => $request['app_version_code'],
                'is_expired' => $request['is_expired'],
            ]);
            return back()->with('success', "Successfully Updated");
        } catch (\Exception $exception) {
            return back()->with('failed', getErrorMessage($exception->getMessage()));
        }
    }

    public function profile()
    {
        $data = Setting::first();
        return view('admin.profile.index')->with('result', $data);
    }

    public function profileUpdate(Request $request)
    {
        /*$user = User::where('id', Auth::user()->id)->first();

         if (Hash::check(Hash::make($request['old_password']), $user->password)) {
             return "Matched";
         }
         return "Not Matched";*/
        if ($request['password'] != null) {
            $array = [
                'name' => $request['name'],
                'password' => Hash::make($request['password']),
            ];
        } else {
            $array = [
                'name' => $request['name'],
            ];
        }

        //return $array;
        try {
            User::where('id', Auth::user()->id)->update($array);
            return back()->with('success', "Successfully Updated");
        } catch (\Exception $exception) {
            return back()->with('failed', getErrorMessage($exception->getMessage()));
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/login');
    }
}
