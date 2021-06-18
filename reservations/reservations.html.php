<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portland Historical Tour Reservations</title>
  <meta name="description" content="Reserve your spot for a historical Portland Tour. Prices range from $50 to $80 per person.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=../project.css>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php define('BASE_URL', '/cas225/pht/'); ?>
</head>
<body>
  <div id="wrapper">
    <header>
      <img src="<?php echo BASE_URL; ?>images/portlandhistoricaltoursheader.png" alt="Portland Historical Tours" width="920" height="290">
    </header>
    <nav>
      <ul>
        <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
        <li><a href="<?php echo BASE_URL; ?>tours/index.php">Tours</a></li>
        <li><a href="<?php echo BASE_URL; ?>reservations/index.php">Reservations</a></li>
        <li><a href="<?php echo BASE_URL; ?>contact.php">Contact</a></li>
      </ul>
    </nav>
    <main>
      <h1>Book a Reservation</h1>
      <div id="source">Required fields are marked with an asterisk (*).</div>
      <div id="reservations">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="tour">*Tour:</label>
        <select size="1" name="tour" id="tour">
          <option>Choose Your Tour</option>
          <option value="downtown">Downtown - $50</option>
          <option value="growth">Growth - $80</option>
          <option value="landmarks">Landmarks - $70</option>
        </select>
        <label for="myfname">*First Name:</label>
          <input type="text" name="myfname" id="myfname" required>
        <label for="mylname">*Last Name:</label>
          <input type="text" name="mylname" id="mylname" required>
        <label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required>
        <label for="myphone">Phone:</label>
          <input type="tel" name="myphone" id="myphone">
        <label for="mydate">*Tour Date:</label>
          <input type="date" name="mydate" id="mydate" required>
        <label for="mygroup">*Total Participants</label>
          <input type="number" name="mygroup" id="mygroup" min="1" max="8" required>
        <label for="mycomments">*Do you have any food or drink sensitivities?</label>
          <textarea name="mycomments" id="mycomments" rows="2" cols="20" required></textarea>
          <input id="mysubmit" type="submit" value="Submit">
      </form>
      </div>
    </main>
    <footer>
      <div class="footernav">
        <a href="../index.php">Home</a>
        <a href="../sources/tours.php">Tours</a>
        <a href="../reservations/index.php">Reservations</a>
        <a href="../contact/contact.html.php">Contact</a>
      </div>
        <p>Copyright &copy; Portland Historical Tours<br>
        <a href="mailto:hello@portlandhistoricaltours.com">hello@portlandhistoricaltours.com</a></p>
    </footer>
  </div>
</body>
</html>