<div>
 <h1>Add Car</h1>
 <form method="POST">
   <label for="brand">Brand:</label>
   <input type="text" name="brand" id="brand">
   <label for="model">Model:</label>
   <input type="text" name="model" id="model">
   <label for="year">Year:</label>
   <input type="number" name="year" id="year">
   <label for="price_per_day">Price per Day (€):</label>
   <input type="number" name="price_per_day" id="price_per_day">
   <button type="submit">Add Car</button>
 </form>
 <a href="<?= BASE_URL ?>cars">View All Cars</a>
</div>
