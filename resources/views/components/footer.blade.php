{{-- これはフッターです --}}
    <footer role="footer" class="footer">
        
        <nav role="footer-nav">
            <ul>
                <li><a href="/viewtasks" title="Work">Manage Tasks</a></li>
                <li><a href="/addtodo" title="About">Add Tasks</a></li>
                <li><a href="/addbook" title="Blog">Add Books</a></li>
                {{-- <li><a href="contact.html" title="Contact">Contact</a></li> --}}
            </ul>
        </nav>
        <p class="copy-right">&copy; 2021 Saeka Isozumi All rights Reserved</p>
        {{-- <p class="copy-right">&copy; 2015  avana LLC.. All rights Resved</p> --}}
    </footer>
    <!-- footer -->   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{-- <script src="js/jquery.min.js" type="text/javascript"></script> --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- custom -->
    <script src="js/nav.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/effects/masonry.pkgd.min.js"  type="text/javascript"></script>
    <script src="js/effects/imagesloaded.js"  type="text/javascript"></script>
    <script src="js/effects/classie.js"  type="text/javascript"></script>
    <script src="js/effects/AnimOnScroll.js"  type="text/javascript"></script>
    <script src="js/effects/modernizr.custom.js"></script>
    <!-- jquery.countdown -->
    <script src="js/html5shiv.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- script.js --}}
    @yield('script')
</body>
</html>