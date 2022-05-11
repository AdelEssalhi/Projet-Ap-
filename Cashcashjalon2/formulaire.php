<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Intervention</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class= "container-fluid border">

        <h1>Fiche Intervention</h1>
        <input type="text">
        <br>
        <br>
        <form class="row g-3 border">
        <div class="input-group mb-3">
          <select class="form-select" id="inputGroupSelect02">
            <option selected>2</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <select class="form-select" id="inputGroupSelect02">
            <option selected>3</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <select class="form-select" id="inputGroupSelect02">
            <option selected>2</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <div class="col-12">
            <label for="date" class="form-label">Date de visite</label>
            <input type="date" class="form-control" id="date">
          </div>
          <div class="col-12">
            <label for="time" class="form-label">Heure de visite</label>
            <input type="time" class="form-control" id="time">
          </div>
          
          <button class="nav-link btn btn-secondary text-reset" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <a class="text-reset" href="modif.php" >Modifier</a>
            </button>
        </form>
        </div>
</body>
</html>