<?php
session_start();
session_destroy();
?>
<script>
    localStorage.clear()
</script>
<?php
header("Location:index.php");
?>