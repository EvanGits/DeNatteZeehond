<!-- information functions -->
<?php
    $error = "";
    $customer = Customer::getCustomerById(3);
            
        if(!empty($_POST))
        { 
            //delete function
            $login = Login::login($customer->getEmail(),$_POST["password"]);
            if($login)
            {
                $customer->deleteCustomerById();
                header("Location: ". ROOT . "/home");
            }
            else 
            {
                $error = "het wachtwoord is onjuist";    
            }
           
        }
    ?>
    <section class="text-center mt-5">
        <h2>Profiel verwijderen</h2>
    </section>
    <!-- from delete match -->
    <div class="d-flex justify-content-center mt-5">
        <form class="form-horizontal p-5 rounded primary-box-color shadow" method="post">
            <div class="mb-3">
                <label class="form-label">Voer uw wachtwoord in:</label>
                <input type="text" name="password" class="form-control fs-4">
            </div>
            <div class="d-flex justify-content-center">
                <a href="<?=ROOT?>/profile/profile2?id=<?=$customer->getId()?>">
                        <button type="button" class="me-3 btn btn-lg button-color-pressed">
                            Terug
                        </button>
                </a>
                <input class="btn btn-danger btn-lg" type="submit" name="delete" value="Verwijderen">
            </div>
        </form>
        <?php if(!empty($error)) {echo $error;}?>
    </div>