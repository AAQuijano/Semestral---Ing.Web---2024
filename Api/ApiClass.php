<?php

class ApiClass{
    private $db_conn;
    private $table_user = "usuario";
    private $table_eventos = "eventos";
    private $table_tickets = "ticket_event";
    private $table_factura = "factura_event";
    private $table_image = "image_event";
    private $table_rol = "rol_usuario";


    public function __construct($db){
        $this->db_conn = $db;
    }

    public function Read_usuarios(){
        try{
            $query = "SELECT * FROM " . $this->table_user;
            $stmt = $this->db_conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Error de sentencia: " . $e->getMessage()."<br>";
            echo "Código de error SQLSTATE: " . $e->getCode()."<br>";
            echo "Detalles adicionales:"."<br>";
            print_r($e->errorInfo);
            return false;
        }
    }

    public function Read_eventos(){
        try{
            $query = "SELECT * FROM " . $this->table_eventos;
            $stmt = $this->db_conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Error de sentencia: " . $e->getMessage()."<br>";
            echo "Código de error SQLSTATE: " . $e->getCode()."<br>";
            echo "Detalles adicionales:"."<br>";
            print_r($e->errorInfo);
            return false;
        }
    }

    public function Read_tickets(){
        try{
            $query = "SELECT * FROM " . $this->table_tickets;
            $stmt = $this->db_conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Error de sentencia: " . $e->getMessage()."<br>";
            echo "Código de error SQLSTATE: " . $e->getCode()."<br>";
            echo "Detalles adicionales:"."<br>";
            print_r($e->errorInfo);
            return false;
        }
    }

    public function Read_facturas(){
        try{
            $query = "SELECT * FROM " . $this->table_factura;
            $stmt = $this->db_conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Error de sentencia: " . $e->getMessage()."<br>";
            echo "Código de error SQLSTATE: " . $e->getCode()."<br>";
            echo "Detalles adicionales:"."<br>";
            print_r($e->errorInfo);
            return false;
        }
    }

    public function Read_images(){
        try{
            $query = "SELECT id_image, id_event, name_image FROM " . $this->table_image;
            $stmt = $this->db_conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Error de sentencia: " . $e->getMessage()."<br>";
            echo "Código de error SQLSTATE: " . $e->getCode()."<br>";
            echo "Detalles adicionales:"."<br>";
            print_r($e->errorInfo);
            return false;
        }
    }

    public function Read_roles(){
        try{
            $query = "SELECT * FROM " . $this->table_rol;
            $stmt = $this->db_conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Error de sentencia: " . $e->getMessage()."<br>";
            echo "Código de error SQLSTATE: " . $e->getCode()."<br>";
            echo "Detalles adicionales:"."<br>";
            print_r($e->errorInfo);
            return false;
        }

    }

}