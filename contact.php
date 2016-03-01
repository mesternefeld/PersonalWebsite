<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
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
        <h1>Marianna E. Sternefeld</h1>
    <nav>
        
            <ui>
                
                <li><a href = "./index.html">Home</a></li>
                <li><a href = "./about.html">About Me</a></li>
                <li><a href = "./resume.html">Resume/Portfolio</a></li>
                <li><a href = "./contact.php">Contact Me</a></li>
            </ui>
        </nav>
    </header>
    <div id="wrapper">
        <div id="onecol">
            <a href="https://github.com/mesternefeld"><img src="pictures/icons/iconmonstr-github-1-72.png" id="social"></a><a href="https://www.linkedin.com/in/mesternefeld"><img src="pictures/icons/iconmonstr-linkedin-4-72.png" id="social"></a><a href="mailto:marianna@sternefeld.com"><img src="pictures/icons/iconmonstr-email-10-72.png" id="social"></a><a href="https://www.facebook.com/MariannaErikaS"><img src="pictures/icons/iconmonstr-facebook-4-72.png" id="social"></a>
            <br /><br /><br />
            <?php
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
                <input name="name" placeholder="Type Here">

                <label>Email</label>
                <input name="email" type="email" placeholder="Type Here">

                <label>Message</label>
                <textarea name="message" placeholder="Type Here"></textarea>
                
                <label>*What is 2+2? (Anti-spam)</label>
                <input name="human" placeholder="Type Here">
                
                <input id="submit" name="submit" type="submit" value="Submit">
                
        
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
    <script src="./mm-fontsize.js" type="text/javascript"></script>  
</body>
</html>