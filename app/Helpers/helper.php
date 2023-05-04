<?php

use App\Models\EntrepreneurApply;
use App\Models\McqQuiz;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

function getDegreeType()
{
    return [
        "1" => 'Undergraduate',
        "2" => 'Graduate',
        "3" => 'Post Graduate',
    ];
}

function getDegreeName($id)
{
    return getDegreeType()[$id];
}

function schoolType()
{
    return [
        "1" => 'School of Business & Economics',
        "2" => 'School of Business & Economics',
        "3" => 'School of Humanities & Social Sciences',
        "4" => 'School of Health & Life Sciences',
        "5" => 'Other',
    ];
}

function getSchoolName($id)
{
    return getDegreeType()[$id];
}

function getMembershipType()
{
    return [
        "1" => 'Gold',
        "2" => 'Regular',
    ];
}


function getErrorMessage($error)
{
    return $error;
    return "There is an Error";
}

function getYoutubeVideoLink($link)
{
    preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $link, $matches);
    if ($matches != null) {
        $video = "https://www.youtube.com/embed/" . $matches[0];
    } else {
        $video = "";
    }

    return $video;
}

function getYoutubeVideoId($link)
{
    preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $link, $matches);
    if ($matches != null) {
        $video = $matches[0];
    } else {
        $video = "";
    }

    return $video;
}

function getTextToUrl($link)
{
    $link = preg_replace('/\s+/', '-', $link);
    return $link;
}

function getUniversityNameFromId($id)
{

    $is_exist = \App\Models\Institute::where('id', $id)->first();
    if (is_null($is_exist)) {
        return " N/A";
    }
    return $is_exist->institute_name;
}

function getInstituteIdFromCourse($id)
{
    $is_exist = \App\Models\Course::where('id', $id)->first();
    if (is_null($is_exist)) {
        return 1;
    }
    return $is_exist->institute_id;
}

function getApiKey()
{
    return "62847a72-396f-4472-aa5f-e7ba7a5252eb";
}

function getSubjectNameFromId($id)
{
    $is_exist = \App\Models\Subject::where('id', $id)->first();
    if (is_null($is_exist))
        return "-";
    return $is_exist->subject_name;
}

function getUniversityEmail($id)
{
    $is_exist = \App\Models\Institute::where('id', $id)->first();
    if (is_null($is_exist))
        return "";
    return $is_exist->email;
}

function getUniversityName($id)
{
    $is_exist = \App\Models\Institute::where('id', $id)->first();
    if (is_null($is_exist))
        return "";
    return $is_exist->institute_name;
}

function getApplicationStatus()
{
    $application_update_status = 0;
    if (Auth::guard('applicant')->check()) {
        $is_exist = EntrepreneurApply::where('phone_number', Auth::guard('applicant')->user()->phone)
            ->where('is_complete', false)
            ->first();
        if (!is_null($is_exist)) {
            $application_update_status = 1;
        }
    }

    return $application_update_status;
}

function getDateFormat($data)
{

    return "fff";
    return $date2 = Carbon::parse($data)->format('d F y');
}

function validatePhoneNumber($phone)
{

    if ($phone == null) {
        return 0;
    }
    if (substr($phone, 0, 1) != '0') {
        $phone = "0" . $phone;
    }

    $pattern = "/^(?:\+88|01)?(?:\d{11}|\d{13})$/";
    if (preg_match($pattern, $phone)) {
        return 1;
    };
}

function getFriendsQuestionList($old_data)
{

    $old_data = json_decode($old_data->option);
    $friends_question = [];
    foreach ($old_data as $x => $x_value) {

        $friends_question[] = McqQuiz::where('id', $x)->first();
    }
    return $friends_question;

}

function getEvaluationValue($old_data, $new_data)
{
    $match = 0;
    foreach ($old_data as $x => $x_value) {
        foreach ($new_data as $my_key => $my_values) {
            if ($x == $my_key) {
                if ($x_value == $my_values) {
                    $match++;
                }
                break;
            }
        }
    }
    return ($match / 5 * 100) . "%";

}

function getPlayerName($id)
{

    if ($id == "1") {
        return "মেহেদী হাসান মিরাজ";

    } elseif ($id == "2") {
        return "রোমান সানা";
    } elseif ($id == "3") {
        return "সাকিব আল হাসান";
    } elseif ($id == "4") {
        return "দিয়া সিদ্দিকী";
    }elseif ($id == "5") {
        return "লিটন দাস";
    }elseif ($id == "6") {
        return "তপু বর্মন";
    }

}
