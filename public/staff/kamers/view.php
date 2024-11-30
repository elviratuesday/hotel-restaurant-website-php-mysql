<?php require_once('../../../private/initialize.php'); ?>

<?php 
    // $id = isset($_GET['id']) ? $_GET['id'] : '1';
    $id = $_GET['id'] ?? '1'; // PHP > 7.0


$kamer = find_kamer_by_id($id);

?>


<?php $page_title = 'View'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

<a href="<?php echo url_for('/staff/kamers/index.php') ?>">&laquo;Terug naar Kamers</a><br>

<div class="kamer_show">
    
    <h1> Kamer: <?php echo h($kamer['roomID']); ?></h1>
        
    <div class="attributes">
    <dl>
        <dt>Room ID</dt>
        <dd>
          <dd><?php echo h($kamer['roomID']); ?></dd>
        </dd>
      </dl>
    <dl>
        <dt>Room Type</dt>
        <dd>
          <dd><?php echo h($kamer['roomType']); ?></dd>
        </dd>
      </dl>
        <dt>Room Image</dt>
            <dd>
            <dd><?php echo h($kamer['roomImg']); ?></dd>
            </dd>
        </dl>
        <dl>
        <dt>Room Short Description</dt>
            <dd>
            <dd><?php echo h($kamer['roomShortDesc']); ?></dd>
            </dd>
        </dl>
        <dl>
        <dt>Room Long Description</dt>
            <dd>
            <dd><?php echo h($kamer['roomLongDesc']); ?></dd>
            </dd>
        </dl>

    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>