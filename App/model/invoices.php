<?php
require_once 'connection.php';

class InvoiceModel
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

    public function countAllInvoice()
    {
        $sql = "SELECT count(*) FROM invoice";
        $response =  mysqli_query($this->conn, $sql);;
        if ($response) {
            return $response->fetch_all(MYSQLI_ASSOC);
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

    public function createInvoiceOnline($Uid, $Cid, $QHid, $banco, $number, $date, $nameTypeImage)
    {
        $sql = "INSERT INTO invoice (Uid, Cid, Did, QHid, PTid, ITid, KDid, Ibanco, Ivoucher, Ivoucher_number, Idate, PSid, IdateCreated) 
        VALUES (?, ?, 1, ?, 1, 1, 1, ?, ?, ?, ?, 2, NOW())";
        $stmt = $this->conn->prepare($sql);
        
        // Asegúrate de que los tipos de datos coinciden con los tipos de columnas en la base de datos
        // Aquí se usa 'i' para INT y 's' para STRING
        $stmt->bind_param("iiissss", $Uid, $Cid, $QHid, $banco, $nameTypeImage, $number, $date);
        
        $response = $stmt->execute();
        $stmt->close();
        
        return $response ? true : false;
    }

    

    public function createInvoicePOS($Uid, $Cid, $QHid, $banco, $number, $date, $nameTypeImage)
    {
        $sql = "INSERT INTO invoice (Uid, Cid, Did, QHid, PTid, ITid, KDid, Ibanco, Ivoucher, Ivoucher_number, Idate, PSid, IdateCreated) 
        VALUES (?, ?, 1, ?, 1, 1, 1, ?, ?, ?, ?, 2, NOW())";
        $stmt = $this->conn->prepare($sql);
        
        // Asegúrate de que los tipos de datos coinciden con los tipos de columnas en la base de datos
        // Aquí se usa 'i' para INT y 's' para STRING
        $stmt->bind_param("iiissss", $Uid, $Cid, $QHid, $banco, $nameTypeImage, $number, $date);
        
        $response = $stmt->execute();
        $stmt->close();
        
        return $response ? true : false;
    }

    
    public function updateStockCourse($QHid){
        $sql = "UPDATE quota_hour SET  QHquota = QHquota - 1 WHERE QHid=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $QHid);
        $response = $stmt->execute();
        $stmt->close();
        return $response ? true : false;
    }

    public function updateInvoiceOnline($id, $name, $lastname, $email, $ruc, $phone, $canton)
    {
        $sql = "UPDATE invoice_data SET IDname=?, IDlastname=?,  IDruc=?, IDemail=?, IDphone=?, IDcanton=? WHERE IDid=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssssi",  $name, $lastname, $ruc, $email,  $phone, $canton, $id);
        $response = $stmt->execute();
        $stmt->close();
        return $response ? true : false;
    }

    public function updateInvoicePOS($id, $name, $lastname, $email, $ruc, $phone, $canton)
    {
        $sql = "UPDATE invoice_data SET IDname=?, IDlastname=?,  IDruc=?, IDemail=?, IDphone=?, IDcanton=? WHERE IDid=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssssi",  $name, $lastname, $ruc, $email,  $phone, $canton, $id);
        $response = $stmt->execute();
        $stmt->close();
        return $response ? true : false;
    }

    public function createInvoiceDataPOS($id, $name, $lastname, $email, $ruc, $phone, $canton)
    {
        $sql = "INSERT INTO invoice_data (Uid, IDname, IDlastname, IDruc, IDemail, IDphone, IDcanton, IDdateCreated) 
        VALUES (?, ?, 1, ?, 1, 1, 1, ?, ?, ?, ?, 2, NOW())";
        $stmt = $this->conn->prepare($sql);
        
        // Asegúrate de que los tipos de datos coinciden con los tipos de columnas en la base de datos
        // Aquí se usa 'i' para INT y 's' para STRING
        $stmt->bind_param("issssss", $id, $name, $lastname, $email, $ruc, $phone, $canton);
        
        $response = $stmt->execute();
        $stmt->close();
        
        return $response ? true : false;
    }
    


    public function updateInvoiceDataPOS($id, $name, $lastname, $email, $ruc, $phone, $canton)
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


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getMyCourseOnlineById($invoiceId)
    {
        $sql = "SELECT  *  FROM invoice AS I 
        INNER JOIN users                AS U  ON I.Uid  = U.Uid
        INNER JOIN invoice_data         AS ID ON I.Uid  = ID.Uid
        INNER JOIN courses              AS C  ON I.Cid  = C.Cid
        INNER JOIN sports               AS S  ON C.Sid  = S.Sid
        INNER JOIN modules              AS M  ON C.Mid  = M.Mid
        INNER JOIN course_info          AS CI ON C.Cid  = CI.Cid
        INNER JOIN discounts            AS D  ON I.Did  = D.Did
        INNER JOIN kits                 AS K  ON C.Kid  = K.Kid
        INNER JOIN quota_hour           AS QH ON I.QHid = QH.QHid
        INNER JOIN scenarios            AS E  ON QH.Eid = E.Eid
        INNER JOIN payment_types        AS PT ON I.PTid = PT.PTid
        INNER JOIN inscription_types    AS IT ON I.ITid = IT.ITid
        INNER JOIN payment_status       AS PS ON I.PSid = PS.PSid
        INNER JOIN kit_delivery         AS KD ON I.KDid = KD.KDid

        WHERE I.Iid= $invoiceId ORDER BY C.CdateCreated asc
        ";
        $response =  mysqli_query($this->conn, $sql);;
        if ($response) {
            $userData = mysqli_fetch_assoc($response);
            mysqli_free_result($response);
            return $userData;
        } else {

            return null;
        }
    }

    public function getAllMyCourse()
    {
        $sql = "SELECT *  FROM invoice AS I
        INNER JOIN users                AS U  ON I.Uid  = U.Uid
        INNER JOIN invoice_data         AS ID ON I.Uid  = ID.Uid
        INNER JOIN courses              AS C  ON I.Cid  = C.Cid
        INNER JOIN sports               AS S  ON C.Sid  = S.Sid
        INNER JOIN modules              AS M  ON C.Mid  = M.Mid
        INNER JOIN course_info          AS CI ON C.Cid  = CI.Cid
        INNER JOIN discounts            AS D  ON I.Did  = D.Did
        INNER JOIN quota_hour           AS QH ON I.QHid = QH.QHid
        INNER JOIN scenarios            AS E  ON QH.Eid = E.Eid
        INNER JOIN payment_types        AS PT ON I.PTid = PT.PTid
        INNER JOIN inscription_types    AS IT ON I.ITid = IT.ITid
        INNER JOIN payment_status       AS PS ON I.PSid = PS.PSid
        INNER JOIN kit_delivery         AS KD ON I.KDid = KD.KDid
     
";
        $response =  $this->conn->query($sql);

        if ($response) {
            return $response->fetch_all(MYSQLI_ASSOC);
        } else {
            return array();
        }
    }


    public function getAllInvoiceOnline()
    {
        $sql = "SELECT *  FROM invoice AS I
        INNER JOIN users                AS U  ON I.Uid  = U.Uid
        INNER JOIN invoice_data         AS ID ON I.Uid  = ID.Uid
        INNER JOIN courses              AS C  ON I.Cid  = C.Cid
        INNER JOIN sports               AS S  ON C.Sid  = S.Sid
        INNER JOIN modules              AS M  ON C.Mid  = M.Mid
        INNER JOIN course_info          AS CI ON C.Cid  = CI.Cid
        INNER JOIN discounts            AS D  ON I.Did  = D.Did
        INNER JOIN quota_hour           AS QH ON I.QHid = QH.QHid
        INNER JOIN scenarios            AS E  ON QH.Eid = E.Eid
        INNER JOIN payment_types        AS PT ON I.PTid = PT.PTid
        INNER JOIN inscription_types    AS IT ON I.ITid = IT.ITid
        INNER JOIN payment_status       AS PS ON I.PSid = PS.PSid
        INNER JOIN kit_delivery         AS KD ON I.KDid = KD.KDid
        where I.ITid = 1
";
        $response =  $this->conn->query($sql);

        if ($response) {
            return $response->fetch_all(MYSQLI_ASSOC);
        } else {
            return array();
        }
    }



    public function getAllInvoicePresent()
    {
        $sql = "SELECT *  FROM invoice AS I
        INNER JOIN users                AS U  ON I.Uid  = U.Uid
        INNER JOIN invoice_data         AS ID ON I.Uid  = ID.Uid
        INNER JOIN courses              AS C  ON I.Cid  = C.Cid
        INNER JOIN sports               AS S  ON C.Sid  = S.Sid
        INNER JOIN modules              AS M  ON C.Mid  = M.Mid
        INNER JOIN course_info          AS CI ON C.Cid  = CI.Cid
        INNER JOIN discounts            AS D  ON I.Did  = D.Did
        INNER JOIN quota_hour           AS QH ON I.QHid = QH.QHid
        INNER JOIN scenarios            AS E  ON QH.Eid = E.Eid
        INNER JOIN payment_types        AS PT ON I.PTid = PT.PTid
        INNER JOIN inscription_types    AS IT ON I.ITid = IT.ITid
        INNER JOIN payment_status       AS PS ON I.PSid = PS.PSid
        INNER JOIN kit_delivery         AS KD ON I.KDid = KD.KDid
        where I.ITid = 2
";
        $response =  $this->conn->query($sql);

        if ($response) {
            return $response->fetch_all(MYSQLI_ASSOC);
        } else {
            return array();
        }
    }





    public function countAllMyCourse()
    {
        $sql = "SELECT count(*) FROM invoice ";
        $response =  mysqli_query($this->conn, $sql);;
        if ($response) {
            return $response->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function getMyCoursePagination($start, $itemsPage)
    {
        $sql = "SELECT * FROM invoice ORDER BY Iid ASC LIMIT $start, $itemsPage";
        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return array(); // Devuelve un array vacío si no hay resultados
        }
    }

    public function searchMyCourse($search)
    {
        // $sql = "SELECT C.*, S.*, QH.*, E.*  FROM invoice AS I
        $sql = "SELECT *  FROM invoice AS I
        INNER JOIN users            AS U  ON I.Uid = U.Uid
        INNER JOIN courses          AS C  ON I.Cid = C.Cid
        INNER JOIN sports           AS S  ON C.Sid = S.Sid
        INNER JOIN modules          AS M  ON C.Mid = M.Mid
        INNER JOIN course_info      AS CI ON C.Cid = CI.Cid
        INNER JOIN discounts        AS D  ON I.Did = D.Did
        INNER JOIN quota_hour       AS QH ON I.QHid = QH.QHid
        INNER JOIN scenarios        AS E  ON QH.Eid = E.Eid
        INNER JOIN payment_types    AS PT ON I.PTid = PT.PTid
        INNER JOIN payment_status   AS PS ON I.PSid = PS.PSid
        INNER JOIN kit_delivery    AS KD ON I.KDid = KD.KDid
        INNER JOIN invoice_data    AS DA ON I.Uid = DA.Uid
            WHERE I.ITid = 1 AND (
                   
                    S.Sname  LIKE '%$search%' OR 
                    DA.IDname  LIKE '%$search%' OR 
                    DA.IDruc  LIKE '%$search%' OR 
                    M.Mname  LIKE '%$search%'  
                    )
                    GROUP BY I.Iid ORDER BY S.Sname ASC
                    ";

        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return array(); // Devuelve un array vacío si no hay resultados
        }
    }


    public function searchMyCoursePerson($search)
    {
        // $sql = "SELECT C.*, S.*, QH.*, E.*  FROM invoice AS I
        $sql = "SELECT *  FROM invoice AS I
        INNER JOIN users            AS U  ON I.Uid = U.Uid
        INNER JOIN courses          AS C  ON I.Cid = C.Cid
        INNER JOIN sports           AS S  ON C.Sid = S.Sid
        INNER JOIN modules          AS M  ON C.Mid = M.Mid
        INNER JOIN course_info      AS CI ON C.Cid = CI.Cid
        INNER JOIN discounts        AS D  ON I.Did = D.Did
        INNER JOIN quota_hour       AS QH ON I.QHid = QH.QHid
        INNER JOIN scenarios        AS E  ON QH.Eid = E.Eid
        INNER JOIN payment_types    AS PT ON I.PTid = PT.PTid
        INNER JOIN payment_status   AS PS ON I.PSid = PS.PSid
        INNER JOIN kit_delivery    AS KD ON I.KDid = KD.KDid
        INNER JOIN invoice_data    AS DA ON I.Uid = DA.Uid
            WHERE I.ITid = 2 AND (
                   
                    S.Sname  LIKE '%$search%' OR 
                    DA.IDname  LIKE '%$search%' OR 
                    DA.IDruc  LIKE '%$search%' OR 
                    M.Mname  LIKE '%$search%'  
                    )
                    GROUP BY I.Iid ORDER BY S.Sname ASC
                    ";

        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return array(); // Devuelve un array vacío si no hay resultados
        }
    }


    public function searchMyCourseAvailable($search)
    {
        $sql = "SELECT *  FROM invoice AS I
        INNER JOIN users            AS U  ON I.Uid = U.Uid
        INNER JOIN courses          AS C  ON I.Cid = C.Cid
        INNER JOIN sports           AS S  ON C.Sid = S.Sid
        INNER JOIN modules          AS M  ON C.Mid = M.Mid
        INNER JOIN course_info      AS CI ON C.Cid = CI.Cid
        INNER JOIN discounts        AS D  ON I.Did = D.Did
        INNER JOIN quota_hour       AS QH ON I.QHid = QH.QHid
        INNER JOIN scenarios        AS E  ON QH.Eid = E.Eid
        INNER JOIN payment_types    AS PT ON I.PTid = PT.PTid
        INNER JOIN payment_status   AS PS ON I.PSid = PS.PSid
        INNER JOIN kit_delivery    AS KD ON I.KDid = KD.KDid
                WHERE 
                    S.Sname  LIKE '%$search%' OR 
                    M.Mname  LIKE '%$search%'  
                    
                    GROUP BY I.Iid ORDER BY S.Sname ASC
                    ";

        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return array(); // Devuelve un array vacío si no hay resultados
        }
    }
}
