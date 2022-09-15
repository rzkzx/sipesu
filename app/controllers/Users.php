<?php
class Users extends Controller
{

  public function __construct()
  {
    if (!isLoggedIn()) {
      return redirect('login');
    }
    if (!Middleware::admin()) {
      return redirect('login');
    }

    //new model instance
    $this->userModel = $this->model('UserModel');
  }

  public function index()
  {
    $users = $this->userModel->getAll();

    $data = [
      'title' => 'Manajemen User',
      'menu' => 'Manajemen User',
      'url' => 'users',
      'users' => $users
    ];

    $this->view('users/index', $data);
  }

  public function export()
  {
    $users = $this->userModel->getAll();

    $data = [
      'users' => $users
    ];

    $this->view('users/export', $data);
  }

  public function add()
  {
    $data = [
      'title' => 'Tambah User',
      'menu' => 'Manajemen User',
      'submenu' => 'Tambah User',
      'url' => 'users',
    ];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      //validate error free
      if (empty($_POST['nip']) || empty($_POST['nik']) || empty($_POST['nama']) || empty($_POST['pangkat']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
        //load view with error
        setFlash('Form input tidak boleh kosong', 'danger');
        return redirect('users/add');
      } else {
        if ($_POST['password'] != $_POST['konfPassword']) {
          setFlash('Password konfirmasi tidak sama', 'danger');
          return redirect('users/add');
        } else {
          if ($this->userModel->register($_POST)) {
            setFlash('User baru berhasil ditambahkan.', 'success');
            return redirect('users');
          } else {
            die('something went wrong');
          }
        }
      }
    } else {
      $this->view('users/add', $data);
    }
  }

  public function edit($id = '')
  {
    $data['title'] = 'Perbarui Data Server';
    $data['menu'] = 'alat';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      //validate error free
      if (empty($_POST['serial']) || empty($_POST['model']) || empty($_POST['ip']) || empty($_POST['mac']) || empty($_POST['port'])) {
        //load view with error
        setFlash('Form input tidak boleh kosong', 'negative');
        return redirect('server/edit/' . $_POST['id']);
      } else {
        if ($this->serverModel->update($_POST)) {
          setFlash('Data server berhasil diperbarui.', 'positive');
          return redirect('server');
        } else {
          die('something went wrong');
        }
      }
    } else {
      $svr = $this->serverModel->getById($id);
      if ($svr) {
        $data['id'] = $id;
        $data['server'] = $svr;

        $this->view('server/edit', $data);
      } else {
        return redirect('server');
      }
    }
  }

  public function delete($id = '')
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if ($this->userModel->delete($id)) {
        setFlash('Berhasil menghapus data user', 'success');
      } else {
        setFlash('Gagal menghapus data user', 'danger');
      }
    } else {
      return redirect('users');
    }
  }
}
