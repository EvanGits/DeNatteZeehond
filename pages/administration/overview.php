<main>
    <div class="container col-12">
        <div class="col-12 mt-5">
        <h1 class="text-center">Overzicht</h1>
                    <table class="table mt-5 bdr table-striped shadow" >
                        <thead style="background-color: #7895B2;">
                            <tr class="text-white">
                                <th>Id:</th>
                                <th>Naam:</th>
                                <th>Email:</th>
                                <th>Telefoon:</th>
                                <th>Bedrag:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (Customer::selectCustomerList() as $customer) :?>
                            <tr>
                                <?php for ($i=0; $i<(count($customer)/2) ; $i++) : ?>
                                    <td><?= $customer[$i]?></td> 
                                
                                    
                                <?php endfor; ?>    
                            </tr>
                            <?php endforeach; ?>                  
                        </tbody>
                    </table>
        </div>
    </div>
</main>

<td><a href="#" class="btn btn-info">Wijzigen</a></td>