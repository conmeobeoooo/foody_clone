<?php
    class search_model extends DB {
        public function search($name){
            $sql = "SELECT * FROM `product-item` WHERE name LIKE '%$name%'";
            return mysqli_query($this->con, $sql);
        }
    }
?>