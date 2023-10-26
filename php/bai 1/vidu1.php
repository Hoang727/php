<?php
    $fullname="Hoàng pro";
    $username = "cntt";
    $email="hoang727@gmail.com";

?>
<?php 
$frist = 'hello';
echo $frist;
echo "<br/>";
$frist = 'hello world!';
echo $frist;
?>
<html>
    <header><title>Bai tap 1: do du lieu php vao html</title></h2></header>
    <body>
        <h1>Thong tin ae</h1>
        <p>Ho va ten: <b><?php echo ($fullname);?> </b>   </p>
        <p>Username:<b><?php echo ($username);?> </b>   </p>
        <p>Email: <b><?php echo ($email);?> </b>   </p>
    </body>
</html>