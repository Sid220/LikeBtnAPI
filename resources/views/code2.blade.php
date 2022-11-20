 <p>{{ __("Include this where you want the like button to appear") }}:</p>
<pre><code class="language-html">{{ '<div id="likebtnapi-main"></div>' }}</code></pre>
<p>{{__("Include this after the button")}}: </p>
<pre id="cdn"><code class="language-html">{{ $script }}</code></pre><br>
<a href="{{ LaravelLocalization::localizeUrl('/dashboard') }}"><button>{{ __("Continue") }}</button></a><br>
    <link rel="stylesheet"
          href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/styles/default.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
