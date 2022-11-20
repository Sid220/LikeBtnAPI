<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                <h1>{{ __("Websites:")}}</h1>
{{--                <script--}}
{{--                    src="https://cdn.jsdelivr.net/gh/kloverde/js-SelectAllCheckbox@latest/src/selectallcheckbox.min.js"></script>--}}
                <br>
                <hr>
                @if($websites->count() > 0)
                    <table>
                        <tr>
{{--                            <th><input type="checkbox" id="selectAllGroup1"></th>--}}
                            <th>ID</th>
                            <th>URL</th>
                            <th>{{ __("Likes")}}</th>
                            <th colspan="4">{{ __("Actions")}}</th>
                        </tr>
                    @foreach($websites as $website)
                        <tr>
{{--                            <td><input value="{{ $website->id }}" class="mt-1" type="checkbox" name="group1"></td>--}}
                            <td>{{ $website->id }}</td>
                            <td>{{ $website->url }}</td>
                            <td>{{ DB::table('likes')->where('website', $website->id)->value('likes') }}</td>
                            <td><a href="{{ LaravelLocalization::localizeUrl('/code/' . $website->id) }}"><button class="tiny" title="{{__("Get Code")}}..."><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                                        </svg></button></a> </td>
                            <td><a href="{{ LaravelLocalization::localizeUrl('/edit/' . $website->id) }}"><button class="tiny"
                                                                            title="{{__("Edit")}}...">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-pencil inline-block" viewBox="0 0 16 16">
                                            <path
                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </button></a></td>
                            <td><a href="{{ LaravelLocalization::localizeUrl('/delete/' . $website->id) }}"><button class="tiny inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition" title="{{__("Delete")}}..."
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-trash3 inline-block" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                        </svg>
                                    </button></a></td>
                            <td><a href="{{ LaravelLocalization::localizeUrl('/pages/' . $website->id) }}"><button class="tiny inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition" title="{{__("Pages")}}...">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-post" viewBox="0 0 16 16">
                                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                                            <path d="M4 6.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-7zm0-3a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                    </button></a></td>
                        </tr>
                    @endforeach
                    </table>
                @else
                    <p>{{ __("No websites!") }}</p>
                @endif
                <a href="{{ LaravelLocalization::localizeUrl('/add') }}"><button>{{ __("Add") }}</button></a>
            </div>
        </div>
{{--        <script>--}}
{{--            window.addEventListener("DOMContentLoaded", () => {--}}
{{--                const group1 = new CheckboxGroup(--}}
{{--                    "selectAllGroup1",--}}
{{--                    "group1",--}}
{{--                );--}}
{{--            });--}}
{{--        </script>--}}
    </div>
</x-app-layout>
