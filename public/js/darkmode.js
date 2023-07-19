/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/darkmode.js ***!
  \**********************************/
var darkModeSwitch = document.getElementById('dark-mode-switch');
if (localStorage.getItem('darkMode') === 'on') {
  darkModeSwitch.checked = true;
  document.documentElement.classList.add('dark');
} else {
  darkModeSwitch.checked = false;
  document.documentElement.classList.remove('dark');
}
darkModeSwitch.addEventListener('change', function () {
  var darkModeSwitchChecked = darkModeSwitch.checked;
  if (darkModeSwitchChecked) {
    localStorage.setItem('darkMode', 'on');
    document.documentElement.classList.add('dark');
  } else {
    localStorage.setItem('darkMode', 'off');
    document.documentElement.classList.remove('dark');
  }
});
/******/ })()
;