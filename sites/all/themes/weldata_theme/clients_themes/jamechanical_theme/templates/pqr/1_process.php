<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">		
	div.BlockHeading {font-family:Arial; font-size: 7pt; font-weight: bold; color: navy;}

		div.CName {font-family:Arial; font-size: 11pt;  font-weight: bold; color: black;}
		div.CAddress {font-family:Arial; font-size: 8pt; font-weight: bold; color: black;}
		div.Title {font-family:Arial; font-size: 10pt; font-weight: bold; color: black;}
		div.Heading {font-family:Arial; font-size: 7pt; font-weight: bold; color: black;}
		div.Footer {font-family:Arial; font-size: 6pt; color: black;}
		div.Required {font-family:Arial; font-size: 6pt; color: navy;}
		div.Certify {font-family:Arial; font-size: 7pt; color: navy;}
		td.Data {
	font-family: Arial;
	font-size: 7pt;
	color: #000;
	
}
div.Heading1 {font-family:Arial; font-size: 7pt; font-weight: bold; color: navy;}
	
@media screen{
}
    </style>
</head>

<body class="BlockHeading">
<table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
  <tr>
    <td width="15%" rowspan="3"><div align="center"><img src="logo.jpg" width="76" height="68"  alt=""/></div></td>
    <td width="85%"> <div align="center" class="CName">J&amp;A MECHANICAL CONTRACTORS INC.</div></td>
  </tr>
  <tr>
    <td height="21"><div align="center" class="CAddress"><span itemprop="streetAddress">5814 State Route 104</span>,<span itemprop="addressLocality">Oswego</span>,<span itemprop="addressRegion">NY</span> <span itemprop="postalCode">13126</span>,USA<br>
    </div></td>
  </tr>
  <tr>
    <td height="42"><div align="center" class="Title"><?php print $qualified_to ; ?> - PQR - Page 1</div></td>
  </tr>
</table>
<br>
<table width="100%" border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td width="21%" bgcolor="#f2f2f2" class="Data">PQR Report  No.</td>
    <td width="15%" class="Data"><div align="center"><?php print $pqr_number ; ?></div></td>
    <td width="8%" bgcolor="#f2f2f2" class="Data">Rev. No.</td>
    <td width="6%" class="Data"><div align="center"><?php print $pqr_revision_number ; ?></div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data">Qualified to</td>
    <td width="41%" class="Data"><div align="center"><?php print $qualified_to ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">WPS No.</td>
    <td class="Data"><div align="center"><?php print $wps_number ; ?></div></td>
    <td bgcolor="#f2f2f2" class="Data">Rev. No.</td>
    <td class="Data"><div align="center"><?php print $revision_number ; ?></div></td>
    <td bgcolor="#f2f2f2" class="Data">Date</td>
    <td class="Data"><div align="center"><?php print $date ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Company Name</td>
    <td colspan="5" class="Data"><div align="center"><?php print $company_name ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Reference Docs.</td>
    <td colspan="5" class="Data"><div align="center"><?php print $reference_documents ; ?></div></td>
  </tr>
</table><br>
<div class="BlockHeading">WELDING PROCESSES (QW-401)</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="21%" bgcolor="#f2f2f2" class="Data">Welding Process</td>
    <td width="79%" class="Data"><div align="center"><?php print $welding_process ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Type</td>
    <td class="Data"><div align="center"><?php print $Type ; ?></div></td>
  </tr>
