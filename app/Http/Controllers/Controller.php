<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Video;
use App\Models\Vote;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function home()
    {
        $news = News::orderBy("created_at", "DESC")->get();
        $videos = Video::orderBy("created_at", "DESC")->get();
        return view('common.home.index')
            ->with("news", $news)
            ->with("videos", $videos);
    }

    public function success()
    {
        return view('common.home.success');

    }

    public function over()
    {
        return view('common.new-user.over');
    }

    public function saveOption(Request $request)
    {
        if ($request['name'] == null) {

            return [
                'status_code' => 400,
                'message' => "Not Authenticated",
            ];

        } else {

            if (validatePhoneNumber($request['phone']) != 1) {
                return [
                    'status_code' => 400,
                    'message' => "ফোন নাম্বারটি ভ্যালিড নয় ",
                ];
            }
            $is_exist = Vote::where('phone', $request['phone'])->first();
            if (is_null($is_exist)) {

                try {
                    Vote::create([
                        'phone' => $request['phone'],
                        'name' => $request['name'],
                        'option' => $request['option'],
                    ]);

                    return [
                        'status_code' => 200,
                        'message' => "আপনার ভোট গ্রহণ করা হয়েছে",
                    ];


                } catch (\Exception $exception) {
                    return [
                        'status_code' => 400,
                        'message' => $exception->getMessage(),
                    ];
                }
            } else {
                return [
                    'status_code' => 400,
                    'message' => "আপনি আগেই ভোট দিয়েছেন",
                ];
            }
        }
        return $request->all();
    }

}
