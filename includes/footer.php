
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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
        text: 'Exportar a Excel',
        exportOptions: {
            columns: ['th:not(:first-child)']
        }
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