<!DOCTYPE HTML>
<html lang="de">
<head>
    <?php require_once('../inc/header.php'); ?>
    <?php require_once('workout.class.php'); ?>
</head>
<body>
    <?php
    $workout = new Workout();
    $workouts = $workout->readAll();
    ?>
    <div class="container">
        <div class="mt-2">
            <a class="btn btn-secondary" role="button" href="<?php echo URLROOT; ?>/workout/workouts.php">
                <i class="fa fa-plus"></i> Add Workout
            </a>
        </div>
        <div class="card mt-2">
            <div class="card-header">
                Workout Liste
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-left">Name</th>
                        <th class="text-left">Datum</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($workouts as $workout) : ?>
                            <tr>
                                <td><?php echo $workout['workout_id']; ?></td>
                                <td><?php echo $workout['name']; ?></td>
                                <td><?php echo $workout['datum']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" role="button" href="<?php echo URLROOT; ?>/workout/suchen.php">
                    <i class="fa fa-search"></i> Search Workouts
                </a>
            </div>
        </div>
    </div>
    <?php require_once("../inc/footer.php"); ?>
</body>
</html>