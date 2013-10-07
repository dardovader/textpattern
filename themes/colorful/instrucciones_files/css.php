/*
Theme Name: Borderline Chaos
Theme URI: http://theloo.org/2005/03/06/borderline-chaos/
Description: A left nav fluid theme for <a href="http://wordpress.org/">Wordpress 1.5</a>
Version: 1.9
Author: <a href="http://theloo.org/about/">Marianne</a>
Author URI: http://theloo.org/

License: <A HREF="http://www.gnu.org/copyleft/lesser.html">GNU Lesser General Public License</A>

Ported to Textpattern with a little magic dust by Stuart - http://thebombsite.com/

Minor changes and little additions by Samuel Villafranca - http://estupidez-artificial.es

Derived theme name: TXP Colorful
Sample site: http://estupidez-artificial.es/colorful

Thanks to Stuart for the magic dust.
*/


* {
        padding: 0;
        margin: 0;
        outline: 0;
}

#accessibility {
        position: absolute;
        top: -10000px;
}

p {
        padding:10px 0 10px 0;
        line-height: 1.6em;
}

body {
	background: #CCCCCC url(/colorful/images/3.png) repeat top left;
  	font-family: Verdana, Arial;
	font-size: 75%;
}

#masthead { 
	margin-top: 20px;
	border-top: 0px solid black;
	border-bottom: 0px solid black;
 	height: 25px;
}
#titlehead {
        width: 800px;
}

#blogtitle {
	width: 200px; /* Adjust this for the length of your site title.*/
	margin-left: 20px;
	color: #000000;
	background-color: #FFFF00; 
	text-align: left;
	padding: 10px 10px 10px 10px;
    	font-family: Verdana, Arial;
	box-shadow: 5px 5px 5px #333333;
    	float: left;
}

#blogtitle a {
	color: #8B1C62;
	font-variant: small-caps;
	font-weight: bold;
	font-size: 2em;
}

#blogtitle a:visited {
	color: #8B1C62;
	font-variant: small-caps;
	font-weight: bold;
	font-size: 2em;
}

#blogtitle a:hover {
	color: #000000;
	font-variant: small-caps;
	font-weight: bold;
	font-size: 2em;
}

#blogsubtitle {
	width: 260px; /* Adjust this for the length of your site title.*/
	margin-top: -30px;
	margin-left: 280px;
	color: #000000;
	background-color: #99FF66; 
	text-align: left;
	padding: 10px 10px 10px 10px;
    	font-family: Verdana, Arial;
	box-shadow: 5px 5px 5px #333333;
	font-size: 1.4em;
}

#insideWrapper {
        width: 100%;
}

#contentwrapper {	
	margin-top: 30px;
	margin-left: 280px;
        padding-right: 30px;
}

#content {
        float: right;
        width: 100%;
	background-color: #ffffff;
	text-align: left;
        padding-bottom: 20px;
        padding-top: 20px;
        margin-bottom: 40px !important;
        box-shadow: 5px 5px 5px #333333;
}

#sidebar {
	float: left;
	width: 200px;
	padding-left: 55px;
	margin-top: 30px !important;
	margin-top: 60px;
	text-align: left;
    	font-family: Verdana, Arial;
	color: #000;
	font-size: 1em;
	line-height: 1.6em;
	text-transform: uppercase;
}

.sidebox {
	width: 80%;
	margin-left: 2px;
        margin-bottom: 20px;
	background-color: #FF9933;
	text-align: left;
	padding: 10px 10px 10px 10px;
	box-shadow: 5px 5px 5px #333333;
}

.sidebox1 {
	width: 80%;
	margin-left: 2px;
        margin-bottom: 20px;
	background-color: #66CCFF; 
	text-align: left;
	padding: 10px 10px 10px 10px;
	box-shadow: 5px 5px 5px #333333;
}

.sidebox2 {
	width: 80%;
	margin-left: 2px;
        margin-bottom: 20px;
	background-color: #FF66FF;
	text-align: left;
	padding: 10px 10px 10px 10px;
	box-shadow: 5px 5px 5px #333333;
}

