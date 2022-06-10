<?php include('partials/menu.php') ?>

<?php

require_once("../config/constants.php");

$sql = "select booking_id, Email, PhoneNo, Gender, checkin_date, name, h.Address as Address from customer c inner join booking_details bd on bd.customer_id = c.id inner join hostels h on bd.hostel_id = h.id";


?>

<div class="main-content">
    <div class="wrapper">

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Email</th>
                <th>PhoneNo</th>
                <th>Gender</th>
                <th>CheckIn Date</th>
                <th>Hostel Name</th>
                <th>Hostel Address</th>
            </tr>
            <?php $counter = 1; ?>
            <?php foreach ($conn->query($sql)->fetch_all() as $item) { ?>
                <tr>
                    <td><?php echo $counter++; ?></td>
                    <td><?php echo $item[1] ?></td>
                    <td><?php echo $item[2] ?></td>
                    <td><?php echo $item[3] ?></td>
                    <td><?php echo $item[4] ?></td>
                    <td><?php echo $item[5] ?></td>
                    <td><?php echo $item[6] ?></td>
                </tr>
            <?php } ?>



        </table>

    </div>

</div>




<?php include('partials/footer.php') ?>