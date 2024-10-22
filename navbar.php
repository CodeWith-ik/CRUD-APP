<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
    <title>Navbar</title>
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img style="width: 55px; height: 40px;" src="crud.png" alt="php">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="create.php" class="nav-link px-2 text-white">CreateTable</a></li>
          <li><a href="insert.php" class="nav-link px-2 text-secondary">InsertData</a></li>
          <li><a href="read.php" class="nav-link px-2 text-secondary">ReadData</a></li>
          <li><a href="update.php" class="nav-link px-2 text-secondary">UpdateData</a></li>
          <li><a href="delete_records.php" class="nav-link px-2 text-secondary">DeleteRecord</a></li>
          <li><a href="drop_table.php" class="nav-link px-2 text-secondary">DropTable</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
</body>
</html>