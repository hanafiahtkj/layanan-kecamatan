<script src="<?= base_url() ?>/assets/ui/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>/assets/ui/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/assets/ui/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>/assets/ui/assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url() ?>/assets/ui/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url() ?>/assets/ui/assets/vendor/counterup/counterup.min.js"></script>
<script src="<?= base_url() ?>/assets/ui/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>/assets/ui/assets/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url() ?>/assets/ui/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- jquery-validation -->
<script src="<?= base_url() ?>/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- DataTables -->
<script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Sweet Alert -->
<script src="<?= base_url() ?>/assets/alert/sweetalert.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url() ?>/assets/plugins/toastr/toastr.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url() ?>/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- DROPIFY FILE UPLOAD -->
<script src="<?= base_url() ?>/assets/dropify/dist/js/dropify.min.js"></script>
<!-- JQUERY MASK -->
<script src="<?= base_url() ?>/assets/dist/js/jquery.mask.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>/assets/ui/assets/js/main.js"></script>

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

        bsCustomFileInput.init();

        // Combobox select
        $('.select2').select2();

        // FORMAT RUPIAH
        $(".rupiah").mask("000.000.000.000", {
            reverse: true
        });

        // Summernote
        $('.textarea').summernote()

    }); //END DOM READY FUNCTION //


    // FORMAT ANGKA SAJA
    function Angkasaja(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    // EVENT ON ENTER IN TEXT AREA
      $('.alamat').on('keydown', function(e) {
        if (e.keyCode == 13 && !e.shiftKey) {
          e.preventDefault();
          return false;
        }
      });

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
</script>