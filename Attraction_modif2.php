<?php 
try {
    $conn = new PDO('mysql:hostname=localhost;dbname=projet_php','root','');
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getmessage());
}
$sql = $conn->query("SELECT * FROM attraction;");
$row = $sql->fetchall();
$i = 0;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attraction-modif</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap3/bootstrap-switch.min.css">


    <style>
       input[type=checkbox]{
         height: 0;
         width: 0;
         visibility: hidden;
      }

      label {
         cursor: pointer;
         text-indent: -9999px;
         width: 48px;
         height: 25px;
         background: green;
         display: block;
         border-radius: 100px;
         position: relative;
      }

      label:after {
         content: '';
         position: absolute;
         top: 5px;
         right: 5px;
         width: 15px;
         height: 15px;
         background: #fff;
         border-radius: 90px;
         transition: 0.3s;
      }

      input:checked + label {
         background: grey;
      }

      input:checked + label:after {
         right: calc(100% - 5px);
         transform: translateX(100%);
      }
      .no{
         display: none;
      }
      .input-modif{
         width : 100%;
         height:4.5%;
      }
      #Image-card{
        border-radius: 20px;
        height: 270.010px;
        width: 324.656px;
      }
     input[type=submit]{
      float: right;
     }
     .modif{
      border: 10px solid purple;
      border-radius: 100px;
      margin-top: 5%;
      background-color: purple;
      height: 1400px;
     }
    </style>
    <?php include 'navbar.php';?>
</head>
<body>
    <div class="container">
        <table  class="table table-bordered table-striped " style="width: 700px; margin: auto; ">
            <thead align="center" bgcolor = "purple">
                <tr>
               

                    <th width="45px">Numero</th>
                    <th>Nom</th>
                    <th width="50px">Visible</th>
                    <th width="15px">Enable/Disable</th>
                    <th>ccccc</th>
                </tr>
            </thead>
            <tbody align="center">
                <tr>
                   <td style="width: 12px;"><?= $row[$i]['id_attra'] ?></td>
                   <td><?= $row[$i]['nom_attra'] ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch1" /><label for="switch1">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch2" /><label for="switch2">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch3" /><label for="switch3">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch4" /><label for="switch4">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch5" /><label for="switch5">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch6" /><label for="switch6">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch7" /><label for="switch7">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch8" /><label for="switch8">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td>
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch9" /><label for="switch9">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td> 
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch10" /><label for="switch10">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch11" /><label for="switch11">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch12" /><label for="switch12">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch13" /><label for="switch13">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch14" /><label for="switch14">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch15" /><label for="switch15">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch16" /><label for="switch16">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch17" /><label for="switch17">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
                <tr>
                   <td style="width: 12px;"><?php $i+=1; echo $row[$i]['id_attra'] ?></td>
                   <td><?php  echo $row[$i]['nom_attra']  ?></td> 
                   <td><i class="bi bi-check-lg text-success yes"></i><i class="bi bi-x-lg text-danger no" ></i></td>
                   <td><input type="checkbox" id="switch18" /><label for="switch18">Toggle</label></td>
                   <td><a href="#modif-form" class="text text-warning edit" style="text-decoration: none;"><i class="bi bi-pen-fill"></i>&nbsp;Edit</a></td>
                </tr>
            </tbody>
        </table>
        
         <div class=" modif"><br><br>
            
            <h1 class="text text-center text-primary text-decoration-underline"  id="modif-form">Formulaire de modification</h1>
            <div class="container d-flex justify-content-center">
               <div class="card shadow-lg m-4 col-md-4" style="width: 600px; height: 450px; border-radius: 20px; justify-content: center;">
                  <?php 
                  $sql=$conn->query("SELECT nom_attra,taille_min,capacite,image_attra FROM attraction where id_attra=1");
                  $row=$sql->fetch();
                  ?>
                  <img src="<?= $row['image_attra']?>"  class="card-img-top mt-3" id="Image-card">
                  <div class="card-body pl-3">
                     <h2 class="card-title text-success">
                     <?= $row['nom_attra'];?>
                     </h2><br>
                     <i class="bi bi-person-fill" style="float:left;"> <?=$row['taille_min'];?>cm</i>
                     <i class="bi bi-people-fill" style="float:right;"> <?= $row['capacite']; ?> Personnes</i>
                  </div>
               </div>
            </div>
            <div class="container  d-flex justify-content-center">
               <form method="get" enctype="multipart/form">
                  <center class="h3">Nouveau nom :</center> <input type="text" name="nv-nom" class="input-modif" maxlength=30><br><br>
                  <center class="h3">Nouveau Description :</center><textarea name="nv-desc" id="" cols="60" rows="5" ></textarea><br><br>
                  <center class="h3">Capacité :</center><input type="number" name="nv-nbr" class="input-modif" ><br><br>
                  <center class="h3">Durée :</center> <input type="time" name="nv-time" class="input-modif"><br><br>
                  <center class="h3">Taille minimale :</center><input type="number" name="nv-taille" class="input-modif" max=200><br><br>
                  <center class="h3">Telecharger une nouvelle image :</center><input type="file" name="nv-image" class="input-modif">(.jpg/.png) <br><br>
                  <input type="submit" value="Apply" class="btn btn-outline-primary btn-block">
               </form>
            </div>
            
         </div>
        <?php 
            
            if(isset($_GET['nv-nom'])){

            }
            if(isset($_GET['nv-nom'])){

            }
            if(isset($_GET['nv-nom'])){

            }
            if(isset($_GET['nv-nom'])){

            }
            if(isset($_GET['nv-nom'])){

            }
            if(isset($_GET['nv-nom'])){

            }
            if(isset($_FILES['nv-image'])){
               $name_file = $_FILES['nv-image']['name'];
               $tmp = $_FILES['nv-nom']['tmp_name'];
               if(move_uploaded_file($tmp,'Images'.$name_file)){
                  echo "Image teléchargée avec succés";
               }
            }
            
        ?>
        
    </div>
    <script>
            /*function selectRow(checkbox) {
         var checkboxes = document.getElementsByName('row');
         checkboxes.forEach(function(item) {
            if (item !== checkbox) {
            item.checked = false;
            }
         });
      }*/
      alert("cccccc");
      
      var checkboxes = document.querySelectorAll('input[type="checkbox"]');
      var noVisible = document.getElementsByClassName('no');
      var yesVisible = document.getElementsByClassName('yes');
      var Edit = document.getElementsByClassName('edit');
      var Edit = document.getElementsByClassName('edit');
      var xhr = new XMLHttpRequest();

      Array.from(Edit).forEach(function(item) {
      item.addEventListener('click', function() {
         xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
            // Code à exécuter lorsque la réponse est reçue avec succès
            console.log(xhr.responseText);
            }
         };

         xhr.open("GET", "Edit.php?id=1", true);
         xhr.send();
      });
      });


      



      checkboxes.forEach(function(item){
         item.addEventListener("click",function(){
            if(this.checked == true){
               for(var i=0 ; i<noVisible.length ; i++){
                  if(item == checkboxes[i]){
                     noVisible[i].style.display = 'inline';
                     yesVisible[i].style.display = 'none';
                     item.value = 'off';
         
                  }
               }
               var newValue = this.value;
               localStorage.setItem('inputValue', newValue);
            }
            else{
               for(var i=0 ; i<noVisible.length ; i++){
                  if(item == checkboxes[i]){
                     noVisible[i].style.display = 'none';
                     yesVisible[i].style.display = 'inline';
                     item.value = 'on';
                  }
               }
               
               var newValue = this.value;
               localStorage.setItem('inputValue', newValue);
               
            }
         });
         
      });

    </script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.min.js"></script>
