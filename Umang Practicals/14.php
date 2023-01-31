<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include('Database/design.php')?>
    </head>
    <body>
        <div class="col-lg-3 m-auto">
 
 <form method="post" action="14landing.php">
 
 <br><br><div class="container">
 
 <div class="header">
 <h1 class="text-center"> student Registation form  </h1>
 </div><br>

 <label> name: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> year: </label>
 <div>
 <input type="radio" name="year" value="year 1" class="form-check-input">year 1
 <input type="radio" name="year" value="year 2" class="form-check-input">year 2
 <input type="radio" name="year" value="year 3" class="form-check-input">year 3
 </div>
</br>

<label> Hobby: </label>
 <div>
 <input type="checkbox" name="hobby[]" value="Reading" class="form-check-input">Reading   
 <input type="checkbox" name="hobby[]" value="Danceing" class="form-check-input">Danceing
 <input type="checkbox" name="hobby[]" value="Sports" class="form-check-input">Sports
 </div>
</br>
 <label> mob_no: </label>
 <input type="number" name="mobno" class="form-control"> <br>
 <label> Departmant: </label>
 <select name="departmant">
  <option value="IT">IT</option>
  <option value="comp">comp</option>
  <option value="Mech">Mech</option>
  <option value="Cvil">Cevil</option>
</select>
 <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
    </form>
    </body>
</html>