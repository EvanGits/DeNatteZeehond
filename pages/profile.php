<?php
    $customer = Customer::getCustomerById(3);
    print_r($customer);
?>

<section class="text-center mt-5">
    <h2>Mijn<span><img style="width:3%; height:auto;" src="images/seal.png"></span><span>Beheren </span></h2>
</section>

<div class="d-flex justify-content-center mt-5 ">
    <form class="form-horizontal p-5 rounded primary-box-color" method="post">
        <div class="mb-3">
            <label class="form-label">Naam:</label>
            <input class="form-control fs-4" type="text" name="name" value="<?=ucwords($customer->getName())?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input class="form-control fs-4" type="email" name="email" value="<?=$customer->getEmail()?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Telefoonnummer:</label>
            <input class="form-control fs-4" type="text" name="phone" value="<?=$customer->getPhone()?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Wachtwoord</label>
            <input class="form-control fs-4" type="password" name="name" value="<?=$customer->getPassword()?>" disabled>
        </div>
    </form>
</div>