<?php


$mysqli = new mysqli("https://wangshen101-minicms.rhcloud.com/phpmyadmin/", "adminjqqLlfC", "b7_1GyDweEX5", "wangshen101");
 
/* check connection */ 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
$sql_menu= "select * from menu";

//第三步：执行，显示结果
$res = $mysqli->query($sql_menu) or die($mysqli->error);
// 返回值 $res 为资源类型（获取到结果的资源类型）
// if($res){
//  while($row = $res->fetch_assoc()){
// //注意：fetch_assoc()为 MySQLi_Result 里的函数，详情见手册
//  echo "<li><a href='#intro'>".$row['title']."<span class='indicator'><i class='fa fa-angle-right'></i></span></a></li>";
//  }
// }
$sql_content = "select * from content where area = 1";

$res_content = $mysqli->query($sql_content) or die($mysqli->error);
// 返回值 $res 为资源类型（获取到结果的资源类型）


/* close connection */
$mysqli->close();