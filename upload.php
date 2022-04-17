
<?php
$target = "upload/";
$target = $target . basename( $_FILES['uploaded']['name']); //basename daje ime fajla koji je uploadovan 
if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
{
echo "Fajl je uspešno uploadovan";
}
else {
echo "Upload nije uspeo";
}
?>  
