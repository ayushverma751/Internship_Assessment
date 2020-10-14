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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>
      function formsubmit()
      {
          $.ajax({
              type:'POST',
              url:'form_submit.php',
              data:$('#form1').serialize(),
              success:function(response){
                  $('#success').html(response);
              }
          });          
          var form=document.getElementById('form1').reset();
          return false;
      }
  </script>
  <script>
      var ajax=new XMLHttpRequest();
      var method="GET";
      var url="form_submit2.php";
      var asynchronous=true;
      ajax.open(method,url,asynchronous);
      ajax.send();
      ajax.onreadystatechange=function()
      {
          if(this.readyState==4 && this.status==200)
          {
              var data=JSON.parse(this.responseText);
              console.log(data);
              var html="";
              for(var a=0; a<data.length;a++)
              {
                  var name=data[a].name;
                  var city=data[a].city;
                  var occupation=data[a].occupation;
                  html +="<tr>";
                  html +="<td>"+name+"</td>";
                  html +="<td>"+city+"</td>";
                  html +="<td>"+occupation+"</td>";
                  html +="</tr>";
              }
              document.getElementById('data').innerHTML=html;
          }
      }
  </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
    <center>
        <h3>Data Form</h3>
    </center>
    <div class="container">
        <div class="col-xs-offset-2 col-xs-8 col-xs-offset-2">
            <form action="form_submit.php" id="form1" method="post" onsubmit="return formsubmit();">
            <div>
                <label for="name"><b>Name:</b></label>
            </div>
            <div class="form-group">
                <input type="text" name="name1" placeholder="Name" id="name" class="form-control">
            </div>
            <div>
                <label for="city"><b>City:</b></label>
            </div>
            <div class="form-group">
                <input type="text" name="city1" placeholder="City" id="city" class="form-control">
            </div>
            <div>
                <label for="occupation"><b>Occupation:</b></label>
            </div>
            <div class="form-group">
                <input type="text" name="occupation1" placeholder="Occupation" id="occu" class="form-control">
            </div>
                <button type="submit" id="btn1" value="submit" class="btn btn-success" onclick="return chk()">
                           Submit
            </button>
        </form>
            <h3 id="success"></h3>
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
                <tbody id="data">
                    
                </tbody>
        </table>
    </div>
    </body>
</html>
