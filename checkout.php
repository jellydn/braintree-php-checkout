<?php 
  $loader           = require __DIR__.'/vendor/autoload.php';
  date_default_timezone_set('America/Los_Angeles');

  use DebugBar\StandardDebugBar;

  $debugbar         = new StandardDebugBar();
  $debugbarRenderer = $debugbar->getJavascriptRenderer();
  ob_start();
  include("_header-alt.php");
  $buffer=ob_get_contents();
  ob_end_clean();
  $buffer=str_replace("%TITLE%","Check out",$buffer);
  echo $buffer;
  Dotenv::load(__DIR__);
  Braintree_Configuration::environment(getenv('BRAIN_TREE_ENV'));
  Braintree_Configuration::merchantId(getenv('MERCHANT_ID'));
  Braintree_Configuration::publicKey(getenv('PUBLIC_KEY'));
  Braintree_Configuration::privateKey(getenv('PRIVATE_KEY'));
  $nonce = $_POST["payment_method_nonce"];
  $hasCustomer = false;
  $hasPayment = false;
  $hasSubscription = false;
?>
<style type="text/css">
  .gradient {
    background: #7873eb; /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzc4NzNlYiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMzNDU3YmEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(left,  #7873eb 0%, #3457ba 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right top, color-stop(0%,#7873eb), color-stop(100%,#3457ba)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(left,  #7873eb 0%,#3457ba 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(left,  #7873eb 0%,#3457ba 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(left,  #7873eb 0%,#3457ba 100%); /* IE10+ */
    background: linear-gradient(to right,  #7873eb 0%,#3457ba 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7873eb', endColorstr='#3457ba',GradientType=1 ); /* IE6-8 */
  }
  .oj {color:#009D90;}
  .blue {color:#3557BA;}
  .dkblue {color:#05507E;}
  .orange-bg {padding:60px 0;}
  .bg-grey-lt {background:#f1f1f1;border-top:1px solid;border-bottom:1px solid;border-color:#d6d6d6;padding:40px 0;}
    .bg-grey-lt.bg-sm {background:#f1f1f1;border:none;padding:30px 0;}
      .bg-grey-lt.bg-sm h2 {margin:0;}
      .bg-grey-lt.bg-sm h2 .glyphicon {font-size:50px !IMPORTANT;position:relative;top:-3px;}
  .glyphicon {vertical-align:middle;}
  .p1050 {padding:10px 50px;}
  p {font-size:17px;color:#454545;margin-bottom:27px;line-height:24px;}
  h2.t34 {line-height:34px;}
  .lh28 {line-height:26px;}
  .lh46 {line-height:46px;}
  .lt-grey {color:#828282;}
  .green {color:#5cb85c;}
  .dkgrey {color:#2a2a2a;}
  .ml15 {margin-left:15px;}
  .panel .glyphicon {vertical-align:baseline;font-size:18px;}

/* Interview Sprite */
.interview-andreesen, .interview-dubin, .interview-forbes, .interview-huffington, .interview-teller { max-width: 100%; background-size: 100%; background-image: url('/assets/img/interview-sprite.jpg'); }
 .interview-andreesen { background-position: 0 0%; background-size: 100%; }
.interview-dubin { background-position: 0 25%; background-size: 100%; }
.interview-forbes { background-position: 0 50%; background-size: 100%; }
.interview-huffington { background-position: 0 75%; background-size: 100%; }
.interview-teller { background-position: 0 100%; background-size: 100%; }

/* Checkout */
.well {margin-bottom:-1px;border-radius:0;border:none; border-bottom:1px solid #bbb;}
.panel-oj {border:1px solid #eb5c03;}
.panel-heading-oj {background:#eb5c03 !IMPORTANT;}

@media screen and (max-width: 991px) {
  img.pull-right {float:none !IMPORTANT;text-align:center;display: block;margin: 0 auto;}
  .bg-grey-lt.bg-sm h2 {font-size:28px !IMPORTANT;text-align:center;}
    .bg-grey-lt.bg-sm h2 .glyphicon {display: block;text-align: center;margin-bottom:10px;}
  .paragraph-reset {margin-top:0px !IMPORTANT;}
}

@media screen and (max-width: 767px) {
  .p1050 {padding:10px 15px; font-size:20px;}  
  .mb0 {margin-bottom:25px;}
  .speaker-name {display:block;} 
  .panel-mm {height:auto !IMPORTANT; display:none;}
  .panel-oj {margin-top:30px;}
  .btn-wrap {white-space: normal;}
}  
</style>
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

      <nav class="navbar navbar-default gradient">
        <div class="container text-center">          
            <span class="navbar-brand" style="width:100%;margin-left:0;"><img src="/assets/img/exp-think-tank-logo.png" style="max-height:100px;display:inline;margin:5px 0;" /></span>          
        </div>
      </nav>
      
       <div class="container">      
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1"> 

        <?php

            // step 1: create customer information
            list($firstName,$lastName) = explode(' ',$_POST['name']);

            $customer = Braintree_Customer::create(array(
              'firstName' => $firstName,
              'lastName' => $lastName,
              'email' => $_POST['email']
          ));
            $debugbar["messages"]->addMessage($customer);

            if(!$customer->success)
            {
              echo 'You have error: ';
              foreach($customer->errors->deepAll() AS $error) {
                echo( $error->message . "\n");
              }

              echo '<br/><a href="process.php"> Return to Order</a><br/>';
            }
            else
            {
              $hasCustomer = true;
              // step 2: create payment method
              $result = Braintree_PaymentMethod::create(array(
                'customerId' => $customer->customer->id,
                'paymentMethodNonce' => $nonce,
                'options' => array(
                  'verifyCard' => true,
                  'verificationMerchantAccountId' => getenv('MERCHANT_ACCOUNT_ID'),
                  )
              ));

              if(!$result->success)
              {
                  echo 'You have error: ';
                  foreach($result->errors->deepAll() AS $error) {
                    echo( $error->message . "\n");
                  }

                  echo '<br/><a href="process.php"> Return to Order</a><br/>';
              }
              else {
                  // step 3: subsciption
                  $hasPayment = true;
                  $paymentMethodToken = $result->paymentMethod->token;
                  
                  $subscription = Braintree_Subscription::create(array(
                      'paymentMethodToken' => $paymentMethodToken,
                      'planId' => 'silver_plan',
                      'merchantAccountId'  => getenv('MERCHANT_ACCOUNT_ID')
                  ));
                  $debugbar["messages"]->addMessage($subscription);

                  if(!$subscription->success)
                  {
                      echo 'You have error: ';
                      foreach($subscription->errors->deepAll() AS $error) {
                        echo( $error->message . "\n");
                      }

                      echo '<br/><a href="process.php"> Return to Order</a><br/>';
                  }
                  else {
                      echo 'Congratulation: You have been ordered.<br/>';
                      $hasSubscription = true;
                  }
              }



            }
        ?>

        </div>
      </div>
      </div>

      <!-- Subscription form -->
      <?php
       if($hasSubscription):
       ?>
        <div class="container">      
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1"> 
        <iframe src="https://docs.google.com/forms/d/1mPOrwc3tuEjM1_R-AFB6kTf32ZRCDtzI_7wtHe9W71g/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
        </div>
        </div>
      <?php endif; ?>

      <!-- Site footer -->
      <hr />
      <footer class="footer mb50">
        <div class="container text-center">
          <p class="t12 mb0">Copyright &copy; 2015 &mdash;  Exponential Think Tank &mdash; 800 Corporate Pointe Suite 350 - Culver City, CA 90230 &mdash; <a href="mailto:support@exponentialthinktank.com" target="_blank">support@exponentialthinktank.com</a></p>
          <p class="mt0 t12"><a href="#" data-toggle="modal" data-target="#modalContact">Contact Us</a> &mdash; <a href="#" data-toggle="modal" data-target="#modalPrivacy">Terms and Conditions</a> &mdash; <a href="#" data-toggle="modal" data-target="#modalPrivacy">Privacy Policy</a></p>
        </div>
      </footer>

<!-- Modal Contact -->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Information</h4>
      </div>
      <div class="modal-body">
        <p>Got a question and need to get in touch with us? Please feel free to drop an email to our support staff an email at the address below.</p>
        <p><strong>Email:</strong> <br /><a href="mailto:support@exponentialthinktank.com" target="_blank">support@exponentialthinktank.com</a></p>
        <hr class="mt15 mb15" />
        <p><strong>Address:</strong> <br />
        Exponential Think Tank <br />
        800 Corporate Pointe Suite 350<br />
        Culver City, CA 90230</p>
      </div>
    </div>
  </div>
</div>

<!-- Modal Privacy -->
<div class="modal fade" id="modalPrivacy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Terms and Conditions & Privacy Policy</h4>
      </div>
      <div class="modal-body">
        <h2 class="t24 mt0"><strong>Privacy Policy</strong></h2><p>This Privacy Policy governs the manner in which Exponential Think Tank&nbsp;collects, uses, maintains and discloses information collected from users (each, a "User") of the http://www.exponentialthinktank.com website ("Site"). This privacy policy applies to the Site and all products and services offered by Exponential Think Tank.</p><h6><strong>Personal identification information</strong></h6><p>We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, register on the siteplace an orderfill out a formrespond to a surveysubscribe to the newsletter and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name,  email address,  mailing address,  phone number,  credit card information,  </p><p>Users may, however, visit our Site anonymously.</p>
        <p>We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.</p><h6><strong>Non-personal identification information</strong></h6><p>We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.</p><h6><strong>Web browser cookies</strong></h6>
        <p>Our Site may use "cookies" to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.</p><h6><strong>How we use collected information</strong></h6><p>Exponential Think Tank collects and uses Users personal information for the following purposes:</p>
        <ul><li><i>To improve customer service</i><br>Your information helps us to more effectively respond to your customer service requests and support needs.</li> <li><i>To personalize user experience</i><br>We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.</li> <li><i>To improve our Site</i><br>We continually strive to improve our website offerings based on the information and feedback we receive from you.</li> <li><i>To process transactions</i><br>We may use the information Users provide about themselves when placing an order only to provide service to that order. We do not share this information with outside parties except to the extent necessary to provide the service.</li> <li><i>To administer a content, promotion, survey or other Site feature</i><br>To send Users information they agreed to receive about topics we think will be of interest to them.</li> <li><i>To share your information with third parties</i><br>We may share or sell information with third parties for marketing or other purposes.</li>
        <li><em>To send periodic emails</em><br>The email address Users provide for order processing, will only be used to send them information and updates pertaining to their order. It may also be used to respond to their inquiries, and/or other requests or questions. If User decides to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc. If at any time the User would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email or User may contact us via our Site.</li></ul><h6><strong>How we protect your information</strong></h6><p>We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.</p>
        <p>Sensitive and private data exchange between the Site and its Users happens over a SSL secured communication channel and is encrypted and protected with digital signatures.</p><h6><strong>Sharing your personal information</strong></h6><p>We do not sell, trade, or rent users personal identification information with third-parties. We reseve the right to share personal identification information regarding users with our business partners. We may use third party service providers to help us operate our business and the Site or administer activities on our behalf, such as sending out newsletters or surveys. We may share your information with these third parties for those limited purposes provided that you have given us your permission.</p><h6><strong>Third party websites</strong></h6>
        <p>Users may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licensors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website's own terms and policies.</p><p></p><h6><strong>Changes to this privacy policy</strong></h6>
        <p>Exponential Think Tank&nbsp;has the discretion to update this privacy policy at any time. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.</p><h6><strong>Your acceptance of these terms</strong></h6><p>By using this Site, you signify your acceptance of this policy and terms of service. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.</p><h6><strong>Contacting us</strong></h6><p>If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at:<br><br>Exponential Think Tank<br>http://www.exponentialthinktank.com<br>800 Corporate Pointe Suite 350 - Culver City, CA 90230<br>support@exponentialthinktank.com</p><h2 class="t24"><strong>Terms and Conditions</strong></h2><p>Last Revised: January 13, 2015</p><p>These terms and conditions govern your use of this web site and our membership site(s). By accessing this web site and/or our membership site(s), you are acknowledging and accepting these terms and conditions. These terms and conditions are subject to change by Exponential Think Tank Inc. (hereinafter “Company”) at any time and at our discretion without notice. Your use of this web site and/or our membership site(s) after any changes are implemented constitutes your acceptance of the changes. As a result, we encourage you to consult the terms and conditions each time you use this web site and/or our membership site(s).</p><ol ><li><p>INTELLECTUAL PROPERTY</p></li>
        </ol><p>You acknowledge and agree that all content and materials available on this site are protected by copyrights, trademarks, service marks, patents, trade secrets, or other proprietary rights and laws. Except as expressly authorized by COMPANY, you agree not to sell, license, rent, modify, distribute, copy, reproduce, transmit, publicly display, publicly perform, publish, adapt, edit, or create derivative works from such materials or content.</p><p>As noted above, reproduction, copying, or redistribution for commercial purposes of any materials or design elements on this site is strictly prohibited without the express written permission of COMPANY. For information on requesting such permission, please contact Kelley at Kelley@a360.com.</p><ol start="2"><li><p>THIRD PARTY REFERENCES / HYPERLINKS</p></li>
        </ol><p>This site and/or our membership site(s) may link you to other sites on the Internet. These sites may contain information or material that some people may find inappropriate or offensive. These other sites are not under the control of COMPANY, and you acknowledge that COMPANY is not responsible for the accuracy, copyright compliance, legality, decency, or any other aspect of the content of such sites. The inclusion of such a link does not imply endorsement of the site by or any association with its operators. However, we may from time to time be compensated for referring you to certain vendors, and in such circumstances, we will let you know of that relationship.</p><ol start="3"><li><p>MEMBERSHIP PROGRAM(S)</p></li></ol><ol ><li><p>PRICING</p></li></ol><p>COMPANY may offer one or more membership programs on this web site. The pricing for any such membership program will be clearly stated on the applicable order form.</p><ol ><li><p>DISCLOSURE OF INFORMATION ON PRIVATE MEMBERSHIP SITE</p></li>
        </ol><p>As a member of one of the membership programs offered by COMPANY, you may submit content to the membership site, including photos and user comments. You shall be solely responsible for your own content and the consequences of submitting and publishing your content.</p><p>You further agree and understand that other individual members of the program that are separate from COMPANY may see the information that you post on any applicable membership site. For this reason, you agree that you shall NOT post any information that you do not want others to see. You agree that anything you post in the applicable membership site is at your own risk, and you further agree to hold COMPANY harmless from any and all damage that could occur to you from any information that you post. For additional details, please see our Privacy Policy.</p>
        <p>You affirm, represent, and warrant that you own or have the necessary licenses, rights, consents, and permissions to publish content you submit. You agree that content you submit will not contain third party copyrighted material, or material that is subject to other third party proprietary rights, unless you have permission from the rightful owner of the material or you are otherwise legally entitled to post the material and to grant COMPANY all of the license rights granted herein. COMPANY does not endorse any content submitted to COMPANY by any user or other licensor.</p><ol ><li><p>YOUR CONDUCT</p></li></ol><p>COMPANY does not permit copyright infringing activities and infringement of intellectual property rights on this site and/or membership site(s), and COMPANY will remove all content if properly notified that such content infringes on another’s intellectual property rights.</p>
        <p>You also affirm, represent, and warrant that your participation on this web site and/or in the membership program(s) and the content you submit does not relate to pornography, illegal activities of any kind, occult, hate, or racism. You also affirm, represent, and warrant that you shall not make any statements or take any actions against COMPANY or other members that would constitute libel or slander.</p><p>COMPANY reserves the right to make the final decision regarding what is appropriate. COMPANY further reserves the right to remove content or terminate your account without prior notice for a violation of this provision.</p><p>Further details regarding the conduct that is expected of all participants in the membership program can also be found in the first post that you will find inside the membership site.</p><ol ><li><p>TERMINATION OF MEMBERSHIP</p></li>
        </ol><p>Either you or COMPANY can cancel your participation in any of our membership programs at any time. No refunds for previous months of membership will be given once the initial refund period has passed. COMPANY’s refund policy is described in further detail in Section 3(E) herein, as follows.</p><ol ><li><p>REFUND POLICY</p></li></ol><p>COMPANY offers a 30-day money back guarantee. If you are not satisfied with our program within the first 30 days for any reason, you can simply contact us within that period and request a full refund of the membership fee that you paid.</p><ol ><li><p>CUSTOMER DISCLAIMERS</p></li></ol><p>COMPANY is not acting as a financial or legal advisor and does not guarantee that you will achieve any particular result from participating in any of COMPANY’s membership programs or from using any of the information on this site. Please see our complete earnings disclaimers for details.</p><ol start="4"><li><p>ABILITY TO ACCEPT TERMS AND CONDITIONS</p></li>
        </ol><p>You affirm that you are either more than 18 years of age, or an emancipated minor, or possess legal parental or guardian consent, and are fully able and competent to enter into the terms, conditions, obligations, affirmations, representations, and warranties set forth in these Terms and Conditions, and to abide by and comply with these Terms and Conditions.</p><ol start="5"><li><p>CONTACTING US </p></li></ol><p>If you need to contact us, you can email Kelley at <a href="mailto:Kelley@a360.com" >Kelley@a360.com</a>.</p><ol start="6"><li><p>DISCLAIMER OF WARRANTIES</p></li>
        </ol><p>ALL MATERIALS, INFORMATION, SOFTWARE, PRODUCTS, AND SERVICES INCLUDED IN OR AVAILABLE THROUGH THIS SITE (THE “CONTENT”) ARE PROVIDED “AS IS” AND “AS AVAILABLE” FOR YOUR USE. THE CONTENT IS PROVIDED WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NONINFRINGEMENT. COMPANY AND ITS AGENTS DO NOT WARRANT THAT THE CONTENT IS ACCURATE, RELIABLE OR CORRECT; THAT THIS SITE WILL BE AVAILABLE AT ANY PARTICULAR TIME OR LOCATION; THAT ANY DEFECTS OR ERRORS WILL BE CORRECTED; OR THAT THE CONTENT IS FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. YOUR USE OF THIS SITE IS SOLELY AT YOUR RISK. BECAUSE SOME JURISDICTIONS DO NOT PERMIT THE EXCLUSION OF CERTAIN WARRANTIES, THESE EXCLUSIONS MAY NOT APPLY TO YOU.</p><ol start="7"><li><p>LIMITATION OF LIABILITY</p></li>
        </ol><p>UNDER NO CIRCUMSTANCES SHALL COMPANY OR ITS AGENTS BE LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL, OR CONSEQUENTIAL DAMAGES THAT RESULT FROM THE USE OF, OR INABILITY TO USE, THIS SITE. THIS LIMITATION APPLIES WHETHER THE ALLEGED LIABILITY IS BASED ON CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY, OR ANY OTHER BASIS, EVEN IF COMPANY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. BECAUSE SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF INCIDENTAL OR CONSEQUENTIAL DAMAGES, COMPANY’S LIABILITY IN SUCH JURISDICTIONS SHALL BE LIMITED TO THE EXTENT PERMITTED BY LAW.</p><ol start="8"><li><p>INDEMNIFICATION</p></li></ol><p>Upon a request by COMPANY, you agree to defend, indemnify, and hold COMPANY and its other affiliated companies harmless, and their employees, contractors, officers, and directors from all liabilities, claims, and expenses, including attorney’s fees, that arise from your misuse of this site and/or the membership programs.</p>
        <ol start="9"><li><p>SEVERABILITY AND INTEGRATION </p></li></ol><p>Unless otherwise specified herein, this agreement constitutes the entire agreement between you and COMPANY with respect to this site and supersedes all prior or contemporaneous communications between you and COMPANY with respect to this site. If any part of these Terms and Conditions is held invalid or unenforceable, that portion shall be construed in a manner consistent with applicable law to reflect, as nearly as possible, the original intentions of the parties, and the remaining portions shall remain in full force and effect.</p><ol start="10"><li><p>JURISDICTION</p></li></ol><p>These Terms and Conditions shall be governed by and construed in accordance with the laws of the State of Texas. You hereby consent to binding arbitration in the State of Texas to resolve any disputes arising under this Terms and Conditions.</p>
      </div>
    </div>
  </div>
</div>    
          
      <!-- Bootstrap core JS -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/owl/owl.carousel.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
      <script type="text/javascript">		   	    
    		jQuery(function ($) {    				
    			// Change Selected Text
          $('#digital-btn').click(function() {
            $("#progSelected").text("O<sup>2</sup>");
            $('html, body').animate({
                scrollTop: $("#orderForms").offset().top
            }, 1200);
          });
          
          $('#bold-btn').click(function() {
            $("#progSelected").text("O<sup>2</sup>");
            $('html, body').animate({
                scrollTop: $("#orderForms").offset().top
            }, 1200);            
          });
                              
          
    		});	
    </script>
    <script src="https://js.braintreegateway.com/v2/braintree.js"></script>
    <?php 
         echo $debugbarRenderer->render() 
    ?>

  </body>
</html>
