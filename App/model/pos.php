<?php
require_once 'connection.php';

class PosModel
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAllInvoice()
    {
        $sql = "SELECT * FROM invoice_data";
        $response =  $this->conn->query($sql);
    
        if ($response) {
            return $response->fetch_all(MYSQLI_ASSOC);
        } else {
            return array();
        }
    }
    
    public function getCountAllInvoice()
    {
        $sql = "SELECT COUNT(*) as count FROM invoice_data";
        $response =  $this->conn->query($sql);
        if ($response) {
            $row = $response->fetch_assoc();
            return $row['count'];
        } else {
            return 0;
        }
    }
    
    public function getInvoiceDataId($Uid)
    {
        $sql = "SELECT ID.* FROM invoice_data as ID
        INNER JOIN users as U ON ID.Uid = U.Uid
            WHERE ID.Uid = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $Uid);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return array();
        }
    }
    public function getByIdInvoice($id)
    {
        $sql = "SELECT COUNT(*) as count FROM invoice_data as R
        INNER JOIN users_and_Invoice as UR
        ON R.Rid = UR.Rid
        where R.Rid = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result) {
            $row = $result->fetch_assoc();
            return $row['count'];
        }
        return 0;
    }


    public function createInvoice($id, $name, $lastname, $email, $ruc, $phone, $canton)
    {
        $sql = "INSERT INTO invoice_data (Uid, IDname, IDlastname, IDruc, IDemail, IDphone, IDcanton, IDdateCreated) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("issssss", $id, $name, $lastname, $email, $ruc, $phone, $canton);
        $response = $stmt->execute();
        $stmt->close();
        return $response ? true : false;
    }
    

    public function updateInvoice($id, $name, $lastname, $email, $ruc, $phone, $canton)
    {
        $sql = "UPDATE invoice_data SET IDname=?, IDlastname=?,  IDruc=?, IDemail=?, IDphone=?, IDcanton=? WHERE IDid=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssssi",  $name, $lastname, $ruc, $email,  $phone, $canton, $id);
        $response = $stmt->execute();
        $stmt->close();
        return $response ? true : false;
    }
    
    public function deleteInvoice($id)
    {
        $sql = "DELETE FROM invoice_data WHERE Rid=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $response = $stmt->execute();
        $stmt->close();
        return $response ? true : false;
    }
    
   
}
