<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 12,
	'default_font' => 'Hind Siliguri'
]);

$today = date(" j / M / Y ");
$dm= date("F / Y");
$date=date("W");
$dueDate = date("j / M / Y ",strtotime("+30 days"));
date_default_timezone_set("Asia/Bangkok");

$nokhtml = '
<style>
body {
	font-family: Hind Siliguri;
	font-size: 14px;
	padding :0; margin: 0;
}

.col1, .col2, .col3, .col4, {
	float:left;
	width:30%;
}
.col5 {
    width:60%;
}

h1, h2, h3, h4, h5, h6 {
padding: 0;
margin : 0;
}

.floatleft{
	float:left;
}

.floatright{
	float:right;
}
table {
	font-family: Hind Siliguri;
	border-collapse: collapse;
	width: 100%;
    
  }
  
th ,td{
    border-bottom: 2px dotted #f5f5f5;
    
    text-align: center;
	padding: 8px;
  }
  
  .items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #F21d55;
   
}
.items td.totals {
    background-color: #fff;

}

.detail {
    background-color: #ffffff;
    border: 2px solid #ff2266;
    
}
  </style>

<body>

<div class="row">

<div class="col1 ">
<h4>SRL Balinder Walia Workstation<br />TAvenue de Roodebeeck 78, 1030<br />BRUXELLES ( SCHAERBEEK )<br />workstationsols@gmail.com<br />Tel: 049 245 67465</h4>
</div>
<div class="col2 floatright">
<img src="img/worklogosmall2.png" width="240" />
</div>
</div>




  <htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row">

<div class="col1" style="padding-top: 15px;">
<img src="img/iv.5.png" width="100" />
<h3>INVOICE TO :</h3>
<div class="name"><b>NAME :</b> Customer ..... </div>

<div class="email"><b>Email : </b> customer@gmail.com</div>
</div>

<div class="col2" style="text-align: right; padding-top: 15px;">
<h2>INVOICE NO : </h2>
<h2>DATE : </h2>
<h2>DUE DATE : </h2>
<h2>TOTAL : </h2>
</div>

<div class="col3 floatright" style="padding-top: 15px;">
<div class="invoice no"><h2> 123456</h2></div>
<div class="date"><h2> '.$today.'</h2></div>
<div class="due date"><h2> '.$dueDate.'</h2></div>
<h2>&#163;423.50</h2>
</div>

</div>


<br />
<!-- INVOICE ITEMS HERE -->



<table class="items" >
<thead>
<tr style="background-color: #f5f5f5;">
<td width="10%" style="color: #ff2266;"><b>SERVICE</b></td>
<td width="40%" style="color: #ff2266;"><b>DESCRIPTION</b></td>
<td width="10%" style="color: #ff2266;"><b>VAT</b></td>
<td width="10%" style="color: #ff2266;"><b>QTY</b></td>
<td width="15%" style="color: #ff2266;"><b>RATES</b></td>
<td width="15%" style="color: #ff2266;"><b>AMOUNT</b></td>
</tr>
</thead>

<tbody>
<tr>
  <td>Sale</td>
  <td>New Website</td>
  <td>21.00%</td>
  <td>1</td>
  <td>&#163;350</td>
  <td>&#163;350</td>
</tr>


<tr>
<td class="blanktotal" colspan="2" rowspan="5">
</td>
</tr>

<tr>
<td class="totals">SUBTOTAL</td>
<td></td>
<td></td>
<td class="totals">&#163;350</td>

</tr>

<tr>
<td class="totals">VAT TOTAL</td>
<td></td>
<td></td>
<td class="totals">&#163;73.50</td>

</tr>

<tr>
<td class="totals">TOTAL</td>
<td></td>
<td></td>
<td class="totals">&#163;423.50</td>

</tr>

<tr>
<td class="totals">PAYMENT</td>
<td></td>
<td></td>
<td class="totals">&#163;423.50</td>
</tr>
</tbody>

<tfoot>
<tr style="background-color: #f5f5f5;">
<td width="20%" style="color: #ff2266;"><b>VAT SUMMARY</b></td>
<td width="20%" style="color: #ff2266;"><b>RATES</b></td>
<td width="20%" style="color: #ff2266;"><b></b></td>
<td width="15%" style="color: #ff2266;"><b>VAT</b></td>
<td width="10%" style="color: #ff2266;"><b></b></td>
<td width="15%" style="color: #ff2266;"><b>NET</b></td>
</tr>

<tr>
<td width="20%" style="color: #ff2266;"><b></b></td>
<td width="20%" style="color: #ff2266;"><b>&#163;350</b></td>
<td width="20%" style="color: #ff2266e;"><b></b></td>
<td width="15%" style="color: #ff2266;"><b>21.00%</b></td>
<td width="10%" style="color: #ff2266;"><b></b></td>
<td width="15%" style="color: #ff2266;"><b>&#163;423.50</b></td>
</tr>
</tfoot>
</table>

<!-- END ITEMS HERE -->

';

$termsHTML = '
<div class="tenthmatrixlogo">
<ximg src="/Volumes/GoogleDrive/.shortcut-targets-by-id/1-9_ANNWeOpmVIwN01qqEiImCs6RH8tks/WorkstationSolsGoogleDrive/Shared_TenthMatrix_CRM_DEV/Tenthmatrixv18/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/mysignature.png" width="150" />
</div>


<br />

<p><b>Terms :</b> Please note that our payment terms for this Invoice are NET 15. Interest will be charged on all Invoice that are not paid on time.</p>

<h3>Please make payment by electronic transfer to:</h3>


<div class="row">
<div class="col5">
<table class="detail">
<tr>
<td >Bank name :</td>
<td ><img src="img/ing.png" width="20"  />ING BELGIUM</td>
</tr>

<tr>
<td >Account name :</td>
<td >Workstation SRL</td>
</tr>

<tr>
<td>Country code iso :</td>
<td>BEL</td>
</tr>

<tr>
<td>IBAN :</td>
<td>BE50 0015 4190 4118</td>
</tr>

<tr>
<td>BIC code / SWIFT Code :</td>
<td>GEBABEBB</td>
</tr>
</table>
</div>
</div>
<p>Tenmatrix Ltd UK.also trading as Tenmatrix,is a registered company number:11641870. VAT number: GB 361 746 193. Registered in England and Wales. Registered office address: The Coach House,77A Marlowes, Hemel Hempstead, Herts, United Kingdom,HP1 1LF.</p>

<p><b>Note:</b>  This Invoice was generated by  Workstation CRM and Invoicing system automatically.</p>
<div class="date">Date: '.$today.'</div>
<div class="time"> Time: '. date("h:i:sa").'</div>
</body>
  ';
//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>