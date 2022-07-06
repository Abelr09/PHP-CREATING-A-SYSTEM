<div class="container"></div>
<form action="/proyecto_abel/controllers/bosses/create_boss.php" method="POST">

<form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="name">Boss name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter boss name..." name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="name">Boss lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Boss lastname..." name="lastname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>    <input type="submit" class="btn btn-primary" value="Submit">
    <a href="./public/bosses/list_boss.php"><i class="far fa-list-alt">Boss List</i></a>
</form>
</div>
