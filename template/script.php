  <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url() ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Ekko Lightbox -->
  <script src="<?= base_url() ?>/assets/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

  <!-- DataTables -->
  <script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?= base_url() ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

  <!-- SweetAlert2 (TOAST) -->
  <script src="<?= base_url() ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Select2 -->
  <script src="<?= base_url() ?>/assets/plugins/select2/js/select2.full.min.js"></script>
  <!-- SweetAlert -->
  <script src="<?= base_url() ?>/assets/alert/sweetalert.min.js"></script>
  <script src="<?= base_url() ?>/assets/alert/qunit-1.18.0.js"></script>

  <!-- file upload -->
  <script src="<?= base_url() ?>/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>

  <!-- bs-custom-file-input -->
  <script src="<?= base_url() ?>/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

  <!-- overlayScrollbars -->
  <script src="<?= base_url() ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

  <!-- JQUERY MASK -->
  <script src="<?= base_url() ?>/assets/dist/js/jquery.mask.js"></script>

  <!-- JQUERY MEDIA -->
  <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.media.js"></script>

  <!-- DROPIFY FILE UPLOAD -->
  <script src="<?= base_url() ?>/assets/dropify/dist/js/dropify.min.js"></script>

  <!-- ChartJS -->
  <script src="<?= base_url() ?>/assets/plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>/assets/dist/js/adminlte.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>/assets/dist/js/demo.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url() ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>

  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });

      setTimeout(function() {
        $(".alertinfo").slideUp();
      }, 2500);

      bsCustomFileInput.init();

      // Combobox select
      $('.select2').select2();

      // FORMAT RUPIAH
      $(".rupiah").mask("000.000.000.000", {
        reverse: true
      });

      // Summernote
      $('.textarea').summernote()


      // EVENT ON ENTER IN TEXT AREA
      $('.alamat').on('keydown', function(e) {
        if (e.keyCode == 13 && !e.shiftKey) {
          e.preventDefault();
          return false;
        }
      });

    }); //END DOM READY FUNCTION //



    // FORMAT ANGKA SAJA
    function Angkasaja(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }

    // NOTIF SEBELUM LOGOUT
    $('.alert-logout').on('click', function() {
      var getLink = $(this).attr('href');
      swal({
          title: 'Log Out ?',
          text: 'Anda akan keluar dari sistem, lanjutkan ?',
          type: "warning",
          html: true,
          confirmButtonColor: '#FF0000',
          showCancelButton: true,
        },
        function() {
          window.location.href = getLink
        });
      return false;
    });

    // NOTIF SEBELUM HAPUS
    $('.alert-hapus').on('click', function() {
      var getLink = $(this).attr('href');
      var idname = $(this).attr('data-id');
      swal({
          title: 'Hapus Data ?',
          text: 'Data "' + idname + '" Akan Dihapus, Lanjutkan ?',
          type: "warning",
          html: true,
          confirmButtonColor: '#FF0000',
          showCancelButton: true,
        },
        function() {
          window.location.href = getLink
        });
      return false;
    });


    // NOTIF SEBELUM UPDATE STATUS MENJADI SELESAI
    $('.alert-status').on('click', function() {
      var getLink = $(this).attr('href');
      var id = $(this).attr('id');
      swal({
          title: 'Proses Selesai ?',
          text: '',
          type: "warning",
          html: true,
          confirmButtonColor: '#FF0000',
          showCancelButton: true,
        },
        function() {
          window.location.href = getLink
        });
      return false;
    });
  </script>