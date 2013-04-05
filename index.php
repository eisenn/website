<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
  <meta name="description" content="Noam D. Eisen - Engineer, Pilot, Inventor" />
  <meta name="keywords" content="noam eisen" />
  <title>Noam D. Eisen - Engineer, Pilot, Inventor</title>
  <style title="General CSS" media="General" type="text/css"></style>
</head>
<body style="height: 231px;">
<div style="text-align: center;"></div>
<table style="text-align: left; width: 984px; height: 173px;" 0=""
 cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td style="width: 156px; height: 185px;"><img
 style="width: 150px; height: 167px;" alt="Under construction image"
 title="Site under construction" src="Images/UnderConstruction.jpg"></td>
      <td style="width: 808px; height: 185px;">
      <h1><big><strong>Noam D. Eisen</strong></big></h1>
      <h2>My site is currently under construction - please bear with me!</h2>
      </td>
    </tr>
  </tbody>
</table>
<hr style="width: 100%; height: 2px;"><br>
<div style="text-align: center;">
<table
 style="text-align: left; margin-left: auto; margin-right: auto; width: 725px; height: 34px;"
 border="1" cellpadding="4" cellspacing="0">
  <tbody>
    <tr>
    </tr>
  </tbody>
</table>
</div>
<br>
<br>
<div style="text-align: center;">
<table
 style="width: 745px; height: 156px; text-align: left; margin-left: auto; margin-right: auto;"
 border="0" cellpadding="5" cellspacing="2">
  <tbody>
    <tr>
    </tr>
  </tbody>
</table>
</div>
<table style="text-align: left; width: 100%;" border="0" cellpadding="2"
 cellspacing="2">
  <tbody>
    <tr>
    </tr>
  </tbody>
</table>
<br>
<div style="text-align: center;">
<br>
<br>
<br>
<small>You are the 
<?php
$output = array();
exec("python counter.py", $output);
echo $output[0];
?> visitor to this site.
</small>
<br>
---
<br>
<small>Content last updated: 04 April 2013</small><br>
<small>Accessed at 
<?php
echo shell_exec("python hit_times.py");
?>
<br>
<br>
</small>
.</div>
</body>
</html>
