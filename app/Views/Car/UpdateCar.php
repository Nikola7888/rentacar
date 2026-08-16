<div>
 <h1>Update Car</h1>
 <h2>ID: <?= $car['id']; ?></h2>
 <form method="POST">
   <label for="brand">Brand:</label>
   <input type="text" name="brand" value="<?= $car['brand']; ?>" id="brand">
   <label for="model">Model:</label>
   <input type="text" name="model" value="<?= $car['model']; ?>" id="model">
   <label for="year">Year:</label>
   <input type="number" name="year" value="<?= $car['year']; ?>" id="year">
   <label for="price_per_day">Price per Day (€):</label>
   <input type="number" name="price_per_day" value="<?= $car['price_per_day']; ?>" id="price_per_day">
   <button type="submit">Update Car</button>
 </form>
 <a href="<?= BASE_URL ?>cars">View All Cars</a>
</div>
