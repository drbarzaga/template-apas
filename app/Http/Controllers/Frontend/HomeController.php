<?php

namespace App\Http\Controllers\Frontend;

use App\Capability;
use App\Mail\ContactMessageMail;
use App\Mail\NeedQuoteMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function overview()
    {
        return view('frontend.overview');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function fuel()
    {
        return view('frontend.fuel');
    }

    public function hydraulic()
    {
        return view('frontend.hydraulic');
    }

    public function electroMechanical()
    {
        return view('frontend.electro_mechanical');
    }

    public function capabilities()
    {
        return view('frontend.capabilities');
    }

    public function searchCapabilities()
    {
        $capabilities = Capability::where('part_number', 'like', '%'.request()->value.'%')->get()->toJson();
        return response()->json($capabilities);
    }

    public function certifications()
    {
        return view('frontend.certifications');
    }

    public function rfq()
    {
        return view('frontend.rfq');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function needQuote()
    {
        try {
            $data      = request()->only('name', 'email', 'message');
            $validator = Validator::make($data, [
                'name'    => 'required',
                'email'   => 'required|email',
                'message' => 'required'
            ]);
            if (!$validator->fails()) {
                Mail::to(env('COMPANY_EMAIL'))->sendNow(new NeedQuoteMail($data));
                return redirect()->back()->with('mail_send', 'Message has been send.');
            }
            return redirect()->back()->withErrors($validator->errors());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sorry an error detected.Please try again.');
        }
    }

    public function contactMessage()
    {
        try {
            $data      = request()->only('name', 'email', 'subject', 'message');
            $validator = Validator::make($data, [
                'name'    => 'required',
                'email'   => 'required|email',
                'subject' => 'required',
                'message' => 'required'
            ]);
            if (!$validator->fails()) {
                Mail::to(env('COMPANY_EMAIL'))->sendNow(new ContactMessageMail($data));
                return redirect()->back()->with('mail_send', 'Message has been send.');
            }
            return redirect()->back()->withErrors($validator->errors());

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sorry an error detected.Please try again.');
        }
    }
}

