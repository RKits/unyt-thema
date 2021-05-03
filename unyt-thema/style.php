<?php

include_once '../../../wp-load.php';

header("Content-type: text/css");

?>

/*!
Theme Name: Unyt thema
Theme URI: http://underscores.me/
Author: Unyt
Author URI: http://www.unyt.nl
Description: Description
Version: 1.0.0
Tested up to: 5.4
Requires PHP: 5.6
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: unyt-thema
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned.

Unyt thema is based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc.
Underscores is distributed under the terms of the GNU GPL v2 or later.

Normalizing styles have been helped along thanks to the fine work of
Nicolas Gallagher and Jonathan Neal https://necolas.github.io/normalize.css/
*/
/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
# Generic
	- Normalize
	- Box sizing
# Base
	- Typography
	- Elements
	- Links
	- Forms
## Layouts
# Components
	- Navigation
	- Posts and pages
	- Comments
	- Widgets
	- Media
	- Captions
	- Galleries
# plugins
	- Jetpack infinite scroll
# Utilities
	- Accessibility
	- Alignments

--------------------------------------------------------------*/
/*--------------------------------------------------------------
# Generic
--------------------------------------------------------------*/
/* Normalize
--------------------------------------------- */
/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
/* Document
	 ========================================================================== */
/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */
 html {
	line-height: 1.15;
	-webkit-text-size-adjust: 100%;
}

/* Sections
	 ========================================================================== */
/**
 * Remove the margin in all browsers.
 */
body {
	margin: 0;
}

/**
 * Render the `main` element consistently in IE.
 */
main {
	display: block;
}

/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */
h1 {
	font-size: 2em;
	margin: 0.67em 0;
}

/* Grouping content
	 ========================================================================== */