</table><br>
<div class="BlockHeading">
  <div align="left">BASE METALS (QW-403)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="21%" class="Data"><div align="center">Type</div></td>
    <td width="20%" bgcolor="#f2f2f2" class="Data"><div align="center">Specification.</div></td>
    <td width="12%" bgcolor="#f2f2f2" class="Data"><div align="center">Grade.</div></td>
    <td width="16%" bgcolor="#f2f2f2" class="Data"><div align="center">UNS</div></td>
    <td width="15%" bgcolor="#f2f2f2" class="Data"><div align="center">P-No.</div></td>
    <td width="16%" bgcolor="#f2f2f2" class="Data"><div align="center">Group No.</div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Metal 1</td>
    <td class="Data"><div align="center"><?php print $metal1_specification ; ?></div></td>
    <td class="Data"><div align="center"><?php print $metal1_grade ; ?></div></td>
    <td class="Data"><div align="center"><?php print $metal1_uns ; ?></div></td>
    <td class="Data"><div align="center"><?php print $metal1_p_number ; ?></div></td>
    <td class="Data"><div align="center"><?php print $metal1_group_number ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Welded to</td>
    <td class="Data"><div align="center"><?php print $welded_to_specification ; ?></div></td>
    <td class="Data"><div align="center"><?php print $welded_to_grade ; ?></div></td>
    <td class="Data"><div align="center"><?php print $welded_to_uns ; ?></div></td>
    <td class="Data"><div align="center"><?php print $welded_to_p_number ; ?></div></td>
    <td class="Data"><div align="center"><?php print $welded_to_group_number ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Thickness of Test Coupon(in.)</td>
    <td class="Data"><div align="center"><?php print $thickness_of_test_coupon ; ?></div></td>
    <td colspan="2" bgcolor="#f2f2f2" class="Data">Diamter of Test Coupon (in.)</td>
    <td colspan="2" class="Data"><div align="center"><?php print $diameter_of_test_coupon ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Tested </td>
    <td colspan="5" class="Data"><div align="center"><?php print $tested_with ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Max. Pass Thickness (in.)</td>
    <td colspan="5" class="Data"><div align="center"><?php print $base_metal_maximum_pass_thickness ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data"><div align="left">Other</div></td>
    <td colspan="5" class="Data"><div align="center"><?php print $base_metal_other ; ?></div></td>
  </tr>
</table><br>
<div class="BlockHeading">
  <div align="left">FILLER METALS  (QW-404)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="11%" class="Data"><div align="center"></div></td>
    <td width="11%" bgcolor="#f2f2f2" class="Data"><div align="center">SFA</div></td>
    <td width="11%" bgcolor="#f2f2f2" class="Data"><div align="center">Classification</div></td>
    <td width="7%" bgcolor="#f2f2f2" class="Data"><div align="center">F-No.</div></td>
    <td width="6%" bgcolor="#f2f2f2" class="Data"><div align="center">A-No.</div></td>
    <td width="16%" bgcolor="#f2f2f2" class="Data"><div align="center">Chemical analysis or Trade name</div></td>
    <td width="13%" bgcolor="#f2f2f2" class="Data"><div align="center"> Size (in.)</div></td>
    <td width="8%" bgcolor="#f2f2f2" class="Data"><div align="center">Product form/Type</div></td>
    <td bgcolor="#f2f2f2" class="Data"><div align="center">Weld Metal Thickness (in.)</div></td>
  </tr>
  <tr>
    <td height="10" bgcolor="#f2f2f2" class="Data"><?php print $welding_process ; ?></td>
    <td height="10" class="Data"><div align="center"><?php print $filler1_sfa ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $filler1_classification ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $filler1_f_number ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $filler1_a_number ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $filler1_chemical_analysis_or_trade_name ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $filler1_size ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $filler1_product_form_type ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $filler1_weld_metal_thickness ; ?> </div>      <div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Cons. Insert</td>
    <td class="Data"><div align="center"><?php print $consumable_insert_sfa ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $consumable_insert_classification ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $consumable_insert_f_number ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $consumable_insert_a_number ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $consumable_insert_chemical ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $consumable_insert_size ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $consumable_insert_productform ; ?> </div></td>
    <td class="Data"><div align="center"></div>      <div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td colspan="8" class="Data"><div align="center"><?php print $filler_metal_other ; ?></div></td>
  </tr>
