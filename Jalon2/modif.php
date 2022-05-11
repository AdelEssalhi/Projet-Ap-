<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier son formulaire</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>

<div class= "container-fluid border">

<h1>Fiche Intervention</h1>
<br>
<br>
<form class="row g-3 border">
<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect02">
    <option selected>Numéro de l'intervention</option>
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
    <option selected>Numéro du client</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
</div>
<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect02">
    <option selected>Numéro du Technicien</option>
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
  <div class="col-12">
    <button type="submit" class="btn btn-success">Modifier</button>
  </div>
  <div class="formulaire">
    <button id= "download-pdf" class="btn btn-primary">PDF</button>
  </div>
</form>
</div>

</body>
<script>
        const downloadPdf = document
            .querySelector("#download-pdf");
  
        const submitForm = document
            .querySelector("#submit-form");
  
        downloadPdf.addEventListener("click", () => {
  
            // Creating the element anchor that
            // will download pdf
            let element = document.createElement("a");
            element.href = "./GFG.pdf";
            element.download = "GFG.pdf";
  
            // Adding the element to body
            document.documentElement.appendChild(element);
  
            // Above code is equivalent to
            // <a href="path of file" download="file name"> 
  
            // onClick property, to trigger download
            element.click();
  
            // Removing the element from body
            document.documentElement.removeChild(element);
  
             // onClick property, to trigger submit form
            submitForm.click();
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>