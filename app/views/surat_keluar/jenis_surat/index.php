<?php require APPROOT . '/views/layouts/header.php'; ?>

<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="card mb-3">
            <div class="card-header">
              <h3><i class="fa fa-envelope-open"></i> <?= $data['title'] ?></h3>
            </div>
            <div class="button-table">
              <a type="button" class="btn btn-primary" href="<?= URLROOT ?>/suratkeluar/jenis_surat_add"><i class="fa fa-envelope"></i>&nbsp; Tambah Jenis Surat</a>
            </div>
            <div class="card-body">
              <?php flash(); ?>
              <div class="table-responsive">
                <table id="datatable-indv" class="table table-bordered table-hover display">
                  <thead>
                    <tr>
                      <th width="15">No</th>
                      <th>Nama Jenis Surat</th>
                      <th>Kode Surat</th>
                      <td width="20"><b>Aksi</b></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($data['jenis_surat'] as $js) {
                    ?>
                      <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $js->nama_jenis ?></td>
                        <td><?= $js->kode ?></td>
                        <td style=" display:flex ;">
                          <a type="button" class="btn btn-primary" href="<?= URLROOT ?>/suratkeluar/jenis_surat_edit/<?= $js->id ?>" style="margin-right:5px;"><i class="fa fa-pencil-square-o"></i></a>
                          <button type="button" class="btn btn-danger" id="btnDelete" data-id="<?= $js->id ?>"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                    <?php
                      $nomor++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>

            </div><!-- end card-->
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php require APPROOT . '/views/layouts/footer.php'; ?>

<script>
  function alertConfirmation() {
    $(document).delegate("#btnDelete", "click", function() {
      Swal.fire({
        icon: 'warning',
        title: 'Anda yakin menghapus data ini?',
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal'
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {

          var id = $(this).attr('data-id');

          // Ajax config
          $.ajax({
            type: "POST", //we are using GET method to get data from server side
            url: '<?= URLROOT ?>/suratkeluar/jenis_surat_delete/' + id, // get the route value
            beforeSend: function() { //We add this before send to disable the button once we submit it so that we prevent the multiple click

            },
            success: function(response) { //once the request successfully process to the server side it will return result here
              // Reload lists of employees
              Swal.fire('Berhasil Hapus Data.', response, 'success').then((result) => {
                if (result.isConfirmed) {
                  location.reload();
                }
              });
            }
          });

        } else if (result.isDenied) {
          Swal.fire('Perubahan tidak disimpan', '', 'info')
        }
      });
    });
  }
</script>