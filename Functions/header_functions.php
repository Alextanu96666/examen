<?php
include '../db/db.php';

class Logo {

    
    public function __construct()
    {
        $this->db = new db();
        $this->db = $this->db->connect();
    }


    public function getLogo() {
        
        $stmt = $this->db->prepare("SELECT name, path FROM logo WHERE id = 1");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
            
        }
    }

    
}
?>