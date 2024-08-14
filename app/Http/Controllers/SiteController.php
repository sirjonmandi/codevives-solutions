<?php

namespace App\Http\Controllers;

use App\Http\Controllers\redirect;
use Illuminate\Http\Request;
use App\Models\SiteInfo;
use App\Models\Services;
use App\Models\Plans;
use App\Models\PlansChart;
use App\Models\Subscribers as subs;
use App\Models\Appointment;

class SiteController extends Controller
{
    // go to home
    public function home(){
        $data = $this->getSiteInfo();
        $services = $this->getServices();
        $plans = $this->getPlans();
        if($data){
            return view('welcome')->with(compact('data','services','plans'));
        }
    }
    //get plans info
    public function getPlans(){
        return Plans::all();
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

    // get services
    public function getServices(){
        $services = Services::all()->reverse();
        return $services;
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
            if($request->hasFile('hero_img')){
                $image_path = public_path("storage/$data->hero_img");
                if (file_exists($image_path)){
                    try {
                        unlink($image_path);
                    } catch(\Throwable $th) {}
                }
                $data->hero_img = $request->file('hero_img')->store('files','public');
            }
            $data->save();
        }
        return redirect(route('editpages'))->with(['success'=>"hero section added successfully !!"]);
    }
    // update portfolio section
    public function updatePortfolio(Request $request){
        $request->validate([
            'portfolio_title'=>'required|regex:/^[\pL\s\-]+$/u',
            'portfolio_subtitle'=>'required|string',
            'portfolio_img'=>'nullable|image',
            'who_we_are'=>'required|string',
            'projects_delivered'=>'required|integer|max_digits:6',
            'satisfied_customers'=>'required|integer|max_digits:6',
            'year_of_exp'=>'required|integer|max_digits:3',
        ]);
        $data = $this->isSetSite();
        if ($data) {
            $data->portfolio_title = $request['portfolio_title'];
            $data->portfolio_subtext = $request['portfolio_subtitle'];
            if($request->hasFile('portfolio_img')){
                $image_path = public_path('storage/'.$data->portfolio_img);
                if(file_exists($image_path))
                {
                    try {
                        unlink($image_path);
                    } catch(\Throwable $th) {}
                }
                $data->portfolio_img = $request->file('portfolio_img')->store('files','public');
            }
            $data->who_we_are = $request['who_we_are'];
            $data->projects_delivered = $request['projects_delivered'];
            $data->satisfied_customers = $request['satisfied_customers'];
            $data->year_of_exp = $request['year_of_exp'];
            $data->save();
            return redirect(route('editpages'))->with(["success"=>"portfolio updated successfully !"]);
        }
        return redirect(route('editpages'))->with(["fail"=>"fail to updated portfolio !"]);
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
        return redirect(route('editpages'))->with(['success'=>"service updated successfully !!"]);
    }
    public function updateProducts(Request $request){
        $request->validate([
            'product_title'=>'required|regex:/^[\pL\s\-]+$/u',
            'product_subtext'=>'required|string',
        ]);
        $data = $this->isSetSite();
        if ($data) {
            $data->product_title = $request['product_title'];
            $data->product_subtext = $request['product_subtext'];
            $data->save();
        }
        return redirect(route('editpages'))->with(['success'=>"product updated successfully !!"]);
    }
    public function service($id, Request $request)
    {
        $data = Services::find($id);
        if($data){
            $request->validate([
                "service_title"=>"required|string",
                "price"=>"required|numeric",
                "desc"=>"required|string",
                "img"=>"nullable|image",
            ]);
            $data->name = $request['service_title'];
            $data->price = $request['price'];
            $data->desc = $request['desc'];
            if($request->hasFile('img'))
            {
                $image_path = public_path("storage/$data->cover_img");
                if (file_exists($image_path)) {
                    try {
                        unlink($image_path);
                    } catch(\Throwable $th) {}
                }
                $data->cover_img = $request->file('img')->store('files','public');
            }
            $data->save();
            return redirect(route('service'))->with(["success"=>"service updated successfully !!"]);
        }
        return redirect(route('service'))->with(['fail'=>"failed to update service"]);
    }

