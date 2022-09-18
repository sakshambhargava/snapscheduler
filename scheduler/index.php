<?php
session_start();
?>





<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f30e2a790832f3e96009402" />
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.35896" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.35896" />
<link type="text/css" rel="stylesheet" href="../css/style.css" />

<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SnapScheduler - Your Instant Meeting Scheduler</title>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn01.jotfor.ms/static/prototype.forms.js?3.3.35896" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.35896" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.35896" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.35896" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.35896" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms//s/umd/ie11/for-appointment-field.js" type="text/javascript"></script>  
<script src="../js/home.js" type="text/javascript"></script>  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      SnapScheduler
    </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div> 


    <?php if( $_SESSION['username']): ?>
      <button onclick="window.location.href = 'logout.php';" type="button" class="btn btn-primary">Logout</button>
<?php else: ?>
  <button onclick="window.location.href = 'login';" type="button" class="btn btn-primary">Login</button>
<?php endif; ?>





  </nav>

  <form class="form" action="data.php" method="POST" name="meeting-form" id="meeting-form" accept-charset="utf-8" autocomplete="on" onsubmit = "return validation()">

    <div role="main" class="form-all">
      <style>
        .form-all:before {
          background: none;
        }
      </style>
      <ul class="form-section page-section">
        <li id="cid_18" class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-large">
            <div class="header-text httal htvam">
              <h1 id="header_18" class="form-header" data-component="header"> Follow Up Call </h1>
              <div id="subHeader_18" class="form-subHeader"> Enter your details to receive a call back from us </div>
            </div>
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_fullname" id="id_20">
          <label class="form-label form-label-top" id="title-header" for="first_20"> Title <span class="form-required"></span>
          </label>
          <div id="cid_20" class="form-input-wide jf-required" data-layout="full">
            <div data-wrapper-react="true">
              <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                <input type="text" id="title" name="title" class="form-textbox validate[required]" required="" />
              </span>
            </div>
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_appointment" id="id_22">
          <label class="form-label form-label-top" id="label_22" for="input_22"> Duration <span class="form-required"> * </span></label>
          
          
          <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                <input type="date" id="date" name="date" class="form-textbox validate[required]" required="" />
                
                 <input type="time" id="time" name="time" class="form-textbox validate[required]" required="" />
                <label class="form-sub-label" for="first_20" id="sublabel_20_first" style="min-height:13px" aria-hidden="false"></label>
              </span>
              
              
          <div id="cid_22" class="form-input-wide jf-required" data-layout="full">
            <div id="input_22" class="appointmentFieldWrapper jfQuestion-fields">
              <input type="date" class="appointmentFieldInput validate" name="q22_preferredDate22[date]" id="input_22_date" />
              <input type="time" class="appointmentFieldInput" name="q22_preferredDate22[duration]" value="60" id="input_22_duration" />
             
              <div class="appointmentField"></div>
            </div>
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_fullname" id="id_20">
          <label class="form-label form-label-top" id="label_20" for="first_20"> Location <span class="form-required"></span>
          </label>
          <div id="cid_20" class="form-input-wide jf-required" data-layout="full">
            <div data-wrapper-react="true">
              <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                <select id="option" name="option" class="form-textbox validate[required]" required="">
                  <option>Zoom</option>
                </select <label class="form-sub-label" for="first_20" id="sublabel_20_first" style="min-height:13px" aria-hidden="false"></label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_fullname" id="id_20">
          <label class="form-label form-label-top" id="label_20" for="first_20"> Description <span class="form-required"></span>
          </label>
          <div id="cid_20" class="form-input-wide jf-required" data-layout="full">
            <div data-wrapper-react="true">
              <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                <textarea rows="8" cols="40" type="text" id="desc" name="desc" class="form-textarea validate[required]" required=""></textarea>
                <label class="form-sub-label" for="first_20" id="sublabel_20_first" style="min-height:13px" aria-hidden="false"></label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_button" id="id_17">
          <div id="cid_17" class="form-input-wide" data-layout="full">
            <div data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
                
              <button id="input_17" type="submit" class="form-submit-button form-submit-button-none submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content=""> Schedule Now </button>
            </div>
          </div>
        </li>
        <li style="display:none"> Should be Empty: <input type="text" name="website" value="" />
        </li>
      </ul>
    </div>

    <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="222593784133460" />
    <script type="text/javascript">
      var all_spc = document.querySelectorAll("form[id='222593784133460'] .si" + "mple" + "_spc");
      for (var i = 0; i < all_spc.length; i++) {
        all_spc[i].value = "222593784133460-222593784133460";
      }
    </script>
    <div class="formFooter-heightMask"></div>

  </form>


  
</body>
</html>