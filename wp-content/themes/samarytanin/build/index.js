/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ (function(module) {

module.exports = window["wp"]["element"];

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
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);

const {
  registerBlockType
} = wp.blocks;
const {
  RichText,
  InspectorControls,
  ColorPalette,
  MediaUpload,
  InnerBlocks,
  BlockControls,
  AlignmentToolbar
} = wp.editor;
const {
  PanelBody,
  IconButton,
  RangeControl
} = wp.components;
const ALLOWED_BLOCKS = ['core/button'];
registerBlockType('samarytanin/custom-cta', {
  // built in attributes
  title: 'Call to Actions',
  description: 'Block to generate a custom Call to Action',
  icon: 'format-image',
  category: 'layout',
  // custom attributes
  attributes: {
    title: {
      type: 'string',
      source: 'html',
      selector: 'h2'
    },
    titleColor: {
      type: 'string',
      default: 'black'
    },
    body: {
      type: 'string',
      source: 'html',
      selector: 'p'
    },
    alignment: {
      type: 'string',
      default: 'none'
    },
    bodyColor: {
      type: 'string',
      default: 'black'
    },
    backgroundImage: {
      type: 'string',
      default: null
    },
    overlayColor: {
      type: 'string',
      default: 'black'
    },
    overlayOpacity: {
      type: 'number',
      default: 0.3
    }
  },
  // built in functions
  edit: _ref => {
    let {
      attributes,
      setAttributes
    } = _ref;
    const {
      title,
      body,
      alignment,
      titleColor,
      bodyColor,
      backgroundImage,
      overlayColor,
      overlayOpacity
    } = attributes; // custom functions

    function onChangeTitle(newTitle) {
      setAttributes({
        title: newTitle
      });
    }

    function onChangeBody(newBody) {
      setAttributes({
        body: newBody
      });
    }

    function onTitleColorChange(newColor) {
      setAttributes({
        titleColor: newColor
      });
    }

    function onBodyColorChange(newBodyColor) {
      setAttributes({
        bodyColor: newBodyColor
      });
    }

    function onSelectImage(newImage) {
      setAttributes({
        backgroundImage: newImage.sizes.full.url
      });
    }

    function onOverlayColorChange(newColor) {
      setAttributes({
        overlayColor: newColor
      });
    }

    function onOverlayOpacityChange(newOpacity) {
      setAttributes({
        overlayOpacity: newOpacity
      });
    }

    function onChangeAlignment(newAlignment) {
      setAttributes({
        alignment: newAlignment === undefined ? 'none' : newAlignment
      });
    }

    return [(0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(InspectorControls, {
      style: {
        marginBottom: '40px'
      }
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(PanelBody, {
      title: 'Font Color Settings'
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("strong", null, "Select a Title color:")), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(ColorPalette, {
      value: titleColor,
      onChange: onTitleColorChange
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(PanelBody, {
      title: 'Font Color Settings'
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("strong", null, "Select a body color:")), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(ColorPalette, {
      value: bodyColor,
      onChange: onBodyColorChange
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(PanelBody, {
      title: 'Background Image Settings'
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("strong", null, "Select a Background Image:")), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(MediaUpload, {
      onSelect: onSelectImage,
      type: "image",
      value: backgroundImage,
      render: _ref2 => {
        let {
          open
        } = _ref2;
        return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(IconButton, {
          className: "editor-media-placeholder__button is-button is-default is-large",
          icon: "upload",
          onClick: open
        }, "Background Image");
      }
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
      style: {
        marginTop: '20px',
        marginBottom: '40px'
      }
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("strong", null, "Overlay Color:")), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(ColorPalette, {
      value: overlayColor,
      onChange: onOverlayColorChange
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(RangeControl, {
      label: 'Overlay Opacity',
      value: overlayOpacity,
      onChange: onOverlayOpacityChange,
      min: 0,
      max: 1,
      step: 0.01
    }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
      className: "cta-container",
      style: {
        backgroundImage: `url(${backgroundImage})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat',
        textAlign: alignment
      }
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
      className: "cta-overlay",
      style: {
        background: overlayColor,
        opacity: overlayOpacity
      }
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(BlockControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(AlignmentToolbar, {
      value: alignment,
      onChange: onChangeAlignment
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(RichText, {
      key: "editable",
      tagName: "h2",
      placeholder: "Your CTA Title",
      value: title,
      onChange: onChangeTitle,
      style: {
        color: titleColor,
        textAlign: alignment
      }
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(RichText, {
      key: "editable",
      tagName: "p",
      placeholder: "Your CTA Description",
      value: body,
      onChange: onChangeBody,
      style: {
        color: bodyColor,
        textAlign: alignment
      }
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(InnerBlocks, {
      allowedBlocks: ALLOWED_BLOCKS
    }))];
  },
  save: _ref3 => {
    let {
      attributes
    } = _ref3;
    const {
      title,
      body,
      alignment,
      titleColor,
      bodyColor,
      backgroundImage,
      overlayColor,
      overlayOpacity
    } = attributes;
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
      className: "cta-container",
      style: {
        backgroundImage: `url(${backgroundImage})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat'
      }
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
      className: "cta-overlay",
      style: {
        background: overlayColor,
        opacity: overlayOpacity
      }
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", {
      style: {
        color: titleColor,
        textAlign: alignment
      }
    }, title), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(RichText.Content, {
      tagName: "p",
      value: body,
      style: {
        color: bodyColor,
        textAlign: alignment
      }
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(InnerBlocks.Content, null));
  }
});
}();
/******/ })()
;
//# sourceMappingURL=index.js.map