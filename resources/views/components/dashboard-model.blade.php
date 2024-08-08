@props(["title","modal_id","btn"=>false])
<div x-data="{
{{$modal_id}}: false }">
    @if (!$btn)
    <button @click="{{$modal_id}} = true"
    {{ $attributes->merge(['class'=>"w-full default:h-32 px-4 py-2  default:text-xl capitalize font-medium leading-5 text-white transition-colors duration-150 border border-transparent rounded-lg focus:outline-none focus:shadow-outline-purple"])}}>{{$title}}</button>
    @else
    <button @click="{{$modal_id}} = true"
    {{ $attributes->merge(['class'=>"bg-sky-400 text-white font-sans duration-500 px-6 py-2 mx-4 hover:bg-sky-500 rounded"])}}>{{$title}}</button>
    @endif

    <div x-show="{{$modal_id}}" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div x-show="{{$modal_id}}" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2"
            @click.away="{{$modal_id}} = false" @keydown.escape="{{$modal_id}} = false"
            class="w-full px-6 py-4 overflow-auto bg-white rounded-t-lg sm:rounded-lg sm:max-w-4xl md:max-h-[80%]"
            role="dialog" id="model1">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-between items-center">
                <h2 class="my-6 text-2xl font-semibold text-gray-800 capitalize">
                    {{$title }} :
                </h2>
                <button
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded  hover: hover:text-gray-700"
                    aria-label="close" @click="{{$modal_id}} = false">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="">
                <main>
                    {{$slot}}
                </main>
            </div>
            <footer
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row ">
                <button @click="{{$modal_id}} = false"
                    class="w-full px-5 py-3 text-sm font-medium leading-5  text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg  sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
            </footer>
        </div>
    </div>
</div>
