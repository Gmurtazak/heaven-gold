<?php
$template = 'booking-form.jpg'; // booking form background image
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Booking Form</title>
<style>
  @page { size: A4; margin: 0; }
  body { margin: 0; padding: 0; }
  .a4 {
    position: relative;
    width: 210mm;
    height: 297mm;
    margin: auto;
    background: url('<?php echo $template; ?>') no-repeat center top;
    background-size: cover;
    font-family: Arial, sans-serif;
  }
  .field {
    position: absolute;
    font-size: 11pt;
    color: #000;
    background: transparent;
    border: none;
    outline: none;
  }
  @media print {
    .no-print { display: none; }
    .field { border: none; }
  }

  /* --- Input field positions (adjusted to your form image) --- */
  #date         { top: 40mm; left: 35mm; width: 40mm; }
  #sno          { top: 40mm; left: 150mm; width: 40mm; }
  #name         { top: 50mm; left: 35mm; width: 130mm; }
  #cnic1        { top: 60mm; left: 40mm; width: 120mm; }
  #father       { top: 70mm; left: 55mm; width: 120mm; }
  #address      { top: 80mm; left: 55mm; width: 140mm; }
  #mobile       { top: 95mm; left: 40mm; width: 60mm; }
  #res          { top: 95mm; left: 125mm; width: 60mm; }
  #nationality  { top: 105mm; left: 45mm; width: 60mm; }
  #occupation   { top: 105mm; left: 125mm; width: 60mm; }
  #nextkin      { top: 115mm; left: 45mm; width: 60mm; }
  #relation     { top: 115mm; left: 125mm; width: 60mm; }
  #cnic2        { top: 125mm; left: 40mm; width: 120mm; }

  #booking      { top: 140mm; left: 40mm; width: 40mm; }
  #discount     { top: 140mm; left: 110mm; width: 40mm; }
  #cost         { top: 150mm; left: 40mm; width: 40mm; }
  #ncost        { top: 150mm; left: 110mm; width: 40mm; }

  #plot         { top: 160mm; left: 40mm; width: 40mm; }
  #type         { top: 160mm; left: 110mm; width: 40mm; }
  #size         { top: 170mm; left: 40mm; width: 40mm; }
  #phase        { top: 170mm; left: 110mm; width: 40mm; }
  #extras       { top: 180mm; left: 40mm; width: 40mm; }
  #tcost        { top: 180mm; left: 110mm; width: 40mm; }

  #sales        { top: 240mm; left: 50mm; width: 80mm; }
  #signature    { top: 250mm; left: 50mm; width: 80mm; }
  #applicant    { top: 250mm; left: 135mm; width: 80mm; }
</style>
</head>
<body>
<div class="no-print" style="text-align:center; margin:10px;">
  <button onclick="window.print()">Print</button>
</div>

<div class="a4">
  <input id="date" class="field" type="text" placeholder="Date">
  <input id="sno" class="field" type="text" placeholder="S.No">
  <input id="name" class="field" type="text" placeholder="Name">
  <input id="cnic1" class="field" type="text" placeholder="CNIC No">
  <input id="father" class="field" type="text" placeholder="Father/Husband Name">
  <input id="address" class="field" type="text" placeholder="Residential Address">
  <input id="mobile" class="field" type="text" placeholder="Mobile">
  <input id="res" class="field" type="text" placeholder="Res">
  <input id="nationality" class="field" type="text" placeholder="Nationality">
  <input id="occupation" class="field" type="text" placeholder="Occupation">
  <input id="nextkin" class="field" type="text" placeholder="Next of Kin">
  <input id="relation" class="field" type="text" placeholder="Relation">
  <input id="cnic2" class="field" type="text" placeholder="CNIC No">

  <input id="booking" class="field" type="text" placeholder="Booking">
  <input id="discount" class="field" type="text" placeholder="Discount">
  <input id="cost" class="field" type="text" placeholder="Cost">
  <input id="ncost" class="field" type="text" placeholder="N. Cost">

  <input id="plot" class="field" type="text" placeholder="Plot No">
  <input id="type" class="field" type="text" placeholder="Type">
  <input id="size" class="field" type="text" placeholder="Size">
  <input id="phase" class="field" type="text" placeholder="Phase">
  <input id="extras" class="field" type="text" placeholder="Extras">
  <input id="tcost" class="field" type="text" placeholder="T. Cost">

  <input id="sales" class="field" type="text" placeholder="Sales Person Name">
  <input id="signature" class="field" type="text" placeholder="Signature">
  <input id="applicant" class="field" type="text" placeholder="Signature of Applicant">
</div>

<footer style="text-align:center; font-size:13px; padding:6px; background:#333; color:#fff;">
  Software design by Ghulam Murtaza | 0323-2054415
</footer>
</body>
</html>