.sidebox3 {
	width: 80%;
	margin-left: 2px;
        margin-bottom: 20px;
	background-color: #9966FF;
	text-align: left;
	padding: 10px 10px 10px 10px;
	box-shadow: 5px 5px 5px #333333;
}

.sidebox4 {
	width: 80%;
	margin-left: 2px;
        margin-bottom: 20px;
	background-color: #FFFF00;
	text-align: left;
	padding: 10px 10px 10px 10px;
	box-shadow: 5px 5px 5px #333333;
}

.sidebox5 {
	width: 80%;
	margin-left: 2px;
        margin-bottom: 20px;
	background-color: #CD5555;
	text-align: left;
	padding: 10px 10px 10px 10px;
	box-shadow: 5px 5px 5px #333333;
}

.sidebox6 {
	width: 80%;
	margin-left: 2px;
        margin-bottom: 20px;
	background-color: #9966FF;  
	text-align: left;
	padding: 10px 10px 10px 10px;
	box-shadow: 5px 5px 5px #333333;
}

a {
	color: #8C1C64;
	text-decoration: none;
        font-weight: bold;
}

a:visited {
	color: #8C1C64;
	text-decoration: none;
}

a:hover {
	color: #000000;
	text-decoration: none;
}

#sidebar a {
	color: #FFFFFF;
        font-weight: bold;
}

#sidebar a:visited {
	color: #FFFFFF;
}

#sidebar a:hover {
	color: #000000;
}

.sidebox p {
        padding-top: 0;
}

#sidebar ul {
	margin-top: 0px;
	margin-left: 0px;
	margin-bottom: 0px;
	padding-left: 0px;
	list-style-type: none;
	display: block;
}

#sidebar li {
	list-style-type: none;
	display: block;
	margin-left: 0px;
}

#sidebar li li {
	list-style-type: none;
	display: block;
	margin-left: 0px;
}

.postmetadata {
        position: relative;
	top: 10px;
	right: -22px;
        float: right;
	background-color: #FF66FF; 
	text-align: left;
        width: 34em;
	padding: 8px;
        box-shadow: 5px 5px 5px #333333;
}

.postmetadata p {
        padding: 0;
}


.post, #emailform, #archivescat, #archivesmonth {
	margin: 10px 20px 30px 20px;
	text-align: left;
}

.backpost {
	margin: 140px 10px 30px 20px;
	text-align: left;
}



.post ul, .post ol, .backpost ul, .backpost ol {
        list-style-position: inside;
        padding-left: 15px;
}


.singlepost {
	margin: 10px 10px 10px 20px;
	text-align: left;
}

blockquote {
	margin: 10px 30px 10px 30px;
	background-color: #FF66FF; 
	text-align: left; 
	padding: 5px;
        box-shadow: 5px 5px 5px #888888;
}

.title {
    	font-family: Verdana, Arial;
	color: #000000;
	font-size: 1.2em;
	font-variant: small-caps;
	font-weight: bold;
        margin-bottom: 10px;
}

a.title {
	color: #000000;
}

a.title:visited {
	color: #000000;
}

a.title:hover {
	color: #000000;
	border: 0px;
}

h2 .posttitle {
        clear: right;
    	font-family: Verdana, Arial;
	color: #8B1C62;
	font-size: 1.3em;
	font-variant: small-caps;
	font-weight: bold;
	background-color: #FFFF00; 
	text-align: left;
	padding: 8px;
        box-shadow: 5px 5px 5px #888888;
        margin-bottom: 10px;
}

h2 a.posttitle {
	color: #8B1C62;
}


h2 a.posttitle:visited {
	color: #8B1C62;

}

h2 a.posttitle:hover {
	color: #000000;
}

h2 {
	color: #000000;
	font-size: 1.7em;
	text-align: left;
}

h2.searchtitle {}

h2#category {
	color: #000000;
	font-size: 1.7em;
	text-align: center;
        margin: 20px 0 20px 0;
}

h3.searchresult {
        margin-top: 30px;
}

.navigation { 
	padding: 15px;
}

#paging {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        font-weight: bold;
}

#paging a {
        color: #8B1C62;
        text-decoration: none;
        font-size: 1.1em;
}

