<div>
 <h1>Update Reservation</h1>
 <h2>ID: <?= $reservation['id']; ?></h2>
 <form method="POST">
   <label for="start_date">Start Date:</label>
   <input type="date" name="start_date" value="<?= $reservation['start_date']; ?>" id="start_date">
   <label for="end_date">End Date:</label>
   <input type="date" name="end_date" value="<?= $reservation['end_date']; ?>" id="end_date">
   <label for="status">Status:</label>
   <select name="status" id="status">
     <option value="pending" <?= $reservation['status']=='pending'?'selected':''; ?>>Pending</option>
     <option value="confirmed" <?= $reservation['status']=='confirmed'?'selected':''; ?>>Confirmed</option>
     <option value="cancelled" <?= $reservation['status']=='cancelled'?'selected':''; ?>>Cancelled</option>
   </select>
   <button type="submit">Update Reservation</button>
 </form>
 <a href="<?= BASE_URL ?>reservations">View All Reservations</a>
</div>
