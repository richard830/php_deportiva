CREATE TABLE
  users (
    Uid INT PRIMARY KEY AUTO_INCREMENT,
    Uname VARCHAR(50) NOT NULL,
    Ulastname VARCHAR(50) NOT NULL,
    Ucredential VARCHAR(15) NOT NULL,
    Ubirthdate DATETIME NOT NULL,
    Ugender VARCHAR(50) NOT NULL,
    Ucountry VARCHAR(50) NOT NULL,
    Ucity VARCHAR(50) NOT NULL,
    Unickname VARCHAR(50) NOT NULL,
    Uemail VARCHAR(100) NOT NULL,
    Upassword VARCHAR(255) NOT NULL,
    Uwhatsapp VARCHAR(255) NOT NULL,
    Ufacebook VARCHAR(255) NULL,
    Utiktok VARCHAR(255) NULL,
    Uimage varchar(254) NULL,
    Ustatus INT NOT NULL,
    UdateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UdateUpdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  );

CREATE TABLE
  roles (
    Rid INT PRIMARY KEY AUTO_INCREMENT,
    Rname VARCHAR(50) UNIQUE,
    RdateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Rdateupdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  );

CREATE TABLE
  login_history (
    LHid INT PRIMARY KEY AUTO_INCREMENT,
    Uid INT,
    LHloginTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (Uid) REFERENCES users (Uid)
  );

CREATE TABLE
  users_and_roles (
    Uid INT,
    Rid INT,
    URdateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    URdateUpdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (Uid, Rid),
    FOREIGN KEY (Uid) REFERENCES users (Uid),
    FOREIGN KEY (Rid) REFERENCES roles (Rid)
  );

CREATE TABLE
  permissions (
    Pid INT PRIMARY KEY AUTO_INCREMENT,
    Pname VARCHAR(50) UNIQUE,
    Pdescription VARCHAR(255),
    PdateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PdateUpdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  );

CREATE TABLE
  roles_permissions (
    Rid INT,
    Pid INT,
    RPstatus INT (2) NOT NULL,
    RPdateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    RPdateUpdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (Rid, Pid),
    FOREIGN KEY (Rid) REFERENCES roles (Rid),
    FOREIGN KEY (Pid) REFERENCES permissions (Pid)
  );

CREATE TABLE
  sports (
    Sid INT PRIMARY KEY AUTO_INCREMENT,
    Sname varchar(255) NOT NULL,
    Sdescription text DEFAULT NULL,
    Simage varchar(200) NULL,
    Sstatus int (3) NOT NULL,
    SdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
    SdateUpdated timestamp NOT NULL DEFAULT current_timestamp()
  );

CREATE TABLE
  hours (
    Hid INT PRIMARY KEY AUTO_INCREMENT,
    Hname varchar(255) NOT NULL,
    Hstatus int (3) NOT NULL,
    HdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
    HdateUpdated timestamp NOT NULL DEFAULT current_timestamp()
  );

-- CREATE TABLE sports_hours (
--     Sid INT,
--     Hid INT,
--     SHstatus INT(2) NOT NULL,
--     SHdateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
--     SHdateUpdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
--     PRIMARY KEY (Sid, Hid),
--     FOREIGN KEY (Sid) REFERENCES sports(Sid),
--     FOREIGN KEY (Hid) REFERENCES hours(Hid)
-- );
CREATE TABLE
  modules (
    Mid INT PRIMARY KEY AUTO_INCREMENT,
    Mname varchar(255) NOT NULL,
    Mdescription text DEFAULT NULL,
    Mimage varchar(200) NULL,
    Mstart date NOT NULL,
    Mend date NOT NULL,
    Mstatus int (3) NOT NULL,
    MdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
    MdateUpdated timestamp NOT NULL DEFAULT current_timestamp()
  );

