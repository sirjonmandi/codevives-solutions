<?php

namespace App\Http\Controllers;

use App\Http\Controllers\redirect;
use Illuminate\Http\Request;
use App\Models\SiteInfo;
use App\Models\Services;
use App\Models\Subscribers as subs;


class SiteController extends Controller
{
    // go to home
    public function home(){
        $data = $this->getSiteInfo();
        if($data){
            return view('welcome')->with(compact('data'));
        }
    }
    // check the table is created or not
    public function isSetSite(){
        $check = SiteInfo::first();
        if ($check) {
            return $check;
        }
        else{
            return new SiteInfo;
        }
    }
    // get site info
    public function getSiteInfo(){
        $check = SiteInfo::first();
        return $check;
    }
    // update hero serction
    public function updateHero(Request $request){
        $request->validate([
            'site_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'hero_text'=>'required|string',
            'subhero_text'=>'required|string',
            'hero_img'=>'nullable|image'
        ]);
        $data = $this->isSetSite();
        if($data){
            $data->site_name = $request['site_name'];
            $data->hero_text = $request['hero_text'];
            $data->subhero_text = $request['subhero_text'];
            if($request->hasFile('hero_img'))
            $data->hero_img = $request->file('hero_img')->store('files','public');
            $data->save();
        }
        return redirect(route('editpages'));
    }
    // update portfolio section
    public function updatePortfolio(Request $request){
        $request->validate([
            'portfolio_title'=>'required|regex:/^[\pL\s\-]+$/u',
            'portfolio_subtitle'=>'required|string',
            'who_we_are'=>'required|string',
            'projects_delivered'=>'required|integer|max_digits:6',
            'satisfied_customers'=>'required|integer|max_digits:6',
            'year_of_exp'=>'required|integer|max_digits:3',
        ]);
        $data = $this->isSetSite();
        if ($data) {
            $data->portfolio_title = $request['portfolio_title'];
            $data->portfolio_subtext = $request['portfolio_subtitle'];
            $data->who_we_are = $request['who_we_are'];
            $data->projects_delivered = $request['projects_delivered'];
            $data->satisfied_customers = $request['satisfied_customers'];
            $data->year_of_exp = $request['year_of_exp'];
            $data->save();
        }
        return redirect(route('editpages'));
    }
    // update services section
    public function updateService(Request $request){
        $request->validate([
            'service_title'=>'required|regex:/^[\pL\s\-]+$/u',
            'service_subtext'=>'required|string',
        ]);
        $data = $this->isSetSite();
        if ($data) {
            $data->service_title = $request['service_title'];
            $data->service_subtext = $request['service_subtext'];
            $data->save();
        }
        return redirect(route('editpages'));
    }
    // update careers serction
    public function updateCareer(Request $request){
        $request->validate([
            'careers_title'=>'required|regex:/^[\pL\s\-]+$/u',
            'careers_subtext'=>'required|string',
        ]);
        $data = $this->isSetSite();
        if ($data) {
            $data->careers_title = $request['careers_title'];
            $data->careers_subtext = $request['careers_subtext'];
            $data->save();
        }
        return redirect(route('editpages'));
    }
    // update footer section
    public function updateFooter(Request $request){

        $request->validate([
            'moblie_no'=>'integer|max_digits:10|min_digits:10',
            'email_id'=>'email',
            'address'=>'string',
            'info'=>'string'
        ]);

        $data = $this->isSetSite();
        if ($data){
            $data->mobile = $request['mobile_no'];
            $data->email = $request['email_id'];
            $data->address = $request['address'];
            $data->info = $request['info'];
            $data->save();
        }
        return redirect(route('editpages'));
    }
    // go to edit pages
    public function editPages(){
        $info = $this->getSiteInfo();
        return view('editpages')->with(compact('info'));
    }
    // go to subscribers
    public function subscribers(){
        return view('subscribers');
    }
    public function newsubs(Request $request){
        $request->validate([
            'subscriber'=>'required|email',
        ]);
        $status = subs::where('email_ids','=',$request->subscriber)->first();
        if ($status) {
            dd($status->email_ids);
            return redirect(route('home'));
        }else{
            $subs = new subs;
            $subs->email_ids = $request->subscriber;
            $subs->save();
            return redirect(route('home'));
        }
    }
    public function gotoCareers(){
        return view('careers');
    }
    public function addService(Request $req){
        $req->validate([
            "service_title"=>"required|string",
            "price"=>"required|numeric",
            "cover_img"=>"required|image",
        ]);
        // dd($req);
        $service = new Services;
        $service->name = $req['service_title'];
        $service->price = $req['price'];
        // if($req->hasFile('cover_img'))
            $service->cover_img = $req->file('cover_img')->store('files','public');
        dd($service->cover_img);
        $service->save();
        return redirect(router('service'));

        // if($request->hasFile('hero_img'))
        //     $data->hero_img = $request->file('hero_img')->store('files','public');
    }
}
