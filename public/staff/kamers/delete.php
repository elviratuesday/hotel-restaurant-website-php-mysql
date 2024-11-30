<?php require_once('../../../private/initialize.php'); ?>

<?php 
    // $id = isset($_GET['id']) ? $_GET['id'] : '1';
    $id = $_GET['id'] ?? '1'; // PHP > 7.0

if(is_post_request()) {
 
    $result = delete_room($id);
    redirect_to(url_for('/staff/kamers/index.php'));
} else {
    $kamer = find_kamer_by_id($id);
}

?>

<?php $page_title = 'Delete'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

<a href="<?php echo url_for('/staff/kamers/index.php') ?>">&laquo;Terug naar Kamers</a><br>

<div class="room_delete">
    <h1>Delete Kamer</h1>
    <p>Weet je zeker dat je deze kamer wilt verwijderen?</p>
    <p class="ïtem"><?php echo h($kamer['roomType']); ?></p>

    <form action="<?php echo url_for('/staff/kamers/delete.php?id=' . h(u($kamer['roomID']))); ?>" method="post">
        <div id="operations">
            <input type="submit" name="commit" value="Delete Kamer" />
        </div>
    </form>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>