<div class="container"></div>
<form action="/proyecto_abel/controllers/userss/create_users.php" method="POST">

<form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="name">User name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name..." name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="name">User lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter user lastname..." name="lastname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>    <input type="submit" class="btn btn-primary" value="Submit">
    <a href="./public/users/list_user.php"><i class="far fa-list-alt">View List</i></a>
</form>
</div>
