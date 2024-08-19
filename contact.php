<?php
include("menu.php")
?>
<link rel="stylesheet" href="contact.css">

<body>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6">
                    <h1 class="fw-bold">CONTACT</h1>
                    <p class="text">Feel free to contact us any time, we will get back to you as soon as we can!</p>
                    <form action="" class="mx-3">
                        <div class="inputs-group my-5">
                            <input type="text" class="inputs" placeholder=" " id="name">
                            <label class="inputs-label" for="name">Enter your name</label>
                        </div>
                        <div class="inputs-group">
                            <input type="text" class="inputs" placeholder=" " id="email">
                            <label class="inputs-label" for="email">Enter your email</label>
                        </div>
                        <div class="inputs-group my-5">
                            <input type="text" class="inputs" placeholder=" " id="phone">
                            <label class="inputs-label" for="phone">Phone number</label>
                        </div>
                        <div class="inputs-group">
                            <input type="text" class="inputs" placeholder=" " id="name">
                            <label class="inputs-label" for="name">Enter your name</label>
                        </div>
                        <div class="my-5">
                            <a href="" class="btn btn-primary btn-send fs-4">Send</a>
                        </div>
                    </form>
                </div>
                <div class="col-xxl-6 container-info1">
                    <div>
                        <div class="info">
                            <h3 class="fs-1 text-center">Information</h3>
                            <span class="fs-1 "><i class="fa-regular fa-envelope"></i></span>
                            <p>BITCOFFEE@gmail.com</p>
                            <span class="fs-1"><i class="fa-solid fa-phone"></i></span>
                            <p>+885 12 345 678</p>
                            <span class="fs-1"><i class="fa-regular fa-building"></i></span>
                            <p>#1397, Hanoi Friendship Blvd., Khan Saensokh, Phnom Penh, Cambodia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
include("footer.php")
?>