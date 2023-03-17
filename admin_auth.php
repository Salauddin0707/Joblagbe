<?php
session_start();

if (!isset($_SESSION['s_user_name'])) {
  header('Location: admin_login.php');
  exit();
}
