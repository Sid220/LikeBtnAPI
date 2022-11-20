<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Get Code') }}
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
                <b>{{ __("Customize:")}} </b>
                @livewire('preview')<br>

               <button onclick="document.getElementById('code2').style.display='block'; this.style.display='none'" type="button">{{ __("Continue") }}</button><br>
                {!! $script !!}<br>
                <div id="code2" style="display: none">
                    @include('code2')
                </div>
            </div>
        </div>
        <script>
            const icon1 = document.getElementById("icon1");
            const icon2 = document.getElementById("icon2");
            function iconOnInput(element) {
                if(element.value === "custom") {
                    icon1.style.display = "block";
                    icon2.style.display = "block";
                }
                else {
                    icon1.style.display = "none";
                    icon2.style.display = "none";
                }
            }
            iconOnInput(document.getElementById("iconSet"));
        </script>
    </div>
    <link rel="stylesheet"
          href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/styles/default.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
</x-app-layout>
