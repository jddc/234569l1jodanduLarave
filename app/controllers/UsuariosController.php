<?php 
class UsuariosController extends BaseController{
    
    public function mostrarUsuarios(){
        $usuarios = Usuario::all();
        return View::make('usuario.lista',array('usuarios'=>$usuarios));
    }
}

 ?>