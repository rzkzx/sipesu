<?php
class Dashboard extends Controller
{

  public function __construct()
  {
    if (!isLoggedIn()) {
      return redirect('login');
    }

    //new model instance
    $this->suratKeluarModel = $this->model('SuratKeluarModel');
  }

  public function index()
  {
    $jenis_surat_keluar = $this->suratKeluarModel->getJenisSurat();
    $jumlahSurat = [];

    $no = 1;
    foreach ($jenis_surat_keluar as $js) {
      $jumlahSurat[$no] = $this->suratKeluarModel->getSuratKeluarByJenis($js->id);
      $no++;
    }

    $data = [
      'title' => 'Dashboard',
      'menu' => 'Dashboard',
      'url' => 'dashboard',
      'jenis_surat_keluar' => $jenis_surat_keluar,
      'jumlah_surat' => $jumlahSurat
    ];

    $this->view('dashboard/index', $data);
  }
}
