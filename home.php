<?php
 $to="akshith.pakalapati@gmail.com";
 $subject=$_POST['subject'];
 $name=$_POST['name'];
 $mail=$_POST['email'];
 $number=$_POST['number'];
 $description=$_POST['description'];

 $message="
    User information:
         Name: $name;
         Email: $email;
         Number:$number;
         Project Description:$description;
";

 $header=$email;
     mail($to,$subject,$message,$header);
     echo "Mail sent successfully";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
 <head>
   <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  
	<title>Frescominteractive</title>
 </head>
 <body data-hijacking="off" data-animation="opacity">
     
  <section  class="cd-section visible">
      
      <div id="1">
        <h2 style="margin-top:0%"><font size="10">Frescom</font><font size="4">interactive</font></h2>
    </div>
  </section>
  <section class="cd-section">
    <div id="2">
        <h2 style="margin-top:-19.53125%;">About-Us</h2>
         <div style="width:80%;margin-left:10%;">
            <p style="margin-top:-20.04166666666667%;margin-bottom:45.57291666666667%;">Hello Everyone. This is the team of Frescom. The main motive of our startup is to advance in the field of game development and web apps development. And we also strongly believe that we can do a lot in this field. This is the reason why we are launching our startup. Now let us dive into our business plan.

Well, it took a lot of time to make our business plan as a business plan is not about having a product in our hands but it has to be in the customer’s hands. So we had done some plans. Not satisfied with them and remodified and the process continued for a long time of 6 months to get a clarity of how to get maximized profits with minimized investment.

It typically took several months to complete our good plan. Most of that time is spent in research and re‐thinking our ideas and assumptions. But then, that’s the value of the process. So we made time to do the job properly. We never regret the effort. And finally, we maintained a detailed note on our sources of information and on the assumptions underlying our financial data.</p>
        </div>
        </div>
  </section>
  <section class="cd-section">
   <div id=#3>
      <h2>Section-3</h2>
   </div>
  </section>
  <section class="cd-section">
   <div id=#4>
      <h2 style="margin-top:-19.53125%">Games</h2>
       <div style="width:80%;margin-left:10%;" >
            <p style="margin-top:-20.04166666666667%;margin-bottom:45.57291666666667%;">our games</p>
       </div>
   </div>
  </section>
  <section class="cd-section">
   <div id=#5>
      <h2 style="margin-top:-19.53125%">Contact</h2>
       <div style="width:50%;margin-left:10%;float:left" >
            <form style="margin-top:-20.04166666666667%;margin-bottom:45.57291666666667%;color:black;">
                <input type="text" name="name" size="30" placeholder="Full name"/><br><br>
                <input id="to" type="text" name="email" size="30" placeholder=" E-mail ID "/><br><br>
                <input id="subject" type="text" name="subject" size="30" placeholder="Write Subject" /><br><br>
                <input id="num" type="number" size="30" name="number" placeholder="Mobile number" /><br><br>
                <textarea id="content" cols="30" rows="5" name="description" placeholder="Project description"></textarea><br><br>
                <button class="btn btn-sm btn-info" name="submit" id="send_email">Send</button><br><br>
                <span id="message"></span>
           </form>
       </div>
       <div style=" width:50%;margin-left:10%;float:right">
           <img src="img/logo3.png" style="width:250px;height:250px;margin-top:-20.04166666666667%;margin-bottom:45.57291666666667%"/>
       </div>
   </div>
  </section>
     
     
    
  <!--<nav>
		<ul class="cd-vertical-nav">
			<li><a href="#0" class="cd-prev inactive">Next</a></li>
			<li><a href="#0" class="cd-next">Prev</a></li>
		</ul>
	</nav>--> <!-- .cd-vertical-nav -->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/velocity.min.js"></script>
<script src="js/velocity.ui.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
 </body>
</html>
