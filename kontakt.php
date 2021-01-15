<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Timelapse by Free Website Templates
	www.freewebsitetemplat.es 
	Photos by Fotogrph http://fotogrph.com
	Released under the Creative Commons Attribution 3.0 License.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>.: Autorex :.</title>
		
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="outer">
			<div id="header">
				
				<div id="search">
					<form action="" method="post">
						
							<input clss="text" type="text" name="search" size="32" maxlength="32">
							<input type="submit" value="  #  ">
						
					</form>
				</div>
				<div id="nav">
				<?php
                include ('files/menu.php');
                ?>
					<br class="clear" />
				</div>
			</div>
			
			<div id="banner">
				<img src="img/banner.png" width="1180" height="264" alt="" />
			</div>
			
			<div id="main">
				<div id="sidebar1">
					<div id="lgin_link">
					<a href="login.html">Login</a> <a href="register.html">Register</a> 
					</div>
				
				<div id="anketa" anketa="anketa.html">
										<h3>Anketa</h3>
					<p id="naslov">
						Koje gorivo koristi vaš auto
					</p>
					<div class="form">
						<form action="#" method="post" id="poll"></form>
						<p>
							<input id="choice1" name="polloption" class="radio" type="radio" value="1" /> <label class="choice" for="choice1">Dizel</label>
						</p>
						<p>
							<input id="choice2" name="polloption" class="radio" type="radio" value="2" /> <label class="choice" for="choice2">Benzin</label>
						</p>
						<p>
							<input id="choice3" name="polloption" class="radio" type="radio" value="3" /> <label class="choice" for="choice3">Plin</label>
						</p>
						<p>
							<span><a href="#">Vidjeti rezultate</a></span> <input type="button" name="vote" value="Vote" class="inputButton" />
						</p>
					</div>


					</div>
				</div>
				<div id="sidebar2">
					<h3>Bogata ponuda svih vrsta autodijelova</h3>
					<img class="top" src="img/car-service-icons-vector-114642.jpg" width="280" height="300" alt="" />
					<p>
						Da bi ste održali veš automobil ispravnim i sigurnim, kod nas možete nabaviti sve za njega. Ugrađujemo djelove sa garancijom.
					</p>
					<h3>Top savjet</h3>
					<p id="savjet">
						<pre>Ovaj savjet iz baze </pre>
					</p>
					<ul class="linkedList">
						<li class="first">
							<a href="#">Dignissim erat suscipit</a>
						</li>
						<li>
							<a href="#">Etiam aliquam iaculis</a>
						</li>
						<li class="last">
							<a href="#">Diam neque dolor vitae</a>
						</li>
					</ul>
				</div>
				<div id="content">
					<div id="box1">
					
						<div class="blogpost">
						  <h2>Autorex - Kontakt</h2>
							
							</p>
						
						  <form id="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] );?>">
							 <p>
							    <label>Ime: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </label>
							    <input type="text" name="firstname" id="name" size="25" maxlength="35" /></br>
							    <label>Prezime: &nbsp; </label>
                                <input name="surname" type="text" size="25" maxlength="32" />
                                </br><label>e-mail: &nbsp;</label>
                                <input name="email" type="text" value="neko@mail.com" maxlength="32" size="27" />
                                </br>
                                <label> Tekst: </label></br>
                                <textarea name="comment" rows="7" cols="30"></textarea>	</br>
									<input type="submit" name="ok" value="    OK    " size="30" />
									<input type="reset" name="resetButton" value="  Reset  " />
                          </p>
                          </form>
							<p class="meta">

                            <?php
                              include("datalogin.php");

                              /// deklaracija i iniciajlizacija varijabli
                              $name=$fullname=$surname=$email=$question="";

                              function test_input($data)
                                {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }

                              if   ($_SERVER["REQUEST_METHOD"]=="POST")
                              {
                              $fullname=test_input($_POST["firstname"]);
                              $email=test_input($_POST["email"]);
                              $question=test_input($_POST["comment"]);
                              }

                             $sql="INSERT INTO contact (fullname,email,question) VALUES ($fullname,$email,$question)";

                              if($conn->query($sql)===TRUE)
                                {
                                	 echo "<br>Your comment is<b> added</b>: ".$firstname . "  to database";
                                }
                                else
                                {
	                                 echo "Error: " . $sql ."<br>" . $conn->error;
                                }




                            ?>
						  </p>
			          </div>
					</div>
				
					<br class="clear" />
				</div>
				<br class="clear" />
			</div>
		</div>
		<div id="copyright">
			Author: <a href="">Igor Josić </a>&copy; 2017 All Rights Reserved</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.
		</div>
	</body>
</html>