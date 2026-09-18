<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <div>
        <img id="img2" src="images/team.png" width="750px" style="position: absolute; position: fixed; z-index: 1; margin-left: 50%; margin-top: 10vh;">
    </div>
    <img src="images/aboutbg.png" id="img1">
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 110px; margin-left: 50px; width: 400px;">
        <h3>About Us</h3>
    	<p class="lead"><b>The Training and Placement Cell </b> serves as the platform for interaction between the college students and companies since June 2004. TPC assists desired final year students to get suitable job after completion of their program. However, the training and grooming commences from the very first year. Spotting talent, classification, working on the strengths and weaknesses of students has been the hallmark of our endeavors. TPC conducts Training programs to enhance soft skills and overall personality of students in association with industry and academic experts. Invitation Letters/e-mails are sent to various companies, organizations for conducting campus drives. The internships are also provided to the interested students to groom them to become job ready. 
        </p>
        
        <!-- Add the graph image below -->
        <img src="images/graph.png" alt="Graph Image" style="width: 100%; max-width: 600px; margin-top: 20px;">
    </div>
    <?php include_once 'includes/footer.php' ?>
    <script>
      $(document).ready(function() {
         $("#home").removeClass("active");
        $("#about").addClass("active");
        
      });
    </script>
    
</body>
</html>
