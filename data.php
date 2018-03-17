<html>
  <head>
    <meta charset="utf-8">
    <title>Census Report</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <div class="">
      <?php
      $name = $_GET["name"];
      $age = $_GET["age"];
      $occupation = $_GET["occupation"];
      $num = $_GET["num"];
      $eduction = $_GET["education"];
      $male = $_GET["male"];
      $female = $_GET["female"];
      $income = $_GET["income"];
      $mobile = $_GET["mobile"];
      $address = $_GET["address"];
       ?>

       <table>
        
         <tr>
           <td>Name</td>
           <td><?php echo $_GET["name"]; ?></td>
         </tr>
         <tr>
           <td>Age</td>
           <td><?php echo $_GET["age"]; ?></td>
         </tr>
         <tr>
           <td>Occupation</td>
           <td><?php echo $_GET["occupation"]; ?></td>
         </tr>
         <tr>
           <td>Education</td>
           <td><?php  echo $_GET["education"]; ?></td>
         </tr>
         <tr>
           <td>Number Of People in Home</td>
           <td><?php echo $_GET["num"]; ?></td>
         </tr>
         <tr>
           <td>Number of male members</td>
           <td><?php echo $_GET["male"]; ?></td>
         </tr>
         <tr>
           <td>Number of female members</td>
           <td><?php echo $_GET["female"]; ?></td>
         </tr>

         <tr>
           <td>Mobile</td>
           <td><?php echo $_GET["mobile"]; ?></td>
         </tr>
         <tr>
           <td>Address</td>
           <td><?php echo $_GET["address"]; ?></td>
         </tr>
         <tr>
           <td>Income</td>
           <td><?php echo $_GET["income"]; ?></td>
         </tr>


       </table>
    </div>

  </body>
</html>
