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
                    <div class=" flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold text-gray-700">
                            {{ __("Subscribers") }}
                        </h2>
                    </div>
                    <div class="w-full">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                              <tr
                                class="text-xs  text-center font-semibold tracking-wide text-gray-500 uppercase border-b  bg-gray-50"
                              >

                              <th class="px-4 py-3">ids</th>
                              <th class="px-4 py-3">Title</th>
                                {{-- <th class="px-4 py-3">Status</th> --}}
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Actions</th>
                              </tr>
                            </thead>
                            <tbody
                              class="bg-white divide-y "
                            >
                            @foreach ($users as $user)
                              <tr class="text-gray-700 text-center">
                                <td>
                                    {{$user->id}}
                                </td>
                                <td>
                                    {{$user->email_ids}}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                  {{$user->created_at}}
                                </td>
                                {{-- <td class=""><span class="font-bold">&#8230;</span></td> --}}
                                <td>
                                    <a href="{{route('deletesubs',['id'=>$user->id])}}">
                                        <x-danger-button>
                                            {{__("delete")}}
                                        </x-danger-button>
                                    </a>
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
