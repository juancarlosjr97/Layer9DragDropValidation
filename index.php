<html>

<head>

  <!-- 1 -->
  <link href="css/dropzone.css" type="text/css" rel="stylesheet" />

  <!-- 2 -->
  <script src="dropzone.js"></script>

</head>

<body>

  <!-- 3 -->

  <form action="upload.php" class="dropzone"></form>

  <?php
  if (!empty($_GET['act'])) {
    include('check_file.php');
  } else
  {
        ?>
    <form action="index.php" method="get">
      <input type="hidden" name="act" value="run">
      <input type="submit" value="Check Files">
    </form>
    <?php
  }
?>

      <button onclick="goBack()">Upload more files</button>

      <script>
        function goBack() {
          window.history.back();
        }
      </script>

</body>

</html>
