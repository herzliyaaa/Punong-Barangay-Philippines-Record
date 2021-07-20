
<!-- For MAYOR -->
<?php
if ($_SESSION['role'] == 'Mayor') { ?>
    <script>
        document.getElementById("admin-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Mayor') { ?>
    <script>
        document.getElementById("province-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Mayor') { ?>
    <script>
        document.getElementById("brgy-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Mayor') { ?>
    <script>
        document.getElementById("region-dash").style.display = "none";
    </script>

<?php } ?>

<!-- For ADMIN -->

<?php
if ($_SESSION['role'] == 'Admin') { ?>
    <script>
        document.getElementById("city-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Admin') { ?>
    <script>
        document.getElementById("province-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Admin') { ?>
    <script>
        document.getElementById("brgy-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Admin') { ?>
    <script>
        document.getElementById("region-dash").style.display = "none";
    </script>

<?php } ?>

<!-- For GOV -->

<?php
if ($_SESSION['role'] == 'Governor') { ?>
    <script>
        document.getElementById("city-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Governor') { ?>
    <script>
        document.getElementById("admin-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Governor') { ?>
    <script>
        document.getElementById("brgy-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Governor') { ?>
    <script>
        document.getElementById("province-dash").style.display = "none";
    </script>

<?php } ?>


<!-- For Congressman -->

<?php
if ($_SESSION['role'] == 'Congressman') { ?>
    <script>
        document.getElementById("city-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Congressman') { ?>
    <script>
        document.getElementById("admin-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Congressman') { ?>
    <script>
        document.getElementById("brgy-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Congressman') { ?>
    <script>
        document.getElementById("region-dash").style.display = "none";
    </script>

<?php } ?>

<!-- For Chairman -->

<?php
if ($_SESSION['role'] == 'Chairman') { ?>
    <script>
        document.getElementById("city-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Chairman') { ?>
    <script>
        document.getElementById("admin-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Chairman') { ?>
    <script>
        document.getElementById("province-dash").style.display = "none";
    </script>

<?php } ?>



<?php
if ($_SESSION['role'] == 'Chairman') { ?>
    <script>
        document.getElementById("region-dash").style.display = "none";
    </script>

<?php } ?>

<?php
if ($_SESSION['role'] == 'Mayor') { ?>
    <script>
        document.getElementById("create-users").style.display = "none";
    </script>

<?php } ?>

<?php
if ($_SESSION['role'] == 'Congressman') { ?>
    <script>
        document.getElementById("create-users").style.display = "none";
    </script>

<?php } ?>

<?php
if ($_SESSION['role'] == 'Chairman') { ?>
    <script>
        document.getElementById("create-users").style.display = "none";
    </script>
<?php } ?>

<?php
if ($_SESSION['role'] == 'Governor') { ?>
    <script>
        document.getElementById("create-users").style.display = "none";
    </script>
<?php } ?>




<?php
if ($_SESSION['role'] == 'Mayor') { ?>
    <script>
        document.getElementById("brgy-off").style.display = "none";
    </script>
<?php } ?>

<?php
if ($_SESSION['role'] == 'Chairman') { ?>
    <script>
        document.getElementById("brgy-off").style.display = "none";
    </script>
<?php } ?>


<?php
if ($_SESSION['role'] == 'Congressman') { ?>
    <script>
        document.getElementById("brgy-off").style.display = "none";
    </script>
<?php } ?>

<?php
if ($_SESSION['role'] == 'Governor') { ?>
    <script>
        document.getElementById("brgy-off").style.display = "none";
    </script>
<?php } ?>




 <!-- for Brgy Officials -->

<?php
if ($_SESSION['role'] == 'Governor') { ?>
    <script>
        document.getElementById("chairman-brgy-off").style.display = "none";
    </script>
<?php } ?>


<?php
if ($_SESSION['role'] == 'Congressman') { ?>
    <script>
        document.getElementById("chairman-brgy-off").style.display = "none";
    </script>
<?php } ?>

<?php
if ($_SESSION['role'] == 'Mayor') { ?>
    <script>
        document.getElementById("chairman-brgy-off").style.display = "none";
    </script>
<?php } ?>


<?php
if ($_SESSION['role'] == 'Admin') { ?>
    <script>
        document.getElementById("chairman-brgy-off").style.display = "none";
    </script>

<?php } ?>