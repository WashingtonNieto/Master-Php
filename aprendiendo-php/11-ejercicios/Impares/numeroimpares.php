<?php
    echo "<h1>".$_GET['numero1']."</h1>";
    echo "<h1>".$_GET['numero2']."</h1>";
   //var_dump($_GET);
            
    if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
        $numero1=$_GET['numero1'];
        $numero2=$_GET['numero2'];
        
        if($numero1 < $numero2){
            for($i = $numero1; $i <= $numero2; $i++){
                if(($i % 2)== 1) {
                 echo $i."<br/>";
               }
            }
        } else{
            echo "El numero 1 no puede ser mayor al numero 2";
        }
    }else{
        echo "No puede haber numero null";
    }
    
?>
