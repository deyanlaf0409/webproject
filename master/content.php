<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<div class="container" id="cntnr">
        <section id="about" class="section">
            <h2 class="section-header">About Us</h2>
            <p>







            </p>
        </section>

        <section id="shop" class="section">
            <h2 class="section-header">Shop Products</h2>
            <p>
                <?php include 'products/card.html'; ?>
                <?php include 'products/card-2.html'; ?>







            </p>
        </section>

        <section id="membership" class="section">
            <h2 class="section-header">Membership</h2>
            <p>







            </p>
        </section>

        <section id="cart" class="section">
            <h2 class="section-header">Your Products</h2>
            <p>







            </p>
        </section>

        <button id="scrollToTopBtn" class="scroll-to-top-btn"></button>
    </div>

    

    <script>
    const scrollToTopButton = document.querySelector(".scroll-to-top-btn");

    window.addEventListener("scroll", () => {
        if (window.pageYOffset > 100) {
            scrollToTopButton.classList.add("show");
        } else {
            scrollToTopButton.classList.remove("show");
        }
    });

    scrollToTopButton.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Add 'fade-in' class to elements with class 'login-btn' and 'register-btn'
        document.querySelector('.container').classList.add('fade-in');
        });

        var container = document.getElementById("cntnr");
        container.style.opacity = 1;
    </script>
