<?php 
$group_nr = 1;                  // first group number
$last_row = count($rows) -1;    // last row
$wrapper  = 3;                  // put a wrapper around every 3 rows
?>
<?php foreach ($rows as $id => $row): ?>
<?php if ($id % $wrapper == 0) {print '<div class="group group-'.$group_nr.'">'; $i = 0; $group_nr++; } ?>
    <div class="views-row-<?php print $id+1; ?>">
        <?php print $row; ?>
    </div>
<?php $i++; if ($i == $wrapper || $id == $last_row) print '</div>'; ?>
<?php endforeach; ?>