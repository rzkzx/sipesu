<?php
class Middleware extends Controller
{

  public static function admin()
  {
    if ($_SESSION['role'] == 'admin') {
      return true;
    }
    return false;
  }
}
