<?php 
$database = new DBConn();
  

?> 

<?php if(isset($_GET['id']) && is_numeric($_GET['id']) ): ?>

<?php $row = $db->find("customer", $_GET['id']); ?>
<?php if($row): ?>

    <div class="container"> 
        <div class="row"> 
            <div class="col-sm-12"> 
                <h2 class="p-3 col text-center mt-5 text-white bg-primary">Klant verwijderen</h2>
            </div>
            <?php if($db->deleteCustomerById("customer",$row['id'])): ?>
                <h2 class="p-2 col text-center mt-5 alert alert-success"> <?php echo $success; ?> </h2>

        </div>
    </div>

    <?php endif; ?>
<?php endif; ?>
