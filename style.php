/* ==================================== HOMEPAGE ================================================*/

/* ==================================== HEADER ================================================*/
div.heading{
	background-color: #2E1114;
	color: white;
	font-size: 2em;
	font-family: cambria;
    text-align: left;
	letter-spacing: 0.1em;
	padding-bottom: 20px;
	padding-right: 5px;
	//margin-top: 40px;
}
/* Style the navbar */
div.navbar{
	color: #17E9E0;
   // background-color: black;
    background-color: #64485C;
    font-size: 0.93em;
	word-spacing:14.76em;
	margin: 5px;
	padding-top: 5px;
	padding-bottom: 5px;
	padding-left: 8.9px;
	padding-right: 8.9px;
	//overflow: hidden;
	//position: fixed; /* Set the navbar to fixed position */
	//top: 0; /* Position the navbar at the top of the page */
}


/* ==================================== BODY ================================================*/

body{
	background-color: #ADADAD;
}


h3{
	color: #800505;
    font-size: 1.50em;
	font-family: cambria;
	padding: none;
}

p {
	font-size: 20px;
	line-height: 30px;
	color:BLACK;
	padding-top: 0px;
	padding-bottom: 0px;
	padding-left: 35px;
	padding-right: 35px;
	font-weight:bold;
}

p:first-letter{
	font-size:60px;
	#float:left;
}


div.intro{
	background-color:#83677B;
	width:95%;
	#box-shadow: 5px 6px 10px 10px #333;
	padding: 10px;	
	max-width: 300%;
	
}

div.wordcloud{
	padding-left:60px;
}

div.category{
	background-color:#2E1114;
	height:100px;
	width:150px;
	float:left;
	margin:40px;
	color:white;
	padding:20px;
	text-align:center;
	font-size:20px;
	border-radius:10px;
	//box-shadow: 5px 6px 10px 10px #333;
}

img.wcimg{
	border-radius: 50%;
}

img.anti{
	height:70;
	width:90;
	border-radius: 50%;
	
}

/* ==================================== FOOTER ================================================*/

div.footer{
	color: #17E9E0;
    background-color: black;
    font-size: 0.80em;
	word-spacing:14em;
	position: relative
	margin-top: -100px;
	clear: both
	padding-top: 5px;
	padding-bottom: 5px;
	padding-left: 8.9px;
	padding-right: 8.9px;	
}

div#copyright{
	text-align:center;
	background-color:grey;
	border:5px solid white;
	color:white;
	padding:0.1em;
	font-size:0.85em;
}

#disclaimer{
	text-align:center;
	background-color:#d9cdcc;
	border:5px solid white;
	color:black;
	padding:0.1em;
	font-size:0.85em;	
}
/* ==================================== HYPERLINKS ================================================*/
a {
    text-decoration: none;
	color:white;
}
a:hover {
    text-decoration: underline;
    color: yellow;
}

/* ==============================CONTACT ======================================*/	
div#email{
	color:black;
	font-size:110%;
	width:80%;
	background-color:#64485C;
	border=1;
	box-shadow: 5px 6px 10px 10px #333;
	font-weight:bold;
	
}

div#address{
	color:black;
	font-size:110%;
	width:80%;
	background-color:#E3E4FA;
	border=1;
	box-shadow: 5px 6px 10px 10px #333;
	font-weight:bold;
}

/* ============================CATEGORIES===============================*/
.wrapper{
	width:860px;
	margin:0 auto;
}

.wrapper ul{
	list-style: none;
	margin-top: 2%;
}

.wrapper ul li{
	background-color: #83677B;
	width: 250px;
	border: 1px solid #fff;
	height: 50px;
	line-height: 50px;
	text-align: center;
	float: left;
	color: #fff;
	font-size: 14px;
	position:  relative;
	font-family: big john;
}

.wrapper ul li:hover{
	background-color: #2E1114;
}

.wrapper ul ul{
	display: none;
}

.wrapper ul li:hover >ul{
	display: block;	
}