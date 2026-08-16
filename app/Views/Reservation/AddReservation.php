<div>
 <h1>Add Reservation</h1>
 <form method="POST">
   <label for="user_id">User ID:</label>
   <input type="number" name="user_id" id="user_id">
   <label for="car_id">Car ID:</label>
   <input type="number" name="car_id" id="car_id">
   <label for="start_date">Start Date:</label>
   <input type="date" name="start_date" id="start_date">
   <label for="end_date">End Date:</label>
   <input type="date" name="end_date" id="end_date">
   <label for="status">Status:</label>
   <select name="status" id="status">
     <option value="pending">Pending</option>
     <option value="confirmed">Confirmed</option>
     <option value="cancelled">Cancelled</option>
   </select>
   <button type="submit">Add Reservation</button>
 </form>
 <a href="<?= BASE_URL ?>reservations">View All Reservations</a>
</div>
