<?php require_once('../../../private/initialize.php'); ?>

<?php

    $kamer_set = find_all_kamers();

?>

<?php $page_title = 'Staff Kamers'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <div id="main-menu">
        <h2>Kamers</h2>
        <ul>
            <!-- <li>
                <a href="<//?php echo url_for('/staff/kamers/index.php'); ?>">
                    Kamers</a>
            </li> -->
        </ul>
    </div>


    <div class="rooms listing">

        <div class="actions">
        <a class="action" href="<?php echo url_for('/staff/kamers/new.php'); ?>">Create New Room</a>
        </div>

        <table class="list">
        <tr>
            <th>roomID</th>
            <th>roomType</th>
            <th>roomImg</th>
            <th>roomShortDesc</th>
            <th>roomLongDesc</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>

        <?php while($kamer = mysqli_fetch_assoc($kamer_set)) { ?>
            <tr>
            <td><?php echo h($kamer['roomID']); ?></td>
            <td><?php echo h($kamer['roomType']); ?></td>
            <td><?php echo h($kamer['roomImg']); ?></td>
            <td><?php echo h($kamer['roomShortDesc']); ?></td>
            <td><?php echo h($kamer['roomLongDesc']); ?></td>

            <td><a class="action" href="<?php echo url_for('/staff/kamers/view.php?id=' . h(u($kamer['roomID']))); ?>">View</a></td>
            <td><a class="action" href="<?php echo url_for('/staff/kamers/edit.php?id=' . h(u($kamer['roomID']))); ?>">Edit</a></td>
            <td><a class="action" href="<?php echo url_for('/staff/kamers/delete.php?id=' . h(u($kamer['roomID']))); ?>">Delete</a></td>

            </tr>
        <?php } ?>
        </table>

            <?php 
            mysqli_free_result($kamer_set);
            ?>

    </div>
</div>
  
<?php include(SHARED_PATH . '/staff_footer.php'); ?>