#paging a:hover {
        color: #000000;
}

#paging .left {
        float: left;
	margin-left: 20px;
	background-color: #66CCFF; 
	text-align: left; 
	padding: 8px;
        box-shadow: 5px 5px 5px #888888;
}

#paging .right {
        float: right;
	margin-right: 20px;
	background-color: #FF66FF;
	text-align: right; 
	padding: 8px;
        box-shadow: 5px 5px 5px #888888;
}

.imgleft {
       float: left;
       margin: 0px 5px 15px 0px;margin: 0px 5px 15px 0px;
       display block;
}

.imgright {
       float: rigth;
       margin: 0px 5px 15px 0px;margin: 0px 5px 15px 0px;
}

.nobullet {
       list-style-type: none; 
}

.nobullet li {
  display: inline-block;
}

.nobullet img {
}

.nobullet a img {
       border: 2px solid #111111;
}

.imgleft a {
       border: 2px solid #111111;
}

.imgright a{
       border: 2px solid #111111;
}

.centeredImage {
       text-align:center;
       margin-top:10px;
       margin-bottom:0px;
       padding:0px;
}

.cite {
	font-size: 1em;
	color:#000000;
        padding-top: 10px;
}

.cite p {
        padding: 10px 0 0 0;
}

code {
	font-family: Courier New, Verdana;
	text-align:left;
	color:#DD0000;
	font-size: 1em;
}

pre code {
	font-family: Courier New, Verdana;
	text-align:left;
	color:#000000;
	font-size: 1em;
	margin: 10px 30px 10px 30px;
	background-color: #CCFFFF; 
	padding: 5px;
        box-shadow: 5px 5px 5px #888888;
	display: block;
}

#footer {
        font-size: 1em;
	color: #FFFFFF;
	text-align: right;
        margin-right:30px;
        margin-bottom: 20px;
}

#footer a {
	color: #FFFFFF;
	text-decoration: underline;
        font-weight: bold;
}

#footer a:visited {
	color: #FFFFFF;
	text-decoration: underline;
}

#footer a:hover {
	color: #000000;
	text-decoration: underline;
}

h3#comment {
        text-align: left;
        padding-left: 20px;
}

ol.comments { 
	padding: 20px;
	margin-top: 20px;
}

ol.comments li {
        list-style: none;
}

.commentBox {
	margin-left: auto;
        margin-bottom: 20px;
	background-color: #FF9933; 
	text-align: left; 
	padding: 5px;
	box-shadow: 5px 5px 5px #333333;
}

.commentBox a {
	color: #FFFFFF;
}

.commentBox a:hover {
	color: #111111;
	border: 1px solid #444444;
}

.comment-gravatar {
	border: 1px solid #444444;
	float: left;
}

.reply {
	padding-left: 89px;
}

.commentPos {
	font-family: 'Verdana';
	font-size: 1em;
	margin-top: 10px;
	padding: 10px;
	text-align: right;
}

a.commentPos {
	font-family: 'Verdana';
	color: #FFFFFF;
}

a.commentPos:visited {
	color: #FFFFFF;
}

a.commentPos:hover {
	color: #000000;
	border: 0px;
}

#cpreview p.preview {
        font-size: 1.2em;
        color: #000000;
        text-align: center;
        margin-bottom: 15px;
}

h3#postcomment {
       margin: 0.6em 0.6em 0.6em 0.6em;
       font-weight: bold;
       font-size: 1.6em;
       color: #444444;
       text-align: center;
       border: 0;
}

form#txpCommentInputForm {
       margin-top: 40px;
       border: 1px solid #444444;
       padding-bottom: 1.2em;
       width: 360px;
       margin-left: auto;
       margin-right: auto;
       margin-bottom: 20px;
}

form#txpCommentInputForm p {
       margin: 0 0 0 1.2em;
       padding: 0;
}

input#forget, input#remember {
       margin-right: 5px;
}

textarea.txpCommentInputMessage {
       height: 250px;
       width: 325px;
       margin-bottom: 10px;
}

