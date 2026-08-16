<div>
 <h1>All Reservations</h1>
 <table border="1">
   <thead>
        <th>ID</th>
        <th>User</th>
        <th>Car</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th colspan="3">Actions</th>
    </thead>
   <?php foreach ($reservations as $reservation): ?>
   <tr>
     <td><?= $reservation['id'] ?></td>
     <td><?= $reservation['user_id'] ?></td>
     <td><?= $reservation['car_id'] ?></td>
     <td><?= $reservation['start_date'] ?></td>
     <td><?= $reservation['end_date'] ?></td>
     <td><?= $reservation['status'] ?></td>
     <td><a href="<?= BASE_URL ?>reservation/update/<?= $reservation['id'] ?>">Update</a></td>
     <td><a href="<?= BASE_URL ?>reservation/id/<?= $reservation['id'] ?>">View</a></td>
     <td>
       <form action="<?= BASE_URL ?>reservation/delete/<?= $reservation['id'] ?>" method="POST"
             onsubmit="return confirm('Obrisati ovu rezervaciju?');">
         <button type="submit">Delete</button>
       </form>
     </td>
   </tr>
   <?php endforeach; ?>
 </table>
 <a href="<?= BASE_URL ?>reservation/add">Add new reservation</a>
</div>
