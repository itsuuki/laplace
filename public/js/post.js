/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 6);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/post.js":
/*!******************************!*\
  !*** ./resources/js/post.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// $(document).ready(function() {
//   $(".drop .option").click(function() {
//     var val = $(this).attr("data-value"),
//         $drop = $(".drop"),
//         prevActive = $(".drop .option.active").attr("data-value"),
//         options = $(".drop .option").length;
//     $drop.find(".option.active").addClass("mini-hack");
//     $drop.toggleClass("visible");
//     $drop.removeClass("withBG");
//     $(this).css("top");
//     $drop.toggleClass("opacity");
//     $(".mini-hack").removeClass("mini-hack");
//     if ($drop.hasClass("visible")) {
//       setTimeout(function() {
//         $drop.addClass("withBG");
//       }, 400 + options*100); 
//     }
//     triggerAnimation();
//     if (val !== "placeholder" || prevActive === "placeholder") {
//       $(".drop .option").removeClass("active");
//       $(this).addClass("active");
//     };
//     // var a = $('.drop .option.active').text();
//     // $('.col-md-8').children()
//     // // if (a = ) {
//     // var b = $('.col-md-8').children();
//     // console.log(b.attr('class'));
//     console.log($('.option active').show())
//     $('.option active').show();
//     // $('.option').hide();
//   });
//   function triggerAnimation() {
//     var finalWidth = $(".drop").hasClass("visible") ? 22 : 20;
//     $(".drop").css("width", "24em");
//     setTimeout(function() {
//       $(".drop").css("width", finalWidth + "em");
//     }, 400);
//   }
//   // $('.option').hide();
//   // $('.drop').on('change', function() {    
//   // });
// });
// $(document).ready(function(){
//   $('.option active').show();
//   $('.option').hide();
// $('.change-btn').click(function () {
//   $('#wrap').toggleClass('.change-btn');
//   if($('#wrap').hasClass('.change-btn')){
//     $('.bottom1').hide();
//     $('.allimage').show();
//   }else{
//     $('.bottom1').show();
//     $('.allimage').hide();
//   }
// });
// });
$(document).ready(function () {
  // executes when HTML-Document is loaded and DOM is ready
  if (location.hash !== '') $('a[href="' + location.hash + '"]').tab('show');
  return $('a[data-toggle="tab"]').on('shown', function (e) {
    return location.hash = $(e.target).attr('href').substr(1);
  }); // document ready  
});

/***/ }),

/***/ 6:
/*!************************************!*\
  !*** multi ./resources/js/post.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\wi031\Desktop\laravel\laplace\resources\js\post.js */"./resources/js/post.js");


/***/ })

/******/ });