<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- MAIN JS -->
<?php
if($_GET[$editParam]) {
    echo '<script src=js/edit.js></script>';
}
if ($currentPage === 'contact') {
    echo '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&amp;sensor=false"></script><script src="js/google_map.js"></script>';
}
?>
<script src="js/main.js"></script>
</body>
</html>