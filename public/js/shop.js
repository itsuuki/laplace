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
    var html = "<div id=\"input_plural\" class=\"input_plural[".concat(index, "]\">\n      <label for=\"com-name\">\n        \u5546\u54C1\n      </label>\n      <input\n      id=\"name\"\n      name=\"name[").concat(index, "]\"\n      class=\"name\"\n      value=\"\"\n      type=\"text\"\n      >\n\n      <label for=\"com-price\">\n        \u91D1\u984D\n      </label>\n      <input\n      id=\"price\"\n      name=\"price[").concat(index, "]\"\n      class=\"price\"\n      value=\"\"\n      type=\"text\"\n      >\n\n      <label for=\"description\">\n          \u5546\u54C1\u7D39\u4ECB\n      </label>\n      <textarea\n          id=\"description\"\n          name=\"description[").concat(index, "]\"\n          class=\"com-description\"\n          rows=\"4\"\n      ></textarea>\n\n    <input type=\"button\" value=\"\uFF0B\" class=\"add pluralBtn[").concat(index, "]\">\n    <input type=\"button\" value=\"\uFF0D\" class=\"del pluralBtn[").concat(index, "]\">\n    <input type=\"hidden\" name=\"num[").concat(index, "]\">\n    </div>");
    return html;
  };

  var count_value = 0;
  var count_values = 1;
  $(document).on("click", ".add", function () {
    console.log('ok'); // $.ajax({
    //   url: "resource/views/commodity/create.blade.php",
    //   type: 'GET',
    //   data: { "data-index='1'": hoga },
    //   // $(this).parent().clone(true).insertAfter($(this).parent());
    // })

    count_value++;
    count_values++;
    document.getElementById("press-button").innerHTML = count_values;
    var hoge = document.getElementById('input_pluralBox').dataset.index;
    var hoga = hoge.innerHTML = count_value;
    $('#input_pluralBox').append(buildFileField(hoga));
    console.log(hoga); // $("#input_pluralBox").append()
    //     $('#input_plura').append(``)
  });
  $(document).on("click", ".del", function () {
    // var target = $(this).parent();
    var targetIndex = $(this).index(".del");
    console.log(targetIndex); // var a = document.('#name').index();
    // if (target.parent().children().length > 1) {
    //     target.remove();

    if (count_values > 1) {
      count_values--;
      document.getElementById("press-button").innerHTML = count_values; // var hoge = document.getElementById('input_pluralBox').dataset.index;
      // var hoga = hoge.innerHTML = count_value;
      // buildFileField(targetIndex).remove()
      // console.log(buildFileField(targetIndex))

      $(this).parent().remove(); // var s = $(buildFileField(targetIndex)).prop('checked', true)
      // s.remove();
      // console.log(s);
      // console.log(remove(':contains("buildFileField(targetIndex)")'));
      // $(`price[${targetIndex}]`).remove();
      // $(`description[${targetIndex}]`).remove();
      // $(`add pluralBtn[${targetIndex}]`).remove();
      // $(`del pluralBtn[${targetIndex}]`).remove();
      // console.log(hoga)
    }
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