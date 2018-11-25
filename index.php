<!DOCTYPE HTML>
<html>
<head>
	<title>Margaret Chen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>
<body>
	<script>$(function(){  // $(document).ready shorthand
  $('.intro').fadeIn('slow');
});

$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.about-me').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1500);
                    
            }
            
        }); 
    
    });
    
});</script>

	

	<div class="hero-image">
	<div class="intro">
		<h3>Hey, I'm</h3>
		<h1>MARGARET CHEN.</h1>
		<script> function slideDown() {
			$('html, body').animate({scrollTop:650}, 'slow');
		}</script>
		<img src="white-arrow.png" class="down-arrow" onclick="slideDown()">
	</div> <!-- intro -->
	</div> <!-- hero-image -->

	<div class="about-me" id="about-me">
		<img src="aboutme.png" class="aboutme-img" id="Logo" /><div class="description">
			<h1>About Me</h1>
			<hr>
			<div class = "box">
			<h4>I'm a passionate and self-motivated third year student at the University of Virginia studying Finance and IT through the McIntire School of Commerce and Computer Science through the College of Arts & Sciences.</h4>
			<p>I'm constantly looking for opportunities to work on new and challenging technical projects. After working on multiple freelance web development projects, I now teach web development at HackCville. </p>
			</div>
		</div> <!-- description -->
		<a href="https://github.com/margarettchen" target="_blank"><img src="github.png" class="github"></a><a href="https://www.linkedin.com/in/margaret-chen-77710212a/" target="_blank"><img src="linkedin.png" class="linkedin"></a><a href="MargaretChen-Resume2018.pdf" target="_blank"><img src="resume.png" class="resume"></a>

	<script>
		function resizeHeaderOnScroll() {
  			const distanceY = window.pageYOffset || document.documentElement.scrollTop,
  			shrinkOn = 450,
  			headerEl = document.getElementById('Logo');
  
  			if (distanceY > shrinkOn) {
    			headerEl.classList.add("smaller");
  			} else {
    			headerEl.classList.remove("smaller");
  			}
		}

		window.addEventListener('scroll', resizeHeaderOnScroll);

	</script>

	</div> <!-- about-me -->



	<div class="experience">
		<h1>Experience</h1>
		<div class="experience-row">
			<a href="https://www.goldmansachs.com/" target='#'><img src="GoldmanSachs.png" class="experience-image"></a><div class="ex-description">
				<h4>Incoming Summer Analyst</h4>
				<p>Will begin my internship in the Consumer and Commercial Banking Division this June 2019. Specifically, I will be working in the Digital Finance group, which is the firm’s online consumer lending and deposits business (called Marcus by Goldman Sachs). For clients, GS helps them manage risk and make investment portfolios. </p></div>
			<p class="date">Summer 2019</p>
		</div>
		<div class="experience-row">
			<a href="https://www.fanniemae.com/" target='#'><img src="FannieMae.png" class="experience-image FMlogo"></a><div class="ex-description">
				<h4>Capital Markets Technology Analyst</h4>
				<p>This past summer, I pitched and developed a decentralized app for automating and recording credit risk transfer agreements on the Ethereum Blockchain network, written in Solidity and ReactJS. I also worked on testing a secure single sign-on module for accessing internal MBS pricing data.</p></div>
			<p class="date">Summer 2018</p>
		</div>
		<div class="experience-row">
			<a href="https://www.hackcville.com/" target='#'><img src="hackcville.png" class="experience-image"></a><div class="ex-description">
				<h4>Wireframe Program Instructor</h4>
				<p>After taking the web development course taught through HackCville myself, I now teach the program. The curriculum covers HTML, CSS, JavaScript, UX design, and version control. I also do freelance web development for startups and student organizations through HackCville.</p></div>
			<p class="date">Fall 2016 - Now</p>
		</div>
		<div class="experience-row">
			<a href="https://www.relishcareers.com/" target='#'><img src="relish.png" class="experience-image"></a><div class="ex-description">
				<h4>Lead Web Developer</h4>
				<p>Interned at Relish Careers, where I redesigned and developed the entire RelishCareers website utilizing UX design methods, PHP, HTML/CSS, and JavaScript to develop a custom WordPress theme.</p></div>
			<p class="date">Summer 2017</p>
		</div>
		<div class="experience-row">
			<img src="uva.png" class="experience-image"><div class="ex-description">
				<h4>B.A. Computer Science, B.S. Commerce</h4>
				<p>Will graduate in May 2020 with a BS in Commerce and a BA in Computer Science. I am on the technology team for UVA’s student council, working on maintaining and updating the site. I also am the VP of Finance for my sorority Alpha Chi Omega.</p></div>
			<p class="date">Fall 2016 - 2020</p>
		</div>
	</div> <!-- experience -->



	<div class="past-projects" id="past-projects"> 
		<h1>Past Projects</h1>
		<div class="link1">
			<a href="http://www.relishcareers.com/" target="_blank">
				<div class="img1">
					<div class="link-title">Relish Careers Website</div>
					<div class="overlay">
						<div class="text"><h3>Relish Careers</h3> <hr> Redesigned and developed a <br> custom WordPress theme for a <br> hiring marketplace startup in <br>Charlottesville</div>
					</div>
				</div>
			</a>
		</div> <!-- link1 --><div class="link2">
			<a href="http://www.wireframewebsites.com/margaretchen/Hustle/" target="_blank">
				<div class="img2">
					<div class="link-title">Hustle Program Website</div>
					<div class="overlay">
						<div class="text"><h3>Hustle Program</h3> <hr> Redesigned and developed a site <br> for HackCville's entrepreneurship <br> program, Hustle</div>
					</div>
				</div>
			</a>
		</div> <!-- link2 --><div class="link3">
			<a href="http://www.wireframewebsites.com/margaretchen/womensInitiative/index2.html" target="_blank">
				<div class="img5">
					<div class="link-title">Landing Page for The Women's Initiative</div>
					<div class="overlay">
						<div class="text"><h3>The Women's Initiative</h3> <hr> Design challenge for an event <br> landing page for The Women's <br> Initiative</div>
					</div>
				</div>
			</a>
		</div> <!-- link5 --><div class="link4">
			<a href="http://www.wireframewebsites.com/margaretchen/rockfishWebsite/homepage.html" target="_blank">
				<div class="img6">
					<div class="link-title">Rockfish Valley Community Center Website</div>
					<div class="overlay">
						<div class="text"><h3>Rockfish Valley Center</h3> <hr> Redesigned Rockfish Valley <br> Community Center's site utilizing <br> UX design</div>
					</div>
				</div>
			</a>
		</div> <!-- link6 -->
	</div> <!-- past-projects -->




	<div class="services">
		<h1>Contact Me</h1>
		<div class="form-over" id="contact-form">
        <form method="POST" class="signup-form" action="contactus.php">
          <p>Name:</p>
          <input type="text" name="name" value="" required="required">
          <p> Email:</p>
          <input type="text" name="email" value="" required="required">
          <p> Message:</p>
          <textarea  name="message" required ></textarea>
          <input type="submit" value="Send">
        </form>
      </div>

	</div> <!-- Contact Me -->

	<?php

      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;

      require 'vendor/autoload.php';


          if ($_SERVER["REQUEST_METHOD"] == "POST") {
             
              $name = $_POST['name'];
              $email = $_POST['email'];
              $message = $_POST['message'];
              $newsletter = $_POST['newsletter'];

              $passed = true;
              if($message == ""){
                  echo "<script>alert(\"Please fill out the message field.\");</script>";
                  $passed = false;

              }

              if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $passed = false;
                echo "<script>alert(\"Please enter a valid email address.\");</script>";
              }

              if(ctype_alpha(str_replace(' ', '', $name)) === false){
                 echo "<script>alert(\"Name can only contain letters and spaces.\");</script>";
                 $passed = false;
              }

               if($passed){
  
                /* //Email information
                  $admin_email = "coverfeed@gmail.com";
                  $subject = "Contact form from $name";
                  
                //send email
                  mail($admin_email, "$subject", $message, "From:" . $email);
                 */

                  $mail = new PHPMailer(TRUE);
                  $mail->isSMTP();
               
                   /* SMTP server address. */
                   $mail->Host = 'smtp.gmail.com';

                   /* Use SMTP authentication. */
                   $mail->SMTPAuth = TRUE;
                   
                   /* Set the encryption system. */
                   $mail->SMTPSecure = 'tls';
                   
                   /* SMTP authentication username. */
                   $mail->Username = 'mdc5bv@virginia.edu';
                   
                   /* SMTP authentication password. */
                   $mail->Password = 'margaret2';
                   
                   /* Set the SMTP port. */
                   $mail->Port = 587;
               

                  /* Open the try/catch block. */
                  try {


                     /* Set the mail sender. */
                     $mail->setFrom($email, $name);

                     /* Add a recipient. */
                     $mail->addAddress('mdc5bv@virginia.edu', 'Margaret Chen');

                     /* Set the subject. */
                     $mail->Subject = 'New contact form submitted';

                     /* Set the mail message body. */
                     $mail->Body = $message . " From: ". $name . " at " . $email;

                     /* Finally send the mail. */
                     $mail->send();
                  }
                  catch (Exception $e)
                  {
                     /* PHPMailer exception. */
                     echo $e->errorMessage();
                  }
                  catch (\Exception $e)
                  {
                     /* PHP exception (note the backslash to select the global namespace Exception class). */
                     echo $e->getMessage();
                  }






                //Email response
                echo "<script>alert(\"Thank you for contacting us.\");</script>";
            }
            else{
                  echo "<script>alert(\"There was an error.\");</script>";
            }
          }
        ?>

	

</html>
</body>


