<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 2rem;">
                <form action="/internals/actuallyAdd" method="get">
                    <label>
                        {{ __('URLs seperated by "|"') }} <input name="url" type="text" required placeholder="http://example.com|https://example.com|http://www.example.com|https://www.example.com">
                    </label><br>
                    <a href="{{ LaravelLocalization::localizeUrl('/dashboard') }}"><button type="button" class="tiny">{{ __("Cancel")}}</button></a> <input type="submit" value="{{ __("Add") }}">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
