<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="copyright">
          <p>Copyright © 2022 Sipesu</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END PAGE CONTAINER-->
</div>

</div>
<!-- Jquery JS-->
<script src="<?= URLROOT; ?>/vendors/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?= URLROOT; ?>/vendors/bootstrap-4.1/popper.min.js"></script>
<script src="<?= URLROOT; ?>/vendors/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendors JS       -->
<script src="<?= URLROOT; ?>/vendors/slick/slick.min.js">
</script>
<script src="<?= URLROOT; ?>/vendors/wow/wow.min.js"></script>
<script src="<?= URLROOT; ?>/vendors/animsition/animsition.min.js"></script>
<script src="<?= URLROOT; ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?= URLROOT; ?>/vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="<?= URLROOT; ?>/vendors/counter-up/jquery.counterup.min.js">
</script>
<script src="<?= URLROOT; ?>/vendors/circle-progress/circle-progress.min.js"></script>
<script src="<?= URLROOT; ?>/vendors/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= URLROOT; ?>/vendors/chartjs/Chart.bundle.min.js"></script>
<script src="<?= URLROOT; ?>/vendors/select2/select2.min.js">
</script>
<script src="<?= URLROOT; ?>/vendors/vector-map/jquery.vmap.js"></script>
<script src="<?= URLROOT; ?>/vendors/vector-map/jquery.vmap.min.js"></script>
<script src="<?= URLROOT; ?>/vendors/vector-map/jquery.vmap.sampledata.js"></script>
<script src="<?= URLROOT; ?>/vendors/vector-map/jquery.vmap.world.js"></script>
<!-- Sweetalert2 JS -->
<script src="<?= URLROOT; ?>/vendors/sweetalert2/sweetalert2.min.js"></script>
<!-- Datatables JS -->
<script src="<?= URLROOT; ?>/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="<?= URLROOT; ?>/vendors/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= URLROOT; ?>/vendors/datatables/dataTables.buttons.min.js"></script>
<script src="<?= URLROOT; ?>/vendors/datatables/buttons.html5.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

<!-- Main JS-->
<script src="<?= URLROOT; ?>/js/main.js"></script>

<script>
  // START CODE Individual column searching (text inputs) DATA TABLE 		
  $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#datatable-indv thead th').each(function() {
      var title = $(this).text();
      $(this).html('<input type="text" class="placeholder-bold" placeholder="' + title + '" />');
    });

    // DataTable
    var table = $('#datatable-indv').DataTable();

    // Apply the search
    table.columns().every(function() {
      var that = this;

      $('input', this.header()).on('keyup change', function() {
        if (that.search() !== this.value) {
          that
            .search(this.value)
            .draw();
        }
      });
    });

    $("#btnExport").click(function() {
      let table = document.getElementsByTagName("tbody");
      TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
        name: `export.xlsx`, // fileName you could use any name
        sheet: {
          name: 'Sheet 1' // sheetName
        }
      });
    });

    alertConfirmation();
  });
</script>

</body>

</html>
<!-- end document-->