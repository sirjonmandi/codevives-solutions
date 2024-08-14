<x-app-layout>
    <div class="py-4 md:py-12">
        <div class="grid gap-4 md:justify-center md:grid-cols-2 lg:grid-cols-3 mx-auto sm:px-6 lg:px-8">
            {{-- basic plan section --}}
            <x-dashboard-model title="basic plan" modal_id="basic"
                class="bg-sky-600 active:bg-sky-600 hover:bg-sky-700 h-32">
                <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-gray-800 ">
                        <form action="{{ route('updatebasic') }}" method="post">
                            @csrf
                            <div class="">
                                <label for="basicTitle" class="capitalize ">name :</label>
                                <input type="text" id="basicTitle" name="title" placeholder="title"
                                    class="bg-white rounded-lg w-full"
                                    value="{{ isset($plans) ? $plans->name : old('title') }}">
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            <div class="flex gap-2 border-b-2 pb-4">
                                <div class="w-full">
                                    <label for="showPrice" class="capitalize ">display price :</label>
                                    <input type="number" id="showPrice" name="show_price" placeholder="Display price"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($plans) ? $plans->show_price : old('show_price') }}">
                                    <x-input-error :messages="$errors->get('show_price')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="price" class="capitalize ">real price :</label>
                                    <input type="number" id="price" name="price" placeholder="price"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($plans) ? $plans->price : old('price') }}">
                                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 1 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 1"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($plans) ? $plans->serv1 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 2 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 2"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($plans) ? $plans->serv2 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 3 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 3"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($plans) ? $plans->serv3 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 4 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 4"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($plans) ? $plans->serv4 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div><div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 5:</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 5"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($plans) ? $plans->serv5 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 6 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 6"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($plans) ? $plans->serv6  : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div><div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 7 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 7"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($plans) ? $plans->serv7  : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 8 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 8"
                                        class="bg-white rounded-lg w-full"
                                        value="{{isset($plans) ? $plans->serv8  : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div>
                            <div class="mt-4">
                                <x-secondary-button type="submit">
                                    {{ __('update plan') }}
                                </x-secondary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-dashboard-model>
            {{-- pro plan section --}}
            <x-dashboard-model title="pro plan" modal_id="pro"
                class="bg-slate-600 active:bg-slate-600 hover:bg-slate-700 h-32">
                <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-gray-800 ">
                        <form action="{{ route('updatepro') }}" method="post">
                            @csrf
                            <div class="">
                                <label for="basicTitle" class="capitalize ">name :</label>
                                <input type="text" id="basicTitle" name="title" placeholder="title"
                                    class="bg-white rounded-lg w-full"
                                    value="{{ isset($proPlans) ? $proPlans->name : old('title') }}">
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            <div class="flex gap-2 border-b-2 pb-4">
                                <div class="w-full">
                                    <label for="showPrice" class="capitalize ">display price :</label>
                                    <input type="number" id="showPrice" name="show_price" placeholder="Display price"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($proPlans) ? $proPlans->show_price : old('show_price') }}">
                                    <x-input-error :messages="$errors->get('show_price')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="price" class="capitalize ">real price :</label>
                                    <input type="number" id="price" name="price" placeholder="price"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($proPlans) ? $proPlans->price : old('price') }}">
                                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 1 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 1"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($proPlans) ? $proPlans->serv1 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 2 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 2"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($proPlans) ? $proPlans->serv2 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 3 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 3"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($proPlans) ? $proPlans->serv3 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 4 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 4"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($proPlans) ? $proPlans->serv4 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div><div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 5:</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 5"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($proPlans) ? $proPlans->serv5 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 6 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 6"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($proPlans) ? $proPlans->serv6  : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div><div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 7 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 7"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($proPlans) ? $proPlans->serv7  : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 8 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 8"
                                        class="bg-white rounded-lg w-full"
                                        value="{{isset($proPlans) ? $proPlans->serv8  : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div>
                            <div class="mt-4">
                                <x-secondary-button type="submit">
                                    {{ __('update plan') }}
                                </x-secondary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-dashboard-model>
            {{-- business plan section --}}
            <x-dashboard-model title="business plan" modal_id="business"
                class="bg-yellow-600 active:bg-yellow-600 hover:bg-yellow-700 h-32">
                <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-gray-800 ">
                        <form action="{{ route('updatebusiness') }}" method="post">
                            @csrf
                            <div class="">
                                <label for="basicTitle" class="capitalize ">name :</label>
                                <input type="text" id="basicTitle" name="title" placeholder="title"
                                    class="bg-white rounded-lg w-full"
                                    value="{{ isset($busPlans) ? $busPlans->name : old('title') }}">
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            <div class="flex gap-2 border-b-2 pb-4">
                                <div class="w-full">
                                    <label for="showPrice" class="capitalize ">display price :</label>
                                    <input type="number" id="showPrice" name="show_price" placeholder="Display price"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($busPlans) ? $busPlans->show_price : old('show_price') }}">
                                    <x-input-error :messages="$errors->get('show_price')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="price" class="capitalize ">real price :</label>
                                    <input type="number" id="price" name="price" placeholder="price"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($busPlans) ? $busPlans->price : old('price') }}">
                                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 1 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 1"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($busPlans) ? $busPlans->serv1 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 2 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 2"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($busPlans) ? $busPlans->serv2 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 3 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 3"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($busPlans) ? $busPlans->serv3 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 4 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 4"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($busPlans) ? $busPlans->serv4 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div><div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 5:</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 5"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($busPlans) ? $busPlans->serv5 : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 6 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 6"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($busPlans) ? $busPlans->serv6  : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div><div class="flex gap-2">
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 7 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 7"
                                        class="bg-white rounded-lg w-full"
                                        value="{{ isset($busPlans) ? $busPlans->serv7  : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <label for="sitename" class="capitalize ">service 8 :</label>
                                    <input type="text" id="sitename" name="service[]" placeholder="this is service 8"
                                        class="bg-white rounded-lg w-full"
                                        value="{{isset($busPlans) ? $busPlans->serv8  : old('service') }}">
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>
                            </div>
                            <div class="mt-4">
                                <x-secondary-button type="submit">
                                    {{ __('update plan') }}
                                </x-secondary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-dashboard-model>
        </div>
    </div>
</x-app-layout>
