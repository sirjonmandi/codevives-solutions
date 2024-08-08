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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800">
                    <div class="mb-4">
                        <h2 class="text-2xl font-semibold text-gray-700">
                            {{ __("Appointments Details") }}
                        </h2>
                        <div class="w-full ">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                  <tr
                                    class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b  bg-gray-50"
                                  >
                                    <th class="px-4 py-3">client name</th>
                                    <th class="px-4 py-3">contact</th>
                                    <th class="px-4 py-3">email</th>
                                    <th class="px-4 py-3">Service name</th>
                                    <th class="px-4 py-3">Status</th>
                                    {{-- <th class="px-4 py-3">Actions</th> --}}
                                  </tr>
                                </thead>
                                <tbody
                                  class="bg-white divide-y "
                                >
                                @foreach ($appointments as $service)
                                  <tr class="text-gray-700 text-center">

                                    <td>
                                        {{$service->name}}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                     {{$service->contact}}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                     {{$service->email}}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{$service->service_name}}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        @if ($service->status == 1)
                                        <span
                                          class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-500 dark:text-yellow-100"
                                        >
                                          Pending
                                        </span>
                                        @elseif ($service->status == 2)
                                        <span
                                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-500 dark:text-green-100"
                                        >
                                          completed
                                        </span>
                                        @elseif ($service->status == 3)
                                        <span
                                          class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-500 dark:text-red-100"
                                        >
                                          rejected
                                        </span>
                                        @endif
                                    </td>
                                    {{-- <td class="">
                                        <div class="" x-data="{ open: false }">
                                            <button @click="open = !open" @click.away="open = false" class=" text-black text-2xl px-4 py-2 rounded-md focus:outline-none">
                                                &#8230;
                                            </button>
                                            <div x-show="open" class="absolute mt-2 w-48 text-left bg-white rounded-md shadow-lg z-10">
                                                <a href="#" class="block px-4 py-2 capitalize text-gray-800 hover:bg-gray-200">see details</a>
                                            </div>
                                        </div>
                                    </td> --}}
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-800">
                    <div class=" flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold text-gray-700">
                            {{ __("Services Offer") }}
                        </h2>
                        <x-dashboard-model title="add servece" modal_id="service" class=" text-sm bg-sky-600 hover:bg-sky-700 active:bg-sky-600">
                            <form action="{{route('addService')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="">
                                    <label for="title" class="capitalize ">title :</label>
                                    <input type="text" id="title" name="service_title" placeholder="service name" class="bg-white rounded-lg w-full" value="{{isset($info)?$info->careers_title : old('service_title')}}">
                                    <x-input-error :messages="$errors->get('service_title')" class="mt-2" />
                                </div>
                                <div class="">
                                    <label for="price" class="capitalize">price :</label>
                                    <input type="text" id="price" name="price" placeholder="Amount" class="bg-white rounded-lg w-full" value="{{isset($info)?$info->careers_subtext : old('price')}}">
                                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                </div>
                                <div class="">
                                    <label for="desc" class="capitalize">Description :</label>
                                    <textarea type="text" id="desc" name="desc"class="bg-white rounded-lg w-full" spellcheck="true"></textarea>
                                    <x-input-error :messages="$errors->get('desc')" class="mt-2" />
                                </div>
                                <div class="">
                                    <label for="cover_img" class="capitalize">Cover image :</label>
                                    <input type="file" id="cover_img" name="img" accept=".png,.jpeg,.jpg" class="bg-white border border-gray-600 rounded-lg w-full">
                                    <x-input-error :messages="$errors->get('img')" class="mt-2" />
                                </div>
                                <div class="mt-4">
                                    <x-primary-button class="bg-sky-600 hover:bg-sky-700 active:bg-sky-600" type="submit">
                                        {{__("Add service")}}
                                    </x-primary-button>
                                    <x-primary-button class="bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-500" type="reset">
                                        {{__("reset")}}
                                    </x-primary-button>
                                </div>
                            </form>
                        </x-dashboard-model>
                    </div>
                    <div class="w-full ">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                              <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b  bg-gray-50"
                              >
                                <th class="px-4 py-3">Service</th>
                                <th class="px-4 py-3">Title</th>
                                <th class="px-4 py-3">Amount</th>
                                {{-- <th class="px-4 py-3">Status</th> --}}
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Actions</th>
                              </tr>
                            </thead>
                            <tbody
                              class="bg-white divide-y "
                            >
                            @foreach ($services as $service)
                              <tr class="text-gray-700">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div
                                      class="relative hidden w-14 h-14 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="{{asset("storage/$service->cover_img")}}"
                                        alt=""
                                        loading="lazy"
                                      />
                                  </div>
                                </td>
                                <td>
                                    {{$service->name}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                 {{$service->price}}
                                </td>
                                {{-- <td class="px-4 py-3 text-xs">
                                  <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                  >
                                    Approved
                                  </span>
                                </td> --}}
                                <td class="px-4 py-3 text-sm">
                                  {{$service->created_at}}
                                </td>
                                {{-- <td class=""><span class="font-bold">&#8230;</span></td> --}}
                                <td class="flex items-center">
                                    <a href="{{route('deleteservice',['id'=>$service->id])}}">
                                        <x-danger-button>
                                            delete
                                        </x-danger-button>
                                    </a>
                                    <x-dashboard-model title="Edit" modal_id="edit{{$service->id}}" btn=true>
                                        <form action="{{route('changeservice',['id'=>$service->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="">
                                                <label for="title" class="capitalize ">title :</label>
                                                <input type="text" id="title" name="service_title" placeholder="service name" class="bg-white rounded-lg w-full" value="{{isset($service)?$service->name : old('service_title')}}">
                                                <x-input-error :messages="$errors->get('service_title')" class="mt-2" />
                                            </div>
                                            <div class="">
                                                <label for="price" class="capitalize">price :</label>
                                                <input type="text" id="price" name="price" placeholder="Amount" class="bg-white rounded-lg w-full" value="{{isset($service)?$service->price : old('price')}}">
                                                <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                            </div>
                                            <div class="">
                                                <label for="desc" class="capitalize">Description :</label>
                                                <textarea type="text" id="desc" name="desc"class="bg-white rounded-lg w-full" spellcheck="true">{{isset($service)?$service->desc : old('desc')}}</textarea>
                                                <x-input-error :messages="$errors->get('desc')" class="mt-2" />
                                            </div>
                                            <div class="">
                                                <label for="cover_img" class="capitalize">Cover image :</label>
                                                <input type="file" id="cover_img" name="img" accept=".png,.jpeg,.jpg" class="bg-white border border-gray-600 rounded-lg w-full">
                                                <x-input-error :messages="$errors->get('img')" class="mt-2" />
                                            </div>
                                            <div class="mt-4">
                                                <x-primary-button class="bg-sky-600 hover:bg-sky-700 active:bg-sky-600" type="submit">
                                                    {{__("Update service")}}
                                                </x-primary-button>
                                            </div>
                                        </form>
                                    </x-dashboard-model>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
