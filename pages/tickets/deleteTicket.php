<?php
$ticket = Tickets::getTicketById($_GET["id"]);
$customer = Customer::getCustomerById($ticket->getCustomer_id());


if(!empty($_POST["delete"]))
{
    if(Customer::getCustomerById($_SESSION["user"]->getId())->getcustomerStatusId() == 2) 
    {
        //delete function if admin
        $ticket->deleteTicketById();
        header("Location: ". ROOT . "/tickets");
    }
    else
    {
        //delete function if member
        $login = Login::login($customer->getEmail(),$_POST["password"]);
        if($login)
        {
            $ticket->deleteTicketById();
            header("Location: ". ROOT . "/tickets");
        }
        else 
        {
            $error = "het wachtwoord is onjuist";    
        }
    }
}


?>

<section class="text-center mt-5">
    <h2>Ticket Verwijderen </h2>
</section>

<div class="d-flex justify-content-center mt-5">
    <form class="form-horizontal p-5 rounded primary-box-color shadow" method="post">
    <div class="mb-3">
            <label class="form-label">Ticket Nummer:</label>
            <input class="form-control fs-4" type="text" name="name" value="<?=ucwords($ticket->getId())?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Datum:</label>
            <input type="datetime-local" min="<?=date("Y-m-d H:i")?>" 
            class="form-control fs-4" name="date" value="<?=$ticket->getDate()?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Naam:</label>
            <input class="form-control fs-4" type="text" name="name" value="<?=ucwords($customer->getName())?>" disabled>
        </div>
        <!-- member check -->
        <?php if(Customer::getCustomerById($_SESSION["user"]->getId())->getcustomerStatusId() == 1) : ?>
            <div class="mb-3">
                <label class="form-label">Voer uw wachtwoord in:</label>
                <input class="form-control fs-4" type="password" name="password" required>
            </div>
        <?php endif; ?>
        <div class="d-flex justify-content-center">
                <a href="<?=ROOT?>/tickets">
                    <button type="button" class="me-3 btn btn-lg text-light button-color-pressed">
                        Terug
                    </button>
                </a>
                <input class="btn btn-danger btn-lg" name="delete" type="submit" value="Verwijderen">
            </div>
                <div class="text-center text-danger mt-3">
                    <h5>
                        <?php if(!empty($error)) {echo $error;}?>
                    </h5>
                </div>
        </form>
    </form>
</div>