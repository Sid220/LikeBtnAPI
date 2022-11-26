<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        <center>
        {{ $logo }}<br>
        <style>
            #langdrop img {
                width: 20px;
                margin-right: 5px;
                display: inline-block;
            }
        </style>
        </center>
        <!-- Language Dropdown -->
        <div class="ml-3 relative" id="langdrop" >
            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        @if(App::currentLocale() == "en")
                                            <img src="{{ Config::get('app.cdn') }}/gb.svg" alt="UK flag"> {{__("English")}}
                                        @elseif(App::currentLocale() == "es")
                                            <img src="{{ Config::get('app.cdn') }}/es.svg" alt="Spain flag"> {{__("Spanish")}}
                                        @elseif(App::currentLocale() == "ja")
                                            <img style="border: 0.5px solid grey; border-radius: 50%;" src="{{ Config::get('app.cdn') }}/jp.svg" alt="Japan flag"> {{ __("Japanese") }}
                                        @elseif(App::currentLocale() == "fr")
                                            <img src="{{ Config::get('app.cdn') }}/fr.svg" alt="France flag"> {{ __("French") }}
                                        @elseif(App::currentLocale() == "it")
                                            <img src="{{ Config::get('app.cdn') }}/it.svg" alt="Italy flag"> {{ __("Italian") }}
                                        @else
                                            {{ __("Language") }}
                                        @endif
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                </x-slot>

                <x-slot name="content">

                    @if(!(App::getLocale() == "en"))
                        <x-jet-dropdown-link href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                            <img src="{{ Config::get('app.cdn') }}/gb.svg" alt="UK flag"> {{ __("English") }}
                        </x-jet-dropdown-link>
                    @endif
                    @if(!(App::getLocale() == "es"))
                        <x-jet-dropdown-link href="{{ LaravelLocalization::getLocalizedURL('es') }}">
                            <img src="{{ Config::get('app.cdn') }}/es.svg" alt="Spain flag"> {{ __("Spanish") }}
                        </x-jet-dropdown-link>
                    @endif
                    @if(!(App::getLocale() == "fr"))
                        <x-jet-dropdown-link href="{{ LaravelLocalization::getLocalizedURL('fr') }}">
                            <img src="{{ Config::get('app.cdn') }}/fr.svg" alt="France flag"> {{ __("French") }}
                        </x-jet-dropdown-link>
                    @endif
                    @if(!(App::getLocale() == "ja"))
                        <x-jet-dropdown-link href="{{ LaravelLocalization::getLocalizedURL('ja') }}">
                            <img style="border: 0.5px solid grey; border-radius: 50%;" src="{{ Config::get('app.cdn') }}/jp.svg" alt="Japan flag"> {{ __("Japanese") }}
                        </x-jet-dropdown-link>
                    @endif
                    @if(!(App::getLocale() == "it"))
                        <x-jet-dropdown-link href="{{ LaravelLocalization::getLocalizedURL('it') }}">
                            <img src="{{ Config::get('app.cdn') }}/it.svg" alt="Italy flag"> {{ __("Italian") }}
                        </x-jet-dropdown-link>
                    @endif

                    <div class="border-t border-gray-100"></div>
                </x-slot>
            </x-jet-dropdown>
        </div>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
