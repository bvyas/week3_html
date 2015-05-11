<?php
 session_start();

 require_once('./include/connection.php');

 

 if(isset($_POST['action']) && $_POST['action'] == "register")
 {  
  register_user($_POST);
 }
 elseif(isset($_POST['action']) && $_POST['action'] == "login")
 {
  login_user($_POST);
 }

 function register_user($post)
 {
  $_SESSION['errors'] = array();
  if(empty($post['first_name']))
  {
    $_SESSION['errors'][] = "please enter a first name";
  }
  if(empty($post['last_name']))
  {
    $_SESSION['errors'][] = "please enter a last name";
  }

  if(empty($post['email']) && !filter_var($post['email'], FILTER_VALIDATE_EMAIL))
  {
    $_SESSION['errors'][] = "please enter a valid email";
  }
  if(empty($post['password']))
  {
    $_SESSION['errors'][] = "please enter a password";
  }
  if($post['password'] !== $post['confirm_password'])
  {
    $_SESSION['errors'][] = "please make sure passwords match";
  }

  if(count($_SESSION['errors']) > 0)
  {
    header("location: index.php");
    die();
  }
  else{
    $fname = escape_this_string($post['first_name']);
    $lname = escape_this_string($post['last_name']);
    $email = escape_this_string($post['email']);
    $password = escape_this_string($post['password']);

    $query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES ('{$fname}', '{$lname}', '{$email}', '{$password}', NOW(), NOW())";
    run_mysql_query($query);
    $_SESSION['success'] = "USER HAS BEEN REGISTERED YAHHOOO!!!";
    header("location: index.php");
    die();
  }
 }

 function login_user($post)
 {
  $email = escape_this_string($post['email']);
  $password = escape_this_string($post['password']);

  $user = fetch_record("SELECT * FROM users WHERE users.email = '{$email}'");
  if(!empty($user))
  {
    if($user['password'] == $password)
    {
      $_SESSION['id'] = $user['id'];
      $_SESSION['name'] = $user['first_name']. " ". $user['last_name'];
      header("location: wall.php");
      die();
    }
    else
    {
      bad_credentials();
    }
  }
  else
  {
    bad_credentials();
  }
 }

 function bad_credentials()
 {
  $_SESSION['errors'][] = "User has not been found in db";
  header("location: index.php");
  die();
 }
