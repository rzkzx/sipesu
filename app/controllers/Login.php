<?php
class Login extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('UserModel');
  }

  public function index()
  {
    if (isLoggedIn()) {
      return redirect('dashboard');
    } else {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // process form
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
          'username' => trim($_POST['username']),
          'password' => trim($_POST['password']),
          'username_err' => '',
          'password_err' => ''
        ];

        //validate username
        if (empty($data['username'])) {
          $data['username_err'] = 'Please enter username';
        } elseif (empty($data['password'])) {
          $data['password_err'] = 'Please enter your password';
        }

        //make sure error are empty
        if (empty($data['username_err']) && empty($data['password_err'])) {
          $loggedInUser = $this->userModel->login($data['username'], $data['password']);
          if ($loggedInUser) {
            //create session
            if (!empty($_POST["remember"])) {
              //buat cookie
              setcookie("username", $data["username"], time() + (3600 * 365 * 24 * 60 * 60));
              setcookie("userpassword", $data["password"], time() + (3600 * 365 * 24 * 60 * 60));
            } else {
              if (isset($_COOKIE["username"])) {
                setcookie("username", "");
              }
              if (isset($_COOKIE["userpassword"])) {
                setcookie("userpassword", "");
              }
            }
            $this->createUserSession($loggedInUser);
          } else {
            setFlash('Username atau Password Salah', 'danger');
            return redirect('login');
          }
        } else {
          $this->view('login/index', $data);
        }
      } else {
        //init data f f
        $data = [
          'username' => '',
          'password' => '',
          'username_err' => '',
          'password_err' => ''
        ];
        //load view
        $this->view('login/index', $data);
      }
    }
  }

  //setting user section variable
  public function createUserSession($user)
  {
    $_SESSION['user_id'] = $user->id;
    $_SESSION['nip'] = $user->nip;
    $_SESSION['nik'] = $user->nik;
    $_SESSION['nama'] = $user->nama;
    $_SESSION['username'] = $user->username;
    $_SESSION['email'] = $user->email;
    $_SESSION['pangkat'] = $user->pangkat;
    $_SESSION['role'] = $user->role;
    $_SESSION['waktu_login'] = date('Y-m-d H:i:s');
    $_SESSION['avatar'] = $user->avatar;
    return redirect('dashboard');
  }

  //logout and destroy user session
  public function logout()
  {
    // add log user

    unset($_SESSION['user_id']);
    unset($_SESSION['nama']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['nik']);
    unset($_SESSION['nip']);
    session_destroy();
    return redirect('auth/login');
  }
}
