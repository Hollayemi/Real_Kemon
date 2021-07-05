<style>
@charset "utf-8";
@import url("fontawesome-free/css/fontawesome-all.min.css");
@import url("framework.css");

/* Rows
--------------------------------------------------------------------------------------------------------------- */
.row0, .row0 a{}
.row1, .row1 a{}
.row2, .row2 a{}
.row3, .row3 a{}
.row4, .row4 a{}
.row5{border-top:1px solid;}


/* Top Bar
--------------------------------------------------------------------------------------------------------------- */
#topbar{padding:15px 0; font-size:.8rem; text-transform:uppercase;}

#topbar ul li{display:inline-block; margin-right:10px; padding-right:15px; border-right:1px solid;}
#topbar ul li:last-child{margin-right:0; padding-right:0; border-right:none;}
#topbar i{line-height:normal;}


/* Header
--------------------------------------------------------------------------------------------------------------- */
#header{padding:50px 0;}

#header #logo *{margin:0; padding:0; line-height:1;}
#header #logo h1{font-size:25px; font-weight:700;}
#header #logo h1 span{font-size:3rem; font-weight:400;}

#header ul{}
#header ul li{}
#header ul li div{position:relative; min-height:60px; padding:0 0 0 80px;}
#header ul li div i{position:absolute; top:0; left:0; width:60px; height:60px; line-height:58px; font-size:22px; text-align:center; border:1px solid; border-radius:50%;}
#header ul li div span{display:block; padding:8px 0 0 0;}

#header div:last-child{margin-bottom:0;}/* Used when elements stack in small viewports */


/* Page Intro
--------------------------------------------------------------------------------------------------------------- */
#pageintro{padding:180px 0;}

#pageintro article{display:block; max-width:75%;}
#pageintro .heading{margin-bottom:20px; font-size:4rem;}
#pageintro p:first-of-type{margin:0 0 20px 0; text-transform:uppercase; font-size:1.6rem; letter-spacing:5px;}
#pageintro footer{margin-top:50px;}


/* Content Area
--------------------------------------------------------------------------------------------------------------- */
.container{padding:80px 0;}

/* Content */
.container .content{}

.sectiontitle{display:block; max-width:55%; margin:0 auto 80px; text-align:center;}
.sectiontitle *{margin:0;}

.ringcon{display:inline-block; border:1px solid; border-radius:50%;}
.ringcon i{display:block; width:160px; height:160px; line-height:160px; font-size:56px;}

.overview{}
.overview > li{margin-bottom:30px;}
.overview > li:nth-last-child(-n+3){margin-bottom:0;}/* Removes bottom margin from the last three items - margin is restored in the media queries when items stack */
.overview > li:nth-child(3n+1){margin-left:0; clear:left;}/* Removes the need to add class="first" */
.overview > li figure{position:relative; max-width:348px;}/* Uses the one_third width in pixels */
.overview > li figure a::after{position:absolute; top:0; right:0; bottom:0; left:0; content:"";}
.overview > li figure figcaption{display:block; position:absolute; bottom:0; width:100%; padding:15px;}
.overview > li figure a::after, .overview > li figure figcaption{}
.overview > li figure:hover a::after, .overview > li figure:hover figcaption{opacity:0; visibility:hidden;}
.overview > li figure figcaption *{margin:0;}
.overview > li figure .heading{margin-bottom:10px; font-size:1.2rem;}

/* Comments */
#comments ul{margin:0 0 40px 0; padding:0; list-style:none;}
#comments li{margin:0 0 10px 0; padding:15px;}
#comments .avatar{float:right; margin:0 0 10px 10px; padding:3px; border:1px solid;}
#comments address{font-weight:bold;}
#comments time{font-size:smaller;}
#comments .comcont{display:block; margin:0; padding:0;}
#comments .comcont p{margin:10px 5px 10px 0; padding:0;}

#comments form{display:block; width:100%;}
#comments input, #comments textarea{width:100%; padding:10px; border:1px solid;}
#comments textarea{overflow:auto;}
#comments div{margin-bottom:15px;}
#comments input[type="submit"], #comments input[type="reset"]{display:inline-block; width:auto; min-width:150px; margin:0; padding:8px 5px; cursor:pointer;}

/* Sidebar */
.container .sidebar{}

.sidebar .sdb_holder{margin-bottom:50px;}
.sidebar .sdb_holder:last-child{margin-bottom:0;}


