<?php
class Login {
//    private $conn;
//
////    public function __construct($conn) {
////        $this->conn = $conn;
////    }

    // public function login($email, $password) {
    //     $query = 'SELECT * FROM customer WHERE email = :email AND password = :password';
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute(['email' => $email, 'password' => $password]);
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

    public static function login($email, $password)
    {
        $params = array(":email"=>$email, ":password"=>$password);
        $sth = DBConn::PDO()->prepare("SELECT * FROM customer WHERE email = :email AND password = :password");
        $sth->execute($params);
        return $sth->fetchAll();
    }
}