p#txpCommentInputForm {
       width: 400px;
       text-align: center;
       font-weight: bold;
       padding: 10px 0 10px 0;
       border-top: 1px solid #444444;
       border-bottom: 1px solid #444444;
       margin-left: auto;
       margin-right: auto;
       margin-top: 30px;
       margin-bottom: 30px;
}

.menutitle {
       font-weight: bold;
       text-align: left;
       font-size: 1em;
       text-decoration: underline;
}

#archivescat {
       padding-bottom: 30px;
}

#category {
       font-size: 1.2em;
       line-height:1.6em;
       margin-top: 30px;
}

#categorylisting {
       margin-bottom: 30px;
}

.categoryinstruct {
       font-weight:bold;
       font-size: 1em;
       margin-top: 10px;
}

.categorymenu {
       text-align: left;
       list-style: none;
}

.cattitle {
       clear: both;
       font-size: 1.1em;
       font-weight: bold;
       text-align: left;
       padding-top: 50px;
       border-bottom: 1px solid #444444;
}

.cattitle a {
       color: #000000;
}

.catarticle {
       clear: both;
       font-weight:normal;
}

.catarticle a {
       text-decoration: none;
}

.archivearticle {
       clear: both;
       float: left;
}

.archivedate {
       float: right;
}

.montharchivedate {
       text-align: left;
       font-size: 1.2em;
       font-weight: bold;
       border-bottom: 1px solid #444444;
}

.montharchivearticle {
       clear: right;
       float: right;
       width: 50%;
       text-align: left;
}

.montharchivearticle a {

       text-decoration: none;
}


.back {
       font-size: 0.8em;
       font-weight: bold;
       text-align: right;
}

.clear {
       clear:both;
       height:1px;
       overflow:hidden;
       display: none;
}

.center {
	text-align: center;
}

.widecolumn { 
	padding-top: 
	20px; padding-left: 20px; 
	padding-right: 20px; 
	padding-bottom: 20px;
}

.narrowcolumn { 	
	padding-top: 20px; 
	padding-left: 60px; 
	padding-right: 60px; 
	padding-bottom: 20px;
}

acronym {
	cursor: help;
	border-bottom: 1px solid #777777;
}

del {
	color: #666666;
}

.navmenu {
float: right;
}


#navigation { 
	float: rigth;
	width: 100%;
}

#navigation ul {
	margin: 0px 30px 0px 0px;
	padding: 0;
	background-color: #9966FF;
	box-shadow: 5px 5px 5px #333333;

}

#navigation li {
	margin: 0;
	padding: 0;
	display: inline;
	list-style: none;
}

#navigation li a {
	float: left;
	margin: 0 2px 0 2px;
	padding: 5px 0.5em 5px 0.5em;
	font: 400 1.6em;
	text-decoration: none;
	color: #FFFFFF;
}

#navigation li a:hover {
	color: #111111;
}

#navigation li a.here {
	color: #111111;
}

#navigation li a.last {
	margin-right: 0;
}

#comentario {
	padding-left: 10px;
}

table {
 font-size: 1em;
 font-family: verdana sans-serif;
 background-color: #D3F4F7;
 border-collapse: collapse;
 box-shadow: 5px 5px 5px #333333;
 margin-left: 15px;
}

caption {
 background-color: #LBA6B2;
 font-weight: bold;
 text-align: left;
 padding: 10px;
 margin-bottom: 3px;
 text-transform: uppercase;
}

thead th {
 text-align:center;
 padding: 8px;
 height: 25px;
}

tfoot {
 color:#1ba6b2;
 padding:2px;
 text-transform: uppercase;
 font-size: 1.2em; 
 font-weigth: bold;
 margin-top: 6px;
 border-top: 6px solid #e9f7f6;
}

tbody tr {
 border-bottom: 0px solid #f0f0f0;
}

tbody td {
 padding: 5px;
 text-align: left;
}

tbody th {
 text-align:left;
 padding: 3px;
 text-transform: uppercase;
 background-color: #40C8D5;
}

tbody td a, tbody th a {
 display: block;
 padding-left: 15px;
}

tbody td a:hover, tbody th a:hover {
 color: #111111;
}
