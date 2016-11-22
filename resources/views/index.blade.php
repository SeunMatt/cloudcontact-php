@extends("layouts.layout")

@section("content")

	<div class="row" id="toprow">

		<div class="col-sm-4" id="logoCol">
			<img src="./images/cloud contacts logo.png" alt="logo" id="logoFrontPage">
		</div>

		<div class="col-sm-8 text-center" id="titleCol">
				<p id="title">CLOUD CONTACTS </p>
				<p id="motto">Save your contacts in the cloud <br> for easy access anywhere</p>
				<br>
                <a href="/signup"><button id="signUpBt">SIGN UP</button></a>
				<a href="/login"><button id="loginBt">LOG IN</button></a>
		</div>

	</div>


	<div class="row text-center" id="midrow">

		<div class="col-sm-4" id="netgrp">
			<img src="./images/net group.png" alt="icon" id="netIcon">
			<br>
			<p id="nettxt">Access your contacts from <br> any internet enabled device <br> from anywhere!</p>
		</div>

		<div class="col-sm-4" id="phonegrp">
			<img src="./images/phone group.png" alt="icon" id="phoneIcon">
			<br>
			<p id="phonetxt">Making a phone switch? <br> No worries at all</p>
		</div>

		<div class="col-sm-4" id="cloudgrp">
			<img src="./images/cloud group.png" alt="icon" id="cloudIcon">
			<br>
			<p id="cloudtxt">Wants a place to backup your contacts? <br> And be able to access them? <br> Well here you are</p>
		</div>	

	</div>



	<div class="row" id="thirdrow">


		<div id="myCarousel" class="carousel slide" data-ride="carousel">

 		 <!-- Wrapper for slides -->
 			 <div class="carousel-inner text-center" role="listbox">
    			
    			<div class="item active">
    				<div class="row text-center">
    						<img class="img-rounded carousel-image" id="carouselImage1" src="./images/ic_user.png" alt="Queen May" >
    						<br>
      						<p class="carousel-text" id="carouselText1">"I love using cloud contact, it's got my back... Queen May</p>
      				</div>		
    			</div>

    			<div class="item">
    				<div class="row text-center">
      				<img class="img-rounded carousel-image" id="carouselImage2" src="./images/ic_user.png" alt="May Jane">
      				<br>
      				<p class="carousel-text" id="carouselText2">"Cloud contact is cool, my contacts are safe... Jane May</p>
    				</div>	
    			</div>

    			<div class="item">
    				<div class="row text-center">
      				<img class="img-rounded carousel-image" id="carouselImage3" src="./images/ic_male_user.png" alt="Seun Matt">
      				<br>
      				<p class="carousel-text" id="carouselText3">"One word, Waooow!!! ... Seun Matt</p>
      				</div>
    			</div>
    		</div>

		</div>
	</div>

@endsection