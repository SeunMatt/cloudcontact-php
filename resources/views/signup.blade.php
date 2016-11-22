@extends("layouts.layout")

@section("content")

<style>
    #footer {
        position: fixed;
        bottom:0px;
    }
    
 </style>   
<body>

	<div class="row text-center" id="toprow">
        	<img id="logoOthers" src="./images/cloud contacts logo.png" alt="logo">
	        <a href="/" id="otherTitle">CLOUD CONTACTS</a>
	</div>


	<div class="row text-center" id="signupbox">

	<div class="row" id="topTextRow">
		<p id="topText">Join other great people that use Cloud Contacts</p>
                <p id="log" style="color:red;">
                  @if(session("status"))
                   {{session("status")}}
                   @endif
                </p>
	</div>
            
            
         <form role="form" id="signupForm" action="/signup" method="post">
              <?php echo csrf_field() ?>
	<div class="row">
	<input type="text" name="username" id="username" placeholder="username" required/>
	</div>

	<div class="row">
		<input type="email" name="email" id="email" placeholder="email" required/>
	</div>
	
	<div class="row">
		<input type="password" name="password" id="password" placeholder="new password" required>
	</div>
	
	<div class="row">
		<input type="password" name="password2" id="password2" placeholder="re-type password" required>		
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
		<input type="submit" name="signupBt" id="signupBt" value="Sign Up" />
	</div>
             
         </form>     

	<div class="row" id="loginLnkRow">
		<a id="loginLnk" href="/login">Already have an account? Log in Here</a>
	</div>


	</div>
		

@include("footer")

   <script type="text/javascript">
            
 $(document).ready(function() {
              
 $(document).ajaxStart( function() {
    $(".progrress").show();
 });

$(document).ajaxComplete( function () {
    $(".progress").hide();
});

          $("#log").html("");
            
            $("#signupForm").on('submit', function(event) {
                  
                  event.preventDefault();
                  
                 var username = $("#username").val();
                 var email = $("#email").val();
                 var p1 = $("#password").val();
                 var p2 = $("#password2").val();
                 
                 
                if(p1 !== p2) {
                   $("#log").html("PASSWORDS DO NOT MATCH");
                   return;
                }

                if(p1.length < 4) {
                   $("#log").html("Password too short");
                   return;
                }

                document.getElementById("signupForm").submit();

            });    

});              
                  
                  
</script>   

@endsection