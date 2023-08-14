<?php
$conn = mysqli_connect('localhost','root', '', 'contact_db') or die('connection failed');
if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM 'contact_form' WHERE name = '$name' AND $email = '$email AND message = 'message'") or die('query failed');

    if(mysqli_num_rows($select_message)>0){
        $message[] = 'message sent  already!';}
        else{
            mysqli_query($conn, "INSERT INTO contact_form(name, email, message) VALUES('$name', '$email', '$message' )") or die('query failed');
            $message[] = 'message sent succefully!';
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/4bbf6094fa.js" crossorigin="anonymous"></script>
</head>
<body>
<?php 
        if(isset($$message)){
            foreach($$message as $$message ){
                echo ' <div class="message">
                <span> '.$message.' </span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
    </div>';
            }
        }
        ?>
<div id="header">
    <div class="container">
        <nav>
            <img src="images/logo.png" class="logo">
            <ul>
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav> 
    </div>
</div>
<!---------------about------------>
<div id="about">
   <div class="container">
    <div class="row">
       <div class="about-col-1">
        <img src="images/user.png">
       </div>

       <div class="about-col-2">
            <h1 class="sub-title">About Me</h1>
            <p>Hi,I am Sanduni Kanchana from tangalle, Sri Lanka. I'm one part chef, one part cake designer, and a student who specializes in decorating cakes for birthdays, weddings and other special occasions. I love the art of decorating cakes. Always I try to give best taste and make my customers sweat as sweets.</p>
     
            <div class="tab-titles">
        <p class="tab-links active-link"onclick="opentab('skills')">Skills</p>
        <p class="tab-links"onclick="opentab('experience')">Experience</p>
        <p class="tab-links"onclick="opentab('education')">Education</p>
     </div>
     <div class="tab-contents active-tab" id="skills">
        <ul>
            <li><span>Patience</span><br>Work closely with clients, having good communication with people and patiently listen and craft the client's request into a design.</li>
            <li><span>Creativity</span><br>Cake  is an edible work of art.Having good knowledge and five year experience in designing. </li>    
            <li><span>On time service</span><br>Under high pressure also fulfill customer requests and special orders like wedding cakes on time.</li>    
</ul>
     </div>
     <div class="tab-contents" id="experience">
        <ul>
            <li><span>2022-Current</span><br>Working as a online designer by using softwares at "cake corner".</li>
            <li><span>2020-2021</span><br>Cake designer in Cake Palace Matara.</li>    
            <li><span>2018-2020</span><br>Trainnig as a backer in southern backery.</li>    
</ul>
     </div>

     <div class="tab-contents"id="education">
        <ul>
            <li><span>2019-Current</span><br>Bsc in Applied Sciences Rajarata University Of Sri Lanka.</li>
    <li><span>2021</span><br>Diploma in Wilton Cake Decorating Course.</li>    
<li><span>2016</span><br>Former student in R L Clement Cake Decorating School.</li>    
</ul>
     </div>
        
    
       </div> 
    </div>
   </div> 
</div>
<!--------------services--------->
<div id="services">
    <div class="container">
        <h1 class="sub-title">My Services</h1>
        <div class="services-list">
            <div>
                <h2>Cakes</h2>
                <p>
                    Every types of cakes including muffings,cupcakes,jarcakes can be order at any special occasion. Make your birthday, wedding day and every day happy by making celebrations batter and sweeter.
                </p>
                <a href="#"></a>Learn more</a>
            </div>


            <div>
                <h2>Cookies</h2>
                <p>
                    Every type of cookies including sandwich cookies, ribbon cookies, rainbow cookies with your favourite flavours. A cookie is sure to bring happiness into your life.
                </p>
                <a href="#"></a>Learn more</a>
            </div>


            <div>
                <h2>Puddings</h2>
                <p>
                    Chocolate self-saucing pudding, white chocolate and raspberry self-saucing pudding, citrus passionfruit delicious pudding, bread and butter pudding, chocolate pudding for all parties and events. Make your order as you desire.
                </p>
                <a href="#"></a>Learn more</a>
            </div>


        </div>
    </div>
</div>
<!--------------portfolio----------->
<div id="portfolio">
   <div class="container">
    <h1 class="sub-title">My Work</h1>
    <div class="work-list">
    <div class="work">
      <img src="images/work-1.jpg">
      <div class="layer">
        <h3>Ready-to-eat slice of heaven</h3>
        <p> Cakes makes all the beautiful events in your life more beautiful</p>
      </div>
    </div>
    <div class="work">
        <img src="images/work-2.jpg">
        <div class="layer">
            <h3>Take a sweet and meet a sweat</h3>
            <p> Cookies in the morning, cookies late at night, cookies make you happy, have another bite!</p>
          </div>
      </div>
      <div class="work">
        <img src="images/work-3.jpg">
        <div class="layer">
            <h3>It's an oppurtunity to make a something delicious</h3>
            <p> Desserts are the fairy tales of the kitchen—a happily-ever-after to supper.</p>
          </div>
      </div>
    
    </div>
    </div>
</div>
</div>
<!------------contact------------->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-sharp fa-solid fa-paper-plane"></i>skanchana@gmail.com</p>
                <p><i class="fa-sharp fa-solid fa-phone"></i>0764599456</p>
                <div class="social-icons">
                    <a href="https://facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                <a href="images/price-list.pdf"download class="btn btn2">Download Price </a>
                </div>
                <div class="contact-right">
                    <form action="connect.php" method="get">
                        <input type="text" name="Name" placeholder="Your Name reuqired">
                        <input type="email" name="email"placeholder="Your Email required">
                        <textarea name="Message" rows="6"placeholder="Your Message"></textarea>
                        <button type="submit"class="btn btn2">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
    }


</script>

</body> 
</html> 
