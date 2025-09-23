<?php
$template = 'confirmation-letter.jpg'; // confirmation letter background
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Confirmation Letter</title>
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

  /* --- Input field positions (adjusted for your confirmation letter image) --- */
  #app_no     { top:72mm; left: 92mm; width: 70mm; }
  #name       { top: 112mm; left: 30mm; width: 140mm; }
   #father     { top: 121mm; left: 65mm; width: 140mm; }
  #cnic       { top: 131mm; left: 40mm; width: 140mm; }
  #address    { top: 140mm; left: 60mm; width: 140mm; }
#mobile     { top: 159mm; left: 32mm; width: 60mm; }
  #landline   { top: 159mm; left: 137mm; width: 60mm; }
  #email      { top: 167mm; left: 28mm; width: 140mm; }
  #property   { top: 176mm; left: 50mm; width: 50mm; }
  #size       { top: 176mm; left: 135mm; width: 50mm; }
  #location   { top: 185mm; left: 35mm; width: 60mm; }
  #category   { top: 185mm; left: 137mm; width: 60mm; }

  /*  #signature  { top: 265mm; left: 135mm; width: 60mm; } */
</style>
</head>
<body>
<div class="no-print" style="text-align:center; margin:10px;">
  <button onclick="window.print()">Print</button>
</div>

<div class="a4">
  <input id="app_no" class="field" type="text" placeholder="Application No">
  <input id="name" class="field" type="text" placeholder="Name">
  <input id="father" class="field" type="text" placeholder="Father/Husband Name">
  <input id="cnic" class="field" type="text" placeholder="CNIC No">
  <input id="address" class="field" type="text" placeholder="Residential Address">
  <input id="mobile" class="field" type="text" placeholder="Mobile">
  <input id="landline" class="field" type="text" placeholder="Land Line">
  <input id="email" class="field" type="text" placeholder="Email">
  <input id="property" class="field" type="text" placeholder="Property No">
  <input id="size" class="field" type="text" placeholder="Size">
  <input id="location" class="field" type="text" placeholder="Location">
  <input id="category" class="field" type="text" placeholder="Category">
  <input id="signature" class="field" type="text" placeholder="Authority Signature">
</div>

<footer style="text-align:center; font-size:13px; padding:6px; background:#333; color:#fff;">
  Software design by Ghulam Murtaza | 0323-2054415
</footer>
</body>
</html>
