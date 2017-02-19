<?php 

    $thisPage = "Contact Us";

    require 'Includes/header.php';

  ?>

<!-- Body -->



<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <img src="images/contact-petstech.png" class="img-responsive">
    </div>
  </div>
  <div class="row">  
    <div class="col-sm-12">
      <h2>Contact Us</h2>
      <p>Give a shout! We would love to hear from you. Fill out the form below and we respond back to you within 24-hours.</p>
    
      <form name="contactus" id="contactus" onsubmit="submitForm(); return false"> 
        
        <div class="form-group has-feedback">
          <label for="fname" class="control-label">First Name:</label>
          <input type="text" class="form-control has-error" id="fname" onblur="validate(this, reProperName);">
          <span class="glyphicon form-control-feedback"></span>
          <span class="validate-redlight"></span>
        </div>

        <div class="form-group has-sucess has-feedback">
          <label for="lname">Last Name:</label>
          <input type="text" class="form-control" id="lname" onblur="validate(this, reProperName);">
          <span class="glyphicon form-control-feedback"></span>
          <span class="validate-redlight"></span>
        </div>

        <div class="form-group has-feedback">
          <label for="email">Email Address:</label>
          <input type="email" class="form-control" id="email" onblur="validate(this, reEmail);">
          <span class="glyphicon form-control-feedback"></span> 
          <span class="validate-redlight"></span>         
        </div>

        <div class="form-group has-feedback">
          <label for="message">Message:</label>
          <textarea class="form-control" rows="8" id="message" onblur="validateTextArea(this, 350);"></textarea>
          <span class="glyphicon form-control-feedback"></span> 
          <span class="validate-redlight"></span>         
        </div>

        <!-- Do not delete below -->
      
      <div class="col-lg-12 text-center"> 
        <button id="sendmessage" type="submit" class="submit buttoncolor btn btn-lg">Send Message</button>
      </div>

    </form>

    </div>
  </div>
</div>

<!-- Contact Us Modal Send Success or Fail -->

<div class="modal fade" id="mymodal" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="statusheader"></h4>
      </div>      
      <div class="modal-body">
        <span id="status"></span>       
      </div>
    </div>
  </div>
</div>



<!-- Footer -->

  <?php require 'Includes/footer.php'; ?>