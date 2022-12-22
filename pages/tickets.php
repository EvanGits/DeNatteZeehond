<?php
$ticketDate = ""; $check = "";
?>

<section class="text-center mt-5">
    <h2>Uw Tickets</h2>
</section>

<div class="container">
    <table class="table mt-5 bdr shadow" >
        <thead style="background-color: #7895B2;">
            <tr class="text-white">
                <th>Ticket Nummer:</th> 
                <th>Datum:</th>
                <th>Naam:</th>
                <th>Beheren</th>
            </tr>
        </thead>
        <tbody>
           <?php $ticket = Tickets::getAllTicketsById($_SESSION["user"]->getId()); ?>
                <?php for ($i = 0; $i < count($ticket); $i++) : ?>
                    <?php if($ticketDate != $ticket[$i]['date']){$check = !$check;}?>
                    <tr class="<?=($check) ? "bg-light text-dark" : "";?>">
                        <?php for ($j = 0; $j < (count($ticket[$i]) / 2); $j++) : ?>
                            <?php if ($j == 1) : ?>
                                <td>
                                    <?= date("d-m-Y", strtotime($ticket[$i][$j])) ?>
                                    vanaf:
                                    <?= date("H:i", strtotime($ticket[$i][$j])) ?>
                                </td>
                            <?php elseif ($j == 2) : ?>
                                <td><?=ucwords($ticket[$i][$j])?></td>
                            <?php elseif ($j == 3) : ?>
                                <td>
                                    <div class="btn-group d-flex">
                                        <a href="<?= ROOT ?>/tickets/editTicket?id=<?=$ticket[$i][$j]?>"> <button type="button" class="btn btn-info me-5">Wijzigen</button></a>
                                        <a href="<?= ROOT ?>/tickets/deleteTicket?id=<?=$ticket[$i][$j]?>"> <button type="button" class="btn btn-danger">Verwijderen</button></a>
                                    </div>
                                </td>
                            <?php else : ?>
                                <td><?=$ticket[$i][$j]?></td>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </tr>
                    <?php $ticketDate = $ticket[$i]['date']; ?>
                <?php endfor; ?>    
        </tbody>
    </table>
</div>