</table>
<br>
<div class="BlockHeading">
  <div align="left">POSITION   (QW-405)................................................................................................................................................PREHEAT (QW-406)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="14%"  bgcolor="#f2f2f2" class="Data">Position of Groove</td>
    <td class="Data"><div align="center"><?php print $position_of_groove ; ?> </div></td>
    <td width="18%" bgcolor="#f2f2f2" class="Data">Preheat Temp. (Min.)(°F)</td>
    <td width="32%" class="Data"><div align="center"><?php print $preheat_temp ; ?> </div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Welding Progreesion</td>
    <td class="Data"><div align="center"><?php print $welding_progression ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data">Interpass Temp.(Max.)(°F)</td>
    <td class="Data"><div align="center"><?php print $interpass_temp ; ?> </div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Position of Fillet</td>
    <td class="Data"><div align="center"><?php print $position_fillet ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data">Preheat Maintenance</td>
    <td class="Data"><div align="center"><?php print $preheat_maintenance ; ?> </div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td class="Data"><div align="center"><?php print $position_other ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td class="Data"><div align="center"><?php print $preheat_other ; ?> </div></td>
  </tr>
</table><br>
<div class="BlockHeading">
  <div align="left">POSTWELD HEAT TREATMENT (QW-407)..................................................................................................................GAS (QW-408)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="14%" bgcolor="#f2f2f2" class="Data">Temp. Range(°F)</td>
    <td colspan="3" class="Data"><div align="center"><?php print $pwht_temp_range ; ?> </div></td>
    <td width="18%" bgcolor="#f2f2f2" class="Data"><div align="center">Type</div></td>
    <td width="18%" bgcolor="#f2f2f2" class="Data"><div align="center">Gas Mixture</div></td>
    <td width="14%" bgcolor="#f2f2f2" class="Data"><div align="center">Flow Rate (CFH)</div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Time Range (hrs)</td>
    <td colspan="3" class="Data"><div align="center"><?php print $pwht_time_range ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data">Shielding Gas</td>
    <td class="Data"><div align="center"><?php print $shieldgas_mixture ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $shieldgas_flow_rate ; ?> </div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Heating Rate(°F/hr)</td>
    <td width="7%" class="Data"><div align="center"><?php print $pwht_heating_rate ; ?> </div></td>
    <td width="5%" bgcolor="#f2f2f2" class="Data"><div align="center">Type</div></td>
    <td class="Data"><div align="center"><?php print $pwht_heating_type ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data">Trailing Gas</td>
    <td class="Data"><div align="center"><?php print $trailinggas_mixture ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $trailinggas_flow_rate ; ?> </div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Cooling Rate(°F/hr)</td>
    <td class="Data"><div align="center"><?php print $pwht_cooling_rate ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data"><div align="center">Type</div></td>
    <td class="Data"><div align="center"><?php print $pwht_cooling_type ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data">Backing Gas</td>
    <td class="Data"><div align="center"><?php print $backinggas_mixture ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $backinggas_flow_rate ; ?> </div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td colspan="3" class="Data"><div align="center"><?php print $pwht_other ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td class="Data"><div align="center"><?php print $gas_other_mixture ; ?> </div></td>
    <td class="Data"><div align="center"><?php print $gas_other_flow_rate ; ?> </div></td>
  </tr>
