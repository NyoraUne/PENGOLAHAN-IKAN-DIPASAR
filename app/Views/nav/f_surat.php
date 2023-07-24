   <!-- ini tanda tangan !?.. -->
   <?php
    $tgl = date('d');
    $bln = date('F');
    $thn = date('Y');
    ?>
   <br>
   <div class="row">
       <div class="col-6">

       </div>
       <div class="col text-center">
           <div class="float-end">
               <table>
                   <tr>
                       <td>
                           <?php echo "Pemerintah kabupaten Tapin, $tgl $bln $thn" ?>
                           <br>
                           Kepala Pemerintah Kabupaten Tapin <br>
                           <img id="barcode" style="height: 100px; width: 100px;" /> <br>
                           H.Jayansyahs.Pt

                       </td>
                   </tr>
               </table>

           </div>
       </div>
   </div>
   <script>
       var currentLink = window.location.href;
       // Ambil data dari halaman web Anda, misalnya dengan menggunakan JavaScript
       var barcodeData = "A_Barcode";
       // Atur atribut src dari elemen gambar untuk menampilkan barcode
       document.getElementById("barcode").src = "https://barcodeapi.org/api/qr/" + currentLink;
   </script>
   </body>

   </html>