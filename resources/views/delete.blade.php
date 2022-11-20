<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 2rem;">
                {{__("Are you sure you want to delete")}} {{ $websites[0]->url }}?<br>
                <a href="{{ LaravelLocalization::localizeUrl("/dashboard") }}"><button type="button" class="tiny">{{ __("Cancel")}}</button> <a href="/internals/actuallyDelete/{{ $websites[0]->id }}"><button>{{__("Yes")}}</button></a></a>
            </div>
        </div>
    </div>
</x-app-layout>
