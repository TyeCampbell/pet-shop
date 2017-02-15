<?php 

  $thisPage = "Grooming";

  require 'Includes/header.php';

  ?>

    <div class="container">
      <div class="row">
        <div class="col-md-6 hidden-xs hidden-sm" alt="Dog Image">
          <img src="images/groomingdogsmall.png" class="img-responsive img-circle">
        </div>
        <div class="col-md-6">
          <h2>Grooming</h2>
          <p id="groominginfo">Grooming is our speciality! Our pet grooming spa at Sandy's Pet Shop is staffed with talented professionals that are ready to help your pet look and feel their very best. Our staff have many years of experience with all breeds, and offer a wide variety of services from standard grooming to soothing spa treatments to love on your pet the way they deserve. It's not all about dogs! Our staff is also trained in cat grooming, for your wiskered part of the family.</p>
        </div>
      </div>
      <div class="row">
        <h2 class="text-center">Grooming Packages</h2>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h3>Basic Scrub Down</h3>
          <ul>
            <li>Bath</li>
            <li>Toenail Trim</li>
            <li>Brushing</li>
            <li>Ear Cleaning</li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h3>Shave &amp; Save</h3>
          <ul>
            <li>Full Body Shave</li>
            <li>Bath</li>
            <li>Toenail Trim</li>
            <li>Ear Cleaning</li>
          </ul>
        </div>
        <div class="col-sm-4">
        <h3>Full Spa Treatment</h3> 
          <ul>
            <li>No Shed Shampoo &amp; Conditioner Bath</li>
            <li>Toenail Trim</li>
            <li>Ear Cleaning</li>
            <li>Full Brushing</li>
            <li>Full Body Haircut</li>
          </ul>     
        </div>  
      </div>
    </div>


