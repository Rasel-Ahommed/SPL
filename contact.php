<!-- include navbar -->
<?php
include('header.php');
?>

<head>
    <link rel="stylesheet" href="./asset/css/contact.css">
    <script src="./asset/js/contact.js"></script>
</head>

<!-- about header  -->
<div class="contacthero">
    <div class="contactBanner">
        <div class="contactBannerTitle">
            <span>Home/contact us</span>
        </div>
    </div>
</div>

<!-- about titel -->
<div class="contactBody">
    <div class="containt">
        <div class="contactTitle">
            <h3>contact us</h3>
        </div>

        <section id="contact">
            <div class="contact-wrapper">

                <!-- Left contact page -->

                <form id="contact-form" class="form-horizontal" role="form">
                <!-- <div id="contact-form" class="form-horizontal"> -->

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="email_id" placeholder="EMAIL" name="email" value="" required>
                        </div>
                    </div>

                    <textarea class="form-control" id="message" rows="8" placeholder="MESSAGE" name="message" required></textarea>

                    <button class="btn send-button" id="submit" type="submit" value="SEND" >
                        <div class="alt-send-button">
                            <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                        </div>
                    </button>
                <!-- </div> -->
                </form>

                <!-- Left contact page -->

                <div class="direct-contact-container">

                    <ul class="contact-list">
                        <li class="list-item"><i class="fa-sharp fa-solid fa-location-dot fa-2x"><br> <span class="contact-text place">Village: Soalia, Post Office: Henchi 9455, Union: 10 No. Atulia, Police Station: Shyamnagar, District: Satkhira, Bangladesh</span></i></li>

                        <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:+8801712-556095" title="Give me a call">+8801712-556095</a></span></i></li>

                        <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">soaliapubliclibrary@gmail.com</a></span></i></li>

                    </ul>
                    <hr>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- email js  -->
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("M7btya04DI6UkO6v1"); //public key
   })();
</script>


<!-- include footer  -->
<div class="footer">
    <?php
        include("footer.php");
    ?>
</div>
