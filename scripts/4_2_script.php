<?php
echo "<pre>";
  print_r($_POST);
echo "</pre>";
if (!empty($_POST['name']) && !empty($_POST['Geometricfigure'])) {
  switch ($_POST['Geometricfigure']) {
    case 'kwadrat':
      header('location: ./square.php');
      break;
      case 'prostokąt':
        header('location: ./rectangle.php');
        break;
  }
}else {
?>
<script>
  history.back();
</script>
<?php
}
?>
