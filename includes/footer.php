
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->




<script src="../js/delete.js"></script>



<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->

<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->

<script src="../package/dist/sweetalert2.all.js"></script>
<script src="../package/dist/sweetalert2.all.min.js"></script>
<script src="../vendor/datatables/datatables.min.js"></script>


</body>

</html>

<script>
    var tabla = $('#tabla').DataTable( {
        responsive: {
        details: false
    },
        language: {
        url: '../includes/español.json',
    },
        columnDefs: [
        { targets: ['ver'], visible: true},
        { targets: '_all', visible: false }
    ],
    });

    new $.fn.dataTable.Buttons( tabla, {
    name: 'commands',
    buttons: [ {
        extend: 'excelHtml5',
        className: 'btn btn-info',
        text: 'Exportar a Excel'
    },
    { 
            extend: 'colvis',
            text: 'Visibilidad',
            columns: '',
            classname: 'btn btn-secondary'
        }],
} );

</script>

<?php if ($_SESSION["type"] != 3) { ?>

    <script>
tabla.buttons().containers().appendTo( 'div#barra' );
    </script>

<?php }
?> 