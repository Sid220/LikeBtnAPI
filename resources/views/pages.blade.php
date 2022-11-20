<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>
    <style>
        svg {
            display: inline !important;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 2rem;">
                @if($pages->count() > 0)
                    <table>
                       <tr>
                           <th>{{ __("Page") }}</th><th>{{ __("Likes")}}</th>
                       </tr>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->page }}</td><td>{{ $page->likes }}</td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p>{{ __("No pages") }}</p><a href="{{ LaravelLocalization::localizeUrl('/code/' . $id) }}"><button>{{ __("install the code")}}</button></a>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
