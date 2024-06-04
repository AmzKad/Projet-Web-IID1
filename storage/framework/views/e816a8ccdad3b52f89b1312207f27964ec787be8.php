<!Doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/storage/static/css/libs.bundle.css" />
    <link rel="stylesheet" href="\storage\static\css\theme.bundle.css" />

    <link href="\storage\static\css\output.css" rel="stylesheet">
    <link href="samzi\public\storage\static\css\style.css" rel="stylesheet">
    <!-- <script defer src="./JS/Script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"><meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Siamz | Ecommerce Store</title>
    <style>
      /* libs map */

/* theme map */
    .navContainer {
    background-color:rgba(85, 85, 85, 0.05); 
    z-index: 10;
}
.navContainer:hover{
    background-color:rgba(85, 85, 85, 0.5); 
    box-shadow: 0 0 20px 2px rgba(58, 58, 60, 0.3);
}
.py-6 {
    padding-top: 1.5rem!important;
    padding-bottom: 1.5rem!important;
}
.logo:hover{
    transition: all 0.3s;
    color: #25A8E0;
}
.navChoix{
    font-size: 15px;
    color: #F1F1F1;
    font-family: 'Poppins', sans-serif;
    gap: 8px;
    transition: all 0.3s;
}
.navChoix:hover{
    color: #25A8E0;
}
.navChoix ion-icon {
    font-size: 20px;
    color: #25A8E0;
}

.NavIcon{
    width: 30px;
    transition: all 0.3s;
}
.NavIcon:hover{
    color: #25A8E0;
}


/* ====================================================> Hero Section */
.HeroTitle{
    color: #E1E1E1;
    margin-top: 185px;
    margin-bottom: 60px;
    font-size: 52px;
    font-family: 'Poppins', sans-serif;

}
.btnHero{
    background-color: rgba(0, 0, 0, 0);
    border-radius: 10px;
    font-size: 20px;
    font-weight: 700;
    box-shadow: 0 0 10px 0 rgba(37, 168, 224, 0.15);
    margin-right: 36px;
}

.btn-primary{
    background-color: #25A8E0;
    border-color: #25A8E0; 
    color: #3A3A3C !important;
}
.btn-primary:hover{
    background-color: #3A3A3C;
    border-color: #3A3A3C; 
    color: #25A8E0 !important;
}
.btn-secondary:hover{
    background-color: #3A3A3C !important;
    border-color: #3A3A3C !important; 
    color: #25A8E0 ;
}

.btn {
    color: #25A8E0;
    border-color: #25A8E0; 
  }
  

  /* ====================================================> Features Section */

  .Feature-Section{
    background-color: #2A2A2C;
    padding: 80px 20px 80px 160px;
  }
  .Feature{
    gap:16px
  }
  .Feature h3{
    font-family: 'Poppins', sans-serif;
    font-size: 20px !important;
    color: #F1F1F1;
    font-weight: 700;
  }
  .Feature p{
    font-family: 'Poppins', sans-serif;
    font-size: 14px ;
    color: #C8C8C8;
  }
  .FeatureIcon{
    width: 60px;
  }
  .FeatureIcon img{
    width: 100%;
  }
  .FIcon1{
    width: 80px;
  }
  .FIcon2{
    margin-right: 10px;
  }


