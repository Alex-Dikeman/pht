<?php
define('BASE_URL', '/cas225/pht/');
// Edit or Replace this try/catch statement to work with the current PHT configuration
try
{
    $pdo = new PDO('mysql:host=localhost:3306;dbname=adikeman_pht_db', 'adikeman_pht_user', 'myP4ssw0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}
// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['myfname']) AND empty($_POST['honeypot'])) {
      $myfname=$_POST['myfname'];
      $mylname=$_POST['mylname'];
      $tour=$_POST['tour'];
      $myemail=$_POST['myemail'];
      $myphone=$_POST['myphone'];
      $mydate=$_POST['mydate'];
      $mygroup=$_POST['mygroup'];
      $mycomments=$_POST['mycomments'];
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO reservations SET
          fname = :myfname,
          lname = :mylname,
          tour = :tour,
          email = :myemail,
          phone = :myphone,
          date = :mydate,
          participants = :mygroup,
          allergies = :mycomments;';
      $s = $pdo->prepare($sql);
      $s->bindValue(':myfname', $_POST['myfname']);
        $s->bindValue(':mylname', $_POST['mylname']);
        $s->bindValue(':tour', $_POST['tour']);
        $s->bindValue(':myemail', $_POST['myemail']);
        $s->bindValue(':myphone', $_POST['myphone']);
        $s->bindValue(':mydate', $_POST['mydate']);
        $s->bindValue(':mygroup', $_POST['mygroup']);
        $s->bindValue(':mycomments', $_POST['mycomments']);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted joke: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    include 'success.html.php';
    // load the thank you page after the INSERT runs

    // Add an else to load the initial page if the initial (line 19) if statement is false

  } else {
        //header("Location: reservations.html.php");
    };

include 'reservations.html.php'; //Modify this to include the initial file for this folder
