
@extends("layouts.layout")


@section("content")

<style>
    #footer {
        position: fixed;
        bottom:0px;
    }
    
    
 </style>   
<body>
	<div class="row" id="toprow">
        	<img id="logoOthers" src="./images/cloud contacts logo.png" alt="logo">
	        <a href="/" id="otherTitle">CLOUD CONTACTS</a>
	</div>


	<div class="row text-center" id="signupbox">
            
            
	<div class="row" id="topTextRow">
		<p id="topText">Sign in to your account or create one</p>
                <p id="log" style="color:red;">
                  @if(session("status"))
                    {{session("status")}}
                   @endif 
                </p>
	</div>

<form role="form" id="loginForm" method="post" action="/login">    
     <?php echo csrf_field(); ?>
	<div class="row">
            <input type="email" name="email" id="email" placeholder="email" required/>
	</div>

	<div class="row">
		<input type="password" name="password" id="password" placeholder="password" required/>
	</div>
	
           <div class="row">
                <div class="progress waitLogo" style="width:25%;height:20px;margin:auto; margin-top: 10px; margin-bottom: 10px;" hidden>
                                        <div class="progress-bar progress-bar-striped active" role="progressbar"  aria-valuenow="100" aria-valuemin="100" 
                                             aria-valuemax="100" style="width:100%; background-color:#104774;">
                                            processing . . .
                                        </div>
                </div>    
           </div>
           
	<div class="row">
		<input type="submit" name="loginBt" id="loginBt" value="Sign In" />
	</div>
</form>   

	<div class="row" id="forgotLnkRow">
		<a id="forgotLnk" href="#">Forgot Password?</a>
	</div>

	<div class="row" id="createLnkRow">
		<a id="createLnk" href="/signup">Don't have an account? Create one now</a>
	</div>

	</div>
		
    
@include("footer")

    
<script type="text/javascript">
  
$("document").ready(function() {
    
  

     
     
 });    
</script>

@endsection