/* Testimonials
--------------------------------------------------------------------------------------------------------------- */
#testimonials{}

#testimonials article{text-align:center;}
#testimonials article *{margin:0; padding:0;}
#testimonials article img{margin-bottom:20px; border-radius:50%;}
#testimonials article blockquote{margin-bottom:20px; padding:20px;}
#testimonials article blockquote::before{top:5px; left:5px; font-size:30px; line-height:30px;}
#testimonials article .heading{font-size:1.4rem;}
#testimonials article em{display:block; margin-top:-5px; font-size:.8rem; font-style:normal;}


/* Latest
--------------------------------------------------------------------------------------------------------------- */
#latest{}

#latest article{}
#latest article figure{display:block; position:relative;}
#latest article figure img{}
#latest article figure figcaption{position:absolute; top:10px; left:10px; width:50px;}
#latest article figure figcaption *{display:block; margin:0; padding:0; text-align:center; text-transform:uppercase; font-style:normal; line-height:1;}
#latest article figure figcaption time{width:100%;}
#latest article figure figcaption time strong{padding:12px 0; font-size:18px;}
#latest article figure figcaption time em{padding:8px 0;}
#latest article .excerpt{padding:25px 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif !important;}
#latest article .excerpt .heading{margin:0 0 10px 0; font-size:1.4rem;}
#latest article .excerpt .meta{}
#latest article .excerpt .meta li{display:inline-block; font-size:.8rem;}
#latest article .excerpt .meta li::after{margin-left:5px; content:"|";}
#latest article .excerpt .meta li:last-child::after{margin:0; content:"";}
#latest article .excerpt p{}
#latest article .excerpt footer{margin-top:30px;}


/* Click to Action
--------------------------------------------------------------------------------------------------------------- */
#cta{}

#cta .sectiontitle{margin-bottom:50px;}

#cta ul{}
#cta ul li{}
#cta ul li:last-child{margin-bottom:0;}/* Used when elements stack in small viewports */
#cta ul li div{position:relative; min-height:60px; padding:20px; padding-left:100px;}
#cta ul li div i{position:absolute; top:20px; left:20px; width:60px; height:60px; line-height:58px; font-size:22px; text-align:center; border:1px solid; border-radius:50%;}
#cta ul li div span{display:block; padding:8px 0 0 0;}
#cta ul li div span strong{display:block; text-transform:capitalize;}


/* Footer
--------------------------------------------------------------------------------------------------------------- */
#footer{padding:80px 0;}

#footer .heading{margin-bottom:50px; font-size:1.2rem;}

#footer h1{margin-bottom:40px; font-size:32px; font-weight:700;}
#footer h1 span{font-size:4rem; font-weight:400;}

#footer .linklist li{display:block; margin-bottom:15px; padding:0 0 15px 0; border-bottom:1px solid;}
#footer .linklist li:last-child{margin:0; padding:0; border:none;}
#footer .linklist li::before, #footer .linklist li::after{display:table; content:"";}
#footer .linklist li, #footer .linklist li::after{clear:both;}

#footer input, #footer button{border:1px solid;}
#footer input{display:block; width:100%; padding:8px;}
#footer button{padding:8px 18px 10px; text-transform:uppercase; font-weight:700; cursor:pointer;}


/* Copyright
--------------------------------------------------------------------------------------------------------------- */
#copyright{padding:20px 0;}
#copyright *{margin:0; padding:0;}


/* Transition Fade
This gives a smooth transition to "ALL" elements used in the layout - other than the navigation form used in mobile devices
If you don't want it to fade all elements, you have to list the ones you want to be faded individually
Delete it completely to stop fading
--------------------------------------------------------------------------------------------------------------- */
*, *::before, *::after{transition:all .3s ease-in-out;}
#mainav form *{transition:none !important;}


/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */


/* Navigation
--------------------------------------------------------------------------------------------------------------- */
nav ul, nav ol{margin:0; padding:0; list-style:none;}

#mainav, #breadcrumb, .sidebar nav{line-height:normal;}
#mainav .drop::after, #mainav li li .drop::after, #breadcrumb li a::after, .sidebar nav a::after{position:absolute; font-family:"Font Awesome\ 5 Free"; font-weight:900; font-size:10px; line-height:10px;}

