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


  <div class="container border mt-4 col-6">
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark  mb-4 ">
      <div class="container-fluid ">
        <span class="navbar-brand mb-0 h1">E-Book</span>
      </div>
    </nav>
    <form class="" action="index.php" method="post" enctype="multipart/form-data">
      <input id="chapter_name" type="text" name="chapter_name" value="" placeholder="Enter Chapter Name" required class="form-control mb-3">
      <input id="pdf" type="file" name="pdf" value="" class="form-control" required><br>
      <input id="insert" type="submit" name="insert" value="Insert" class="btn btn-primary">
    </form>

    <?php
    include('database.php');
    if(isset($_POST['insert'])){
      $chapter_name = $_POST['chapter_name'];
      $pdf_name = $_FILES['pdf']['name'];
      $pdf_type = $_FILES['pdf']['type'];
      $pdf_size = $_FILES['pdf']['size'];
      $pdf_temp_loca = $_FILES['pdf']['tmp_name'];
      $pdf_store = "pdf/".$pdf_name;


      move_uploaded_file($pdf_temp_loca, $pdf_store);

      $sql="INSERT INTO pdf_book(chapter_name, pdf) VALUES('$chapter_name', '$pdf_name')";
      $query = mysqli_query($db, $sql);
    }
    ?>
    
  </div>
</body>

</html>