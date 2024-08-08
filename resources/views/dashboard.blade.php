<x-app-layout>

    <main class=" mt-8 h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          <!-- Responsive cards -->
          <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div
              class="flex items-center p-4 bg-white rounded-lg shadow-xs"
            >
              <div
                class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full "
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                  ></path>
                </svg>
              </div>
              <div>
                <p
                  class="mb-2 text-sm font-medium text-gray-600"
                >
                  Total Subscribers
                </p>
                <p
                  class="text-lg font-semibold text-gray-700"
                >
                  {{$total_subs}}
                </p>
              </div>
            </div>
            <!-- Card -->
            <div
              class="flex items-center p-4 bg-white rounded-lg shadow-xs"
            >
              <div
                class="p-3 mr-4 text-green-500 bg-green-100 rounded-full"
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
              <div>
                <p
                  class="mb-2 text-sm font-medium text-gray-600 "
                >
                 Completed Appointments
                </p>
                <p
                  class="text-lg font-semibold text-gray-700 "
                >
                  {{$total_appointments}}
                </p>
              </div>
            </div>
            <!-- Card -->
            <div
              class="flex items-center p-4 bg-white rounded-lg shadow-xs"
            >
              <div
                class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full"
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                  ></path>
                </svg>
              </div>
              <div>
                <p
                  class="mb-2 text-sm font-medium text-gray-600 "
                >
                  Total services
                </p>
                <p
                  class="text-lg font-semibold text-gray-700 "
                >
                 {{$total_services}}
                </p>
              </div>
            </div>
            <!-- Card -->
            <div
              class="flex items-center p-4 bg-white rounded-lg shadow-xs"
            >
              <div
                class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full "
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
              <div>
                <p
                  class="mb-2 text-sm font-medium text-gray-600"
                >
                  Pending Appointments
                </p>
                <p
                  class="text-lg font-semibold text-gray-700"
                >
                 {{$pending_appointments}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </main>
    <div class="py-4 md:py-12">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-800">
                        <div class="mb-4">
                            <h2 class="text-2xl font-semibold text-gray-700">
                                {{ __('Pending appointments') }}
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
                                        <th class="px-4 py-3">description</th>
                                        <th class="px-4 py-3">Status</th>
                                        <th class="px-4 py-3">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody
                                    class="bg-white divide-y "
                                    >
                                    @foreach ($pending_appointments_data as $service)
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
                                        <td class="px-4 py-3 text-xs text-justify ">
                                            <p class="line-clamp-3"> {{$service->desc}}</p>
                                        </td>
                                        <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-500 dark:text-yellow-100"
                                        >
                                            Pending
                                        </span>
                                        </td>
                                        <td class="">
                                            <div class="" x-data="{ open: false }">
                                                <button @click="open = !open" @click.away="open = false" class=" text-black text-2xl px-4 py-2 rounded-md focus:outline-none">
                                                    &#8230;
                                                </button>
                                                <div x-show="open" class="absolute mt-2 w-48 text-left bg-white rounded-md shadow-lg z-10">
                                                    <a href="{{route('markAsCompleted',['id'=>$service->id])}}" class="block px-4 py-2 capitalize text-green-800 hover:bg-green-200">mark as complete</a>
                                                    <a href="{{route('markAsRejected',['id'=>$service->id])}}" class="block px-4 py-2 capitalize text-red-800 hover:bg-red-200">reject</a>
                                                </div>
                                            </div>
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
        </div>
    </div>

    <div class="" x-data="{modal:false}">
        <div x-show="modal" class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-green-100 bg-green-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-green">
            <div class="flex items-center">
                <span>Star this project on GitHub</span>
            </div>
            <button @click="modal = false "><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                role="img" aria-hidden="true">
                <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg></button>
        </div>
    </div>
</x-app-layout>
