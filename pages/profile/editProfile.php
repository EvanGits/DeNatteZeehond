<?php
    $customer = Customer::getCustomerById($_GET["id"]);

    if(!empty($_POST))
    { 
        //delete function
        $login = true; //Login::login($customer->getEmail(),$_POST["password"]);
        if($login)
        {
            (new Customer($_SESSION["user"]->getId(), $_POST["name"], $_POST["email"], $_POST["phone"], $_SESSION["user"]->getPassword(), $_SESSION["user"]->getDonation(), $_SESSION["user"]->getcustomerStatusId()))->updateCustomerById();
            //(new Customer($customer->getId(), $_POST["name"], $_POST["email"], $_POST["phone"], $customer->getPassword(), $customer->getDonation(), $customer->getcustomerStatusId()))->updateCustomerById();
            //(new Customer($customer->getId(), $customer->getName(), $customer->getEmail(), $customer->getPhone(), $_POST["status"]))->updateCustomer();
            header("Location: ". ROOT . "/profile?id=");
        }
        else 
        {
            $error = "het wachtwoord is onjuist";    
        }
       
    }
?>

<section class="text-center mt-5">
    <h2>Profiel Beheren </h2>
</section>

<div class="d-flex justify-content-center mt-5">
    <form class="form-horizontal p-5 rounded primary-box-color shadow" method="post">
        <div class="mb-3">
            <label class="form-label">Naam:</label>
            <input class="form-control fs-4" type="text" name="name" value="<?=ucwords($customer->getName())?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input class="form-control fs-4" type="email" name="email" value="<?=$customer->getEmail()?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Telefoonnummer:</label>
            <input class="form-control fs-4" type="text" name="phone" value="<?=$customer->getPhone()?>" required>
        </div>
        <div class="d-flex justify-content-center">
            <a href="<?=ROOT?>/profile?id=<?=$customer->getId()?>">
                <button type="button" class="me-3 btn btn-lg text-light button-color-pressed">
                    Terug
                </button>
            </a>
            <input class="mw-3 btn btn-lg text-light btn-success" type="submit" value="Veranderen"> 
        </div>
    </form>
</div>