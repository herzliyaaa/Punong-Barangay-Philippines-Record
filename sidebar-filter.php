
<!-- For MAYOR -->
<?php
if ($_SESSION['role'] == 'Mayor') { ?>
    <script>
        document.getElementById("admin-dash").style.display = "none";
        document.getElementById("province-dash").style.display = "none";
        document.getElementById("brgy-dash").style.display = "none";
        document.getElementById("region-dash").style.display = "none";
        document.getElementById("create-users").style.display = "none";
        document.getElementById("brgy-off").style.display = "none";
        document.getElementById("chairman-brgy-off").style.display = "none";
        document.getElementById("congressman-brgy-off").style.display = "none";
        document.getElementById("gov-brgy-off").style.display = "none";
    </script>

<?php } ?>




<!-- For ADMIN -->

<?php
if ($_SESSION['role'] == 'Admin') { ?>
    <script>
        document.getElementById("city-dash").style.display = "none";
        document.getElementById("province-dash").style.display = "none";
        document.getElementById("brgy-dash").style.display = "none";
        document.getElementById("region-dash").style.display = "none";
        document.getElementById("congressman-brgy-off").style.display = "none";
        document.getElementById("chairman-brgy-off").style.display = "none";
        document.getElementById("gov-brgy-off").style.display = "none";
        document.getElementById("mayor-brgy-off").style.display = "none";
    </script>

<?php } ?>





<!-- For GOV -->

<?php
if ($_SESSION['role'] == 'Governor') { ?>
    <script>
        document.getElementById("city-dash").style.display = "none";
        document.getElementById("admin-dash").style.display = "none";
        document.getElementById("brgy-dash").style.display = "none";
        document.getElementById("province-dash").style.display = "none";
        document.getElementById("create-users").style.display = "none";
        document.getElementById("brgy-off").style.display = "none";
        document.getElementById("chairman-brgy-off").style.display = "none";
        document.getElementById("congressman-brgy-off").style.display = "none";
        document.getElementById("mayor-brgy-off").style.display = "none";
    </script>

<?php } ?>




<!-- For Congressman -->


<?php
if ($_SESSION['role'] == 'Congressman') { ?>
    <script>
        document.getElementById("admin-dash").style.display = "none";
        document.getElementById("brgy-dash").style.display = "none";
        document.getElementById("city-dash").style.display = "none";
        document.getElementById("region-dash").style.display = "none";
        document.getElementById("create-users").style.display = "none";
        document.getElementById("brgy-off").style.display = "none";
        document.getElementById("chairman-brgy-off").style.display = "none";
        document.getElementById("gov-brgy-off").style.display = "none";
        document.getElementById("mayor-brgy-off").style.display = "none";
    </script>

<?php } ?>




<!-- For Chairman -->

<?php
if ($_SESSION['role'] == 'Chairman') { ?>
    <script>
        document.getElementById("city-dash").style.display = "none";
        document.getElementById("admin-dash").style.display = "none";
        document.getElementById("province-dash").style.display = "none";
        document.getElementById("region-dash").style.display = "none";
        document.getElementById("create-users").style.display = "none";
        document.getElementById("brgy-off").style.display = "none";
        document.getElementById("congressman-brgy-off").style.display = "none";
        document.getElementById("gov-brgy-off").style.display = "none";
        document.getElementById("mayor-brgy-off").style.display = "none";
    </script>

<?php } ?>



