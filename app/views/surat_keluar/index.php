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
              <a type="button" class="btn btn-primary" href="<?= URLROOT ?>/suratkeluar/add"><i class="fa fa-envelope"></i>&nbsp; Tambah Nomor Surat</a>
              <a type="button" class="btn btn-success" href="<?= URLROOT ?>/suratkeluar/export"><i class="fa fa-file-text"></i>&nbsp; Export Excel</a>
            </div>
            <div class="card-body">
              <?php flash(); ?>
              <div class="table-responsive">
                <table id="datatable-indv" class="table table-bordered table-hover display">
                  <thead>
                    <tr>
                      <th class="nomor-table">No</th>
                      <th class="jenis-table">Jenis Surat</th>
                      <th class="tgl-table">Tanggal</th>
                      <th>Nomor</th>
                      <th>Asal</th>
                      <th>Perihal</th>
                      <th>Tujuan</th>
                      <td width="20"><b>Aksi</b></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($data['surat_keluar'] as $sk) {
                    ?>
                      <tr>
                        <td><?= $nomor ?></td>
                        <td><span class="badge badge-primary" style="padding: 10px;"><?= $sk->nama_jenis ?></span></td>
                        <td><?= dateID($sk->tanggal) ?></td>
                        <td><?= $sk->nomor ?></td>
                        <td><?= $sk->asal ?></td>
                        <td><?php echo (strlen($sk->perihal) > 50) ? substr($sk->perihal, 0, 50) . "..." : $sk->perihal; ?></td>
                        <td><?= $sk->tujuan ?></td>
                        <td style=" display:flex ;">
                          <a type="button" class="btn btn-info" href="<?= URLROOT ?>/suratkeluar/detail/<?= $sk->id ?>" style="margin-right:5px;"><i class="fa fa-eye"></i></a>
                          <button type="button" class="btn btn-danger" id="btnDelete" data-id="<?= $sk->id ?>"><i class="fa fa-trash"></i></button>
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
            url: '<?= URLROOT ?>/suratkeluar/delete/' + id, // get the route value
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