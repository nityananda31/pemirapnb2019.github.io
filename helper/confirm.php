<?php
    function alert($massage,$location){
        echo "<script>
            confirm('$massage');
            location.href = '$location';
        </script>";
    }
?>