<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.grey-red.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Mate' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">

<title>MSternefeld</title>
</head>
<body>
    <header>
    <ul class="nav">
            <ul>
                <li>Marianna E. Sternefeld</li>
                <li><a href = "./index.html">Home</a></li>
                <li><a href = "./about.html">About Me</a></li>
                <li><a href = "./resume.html">Resume/Portfolio</a></li>
                <li><a href = "./contact.php">Contact Me</a></li>
                <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
            </ul>
        </ul>
    </header>
    <div id="wrapper">
        <div id="onecol">
            <a href="https://github.com/mesternefeld"><img src="pictures/icons/iconmonstr-github-1-72.png" id="social"></a><a href="https://www.linkedin.com/in/mesternefeld"><img src="pictures/icons/iconmonstr-linkedin-4-72.png" id="social"></a><a href="mailto:marianna@sternefeld.com"><img src="pictures/icons/iconmonstr-email-10-72.png" id="social"></a><a href="https://www.facebook.com/profile.php?id=1818846390"><img src="pictures/icons/iconmonstr-facebook-4-72.png" id="social"></a>
            <br /><br /><br />
            <?php
                // Nice language choice!!!
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $from = 'From: Website'; 
                $to = 'marianna@sternefeld.com'; 
                $subject = 'Website Submission';
                $human = $_POST['human'];

                $body = "From: $name\n E-Mail: $email\n Message:\n $message";

                if ($_POST['submit'] && $human == '4') {				 
                    if (mail ($to, $subject, $body, $from)) { 
                    echo '<p>Your message has been sent!</p>';
                } else { 
                    echo '<p>Something went wrong, go back and try again!</p>'; 
                } 
                } else if ($_POST['submit'] && $human != '4') {
                echo '<p>You answered the anti-spam question incorrectly!</p>';
                }
            ?>
            <form method="post" action="contact.php">
        
                <label>Name</label>
                <input type="text" name="name" placeholder="Type Here" width="20%">

                <label for="email">Email:</label> <input type="email" name="email" placeholder="you@yourwebsite.com" width="20%"/> 

                <label>Message</label>
                <textarea type="text" name="message" placeholder="Type Here"></textarea>
                
                <label>*What is 2+2? (Anti-spam)</label>
                <input type="text" name="human" placeholder="Type Here" width="20%">
                
                <input id="submit" name="submit" type="submit" value="Submit" width="20%">
                
        
            </form>
            <br /><br />
        </div>
                
        <footer>
            <section>
                Copyright &copy; Marianna Sternefeld. All rights reserved.
                <a href="https://github.com/mesternefeld"><img src="pictures/icons/iconmonstr-github-1-24.png" id="social"></a><a href="https://www.linkedin.com/in/mesternefeld"><img src="pictures/icons/iconmonstr-linkedin-4-24.png" id="social"></a><a href="mailto:marianna@sternefeld.com"><img src="pictures/icons/iconmonstr-email-10-24.png" id="social"></a><a href="https://www.facebook.com/MariannaErikaS"><img src="pictures/icons/iconmonstr-facebook-4-24.png" id="social"></a>
            </section>
        </footer>
    </div>
    <script>
        function myFunction() {
            document.getElementsByClassName("nav")[0].classList.toggle("responsive");
        }
    </script>
</body>
</html>
