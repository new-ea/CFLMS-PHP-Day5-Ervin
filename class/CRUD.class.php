<?php 
class CRUD extends DBConnection {
    private $conn = "";
    /**
     * function for reading data from DB
     * 
     * @param table has to be given
     */
    public function read($table, $fields = "*", $join = "", $where = "", $orderby = ""){
        $this->conn = parent::__construct();
        $fields = is_array($fields) ? implode(", ", $fields) : $fields;
        $join = is_array($join) ? implode(" ", $join) : $join;

        $sql = "SELECT ".$fields." FROM ".$table." ".$join." ".$where." ".$orderby." ;";
        $result = $this->conn->query($sql);
        $return = $result->fetch_all(MYSQLI_ASSOC);
        mysqli_close($this->conn);
        return $return;
    }
}