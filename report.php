<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    html{
      background-color: rgb(0,40,112);
      color: white;
    }
    h1{
      position: relative;
      text-align: center;
      bottom: 100px;
      margin-top:0;
      margin-bottom: 0;
    }
    table, th, td { border:1px solid white; text-align: center; border-collapse:collapse; }
    th, td { padding:15px;}
    th { width:100px; }
    </style>
  </head>
  <body>
    <header>
      <img src="logo.png" width=180px>
      <h1>범죄자 얼굴인식 수사 시스템</h1></header>
    <table style="width:70%;">
      <tr>
        <th>제목</th>
        <td><?php echo $_POST['id']; ?></td>
      </tr>
      <tr>
        <th>내용</th>
        <td><?php echo nl2br($_POST['pw']); ?></td>
      </tr>
    </table>
    <?php
    ini_set("display_errors", "1");
    $uploaddir = 'C:\Bitnami\wampstack-7.4.9-0\apache2\htdocs\file\\';
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);
    echo '<pre>';
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        // echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
    } else {
        // print "파일 업로드 공격의 가능성이 있습니다!\n";
    }
    // echo '자세한 디버깅 정보입니다:';
    // print_r($_FILES);
    // print "</pre>";
    ?>
    <!-- <img src="file/<?php echo $_FILES['file']['name']?>"/> -->
    <video height="400" controls>
      <source src="file/<?php echo $_FILES['file']['name']?>">
    </video>
  </body>
