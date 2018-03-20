<?php
if ($_POST['pass'] == 'a')
echo '';

else
header('Location:magicword.html');
?>

<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link rel="stylesheet" href="styles3.css" type="text/css" charset="utf-8" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="resume_page.js"></script>
    <title>Andrew Mitchell</title>
</head>

<body>

    <div class="sidenav">
        <a href="#">
            <span><i class="fa fa-user"></i></span>
            <span class="text"> ABOUT </span>
        </a>
        <a href="#">
            <span><i class="fa fa-book"></i></span>
            <span class="text"> EDUCATION </span>
        </a>
        <a href="#">
            <span><i class="fa fa-file-text"></i></span>
            <span class="text"> WORK </span>
        </a>
        <a href="#">
            <span><i class="fa fa-lightbulb-o"></i></span>
            <span class="text"> PROJECTS </span>
        </a>
        <a href="#">
            <span><i class="fa fa-comments"></i></span>
            <span class="text"> COMMENTS </span>
        </a>
        <a href="#">
            <span><i class="fa fa-envelope"></i></span>
            <span class="text"> CONTACT </span>
        </a>

    </div>
    <div class="main">
        <div class="section about">
            <h2 class="section_title">Andrew J Mitchell</h2>
            <img id="top-avatar" src="myavatar.png">
            <p> OBJECTIVE </p>
            <p>To secure a position in a company that enables me to improve my skills, increase my practical experience, fulfill my personal ambitions and expand my knowledge. </p>
        </div>

        <div class="section education">
            <h2 class="section_title"> Education </h2>
            <div class="col-1">
                <p><strong><u>San Bernardino Valley College</u></strong><br>
                  Degree: AA Liberal Arts <br>
                  Attended: 2003 - 2006 <br>
                </p>
              </div>
            <div class="col-2">
                <p><strong><u>California State University San Bernardino</u></strong> <br>
                   Degree: BA Mathematics <br>
                   Attended: 2010 - 2013 <br>
                   * Dean’s list for academic performance <br>
                   * Nominated for Golden Key Honor Society <br>
                 </p>
                 </div>

        </div>
        <div class="section work">
            <h2 class="section_title"> EXPERIENCE </h2>
            <div class="list_work">

    <div class="slider">
	  <div class="arrows">
	    <a class="previous" href="#"><i class="fa fa-arrow-left"></i></a>
	    <a class="next" href="#"><i class="fa fa-arrow-right"></i></a>
	  </div>
	  <div class="slides">
			<div class="slide1 active">
        <li>Company: Unlimited Food Options LLC</li>
        <ul>
          <li>Position: Manager </li>
          <li>Dates: 01/2015 till 08/2015 </li>
        </ul>

			</div>
			<div class="slide2">
        <li>Company: United States Post Office</li>
        <ul>
          <li>Position: City Carrier Assistant </li>
          <li>Dates: 10/2013 till 12/2014 </li>
        </ul>

			</div>
			<div class="slide3">
        <li>Company: Lifetime Solutions Inc</li>
        <ul>
          <li>Position: Sales </li>
          <li>Dates: 02/2013 - 06/2013 </li>
        </ul>
			</div>
		</div>
	</div>

            <!--<ul>
              <li>Company: Unlimited Food Options LLC</li>
              <ul>
                <li>Position: Manager </li>
                <li>Dates: 01/2015 till 08/2015 </li>
              </ul>
              <br>
              <li>Company: United States Post Office</li>
              <ul>
                <li>Position: City Carrier Assistant </li>
                <li>Dates: 10/2013 till 12/2014 </li>
              </ul>
              <br>
              <li>Company: Lifetime Solutions Inc</li>
              <ul>
                <li>Position: Sales </li>
                <li>Dates: 02/2013 - 06/2013 </li>
              </ul>
              <br>
          </ul> -->
        </div>
        </div>
          <div class="section projects">
            <h2 class="section_title"> Links to cool stuff </h2>
        </div>
        <div class="section comments">
            <h2 class="section_title"> Comment Section </h2>

        </div>
        <div class="section contact">
            <h2 class="section_title"> Contact </h2>
        </div>

    </div>

</body>

</html>
