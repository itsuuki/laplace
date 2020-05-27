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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/shop.js":
/*!******************************!*\
  !*** ./resources/js/shop.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  var buildFileField = function buildFileField(index) {
    var html = "<div class=\"com-data\" data-index=\"".concat(index, "\">\n    <label for=\"com-name\">\n      \u5546\u54C1\n    </label>\n    <input\n    id=\"com-name\"\n    name=\"com-name\"\n    class=\"com-name\"\n    value=\"{{ old('com-name') }}\"\n    type=\"text\"\n    >\n\n    <label for=\"com-price\">\n      \u91D1\u984D\n    </label>\n    <input\n    id=\"com-price\"\n    name=\"com-price\"\n    class=\"com-price\"\n    value=\"{{ old('com-price') }}\"\n    type=\"text\"\n    >\n\n    <label for=\"description\">\n        \u5546\u54C1\u7D39\u4ECB\n    </label>\n    <textarea\n        id=\"description\"\n        name=\"description\"\n        class=\"com-description\"\n        rows=\"4\"\n    >{{ old('description') }}</textarea>\n\n    <div class=\"con\">\u8FFD\u52A0</div>\n\n    </div>\n    </div>\n    </div>\n      <div class=\"exhibition__detail__des__cou__tag\">\u524A\u9664</div>\n    </div>");
    return html;
  };

  var buildImg = function buildImg(index, url) {
    var html = "<img data-index=\"".concat(index, "\" src=\"").concat(url, "\" width=\"100px\" height=\"100px\">");
    return html;
  };

  var fileIndex = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  lastIndex = $('.com-data:last').data('index');
  fileIndex.splice(0, lastIndex);
  $('.hidden-destroy').hide();
  $('.con').on('click', function (e) {
    console.log("ok");
    var targetIndex = $(this).parent().data('index');
    var file = e.target.files[0];
    var blobUrl = window.URL.createObjectURL(file);

    if (img = $("img[data-index=\"".concat(targetIndex, "\"]"))[0]) {
      img.setAttribute('images', blobUrl);
    } else {
      $('.b').append(buildImg(targetIndex, blobUrl));
      $('.a').append(buildFileField(fileIndex[0]));
      fileIndex.shift();
      fileIndex.push(fileIndex[fileIndex.length - 1] + 1);
    }
  });
  $('.exhibition__detail__image__in__fis').on('click', '.exhibition__detail__des__cou__tag', function () {
    var targetIndex = $(this).parent().data('index');
    var hiddenCheck = $("input[data-index=\"".concat(targetIndex, "\"].hidden-destroy"));
    if (hiddenCheck) hiddenCheck.prop('checked', true);
    $(this).parent().remove();
    $("img[data-index=\"".concat(targetIndex, "\"]")).remove();
    if ($('.exhibition__detail__image__in__fis__out__ind__fil').length == 0) $('.exhibition__detail__image__in__fis').append(buildFileField(fileIndex[0]));
  });
}); // $(function() {
//   // alert('sample');
//   $('.con').on('click', function(e) {
//     console.log("ok");
//   });
//   // console.log("ok");
// });

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/shop.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\wi031\Desktop\laravel\laplace\resources\js\shop.js */"./resources/js/shop.js");


/***/ })

/******/ });