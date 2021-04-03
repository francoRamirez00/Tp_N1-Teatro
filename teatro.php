<?php

class Teatro{

    private $nombreTeatro ;
    private $direccionTeatro ;
    private $funciones_Teatro ;

    public function __construct($nombreTeatro,$direccionTeatro){

        $this->nombreTeatro =$nombreTeatro ;
        $this->direccionTeatro =$direccionTeatro;
        $funciones_Teatro =array() ;
     

        $this->funciones_Teatro = array();
            $funciones_Teatro[0]=array(
                                            "nombre" => ["nombre_F0"],"precio" => [150] );
            $funciones_Teatro[1]=array(
                                            "nombre" => ["nombre_F1"],"precio" => [200] );
            $funciones_Teatro[2]=array(
                                            "nombre" => ["nombre_F2"],"precio" => [250] );
            $funciones_Teatro[3]=array(
                                            "nombre" => ["nombre_F3"],"precio" => [300] );
            
    
            
    }

    public function getNombreTeatro(){

        return $this->nombreTeatro ;
    }
    public function getDireccionTeatro(){

        return $this->direccionTeatro ;
    }
    public function setNombreTeatro($nombreTeatro){

        return $this->nombreTeatro =$nombreTeatro;
    }
    public function setDireccionTeatro($direccionTeatro){

        return $this->direccionTeatro =$direccionTeatro ;
    }

    // funcion para cambiar el nombre al teatro
    public function cambiar_nom_teatro($nuevoNombre_Teatro){

        if ($nuevoNombre_Teatro !== $this-> getNombreTeatro() ) {
           
            $valido = true ;
            $this->setNombreTeatro($nuevoNombre_Teatro);
        }else {
            $valido = false ;
        }

        return $valido ;
    }

    // funcion para cambiar la direccion del teatro
    public function cambiar_nom_Direccion($nuevoNombre_Direccion){

        if ($nuevoNombre_Direccion !== $this-> getDireccionTeatro() ) {
           
            $valido = true ;
            $this->setDireccionTeatro($nuevoNombre_Direccion);
        }else {
            $valido = false ;
        }

        return $valido ;
    }

    // funcion para cambiar el nombre de la funcion
    public function cambiar_nom_Funcion($posicion , $nuevoNombre_funcion){


    
            
                if ($posicion >= 0 && $posicion <4) {
                    $existe = true ;
                    $this->funciones_Teatro[$posicion]["nombre"] = $nuevoNombre_funcion ;
                  
                }else {
                    
                   
                    $existe = false ;
                }
          

            

             return $existe ;
               
}

    


            // funcion para cambiar el precio de una funcion
       
    public function cambiar_precio_funcion($posicion, $precio){

        if ($posicion >= 0 && $posicion <4) {
            $existe = true ;
            $this->funciones_Teatro[$posicion]["precio"] =$precio ;
          
        }else {
            
           
            $existe = false ;
        }
  

    

     return $existe ;
    
    }

    
}








 

 


  