webpackJsonp([0],{

/***/ 170:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_react__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_react___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_react__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_react_router__ = __webpack_require__(62);





var Home = function Home(props) {

    return __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
        'div',
        null,
        __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
            'header',
            null,
            __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
                'div',
                { className: 'title' },
                __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
                    __WEBPACK_IMPORTED_MODULE_1_react_router__["Link"],
                    { to: '/' },
                    'Productivity Application'
                )
            ),
            __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
                'nav',
                null,
                __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
                    __WEBPACK_IMPORTED_MODULE_1_react_router__["Link"],
                    { to: '/' },
                    'Home'
                ),
                __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
                    __WEBPACK_IMPORTED_MODULE_1_react_router__["Link"],
                    { to: '/features' },
                    'Features'
                ),
                __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
                    __WEBPACK_IMPORTED_MODULE_1_react_router__["Link"],
                    { to: '/gallery' },
                    'Gallery'
                ),
                __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
                    __WEBPACK_IMPORTED_MODULE_1_react_router__["Link"],
                    { to: '/about' },
                    'About Us'
                ),
                __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
                    __WEBPACK_IMPORTED_MODULE_1_react_router__["Link"],
                    { to: '/contact' },
                    'Contact Us'
                )
            )
        ),
        __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
            'div',
            null,
            __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
                'h1',
                null,
                'HOME PAGE'
            ),
            __WEBPACK_IMPORTED_MODULE_0_react___default.a.createElement(
                'p',
                null,
                'Welcome to Productivity Application Home Page.'
            )
        )
    );
};

/* harmony default export */ __webpack_exports__["default"] = (Home);

/***/ })

});