<!-- Appointment Request -->


    <div class="container-fluid appointment">  
      <div class="container">    
        <div class="row">
          <h2 class="text-center">Appointment Request</h2>
            <form method="post" id="appointmentrequest" onsubmit="submitApptRequest(); return false">

            <div class="row"> 
              <div class="col-sm-6">
                <div class="form-group has-feedback">
                  <label for="aptfirstname">First Name:</label>
                  <input type="text" class="form-control has-error" id="aptfirstname" name="aptfirstname">
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>
                </div>
              </div>
              
              <div class="col-sm-6">                
                <div class="form-group has-feedback">
                  <label for="aptlastname">Last Name:</label>
                  <input type="text" class="form-control has-error" id="aptlastname" name="aptlastname">
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>                  
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">              
                <div class="form-group has-feedback">
                  <label for="aptaddress">Address:</label>
                  <input type="text" class="form-control has-error" id="aptaddress" name="aptaddress">
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>                  
                </div>
              </div>
              
              <div class="col-sm-6">                
                <div class="form-group has-feedback">
                  <label for="aptcity">City:</label>
                  <input type="text" class="form-control has-error" id="aptcity" name="aptcity">
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>                  
                </div>
              </div>            
             
              <div class="col-sm-4">
                <div class="form-group has-feedback">
                  <label for="aptstate">State:</label>
                  <select class="form-control has-error" id="aptstate" name="aptstate">
                    <option value="select">Select State...</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                  </select>
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>                  
                </div>
              </div>

              <div class="col-sm-2">                  
                <div class="form-group has-feedback">
                  <label for="aptzip">Zip Code:</label>
                  <input type="number" class="form-control has-error" id="aptzip" name="aptzip">
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>                  
                </div>
              </div>
            </div>

            <div class="row">                         
              <div class="col-sm-4">                
                <div class="form-group has-feedback">
                  <label for="aptphonenumber">Phone Number:</label>
                  <input type="tel" class="form-control has-error" id="aptphonenumber" name="aptphonenumber">
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>
                </div>
              </div>
              
              <div class="col-sm-8">                
                <div class="form-group has-feedback">
                  <label for="aptemail">Email Address:</label>
                  <input type="email" class="form-control has-error" id="aptemail" name="aptemail">
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>
                </div>
              </div>  
            </div>              

            <div class="row">
              <div class="col-sm-5">                
                <div class="form-group has-feedback">
                  <label for="aptpetname">Pet's Name:</label>
                  <input type="text" class="form-control has-error" id="aptpetname" name="aptpetname">
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>
                </div>
              </div>

              <div class="col-sm-3">                
                <div class="form-group has-feedback">
                  <label for="aptpetage">Pet Age:</label>
                  <select class="form-control has-error" id="aptpetage" name="aptpetage">
                    <option value="select">Select Pet Age...</option>
                    <option value="less than 1">Less than 1 year</option>
                    <option value="1 year">1 Year</option>
                    <option value="2 years">2 Years</option>
                    <option value="3 years">3 Years</option>
                    <option value="4 years">4 Years</option>
                    <option value="5 years">5 Years</option>
                    <option value="6 years">6 Years</option>
                    <option value="7 years">7 Years</option>
                    <option value="8 years">8 Years</option>
                    <option value="9 years">9 Years</option>
                    <option value="10 years">10 Years</option>
                    <option value="11 years">11 Years</option>
                    <option value="12 years">12 Years</option>
                    <option value="13 years">13 Years</option>
                    <option value="14 years">14 Years</option>
                    <option value="15 years">15 Years</option>
                    <option value="16 years">16 Years</option>
                    <option value="17 years">17 Years</option>
                    <option value="18 years">18 Years</option>
                    <option value="19 years">19 Years</option>
                    <option value="20 years">20 Years</option>
                    <option value="more than 20">Older than 20 Years</option>                        
                  </select>
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>
                </div>
              </div>

              <div class="col-sm-4">              
                <div class="form-group clearfix">
                  <label>Is your pet neutered or spayed?</label>
                  <div class="checkbox">
                    <label for="aptneutered"><input type="checkbox" id="aptneutered" name="aptneutered" >Neutered/Spayed</label>
                  </div>
                </div>
              </div> 
            </div>

            <div class="row">
              <div class="col-sm-4">                
                <div class="form-group has-feedback">
                  <label for="aptpettype">Pet Type:</label>
                  <select class="form-control has-error" id="aptpettype" name="aptpettype">
                    <option value="select">Select Pet Type...</option>
                    <option value="Dog">Dog</option>
                    <option value="Cat">Cat</option>
                  </select>
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>
                </div> 
              </div>

              <div id="breedselect" class="col-sm-4">                
                <div class="form-group has-feedback">
                  <label for="aptbreed">Breed Type:</label>
                  <select class="form-control has-error" id="aptbreed" name="aptbreed">
                    <option value="select">Select Breed...</option>
                    <option value="Akita">Akita</option>
                    <option value="Alaskan Malamute">Alaskan Malamute</option>
                    <option value="American Pit Bull Terrier">American Pit Bull Terrier</option>  
                    <option value="Australian Cattle Dog">Australian Cattle Dog</option>
                    <option value="Australian Shepherd">Australian Shepherd</option>
                    <option value="Basset Hound">Basset Hound</option>
                    <option value="Beagle">Beagle</option>
                    <option value="Bichon Fries">Bichon Fries</option>
                    <option value="Border Collie">Border Collie</option>
                    <option value="Boxer">Boxer</option>
                    <option value="Bulldog">Bulldog</option>
                    <option value="Bull Terrier">Bull Terrier</option>
                    <option value="Cavalier King Charles Spaniel">Cavalier King Charles Spaniel</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="Chinese Crested Dog">Chinese Crested Dog</option>
                    <option value="Chow Chow">Chow Chow</option>
                    <option value="Dachshund">Dachshund</option>
                    <option value="Doberman Pinscher">Doberman Pinscher</option>
                    <option value="English Cocker Spaniel">English Cocker Spaniel</option>
                    <option value="English Mastiff">English Mastiff</option>
                    <option value="French Bulldog">French Bulldog</option>
                    <option value="German Shepherd">German Shepherd</option>
                    <option value="Golden Retriever">Golden Retriever</option>
                    <option value="Great Dane">Great Dane</option>
                    <option value="Grey Hound">Grey Hound</option>
                    <option value="Havanese">Havanese</option>
                    <option value="Irish Wolfhound">Irish Wolfhound</option>
                    <option value="Jack Russell Terrier">Jack Russell Terrier</option>
                    <option value="Labrador Retriever">Labrador Retriever</option>
                    <option value="Lhasa Apso">Lhasa Apso</option>
                    <option value="Maltese">Maltese</option>
                    <option value="Miniature Pinscher">Miniature Pinscher</option>
                    <option value="Minature Schanauzer">Minature Schanauzer</option>
                    <option value="Old English Sheepdog">Old English Sheepdog</option>
                    <option value="Papillon">Papillon</option>
                    <option value="Pekingese">Pekingese</option>
                    <option value="Pembroke Welsh Corgi">Pembroke Welsh Corgi</option>
                    <option value="Pit Bull">Pit Bull</option>
                    <option value="Pointer">Pointer</option>
                    <option value="Pomeranian">Pomeranian</option>
                    <option value="Poodle">Poodle</option>
                    <option value="Pug">Pug</option>
                    <option value="Rottweiler">Rottweiler</option>
                    <option value="Siberian Husky">Siberian Husky</option>
                    <option value="Shar Pei">Shar Pei</option>
                    <option value="Shetland Sheepdog">Shetland Sheepdog</option>
                    <option value="Shiba Inu">Shiba Inu</option>
                    <option value="St Bernard">St. Bernard</option>
                    <option value="Shih Tzu">Shih Tzu</option>
                    <option value="West Highland White Terrier">West Highland White Terrier</option>
                    <option value="Yorkshire Terrier">Yorkshire Terrier</option>
                    <option value="Other">Other</option>
                  </select>
                  <span class="glyphicon form-control-feedback"></span>
                  <span class="validate-redlight"></span>
                </div>  
              </div>
            </div>

              <div class="col-sm-12 text-center">                                                                             
                <div class="form-group">
                  <button id="requestbutton" type="submit" class="buttoncolor btn btn-lg ">Request Appointment</button>
                </div>
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

  <?php require 'Includes/footer.php'; ?>

