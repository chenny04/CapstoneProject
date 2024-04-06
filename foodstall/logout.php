<?php 

session_start();

if(session_destroy()){
	  ?>
        <script>
            alert("You have been Log Out!");
            window.location.href="../index.php";
            </script>
        <?php
}

?>