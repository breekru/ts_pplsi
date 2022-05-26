<html>
<head>
<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
</head>
<body>
<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form method="post">
     <div class="form-group ">
      <label class="control-label " for="fname">
       First Name
      </label>
      <input class="form-control" id="fname" name="fname" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="lname">
       Last Name
      </label>
      <input class="form-control" id="lname" name="lname" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="uname">
       User Name
      </label>
      <input class="form-control" id="uname" name="uname" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="email">
       Email
      </label>
      <input class="form-control" id="email" name="email" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="cbnum">
       Callback #
      </label>
      <input class="form-control" id="cbnum" name="cbnum" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label ">
       What type of call is this?
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="prov_corp_radio" type="radio" value="Provider Caller"/>
         Provider Caller
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="prov_corp_radio" type="radio" value="Corporate Caller"/>
         Corporate Caller
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label ">
       Are they On-Campus or Remote/WFH?
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="int_op_wfh" type="radio" value="On-Campus"/>
         On-Campus
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="int_op_wfh" type="radio" value="Remote/WFH"/>
         Remote/WFH
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label ">
       What Category best describes their issue
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="wfh_issue" type="radio" value="Printer"/>
         Printer
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="wfh_issue" type="radio" value="Can't Log In"/>
         Can't Log In
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="wfh_issue" type="radio" value="Software"/>
         Software
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="wfh_issue" type="radio" value="Hardware"/>
         Hardware
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="wfh_issue" type="radio" value="System I"/>
         System I
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label ">
       Where are you trying to print?
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="wfh_prt_loc" type="radio" value="Print to Office Printer"/>
         Print to Office Printer
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="wfh_prt_loc" type="radio" value="Personal Printer at home"/>
         Personal Printer at home
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="wfh_prt_name">
       Which Printer are you having problems with?
      </label>
      <input class="form-control" id="wfh_prt_name" name="wfh_prt_name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label ">
       Try to pull up the print queue and clear it
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="wfh_prt_q" type="radio" value="This helped!"/>
         This helped!
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="wfh_prt_q" type="radio" value="This did not help"/>
         This did not help
        </label>
       </div>
       <span class="help-block" id="hint_wfh_prt_q">
        instructions can be found at https://google.com
       </span>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label ">
       Have the user restart their computer and try to print again.
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="wfh_prt_rs" type="radio" value="This helped!"/>
         This helped!
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="wfh_prt_rs" type="radio" value="This did not help"/>
         This did not help
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="wfh_prt_esc">
       Collect Data for Escalation
      </label>
      <textarea class="form-control" cols="40" id="wfh_prt_esc" name="wfh_prt_esc" rows="10"></textarea>
      <span class="help-block" id="hint_wfh_prt_esc">
       put any additional data here for ticket creation and escalation
      </span>
     </div>
     <div class="form-group ">
      <label class="control-label " for="wfh_prt_complete">
       Create ticket and close with resolution details
      </label>
      <textarea class="form-control" cols="40" id="wfh_prt_complete" name="wfh_prt_complete" rows="10"></textarea>
      <span class="help-block" id="hint_wfh_prt_complete">
       You can put any additional info you may need.
      </span>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
</body>
</html>