/* Top Navigation */
#mainav{position:relative; margin-bottom:-30px; padding:0; z-index:999;}
#mainav ul{text-transform:uppercase;}
#mainav ul ul{z-index:9999; position:absolute; width:180px; text-transform:none; text-align:left;}
#mainav ul ul ul{left:180px; top:0;}
#mainav li{display:block; float:left; position:relative; margin:0; padding:0;}
#mainav li:last-child{margin-right:0;}
#mainav li li{width:100%; margin:0;}
#mainav li a{display:block; padding:20px;}
#mainav li li a{border:solid; border-width:0 0 1px 0;}
#mainav .drop{padding-left:15px;}
#mainav li li a, #mainav li li .drop{display:block; margin:0; padding:10px 15px;}
#mainav .drop::after, #mainav li li .drop::after{content:"\f0d7";}
#mainav .drop::after{top:25px; left:5px;}
#mainav li li .drop::after{top:15px; left:5px;}
#mainav ul ul{visibility:hidden; opacity:0;}
#mainav ul li:hover > ul{visibility:visible; opacity:1;}

#mainav form{display:none; margin:0; padding:0;}
#mainav form select, #mainav form select option{display:block; cursor:pointer; outline:none;}
#mainav form select{width:100%; padding:5px; border:none;}
#mainav form select option{margin:5px; padding:0; border:none;}

/* Breadcrumb */
#breadcrumb{padding:150px 0 30px;}
#breadcrumb ul{margin:0; padding:0; list-style:none; text-transform:uppercase;}
#breadcrumb li{display:inline-block; margin:0 6px 0 0; padding:0;}
#breadcrumb li a{display:block; position:relative; margin:0; padding:0 12px 0 0; font-size:12px;}
#breadcrumb li a::after{top:4px; right:0; content:"\f0da";}
#breadcrumb li:last-child a{margin:0; padding:0;}
#breadcrumb li:last-child a::after{display:none;}
#breadcrumb .heading{margin:0; font-size:2rem;}

/* Sidebar Navigation */
.sidebar nav{display:block; width:100%;}
.sidebar nav li{margin:0 0 3px 0; padding:0;}
.sidebar nav a{display:block; position:relative; margin:0; padding:5px 10px 5px 15px; text-decoration:none; border:solid; border-width:0 0 1px 0;}
.sidebar nav a::after{top:10px; left:5px; content:"\f0da";}
.sidebar nav ul ul a{padding-left:35px;}
.sidebar nav ul ul a::after{left:25px;}
.sidebar nav ul ul ul a{padding-left:55px;}
.sidebar nav ul ul ul a::after{left:45px;}

/* Pagination */
.pagination{display:block; width:100%; text-align:center; clear:both;}
.pagination li{display:inline-block; margin:0 2px 0 0;}
.pagination li:last-child{margin-right:0;}
.pagination a, .pagination strong{display:block; padding:8px 11px; border:1px solid; background-clip:padding-box; font-weight:normal;}

/* Back to Top */
#backtotop{z-index:999; display:inline-block; position:fixed; visibility:hidden; bottom:20px; right:20px; width:36px; height:36px; line-height:36px; font-size:16px; text-align:center; opacity:.2;}
#backtotop i{display:block; width:100%; height:100%; line-height:inherit;}
#backtotop.visible{visibility:visible; opacity:.5;}
#backtotop:hover{opacity:1;}


/* Tables
--------------------------------------------------------------------------------------------------------------- */
table, th, td{border:1px solid; border-collapse:collapse; vertical-align:top;}
table, th{table-layout:auto;}
table{width:100%; margin-bottom:15px;}
th, td{padding:5px 8px;}
td{border-width:0 1px;}


/* Gallery
--------------------------------------------------------------------------------------------------------------- */
#gallery{display:block; width:100%; margin-bottom:50px;}
#gallery figure figcaption{display:block; width:100%; clear:both;}
#gallery li{margin-bottom:30px;}


/* Font Awesome Social Icons
--------------------------------------------------------------------------------------------------------------- */
.faico{margin:0; padding:0; list-style:none;}
.faico li{display:inline-block; margin:8px 5px 0 0; padding:0; line-height:normal;}
.faico li:last-child{margin-right:0;}
.faico a{display:inline-block; width:36px; height:36px; line-height:36px; font-size:18px; text-align:center;}

