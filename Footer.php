            <section class="footer">
                <footer>
                    <div class="container">
                        <form>
                        <li class="nav-item" role="presentation"><form action="Login_System/includes/logout.php" method="POST"><a class="nav-link" href="HardChoice.php">LogOut</a></form></li>
                        
                        <?php 
                            if(isset($_SESSION[""]))
                        ?>
                    
                        </form>
                        <!--
                        <div class="link-social">
                            <dl>
                                <dt><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></dt>
                                <dt><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></dt>
                                <dt><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></dt>
                            </dl>  
                        </div>-->
                    </div>
                    <div class="CopyRights">
                        <p>© 2020 Copyright</p>
                    </div>
                </footer>
            </section>
        </main>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="JS/ScriptOfHomePage.js"></script>
    </body>
</html>