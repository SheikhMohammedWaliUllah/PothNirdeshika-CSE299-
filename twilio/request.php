<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+12029526015"><?php  echo $_POST['To'];?></Dial>
</Response>