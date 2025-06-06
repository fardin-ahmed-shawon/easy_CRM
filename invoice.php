<?php
// Start the session
session_start();

// db connection


?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <title>Invoice</title>

    <!---->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body data-new-gr-c-s-check-loaded="14.1238.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <div id="printArea" class="container pt-3">
        <div class="col d-flex justify-content-center ">
            <div class="container bootdey">
                <div class="row justify-content-center invoice row-printable">
                    <div class="col-md-10X" style="margin: 0 auto;
    width: 100%;
    max-width: 900px;">
                        <!-- col-lg-12 start here -->
                        <div class="panel panel-default plain" style="margin-top: 24px;" id="dash_0">
                            <!-- Start .panel -->
                            
                            <div class="panel-body p30">
   <div class="row">
      <!-- Start .row -->
      <div class="col-lg-6">
         <!-- col-lg-6 start here -->
         <div class="invoice-logo"><img width="200" src="assets/logo.png" alt="Invoice logo"></div>
      </div>
      <!-- col-lg-6 end here -->
      <div class="col-lg-6">
         <!-- col-lg-6 start here -->
         <div class="invoice-from">
            <ul class="list-unstyled text-right">
               <li><b>Easy Tech Solutions</b></li>
               <li style="white-space: pre-line;">Level-1, ADDL Tower, Dhanmondi #27,(Opposite of IBN Sina Hospital)
Shankar Bus Stand, Dhaka 1209
+8801580-741616</li>
              <!-- <li>Shonkor Bus Stand, Dhaka 1209</li>
               <li>+8801580842027</li>-->
            </ul>
         </div>
      </div>
      <!-- col-lg-6 end here -->
      <div class="col-lg-12">
         <!-- col-lg-12 start here -->
         <div class="invoice-details mt25">
            <div class="well">
               <ul class="list-unstyled mb0">
                  <li><strong>Invoice</strong> #26305</li>
                  <li><strong>Invoice Date: </strong>2025-06-06 06:37:38</li>
                  <li><strong>Status:</strong> 
                     
                                                                  
                      <span class="label label-success bg-success text-white">FULLPAID</span>
                                                                 
                  </li>
               </ul>
            </div>
         </div>
         <div class="invoice-to mt25">
            <ul class="list-unstyled">
               <li><strong>Invoiced To</strong></li>
               <li><strong>Test Client</strong></li>
               <li>01944667441</li>
               <li>test@gmail.com</li>
            </ul>
         </div>
         <div class="invoice-items">
            <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th class="per70 text-center">Description</th>
                        <th class="per5 text-center">Qty</th>
                        <th class="per5 text-center">Method</th>
                        <th class="per25 text-center">Total</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="text-center">Test Title</td>
                        <td class="text-center ">1</td>
                        <td class="text-center"></td>
                        <th class="text-center">৳ 10000.00 Tk</th>
                     </tr>
            
                    
                        <tr>
                        <td></td>
                        <td></td>
                        <td class="text-center">Cash</td>
                        <td class="text-center">৳  5000.00 Tk</td>
                     </tr>
                        
                        
                        <tr>
                        <td></td>
                        <td></td>
                        <td class="text-center">Cash</td>
                        <td class="text-center">৳  5000.00 Tk</td>
                     </tr>
                        
                     
                  </tbody>
                  <tfoot>
                     <tr>
                        <th></th>
                        <th colspan="2" class="text-right">Total Unpaid:</th>
                        <th class="text-center">৳   0 Tk</th>
                     </tr>
                     <tr>
                        <th></th>
                        <th colspan="2" class="text-right">Total Paid:</th>
                        <th class="text-center">৳ 10000.00 Tk</th>
                     </tr>
                  </tfoot>
               </table>
            </div>
         </div>
         <div class="invoice-footer mt25 row">
            <div class="invoice-logo col-md-4">
               <img width="300" src="https://webexinternational.com/wp-content/uploads/2020/03/we-accept-payment.png" alt="Invoice logo">
            </div>
            <div class="col-md-6 ">
               <p style="padding-top:30px">This invoice auto generated by our software so no need signature.</p>
            </div>
         </div>
      </div>
      <!-- col-lg-12 end here -->
   </div>
   <!-- End .row -->
</div>
                        </div>
                        <!-- End .panel -->
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
                </div>
            </div>
        </div>

<div style="position: absolute; top: 0px; left: 0px; margin: 0px; padding: 0px;"></div></body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

<div class="container" style="text-align: center; margin-top: 20px;">
    <h3>Print or Download Invoice</h3>
    <p>Click the button below to download or print the invoice as a PDF.</p>
	<button style="background: #000; color: #fff;" onclick="printPDF()" class="btn btn-dark">Download & Print <span class="mdi mdi-tray-arrow-down"></span></button>
</div>

<script>
    async function printPDF() {
        const { jsPDF } = window.jspdf;
        const pdf = new jsPDF('p', 'mm', 'a4');

        // Select the area to print
        const element = document.getElementById("printArea");

        // Convert the HTML area to canvas
        const canvas = await html2canvas(element, { scale: 2 });
        const imgData = canvas.toDataURL("image/png");

        // Add the image to the PDF
        const imgWidth = 190; // Adjust for A4 width
        const imgHeight = (canvas.height * imgWidth) / canvas.width;
        pdf.addImage(imgData, 'PNG', 10, 10, imgWidth, imgHeight);

        // Save the PDF
        pdf.save("invoice.pdf");
    }
</script>

</html>