# Custom CSS

---

- [Intro](#intro)
- [Main box](#main-box)
- [Icon](#icon)

<a name="intro"></a>
## Intro
You can customize your like button further using custom CSS. This is advanced and prior CSS knowledge is assumed.
> {primary} Some themes are already available

<a name="main-box"></a>
## Main box
To apply styles to the main div, use the #likebtnapi-main selector. Here is an example:

```css
#likebtnapi-main {
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
```

<a name="icon"></a>
## Icon
To apply styles to the icon, use the #likebtnapi-main span.likebtnapi-icon selector. When clicked, it obtains the clicked class. You can therefore apply styles to it only when clicked, as the example shows:

```css
#likebtnapi-main span.likebtnapi-icon.clicked {
    color: red;
}
```
> {warning} All selectors should be relative to #likebtnapi-main.
