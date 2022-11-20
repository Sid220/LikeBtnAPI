<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <form method="get">
        <label>
            {{ __("Icon:")}} <select name="iconSet" oninput="iconOnInput(this)" id="iconSet"
                          value="{{ $_GET["iconSet"] ?? "default" }}">
                <optgroup label="Bootstrap Icons">
                    <option value="default" @if(($_GET['iconSet'] ?? null) === "default")
                        selected
                        @endif>Thumb
                    </option>
                    <option value="heart" @if(($_GET['iconSet'] ?? null) === "heart")
                        selected
                        @endif>Heart
                    </option>
                    <option value="star" @if(($_GET['iconSet'] ?? null) === "star")
                        selected
                        @endif>Star
                    </option>
                </optgroup>
                <optgroup label="Fontawesome">
                    <option value="fontawesome" @if(($_GET['iconSet'] ?? null) === "fontawesome")
                        selected
                        @endif>Thumb
                    </option>
                    <option value="heart-fontawesome" @if(($_GET['iconSet'] ?? null) === "heart-fontawesome")
                        selected
                        @endif>Heart
                    </option>
                    <option value="star-fontawesome" @if(($_GET['iconSet'] ?? null) === "star-fontawesome")
                        selected
                        @endif>Star
                    </option>
                </optgroup>
                <optgroup label="{{ __("Other")}}">
                    <option value="facebook" @if(($_GET['iconSet'] ?? null) === "facebook")
                        selected
                        @endif>{{ __("FaceBook") }}</option>
                    <option value="custom" @if(($_GET['iconSet'] ?? null) === "custom")
                        selected
                        @endif>{{ __("Custom")}}
                    </option>
                </optgroup>
            </select>
        </label>
        <label @if(($_GET['iconSet'] ?? null) === "star-fontawesome")
                   style="display: none"
               @endif id="icon1">
            {{ __("Icon:") }} <textarea name="likeSvg" placeholder="HTML">{{ $_GET["likeSvg"] ?? "" }}</textarea>
        </label><br>
        <label @if(($_GET['iconSet'] ?? null) === "star-fontawesome")
                   style="display: none"
               @endif id="icon2">
            {{ __("Icon filled:") }} <textarea name="likeSvgFill" placeholder="HTML">{{ $_GET["likeSvgFill"] ?? "" }}</textarea>
        </label><br>
        <label>
            {{ __("Don't show count")  }}: <input type="checkbox" name="dontShowCount"
            @if(($_GET["dontShowCount"] ?? "off") === "on")
                 checked
            @endif
            >
        </label><br>
        <label>
            {{ __("Regular numbers") }}: <input type="checkbox" name="regularNumber"
                @if(($_GET["regularNumber"] ?? 'off') === 'on')
                checked
                @endif>
        </label><a target="_blank" href="/docs/1.0/human"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
            </svg></a>
        <label><br><br>
            {{ __("Text:") }} <input type="text" value="{{ $_GET["likeText"] ?? "Like" }}" name="likeText">
        </label><br><br>
        <label>
            {{ __("Custom CSS:")}} <a target="_blank" href="/docs/1.0/customcss"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                </svg></a><br> <textarea id="customCSS" name="customCSS" placeholder='#likebtnapi-main {
    padding: 10px 15px;
    background: #0080ff;
    font-size: 18px;
    font-family: "Open Sans", sans-serif;
    border-radius: 5px;
    color: #e8efff;
    outline: none;
    border: none;
    cursor: pointer;
    box-shadow: none;
}
#likebtnapi-main span.likebtnapi-icon.clicked {
    color: red;
}
'>{{ $_GET["customCSS"] ?? "" }}</textarea>
        </label>
        {{ __("Themes") }}: <button onclick='document.getElementById("customCSS").innerText = `#likebtnapi-main {
    padding: 10px 15px;
    background: #0080ff;
    font-size: 18px;
    font-family: "Open Sans", sans-serif;
    border-radius: 5px;
    color: #e8efff;
    outline: none;
    border: none;
    cursor: pointer;
    box-shadow: none;
    }`' style='padding: 10px 15px;
    background: #0080ff;
    font-size: 18px;
    font-family: "Open Sans", sans-serif;
    border-radius: 5px;
    color: #e8efff;
    outline: none;
    border: none;
    text-transform: none;
    cursor: pointer;
    box-shadow: none;'>{{ __("Blue") }}</button> <button onclick='document.getElementById("customCSS").innerText = `#likebtnapi-main {    padding: 10px 15px;    background: #fff;    font-size: 18px;    font-family: "Open Sans", sans-serif;    border-radius: 5px;    color: black;    outline: none;    border: 1px solid black;    cursor: pointer;    box-shadow: none;    }`'
        style='padding: 10px 15px;    background: #fff;    font-size: 18px;    font-family: "Open Sans", sans-serif;    border-radius: 5px;    color: black;    outline: none;    border: 1px solid black;    cursor: pointer;    box-shadow: none;  text-transform: none;  '>{{ __("White") }}</button> <button style='    display: inline-block;
    background: #fefefe;
    border: 1px solid #95accb;
    border-radius: 5px;
    padding: 5px;
    font-family: sans-serif;
    box-shadow: 0 0 17px rgb(170,189,214) inset;
    color: #394e87;
    cursor: pointer;
    min-width: 51px;
    user-select: none;
    text-transform: none' onclick='document.getElementById("customCSS").innerText = ""'>{{ __("Classic")}}</button>
        <button style="background: #4865b5;
box-shadow: none;
border: 1px solid #3d55a4;
color: white;
font-weight: 1000;
font-family: sans-serif;
text-transform: none" onclick='document.getElementById("customCSS").innerText = `#likebtnapi-main { background: #4865b5;
box-shadow: none;
border: 1px solid #3d55a4;
color: white;
font-weight: 1000;}`'>{{__("Dark Blue")}}</button>
        <button onclick='document.getElementById("customCSS").innerText = `#likebtnapi-main {font-size: 11px;
height: 20px;
padding: 0 6px;
background-color: #1877f2;
box-shadow: none;
font-family: Helvetica, Arial, sans-serif;
color: white;
border: 0;}
#likebtnapi-main > span.likebtnapi-icon > svg {
width: 11px;
}`' style="border-radius: 3px;
font-size: 11px;
height: 20px;
padding: 0 6px;
background-color: #1877f2;
box-shadow: none;
font-family: Helvetica, Arial, sans-serif;
color: white;
border: 0;
text-transform: none">FaceBook</button><br><br>
        <button type="submit">{{ __("Update")}}</button>
        <button type="button" onclick="window.location.href = '{{url()->current()}}'">{{ __("Reset") }}</button><br><br>
        <h1>{{__("Preview:")}} </h1>
        <div id="likebtnapi-main"></div>
        <br>
    </form>
</div>
