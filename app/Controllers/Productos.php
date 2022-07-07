<?php

namespace App\Controllers;

//Se trae (importa) el modelo de datos
use App\Models\ProductoModelo;

class Productos extends BaseController{
    
    public function index(){
        return view('registroProductos');
    }

    public function registrar(){
       
        //1. Recibo todos los datos enviados desde el formulario (vista)
        //Lo que tengo entre getPost("") es el name que puse a cada input
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //2. Valido que  llego
        if($this->validate('producto')){

            //3. se organizan los datos en un array
            //los naranjados (claves) deben coindicir
            //con el nombre de las columnas de BD
            $datos=array(
                "producto"=>$producto,
                "foto"=>$foto,
                "precio"=>$precio,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo
            );

            //4 intentamos grabar los datos en BD
            try{

                $modelo=new ProductoModelo();
                $modelo->insert($datos);
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',"exito agregando el producto");



            }catch(\Exception $error){

                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
            }
           

        }else{

            $mensaje="tienes datos pendientes";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
        }


        




    }

    public function buscar(){
        try{

            $modelo=new ProductoModelo();
            $resultado1=$modelo->where('tipo','1')->findAll();
            $resultado2=$modelo->where('tipo','2')->findAll();
            $resultado3=$modelo->where('tipo','3')->findAll();
            $resultado4=$modelo->where('tipo','4')->findAll();
            $arreglo=array('perros'=>$resultado1, 'gatos'=>$resultado2, 'aves'=>$resultado3, 'reptiles'=>$resultado4);
            
            return view('listaProductos',$arreglo);


        }catch(\Exception $error){
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());

        }
       
    }

    public function eliminar($id){

       try{

        $modelo=new ProductoModelo();
        $modelo->where('id',$id)->delete();
        return redirect()->to(site_url('/productos/registro'))->with('mensaje',"exito eliminando el producto");




       }catch(\Exception $error){
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());

        }
    }

    public function editar($id){
        $producto=$this->request->getPost("producto");
        $precio=$this->request->getPost("precio");

        $datos=array('producto'=>$producto, 'precio'=>$precio);

        try{

            $modelo=new ProductoModelo();
            $modelo->update($id, $datos);
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',"exito editando el producto");



        }catch(\Exception $error){

            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
        }

    }


    public function productosPerro(){
        try{

            $modelo=new ProductoModelo();
            $resultado=$modelo->where('tipo','1')->findAll();
            $productosPerro=array('productosPerro'=>$resultado);
            return view('listaProductosPerro',$productosPerro); 
    
           }catch(\Exception $error){

            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());

        }
    }


    public function productosGato(){
        try{

            $modelo=new ProductoModelo();
            $resultado=$modelo->where('tipo', '2')->findAll();
            $productosGato=array('productosGato'=>$resultado);
            return view('listaProductosGato',$productosGato);

        }
        catch(\Exception $error){

            return redirect()->to(site_url('/'))->with('mensaje', $error->getMessage());
        }
    }


    public function productosAve(){
        try{

            $modelo=new ProductoModelo();
            $resultado=$modelo->where('tipo', '3')->findAll();
            $productosAve=array('productosAve'=>$resultado);
            return view('listaProductosAve',$productosAve);

        }
        catch(\Exception $error){

            return redirect()->to(site_url('/'))->with('mensaje', $error->getMessage());
        }
    }


    public function productosReptil(){
        try{

            $modelo=new ProductoModelo();
            $resultado=$modelo->where('tipo', '4')->findAll();
            $productosReptil=array('productosReptil'=>$resultado);
            return view('listaProductosReptil',$productosReptil);

        }
        catch(\Exception $error){

            return redirect()->to(site_url('/'))->with('mensaje', $error->getMessage());
        }
    }

}
