<x-app-layout>
    {{-- hero section --}}
    <div class="py-4 md:py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <h2 class="my-6 text-2xl font-semibold text-gray-800 ">
                {{ __("Hero Section :") }}
            </h2>
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800 ">
                    <form action="{{route('updateHero')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <label for="sitename" class="capitalize ">site name :</label>
                            <input type="text" id="sitename" name="site_name" placeholder="site name" class="bg-white  rounded-lg w-full mt-4" value="{{isset($info)?$info->site_name : old('site_name')}}">
                        </div>
                        <div class="mt-4">
                            <label for="herotext" class="capitalize">hero text :</label>
                            <input type="text" id="herotext" name="hero_text" placeholder="site name" class="bg-white  rounded-lg w-full mt-4" value="{{isset($info)?$info->hero_text : old('hero_text')}}">
                        </div>
                        <div class="mt-4">
                            <label for="subtext" class="capitalize">sub hero text :</label>
                            <textarea type="text" id="subtext" name="subhero_text" class="bg-white  rounded-lg w-full mt-4">{{isset($info)?$info->subhero_text : old('subhero_text')}}</textarea>
                        </div>
                        <div class="mt-4">
                            <label for="heroimg" class="capitalize">hero image :</label>
                            <input type="file" id="heroimg" name="hero_img" accept=".png,.jpeg,.jpg" class="bg-white border border-gray-600 rounded-lg w-full mt-4">
                        </div>
                        <div class="mt-4">
                            <x-secondary-button type="submit">
                                {{__("update Hero")}}
                            </x-secondary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- portfolio section  --}}
    <div class="py-4 md:py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <h2 class="my-6 text-2xl font-semibold text-gray-700">
                {{ __("Portfolio :") }}
            </h2>
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800 ">
                    <form action="{{route('updatePortfolio')}}" method="post">
                        @csrf
                        <div class="mt-4">
                            <label for="title" class="capitalize ">title:</label>
                            <input type="text" id="title" name="portfolio_title" placeholder="What we do" class="bg-white  rounded-lg w-full mt-4" value="{{isset($info)?$info->portfolio_title : old('portfolio_title')}}">
                        </div>
                        <div class="mt-4">
                            <label for="title" class="capitalize ">sub title:</label>
                            <input type="text" id="title" name="portfolio_subtitle" placeholder="lorem text" class="bg-white  rounded-lg w-full mt-4" value="{{isset($info)?$info->portfolio_subtext : old('portfolio_subtitle')}}">
                        </div>
                        <div class="mt-4">
                            <label for="subtext" class="capitalize">who we are ? :</label>
                            <textarea type="text" id="subtext" name="who_we_are" class="bg-white  rounded-lg w-full mt-4">{{isset($info)?$info->who_we_are : old('who_we_are')}}</textarea>
                        </div>
                        <div class="mt-4">
                            <label for="pd" class="capitalize ">Projects Delivered :</label>
                            <input type="number" id="pd" name="projects_delivered" placeholder="1000+" class="bg-white  rounded-lg w-full mt-4" value="{{isset($info)?$info->projects_delivered : old('projects_delivered')}}">
                        </div>
                        <div class="mt-4">
                            <label for="sc" class="capitalize">Satisfied Customers :</label>
                            <input type="number" id="sc" name="satisfied_customers" placeholder="500+" class="bg-white  rounded-lg w-full mt-4" value="{{isset($info)?$info->satisfied_customers : old('satisfied_customers')}}">
                        </div>
                        <div class="mt-4">
                            <label for="yoe" class="capitalize">Years Of Expreance :</label>
                            <input type="number" id="yoe" name="year_of_exp" placeholder="100+" class="bg-white  rounded-lg w-full mt-4" value="{{isset($info)?$info->year_of_exp : old('year_of_exp')}}">
                        </div>
                        <div class="mt-4">
                            <x-secondary-button type="submit">
                                {{__("update Portfolio")}}
                            </x-secondary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- service section  --}}
    <div class="py-4 md:py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <h2 class="my-6 text-2xl font-semibold text-gray-700">
                {{ __("Service :") }}
            </h2>
            <div class="bg-white   overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800 ">
                    <form action="{{route('updateServices')}}" method="post">
                        @csrf
                        <div class="">
                            <label for="title" class="capitalize ">title :</label>
                            <input type="text" id="title" name="service_title" placeholder="site name" class="bg-white  rounded-lg w-full mt-4" value="{{isset($info)?$info->service_title : old('service_title')}}">
                        </div>
                        <div class="mt-4">
                            <label for="subtext" class="capitalize">sub text :</label>
                            <input type="text" id="subtext" name="service_subtext" placeholder="site name" class="bg-white  rounded-lg w-full mt-4" value="{{isset($info)?$info->service_subtext : old('service_subtext')}}">
                        </div>
                        <div class="mt-4">
                            <label for="subtext" class="capitalize">who we are ? :</label>
                            <textarea type="text" id="subtext" name="who_we_are" class="bg-white  rounded-lg w-full mt-4">{{isset($info)?$info->who_we_are : old('who_we_are')}}</textarea>
                        </div>

                        <div class="mt-4">
                            <x-secondary-button type="submit">
                                {{__("update services")}}
                            </x-secondary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- careers section  --}}
    <div class="py-4 md:py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <h2 class="my-6 text-2xl font-semibold text-gray-700">
                {{ __("Careers :") }}
            </h2>
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800">
                    <form action="{{route('updateCareer')}}" method="post">
                        @csrf
                        <div class="">
                            <label for="title" class="capitalize ">title :</label>
                            <input type="text" id="title" name="careers_title" placeholder="site name" class="bg-white rounded-lg w-full mt-4" value="{{isset($info)?$info->careers_title : old('careers_title')}}">
                        </div>
                        <div class="mt-4">
                            <label for="subtext" class="capitalize">sub text :</label>
                            <input type="text" id="subtext" name="careers_subtext" placeholder="site name" class="bg-white rounded-lg w-full mt-4" value="{{isset($info)?$info->careers_subtext : old('careers_subtext')}}">
                        </div>

                        <div class="mt-4">
                            <x-secondary-button type="submit">
                                {{__("update careers")}}
                            </x-secondary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- footer serction  --}}
    <div class="py-4 md:py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <h2 class="my-6 text-2xl font-semibold text-gray-700">
                {{ __("Footer Section :") }}
            </h2>
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800">
                    <form action="{{route('updateFooter')}}" method="post">
                        @csrf
                        <div class="">
                            <label for="mobile" class="capitalize ">mobile :</label>
                            <input type="tel" id="mobile" name="mobile_no" placeholder="5264125632" class="bg-white rounded-lg w-full mt-4" value="{{isset($info)?$info->mobile : old('mobile')}}">
                            <x-input-error :messages="$errors->get('mobile_no')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="email" class="capitalize">Email :</label>
                            <input type="email" id="email" name="email_id" placeholder="example@example.com" class="bg-white rounded-lg w-full mt-4" value="{{isset($info)?$info->email : old('email')}}">
                            <x-input-error :messages="$errors->get('email_id')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="address" class="capitalize">Address :</label>
                            <input type="text" id="address" name="address" placeholder="demo strit, demo road 12" class="bg-white rounded-lg w-full mt-4" value="{{isset($info)?$info->address : old('address')}}">
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <label for="info" class="capitalize">Information :</label>
                            <textarea type="text" id="info" name="info" class="bg-white  rounded-lg w-full mt-4">{{isset($info)?$info->info : old('info')}}</textarea>
                            <x-input-error :messages="$errors->get('info')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-secondary-button type="submit">
                                {{__("update footer")}}
                            </x-secondary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