/* ===================================================> Our Product */
 .OurProduct{
    background-color: #F1F1F1;
    padding-top: 140px;
    padding-bottom: 140px;
 }
 .OPTitle span{
    color: #25A8E0;
 }

 .OurPSlide{
    box-shadow: 0 0 15px 2px rgba(42, 42, 44, 0.2);
    transition: all 0.4s;
 }
 .OurPSlide:hover{
    box-shadow: 0 0 25px 2px rgba(42, 42, 44, 0.35);
 }
 .card .badge{
    font-size: 16px;
    background-color: #25A8E0;
    border-radius: 10px;
 }
 .OPCardCont{
    height: 400px;
 }

 /* ==================================================> Subcribe Section */
 .SubSection{
    background-color: #2A2A2C;
    padding-top: 100px;
    padding-bottom: 120px;
 }
 .SubContainer{
    flex-direction: column;
 }
 .SubTitle h2{
    color: #25A8E0;
    font-size: 30px;
    margin-bottom: 5px;
 }
 .SubTitle p{
    color: #D1D1D1;
    font-size: 20px;
    font-weight: 500;
 }
 .EmailSub{
    width: 500px;
 }
 .arrowEmail{
    background-color:#25A8E0;
    font-size: 20px;
    cursor: pointer;
 }
 .diviseur{
    height: 2px;
    background-color: #C1C1C1;
 }

 /* ===============================================> footer */
 footer {
    background-color: #2A2A2C;
 }
 .FooterContainer{
    max-width: 110rem;
    margin: 0px auto 0px 16% ;
    column-gap: 40px; 
}

.Footerbox .FBTitle{
    color:#D1D1D1;
    font-size: 18px;
    margin-bottom: 30px;
}

.FBList li{
    list-style: none;
    font-size: 17px;
    color: #999;
    margin-bottom: 16px;
    display: flex;
}

.FBList li a{
    text-decoration: none;
    color: inherit;
    font-weight: 500;
    border-bottom: 3px solid #606fc200;
    transition: all 0.4s;
}

.FBList li a:hover{
    color: #25A8E0;
}

.FBList li:hover .FBliNormal{
    border-color: #25A8E0;
}

.FSDownImg{
    max-width: 140px;
    cursor: pointer;
    opacity: 80%;
}

.FSDImg2{
    margin-top: -6px;
}

.FSBLogo{
    color: #25A8E0;
    margin-right: 6px;
    margin-bottom: -2px;
}


*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

html,
:host {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
  font-feature-settings: normal;
  /* 5 */
  font-variation-settings: normal;
  /* 6 */
  -webkit-tap-highlight-color: transparent;
  /* 7 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-feature-settings: normal;
  /* 2 */
  font-variation-settings: normal;
  /* 3 */
  font-size: 1em;
  /* 4 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-feature-settings: inherit;
  /* 1 */
  font-variation-settings: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  font-weight: inherit;
  /* 1 */
  line-height: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/

dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

[hidden] {
  display: none;
}

*, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

.absolute {
  position: absolute;
}

.relative {
  position: relative;
}

.inset-0 {
  inset: 0px;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.-mt-5 {
  margin-top: -1.25rem;
}

.ml-4 {
  margin-left: 1rem;
}

.mr-12 {
  margin-right: 3rem;
}

.mr-6 {
  margin-right: 1.5rem;
}

.mt-4 {
  margin-top: 1rem;
}

.mt-8 {
  margin-top: 2rem;
}

.block {
  display: block;
}

.flex {
  display: flex;
}

.inline-flex {
  display: inline-flex;
}

.hidden {
  display: none;
}

.h-3 {
  height: 0.75rem;
}

.h-6 {
  height: 1.5rem;
}

.w-3 {
  width: 0.75rem;
}

.w-6 {
  width: 1.5rem;
}

.w-full {
  width: 100%;
}

.w-screen {
  width: 100vw;
}

.max-w-lg {
  max-width: 32rem;
}

.max-w-screen-xl {
  max-width: 1280px;
}

.max-w-xl {
  max-width: 36rem;
}

@keyframes ping {
  75%, 100% {
    transform: scale(2);
    opacity: 0;
  }
}

.animate-ping {
  animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
}

.flex-wrap {
  flex-wrap: wrap;
}

.items-center {
  align-items: center;
}

.justify-between {
  justify-content: space-between;
}

.gap-4 {
  gap: 1rem;
}

.space-x-12 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(3rem * var(--tw-space-x-reverse));
  margin-left: calc(3rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-5 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(1.25rem * var(--tw-space-x-reverse));
  margin-left: calc(1.25rem * calc(1 - var(--tw-space-x-reverse)));
}

.self-center {
  align-self: center;
}

.rounded {
  border-radius: 0.25rem;
}

.rounded-full {
  border-radius: 9999px;
}

.bg-pink-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(244 114 182 / var(--tw-bg-opacity));
}

.bg-pink-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(236 72 153 / var(--tw-bg-opacity));
}

