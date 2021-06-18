<?php
try
{
  $pdo = new PDO('mysql:host=localhost:3306;dbname=adikeman_pht_db', 'adikeman_pht_user', 'myP4ssw0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}

try
{
  $sql = 'SELECT title, description, image FROM content';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching jokes: ' . $e->getMessage();
  include 'includes/error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $content[] = [
      'title'=>$row['title'],
      'description'=>$row['description'],
      'image'=>$row['image']
  ];
}

include 'home/home.html.php';
