<?php
/*
* Target
* - I want to print custom code after every 4 row and keep the odd/even sequence
* Solution:
* - Customize $classes_array[$id] variable
* Note:
* - Computers count like: 0,1,2,3... Not like we, the humans: 1,2,3,4...
* Configuration:  
* - I have view with 10 rows
* - My $classes_array[$id] is "views-row-even row" ("views-row-odd row")
* Logic:
* - Untip row with ID 0, 1, 2, 3 print "odd, even, odd, even."
* - Insert custom row together with row 4 (ID 3) with class="views-row-odd row"
* - Since row 5 (ID 4)  change default order and start as "even, odd, even, odd..."     
*/
?>
<?php foreach ($rows as $id => $row): ?>
  <div class="<?php
  switch ($id) {
    case 1:
    case 3:
    case 4:
    case 6:
    case 8:
    //add more IDs if you have more rows than 10 in your views
      $myclasses = 'views-row-even row';
    break;
    
    default:
      $myclasses = 'views-row-odd row';
  }  
  print $myclasses; ?>"><?php print $row; ?></div>
  <?php
  // print custom code after 4th row
  if ($id == 2): ?>
    <div class="views-row-odd row">
      custom code goes here
    </div>
  <?php endif;
  //end of custom code
  ?>
<?php endforeach; ?>