.bg-rose-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(225 29 72 / var(--tw-bg-opacity));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-white\/75 {
  background-color: rgb(255 255 255 / 0.75);
}

.px-12 {
  padding-left: 3rem;
  padding-right: 3rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.px-5 {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.py-32 {
  padding-top: 8rem;
  padding-bottom: 8rem;
}

.py-6 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.text-center {
  text-align: center;
}

.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}

.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.font-bold {
  font-weight: 700;
}

.font-extrabold {
  font-weight: 800;
}

.font-medium {
  font-weight: 500;
}

.font-semibold {
  font-weight: 600;
}

.text-rose-600 {
  --tw-text-opacity: 1;
  color: rgb(225 29 72 / var(--tw-text-opacity));
}

.text-rose-700 {
  --tw-text-opacity: 1;
  color: rgb(190 18 60 / var(--tw-text-opacity));
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.opacity-75 {
  opacity: 0.75;
}

.shadow {
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.hover\:bg-rose-700:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(190 18 60 / var(--tw-bg-opacity));
}

.hover\:text-gray-200:hover {
  --tw-text-opacity: 1;
  color: rgb(229 231 235 / var(--tw-text-opacity));
}

.hover\:text-rose-700:hover {
  --tw-text-opacity: 1;
  color: rgb(190 18 60 / var(--tw-text-opacity));
}

.focus\:outline-none:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.focus\:ring:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.active\:bg-rose-500:active {
  --tw-bg-opacity: 1;
  background-color: rgb(244 63 94 / var(--tw-bg-opacity));
}

.active\:text-rose-500:active {
  --tw-text-opacity: 1;
  color: rgb(244 63 94 / var(--tw-text-opacity));
}

@media (min-width: 640px) {
  .sm\:w-auto {
    width: auto;
  }

  .sm\:bg-transparent {
    background-color: transparent;
  }

  .sm\:from-white\/95 {
    --tw-gradient-from: rgb(255 255 255 / 0.95) var(--tw-gradient-from-position);
    --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  }

  .sm\:to-white\/25 {
    --tw-gradient-to: rgb(255 255 255 / 0.25) var(--tw-gradient-to-position);
  }

  .sm\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .sm\:text-5xl {
    font-size: 3rem;
    line-height: 1;
  }

  .sm\:text-xl\/relaxed {
    font-size: 1.25rem;
    line-height: 1.625;
  }
}

@media (min-width: 768px) {
  .md\:flex {
    display: flex;
  }
}

@media (min-width: 1024px) {
  .lg\:flex {
    display: flex;
  }

  .lg\:h-screen {
    height: 100vh;
  }

  .lg\:items-center {
    align-items: center;
  }

  .lg\:px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
  }
}

@media (min-width: 1280px) {
  .xl\:flex {
    display: flex;
  }

  .xl\:hidden {
    display: none;
  }

  .xl\:px-12 {
    padding-left: 3rem;
    padding-right: 3rem;
  }
}

@media (min-width: 640px) {
  .ltr\:sm\:bg-gradient-to-r:where([dir="ltr"], [dir="ltr"] *) {
    background-image: linear-gradient(to right, var(--tw-gradient-stops));
  }

  .ltr\:sm\:text-left:where([dir="ltr"], [dir="ltr"] *) {
    text-align: left;
  }

  .rtl\:sm\:bg-gradient-to-l:where([dir="rtl"], [dir="rtl"] *) {
    background-image: linear-gradient(to left, var(--tw-gradient-stops));
  }

  .rtl\:sm\:text-right:where([dir="rtl"], [dir="rtl"] *) {
    text-align: right;
  }
}
</style>
</head>
<body class="">
        
    <!-- / Hero Section -->
    <section class="vh-100 position-relative bg-overlay-dark ">
        <!-- / navebar Section -->
        <nav class="navContainer position-relative ">
            <div class="flex flex-wrap">
            <section class="relative mx-auto">
                <nav class="flex justify-between text-white w-screen navbarStyle">
                <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                    <a class="logo text-3xl font-bold font-heading" href="index.html"> Samzi. </a>

                    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                    <li><a class="navChoix flex items-center" href="/landing"><ion-icon name="home"></ion-icon>Home</a></li>
                    <li><a class="navChoix flex items-center" href="/client"><ion-icon name="copy"></ion-icon> sign up</a></li>
                    <li><a class="navChoix flex items-center" href="#"><ion-icon name="cart"></ion-icon> Products</a></li>
                    <li><a class="navChoix flex items-center" href="#foot"><ion-icon name="mail"></ion-icon> Contact Us</a></li>
                    </ul>
                    <!-- Header Icons -->
                    <div class="hidden xl:flex items-center space-x-5 ">
                    <a class="" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 NavIcon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </a> 
                    <a class="flex items-center" href="/cart">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 NavIcon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="flex absolute -mt-5 ml-4">
                        <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full opacity-75" style="background-color: #25A8E0;"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 " style="background-color: #25A8E0 !important;"></span>
                        </span>
                    </a>

                    <a class="flex items-center NavIcon" href="/login">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 NavIcon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                    
                    </div>
                </div>

                </nav>
                
            </section>
            </div>
        </nav>

        <!-- / Hero Section -->
        <div class="container d-flex justify-content-center align-items-center position-relative z-index-10">
            <div class="d-flex justify-content-center align-items-center position-relative z-index-10 text-white">
                <div>
                    <h1 class="HeroTitle display-1 fw-bold px-2 px-md-5 text-center" data-aos="fade-up" data-aos-delay="1000">From Click to Doorstep <br>Ulltimate Shopping Destination</h1>
                    <div data-aos="fade-in" data-aos-delay="2000">
                        <div class="d-md-flex justify-content-center mt-4 mb-3 my-md-5">
                            <a href="login.html" class="btn btnHero btn-primary" >Get Start</a>
                            <a href="#foot" class="btn btnHero btn-secondary">About us</a>
                        </div> 
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 top-0 bottom-0 start-0 end-0">
            <div class="swiper-container overflow-hidden bg-light w-100 h-100"
                data-swiper
                data-options='{
                "slidesPerView": 1,
                "speed": 1600,
                "loop": true,
                "effect": "fade",
                "autoplay": {
                    "delay": 5000
                }
                }'>
                <div class="swiper-wrapper">
                <div class="swiper-slide position-relative">
                    <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center" style="background-image: url('/storage/static/images/slideshows/slideshow-1.jpg');"></div> 
                </div>
                <div class="swiper-slide position-relative">
                    <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center" style="background-image: url('/storage/static/images/slideshows/slideshow-2.jpg');"> </div>
                </div>
                <div class="swiper-slide position-relative">
                    <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center" style="background-image: url('/storage/static/images/slideshows/slideshow-3.jpg');"> </div>
                </div>
                <div class="swiper-slide position-relative">
                    <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center" style="background-image: url('/storage/static/images/slideshows/slideshow-4.jpg');"> </div>
                </div>
                <div class="swiper-slide position-relative">
                    <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center" style="background-image: url('/storage/static/images/slideshows/slideshow-5.jpg');"> </div>
                </div>
                </div> 
            </div>
        </div>
    </section>

    <!-- features section -->
    <Section class="Feature-Section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-left">
                    <div class=" Feature list-box d-flex align-items-center">
                        <div class="FeatureIcon FIcon1"><img src="\storage\static\images\Features\delivery.png" ></div>
                        <div class="content">
                            <h3>Free Shipping</h3>
                            <p>When order over $75</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-left" data-aos-delay="250">
                    <div class="Feature list-box d-flex align-items-center">
                        <div class="FeatureIcon  FIcon2"><img src="\storage\static\images\Features\time-twenty-four.png" ></div>
                        <div class="content">
                            <h3>24/7 Support</h3>
                            <p>Get support all day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="500">
                    <div class="Feature list-box d-flex justify-content-start align-items-center">
                        <div class="FeatureIcon"><img src="\storage\static\images\Features\Refund.png" ></div>
                        <div class="content">
                            <h3>Refund</h3>
                            <p>Get refund within 3 days!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </Section>

    <!-- Our Product-->
    <section class=" OurProduct" data-aos="fade-up">
        <div class="container">
            <div class="mb-5">
                <h2 class="OPTitle text-center display-5 fw-bold mb-3"><span>Our </span> Products</h2>
                <p class="text-center lead mb-6">We've sorted through our feed to put together a collection of our products perfect
                    for our client.</p>
            </div>

            <div class="swiper-container overflow-visible"
                data-swiper
                data-options='{
                "spaceBetween": 25,
                "cssMode": true,
                "roundLengths": true,
                "scrollbar": {
                    "el": ".swiper-scrollbar",
                    "hide": false,
                    "draggable": true
                },      
                "navigation": {
                    "nextEl": ".swiper-next",
                    "prevEl": ".swiper-prev"
                },  
                "breakpoints": {
                    "576": {
                    "slidesPerView": 1
                    },
                    "768": {
                    "slidesPerView": 2
                    },
                    "992": {
                    "slidesPerView": 3
                    },
                    "1200": {
                    "slidesPerView": 4
                    }            
                }
                }'>
                <div class="swiper-wrapper pb-5 pe-1">
                    <!-- Card Product-->
                    <div class="OurPSlide swiper-slide d-flex h-auto">
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge">- 25%</span>
                            <div class="card-header">
                                <div class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="\storage\static\images\Footer\google_logo.png" alt="">
                                </div>
                                <div class="card-actions" style=" background-color: rgba(42, 42, 44, 0.6);">
                                    <div class="OPCardCont d-flex justify-content-center align-items-center flex-wrap">
                                        <a href="login.html" class="btn OPCardBtn btnHero btn-primary mx-2 mt-2">Order now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <div class="rating position-relative d-table">
                                        <div class="stars">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div> <span class="small fw-bolder ms-2 text-muted"> 4.4 (1289)</span>
                                </div>
                                <p class="mb-0 mx-2 mx-md-4 fs-p d-block text-center">Apple Blue iPhone 13 </p>
                            </div>
                        </div>
                    </div>

              

                   

                   

                    <div class="OurPSlide swiper-slide d-flex h-auto">
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge">- 25%</span>
                            <div class="card-header">
                                <div class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="\storage\static\images\products\product-2.jpg" alt="">
                                </div>
                                <div class="card-actions" style=" background-color: rgba(42, 42, 44, 0.6);">
                                    <div class="OPCardCont d-flex justify-content-center align-items-center flex-wrap">
                                        <a href="login.html" class="btn OPCardBtn btnHero btn-primary mx-2 mt-2">Order now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <div class="rating position-relative d-table">
                                        <div class="stars">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div> <span class="small fw-bolder ms-2 text-muted"> 3.4 (189)</span>
                                </div>
                                <p class="mb-0 mx-2 mx-md-4 fs-p d-block text-center">Apple Blue iPhone 13 </p>
                            </div>
                        </div>
                    </div>
                    
                <div class="swiper-slide d-flex h-auto justify-content-center align-items-center">
                    <a href="./login.html" class="d-flex text-decoration-none flex-column justify-content-center align-items-center">
                    <span class="btn btn-icon mb-3" style="background-color: #25A8E0;"><i class="ri-arrow-right-line ri-lg lh-1" style="color:#323232;"></i></span>
                    <span class="lead fw-bolder">See All</span>
                    </a>
                </div>
                </div>
            
                <!-- Buttons-->
                <div class="swiper-btn swiper-disabled-hide swiper-prev swiper-btn-side btn-icon bg-dark text-white ms-3 shadow-lg mt-n5 ms-n4"><i class="ri-arrow-left-s-line ri-lg"></i></div>
                <div class="swiper-btn swiper-disabled-hide swiper-next swiper-btn-side swiper-btn-side-right btn-icon bg-dark text-white me-n4 shadow-lg mt-n5"><i class="ri-arrow-right-s-line ri-lg"></i></div>
            
                <!-- Add Scrollbar -->
                <div class="swiper-scrollbar"></div>
            
            </div>
            <!-- / Swiper Latest-->            </div>
    </section>

    <!-- Subscribe-->
    <section class="SubSection position-relative" >
        <div class="SubContainer container flex justify-content-start align-items-center">
            <div class="SubTitle mb-5">
                <h2 class="text-center fw-bold" data-aos="fade-left" data-aos-delay="200">Join Our Newsletter</h2>
                <p class="text-center lead "data-aos="fade-left" data-aos-delay="200">Sign up to our newsletter to get last news</p>
            </div>
            <form class="EmailSub bg-white d-flex justify-content-start align-items-center border-dark-focus-within transition-all"data-aos="fade-right" data-aos-delay="500">
                <div class="input-group m-0">
                    <input type="text" class="form-control d-flex flex-grow-1 border-0 bg-transparent py-3" placeholder="Enter your email" aria-label="Enter your email">
                    <button class="arrowEmail input-group-text border-0"><i class="ri-arrow-right-line align-middle"></i></>
                </div>
            </form>
        </div> 
    </section>

    <div class="diviseur"></div>

    <footer id="foot">
        <div class="FooterContainer row pt-8 pb-5">
            <div class="Footerbox col">
                <p class="FBTitle fw-bold">ABOUT</p>
                <ul class="FBList FBLContact">
                    <li><a class="FBliNormal" a href="#">About us</a></li>
                    <li><a class="FBliNormal" a href="#">Partners</a></li>
                    <li><a class="FBliNormal" a href="#">News</a></li>
                </ul>
            </div>
            
            <div class="Footerbox col">
                <p class="FBTitle fw-bold">Contact us</p>
                <ul class="FBList">
                    <li><a class="FBliNormal" a href="#">Forum</a></li>
                    <li><a class="FBliNormal" a href="#">Support</a></li>
                    <li><a class="FBliNormal" a href="#">Help Center</a></li>
                </ul>
            </div>

            <div class="Footerbox col">
                <p class="FBTitle fw-bold">Legal</p>
                <ul class="FBList">
                    <li><a class="FBliNormal" a href="#">Terms</a></li>
                    <li><a class="FBliNormal" a href="#">Privacy policy</a></li>
                    <li><a class="FBliNormal" a href="#">Docs</a></li>
                </ul>
            </div>

            <div class="Footerbox col-3">
                <p class="FBTitle fw-bold">Contact us</p>
                <ul class="FBList FBLContact">
                    <li><a a href="mail:SIAMZ@modBank.com" ><ion-icon class="FSBLogo" name="mail"></ion-icon>SIAMZ-Store@hotmail.com</a></li>
                    <li><a a href="tel:0612345678" ><ion-icon class="FSBLogo" name="call"></ion-icon>+212612345678</a></li>
                    <li><a a href="#" ><ion-icon class="FSBLogo" name="logo-linkedin"></ion-icon>LinkedIn</a></li>
                    <li><a a href="#" ><ion-icon class="FSBLogo" name="logo-instagram"></ion-icon>Instagram</a></li>
                </ul>
            </div>

            <div class="Footerbox col-3">
                <p class="FBTitle fw-bold">Get started</p>
                <ul class="FBList">
                    <li><a class="FBliNormal" a href="login.html">Log in</a></li>
                    <li><a a href="#"><img class="FSDownImg" src="\storage\static\images\Footer\google_logo.png"></a></li>
                    <li><a a href="#"><img class="FSDownImg FSDImg2" src="\storage\static\images\Footer\apple_logo.png"></a></li>
                </ul>
            </div>

        </div>
    </footer>
  




    <script src="\storage\static\js\vendor.bundle.js"></script>
    <script src="\storage\static\js\theme.bundle.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html><?php /**PATH C:\Users\HP\OneDrive\Bureau\projet\projetelbennaylaravel\samzi\resources\views/landing/landpage.blade.php ENDPATH**/ ?>