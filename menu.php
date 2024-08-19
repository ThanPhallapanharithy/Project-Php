<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cbf4812d38.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header class="top-page">
        <div class="navbar navbar-expand-lg bg-body-tertiary navigation container-fluid px-5">
            <div class="logo">
                <img src="Src/icons/image.png" alt="">
            </div>
            <button class="navbar-toggler  fa-solid fa-bars fa-2xl" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

            </button>
            <ul class=" nav-links collapse navbar-collapse" id="navmenu">
                <?php
                $nav = array(
                    "Home" => array("Home", "home.php"),
                    "Product" => array("Product", "product.php"),
                    "About" => array("About", "about.php"),
                    "Contact" => array("Contact", "contact.php")

                );
                $currentpage = basename($_SERVER['PHP_SELF']);

                // Debugging output
                echo "<!-- Current Page: $currentpage -->";
                foreach ($nav as $key => $value) {
                    // Debugging output for each item
                    echo "<!-- Checking: {$value[1]} -->";
                 
                ?>
                    <li class="nav-lists <?php if ($currentpage == $value[1]) {
                                                echo "active";
                                            } ?> "><a href="<?php echo $value[1]; ?>"><?php echo $value[0] ?></a></li>
                <?php
                }
                ?>
            </ul>
            <div class="icon-bel container-login">
                <span><i class="fa-regular fa-bell"></i></span>
                <div class="shopping btn btn-colorshop">
                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                </div>
                <div class="log-btn btn btn-outline-user">
                    <div class="user">
                        <span><i class="fa-solid fa-user"></i></span>
                    </div>
                    <p>Log in</p>
                </div>
            </div>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>