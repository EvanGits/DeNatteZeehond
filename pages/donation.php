<?php

class customer
{
    private function __construct(
        private int $id,
        private string $name,
        private string $email,
        private string $phone,
        private string $password,
        private string $donation,
        private int $customerStatusId,
    ){
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getDonation(): string
    {
        return $this->donation;
    }

    public function getcustomerStatusId(): string
    {
        return $this->customerStatusId;
    }

    public static function check(string $name): ?customer
    {
        $params = array(":name" => $name);
        $sth = PDO()->prepare("SELECT `name`, `email`, `phone`, `password`, `donation`, `customer_status_id` FROM `customer` WHERE `name` = :name LIMIT 1;");
        $sth->execute($params);
    }

    public static function get(int $id): ?Customer
    {
        $params = array(":id" => $id);
    }

        
}



?>