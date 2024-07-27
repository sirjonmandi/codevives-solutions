<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800">
                    <div class=" flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold text-gray-700">
                            {{ __("Orders") }}
                        </h2>
                        <span class="">+</span>
                    </div>
                    <div class="w-full grid gap-4 grid-cols-4 justify-items-center">

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
                        <button
          @click="openModal"
          class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        >
          Add services
        </button>
                                        <!-- Modal backdrop. This what you want to place close to the closing body tag -->
<div
x-show="isModalOpen"
x-transition:enter="transition ease-out duration-150"
x-transition:enter-start="opacity-0"
x-transition:enter-end="opacity-100"
x-transition:leave="transition ease-in duration-150"
x-transition:leave-start="opacity-100"
x-transition:leave-end="opacity-0"
class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
>
<!-- Modal -->
<div
  x-show="isModalOpen"
  x-transition:enter="transition ease-out duration-150"
  x-transition:enter-start="opacity-0 transform translate-y-1/2"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in duration-150"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0  transform translate-y-1/2"
  @click.away="closeModal"
  @keydown.escape="closeModal"
  class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg sm:rounded-lg sm:m-4 sm:max-w-xl"
  role="dialog"
  id="modal"
>
  <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
  <header class="flex justify-end">
    <button
      class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded  hover: hover:text-gray-700"
      aria-label="close"
      @click="closeModal"
    >
      <svg
        class="w-4 h-4"
        fill="currentColor"
        viewBox="0 0 20 20"
        role="img"
        aria-hidden="true"
      >
        <path
          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
          clip-rule="evenodd"
          fill-rule="evenodd"
        ></path>
      </svg>
    </button>
  </header>
  <!-- Modal body -->
  <div class="mt-4 mb-6">
    <!-- Modal title -->
    <p
      class="mb-2 text-lg font-semibold text-gray-700 "
    >
      Add servives
    </p>
    <!-- Modal description -->
    <main>
        <form action="{{route('addService')}}" method="post">
            @csrf
            <div class="">
                <label for="title" class="capitalize ">title :</label>
                <input type="text" id="title" name="service_title" placeholder="service name" class="bg-white rounded-lg w-full mt-4" value="{{isset($info)?$info->careers_title : old('service_title')}}">
                <x-input-error :messages="$errors->get('service_title')" class="mt-2" />
            </div>
            <div class="mt-4">
                <label for="price" class="capitalize">price :</label>
                <input type="text" id="price" name="price" placeholder="Amount" class="bg-white rounded-lg w-full mt-4" value="{{isset($info)?$info->careers_subtext : old('price')}}">
                <x-input-error :messages="$errors->get('price')" class="mt-2" />

            </div>
            <div class="mt-4">
                <label for="cover_img" class="capitalize">Cover image :</label>
                <input type="file" id="cover_img" name="cover_img" accept=".png,.jpeg,.jpg" class="bg-white border border-gray-600 rounded-lg w-full mt-4">
                <x-input-error :messages="$errors->get('cover_img')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-primary-button type="submit">
                    {{__("Add service")}}
                </x-primary-button>
                <x-secondary-button type="reset">
                    {{__("reset")}}
                </x-secondary-button>
            </div>
        </form>
    </main>
  </div>
  <footer
    class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row "
  >
    <button
      @click="closeModal"
      class="w-full px-5 py-3 text-sm font-medium leading-5  text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg  sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
    >
      Cancel
    </button>
  </footer>
</div>
</div>
<!-- End of modal backdrop -->
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
                              <tr class="text-gray-700">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div
                                      class="relative hidden w-14 h-14 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="{{asset('assets/hero-Z8QgJyL_.jpg')}}"
                                        alt=""
                                        loading="lazy"
                                      />
                                  </div>
                                </td>
                                <td>

                                </td>
                                <td class="px-4 py-3 text-sm">
                                  $ 863.45
                                </td>
                                {{-- <td class="px-4 py-3 text-xs">
                                  <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                  >
                                    Approved
                                  </span>
                                </td> --}}
                                <td class="px-4 py-3 text-sm">
                                  6/10/2020
                                </td>
                                <td class=""><span class="font-bold">&#8230;</span></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