    // update careers serction
    public function updateCareer(Request $request){
        $request->validate([
            'contact_title'=>'required|regex:/^[\pL\s\-]+$/u',
            'contact_subtext'=>'required|string',
            'contact_img'=>'nullable|image'
        ]);
        $data = $this->isSetSite();
        if ($data) {
            $data->careers_title = $request['contact_title'];
            $data->careers_subtext = $request['contact_subtext'];
            if($request->hasFile('contact_img')){
                $image_path = public_path("storage/$data->career_img");
                if (file_exists($image_path)) {
                    try {
                        unlink($image_path);
                    } catch(\Throwable $th) {}
                }
                $data->career_img = $request->file('contact_img')->store('files','public');
            }
            $data->save();
            return redirect(route('editpages'))->with(["success"=>"contact updated successfully !"]);
        }
        return redirect(route('editpages'))->with(["fail"=>"failed to update contacts !"]);
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
            return redirect(route('editpages'))->with(["success"=>"footer updated successfully !"]);
        }
        return redirect(route('editpages'))->with(["fail"=>"failed to update footer!"]);
    }
    // go to edit pages
    public function editPages(){
        $info = $this->getSiteInfo();
        return view('editpages')->with(compact('info'));
    }
    // go to subscribers
    public function subscribers(){
        $users = subs::all()->reverse();
        return view('subscribers')->with(compact('users'));
    }
    public function deletesubs($id){
        $data = subs::find($id);
        if ($data) {
            $data->delete();
            return redirect(route('gotoSubs'))->with(["success"=>"subscriber deleted successfully"]);
        }
        return redirect(route('gotoSubs'))->with(["fail"=>"failed to  deleted subscriber"]);
    }
    public function newsubs(Request $request){
        $request->validate([
            'subscriber'=>'required|email',
        ]);
        $status = subs::where('email_ids','=',$request->subscriber)->first();
        if ($status) {
            return redirect(route('home'))->with(['fail'=>'you already subscribed our service thank you']);
        }else{
            $subs = new subs;
            $subs->email_ids = $request->subscriber;
            $subs->save();
            return redirect(route('home'))->with(['success'=>'you subscribed our service thank you']);
        }
    }

    public function gotoService(){
        $services = $this->getServices();
        $appointments = Appointment::all()->reverse();
        return view('service')->with(compact('services','appointments'));
    }

    public function addService(Request $req){
        $req->validate([
            "service_title"=>"required|string",
            "price"=>"required|numeric",
            "desc"=>"required|string",
            "img"=>"required|image",
        ]);
        $service = new Services;
        $service->name = $req['service_title'];
        $service->price = $req['price'];
        $service->desc = $req['desc'];
        if($req->hasFile('img')){
            $image_path = public_path('storage/'.$service->cover_img);
            if(file_exists($image_path)){
                try {
                    unlink($image_path);
                } catch(\Throwable $th) {}
            }
            $service->cover_img = $req->file('img')->store('files','public');
        }
        $service->save();
        return redirect(route('service'))->with(['success'=>"service added successfully !!"]);
    }
    public function deleteService($id){
        $data = Services::find($id);
        if ($data) {
            $image_path = public_path('storage/'.$data->cover_img);
            if(file_exists($image_path)){
                try {
                    unlink($image_path);
                } catch(\Throwable $th) {}
            }
            $data->delete();
            return redirect(route('service'))->with(["success"=>"service deleted successfully !!"]);
        }
        return redirect(route('service'))->with(["fail"=>"failed to deleted service"]);
    }
    public function gotodashboard(){
        $total_appointments = count(Appointment::where('status','=','2')->get());
        $pending_appointments =count(Appointment::where('status','=','1')->get());
        $pending_appointments_data = Appointment::where('status','=','1')->orderBy("id", "desc")->get();
        $total_subs = subs::count();
        $total_services = Services::count();
        return view('dashboard')->with(compact('total_appointments','total_subs','total_services','pending_appointments','pending_appointments_data'));
    }

    public function markAsCompleted($id){
        $data = Appointment::find($id);
        if ($data) {
            $data->status = '2';
            $data->save();
            return redirect(route('service'))->with(["success"=>"Appointment marked as  completed "]);
        }
        return redirect(route('service'))->with(["fail"=>"failed to perform operation "]);
    }
    public function markAsRejected($id){
        $data = Appointment::find($id);
        if ($data) {
            $data->status = '3';
            $data->save();
            return redirect(route('service'))->with(["success"=>"Appointment marked as  rejected "]);
        }
        return redirect(route('service'))->with(["fail"=>"failed to perform operation "]);
    }

    public function getPlan($type){
        $plan = Plans::where('type','=',"$type")->first();
        if($plan){
            return $plan;
        }
        else{
            return new Plans;
        }
    }
    public function updatebasic(Request $request){
        $request->validate([
            "title"=>'required|string',
            "show_price"=>'required|numeric',
            "price"=>'required|numeric',
            'service'=>'array'
        ]);
        $services  = $request['service'];
        $plans = $this->getPlan(1);
        $plans->name = $request['title'];
        $plans->show_price = $request['show_price'];
        $plans->price = $request['price'];
        $plans->type = 1;
        $plans->serv1 = $services[0];
        $plans->serv2 = $services[1];
        $plans->serv3 = $services[2];
        $plans->serv4 = $services[3];
        $plans->serv5 = $services[4];
        $plans->serv6 = $services[5];
        $plans->serv7 = $services[6];
        $plans->serv8 = $services[7];
        $plans->save();

        return redirect(route('gotoplans'));
    }
    public function updatepro(Request $request){
        $request->validate([
            "title"=>'required|string',
            "show_price"=>'required|numeric',
            "price"=>'required|numeric',
            'service'=>'array'
        ]);
        $services  = $request['service'];
        $plans = $this->getPlan(2);
        $plans->name = $request['title'];
        $plans->show_price = $request['show_price'];
        $plans->price = $request['price'];
        $plans->type = 2;
        $plans->serv1 = $services[0];
        $plans->serv2 = $services[1];
        $plans->serv3 = $services[2];
        $plans->serv4 = $services[3];
        $plans->serv5 = $services[4];
        $plans->serv6 = $services[5];
        $plans->serv7 = $services[6];
        $plans->serv8 = $services[7];
        $plans->save();

        return redirect(route('gotoplans'));
    }
    public function updatebusiness(Request $request){
        $request->validate([
            "title"=>'required|string',
            "show_price"=>'required|numeric',
            "price"=>'required|numeric',
            'service'=>'array'
        ]);
        $services  = $request['service'];
        $plans = $this->getPlan(3);
        $plans->name = $request['title'];
        $plans->show_price = $request['show_price'];
        $plans->price = $request['price'];
        $plans->type = 3;
        $plans->serv1 = $services[0];
        $plans->serv2 = $services[1];
        $plans->serv3 = $services[2];
        $plans->serv4 = $services[3];
        $plans->serv5 = $services[4];
        $plans->serv6 = $services[5];
        $plans->serv7 = $services[6];
        $plans->serv8 = $services[7];
        $plans->save();

        return redirect(route('gotoplans'));
    }
    public function gotoplans(){
        $plans = Plans::first();
        $proPlans = Plans::where('type','=',2)->first();
        $busPlans = Plans::where('type','=',3)->first();
        return view('plans')->with(compact('plans','proPlans','busPlans'));
    }
}
