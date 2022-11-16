<?php
    try {
        $pdo = new PDO ('mysql:dbname=workouts_php;host=localhost;charset=utf8','root', 'Laurin56' );
    } catch ( PDOException $e ) {
        die ( $e->getMessage () );
    }
?>