<?php get_header();?>


  <?php 
if(isset($_POST["submit"]))
{
if(isset($_POST["message"]) && isset($_POST["email"]) && isset($_POST["name"]) && isset($_POST["subject"]))
{
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$subject = $_POST["subject"];

$to = 'yousboud@hotmail.com';

$headers = "From: ".$name."\r\n";
$send = mail($to, $subject, $message, $headers);

if($send)
{
echo '<br>';
echo 'Thank You for Contacting our Support, will get to you shortly';
echo '<br>';
mail($email,"Customer Support","Thank you For Contacting Customer Support, Will get to you shortly", "Customer Support at Pharmacy Rahbani");

}
else
{
?>
<span class="popuptext" id="myPopup">Try Again Later</span>
<?php
}
}
}
?>

  <h1 style="margin-top: 20px; margin-bottom: 20px;">Contact us</h1>
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-2 ml-auto">

      <form method="post" action="contact.php">
        <input type="text" name="name" id="input-name" placeholder="Name">
        <input type="email" name="email" id="input-email" placeholder="Email address">
        <input type="text" name="subject" id="input-subject" placeholder="Subject">
      </div>
      <div class="col-lg-3 col-md-6 mr-auto">
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
      </div>
      
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-3 mx-auto">
        <input type="submit" name="submit" value="Submit" id="input-submit">
      </div>
    </div>
  </div>

</form>


  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-sm-2 mx-auto">
        <p style="margin-top: 20px; border-radius: 5px ; margin-left: 45px"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26423.296680500745!2d35.6344185970112!3d34.12300035753386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f5ca814ab769b%3A0xbe47735b265d616e!2sByblos!5e0!3m2!1sen!2slb!4v1595767175377!5m2!1sen!2slb"
            width="1125" height="600" frameborder="0" style="border:1;" allowfullscreen="1"></iframe></p>
      </div>
    </div>
  </div>
  <?php get_footer();?>