</table><br>
<div class="BlockHeading">
  <div align="left">ELECTRICAL CHARACTERISTICS (QW-409)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="14%" bgcolor="#f2f2f2" class="Data">Current Polarity</td>
    <td class="Data"><div align="center"><?php print $current_polarity ; ?> </div></td>
    <td width="18%" bgcolor="#f2f2f2" class="Data">Tungsten Type</td>
    <td width="18%" class="Data"><div align="center"><?php print $tungsten_type ; ?> </div></td>
    <td width="8%" bgcolor="#f2f2f2" class="Data"><div align="center">Size (in.)</div></td>
    <td width="6%" class="Data"><div align="center"><?php print $tungsten_size ; ?> </div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Ampere Range</td>
    <td class="Data"><div align="center"><?php print $ampere_range ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data">Travel Speed (in./min)</td>
    <td colspan="3" class="Data"><div align="center"><?php print $travel_speed ; ?> </div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Voltage Range</td>
    <td class="Data"><div align="center"><?php print $voltage_range ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data">Heat input(Max.) (kJ/in.)</td>
    <td colspan="3" class="Data"><div align="center"><?php print $heat_input_max ; ?> </div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Pulsing Current</td>
    <td class="Data"><div align="center"><?php print $pulsing_current ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data">Wire Feed Type</td>
    <td colspan="3" class="Data"><div align="center"><?php print $wire_feed_type ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td class="Data"><div align="center"><?php print $electrical_other ; ?> </div></td>
    <td bgcolor="#f2f2f2" class="Data">Wire Feed Speed (in./min)</td>
    <td colspan="3" class="Data"><div align="center"><?php print $wire_feed_speed ; ?></div></td>
  </tr>
</table>
<p><br>
  <br>
  <br>
  <br>
  <br>
</p>
<p><br>
  <br>
</p>
<table width=100% cellspacing=0 cellpadding=2 frame="hsides" rules="none" bordercolor="Black" style="border-width:1pt;">
			<tr>
				<td width=30% height="14" align="left"><div class="Footer">www.weldata.com</div></td>
			  <td width=70% align="right"><div class="Footer">(c)Copyright 2015 WELDATA SOFTWARE. All rights reserved worldwide</div></td>
		  </tr>
		</table>
<div style="page-break-after:always"></div>
<table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
  <tr>
    <td width="15%" rowspan="3"><div align="center"><img src="logo.jpg" width="76" height="68"  alt=""/></div></td>
    <td width="85%"> <div align="center" class="CName">J&amp;A MECHANICAL CONTRACTORS INC.</div></td>
  </tr>
  <tr>
    <td height="21"><div align="center" class="CAddress"><span itemprop="streetAddress">5814 State Route 104</span>,<span itemprop="addressLocality">Oswego</span>,<span itemprop="addressRegion">NY</span> <span itemprop="postalCode">13126</span>,USA<br>
    </div></td>
  </tr>
  <tr>
    <td height="42"><div align="center" class="Title"><?php print $qualified_to ; ?> - PQR - Page 2</div></td>
  </tr>
</table><br>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr class="Data">
    <td width="8%" bgcolor="#f2f2f2" class="Data">PQR  No.</td>
    <td width="12%" class="Data"><div align="center"><?php print $pqr_number ; ?></div></td>
    <td width="8%" bgcolor="#f2f2f2" class="Data">Rev. No.</td>
    <td width="3%" class="Data"><div align="center"><?php print $pqr_revision_number ; ?></div></td>
    <td width="10%" bgcolor="#f2f2f2" class="Data">Qualified To</td>
    <td width="34%" class="Data"><div align="center"><?php print $qualified_to ; ?></div></td>
    <td width="4%" bgcolor="#f2f2f2" class="Data">Date</td>
    <td width="21%" class="Data"><div align="center"><?php print $date ; ?></div></td>
  </tr>
