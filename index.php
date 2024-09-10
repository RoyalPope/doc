<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home6.css">
    <title>Document</title>
</head>
<body>
    <?php
    include('nav.html');
    ?>
    <div class="body">
        <div class="hello">
            <h1>Welcome To HPOINT Appointments</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. N
                isi consectetur repellat dolores nihil, enim dolor eum. Consequuntur, quos laudantium. Obcaecati asperiores animi ratione consequuntur? Sequi maxime delectus d
                ucimus debitis voluptatum sit nesciunt, accusamus ex inventore, aspernatur autem, aut expedita at! Esse fugiat nam laboriosam odio quasi sunt aspernatur ratione repellat!</p>
        </div>
    </div>
    <section id="help">
    <div class="other">
    <h1>How can we help you?</h1>
        <div class="cards">





            <div class="card card1" id="sinus">
                <h1>Sinusitis</h1>
            </div>



            
            <div id="sinuform" class="aform">
                <div class="content">
                <span class="close">&times;</span>
                    <form action="sinu.php" method="post">
                        <h1>Appointment for Sinusitis</h1>
                        <label for="">Names:</label>
                        <input type="text" name="names">
                        <label for="">Appointment Date:</label>
                        <input type="date" name="date">
                        <label for="">Insurance:</label>
                        <select name="insu" id="">
                            <option value="">Choose your Insurance</option>
                            <option value="NONE">None</option>
                            <option value="RSSB">RSSB</option>
                            <option value="MMI">MMI</option>
                            <option value="SANLAM">SANLAM</option>
                            <option value="MITUELI">MITUELI</option>
                            <option value="UAP">UAP</option>
                        </select>
                        <label for="">Insurance Id:</label>
                        <input type="number" name="id">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>






            <div class="card card2" id="lungs">
                <h1>Asthma</h1>
            </div>



            <div id="lunform" class="aform">
                <div class="content">
                <span class="close" id="lc">&times;</span>
                    <form action="ast.php" method="post">
                        <h1>Appointment for Asthma</h1>
                        <label for="">Names:</label>
                        <input type="text" name="names">
                        <label for="">Appointment Date:</label>
                        <input type="date" name="date">
                        <label for="">Insurance:</label>
                        <select name="insu" id="">
                            <option value="">Choose your Insurance</option>
                            <option value="NONE">None</option>
                            <option value="RSSB">RSSB</option>
                            <option value="MMI">MMI</option>
                            <option value="SANLAM">SANLAM</option>
                            <option value="MITUELI">MITUELI</option>
                            <option value="UAP">UAP</option>
                        </select>
                        <label for="">Insurance Id:</label>
                        <input type="number" name="id">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>








            <div class="card card3" id="eyes">
                <h1>Eyes</h1>
            </div>


            <div id="eyeform" class="aform">
                <div class="content">
                <span class="close" id="ec">&times;</span>
                    <form action="eye.php" method="post">
                        <h1>Appointment for Eyes</h1>
                        <label for="">Names:</label>
                        <input type="text" name="names">
                        <label for="">Appointment Date:</label>
                        <input type="date" name="date">
                        <label for="">Insurance:</label>
                        <select name="insu" id="">
                            <option value="">Choose your Insurance</option>
                            <option value="NONE">None</option>
                            <option value="RSSB">RSSB</option>
                            <option value="MMI">MMI</option>
                            <option value="SANLAM">SANLAM</option>
                            <option value="MITUELI">MITUELI</option>
                            <option value="UAP">UAP</option>
                        </select>
                        <label for="">Insurance Id:</label>
                        <input type="number" name="id">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>



            <div class="card card4" id="teeth">
                <h1>Dentist</h1>
            </div>


            <div id="denform" class="aform">
                <div class="content">
                <span class="close" id="dc">&times;</span>
                    <form action="dent.php" method="post">
                        <h1>Appointment With A Dentist</h1>
                        <label for="">Names:</label>
                        <input type="text" name="names">
                        <label for="">Appointment Date:</label>
                        <input type="date" name="date">
                        <label for="">Insurance:</label>
                        <select name="insu" id="">
                            <option value="">Choose your Insurance</option>
                            <option value="NONE">None</option>
                            <option value="RSSB">RSSB</option>
                            <option value="MMI">MMI</option>
                            <option value="SANLAM">SANLAM</option>
                            <option value="MITUELI">MITUELI</option>
                            <option value="UAP">UAP</option>
                        </select>
                        <label for="">Insurance Id:</label>
                        <input type="number" name="id">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>




        </div>










        <div class="part">
        <h1>PARTNERS</h1>


    <div class="parts">
            <div>
            <h4>RSSB</h4>
            <img src="images/rssb.png" alt="">
            </div>
            <div>
            <h4>SANLAM</h4>
            <img src="images/sanlam.jpg" alt="">
            </div>
            <div>
            <h4>MMI</h4>
            <img src="images/mmi.jpg" alt="">
        </div>
            <div>
            <h4>MITUWELI</h4>
            <img src="images/mituweli.jpeg" alt="">
        </div>
            <div>
            <h4>UAP</h4>
            <img src="images/uap.png" alt="">
            </div>
    </div>





        </div>






    </div>
    </section>




























    <section id="about">
        <div class="about">



        <div class="img">
            <img src="images/door.jpeg" alt="">
        </div>



        <div class="text">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga repudiandae debitis praesentium et nulla eos repellendus possimus? Unde voluptatum voluptas culpa assumenda soluta. Delectus nostrum quia dolor ex eaque. Provident, eos! Eaque, temporibus iste soluta molestias dolorem inventore ea earum qui sint? Reprehenderit eligendi esse id quis perspiciatis sunt consequatur cum qui eveniet cumque maiores, quas unde a laudantium totam! Tempore aut quidem ullam vel totam nisi deleniti. Repellat officia voluptatem eveniet ex dolores optio nam, deserunt voluptate autem ratione fugit accusantium ad perspiciatis animi! Dolore, 
            velit sunt reiciendis ea quibusdam labore rem numquam fugiat, quam ratione amet provident assumenda!</p>
        </div>




        </div>
    </section>


































