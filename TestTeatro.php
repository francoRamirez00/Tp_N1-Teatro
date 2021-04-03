<?php
include_once 'teatro.php' ;



$datos= new Teatro("san", "calle 1") ;

 do {


    echo " /--- bienvenido al menu ---\ ". "\n" ;
    echo "elija una opcion : " . "\n" ;
    echo "1) cambiar nombre del teatro "."\n" ;
    echo "2) cambiar direccion del teatro". "\n" ;
    echo "3) camabiar el nombre de una funcion" . "\n" ;
    echo "4) cambiar el precio de una funcion". "\n" ;
    echo "5) mostrar informacion del teatro "."\n" ;
    echo "6) salir del menu ". "\n" ;
    $eleccion = trim(fgets(STDIN)) ;
    
    switch ($eleccion) {
        case '1':

            echo "ingrese nuevo nombre de teatro : "  ;
            $nuevoNombre_Teatro = trim(fgets(STDIN)) ;
            echo "Cargando nombre del teatro .   .   .  . ". "\n" ;
            $validez = $datos->cambiar_nom_teatro($nuevoNombre_Teatro) ;
                if ($validez == true) {
                    echo "El nombre del teatro fue cambiado exitosamente". "\n" ;
                }else {
                    echo "el nombre que se ingreso ya existia ". "\n" ;
    }   
            echo "saliendo al menu . . .". "\n" ;
            break;
        case '2' :

            echo "ingrese nueva direccion : " ;
            $nuevoNombre_Direccion = trim(fgets(STDIN)) ;
            echo "Cargando direccion del teatro .   .   .  . ". "\n" ;
            $validez = $datos->cambiar_nom_Direccion($nuevoNombre_Direccion);
                if ($validez == true) {
                        echo "La direccion del teatro fue cambiada exitosamente". "\n" ;
        
                }else {
                        echo "el nombre ingresado ya se encuentra" ."\n" ;
                        echo "saliendo al menu . . .". "\n" ;
    }
           
            break ;
        
        case '3' :

            echo "ingrese nombre de la nueva funcion: " ;
            $nombreNuevo_Funcion = trim(fgets(STDIN)) ;
            echo "ingrese que numero de la funcion desea cambiar (0 - 3): " ;
            $posicion = trim(fgets(STDIN));
            echo "cargando nombre a la nueva funcion . . . .". "\n" ;
            $validez = $datos->cambiar_nom_Funcion($posicion,$nombreNuevo_Funcion) ;

                if ($validez) {
                        echo "El nombre de la funcion ". $posicion. " fue actualizado correctamente" ."\n";
                }else {
                        echo "El numero de la posicion ingresado es incorrecto " . "\n";
}
                        echo "saliendo al menu . . ." . "\n";
        break;

        case '4' :

            echo "ingrese el numero de la funcion desea cambiar el precio (0 - 3): " ;
            $posicion = trim(fgets(STDIN));
            echo "ingrese el precio que desea cargar: ". "\n" ;
            $precioNuevo = trim(fgets(STDIN)) ;
            echo "cargando precio en la posicion " . $posicion. "\n" ;
            $validez = $datos->cambiar_precio_Funcion($posicion,$precioNuevo) ;

                if ($validez) {
                    echo "El precio fue actualizado exitosamente ". "\n" ;
                }else {
                    echo "numero de la posicion ingresado incorrecto". "\n" ;
}           
                    echo "saliendo al menu . . ." . "\n";
    
        break;

        case '5':
            
            echo "Nombre del Teatro: ". $datos->getNombreTeatro() . "\n";
            echo "direccion del Teatro : ". $datos->getDireccionTeatro() ."\n";
          

        break;

        case '6' :

            echo "--- gracias por usar el menu ---". "\n" ;

        break;
    }
    
    
} while ($eleccion < 6 ); 