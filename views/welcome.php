<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
 
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome MVC PHP OOP</title>
 
    <style type="text/css">
 
    body {
        background-color: #FFF;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #777;
    }
 
    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }
 
    h1 {
        color: #fff;
        background-color: #F63;
        border-bottom: 1px solid #fff;
        font-size: 19px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }
	
	.code:hover {
	-webkit-transform:scale(1.02);
	transform:scale(1.02);
	}
	
    .code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 12px;
        background-color: #F63;
        border: 1px solid #fff;
        color: #fff;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
		-webkit-transition: all 0.7s ease;
		transition: all 0.7s ease;
    }
 
    .bod{
        margin: 0 15px 0 15px;
		min-height:70%;
    }
	
	
    .headertop{
	position:fixed;
	top:-3px;
	right:0px;
	width:100%;
	border-bottom: 2px solid #999;
	}
	
	.header{
	height:40px;
	background:#1ba0e2;
	color:#fff;
	}
	
	.header p{
        text-align: left;
        font-size: 23px;
		font-weight:bold;
        line-height: 32px;
        padding: 5px 10px 0 10px;
        margin: 3px 5px 0 5px;
    }
	
    .footer p{
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }
    
    .container{
        margin: 50px auto;
        border: 1px solid #eee;
		background-color: #ffe;
		
    }
    </style>
</head>
<body>
		<div class="headertop">
			<div class="header">
			<p>Design Patern MVC PHP OOP</p>
			</div>
		</div>
		<div class="container">
			<h1>Welcome Lae</h1>
			
			<div class="bod">
				<p>Halaman ini hanya contoh.</p>
	 
				<p>Kalau lae mau mengedit halaman ini lae tengok difolder:</p>
				<div class="code">views/welcome.php</div>
	 
				<p>Controller yang sesuai untuk halaman ini difolder:</p>
				<div class="code">controllers/welcome.php</div>
			</div>
			<div class="footer"><p><i>Developer by Toko Sahabat (TS) | @Copyright 2015</i></p></div>
		</div>
 
</body>
</html>