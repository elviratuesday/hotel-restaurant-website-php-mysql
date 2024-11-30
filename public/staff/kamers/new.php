<?php require_once('../../../private/initialize.php'); 

$kamer['roomType'] = '';
$kamer['roomImg'] = '';
$kamer['roomShortDesc'] = '';
$kamer['roomLongDesc'] = '';

if(is_post_request()) {

    // Handle form values sent by new.php
    
    $kamer = [];
    $kamer['roomType'] = $_POST['roomType'] ?? '';
    $kamer['roomImg'] = $_POST['roomImg'] ?? '';
    $kamer['roomShortDesc'] = $_POST['roomShortDesc'] ?? '';
    $kamer['roomLongDesc'] = $_POST['roomLongDesc'] ?? '';
    
    $result = insert_room($kamer);
    if($result === true) {
      $new_id = mysqli_insert_id($db);
      redirect_to(url_for('/staff/kamers/view.php?id=' . $new_id));
    } else {
      $errors = $result;
      //var_dump($errors);
    }

  } 

?>

<?php $page_title = 'Create Kamers'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/kamers/index.php'); ?>">&laquo; Terug naar Kamers</a>

  <div class="kamer new">
    <h1>Create Kamer</h1>

    <?php echo display_errors($errors); ?>

    <form action="<?php echo url_for('staff/kamers/new.php'); ?>" method="post">
      <!-- <dl>
        <dt>Room ID</dt>
        <dd><input type="text" name="room_id" value="" /></dd>
      </dl> -->
      <dl>
        <dt>Room Type</dt>
        <dd>
          <dd><input type="text" name="roomType" value="<?php echo h($kamer['roomType']); ?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>Room Image</dt>
        <dd><input type="text" name="roomImg" value="<?php echo h($kamer['roomImg']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Room Short Description</dt>
        <dd><input type="text" name="roomShortDesc" value="<?php echo h($kamer['roomShortDesc']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Room Long Description</dt>
        <dd><input type="text" name="roomLongDesc" value="<?php echo h($kamer['roomLongDesc']); ?>" /></dd>
      </dl>

      <div id="operations">
        <input type="submit" id="submit" value="Create Kamer" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>