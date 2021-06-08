 <!-- Fixed navbar -->
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Chela+One&family=Orelega+One&display=swap" rel="stylesheet">
 <style>
   .navbar-brand-name{
    
      font-family: 'Orelega One', cursive;
     color: white;
     font-weight: bolder;
     /* padding: 14px; */
     display: flex;
     font-size: 35px;
     font-weight: 600;
   }
 </style>
 <nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand-name" href="index.php">Plasma Bank</a>
     </div>
     <div id="navbar" class="navbar-collapse collapse">
       <ul class="nav navbar-nav navbar-right">
         <li class="<?php
                    if (isset($setHomeActive)) {
                      echo $setHomeActive;
                    } else {
                      echo '';
                    }
                    ?>"><a href="index.php">Home</a></li>
         <li class="<?php if (isset($setMemberActive)) {
                      echo $setMemberActive;
                    } else {
                      echo '';
                    } ?>">
           <a href="member.php">Our Members</a>
         </li>

         <li class="<?php if (isset($setJoinUsActive)) {
                      echo $setJoinUsActive;
                    } else {
                      echo '';
                    } ?>">
           <a href="register.php">Join Us</a>
         </li>

         <li class="<?php if (isset($setAvailabilityActive)) {
                      echo $setAvailabilityActive;
                    } else {
                      echo '';
                    } ?>">
           <a href="availability.php">Check Availability</a>
         </li>

         <li class="">
           <a href="../index.php">Employee Login</a>
         </li>
       </ul>
     </div>
     <!--/.nav-collapse -->
   </div>
 </nav>
 </br></br>