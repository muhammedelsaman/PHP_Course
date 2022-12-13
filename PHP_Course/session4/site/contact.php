<?php
if(isset($_POST['submit'])){
 $name=trim($_POST['username']);
 $email=trim($_POST['email']);
 $subject=trim($_POST['subject']);
 $content=trim($_POST['content']);
 $content.="\n email:{$email}";
 $content.="\n{$subject}";
 $to="dahabit@gmail.com";
 $header = "From: ". $name . " <" . $email . ">\r\n";
 if(empty($name)){
  echo "please enter your name <br/>";
  $result=FALSE;
 }
 
$testmail=filter_var($email,FILTER_VALIDATE_EMAIL);
 if($testmail==FALSE){
  echo "please enter vaild email";
 }
$result=FALSE;
//$result=mail($to, $subject, $content,$header);
if($result){
 ?>
 <table border="10">
 <tr>
 <td>
 ﺩﺮﻟا ﻰﻠﻋ  ﻰﻠﻋ ﻚﻟ ًاﺮﻜﺷ
 </td>
 </tr>
 </table>
<?php 
/*
$to=$email;
$subject="ﺔﻟﺎﺳﺮﻟا ﻰﻠﻋ ًاﺮﻜﺷ";
$message="ﺎﻨﺑ ﻝﺎﺼﺗﻹا ﻰﻠﻋ ﻙﺮﻜﺸﻧ";
$myemail="dahabit@gmail.com";
$header="From:{$myemail}";
mail($to, $subject, $message,$header);
*/
}
/*
 echo $name;
 echo "<br />";
 echo $email;
 echo "<br />";
 echo $subject;
 echo "<br />";
 echo $content;
 */
}else{
?>
<form action="" method="post"> Name: <input type="text" name="username"
 value="" size="50"> <br />
Email: <input type="text" name="email" value="" size="50"> <br />
Subject: <input type="text" name="subject" value="" size="50"> <br />
<textarea rows="10" cols="30" name="content"></textarea> <br />
<input type="submit" name="submit" value="Send Data"> <input
 type="reset" name="reset" value="Clear Date"></form>
<br />
<?php
}
?>