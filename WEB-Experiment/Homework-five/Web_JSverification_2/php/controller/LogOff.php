<?php
  /**
   * Created by IntelliJ IDEA.
   * User: HUSHUHUA
   * Date: 2019/4/17
   * Time: 22:10
   */
  session_start();
  if(isset($_SESSION['sudoName'])){
    session_unset();
    session_destroy();
    setcookie(session_name(),'',time()-1,'/');
    header('location: ../view/sudoLogin.php');
  }