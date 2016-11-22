<!DOCTYPE html>
<html lang="en">

<head>
	<title>Cloud Contact</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/split-pane.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/font-awesome-4.6.3/css/font-awesome.min.css')}}">
 	
 	<script type="text/javascript" src="{{URL::asset('js/jquery-1.12.3.min.js')}}"></script>
 	<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
 	<script type="text/javascript" src="{{URL::asset('js/datatables.min.js')}}"></script>
 	<script type="text/javascript" src="{{URL::asset('js/split-pane.js')}}"></script>
 	<script type="text/javascript" src="{{URL::asset('js/jquery.nicescroll.min.js')}}"></script>
 	<script type="text/javascript" src="{{URL::asset('js/utility.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/rfc5054-safe-prime-config.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/thinbus-srp6a-sha256-versioned.js')}}"></script>
 	
</head>

<body>
	
 @section("content")
    @show

    
<!-- footer -->
	<div class="row text-center footer" id="footer">
    <div class="col-sm-2">
      <ul id="socialBt">
        <li><a href="http://facebook.com/seun.matt" target="blank"><img id="fbic" src="/./images/ic_facebook.png"/></a></li>
        <li><a href="http://twitter.com/@SeunMatt2" target="blank"><img id="twitteric" src="/./images/ic_twitter.png"/></a></li>
      </ul> 
    </div>
    <div class="col-sm-8">
      <p id="footertext">(c) 2016 Cloud Contacts | 
      <span id="footertxt2">Designed by </span><span id="footertext3"><a href="http://facebook.com/seun.matt">Seun Matt</a></span></p>
    </div>
    <div class="col-sm-2">
       <img id="chatic" src="/./images/ic_headset.png"/> <span id="footertext4">Chat with us </span>
    </div>
  </div>    
</body>
</html>