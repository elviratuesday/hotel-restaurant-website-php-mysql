<?php 

    function find_all_kamers() {
        global $db;

        $sql = "SELECT * FROM kamers ";
        $sql .= "ORDER BY roomID ASC";
        // echo $sql;
        $result = mysqli_query($db, $sql);
        confirm_kamer_set($result);
        return $result;
    }

    function find_kamer_by_id($id) {
        global $db;

        $sql = "SELECT * FROM kamers ";
        $sql .= "WHERE roomID='" . db_escape($db, $id) . "'";
        // echo $sql;
        $result = mysqli_query($db, $sql);
        confirm_kamer_set($result);
        $kamer = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $kamer; 
    }

    function validate_kamer($kamer) {
        $errors = [];
  
        // roomType
        if(is_blank($kamer['roomType'])) {
            $errors[] = "roomType cannot be blank.";
        }
        elseif(!has_length($kamer['roomType'], ['min' => 2, 'max' => 255])) {
            $errors[] = "roomType must be between 2 and 255 characters.";
        }

        // roomImg
        if(is_blank($kamer['roomImg'])) {
            $errors[] = "roomImg cannot be blank.";
        }            
        elseif(!file_exists(path_for($kamer['roomImg']))) {
            $errors[] = "roomImg does not exist.";
        }

        //roomShortDesc
        if(is_blank($kamer['roomShortDesc'])) {
            $errors[] = "roomShortDesc cannot be blank.";
        }
        elseif(!has_length($kamer['roomShortDesc'], ['min' => 2, 'max' => 100])) {
            $errors[] = "roomShortDesc must be between 2 and 100 characters.";
        }

        //roomLongDesc
        if(is_blank($kamer['roomLongDesc'])) {
            $errors[] = "roomLongDesc cannot be blank.";
        }
        elseif(!has_length($kamer['roomLongDesc'], ['min' => 2, 'max' => 255])) {
            $errors[] = "roomLongDesc must be between 2 and 255 characters.";
        }

        return $errors;
    }

    function insert_room($kamer) {
        global $db;

        $errors = validate_kamer($kamer);
        if(!empty($errors)) {
            return $errors;
        }

        $sql = "INSERT INTO kamers ";
        $sql .= "(roomType, roomImg, roomShortDesc, roomLongDesc) ";
        $sql .= "VALUES (";
        $sql .= "'" . db_escape($db, $kamer['roomType']) . "',";
        $sql .= "'" . db_escape($db, $kamer['roomImg']) . "',";
        $sql .= "'" . db_escape($db, $kamer['roomShortDesc']) . "',";
        $sql .= "'" . db_escape($db, $kamer['roomLongDesc']) . "'";
        $sql .= ")";
        $result = mysqli_query($db, $sql);

        if($result) {
            return true;
        } else {
        // INSERT failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
        }
    }

    function update_room($kamer) {
        global $db;

        $errors = validate_kamer($kamer);
        if(!empty($errors)) {
            return $errors;
        }

        $sql = "UPDATE kamers SET ";
        $sql .= "roomType='" . db_escape($db, $kamer['roomType']) . "',";
        $sql .= "roomImg='" . db_escape($db, $kamer['roomImg']) . "',";
        $sql .= "roomShortDesc='" . db_escape($db, $kamer['roomShortDesc']) . "',";
        $sql .= "roomLongDesc='" . db_escape($db, $kamer['roomLongDesc']) . "' ";
        $sql .= "WHERE roomID='" . db_escape($db, $kamer['id']) . "' ";
        $sql .= "LIMIT 1";

        $result = mysqli_query($db, $sql);

        // For UPDATE statements, $result is true/false
        if($result) {
            return true;
        } else {
            // UPDATE failed
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
        }
    }

    function delete_room($id) {
        global $db;

        $sql = "DELETE FROM kamers ";
        $sql .= "WHERE roomID='" . db_escape($db, $id) . "' ";
        $sql .= "LIMIT 1";

        $result = mysqli_query($db, $sql);

        // For DELETE statements, $result is true/false
        if($result) {
            return true;
        } else {
            // DELETE failed
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
        }
    }

?>