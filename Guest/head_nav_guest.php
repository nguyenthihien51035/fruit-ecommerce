<section class="nav_section">
    <div class="container">
        <div class="custom_nav2">
            <nav class="navbar navbar-expand custom_nav-container ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex  flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="fruit.php">Our Fruit </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="testimonial.php">Testimonial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>

                            <?php
                            if (isset($_SESSION['User'])) {
                                // Nếu người dùng đã đăng nhập, hiển thị tên người dùng và link Logout
                                echo "<span class='nav-link text-white'>Hello: " . $_SESSION['User'] . "</span>
                                    <a class='nav-link text-white' href='logout.php'>Logout</a>";
                            } else {
                                // Nếu chưa đăng nhập, hiển thị link Login
                                echo "<a class='nav-link text-white' href='login.php'>Login</a>";
                            }
                            ?>



                        </ul>
                        <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>