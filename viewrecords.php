<?php
$title = "View Records";
require_once 'includes/header.php';
require_once 'db/conn.php';
// Get all records
$results = $crud->getAttendees();
?>

<table class="table">
  <tr>
    <th>#</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Specialty</th>
    <th>Actions</th>
  </tr>
  <?php while ($rows = $results->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
      <td><?php echo $rows['attendee_id']; ?></td>
      <td><?php echo $rows['firstname']; ?></td>
      <td><?php echo $rows['lastname']; ?></td>
      <td><?php echo $rows['name']; ?></td>
      <td>
        <a href="view.php?id=<?php echo $rows['attendee_id']; ?>" class="btn btn-primary">View</a>
        <a href="edit.php?id=<?php echo $rows['attendee_id']; ?>" class="btn btn-warning">Edit</a>
      </td>
    </tr>
  <?php } ?>
</table>

<br><br><br>
<?php require_once 'includes/footer.php'; ?>