<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 2rem;">
                <form action="/internals/actuallyEdit" method="get">
                    <label>
                        Url: <input name="url" required type="text" value="{{ $websites[0]->url }}">
                    </label>
                    <input type="hidden" name="id" value="{{ $websites[0]->id }}"><br>
                    <a href="{{ route("dashboard") }}"><button type="button" class="tiny">{{ __("Cancel")}}</button></a> <input type="submit" value="{{ __("Save") }}">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
