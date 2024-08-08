<x-app-layout>
    @if (session()->has('success'))
    <div class="absulute mt-4" x-data="{modal:true}">
        <div x-show="modal" class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-sky-100 bg-sky-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-sky">
            <div class="flex items-center">
                <span class="capitalize">{{session()->get('success')}}</span>
            </div>
            <button @click="modal = false "><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                role="img" aria-hidden="true">
                <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg></button>
        </div>
    </div>
    @elseif (session()->has('fail'))
    <div class="" x-data="{modal:true}">
        <div x-show="modal" class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-red-100 bg-red-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red">
            <div class="flex items-center">
                <span class="capitalize">{{session()->get('fail')}}</span>
            </div>
            <button @click="modal = false "><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                role="img" aria-hidden="true">
                <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg></button>
        </div>
    </div>
    @endif
    <div class="py-4 md:py-12">
        <div class="grid gap-4 md:justify-center  md:grid-cols-2 lg:grid-cols-3 mx-auto sm:px-6 lg:px-8">
            {{-- hero section --}}
            <x-dashboard-model title="hero section" modal_id="model" class="bg-sky-600 active:bg-sky-600 hover:bg-sky-700 h-32">
                <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-gray-800 ">
                        <form action="{{route('updateHero')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <label for="sitename" class="capitalize ">site name :</label>
                                <input type="text" id="sitename" name="site_name" placeholder="site name" class="bg-white rounded-lg w-full" value="{{isset($info)?$info->site_name : old('site_name')}}">
                                <x-input-error :messages="$errors->get('site_name')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="herotext" class="capitalize">hero text :</label>
                                <input type="text" id="herotext" name="hero_text" placeholder="site name" class="bg-white rounded-lg w-full " value="{{isset($info)?$info->hero_text : old('hero_text')}}">
                                <x-input-error :messages="$errors->get('hero_text')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="subtext" class="capitalize">sub hero text :</label>
                                <textarea type="text" id="subtext" name="subhero_text" class="bg-white h-[8em]  rounded-lg w-full ">{{isset($info)?$info->subhero_text : old('subhero_text')}}</textarea>
                                <x-input-error :messages="$errors->get('subhero_text')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="heroimg" class="capitalize">hero image :</label>
                                <input type="file" id="heroimg" name="hero_img" accept=".png,.jpeg,.jpg" class="bg-white border border-gray-600 rounded-lg w-full ">
                                <x-input-error :messages="$errors->get('hero_img')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-secondary-button type="submit">
                                    {{__("update Hero")}}
                                </x-secondary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-dashboard-model>
            {{-- portfolio section  --}}
            <x-dashboard-model title="portfolio" modal_id="model2" class="bg-rose-600 active:bg-rose-600 hover:bg-rose-700 h-32">
                <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-gray-800 ">
                        <form action="{{route('updatePortfolio')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <label for="title" class="capitalize ">title:</label>
                                <input type="text" id="title" name="portfolio_title" placeholder="What we do" class="bg-white  rounded-lg w-full" value="{{isset($info)?$info->portfolio_title : old('portfolio_title')}}">
                                <x-input-error :messages="$errors->get('portfolio_title')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="title" class="capitalize ">sub title:</label>
                                <input type="text" id="title" name="portfolio_subtitle" placeholder="lorem text" class="bg-white  rounded-lg w-full" value="{{isset($info)?$info->portfolio_subtext : old('portfolio_subtitle')}}">
                                <x-input-error :messages="$errors->get('protfolio_subtitle')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="portfolio_img" class="capitalize">portfolio image :</label>
                                <input type="file" id="portfolio_img" name="portfolio_img" accept=".png,.jpeg,.jpg" class="bg-white border border-gray-600 rounded-lg w-full ">
                            </div>
                            <div class="">
                                <label for="subtext" class="capitalize">who we are ? :</label>
                                <textarea type="text" id="subtext" name="who_we_are" class="bg-white h-[10em] rounded-lg w-full">{{isset($info)?$info->who_we_are : old('who_we_are')}}</textarea>
                                <x-input-error :messages="$errors->get('who_we_are')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="pd" class="capitalize ">Projects Delivered :</label>
                                <input type="number" id="pd" name="projects_delivered" placeholder="1000+" class="bg-white  rounded-lg w-full" value="{{isset($info)?$info->projects_delivered : old('projects_delivered')}}">
                                <x-input-error :messages="$errors->get('projects_delivered')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="sc" class="capitalize">Satisfied Customers :</label>
                                <input type="number" id="sc" name="satisfied_customers" placeholder="500+" class="bg-white  rounded-lg w-full" value="{{isset($info)?$info->satisfied_customers : old('satisfied_customers')}}">
                                <x-input-error :messages="$errors->get('satesfied_customers')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="yoe" class="capitalize">Years Of Expreance :</label>
                                <input type="number" id="yoe" name="year_of_exp" placeholder="100+" class="bg-white  rounded-lg w-full" value="{{isset($info)?$info->year_of_exp : old('year_of_exp')}}">
                                <x-input-error :messages="$errors->get('year_of_exp')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-secondary-button type="submit">
                                    {{__("update Portfolio")}}
                                </x-secondary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-dashboard-model>
            {{-- service section  --}}
            <x-dashboard-model title="services" modal_id="services" class="bg-yellow-600 active:bg-yellow-600 hover:bg-yellow-700 h-32">
                <div class="bg-white   overflow-hidden shadow-sm sm:rounded-lg">
                    <div class=" text-gray-800 ">
                        <form action="{{route('updateServices')}}" method="post">
                            @csrf
                            <div class="">
                                <label for="title" class="capitalize ">title :</label>
                                <input type="text" id="title" name="service_title" placeholder="site name" class="bg-white  rounded-lg w-full " value="{{isset($info)?$info->service_title : old('service_title')}}">
                                <x-input-error :messages="$errors->get('service_title')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="subtext" class="capitalize">sub text :</label>
                                <input type="text" id="subtext" name="service_subtext" placeholder="site name" class="bg-white  rounded-lg w-full " value="{{isset($info)?$info->service_subtext : old('service_subtext')}}">
                                <x-input-error :messages="$errors->get('service_subtext')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-secondary-button type="submit">
                                    {{__("update services")}}
                                </x-secondary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-dashboard-model>
            {{-- contact us  section  --}}
            <x-dashboard-model title="contact us" modal_id="contact" class="bg-green-600 active:bg-green-600 hover:bg-green-700 h-32">
                <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                    <div class=" text-gray-800">
                        <form action="{{route('updateCareer')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <label for="title" class="capitalize ">title :</label>
                                <input type="text" id="title" name="contact_title" placeholder="site name" class="bg-white rounded-lg w-full" value="{{isset($info)?$info->careers_title : old('careers_title')}}">
                                <x-input-error :messages="$errors->get('contact_title')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="subtext" class="capitalize">sub text :</label>
                                <input type="text" id="subtext" name="contact_subtext" placeholder="site name" class="bg-white rounded-lg w-full" value="{{isset($info)?$info->careers_subtext : old('careers_subtext')}}">
                                <x-input-error :messages="$errors->get('contact_subtext')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="contactimg" class="capitalize">contact image :</label>
                                <input type="file" id="contactimg" name="contact_img" accept=".png,.jpeg,.jpg" class="bg-white border border-gray-600 rounded-lg w-full ">
                                <x-input-error :messages="$errors->get('contact_img')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-secondary-button type="submit">
                                    {{__("update careers")}}
                                </x-secondary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-dashboard-model>
            {{-- footer serction  --}}
            <x-dashboard-model title="footer" modal_id="footer" class="bg-slate-600 active:bg-slate-600 hover:bg-slate-700 h-32">
                <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                    <div class=" text-gray-800">
                        <form action="{{route('updateFooter')}}" method="post">
                            @csrf
                            <div class="">
                                <label for="mobile" class="capitalize ">mobile :</label>
                                <input type="tel" id="mobile" name="mobile_no" placeholder="5264125632" class="bg-white rounded-lg w-full" value="{{isset($info)?$info->mobile : old('mobile')}}">
                                <x-input-error :messages="$errors->get('mobile_no')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="email" class="capitalize">Email :</label>
                                <input type="email" id="email" name="email_id" placeholder="example@example.com" class="bg-white rounded-lg w-full" value="{{isset($info)?$info->email : old('email')}}">
                                <x-input-error :messages="$errors->get('email_id')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="address" class="capitalize">Address :</label>
                                <input type="text" id="address" name="address" placeholder="demo strit, demo road 12" class="bg-white rounded-lg w-full" value="{{isset($info)?$info->address : old('address')}}">
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                            <div class="">
                                <label for="info" class="capitalize">Information :</label>
                                <textarea type="text" id="info" name="info" class="bg-white h-[10em]  rounded-lg w-full">{{isset($info)?$info->info : old('info')}}</textarea>
                                <x-input-error :messages="$errors->get('info')" class="mt-2" />
                            </div>
                            <div class="">
                                <x-secondary-button type="submit">
                                    {{__("update footer")}}
                                </x-secondary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-dashboard-model>
        </div>
</x-app-layout>
