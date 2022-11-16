<?php
class Workout {
    private $tabelle = "workouts";

    public function readAll() {
        require('../db.inc.php');
        $sql = "SELECT * FROM " . $this->tabelle . " ORDER BY datum DESC";
        if ($stmt = $pdo->prepare($sql)) {
            $stmt->execute();
            $currWorkouts = $stmt->fetchAll();
        }
        // $workout_table = $this->buildTable($currWorkouts);
        return $currWorkouts;
    }

    private function buildTable($workouts) {
        $table = " <table class='table table-bordered table-hover'>";
        $table .= " <thead class='thead-dark'>";
        $table .= " <tr><th>ID</th><th>Name</th><th>Datum</th></tr>";
        $table .= " </thead>";
        $table .= " <tbody>";
        foreach ($workouts as $workout) {
            $table .= " <tr>";
            $table .= " <td>" . $workout['workout_id'] . "</td>\n\t";
            $table .= " <td>" . $workout['name'] . "</td>\n\t";
            $table .= " <td>" . $workout['datum'] . "</td>\n\t";
            $table .= " </tr>";
        }
        $table .= " </tbody>";
        $table .= "</table>";
        return $table;
    }
}