/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */
hr {
	box-sizing: content-box;
	height: 0;
	overflow: visible;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */
pre {
	font-family: monospace, monospace;
	font-size: 1em;
}

/* Text-level semantics
	 ========================================================================== */
/**
 * Remove the gray background on active links in IE 10.
 */
a {
	background-color: transparent;
}

/**
 * 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */
abbr[title] {
	border-bottom: none;
	text-decoration: underline;
	text-decoration: underline dotted;
}

/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */
b,
strong {
	font-weight: bolder;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */
code,
kbd,
samp {
	font-family: monospace, monospace;
	font-size: 1em;
}

/**
 * Add the correct font size in all browsers.
 */
small {
	font-size: 80%;
}

/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
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

/* Embedded content
	 ========================================================================== */
/**
 * Remove the border on images inside links in IE 10.
 */
img {
	border-style: none;
}

/* Forms
	 ========================================================================== */
/**
 * 1. Change the font styles in all browsers.
 * 2. Remove the margin in Firefox and Safari.
 */
button,
input,
optgroup,
select,
textarea {
	font-family: inherit;
	font-size: 100%;
	line-height: 1.15;
	margin: 0;
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */
button,
input {
	overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */
button,
select {
	text-transform: none;
}

/**
 * Correct the inability to style clickable types in iOS and Safari.
 */
button,
[type="button"],
[type="reset"],
[type="submit"] {
	-webkit-appearance: button;
}

/**
 * Remove the inner border and padding in Firefox.
 */
button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
	border-style: none;
	padding: 0;
}

/**
 * Restore the focus styles unset by the previous rule.
 */
button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
	outline: 1px dotted ButtonText;
}

/**
 * Correct the padding in Firefox.
 */
fieldset {
	padding: 0.35em 0.75em 0.625em;
}

/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *		`fieldset` elements in all browsers.
 */
legend {
	box-sizing: border-box;
	color: inherit;
	display: table;
	max-width: 100%;
	padding: 0;
	white-space: normal;
}

/**
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */
progress {
	vertical-align: baseline;
}

/**
 * Remove the default vertical scrollbar in IE 10+.
 */
textarea {
	overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10.
 */
[type="checkbox"],
[type="radio"] {
	box-sizing: border-box;
	padding: 0;
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */
[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
	height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */
[type="search"] {
	-webkit-appearance: textfield;
	outline-offset: -2px;
}

/**
 * Remove the inner padding in Chrome and Safari on macOS.
 */
[type="search"]::-webkit-search-decoration {
	-webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */
::-webkit-file-upload-button {
	-webkit-appearance: button;
	font: inherit;
}

/* Interactive
	 ========================================================================== */
/*
 * Add the correct display in Edge, IE 10+, and Firefox.
 */
details {
	display: block;
}

/*
 * Add the correct display in all browsers.
 */
summary {
	display: list-item;
}

/* Misc
	 ========================================================================== */
/**
 * Add the correct display in IE 10+.
 */
template {
	display: none;
}

/**
 * Add the correct display in IE 10.
 */
[hidden] {
	display: none;
}

/* Box sizing
--------------------------------------------- */
/* Inherit box-sizing to more easily change it's value on a component level.
@link http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
*,
*::before,
*::after {
	box-sizing: inherit;
}

html {
	box-sizing: border-box;
}

/*--------------------------------------------------------------
# Base
--------------------------------------------------------------*/
/* Typography
--------------------------------------------- */
body,
button,
input,
select,
optgroup,
textarea {
	color: #404040;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
	font-size: 1rem;
	line-height: 1.5;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	clear: both;
}

p {
	margin-bottom: 1.5em;
}

dfn,
cite,
em,
i {
	font-style: italic;
}

blockquote {
	margin: 0 1.5em;
}

address {
	margin: 0 0 1.5em;
}

pre {
	background: #eee;
	font-family: "Courier 10 Pitch", courier, monospace;
	line-height: 1.6;
	margin-bottom: 1.6em;
	max-width: 100%;
	overflow: auto;
	padding: 1.6em;
}

code,
kbd,
tt,
var {
	font-family: monaco, consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
}

abbr,
acronym {
	border-bottom: 1px dotted #666;
	cursor: help;
}

mark,
ins {
	background: #fff9c0;
	text-decoration: none;
}


big {
	font-size: 125%;
}

/* Elements
--------------------------------------------- */
body {
	background: #fff;
}

ul,
ol {
	margin: 0 0 1.5em 3em;
}

ul {
	list-style: disc;
}

ol {
	list-style: decimal;
}

li > ul,
li > ol {
	margin-bottom: 0;
	margin-left: 1.5em;
}

dt {
	font-weight: 700;
}

dd {
	margin: 0 1.5em 1.5em;
}

/* Make sure embeds and iframes fit their containers. */
embed,
iframe,
object {
	max-width: 100%;
}

img {
	height: auto;
	max-width: 100%;
}

figure {
	margin: 1em 0;
}

table {
	margin: 0 0 1.5em;
	width: 100%;
}

/* Links
--------------------------------------------- */
a {
	color: #4169e1;
}

a:visited {
	color: #800080;
}

a:hover, a:focus, a:active {
	color: #191970;
}

a:focus {
	outline: thin dotted;
}

a:hover, a:active {
	outline: 0;
}

/* Forms
--------------------------------------------- */
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
	border: 1px solid;
	border-color: #ccc #ccc #bbb;
	border-radius: 3px;
	background: #e6e6e6;
	color: rgba(0, 0, 0, 0.8);
	line-height: 1;
	padding: 0.6em 1em 0.4em;
}

button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
	border-color: #ccc #bbb #aaa;
}

button:active, button:focus,
input[type="button"]:active,
input[type="button"]:focus,
input[type="reset"]:active,
input[type="reset"]:focus,
input[type="submit"]:active,
input[type="submit"]:focus {
	border-color: #aaa #bbb #bbb;
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"],
textarea {
	color: #666;
	border: 1px solid #ccc;
	border-radius: 3px;
	padding: 3px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus {
	color: #111;
}

select {
	border: 1px solid #ccc;
}

textarea {
	width: 100%;
}

/*--------------------------------------------------------------
# Layouts
--------------------------------------------------------------*/
.site{
	background: <?php echo get_option('primaire_kleur_code'); ?>;
}

.header {
	min-height: 80px;
	height: fit-content;
	display: flex;
	align-items: center;
}

#header .header-menu {
	display: flex;
	justify-content: space-between;
	align-items: center;
}

#header .header-menu a {
	z-index: 20;
}

#sidebar, .slider{
	font-size: <?php echo get_option('body-tekst_grootte'); ?>;
}
#sidebar h1,
#s .slider{
	font-size: <?php echo get_option('body-tekst_grootte'); ?>;
}

#header .header-menu a img {
	height: 70px;
	background: transparent;
}

#header .header-menu .wrapper {
	z-index: 20;
}

#header .header-menu .wrapper .hamburger {
	cursor: pointer;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	height: 35px;
}

#header .header-menu .wrapper .hamburger .bar1, #header .header-menu .wrapper .hamburger .bar2, #header .header-menu .wrapper .hamburger .bar3 {
	width: 35px;
	height: 4px;
	background-color: #868686ba;
	transition: 0.4s;
}

#header .header-menu .main-navigation {
	z-index: 10;
	position: absolute;
	top: 0;
	right: 0;
	transform: translateY(-100%);
	background: <?php echo get_option('primaire_kleur_code'); ?>;
	width: 100%;
	height: 100%;
	transition: 0.6s ease-in-out;
	display: flex;
	align-items: center;
}

