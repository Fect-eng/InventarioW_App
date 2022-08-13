
<?php 
//en desarrollo
 class clientesNaturales{

    public function agregaClienteNatural($datos){

        $c= new conectar();
        $conexion=$c->conexion();

        $idusuario=$_SESSION['iduser'];    //sesion de usuario

        $sql="INSERT into clientenatural (id_cliente_natural ,
                                    nombre_natural,
                                    apellido_natural,
                                    direccion_natural,
                                    email_natural,
                                    telefono_natural,
                                    dni_natural)
                        values ('$idusuario',
                                '$datos[0]',
                                '$datos[1]',
                                '$datos[2]',
                                '$datos[3]',
                                '$datos[4]',
                                '$datos[5]')";
            //var_dump($conexion,$sql);
                               
        return mysqli_query($conexion,$sql);	

       
    }

    
    
}

?>