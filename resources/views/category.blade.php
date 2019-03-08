<!DOCTYPE html>
<html>
<head>
   
    <title> Kategori</title>
    
</head>
<body>
   <table border=1>
   <tr>
   <th>ID</th>
   <th>Nama Kategori</th>
   <th>Slug</th>
   </tr>
   <?php
   foreach($Categories as $category){
       ?>
       <tr>
       <td><?php echo $category['category_id'];?></td>
       <td><?php echo $category['name'];?></td>
       <td><?php echo $category['slug'];?></td>
       </tr>
       <?php
   }
   ?>
   </table> 
</body>
</html>