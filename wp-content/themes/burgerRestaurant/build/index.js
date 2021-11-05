/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./js/hamburger.js":
/*!*************************!*\
  !*** ./js/hamburger.js ***!
  \*************************/
/***/ (function() {

const menu = document.querySelector('#menu'); // hamburger

const drawer = document.querySelector('#drawer');
const main = document.querySelector('main');
const logo = document.querySelector('.logo');
let navLinks = document.querySelectorAll('nav.open ul li'); // click on the hamburger menu to open and close nav drawer

menu.addEventListener('click', e => {
  drawer.classList.toggle('open');
  menu.classList.toggle('open');
  logo.classList.toggle('txt-red'); // change logo color to red
  // re-assign navLinks variable or will return an empty Node list

  navLinks = document.querySelectorAll('nav ul li a');
  navLinks.forEach(link => {
    link.classList.toggle('txt-black'); // change nav link color to black
  });
}); // if screen is resized to > 800px remove hamburger menu classes to remove unwanted styles

window.addEventListener('resize', reportWindowSize);

function reportWindowSize() {
  if (window.innerWidth > 800) {
    //console.log('TEST');
    drawer.classList.remove('open');
    menu.classList.remove('open');
    logo.classList.remove('txt-red'); // change logo color to white

    navLinks.forEach(link => {
      link.classList.remove('txt-black'); // change nav link color to black
    });
  }
} // click on main content area to close nav drawer


main.addEventListener('click', () => {
  drawer.classList.remove('open');
  menu.classList.remove('open');
  logo.classList.remove('txt-red'); // change logo color to white

  navLinks.forEach(link => {
    link.classList.toggle('txt-black'); // change nav link color to black
  });
});

/***/ }),

/***/ "./js/navHighlighting.js":
/*!*******************************!*\
  !*** ./js/navHighlighting.js ***!
  \*******************************/
/***/ (function() {

// Reference: https://www.youtube.com/watch?v=RsPWEmfOQdU&t=1170s&ab_channel=WEBCIFAR
const sections = document.querySelectorAll('section');
const navLi = document.querySelectorAll('nav ul li'); // console.log(navLi);

window.addEventListener('scroll', () => {
  //console.log('pageYOffset: ' + window.pageYOffset);
  let current = '';
  sections.forEach(section => {
    // get distance from top of page to the current section
    const sectionTop = section.offsetTop; //console.log('sectionTop: ' + sectionTop);
    // get the height of each section

    const sectionHeight = section.clientHeight; //console.log('section height: ' + sectionHeight);
    // if the distance scrolled is past a specified value, get the current sections's id
    // pageYOffset = returns the number of pixels the document is currently scrolled along the vertical axis (that is, up or down)

    if (pageYOffset >= sectionTop - sectionHeight / 25) {
      current = section.getAttribute('id'); // console.log(sectionTop - sectionHeight / 12);
    }
  });
  navLi.forEach(li => {
    li.classList.remove('active');

    if (li.classList.contains(current)) {
      li.classList.add('active');
    }
  });
});

/***/ }),

/***/ "./js/stickyNav.js":
/*!*************************!*\
  !*** ./js/stickyNav.js ***!
  \*************************/
/***/ (function() {

const scrollTrigger = document.querySelector('#scroll-trigger');
const scrollTriggerYcoord = scrollTrigger.offsetTop; // console.log(scrollTriggerYcoord);

const header = document.querySelector('#header');

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  // scrollY no IE support. pageYOffset IE 9 > support.
  // The read-only scrollY property of the Window interface returns the number of pixels that the document is currently scrolled vertically.

  /* at 400px before the about section, add or remove opacity: 0 and visibility: hidden  with .sticky class. so that .scrolling class can add opacity: 1 and visibility: visible. Triggered at 400px so the fade out is not abrupt. */
  // if (
  // 	(typeof window.scrollY === 'undefined'
  // 		? window.pageYOffset
  // 		: window.scrollY) >
  // 	aboutSectionYcoord - 400
  // ) {
  // 	header.classList.add('sticky');
  // } else {
  // 	header.classList.remove('sticky');
  // }

  /* at 350px before the about section, add css transition property with .fade-transition class  */
  // if (
  // 	(typeof window.scrollY === 'undefined'
  // 		? window.pageYOffset
  // 		: window.scrollY) >
  // 	aboutSectionYcoord - 350
  // ) {
  // 	header.classList.add('fade-transition');
  // } else {
  // 	header.classList.remove('fade-transition');
  // }
  // The read-only scrollY property of the Window interface returns the number of pixels that the document is currently scrolled vertically.

  /* at the about section, fade in the sticky nav opacity by adding .scrolling class */
  if ((typeof window.scrollY === 'undefined' ? window.pageYOffset : window.scrollY) > scrollTriggerYcoord - 500) {
    header.classList.add('scrolling');
  } else {
    header.classList.remove('scrolling');
  }
}

/***/ }),

/***/ "./css/index.scss":
/*!************************!*\
  !*** ./css/index.scss ***!
  \************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
!function() {
"use strict";
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_index_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/index.scss */ "./css/index.scss");
/* harmony import */ var _js_hamburger_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../js/hamburger.js */ "./js/hamburger.js");
/* harmony import */ var _js_hamburger_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_hamburger_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _js_navHighlighting_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../js/navHighlighting.js */ "./js/navHighlighting.js");
/* harmony import */ var _js_navHighlighting_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_navHighlighting_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _js_stickyNav_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../js/stickyNav.js */ "./js/stickyNav.js");
/* harmony import */ var _js_stickyNav_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_stickyNav_js__WEBPACK_IMPORTED_MODULE_3__);
// sass files
 // javascript files




}();
/******/ })()
;
//# sourceMappingURL=index.js.map