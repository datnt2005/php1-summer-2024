<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <script src="https://kit.fontawesome.com/1d3d4a43fd.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <link
            href="https://fonts.googleapis.com/css2?family=Chilanka&amp;family=Montserrat:wght@300;400;500&...lay=swap"
            rel="stylesheet">
            <script src="index.js"></script>
            <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/contact.css">
  <title>waggy</title>
</head>

<body>
  <header>
    <div class="container py-2">
      <div class="row py-4 pb-0 pb-sm-4 align-items-center ">

        <div class="col-sm-4 col-lg-3 text-center text-sm-start">
          <div class="main-logo">
            <a href="http://localhost/FPT%20PHP/PHP_1/TIENDAT/index_user.php">
              <img src="http://localhost/FPT%20PHP/PHP_1/TIENDAT/pic/logo.png" alt="logo" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
          <div class="search-bar border rounded-2 px-3 border-dark-subtle">
            <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
              <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 10,000 products">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"></path>
              </svg>
            </form>
          </div>
        </div>

        <div class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
          <div class="support-box text-end d-none d-xl-block">
            <span class="fs-6 secondary-font text-muted">Phone</span>
            <h5 class="mb-0">+980-34984089</h5>
          </div>
          <div class="support-box text-end d-none d-xl-block">
            <span class="fs-6 secondary-font text-muted">Email</span>
            <h5 class="mb-0">waggy@gmail.com</h5>
          </div>



        </div>
      </div>
    </div>

    <div class="container-fluid">
      <hr class="m-0">
    </div>

    <div class="container">
      <nav class="main-menu d-flex navbar navbar-expand-lg ">

        <div class="d-flex d-lg-none align-items-end mt-3">
          <ul class="d-flex justify-content-end list-unstyled m-0">
            <li>
              <a href="account.html" class="mx-3">
                <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
              </a>
            </li>
            <li>
              <a href="wishlist.html" class="mx-3">
                <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
              </a>
            </li>

            <li>
              <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                  03
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
                <iconify-icon icon="tabler:search" class="fs-4"></iconify-icon>
                
              </a>
            </li>
          </ul>

        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body justify-content-between">
            <select class="filter-categories border-0 mb-0 me-5">
              <option>Shop by Category</option>
              <option>Clothes</option>
              <option>Food</option>
              <option>Food</option>
              <option>Toy</option>
            </select>

            <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
              <li class="nav-item">
                <a href="http://localhost/FPT%20PHP/PHP_1/TIENDAT/index_user.php" class="nav-link active" style="color: var(--color);">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" id="pages" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu" aria-labelledby="pages">
                  <li><a href="about.html" class="dropdown-item">About Us<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="http://localhost/FPT%20PHP/PHP_1/TIENDAT/shop.php" class="dropdown-item">Shop<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="single-product.html" class="dropdown-item">Single Product<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="cart.html" class="dropdown-item">Cart<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="wishlist.html" class="dropdown-item">Wishlist<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="checkout.html" class="dropdown-item">Checkout<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="blog.html" class="dropdown-item">Blog<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="single-post.html" class="dropdown-item">Single Post<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="contact.html" class="dropdown-item">Contact<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="faqs.html" class="dropdown-item">FAQs<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="account.html" class="dropdown-item">Account<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="thank-you.html" class="dropdown-item">Thankyou<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="error.html" class="dropdown-item">Error 404<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                  <li><a href="styles.html" class="dropdown-item">Styles<span class="badge bg-success text-dark ms-2">PRO</span></a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="http://localhost/FPT%20PHP/PHP_1/TIENDAT/shop.php" class="nav-link">Shop</a>
              </li>
              <li class="nav-item">
                <a href="blog.html" class="nav-link">Blog</a>
              </li>
              <li class="nav-item">
                <a href="contact.html" class="nav-link">Contact</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Others</a>
              </li>
              <li class="nav-item">
                <a href="https://templatesjungle.gumroad.com/l/waggy-pet-shop-ecommerce-html-website-template" class="nav-link fw-bold text-dark" target="_blank">GET PRO</a>
              </li>
            </ul>

            <div class="d-none d-lg-flex align-items-end">
            <div class="item-end nav-flex-center">
                        <ul class="nav">
                            <li class="nav-item dropdown" >
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                 role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user" style="color: #000;"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                    <li><a class="dropdown-item" href="#">Thông tin tài khoản</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/FPT%20PHP/PHP_1/TIENDAT/list_order.php">order history</a></li>
                                    <!-- <li><a class="dropdown-item" href="list_user.php">User</a></li> -->
                                    <li><a class="dropdown-item" href="http://localhost/FPT%20PHP/PHP_1/TIENDAT/login.php"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="wishlish.html"><i class="fa-solid fa-heart" style="color: #000;"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/FPT%20PHP/PHP_1/TIENDAT/carts/cart.php"><i class="fa-solid fa-cart-shopping" style="color: #000;"></i></a>
                            </li>
                        
                
                </li>
              </ul>
              

            </div>

          </div>

        </div>

      </nav>



    </div>
  </header> 