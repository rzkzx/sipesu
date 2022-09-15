<?php
class SuratKeluar extends Controller
{

  public function __construct()
  {
    if (!isLoggedIn()) {
      return redirect('login');
    }

    //new model instance
    $this->suratKeluarModel = $this->model('SuratKeluarModel');
  }

  // Surat Keluar Controller
  public function index()
  {
    $surat_keluar = $this->suratKeluarModel->getSuratKeluar();

    $data = [
      'title' => 'Permintaan Nomor Surat',
      'menu' => 'Surat Keluar',
      'submenu' => 'Permintaan Nomor Surat',
      'url' => 'suratkeluar',
      'surat_keluar' => $surat_keluar
    ];

    $this->view('surat_keluar/index', $data);
  }

  public function detail($id = '')
  {
    $surat_keluar = $this->suratKeluarModel->getSuratKeluarById($id);

    if ($surat_keluar) {
      $data = [
        'title' => 'Permintaan Nomor Surat',
        'menu' => 'Surat Keluar',
        'submenu' => 'Permintaan Nomor Surat',
        'url' => 'suratkeluar',
        'surat_keluar' => $surat_keluar
      ];

      $this->view('surat_keluar/detail', $data);
    } else {
      return redirect('suratkeluar');
    }
  }

  public function export()
  {
    $surat_keluar = $this->suratKeluarModel->getSuratKeluar();

    $data = [
      'surat_keluar' => $surat_keluar
    ];

    $this->view('surat_keluar/export', $data);
  }

  public function add()
  {
    $jenis_surat = $this->suratKeluarModel->getJenisSurat();

    $data = [
      'title' => 'Permintaan Nomor Surat',
      'menu' => 'Surat Keluar',
      'submenu' => 'Permintaan Nomor Surat',
      'url' => 'suratkeluar',
      'jenis_surat' => $jenis_surat
    ];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      //validate error free
      if (empty($_POST['tanggal']) || empty($_POST['jenis_surat']) || empty($_POST['nomor']) || empty($_POST['asal']) || empty($_POST['perihal']) || empty($_POST['tujuan'])) {
        //load view with error
        setFlash('Form input tidak boleh kosong', 'danger');
        return redirect('suratkeluar/add');
      } else {
        if ($this->suratKeluarModel->addSuratKeluar($_POST, $_FILES['file_lampiran'])) {
          setFlash('Permintaan Nomor Surat baru berhasil ditambahkan.', 'success');
          return redirect('suratkeluar');
        } else {
          die('something went wrong');
        }
      }
    } else {
      $this->view('surat_keluar/add', $data);
    }
  }

  public function delete($id = '')
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if ($this->suratKeluarModel->deleteSuratKeluar($id)) {
        setFlash('Berhasil menghapus Surat Keluar', 'success');
      } else {
        setFlash('Gagal menghapus Surat Keluar', 'danger');
      }
    } else {
      return redirect('suratkeluar');
    }
  }

  // Jenis Surat Controller
  public function jenis_surat()
  {
    $jenis_surat = $this->suratKeluarModel->getJenisSurat();

    $data = [
      'title' => 'Jenis Surat Keluar',
      'menu' => 'Surat Keluar',
      'submenu' => 'Jenis Surat Keluar',
      'url' => 'suratkeluar',
      'jenis_surat' => $jenis_surat
    ];

    $this->view('surat_keluar/jenis_surat/index', $data);
  }

  public function jenis_surat_add()
  {
    $data = [
      'title' => 'Tambah Jenis Surat Keluar',
      'menu' => 'Surat Keluar',
      'submenu' => 'Jenis Surat Keluar',
      'url' => 'suratkeluar',
    ];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      //validate error free
      if (empty($_POST['nama_jenis'])) {
        //load view with error
        setFlash('Form input tidak boleh kosong', 'danger');
        return redirect('suratkeluar/jenis_surat/add');
      } else {
        if ($this->suratKeluarModel->addJenisSurat($_POST)) {
          setFlash('Jenis Surat baru berhasil ditambahkan.', 'success');
          return redirect('suratkeluar/jenis_surat');
        } else {
          die('something went wrong');
        }
      }
    } else {
      $this->view('surat_keluar/jenis_surat/add', $data);
    }
  }

  public function jenis_surat_edit($id = '')
  {
    $data = [
      'title' => 'Edit Jenis Surat Keluar',
      'menu' => 'Surat Keluar',
      'submenu' => 'Jenis Surat Keluar',
      'url' => 'suratkeluar',
    ];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      //validate error free
      if (empty($_POST['nama_jenis'])) {
        //load view with error
        setFlash('Form input tidak boleh kosong', 'danger');
        return redirect('suratkeluar/jenis_surat_edit/' . $_POST['id']);
      } else {
        if ($this->suratKeluarModel->updateJenisSurat($_POST)) {
          setFlash('Jenis Surat baru berhasil diperbarui.', 'success');
          return redirect('suratkeluar/jenis_surat');
        } else {
          die('something went wrong');
        }
      }
    } else {
      $jenis_surat = $this->suratKeluarModel->getJenisSuratById($id);
      if ($jenis_surat) {
        $data['id'] = $id;
        $data['jenis_surat'] = $jenis_surat;

        $this->view('surat_keluar/jenis_surat/edit', $data);
      } else {
        return redirect('suratkeluar/jenis_surat');
      }
    }
  }

  public function jenis_surat_delete($id = '')
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if ($this->suratKeluarModel->deleteJenisSurat($id)) {
        setFlash('Berhasil menghapus Jenis Surat', 'success');
      } else {
        setFlash('Gagal menghapus Jenis Surat', 'danger');
      }
    } else {
      return redirect('suratkeluar/jenis_surat');
    }
  }
}