.faico a{color:#FFFFFF; background-color:#0E74A5;}
.faico a:hover{}

.faicon-dribble:hover{background-color:#EA4C89;}
.faicon-facebook:hover{background-color:#3B5998;}
.faicon-google-plus:hover{background-color:#DB4A39;}
.faicon-linkedin:hover{background-color:#0E76A8;}
.faicon-twitter:hover{background-color:#00ACEE;}
.faicon-vk:hover{background-color:#4E658E;}


/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */


/* Colours
--------------------------------------------------------------------------------------------------------------- */
body{color:#474747; background-color:#FFFFFF;}
a{color:#F7A804;}
a:active, a:focus{background:transparent;}/* IE10 + 11 Bugfix - prevents grey background */
hr, .borderedbox{border-color:#D7D7D7;}
label span{color:#FF0000; background-color:inherit;}
input:focus, textarea:focus, *:required:focus{border-color:#56AED4;}

.overlay{color:#FFFFFF; background-color:inherit;}
.overlay::after{color:inherit; background-color:rgba(0,0,0,.55);}
.overlay.light{color:#474747;}
.overlay.light::after{background-color:rgba(255,255,255,.7);}

.btn{height:50px; line-height:40px;padding:0px;color:#fff;}

.logoname{color:#F7A804;}
.logoname span{color:#0E74A5;}


/* Rows */
.row0, .row0 a{color:#FFFFFF; background-color:#0E74A5;}
.row1{color:#474747; background-color:#FFFFFF;}
.row2{color:#474747; background-color:#F4F4F4;}
.row3{color:#474747; background-color:#FFFFFF;}
.row4{color:#474747; background-color:#FFFFFF;}
.row5, .row5 a{color:#474747; background-color:#FFFFFF;}
.row5{border-color:rgba(0,0,0,.1);}

.gradient{color:#FFFFFF; background:linear-gradient(to bottom right, #0E74A5, #4FB5F5);}


/* Top Bar */
#topbar ul li{border-color:rgba(255,255,255,.4);}
#topbar div:first-of-type li:first-child a{color:#F7A804;}


/* Header */
#header a{color:inherit;}
#header ul li div i{border-color:rgba(0,0,0,.1);}


/* Page Intro */
#pageintro{color:#FFFFFF;}


/* Content Area */
.ringcon{background-color:#FFFFFF; border-color:rgba(0,0,0,.2);}
.ringcon:hover{color:#FFFFFF; background-color:#F7A804;}

.overview > li figure a::after{background-color:rgba(0,0,0,.5);}
.overview > li figure figcaption{color:#FFFFFF;}


/* Testimonials */
#testimonials article blockquote{color:#474747; background-color:#FFFFFF;}
#testimonials article blockquote::before{color:rgba(0,0,0,.1);}


/* Latest */
#latest article figure figcaption{color:#FFFFFF;}
#latest article figure figcaption time strong{background-color:#1B2026;}
#latest article figure figcaption time em{background-color:#0F1620;}
#latest article .excerpt{color:inherit; background-color:#FFFFFF;}


/* Click to Action */
#cta ul li{color:#474747; background-color:#FFFFFF;}
#cta ul li div i{color:#4FB5F5; border-color:rgba(0,0,0,.1);}


/* Footer */
#footer .heading{color:#000000;}
#footer hr, #footer .borderedbox, #footer .linklist li{border-color:rgba(0,0,0,.1);}

#footer input, #footer button{border-color:transparent;}
#footer input{color:#FFFFFF; background-color:#0E74A5;}
#footer input:focus{border-color:#F7A804;}
#footer button{color:#FFFFFF; background-color:#F7A804;}


/* Navigation */
#mainav{color:#FFFFFF; background-color:#F7A804;}
#mainav li a{color:inherit;}
#mainav .active a, #mainav a:hover, #mainav li:hover > a{color:#0E74A5; background-color:inherit;}
#mainav li li a, #mainav .active li a{color:#FFFFFF; background-color:rgba(247,168,4,.5);/* #F7A804 */ border-color:rgba(0,0,0,.6);}
#mainav li li:hover > a, #mainav .active .active > a{color:#0E74A5; background-color:#F7A804;}
#mainav form select{color:#474747; background-color:#FFFFFF;}

#breadcrumb a{color:inherit; background-color:inherit;}
#breadcrumb li:last-child a{color:#F7A804;}

.container .sidebar nav a{color:inherit; border-color:#D7D7D7;}
.container .sidebar nav a:hover{color:#F7A804;}

.pagination a, .pagination strong{border-color:#D7D7D7;}
.pagination .current *{color:#FFFFFF; background-color:#F7A804;}

#backtotop{color:#FFFFFF; background-color:#F7A804;}


/* Tables + Comments */
table, th, td, #comments .avatar, #comments input, #comments textarea{border-color:#D7D7D7;}
#comments input:focus, #comments textarea:focus, #comments *:required:focus{border-color:#F7A804;}
th{color:#FFFFFF; background-color:#373737;}
tr, #comments li, #comments input[type="submit"], #comments input[type="reset"]{color:inherit; background-color:#FBFBFB;}
tr:nth-child(even), #comments li:nth-child(even){color:inherit; background-color:#F7F7F7;}
table a, #comments a{background-color:inherit;}


/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */


/* Media Queries
--------------------------------------------------------------------------------------------------------------- */
@-ms-viewport{width:device-width;}


/* Max Wrapper Width - Laptop, Desktop etc.
--------------------------------------------------------------------------------------------------------------- */
@media screen and (min-width:1140px){
	.hoc{max-width:1140px;}
}


/* Mobile Devices
--------------------------------------------------------------------------------------------------------------- */
.show_shotLink{
	display:none;
}
.shotLnk{
	display:block;
	position: fixed;
	top:0px;
	z-index:3000;
	background-color: #085c83;
	right:-70%;
	width:70%;
	height:100%;
	overflow-y: hidden;
	color:#fff;
	padding:30px 0px 30px 20px;
	transition:1s;
}
.cancel_x{
	background-color: #197099;
}
.shotLnk li a{
	color:#fff;
	font-size:18px;
}
.shotLnk li{
	list-style-type: none;
}
.shotLnk .cancel_x{
	background-color: transparent;
	border:none;
	color: #fff;
	height:50px;
	width:50px;
	border-radius:50%;
	font-size:20px;
	float: right;
	margin-top:-25px;
	z-index:500000;
}
.show_shotLink{
	height:40px;
	width:40px;
	background-color: #0E74A5;
	border:none;
	position:fixed;
	right:10px;
	top:4px;
	z-index:3000067;
}
@media screen and (max-width:979px){
	.show_shotLink{
		display:block;
	}
}
#showLinkMe{display:none}
@media screen and (max-width:978px){
	.myTopBar{display:none}
	.myTop{width:1000%; background-color: #0E74A5;}
	#topbar{display:block;}
	#showLinkMe{display:block}
	.shotLnk{
		display:block;
	}
	.hoc{max-width:90%;}

	#mainav{padding:15px;}
	#mainav ul{display:none;}
	#mainav form{display:block;}

	#comments input[type="reset"]{margin-top:10px;}
	.pagination li{display:inline-block; margin:0 5px 5px 0;}

	#copyright p:first-of-type{margin-bottom:10px;}
}

@media screen and (max-width:750px){
	.imgl, .imgr{display:inline-block; float:none; margin:0 0 10px 0;}
	.fl_left, .fl_right{display:block; float:none;}
	.group .group > *:last-child, .clear .clear > *:last-child, .clear .group > *:last-child, .group .clear > *:last-child{margin-bottom:0 !important;}/* Experimental - Needs more testing in different situations, stops double margin when stacking */
	.one_half, .one_third, .two_third, .one_quarter, .two_quarter, .three_quarter{display:block !important; float:none !important; width:auto !important; margin:0 0 30px 0 !important; padding:0 !important;}

	#topbar{padding-top:15px; text-align:center !important;}
	#topbar ul{margin:0 0 15px 0; line-height:normal !important;}

	#header{}

	#pageintro article{max-width:none; text-align:left !important;}
	#pageintro .heading{font-size:2rem !important;}
	#pageintro p:first-of-type{font-size:1rem !important;}

	.sectiontitle{max-width:none !important;}

	.overview > li:nth-last-child(-n+3){margin-bottom:30px !important;}

	#latest article{max-width:348px;}/* Uses the one_third width in pixels */

	#footer{padding-bottom:50px;}/* Not required, just looks a little better */
}

@media screen and (max-width:450px){
	#topbar ul li{margin-bottom:2px; padding-right:0; border-right:none;}
}


/* Other
--------------------------------------------------------------------------------------------------------------- */
@media screen and (max-width:650px){
	.scrollable{display:block; width:100%; margin:0 0 30px 0; padding:0 0 15px 0; overflow:auto; overflow-x:scroll;}
	.scrollable table{margin:0; padding:0; white-space:nowrap;}

	.inline li{display:block; margin-bottom:10px;}
	.pushright li{margin-right:0;}

	.font-x2{font-size:1.4rem;}
	.font-x3{font-size:1.6rem;}
}
</style>