</body>
</html>
<?php 
try {
    $conn = new PDO('mysql:hostname=localhost;dbname=projet_php','root','');
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getmessage());
}

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modifier Tarif</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: white;
            color: purple;
        }
        .container {
            margin-top: 50px;
            text-align: center;
            color: purple;
        }
        table {
            width: 100%;
            margin: 0 auto;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 8px;
            border: 1px solid white;
            margin:auto;
        }
        table td {
            color: black;
        }
        form {
            margin-top: 20px;
        }
        .form-group {
            width: 50%;
            margin: 0 auto;
        }
        .btn-primary {
            background-color: purple;
            border-color: purple;
        }
    </style>
    <?php include 'navbar.php';?>
</head>
<body>
    <div class="container">
        <h1>Ajouter un tarif :</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <div class="form-group">
                <label for="tarif">Tarif :</label>
                <input type="text" class="form-control" id="tarif" name="tarif">
            </div>
            <div class="form-group">
                <label for="adulte">Adulte :</label>
                <input type="number" class="form-control" id="adulte" name="adulte">
            </div>
            <div class="form-group">
                <label for="enfant">Enfant :</label>
                <input type="number" class="form-control" id="enfant" name="enfant">
            </div><br><br>
            <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
            <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
            <button type="submit" class="btn btn-primary" name="supprimer">Supprimer</button><br><br>
        </form>

        <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "parc2";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }?>
        
        <h1 class="text text-center text-primary text-decoration-underline"  id="modif-form">Formulaire de modification</h1>
        <div class="container  d-flex justify-content-center">
            <form method="get" enctype="multipart/form">
                <center class="h3 text-light">Nouveau nom :</center> <input type="text" name="nv-nom" class="input-modif" maxlength=30><br><br>
                <center class="h3 text-light">Nouveau Description :</center><textarea name="nv-desc" id="" cols="60" rows="5" ></textarea><br><br>
                <center class="h3 text-light">Capacité :</center><input type="number" name="nv-nbr" class="input-modif" ><br><br>
                <center class="h3 text-light">Durée :</center> <input type="time" name="nv-time" class="input-modif"><br><br>
                <center class="h3 text-light">Taille minimale :</center><input type="number" name="nv-taille" class="input-modif" max=200><br><br>
                <center class="h3 text-light">Telecharger une nouvelle image :</center><input type="file" name="nv-image" class="input-modif">(.jpg/.png) <br><br>
                <input type="submit" value="Apply" class="btn btn-outline-primary btn-block" name='apply'>
            </form>
        </div>
        <?php
            $sql = $conn->prepare("UPDATE attraction set nom_attra=? , ")
            if(isset($_GET['nv-desc'])){

            }
            if(isset($_GET['nv-nbr'])){

            }
            if(isset($_GET['nv-time'])){
               $str1 = substr($_GET['nv-time'],0,2);
               $str2 = substr($_GET['nv-time'],3);
               echo $str1 . 'min ' . $str2 . 's';
            }
            if(isset($_GET['nv-taille'])){

            }
            if(isset($_FILES['nv-image'])){
               $name_file = $_FILES['nv-image']['name'];
               $tmp = $_FILES['nv-nom']['tmp_name'];
               if(move_uploaded_file($tmp,'Images/'.$name_file)){
                  echo "Image teléchargée avec succés";
               }
            }
        
            ?>
                
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
