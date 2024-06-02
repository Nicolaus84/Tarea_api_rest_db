<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function test()//: string
    {
        
        //$valor = [
        //    'test 0'=> 'ejemplo',
        //    
        //    'test 1'=> 'ejemplo',
        //    
        //    'test 2'=> 'ejemplo',
        //    
        //    'test 3'=> 'ejemplo',

        //    'id'=> '000'
        //];
        
        $this->db = \Config\Database::connect();

        $query = $this->db->query('select * from tarea_1.clientes;');
        
        $valor= ($query->getResult());

        return $this->response->setJson($valor);


        //Para retornar la variable valor en json
        //return $this->response->setJson($valor);

        //echo 'Hola';
        
        //return view('welcome_message');
    }
}
