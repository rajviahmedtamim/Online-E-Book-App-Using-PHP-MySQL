<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Insert Content|PDF</title>
</head>

<body>
  <div class="container mt-4">
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark  mb-4">
      <div class="container-fluid ">
        <span class="navbar-brand mb-0 h1">E-Book</span>
      </div>
    </nav>
    <div class="row">
      <div class="col-3 border" > 
        <?php
        include 'database.php';

        $sql = "SELECT * from pdf_book ORDER BY id DESC";
        $query = mysqli_query($db, $sql);
        while ($info = mysqli_fetch_array($query)) {
        ?>
          <form class="" action="book.php" method="post">
            <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>
            <input class="m-2 w-100 text-white bg-dark"type="submit" name="list" value="<?php echo $info['chapter_name']; ?>">

          </form>

        <?php
        }

        ?>

      </div>
      <div  class="col-9">
        <?php
        error_reporting(0);

        include 'databse.php';

        $id = $_POST['id'];

        $sql1 = "SELECT * FROM pdf_book where id='$id'";
        $query1 = mysqli_query($db, $sql1);
        while ($info2 = mysqli_fetch_array($query1)) {

          if (isset($_POST['list'])) {
        ?>
            <embed type="application/pdf"  class="w-100" style="height: 540px" src="pdf/<?php echo $info2['pdf']; ?>">

        <?php

          }
        }
        if (!isset($_POST['list'])) {
          echo "Choose your chapter to read";
        }

        ?>

      </div>
    </div>
  </div>

</body>

</html>