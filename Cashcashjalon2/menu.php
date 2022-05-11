<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Interventions</title>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/b-2.2.2/b-html5-2.2.2/datatables.min.css"/>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://localhost/cashcash/">CashCash</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>

<br>

<div class="container-fluid">
<div class="row">
    <div class="col">
        

            <button class="nav-link dropdown-toggle btn btn-secondary" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <a class="text-reset" href="#" >Filtre</a>
            </button>

            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="" target="_blank">Mes interventions</a>
            </div>
        </div>
    </div> 
</div>
<br>
<br>

<div class="container-fluid">
<h1>Tableau des interventions</h1>

  <table table id = 'example' class="display" style="width:100% ">
          <thead>
            <tr>
              <th scope="col">Numéro Intervention</th>
              <th scope="col">Date de visite</th>
              <th scope="col">Heure de visite</th>
              <th scope="col">Numéro client</th>
              <th scope="col">Technicien</th>
              <th scope="col">Client</th>
            </tr>
          </thead>
          <tbody>
          <?php
         
          $element = $bdd->query("select * from intervention");
          $result = $element->fetch();
          
          
          while($result = $element ->fetch()){
          echo "<tr>";
          echo "<td><a class= 'text-reset' href='formulaire.php' target= '_blank'>".$result['Numero Intervention']."</a></td>";
          echo "<td>".$result['Date Visite']."</td>";
          echo "<td>".$result['Heure Visite']."</td>";
          echo "<td>".$result['numeroClient']."</td>";
          echo "<td>".$result['idTechnicien']."</td>";
          echo "<td>".$result['idEmploye']."</td>";
          echo "</tr>";
          }

          ?>
          </tbody>
  </table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src=>"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"</script>
<script src=>"https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"</script>
<script src=>"https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"</script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/b-2.2.2/b-html5-2.2.2/datatables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function () {
$('#example').DataTable( {
    "language":{
        "info": "",
        "search": "Recherche",
            "paginate":{
                "next": "Suivant",
                "previous": "Précédent",
             }
    },
} );
$('.dataTables_length').addClass('bs-select');
});
</script>
</html>