</table><br>
<div class="BlockHeading">
  <div align="left">TECHNIQUE (QW-4010)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="21%" bgcolor="#f2f2f2" class="Data">String or Weave</td>
    <td width="29%" class="Data"><div align="center"><?php print $string_weave ; ?></div></td>
    <td width="22%" bgcolor="#f2f2f2" class="Data">Multi/Single Pass Per Side</td>
    <td width="28%" class="Data"><div align="center"><?php print $multi_single_pass ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Orifice/Gas Cup Size</td>
    <td class="Data"><div align="center"><?php print $orifice_gas_cup_size ; ?></div></td>
    <td bgcolor="#f2f2f2" class="Data">Multiple/Single Electrode</td>
    <td class="Data"><div align="center"><?php print $multi_single_electrode ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Initial &amp; Interpass Cleaning</td>
    <td class="Data"><div align="center"><?php print $initial_interpass_cleaning ; ?></div></td>
    <td bgcolor="#f2f2f2" class="Data">Peening</td>
    <td class="Data"><div align="center"><?php print $peening ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Methode of Back Gouging</td>
    <td class="Data"><div align="center"><?php print $methode_back_gouging ; ?></div></td>
    <td bgcolor="#f2f2f2" class="Data">Surface Preparation </td>
    <td class="Data"><div align="center"><?php print $surface_cleaning ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Oscillation</td>
    <td class="Data"><div align="center"><?php print $oscillation ; ?></div></td>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td class="Data"><div align="center"><?php print $technique_other ; ?></div></td>
  </tr>
</table><br>
<div class="BlockHeading">
  <div align="left">JOINT  (QW-402) Typical Joints(s) See actual production drawing and engineering specifications for details.</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td height="10" colspan="2" bgcolor="#f2f2f2" class="Data"><div align="center"><strong>JOINT DESIGN</strong></div></td>
    <td bgcolor="#f2f2f2" class="Data"><div align="center"><strong>WELDING SEQUENCE</strong></div></td>
  </tr>
  <tr>
    <td height="300" colspan="2"><div align="center"><?php print $joint_image1 ; ?></div></td>
    <td width="50%"><div align="center"><?php print $joint_image2 ; ?></div></td>
  </tr>
</table>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="18%" bgcolor="#f2f2f2" class="Data">Joint Design</td>
    <td width="37%" class="Data"><div align="center"><?php print $joint_design_name ; ?></div></td>
    <td width="17%" bgcolor="#f2f2f2" class="Data">Root Spacing (in.)</td>
    <td width="28%" class="Data"><div align="center"><?php print $joint_root_spacing ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Backing</td>
    <td class="Data"><div align="center"><?php print $joint_backing ; ?></div></td>
    <td bgcolor="#f2f2f2" class="Data">Backing Material</td>
    <td class="Data"><div align="center"><?php print $backing_material ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Retainers</td>
    <td colspan="3" class="Data"><div align="center"><?php print $retainers ; ?></div></td>
  </tr>
  <tr>
    <td height="10" bgcolor="#f2f2f2" class="Data">Other</td>
    <td colspan="3" class="Data"><div align="center"><?php print $joint_other ; ?></div></td>
  </tr>
</table><br>
<div class="BlockHeading">
  <div align="left">NOTE</div>
</div>
<table width="100%" height="181" border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td class="Data"><p><?php print $note ; ?>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<p><br>
</p>
<p><br>
  
</p>
<table width=100% cellspacing=0 cellpadding=2 frame="hsides" rules="none" bordercolor="Black" style="border-width:1pt;">
			<tr>
				<td width=30% height="14" align="left"><div class="Footer">www.weldata.com</div></td>
			  <td width=70% align="right"><div class="Footer">(c)Copyright 2015 WELDATA SOFTWARE. All rights reserved worldwide</div></td>
		  </tr>
</table>
<div style="page-break-after:always"></div>
<table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
  <tr>
    <td width="15%" rowspan="3"><div align="center"><img src="logo.jpg" width="76" height="68"  alt=""/></div></td>
    <td width="85%"> <div align="center" class="CName">J&amp;A MECHANICAL CONTRACTORS INC.</div></td>
  </tr>
  <tr>
    <td height="21"><div align="center" class="CAddress"><span itemprop="streetAddress">5814 State Route 104</span>,<span itemprop="addressLocality">Oswego</span>,<span itemprop="addressRegion">NY</span> <span itemprop="postalCode">13126</span>,USA<br>
    </div></td>
  </tr>
  <tr>
    <td height="42"><div align="center" class="Title"><?php print $qualified_to ; ?> - PQR - Page 3</div></td>
  </tr>
