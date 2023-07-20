 </main>
 <footer class="py-4 bg-light mt-auto">
     <div class="container-fluid px-4">
         <div class="d-flex align-items-center justify-content-between small">
             <div class="text-muted">Copyright &copy; Your Website 2023</div>
             <div>
                 <a href="#">Privacy Policy</a>
                 &middot;
                 <a href="#">Terms &amp; Conditions</a>
             </div>
         </div>
     </div>
 </footer>
 </div>
 </div>
 <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
 <script src="<?= base_url('src/'); ?>js/select2.full.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="<?= base_url('scr/') ?>js/scripts.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
 <script src="<?= base_url('src/') ?>js/datatables-simple-demo.js"></script>
 <script src="<?= base_url('src/') ?>js/tinymce/tinymce.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

 <script>
     $(document).ready(function() {
         // Fungsi untuk mengupdate tanggal dan waktu secara real-time
         function updateDateTime() {
             var currentTime = new Date();

             var year = currentTime.getFullYear();
             var month = currentTime.getMonth() + 1;
             var day = currentTime.getDate();
             var hours = currentTime.getHours();
             var minutes = currentTime.getMinutes();
             var seconds = currentTime.getSeconds();

             var formattedTime = year + '-' + addLeadingZero(month) + '-' + addLeadingZero(day) + ' ' +
                 addLeadingZero(hours) + ':' + addLeadingZero(minutes) + ':' + addLeadingZero(seconds);

             $('#time').val(formattedTime);
         }

         // Fungsi untuk menambahkan nol di depan angka jika angka < 10
         function addLeadingZero(number) {
             return (number < 10 ? '0' : '') + number;
         }

         // Memperbarui tanggal dan waktu setiap detik
         setInterval(updateDateTime, 1000);
     });

     jQuery(document).ready(function($) {
         $('#select').select2({
             theme: 'bootstrap-5',
             placeholder: "pilih Data"
         });
         $('#select1').select2({
             theme: 'bootstrap-5',
             placeholder: "pilih Data"
         });
         $('#select2').select2({
             theme: 'bootstrap-5',
             placeholder: "pilih Data"
         });

     });
 </script>

 </body>

 </html>