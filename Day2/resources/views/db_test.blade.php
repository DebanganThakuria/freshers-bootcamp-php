<!DOCTYPE html>
<html>
<head>
    <title>DB Health</title>
    <style>
        div {
            font-size: 22px;
        }
    </style>
</head>
<body>
<div>
    <?php
    use Illuminate\Support\Facades\DB;
    try {
        if(DB::connection()->getPdo())
        {
            echo "Successfully connected to the database => "
                .DB::connection()->getDatabaseName();
        }
    }
    catch (Exception $e) {
        echo "Unable to connect";
    }
    ?>
</div>
</body>
</html>

