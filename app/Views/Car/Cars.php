
<div>
 <h1>All Cars</h1>
 <table border="1">
   <thead>
        <th>ID</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Price per Day</th>
        <th colspan="3">Actions</th>
    </thead>
   <?php foreach ($cars as $car): ?>
   <tr>
     <td><?= $car['id'] ?></td>
     <td><?= $car['brand'] ?></td>
     <td><?= $car['model'] ?></td>
     <td><?= $car['year'] ?></td>
     <td><?= $car['price_per_day'] ?> €</td>
     <td><a href="<?= BASE_URL ?>car/update/<?= $car['id'] ?>">Update</a></td>
     <td><a href="<?= BASE_URL ?>car/id/<?= $car['id'] ?>">View</a></td>
     <td>
       <form action="<?= BASE_URL ?>car/delete/<?= $car['id'] ?>" method="POST"
             onsubmit="return confirm('Obrisati ovaj automobil?');">
         <button type="submit">Delete</button>
       </form>
     </td>
   </tr>
   <?php endforeach; ?>
 </table>
 <a href="<?= BASE_URL ?>car/add">Add new car</a>
</div>