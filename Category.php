<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Category page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel = "stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyBlog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Category.php">Category 1</a></li>
            <li><a class="dropdown-item" href="Category.php">Category 2</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login / Signup</a>
        </li>
      </ul>
      
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 

<div class="container mt-5">
    <h1 class="display-4 mb-4 fs-3" >Category 1</h1>
    <section class= "d-flex">
        <main class="main-blog">
        <div class="card main-blog-card mb-5">
  <img src="upload/blog/kereta_1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam alias placeat iure facere quis velit nostrum assumenda saepe veniam nam illo tempore, repudiandae odio fugit. Dolorum quaerat praesentium labore nobis!</p>
    <p class="card-text"><small class = "text-body-secondary">Last update 3 mins ago</small></p>
    <a href="#" class="btn btn-primary">read more</a>
  </div>
</div>

<div class="card main-blog-card mb-5">
  <img src="upload/blog/kereta_1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam alias placeat iure facere quis velit nostrum assumenda saepe veniam nam illo tempore, repudiandae odio fugit. Dolorum quaerat praesentium labore nobis!</p>
    <p class="card-text"><small class = "text-body-secondary">Last update 3 mins ago</small></p>
    <a href="#" class="btn btn-primary">read more</a>
  </div>

        </main>
        <aside class="aside-main">
        <div class="list-group category-aside">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    Category
  </a>
  <a href="#" class="list-group-item list-group-item-action">Category 1</a>
  <a href="#" class="list-group-item list-group-item-action">Category 2</a>
  <a href="#" class="list-group-item list-group-item-action">Category 3</a>
</div>
        </aside>
    </section>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>