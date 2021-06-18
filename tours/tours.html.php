<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portland Historical Tour Options</title>
  <meta name="description" content="Portland Historical Tours have offered three family run tours for decades:  the Downtown Tour, the Growth Tour, and the Landmarks Tour.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=../project.css>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
  <div id="wrapper">
    <header>
      <img src="../images/portlandhistoricaltoursheader.png" alt="Portland Historical Tours" width="920" height="290">
    </header>
    <nav>
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="index.php">Tours</a></li>
        <li><a href="../reservations/index.php">Reservations</a></li>
        <li><a href="../contact/contact.html.php">Contact</a></li>
      </ul>
    </nav>
    <main>
     <table>
         <span id="caption">Compare Tour Options</span>
         <tr>
             <th id="tourname">Tour</th>
             <th id="tourduration">Duration</th>
             <th id="transportation">Transportation</th>
             <th id="food">Food</th>
             <th id="price">Price</th>
             <th class="reserve">Reserve</th>
         </tr>
        <?php foreach ($tours as $value):?>
         <tr>
             <td><?php echo $value['title']; ?></td>
             <td><?php echo $value['duration']; ?></td>
             <td><?php echo $value['transportation']; ?></td>
             <td><?php echo $value['food']; ?></td>
             <td><?php echo $value['price']; ?></td>
             <td class="reserve"><a href="../reservations/index.php">Reserve</a></td>
         </tr>
         <?php endforeach; ?>

     </table>
      <!--<table>
        <span id="caption">Compare Tour Options</span>
        <tr>
          <th id="tourname">Tour</th>
          <th id="tourduration">Duration</th>
          <th id="transportation">Transportation</th>
          <th id="food">Food</th>
          <th id="price">Price</th>
          <th class="reserve">Reserve</th>
        </tr>
        <tr>
          <td headers="tourname">Downtown</td>
          <td headers="tourduration">2 Hours</td>
          <td headers="transportation">Walking</td>
          <td headers="food">None</td>
          <td headers="price">$50</td>
          <td class="reserve"><a href="../reservations.php">Reserve</a></td>
        </tr>
        <tr>
          <td headers="tourname">Growth</td>
          <td headers="tourduration">3 Hours</td>
          <td headers="transportation">Walking/Driving</td>
          <td headers="food">Included</td>
          <td headers="price">$80</td>
          <td class="reserve"><a href="../reservations.php">Reserve</a></td>
        </tr>
        <tr>
          <td headers="tourname">Landmarks</td>
          <td headers="tourduration">4 Hours</td>
          <td headers="transportation">Walking/Driving</td>
          <td headers="food">Included</td>
          <td headers="price">$70</td>
          <td class="reserve"><a href="../reservations.php">Reserve</a></td>
        </tr>
      </table> -->
        <?php foreach ($tours as $value):?>
      <h1><?php echo $value['title'] ?></h1>
        <img class="image" src="../<?php echo $value['image']?>" alt="Tour Image" width="200" height="200">
        <p><?php echo $value['description'] ?></p>
          <h2>What's Included?</h2>
            <ul>
                <li><?php echo $value['includes'] ?></li>
            </ul>
          <blockquote><?php echo $value['review'] ?></blockquote>
        <a href="../reservations/index.php" class="reserve"><div>Reserve</div></a>
        <br class="clearright">
      <?php endforeach; ?>
    </main>
    <footer>
      <div class="footernav">
        <a href="../index.php">Home</a>
        <a href="../tours/index.php">Tours</a>
        <a href="../reservations/index.php">Reservations</a>
        <a href="../contact/contact.html.php">Contact</a>
      </div>
      <p>Copyright &copy; Portland Historical Tours<br>
        <a href="mailto:hello@portlandhistoricaltours.com">hello@portlandhistoricaltours.com</a></p>
    </footer>
  </div>
</body>
</html>