<?php

final class Coche{
    public function getColor()
    {
        echo"Rojo";
    }
}
class cocheDeLujo extends Coche{
 //Error Fatal, clase no heredada 
}

?> 