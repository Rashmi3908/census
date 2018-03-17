<html>
  <head>
    <meta charset="utf-8">
    <title>Census Report</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <div class="">
      <?php
      $name = $_POST["name"];
      $age = $_POST["age"];
      $occupation = $_POST["occupation"];
      $num = $_POST["num"];
      $eduction = $_POST["education"];
      $male = $_POST["male"];
      $female = $_POST["female"];
      $income = $_POST["income"];
      $mobile = $_POST["mobile"];
      $address = $_POST["address"];
       ?>

       <table>
         
         <tr>
           <td>Name</td>
           <td><?php echo $_POST["name"]; ?></td>
         </tr>
         <tr>
           <td>Age</td>
           <td><?php echo $_POST["age"]; ?></td>
         </tr>
         <tr>
           <td>Occupation</td>
           <td><?php echo $_POST["occupation"]; ?></td>
         </tr>
         <tr>
           <td>Education</td>
           <td><?php  echo $_POST["education"]; ?></td>
         </tr>
         <tr>
           <td>Number Of People in Home</td>
           <td><?php echo $_POST["num"]; ?></td>
         </tr>
         <tr>
           <td>Number of male members</td>
           <td><?php echo $_POST["male"]; ?></td>
         </tr>
         <tr>
           <td>Number of female members</td>
           <td><?php echo $_POST["female"]; ?></td>
         </tr>

         <tr>
           <td>Mobile</td>
           <td><?php echo $_POST["mobile"]; ?></td>
         </tr>
         <tr>
           <td>Address</td>
           <td><?php echo $_POST["address"]; ?></td>
         </tr>
         <tr>
           <td>Income</td>
           <td><?php echo $_POST["income"]; ?></td>
         </tr>


       </table>
    </div>

  </body>
</html>