#header .header-menu .main-navigation ul {
	padding: 0%;
	margin: 0%;
	width: 100%;
}

#header .header-menu .main-navigation ul li {
	text-align: center;
	list-style: none;
}

#header .header-menu .main-navigation ul li a {
	color: black;
	text-decoration: none;
	font-size: 20px;
	display: block;
	padding: 3% 0%;
}

#header .header-menu .main-navigation ul li a:hover {
	cursor: pointer;
}

#header .header-menu .open {
	transform: translate(0%);
}

#header .header-menu .open body {
	position: fixed;
}

#header .header-menu .wrapper .change .bar1 {
	-webkit-transform: rotate(-45deg) translate(-9px, 6px);
	transform: rotate(-45deg) translate(-9px, 6px);
}

#header .header-menu .wrapper .change .bar2 {
	opacity: 0;
}

#header .header-menu .wrapper .change .bar3 {
	-webkit-transform: rotate(45deg) translate(-8px, -8px);
	transform: rotate(45deg) translate(-8px, -8px);
}

.slider {
	background-size: cover;
	height: 700px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

.slider .slider-content {
	padding: 0px 30px;
}

.slider .slider-content .slider-title {
	color: white;
}

.slider .slider-content .slider-text {
	color: white;
}

.slider .slider-content a {
	width: fit-content;
}

@media only screen and (min-width: 768px) {
	#header .header-menu {
		flex-direction: column;
	}
	#header .header-menu .wrapper {
		display: none;
	}
	#header .header-menu .main-navigation {
		position: static;
		transform: none;
	}
	#header .header-menu .main-navigation #primary-menu {
		display: flex;
		justify-content: space-between;
		margin: 0%;
		padding: 0%;
	}
	#header .header-menu .main-navigation #primary-menu li {
		list-style: none;
	}
	#header .header-menu .main-navigation #primary-menu li a {
		text-decoration: none;
		color: black;
	}
}

@media only screen and (min-width: 960px) {
	#header .header-menu {
		display: flex;
		flex-direction: row;
	}
	#header .header-menu .main-navigation #primary-menu {
		justify-content: space-evenly;
	}
	.slider-content {
		width: 50%;
	}
}

.content-boxes {
	display: flex;
	flex-direction: column;
	justify-content: center;
	margin-bottom: 80px;
	margin-top: 80px;
}

.content-boxes .content-image {
	padding: 30px;
}

.content-boxes .title {
	color: black;
}

.content-boxes .content-text {
	color: black;
	line-height: 165%;
}

.bootstrap-card {
	display: flex;
	justify-content: center;
	align-self: center;
	padding: 30px 0px;
}

.bootstrap-card .card {
	height: 604px;
}

.footer-hr {
	margin-bottom: 0px;
}

.site-footer .site-info {
	padding-top: 60px;
	background: #6d3b83;
}

.site-footer .site-info .footer-content .footer-row {
	display: flex;
}

.site-footer .site-info .footer-content .footer-row .footer-columns {
	padding-bottom: 20px;
	text-align: center;
	color: white;
}

.site-footer .site-info .footer-content .footer-row .footer-columns a {
	color: white;
}

.site-footer .site-info .footer-content .footer-row .footer-columns a .fab {
	margin-right: 15px;
	font-size: 20px;
}

.site-footer .site-info .footer-content .footer-row .footer-columns a img {
	height: 70px;
}

.site-footer .site-info .footer-content .footer-row .footer-columns p a {
	color: white;
}

.site-footer .site-info .footer-content .footer-row .footer-columns p a .fab {
	margin-right: 15px;
	font-size: 20px;
}

.site-footer .site-info .footer-content .footer-row .footer-columns p a img {
	height: 70px;
}

.site-footer .site-info .copyright {
	text-align: center;
	color: white;
	font-size: 12px;
}

.site-footer .site-info .copyright p {
	margin-bottom: 0px;
}

@media only screen and (min-width: 768px) {
	.site-footer .site-info .footer-content .footer-row {
		display: flex;
		color: white;
	}
	.site-footer .site-info .footer-content .footer-row .footer-columns {
		padding-bottom: 20px;
		color: white;
		text-align: left;
	}
	.site-footer .site-info .footer-content .footer-row .footer-columns p a {
		color: white;
	}
	.site-footer .site-info .footer-content .footer-row .footer-columns p a .fab {
		margin-right: 15px;
		font-size: 20px;
	}
	.site-footer .site-info .footer-content .footer-row .footer-columns p a img {
		height: 70px;
	}
}

