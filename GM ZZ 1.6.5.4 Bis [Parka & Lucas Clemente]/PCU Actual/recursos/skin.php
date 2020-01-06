<?php 
echo'<div class="row">';
foreach (range(0, 299) as $number) {
    echo '<div class="col-md-1"><a href="javascript: LoadSkin('.$number.')" alt="seleccionar">
    <img src="/imagenes/skin/Skin_'.$number.'.png" class="img-responsive" alt="skin"></a></div>';
}
unset($number); 
echo'</div>';
?>
