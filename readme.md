# dabaiosamu web  

## Overview of Design  
### color
The color theme of this site is stored in a variable in "style.css"  
- --theme-color: #F2C078;  
- --accent-color: #EB5D2D;  
- --text-color: #584A3D;  
- --sub-color: #FAEDCA;  

### font
Use [AdobeFonts](https://fonts.adobe.com/) and [fontawesome](https://fontawesome.com/)  
sans-serif preferentially.  
1. futura-pt  
2. tbudgothic-std
  
### responsive
The breakpoint on this site is 767px.  
When making design changes, keep in mind the [Mobile First Index](https://developers.google.com/search/mobile-sites/mobile-first-indexing).  

***  

## Overview of each language  
### CSS  
"Reboot.css" is used from ["Bootstrap"](https://getbootstrap.jp/), and some items are overwritten with "style.css (overwrite reboot.css)".  
- reboot.css **Do not change**  
- style.css **main CSS file. Additional CSS to this file.**  
- animation.css **Contains animation-related files**  
- sp.css **Contains files for responsive design**  
*May use Bootstrap5 in the future*  
  
#### CSS class
The following classes are prepared as general-purpose classes.  
  
- flex `{display: flex;}`
- flex-wrp `{display: flex; flex-wrap: wrap;}`
- flex-cnt `{display: flex; justify-content: center;}`
- flex-btw `{display: flex; justify-content: space-between;}`
- flex-ard `{display: flex; justify-content: space-around;}`
- flex-wrp-cnt `{display: flex; flex-wrap: wrap; justify-content: center;}`
- flex-wrp-btw `{display: flex; flex-wrap: wrap; justify-content: space-between;}`
- flex-wrp-ard `{display: flex; flex-wrap: wrap; justify-content: space-around;}`
- block `{display: block;}`
- inline `{display: inline;}`
- en `{font-family: var(--en-font);}`
  
### JavaScript  
- [html5shiv.js](https://github.com/aFarkas/html5shiv)  
- [vue.js](https://jp.vuejs.org/)  
- [axios](https://github.com/axios/axios) *use futures*  
See /js/v-script.js for Vue.js file  
I use "html5shiv.js" to support Internet Explorer. I don't really want to respond.  
  
***

## Producer information  
### Creator  
This site was created by [ken7253](https://dairoku-studio.com)  
- [Twitter](https://twitter.com/ken7253_)  
- Discord ken7253#4915  
  
Sorry, we may not be able to provide technical support for this site.  
Please refer to the official reference for WordPress etc.  