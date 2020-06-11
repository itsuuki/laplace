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
    var html = "\n    <div id=\"input_plural\" class=\"input_plural[".concat(index, "]\">\n      <label for=\"com-name\">\n        \u5546\u54C1\n      </label>\n      <input\n      id=\"name\"\n      name=\"name[").concat(index, "]\"\n      class=\"name {{ $errors->has('name[").concat(index, "]') ? 'is-invalid' : '' }}\"\n      value=\"{{ old('name[").concat(index, "]') }}\"\n      type=\"text\"\n      >\n\n      <label for=\"com-price\">\n        \u91D1\u984D\n      </label>\n      <input\n      id=\"price\"\n      name=\"price[").concat(index, "]\"\n      class=\"price {{ $errors->has('price[").concat(index, "]') ? 'is-invalid' : '' }}\"\n      value=\"{{ old('price[").concat(index, "]') }}\"\n      type=\"text\"\n      >\n\n      <label for=\"description\">\n          \u5546\u54C1\u7D39\u4ECB\n      </label>\n      <textarea\n          id=\"description\"\n          name=\"description[").concat(index, "]\"\n          class=\"com-description\"\n          rows=\"4\"\n      >{{ old('description[").concat(index, "]') }}</textarea>\n\n    <input type=\"button\" value=\"\uFF0B\" class=\"add pluralBtn[").concat(index, "]\">\n    <input type=\"button\" value=\"\uFF0D\" class=\"del pluralBtn[").concat(index, "]\">\n    <input type=\"hidden\" name=\"num[").concat(index, "]\">\n    <input type=\"file\" name=\"image[").concat(index, "]\">\n    </div>");
    return html;
  };

  var count_value = 0;
  var count_values = 1;
  $(document).on("click", ".add", function () {
    count_value++;
    count_values++;
    document.getElementById("press-button").innerHTML = count_values;
    var hoge = document.getElementById('input_pluralBox').dataset.index;
    var hoga = hoge.innerHTML = count_value;
    $('#input_pluralBox').append(buildFileField(hoga));
    $('input[name^=name]').filter(function (index) {
      $(this).attr('name', 'name[' + index + ']');
    });
    $('input[name^=price]').filter(function (index) {
      $(this).attr('name', 'price[' + index + ']');
    });
    $('testarea[name^=description]').filter(function (index) {
      $(this).attr('name', 'description[' + index + ']');
    });
    $('input[name^=num]').filter(function (index) {
      $(this).attr('name', 'num[' + index + ']');
    });
    $('input[name^=image]').filter(function (index) {
      $(this).attr('name', 'image[' + index + ']');
    });
  });
  $(document).on("click", ".del", function () {
    if (count_values > 1) {
      count_values--;
      document.getElementById("press-button").innerHTML = count_values;
      $(this).parent().remove();
      $('input[name^=name]').filter(function (index) {
        $(this).attr('name', 'name[' + index + ']');
      });
      $('input[name^=price]').filter(function (index) {
        $(this).attr('name', 'price[' + index + ']');
      });
      $('textarea[name^=description]').filter(function (index) {
        $(this).attr('name', 'description[' + index + ']');
      });
      $('input[name^=num]').filter(function (index) {
        $(this).attr('name', 'num[' + index + ']');
      });
      $('input[name^=image]').filter(function (index) {
        $(this).attr('name', 'image[' + index + ']');
      });
    }
  });
  $(document).on("click", ".backg", function () {
    $(".py-4").css("color", "#0000FF");
  });
});

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