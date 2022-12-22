<?php
if(isset($_SESSION["user"]))
{
        $customer = Customer::getCustomerById($_SESSION["user"]->getId());

    if(!empty($_POST))
    { 
        
       
    }
}

?>

<section class="text-center mt-5">
    <h2>Ticket kopen </h2>
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
        <div class="mb-3">
            <label class="form-label">Datum</label>
            <input type="datetime-local" min="<?=date("Y-m-d H:i")?>" 
            class="form-control fs-4" name="date" required>
        </div>
        <div class="d-flex justify-content-center">
            <input class="mw-3 btn btn-lg text-light btn-success" type="submit" value="Toevoegen"> 
        </div>
        <div class="text-center mt-3">
                <h5 class="text-danger">
                    <?php if(!empty($error)) {echo $error;}?>
                </h5>
        </div>
    </form>
</div>