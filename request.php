<html>
  <head>
    <meta charset="utf-8">
    <title>Census Report</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="">
      <?php
      $name = $_REQUEST["name"];
      $age = $_REQUEST["age"];
      $occupation = $_REQUEST["occupation"];
      $num = $_REQUEST["num"];
      $eduction = $_REQUEST["education"];
      $male = $_REQUEST["male"];
      $female = $_REQUEST["female"];
      $income = $_REQUEST["income"];
      $mobile = $_REQUEST["mobile"];
      $address = $_REQUEST["address"];
       ?>

       <table>
         
         <tr>
           <td>Name</td>
           <td><?php echo $_REQUEST["name"]; ?></td>
         </tr>
         <tr>
           <td>Age</td>
           <td><?php echo $_REQUEST["age"]; ?></td>
         </tr>
         <tr>
           <td>Occupation</td>
           <td><?php echo $_REQUEST["occupation"]; ?></td>
         </tr>
         <tr>
           <td>Education</td>
           <td><?php  echo $_REQUEST["education"]; ?></td>
         </tr>
         <tr>
           <td>Number Of People in Home</td>
           <td><?php echo $_REQUEST["num"]; ?></td>
         </tr>
         <tr>
           <td>Number of male members</td>
           <td><?php echo $_REQUEST["male"]; ?></td>
         </tr>
         <tr>
           <td>Number of female members</td>
           <td><?php echo $_REQUEST["female"]; ?></td>
         </tr>

         <tr>
           <td>Mobile</td>
           <td><?php echo $_REQUEST["mobile"]; ?></td>
         </tr>
         <tr>
           <td>Address</td>
           <td><?php echo $_REQUEST["address"]; ?></td>
         </tr>
         <tr>
           <td>Income</td>
           <td><?php echo $_REQUEST["income"]; ?></td>
         </tr>


       </table>
    </div>

  </body>
</html>
