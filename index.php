<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Techno-rIoT </title>
<link rel="icon" type="image/png" href="images/IOT.png"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">

</head>
<body onload="onLoad()";>

	<header class="jumbotron" id="header">
			<div class="heading"><h2> Techno-rIoT </h2> <img src="images/IOT1.png" /> </div>
		</header>
	<div class="container-fluid">
		<div class="row">
			<div class="sidenav col-md-3 col-xs-2 collapse in" id="sidebar">
				<div class="list-group">
					<li class="list-group-item collapsed" data-parent="#sidebar"><a href="#about_section" onclick="toggleSection(event);" data-id = "5"><i class="fas fa-info-circle"> <span class="hide_when_small"> Info</span> </i></a></li>
					<li class="list-group-item collapsed" data-parent="#sidebar"><a href="#problem_section" onclick="toggleSection(event);" data-id = "7"><i class="fas fa-sticky-note"><span class="hide_when_small"> Problem Statement</span> </i></a></li>
					<li class="list-group-item collapsed" data-parent="#sidebar"><a href="#rules_section" onclick="toggleSection(event);" data-id = "9"><i class="fas fa-book"> <span class="hide_when_small"> Rules</span> </i></a></li>
					<li class="list-group-item collapsed" data-parent="#sidebar"><a href="#contact_section" onclick="toggleSection(event);" data-id = "11"><i class="fas fa-phone"> <span class="hide_when_small"> Contact</span> </i></a></li>		
				</div>
			</div>
			<div class="main col">
				<span>
					<a href="#sidebar" data-toggle="collapse" id="toggle_menu_btn"><i class="fas fa-bars fa-2x"></i></a>
					<h3 id="info_h" style="color:white;"> Info </h3>
					<h3 id="problem_h" style="color:white;"> Problem Statement </h3>
					<h3 id="rules_h" style="color:white;"> Rules </h3>
					<h3 id="contact_h" style="color:white;"> Contact </h3>
				</span>
				<hr>
				<div id="about_section">
					<p>
					Try and visualize the numerous devices and appliances that we use on a daily basis. Some of them, like our smartphones, can do so much more than what their ancestors were first invented for. They've become pocket PCs, able to cater to almost all our personal needs. Some other devices, like the commonplace lighting systems and air-conditioners perform only a single purpose. Now, imagine them all being connected to each other through the internet. Imagine controlling all your home appliances on your smartphone, or controlling your car's settings using an app, or a farmer using an interface to command and monitor all his equipment. This "smart"  network of devices and things is what is envisioned as the <b>Internet of things (IOT)</b>. 
					</p><br>
					<p>
					IoT has seen tremendous growth over the years. As of 2017, the estimated number of IoT devices was above 8 billion. To have had such an impact and growth, this interconnected network of things should have brought quite a few advancements to the table. What benefits does connecting things provide? Why should things be "smart"? Making things smart also makes them efficient. An air-conditioner would be able to function to its full potential while also saving energy because it knows how many people are in the room and how much time it should spend in cooling the room. An irrigation equipment would optimise the amount of water needed for the crops while saving both energy and water. 
					</p><br>
					<p>
					They say that necessity is the mother of invention. Today's necessity is sustainability. We need to improve existing systems while optimizing resource utilization. IoT can help in achieving this goal by reducing required manpower and energy anywhere technology comes into picture. 
					</p><br>
					<p>
					Do you want to develop applications that can create a positive impact? Can you prove your worth in a contest among equally brilliant minds? Enter the arena to test your might!
					</p>
				</div>
				<div id="problem_section">
					<p>
						<b>Coming soon on August 22 ! </b>
					</p>
				</div>
				<div id="rules_section">
						<p>
								We expect your team to cover the below mentioned milestones. All of these will add up to your final assesment, Problem statement will be released on 22-Aug-18 so try to complete each one for brownie points. 
							</p><br>
						<p><u> Milestone 1: </u> (03-SEP-18) <br>
								Share with us a PPT(max 5 slides) along with the demo of the product and Video(max 5 min) jointly covering these aspects: <br>
									1. Introduce your team telling us everyone's role. <br>
									2. Provide an overview of your idea describing your workflow. <br>
									3. Tell us the motivation behind this idea and its application in real time. <br>
									4. Specify the tools and technologies that you'll be using. <br> 
									5. Estimate your expenditure for this product development and how much it'll earn if sold. <br>
						</p>
						<p>				
						<u>Milestone 2:</u> (12-SEP-18) <br>
						1. Update us with your progress and send us the wire frames and images or videos of your semi built application. <br>
						2. You'll be contacted to inquire about your progress. <br>
						</p>
						<p>
						<u>Milestone 3:</u> (20-SEP-18) <br>
						1. Give us a link to your source code and the executables that we can use to assess your product. <br>
						2. Submit a video of the full working model with the required explanation (max 3 mins). <br>
						3. Finally, provide us a PPT that you'll be using to present on the D day - Login (max 10 slides). <br>
						</p>
						<p>
							Your team will have to give a presentation on the day of event about your product. <br>
						</p>
						<p>
							Complete and email all the milestones to <u>@login.com.</u> <br>
						</p>
						<p>
							Happy innovating and building! <br>					
						</p>
				</div>
				<div id="contact_section">
					<p>
						Contact: Kishore (9655568122) 
					</p>
				</div>
				<a href="register.html" class="btn btn-success" id="reg_btn"/>
			</div>
		</div>
	</div>
</body>

<script src="js/dp.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html> 