CREATE TABLE
  quotas (
    Qid INT PRIMARY KEY AUTO_INCREMENT,
    Qamount varchar(10) NOT NULL,
    Qstatus int (3) NOT NULL,
    QdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
    QdateUpdated timestamp NOT NULL DEFAULT current_timestamp()
  );

CREATE TABLE
  prices (
    Pid INT PRIMARY KEY AUTO_INCREMENT,
    Pprice DECIMAL(10, 2) NOT NULL, -- 10 dígitos en total, 2 decimales
    Pstatus INT (3) NOT NULL,
    PdateCreated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    PdateUpdated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
  );

CREATE TABLE
  discounts (
    Did INT PRIMARY KEY AUTO_INCREMENT,
    Dpercentage varchar(10) NOT NULL,
    Dvalue DECIMAL(10, 2) NOT NULL,
    Ddescription VARCHAR(250) NULL,
    Dstatus int (3) NOT NULL,
    DdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
    DdateUpdated timestamp NOT NULL DEFAULT current_timestamp()
  );

CREATE TABLE
  scenarios (
    Eid INT PRIMARY KEY AUTO_INCREMENT,
    Ename varchar(100) NOT NULL,
    Estatus int (3) NOT NULL,
    EdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
    EdateUpdated timestamp NOT NULL DEFAULT current_timestamp()
  );

-- Ajustes en la tabla courses
CREATE TABLE
  courses (
    Cid INT PRIMARY KEY AUTO_INCREMENT,
    Mid INT,
    Sid INT,
    Did INT,
    Cstatus TINYINT NOT NULL, -- Cambio en el tipo de datos
    CdateCreated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    CdateUpdated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(), -- Se actualiza automáticamente
    FOREIGN KEY (Mid) REFERENCES modules (Mid),
    FOREIGN KEY (Sid) REFERENCES sports (Sid),
    FOREIGN KEY (Did) REFERENCES discounts (Did) FOREIGN KEY (Eid) REFERENCES scenarios (Eid)
  );

-- Ajustes en la tabla hours
CREATE TABLE
  quota_hour (
    QHid INT PRIMARY KEY AUTO_INCREMENT,
    Cid INT,
    Eid INT,
    QHquota INT,
    QHstart TIME NOT NULL, -- Cambio en el tipo de datos
    QHend TIME NOT NULL, -- Cambio en el tipo de datos
    QHdateCreated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    QHdateUpdated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(), -- Se actualiza automáticamente
    FOREIGN KEY (Cid) REFERENCES courses (Cid),
    FOREIGN KEY (Eid) REFERENCES scenarios (Eid)
  );

-- Ajustes en la tabla info_courses
CREATE TABLE
  course_info (
    CIid INT PRIMARY KEY AUTO_INCREMENT,
    Cid INT,
    CIprice DECIMAL(10, 2) NOT NULL,
    CIimage VARCHAR(255) NULL,
    CIquota INT NOT NULL,
    CIkit INT NOT NULL,
    CICdateCreated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    CICdateUpdated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    FOREIGN KEY (Cid) REFERENCES courses (Cid)
  );

-- CREATE TABLE courses (
--   Cid INT PRIMARY KEY AUTO_INCREMENT,
--   Mid INT,
--   Sid INT,
--   Did INT,
--   Cprice DECIMAL(10,2) NOT NULL, 
--   Cquota integer NOT NULL,
--   Cimage varchar(255)  NULL,
--   Hid date NOT NULL,
--   Cend date NOT NULL,
--   Cstatus integer(3) NOT NULL,
--   CdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
--   CdateUpdated timestamp NOT NULL DEFAULT current_timestamp(),
--   FOREIGN KEY (Mid) REFERENCES modules(Mid),
--   FOREIGN KEY (Sid) REFERENCES sports(Sid),
--   FOREIGN KEY (Did) REFERENCES discounts(Did)
-- );
CREATE TABLE
  history_stock (
    HSid INT AUTO_INCREMENT PRIMARY KEY,
    Cid INT,
    HSpreviousQuantity INT,
    HSnewQuantity INT,
    HSdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
    HSateUpdated timestamp NOT NULL DEFAULT current_timestamp(),
    FOREIGN KEY (Cid) REFERENCES courses (Cid)
  );