</table>
<br>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr class="Data">
    <td width="8%" bgcolor="#f2f2f2" class="Data">PQR  No.</td>
    <td width="12%" class="Data"><div align="center"><?php print $pqr_number ; ?></div></td>
    <td width="8%" bgcolor="#f2f2f2" class="Data">Rev. No.</td>
    <td width="3%" class="Data"><div align="center"><?php print $pqr_revision_number ; ?></div></td>
    <td width="10%" bgcolor="#f2f2f2" class="Data">Qualified To</td>
    <td width="34%" class="Data"><div align="center"><?php print $qualified_to ; ?></div></td>
    <td width="4%" bgcolor="#f2f2f2" class="Data">Date</td>
    <td width="21%" class="Data"><div align="center"><?php print $date ; ?></div></td>
  </tr>
</table>
<br>
<div class="BlockHeading">
  <div align="left">TENSILE TESTS (QW-150)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="11%" height="10" bgcolor="#f2f2f2" class="Data"><div align="center">Specimen No.</div></td>
    <td width="9%" height="10" bgcolor="#f2f2f2" class="Data"><div align="center">Width (in.)</div></td>
    <td width="12%" height="10" bgcolor="#f2f2f2" class="Data"><div align="center">Thickness (in.)</div></td>
    <td width="10%" bgcolor="#f2f2f2" class="Data"><div align="center">Area (in.<sup>2</sup>)</div></td>
    <td width="17%" bgcolor="#f2f2f2" class="Data"><div align="center">Ultimate Total Load (lb)</div></td>
    <td width="19%" bgcolor="#f2f2f2" class="Data"><div align="center">Ultimate Unit Stress (psi)</div></td>
    <td width="22%" bgcolor="#f2f2f2" class="Data"><div align="center">Type of Failure and Location</div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"><?php print $tensile_test_specimen_no_array ; ?></div></td>
    <td height="10" class="Data"><div align="center"><?php print $tensile_test_width_array ; ?></div></td>
    <td height="10" class="Data"><div align="center"><?php print $tensile_test_thickness_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $tensile_test_area_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $tensile_test_ultimate_total_load_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $tensile_test_ultimate_unit_stress_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $tensile_test_type_of_failure_array ; ?></div></td>
  </tr>
</table>
<table width="100%" border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td width="11%" height="10" bgcolor="#f2f2f2" class="Data"><div align="left">Comments</div></td>
    <td width="89%" height="10" colspan="6" class="Data"><div align="center"><?php print $tensile_test_comments ; ?></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div></td>
  </tr>
</table>
<br>
<div class="BlockHeading">
  <div align="left">GUIDED-BEND TESTS (QW-160)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="12" height="10" bgcolor="#f2f2f2" class="Data"><div align="center">Type of Test &amp; Figure Number</div></td>
    <td width="15%" bgcolor="#f2f2f2" class="Data"><div align="center">Acceptance criteria</div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data"><div align="center">Results</div></td>
    <td width="28%" bgcolor="#f2f2f2" class="Data"><div align="center">Comments</div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"><?php print $guided_bend_test_type_of_test_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $guided_bend_test_acceptance_criteria_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $guided_bend_test_results_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $guided_bend_test_comments_array ; ?></div></td>
  </tr>
</table>
<table width="100%" border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td width="12%" height="10" bgcolor="#f2f2f2" class="Data"><div align="left">Other</div></td>
    <td colspan="4" class="Data"><div align="center"><?php print $guided_bend_test_other ; ?></div>
      <div align="center"></div>
      <div align="center"></div></td>
  </tr>
