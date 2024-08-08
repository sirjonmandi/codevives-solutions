<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function addAppointment(Request $request){
        $request->validate([
            'name'=>"required|string|max:20",
            'email'=>'required|email',
            'contact'=>'required|integer|max_digits:10|min_digits:10',
            'service_name'=>'required|string',
            'desc'=>'required|string|min:20'
        ]);
            $appoints = new Appointment;
            $appoints->name = $request['name'];
            $appoints->email = $request['email'];
            $appoints->contact = $request['contact'];
            $appoints->service_name = $request['service_name'];
            $appoints->desc = $request['desc'];
            $appoints->save();
            return redirect(route('home'))->with(['success'=>"your requiest is submitted our team will reach you soon"]);

    }
}
