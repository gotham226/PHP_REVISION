<?php 

function afficheSelect($name){
    
    for ($i=1; $i < 4; $i++) { 
        echo "
        <label>Choix $i :</label>
        <select name='$name-$i'>
            <option value='baseball'>Baseball</option>
            <option value='velo'>Velo</option>
            <option value='football'>Football</option>
        </select>
        <br>
        <br>";
    }

}

?>