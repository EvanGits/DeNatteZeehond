<?php
$ranking = 1;
?>
<main>
    <div class="container col-12" style="margin-top: 8%;">
        <div class="row g-4 py-5">
            <div class="col-5">
                <div class="justify-content-center">
                    <div class="col-lg-10 primary-box-color shadow rounded">
                        <div class="wrap">
                            <img src="" alt="">
                            <div class="login-wrap p4 p-md-5">
                                <h3 class="text-center text-white">Donatie plaatsen</h3>
                                <img src="./images/seal.png" class="mt-5 mx-auto d-flex" width="150vh" height="150vh">
                                <form method="post" class="form">
                                    <div class="form-group mt-5">
                                        <input type="number" id="Bedrag" class="form-control" name="bedrag" placeholder="Bedrag" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <button type="submit" class="form-control btn bg-success text-white shadow rounded mt-2"><h4>Doneren</h4></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="col-lg-12">
                    <h1 class="text-center">Top donateurs!</h1>
                    <table class="table mt-5 bdr table-striped shadow" >
                        <thead style="background-color: #7895B2;">
                            <tr class="text-white">
                                <th>Top donateurs:</th>
                                <th>Naam:</th>
                                <th>Bedrag:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (Customer::selectDonastionList() as $customer) : ?>
                            <tr>
                                <?php for ($i=0; $i<(count($customer)/2) ; $i++) : ?>
                                    <?php if ($i == 0) : ?>
                                        <td><?= $ranking++ ?></td>
                                    <?php elseif($i == 1) : ?>
                                        <td><?= ucwords($customer[$i])?></td>
                                    <?php else : ?>    
                                        <td><?= $customer[$i] ?></td>
                                    <?php endif; ?>
                                <?php endfor;?>     
                            </tr>
                            <?php endforeach;?>                  
                        </tbody>
                    </table>
                    <p class="text-center mt-5">
                        Namens ons team, bedankt voor het doneren. <br>
                        Dankzij uw bijdragen kunnen wij onze zeehonden voorzien van een beter leven.
                    </p>
                </div>
            </div>            
        </div>
    </div>
</main>