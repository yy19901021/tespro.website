body{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	word-spacing: 0.3em;
	color: #333;
	background-color: #32434F;
	text-align: center;
	padding: 0;
	margin: 0;
	line-height: 190%;
}
img{
	border: 0;
}
a, a:visited{
	color: #3863AA;
	text-decoration: none;
	border-bottom: 1px dotted #3863AA;
	padding-bottom: 0.1em;
}
a:hover{
	color: #3863AA;
}
table{
	clear:both;
	border: none;
	border-spacing: 0;
	border-collapse: collapse;
}
.Symbol{
	font-size:16px;
}
.Clear{
	clear: both;
}

#Wrapper{
	text-align: left;
	background-color: #FFF;
	border-top: 1em solid #24282B;
	/*	padding-top: 1em;*/
	/*
	background-image: url(../images/wrapper_shadow.gif);
	background-repeat: repeat-y;
	*/
}
#Header{
	background-color: #32434F;
	color: #fff;
	background-image: url("../images/header_brg.jpg");
	background-repeat: repeat-x;
	background-position: top left;
	border-top: 1px solid #8E9FAB;
}
#Logo{
	/*border: 1px solid blue;*/
	width:321px;
	margin-top: 31px;
	margin-left: 3em;
}
#Header a, #Header a:visited{
	border: 0;
	color: #fff;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
#Content{
	width: 760px;
	padding: 1em;
	font-size: 14px;
}
#Footer{
	padding: 1em 2em;
	color: silver;
	text-align: left;
}

/*** UI Library ***/

/** --- Blue tabs on dark blue background ---**/
div.BlueTabs{
	clear: both;
	margin-top: 0px;
	overflow: visible;
	padding-left: 24em;
}

div.BlueTabs div {
	float: left;
}

div.BlueTabs div.CurrentTab{
	background-color: #566C7C;
	margin-left: 1em;
}

div.BlueTabs div.CurrentTab div{
	color: #fff;
	cursor: default;
	background: url("../images/BlueTabsL.gif") no-repeat;
	background-color: #566C7C;
}

div.BlueTabs div.CurrentTab span, div.BlueTabs div.CurrentTab a{
	display: block;
	padding: 0.2em 0.8em;
	background: url("../images/BlueTabsR.gif") no-repeat top right;
	color: #fff;
	text-decoration: none;
}

div.BlueTabs div.Tab div{
	padding: 0.25em 0;
	text-align: center;
	cursor: pointer;
}

div.BlueTabs div.Tab span, div.BlueTabs div.Tab a{
	padding: 0px 8px;
	text-align: center;
	color: #fff;
	text-decoration: none;
	background-color: transparent;
}

div.BlueTabs div.Tab a:hover{
	text-decoration: underline;
}

div.BlueTabs div span.VerticalBar{
	display: none;
	background: transparent;
	padding-left: 0px;
	padding-right: 0;
	text-align: center;
}

/***Page Content Styles***/
h1{
	clear: both;
	font-size: 18px;
	font-weight: normal;
	color: #32536e;
	padding-bottom: 0.3em;
	border-bottom: 1px solid #999999;
}
h2{
	text-align: left;
	font-size: 14px;
	font-weight: bold;
	border-bottom: 2px dotted #336699;
	padding-bottom: 0.2em;
	color: #32536e;
}
h3{
	font-size: 14px;
	font-weight: bold;
	color: #32536e;
}
div.Products{
	margin: 0em;
	position: relative;
}

div.Products ul{
	margin-left: 1em;
	padding: 0;
}
div.Products img{
	border: 1px solid #333;
	padding: 0.4em;
	float: right;
	margin-left: 1em;
	margin-bottom: 1em;
}

/* Pending delete */
div.Features{
	position: absolute;
	right: 0;
	top: 0;
	background-color: yellow;
	width: 10em;
	padding: 1em;
	border: 1px solid gray;
}

p.ShortDesp{
	margin-left:0em;
}

.Remark{
	font-style: italic;
}

div.Products thead{
	border: 1px solid gray;
	padding: 2;
	background-color: #D4E1D5;
}
div.Products td{
	border: 1px solid gray;
	padding: 0.2em;
	vertical-align: top;
}

div.Products td img{
	border-width: 0px;
	float: none;
	margin: 0;
}
div.Products td input.Text{
	width:3em;
}

table.List td{
	border-width: 0;
}
col.Title{
	font-weight: bold;
	width: 9em;
}

#ModelNameDesp{
	margin-left: 1em;
}
#ModelNameDesp thead{
	border: 1px solid gray;
	padding: 2;
	background-color: #D4E1D5;
	font-size: 18px;
}
#ModelNameDesp td{
	text-align:center;
}
#ModelNameDesp tbody{
	font-size: 12px;
}

/*** For homepage only ***/
div.PromotionalArea{
	background-color:	#6EBAF0;
}
.Shadow1{
	background-color: #C9C9C9;
	height: 1px;
}
.Shadow2{
	background-color:	#D1D1D1;
	height: 1px;
}
.Shadow3{
	background-color:	#DEDDDE;
	height: 1px;
}

div.PromotionalArea img{
	border: 0;
	margin: 0;
}
#ProductCategories{
	float: left;
	width: 320px;
}
#WhatWeDo{
	float: left;
	width: 320px;
	margin-left: 5em;
}
#OurCustomers{
	clear: both;
}
#OurCustomers img{
	float: none;
	border: 0;
	margin: 0;
	padding: 0;
}