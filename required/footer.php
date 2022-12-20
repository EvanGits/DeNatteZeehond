<footer class="text-center text-lg-start mt-5 fixed-bottom">
    <div class="text-center p-3">
        <?php if ($page == "" || $page == "donation" || $page == "home" || $page == "profile" || $page == "tickets" || $page == "information" || $page == "information" || $page == "contact") : ?>   
            <p>&copy; 2022 | <a href="./" class="text-decoration-none"><span class="text-dark">De Natte Zeehond </span></span></p></a>
            <p><a href="./" class="text-decoration-none"><span class="text-dark"> <img src="./images/insta.png" width="35vh" height="35vh"> <img src="./images/facebook.png" width="35vh" height="35vh"> <img src="./images/linkedin.png" width="35vh" height="35vh"> <img src="./images/tik-tok.png" width="35vh" height="35vh"></span></p></a>
        <?php else: ?>
            <p>&copy; 2022 | <a href="./" class="text-decoration-none"><span class="text-dark">De Natte Zeehond </span></span></p></a>
                <p><a href="./" class="text-decoration-none"><span class="text-dark"> <img src="../images/insta.png" width="35vh" height="35vh"> <img src="../images/facebook.png" width="35vh" height="35vh"> <img src="../images/linkedin.png" width="35vh" height="35vh"> <img src="../images/tik-tok.png" width="35vh" height="35vh"></span></p></a>
        <?php endif; ?>
    </div>
</footer>