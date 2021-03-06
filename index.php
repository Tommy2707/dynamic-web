<?php
   $host        = "host = ec2-107-22-83-3.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dpn0k9oq299l0";
   $credentials = "user = jzsysldrxnxrpw password= 8f7efcd4c63fe9d7cbbb010da3ef2561c6626811855cdc7bae365b2b3b8e61cf";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
<!DOCTYPE html>
<html>
<head>
    <title>List of school</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="top-bar" align="center">List school</div>
			<div align="center" class="tab">
  				<button class="tablinks" onclick="openCity(event, 'BTEC')">Btec</button>
  				<button class="tablinks" onclick="openCity(event, 'TĐT')">Tđt</button>
  				<button class="tablinks" onclick="openCity(event, 'SGU')">Sgu</button>
				<button class="tablinks" onclick="openCity(event, 'NTT')">Ntt</button>
				<button class="tablinks" onclick="openCity(event, 'UEH')">Ueh</button>
			</div>
    <div id="BTEC" class="tabcontent">
        <h3>Btec</h3>
        <p>Trường đại học FPT là một cơ sở kinh doanh giáo dục tại được thành lập ngày 8/9/2006 theo quyết định số 2008/2006/QĐ-TTg của thủ tướng chính phủ.</p>
        <img class = "featured-image" style="width:300px; height:200px" src= "Logo_BTEC.png" >
    </div>
    
    <div id="TĐT" class="tabcontent">
        <h3>Tđt</h3>
        <p>Đại học Tôn Đức Thắng (TDTU) là đại học công lập thuộc Tổng Liên đoàn Lao động Việt Nam; thành lập ngày 24/9/1997.</p>
        <img class = "featured-image" style="width:300px; height:200px" src= "Logo_TĐT.png" >
    </div>

    <div id="SGU" class="tabcontent">
        <h3>Sgu</h3>
        <p>Trường Đại học Sài Gòn được thành lập theo Quyết định số 478/QĐ-TTg ngày 25/04/2007 của Thủ tướng Chính phủ trên cơ sở nâng cấp Trường Cao đẳng Sư phạm Thành phố Hồ Chí Minh.</p>
        <img class = "featured-image" style="width:300px; height:200px" src= "Logo_SGU.png" >
    </div>

    <div id="NTT" class="tabcontent">
        <h3>Ntt</h3>
        <p>NTTU - Trường ĐH Nguyễn Tất Thành là trường đại học ứng dụng đa ngành đa lĩnh vực, đáp ứng nhu cầu giáo dục đại học đại chúng thông qua việc tạo lập một môi trường học tập tích cực và trải nghiệm thực tiễn cho mọi sinh viên trang bị cho người học năng lực tự học tinh thần sáng tạo khởi nghiệp có trách nhiệm với cộng đồng hội nhập với khu vực và toàn cầu</p>
        <img class = "featured-image" style="width:300px; height:200px" src= "Logo_NTT.jpeg" >
    </div>

    <div id="UEH" class="tabcontent">
        <h3>Ueh</h3>
        <p>Trường Đại học Kinh tế TP. Hồ Chí Minh (UEH) công bố thông tin tuyển sinh Đại học chính quy Khóa 47 năm 2021. Trong đó, Cơ sở đào tạo tại TP. Hồ Chí Minh (Mã trường KSA) tuyển sinh 5.850 chỉ tiêu, với 29 ngành/chuyên ngành và UEH - Phân hiệu Vĩnh Long (Mã trường KSV) tuyển sinh 500 chỉ tiêu, với 10 ngành/chuyên ngành</p>
        <img class = "featured-image" style="width:300px; height:200px" src= "Logo_UEH.jpg" >
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script> 
    <script type="text/javascript"> 
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
    </script>
   
   <?php
   /*
      $sql =<<<EOF
         CREATE TABLE Menu
         (ID INT PRIMARY KEY     NOT NULL,
     	 NAME           TEXT    NOT NULL);
   EOF;

      $ret = pg_query($db, $sql);
      if(!$ret) {
      	 echo pg_last_error($db);
      } else {
      	 echo "Table created successfully\n";
      }
      pg_close($db);
    */
    ?>
    
    <?php
    
      $sql =<<<EOF
      INSERT INTO Menu 
      VALUES (1, 'BTEC');

      INSERT INTO Menu
      VALUES (2, 'TĐT');

      INSERT INTO Menu
      VALUES (3, 'SGU');

      INSERT INTO Menu
      VALUES (4, 'NTT');

      INSERT INTO Menu
      VALUES (5, 'UEH');
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db);
    
    ?>
    
    <?php
    /*
        $sql =<<<EOF
        SELECT * from Menu;
  EOF;
  
        $ret = pg_query($db, $sql);
        if(!$ret) {
            echo pg_last_error($db);
        exit;
        } 
        while($row = pg_fetch_row($ret)) {
            echo "ID = ". $row[0] . "\n";
            echo "NAME = ". $row[1] ."\n";
        }
        echo "Operation done successfully\n";
        pg_close($db);
    */
    ?>
    
</body>
</html>