<section id="contact">
<div class="contacts">
    <div class="form">
        <form action="">
        <h1>Send A Message</h1>
        <div class="dets">
        <div>
        <label for="">Names:</label>
        <input type="text" name="names">
        </div>
        
        <div>
        <label for="">Email:</label>
        <input type="email" name="email">
    </div>
    </div>
    <div>
        <label for="">Message:</label>
        <textarea name="mssg" id="" cols="40" rows="5"></textarea>
    </div>
    <input type="submit" value="Submit">
    </form>
</div>
<div class="contact">
    <H1>CONTACT US</H1>
    <p>Email: <a href="mailto: rvssianby@gmail.com">rvssianby@gmail.com</a></p>
    <p>Tel: <a href="tel: +250784212973">+250784212973</a></p>
    <p>Powered by <a href="">The Pope Industries Ltd.</a>, &copy; 2024</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
        1d8203.398570336389!2d30.068267991687257!3d-1.
        9639096420732336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca67a3ddcdf83%3A0x400008913f1b96fc!2sRwampara%2C%20Kigali!5
        e1!3m2!1sen!2srw!4v1712819004790!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</section>























<script>
// Get the form
var sinuform = document.getElementById('sinuform');

// Get the button that opens the modal
var sinus = document.getElementById("sinus");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
sinus.onclick = function() {
    sinuform.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    sinuform.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == sinuform) {
//         sinuform.style.display = "none";
//     }
// }

var lungs = document.getElementById("lungs");
var lunform = document.getElementById("lunform");
var lc = document.getElementById("lc");
lungs.onclick = function(){
    lunform.style.display= "block";
}
lc.onclick = function(){
    lunform.style.display = "none";
}


var eyes = document.getElementById("eyes");
var eyeform = document.getElementById("eyeform");
var ec = document.getElementById("ec");

eyes.onclick = function(){
    eyeform.style.display = "block";
}

ec.onclick = function(){
    eyeform.style.display = "none";
}



var teeth = document.getElementById("teeth");
var denform = document.getElementById("denform");
var dc = document.getElementById("dc");

teeth.onclick = function(){
    denform.style.display = "block";
}

dc.onclick = function(){
    denform.style.display = "none";
}



</script>

</body>
</html>