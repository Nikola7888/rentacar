<div>
 <h1>User Profile</h1>
 <ul>
   <li>ID: <?= $user['id'] ?></li>
   <li>Username: <?= $user['username'] ?></li>
   <li>Email: <?= $user['email'] ?></li>
   <li>Role: <?= $user['role'] ?></li>
 </ul>

 <h2>Reservations</h2>
 <?php if (!empty($reservations)): ?>
   <table border="1">
     <thead>
       <th>ID</th><th>Car</th><th>Start Date</th><th>End Date</th><th>Status</th>
     </thead>
     <?php foreach ($reservations as $reservation): ?>
     <tr>
       <td><?= $reservation['id'] ?></td>
       <td><?= $reservation['car_id'] ?></td>
       <td><?= $reservation['start_date'] ?></td>
       <td><?= $reservation['end_date'] ?></td>
       <td><?= $reservation['status'] ?></td>
     </tr>
     <?php endforeach; ?>
   </table>
 <?php else: ?>
   <p>No reservations found.</p>
 <?php endif; ?>

 <a href="<?= BASE_URL ?>user/update/<?= $user['id'] ?>">Update Profile</a>
 <form action="<?= BASE_URL ?>user/delete/<?= $user['id'] ?>" method="POST"
       onsubmit="return confirm('Obrisati nalog?');">
   <button type="submit">Delete Account</button>
 </form>
</div>
