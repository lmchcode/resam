<?php 
 include 'header.php';
?>
<h2>Acceuil</h2>
<p>
<?php
if ($_SESSION['is_loged'] == 1){
    
    echo "t'es logg c bien";
    
    
}else{
    $_SESSION['is_loged'] == 0;
    echo "ptdr t ki?";
    
}
?>
</p>


    
<?php 
 include 'footer.php';
?>