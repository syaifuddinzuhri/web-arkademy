<?php 

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;
    private $result;

    public function __construct()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try{
            $this->dbh = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
            $this->dbh->set_charset("utf8mb4");
        } catch (Exception $e) {
            error_log($e->getMessage());
            exit('Error connecting to database');
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($type, $param){
        $this->stmt->bind_param($type, $param);
    }
    
    public function bind_array($param)
    {
        call_user_func_array(array($this->stmt, 'bind_param'), $param);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        $this->result = $this->stmt->get_result();
        return $this->result->fetch_all(MYSQLI_ASSOC);
    }

    public function single()
    {
        $this->execute();
        $this->result = $this->stmt->get_result();
        return $this->result->fetch_assoc();
    }

    public function rowCount()
    {
        $this->result = $this->stmt->get_result();
        return $this->result->fetch_row();
    }
}


?>