</table>
<br><div class="BlockHeading">
  <div align="left">TOUGHNESS  TESTS (QW-170)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="12%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Specimen No.</div>      <div align="center"></div></td>
    <td width="10%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Notch Location</div>      <div align="center"></div></td>
    <td width="10%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Notch Type</div>      <div align="center"></div></td>
    <td width="11%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Specimen Size  (in.x in.)</div>      <div align="center"></div></td>
    <td width="10%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Test Temp. (°F)</div>      <div align="center"></div></td>
    <td height="10" colspan="3" bgcolor="#f2f2f2" class="Data"><div align="center">Impact Values</div>      <div align="center"></div>      <div align="center"></div></td>
    <td width="21%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Drop Weight Break</div>      <div align="center"></div></td>
  </tr>
  <tr>
    <td width="9%" height="10" bgcolor="#f2f2f2" class="Data"><div align="center">ft lb</div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data"><div align="center">% Shear</div></td>
    <td width="8%" bgcolor="#f2f2f2" class="Data"><div align="center">Mils</div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"><?php print $toughness_test_specimen_no_array ; ?></div></td>
    <td height="10" class="Data"><div align="center"><?php print $toughness_test_notch_location_array ; ?></div></td>
    <td height="10" class="Data"><div align="center"><?php print $toughness_test_notch_type_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $toughness_test_specimen_size_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $toughness_test_temperature_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $toughness_test_impact_value_ftlb_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $toughness_test_impact_value_shear_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $toughness_test_impact_value_mils_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $toughness_test_drop_weight_break_array ; ?></div></td>
  </tr>
</table>
<table width="100%" border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td width="12%" height="10" bgcolor="#f2f2f2" class="Data"><div align="left">Comments</div></td>
    <td width="88%" height="10" colspan="8" class="Data"><div align="center"><?php print $toughness_test_comments ; ?></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div></td>
  </tr>
</table>
<br><div class="BlockHeading">
  <div align="left">FILLET-WELD TESTS (QW-180)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="48%" height="10" bgcolor="#f2f2f2" class="Data"><div align="center">Type of Test </div></td>
    <td width="15%" bgcolor="#f2f2f2" class="Data"><div align="center">Acceptance criteria</div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data"><div align="center">Result</div></td>
    <td width="28%" bgcolor="#f2f2f2" class="Data"><div align="center">Comments</div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"><?php print $fillet_weld_test_type_of_test_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $fillet_weld_test_acceptance_criteria_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $fillet_weld_test_results_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $fillet_weld_test_comments_array ; ?></div></td>
  </tr>
</table>
<table width="100%" border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td width="20%" height="10" bgcolor="#f2f2f2" class="Data"><div align="center">
      <div align="left">Penetration into Parent Metal</div>
    </div></td>
    <td width="28%" class="Data"><div align="center"><?php print $fillet_weld_test_penetration_into_parent_metal ; ?></div></td>
    <td width="15%" bgcolor="#f2f2f2" class="Data">Macro Results</td>
    <td width="37%" colspan="2" class="Data"><div align="center"><?php print $fillet_weld_test_macro_results ; ?></div></td>
  </tr>
  <tr>
    <td height="10" bgcolor="#f2f2f2" class="Data">Other</td>
    <td colspan="4" class="Data"><div align="center"><?php print $fillet_weld_test_other ; ?></div></td>
  </tr>
</table>
<br>
<div class="BlockHeading">
  <div align="left">OTHER TESTS </div>
</div>
<table width="100%" border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td width="20" height="10" bgcolor="#f2f2f2" class="Data"><div align="center">Type of Test</div></td>
    <td width="15%" bgcolor="#f2f2f2" class="Data"><div align="center">Acceptance criteria</div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data"><div align="center">Result</div></td>
    <td width="28%" bgcolor="#f2f2f2" class="Data"><div align="center">Comments</div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"><?php print $other_test_type_of_test_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $other_test_acceptance_criteria_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $other_test_results_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $other_test_comments_array ; ?></div></td>
  </tr>