/*--------------------------------------------------------------
# Components
--------------------------------------------------------------*/
/* Navigation
--------------------------------------------- */
/* Posts and pages
--------------------------------------------- */
.sticky {
	display: block;
}

.updated:not(.published) {
	display: none;
}

.page-content,
.entry-content,
.entry-summary {
	margin: 1.5em 0 0;
}

.page-links {
	clear: both;
	margin: 0 0 1.5em;
}

/* Comments
--------------------------------------------- */
.comment-content a {
	word-wrap: break-word;
}

.bypostauthor {
	display: block;
}

/* Widgets
--------------------------------------------- */
.widget {
	margin: 0 0 1.5em;
}

.widget select {
	max-width: 100%;
}

/* Media
--------------------------------------------- */
.page-content .wp-smiley,
.entry-content .wp-smiley,
.comment-content .wp-smiley {
	border: none;
	margin-bottom: 0;
	margin-top: 0;
	padding: 0;
}

/* Make sure logo link wraps around logo image. */
.custom-logo-link {
	display: inline-block;
}

/* Galleries
--------------------------------------------- */
.gallery {
	margin-bottom: 1.5em;
	display: grid;
	grid-gap: 1.5em;
}

.gallery-item {
	display: inline-block;
	text-align: center;
	width: 100%;
}

.gallery-columns-2 {
	grid-template-columns: repeat(2, 1fr);
}

.gallery-columns-3 {
	grid-template-columns: repeat(3, 1fr);
}

.gallery-columns-4 {
	grid-template-columns: repeat(4, 1fr);
}

.gallery-columns-5 {
	grid-template-columns: repeat(5, 1fr);
}

.gallery-columns-6 {
	grid-template-columns: repeat(6, 1fr);
}

.gallery-columns-7 {
	grid-template-columns: repeat(7, 1fr);
}

.gallery-columns-8 {
	grid-template-columns: repeat(8, 1fr);
}

.gallery-columns-9 {
	grid-template-columns: repeat(9, 1fr);
}

.gallery-caption {
	display: block;
}

/* Buttons
--------------------------------------------- */

.medium-button-white {
	background: <?php echo get_option('button_kleur_code');  ?>;
	border: 2px solid red
	border-radius: 10%;
	color: red;
	width: fit-content;
	font-size: 20px;
}

.medium-button-white .button-a {
	text-decoration: none;
	color: red;
}

.medium-button-white .button-a:visited {
	color: red;
}

.medium-button-black {
	background: transparent;
	border: 2px solid red;
	border-radius: 10%;
	color: red;
	width: fit-content;
}

.medium-button-black .button-a {
	text-decoration: none;
	color: red;
}

.medium-button-black .button-a:visited {
	color: red;
}

/*--------------------------------------------------------------
# Plugins
--------------------------------------------------------------*/
/* Jetpack infinite scroll
--------------------------------------------- */
/* Hide the Posts Navigation and the Footer when Infinite Scroll is in use. */
.infinite-scroll .posts-navigation,
.infinite-scroll.neverending .site-footer {
	display: none;
}

/* Re-display the Theme Footer when Infinite Scroll has reached its end. */
.infinity-end.neverending .site-footer {
	display: block;
}

/*--------------------------------------------------------------
# Utilities
--------------------------------------------------------------*/
/* Accessibility
--------------------------------------------- */
/* Text meant only for screen readers. */
.screen-reader-text {
	border: 0;
	clip: rect(1px, 1px, 1px, 1px);
	clip-path: inset(50%);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute !important;
	width: 1px;
	word-wrap: normal !important;
}

.screen-reader-text:focus {
	background-color: #f1f1f1;
	border-radius: 3px;
	box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
	clip: auto !important;
	clip-path: none;
	color: #21759b;
	display: block;
	font-size: 0.875rem;
	font-weight: 700;
	height: auto;
	left: 5px;
	line-height: normal;
	padding: 15px 23px 14px;
	text-decoration: none;
	top: 5px;
	width: auto;
	z-index: 100000;
}

/* Do not show the outline on the skip link target. */
#primary[tabindex="-1"]:focus {
	outline: 0;
}

/* Alignments
--------------------------------------------- */
.alignleft {
	/*rtl:ignore*/
	float: left;
	/*rtl:ignore*/
	margin-right: 1.5em;
	margin-bottom: 1.5em;
}

.alignright {
	/*rtl:ignore*/
	float: right;
	/*rtl:ignore*/
	margin-left: 1.5em;
	margin-bottom: 1.5em;
}

.aligncenter {
	clear: both;
	margin-bottom: 1.5em;
}

/*# sourceMappingURL=style.css.map */