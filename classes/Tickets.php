<?php

class Tickets
{
    public function __construct(
        private int $id,
        private string $datetime,
        private int $customer_id,
    ){}
    public function getId()
    {
        return $this->id;
    }
    public function getDate()
    {
        return $this->datetime;
    }
    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    public static function getAllTickets()
    {
        $sth = DBConn::PDO()->prepare("SELECT ticket.id, ticket.date, customer.name, ticket.id FROM ticket 
        LEFT JOIN customer ON ticket.customer_id = customer.id ORDER BY ticket.date");
        $sth->execute();

        return $sth->fetchAll();
    }

    public static function getAllTicketsById($id) : array
    {
        $params = array(":id" => $id);
        $sth = DBConn::Pdo()->prepare("SELECT ticket.id, ticket.date, customer.name, ticket.id FROM ticket 
        LEFT JOIN customer ON ticket.customer_id = customer.id WHERE ticket.customer_id = :id ORDER BY ticket.date");
        $sth->execute($params);
        return $sth->fetchAll();
    }

    public static function getTicketById($id): ?Tickets
    {
        $params = array(":id" => $id);
        $sth = DBConn::PDO()->prepare("SELECT * FROM ticket WHERE id = :id");
        $sth->execute($params);
        if($row = $sth->fetch())
            return new Tickets($row["id"], $row["date"], $row["customer_id"]);
        return null;
    }

    public function deleteTicketById() : ?int
    {
        $params = array(":id"=>$this->id);
        $sth = DBConn::PDO()->prepare("DELETE FROM ticket WHERE id = :id");
        $sth->execute($params);
        return 1;
    }

    public function updateTicketById() : ?int
    {
        $params = array(
            ":id"=>$this->id, 
            ":date"=>$this->datetimee, 
            ":customer_id"=>$this->customer_id);
        $sth = DBConn::PDO()->prepare("UPDATE ticket SET date=:date, customer_id=:customer_id WHERE id = :id");
        $sth->execute($params);
        return $sth->rowcount();
    }
}
?>