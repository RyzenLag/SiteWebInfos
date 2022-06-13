<?php include 'barre_de_navigation.php'?>
<br>
<br>

<table>
    <?php 
        if (isset($_SESSION['email']) and 'elachaise@free.fr'===$_SESSION['email']){
        $email=$_SESSION['email'];
        $products = query("SELECT * FROM products");
        }
        if (!empty($products))
        { 
    ?>
  
  <?php foreach ($products as $product): 
    //if ($product->id==$id){
    ?>
   <tr>
       <td> <?php echo($product->nom);?></td>
       <td><?php echo($product->marque);?></td>
       <td><?php echo($product->detail);?></td>
   </tr>
   <br>
   <?php endforeach;//} 
    ?>
</table>

<?php include 'header.php';} 
    ?>