</table>
<table width="100%" border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td width="20%" height="10" bgcolor="#f2f2f2" class="Data"><div align="left">Deposition Analysis</div></td>
    <td colspan="4" class="Data"><div align="center"><?php print $other_test_deposition_analysis ; ?></div>
      <div align="center"></div>
      <div align="center"></div></td>
  </tr>
  <tr>
    <td height="10" bgcolor="#f2f2f2" class="Data"><div align="left">Other</div></td>
    <td height="10" colspan="4" class="Data"><div align="center"><?php print $other_test_other ; ?></div>
      <div align="center"></div>
      <div align="center"></div></td>
  </tr>
</table>
<br>
<div class="BlockHeading">
  <div align="left">CERTIFICATION</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="25%" height="10" bgcolor="#f2f2f2" class="Data"><div align="center">Welders Name</div></td>
    <td width="11%" bgcolor="#f2f2f2" class="Data"><div align="center">ID No.</div></td>
    <td width="14%" bgcolor="#f2f2f2" class="Data"><div align="center">Stamp No.</div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"><?php print $certification_welder_name_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $certification_welder_id_array ; ?></div></td>
    <td class="Data"><div align="center"><?php print $certification_welder_stamp_array ; ?></div></td>
  </tr>
</table>
<table width="100%" border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td width="28%" bgcolor="#f2f2f2" class="Data">Mechanical Testing By</td>
    <td width="72%" class="Data"><div align="center"><?php print $certification_mechanical_testing_by ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Laboratory Test Number</td>
    <td class="Data"><div align="center"><?php print $certification_laboratory_test_number ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Test File Number</td>
    <td class="Data"><div align="center"><?php print $certification_test_file_number ; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Test Conducted By</td>
    <td class="Data"><div align="center"><?php print $certification_test_conducted_by ; ?></div></td>
  </tr>
</table>
<br>
</p>
<div class="BlockHeading">
  <div align="left">
    <div class="BlockHeading">
      <div align="left">
        <div class="BlockHeading">
          <div align="left">We certify that the statements in this record are correct and that the test welds were prepared, welded, and tested in accordance with the requirements of Section IX of the ASME  Code.</div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td colspan="2" bgcolor="#f2f2f2" class="Data"><strong>MANUFACTURER OR CONTRACTOR</strong></td>
    <td colspan="2" bgcolor="#f2f2f2" class="Data"><strong>CERTIFIED  BY</strong></td>
  </tr>
  <tr>
    <td width="15%" bgcolor="#f2f2f2" class="Data">Name</td>
    <td width="18%" bgcolor="#f2f2f2" class="Data">Signature</td>
    <td width="14%" bgcolor="#f2f2f2" class="Data">Name</td>
    <td width="19%" bgcolor="#f2f2f2" class="Data">Signature</td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"><?php print $manufacturer_name ; ?></div></td>
    <td rowspan="3" class="Data">&nbsp;</td>
    <td height="10" class="Data"><div align="center"><?php print $certified_by_name ; ?></div></td>
    <td rowspan="3" class="Data">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Date</td>
    <td bgcolor="#f2f2f2" class="Data">Date</td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"><?php print $manufacturer_date ; ?></div></td>
    <td height="10" class="Data"><div align="center"><?php print $certified_by_date ; ?></div></td>
  </tr>
</table>
<br>
<footer class="Data">
  <table width=100% cellspacing=0 cellpadding=2 frame="hsides" rules="none" bordercolor="Black" style="border-width:1pt;">
    <tr>
      <td width=30% height="14" align="left"><div class="Footer">www.weldata.com</div></td>
      <td width=70% align="right"><div class="Footer">(c)Copyright 2015 WELDATA SOFTWARE. All rights reserved worldwide</div></td>
    </tr>
  </table>
</footer>

</body>
</html>