CREATE TABLE
  IF NOT EXISTS shopping_bag_users (
    SBUid BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Cid BIGINT UNSIGNED NOT NULL,
    SBUdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
    SBUateUpdated timestamp NOT NULL DEFAULT current_timestamp(),
    FOREIGN KEY (Cid) REFERENCES courses (Cid),
    ON UPDATE CASCADE ON DELETE CASCADE
  )
CREATE TABLE
  IF NOT EXISTS kits (
    Kid BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Kname varchar(100) NOT NULL,
    Kstatus int (3) NOT NULL,
    KdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
    KdateUpdated timestamp NOT NULL DEFAULT current_timestamp()
  )
CREATE TABLE
  IF NOT EXISTS invoice_data (
    IDid BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Uid int (3),
    IDname varchar(100) NOT NULL,
    IDlastname varchar(100) NOT NULL,
    IDruc varchar(13) NOT NULL,
    IDemail varchar(50) NOT NULL,
    IDphone varchar(13) NOT NULL,
    IDcanton varchar(13) NOT NULL,
    IDdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
    IDdateUpdated timestamp NOT NULL DEFAULT current_timestamp(),
    FOREIGN KEY (Uid) REFERENCES users (Uid) ON UPDATE CASCADE ON DELETE CASCADE
  )
CREATE TABLE
  payment_status (
    PSid int (3) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    PScodigo int (3) NOT NULL,
    PSname varchar(20) NOT NULL,
    PScolor varchar(15) NOT NULL
  )
CREATE TABLE
  kit_delivery (
    KDid int (3) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    KDcodigo int (3) NOT NULL,
    KDname varchar(20) NOT NULL,
    KDcolor varchar(15) NOT NULL
  )
CREATE TABLE
  IF NOT EXISTS payment_types (
    TPid int (3) AUTO_INCREMENT PRIMARY KEY NOT NULL,
   TPname varchar(50) NOT NULL,
   TPdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
   TPdateUpdated timestamp NOT NULL DEFAULT current_timestamp()
  )

CREATE TABLE
  IF NOT EXISTS inscription_types (
  ITid int AUTO_INCREMENT PRIMARY KEY NOT NULL,
   ITname varchar(50) NOT NULL,
   ITdateCreated timestamp NOT NULL DEFAULT current_timestamp(),
   ITdateUpdated timestamp NOT NULL DEFAULT current_timestamp()
  )

CREATE TABLE IF NOT EXISTS invoice (
    Iid BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Uid INT(3) NOT NULL,
    Cid INT(3) NOT NULL,
    Did INT(3) NULL,
    QHid INT(3) NOT NULL,
    PTid INT(3) NOT NULL,
    ITid INT(3) NOT NULL,
    KDid INT(3) NOT NULL,
    Iimage VARCHAR(255)  NULL,
    Icomprobante VARCHAR(100)  NULL,
    Ivoucher VARCHAR(13)  NULL,
    Idate VARCHAR(50) NULL,
    PSid INT(3) NOT NULL,
    IdateCreated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    IdateUpdated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (Uid) REFERENCES users (Uid) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (Cid) REFERENCES courses (Cid) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (Did) REFERENCES discounts (Did) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (QHid) REFERENCES quota_hour (QHid) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (PTid) REFERENCES payment_types (PTid) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (ITid) REFERENCES inscription_types (ITid) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (KDid) REFERENCES kit_delivery (KDid) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (PSid) REFERENCES payment_status (PSid) ON UPDATE CASCADE ON DELETE CASCADE
);








ALTER TABLE course_info 
ADD CONSTRAINT course_info_ibfk_1 
FOREIGN KEY (Cid) 
REFERENCES courses (Cid);
