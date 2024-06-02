<?php
/*
namespace App\Controllers;

use CodeIgniter\Controller;

class ClienteController extends Controller
{
    public function insert()
    {
        $this->db = \Config\Database::connect();

        // Obtener datos del POST request
        $id = $this->request->getPost('id');
        $nombre = $this->request->getPost('nombre');
        $apellido = $this->request->getPost('apellido');
        $cedula = $this->request->getPost('cedula');

        // Construir la consulta de inserción
        $sql = "INSERT INTO tarea_1.clientes (id,nombre, apellido, cedula) VALUES (006,'Roberto','Lopez','1301251265')";
        
        // Ejecutar la consulta
        $this->db->query($sql, [$id,$nombre, $apellido, $cedula]);

        // Verificar si la inserción fue exitosa
        if ($this->db->affectedRows() > 0) {
            return $this->response->setJSON(['message' => 'Datos insertados correctamente']);
        } else {
            return $this->response->setJSON(['message' => 'Error al insertar datos']);
        }
    }
}
*/



namespace App\Controllers;

use CodeIgniter\Controller;

class ClienteController extends BaseController
{
    public function insert()
    {
        $db = \Config\Database::connect();

        // Obtener datos del POST request
        $id = $this->request->getPost('id');
        $nombre = $this->request->getPost('nombre');
        $apellido = $this->request->getPost('apellido');
        $cedula = $this->request->getPost('cedula');

        echo "ID: " . $id . "<br>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $apellido . "<br>";
        echo "Cedula: " . $cedula . "<br>";



        // Verificar que los datos no estén vacíos
        if (empty($id) || empty($nombre) || empty($apellido) || empty($cedula)) {
            return $this->response->setJSON(['message' => 'Todos los campos son obligatorios']);
        }

        // Construir la consulta de inserción
        $sql = "INSERT INTO tarea_1.clientes ('id', 'nombre', 'apellido', 'cedula') VALUES (?,?,?,?)";

        // Ejecutar la consulta
        $db->query($sql, [$id, $nombre, $apellido, $cedula]);

        // Verificar si la inserción fue exitosa
        if ($db->affectedRows() > 0) {
            return $this->response->setJSON(['message' => 'Datos insertados correctamente']);
        } else {
            return $this->response->setJSON(['message' => 'Error al insertar datos']);
        }
    }
}

