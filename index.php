<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Internship_Assignment</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
    <center>
        <h3>Data Form</h3>
    </center>
    <div class="container">
        <div class="col-xs-offset-2 col-xs-8 col-xs-offset-2">
        <form  action="form_submit.php" method="post">
            <div>
                <label for="name"><b>Name:</b></label>
            </div>
            <div class="form-group">
                <input type="text" name="name1" placeholder="Name" class="form-control">
            </div>
            <div>
                <label for="city"><b>City:</b></label>
            </div>
            <div class="form-group">
                <input type="text" name="city1" placeholder="City" class="form-control">
            </div>
            <div>
                <label for="occupation"><b>Occupation:</b></label>
            </div>
            <div class="form-group">
                <input type="text" name="occupation1" placeholder="Occupation" class="form-control">
            </div>
            <button type="submit" value="submit" class="btn btn-success">
                           Submit
            </button>
        </form>
    </div>
    </div>
    <div class="container table-responsive">
        <table class="table table-bordered xyz">
            
            
            <center style="background-color: blue">
            <h3 style="color: white">Result Data</h3>
            </center>
                     
            <tr>
  
                    <th>
                   Name 
                </th>
                <th>
                   City 
                </th>
                <th>
                   Occupation 
                </th>
                </tr >
                <?php
                    $con11= mysqli_connect("localhost","root","","example");
                    if($con11)
                    {
                        $sel114="SELECT `name`,`city`,`occupation` FROM `table1`";
                    $res11= mysqli_query($con11,$sel114);
                    
                        $row11= mysqli_num_rows($res11);
                    if($row11>0)
                    {
                    while($row= mysqli_fetch_array($res11,MYSQLI_NUM))
                    {
                    ?>
                    <tr>
                        <td>
                                  <?php
                                  echo $row[0];
                                  ?>
                        </td>
                        <td>
                                    <?php
                                    
                                  echo $row[1];?>
                        </td>
                        <td>
                                    <?php
                                  echo $row[2];?>
                        </td>
                        
                    </tr>
                    <?php
                    }}
                    }?>
                    
        </table>
    </div>
    
    </body>
</html>
