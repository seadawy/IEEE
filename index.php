<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<?php include "helpers/db.php" ?>

<body>
    <?php include "layout/header.php"; ?>
    <main class="flex justify-center m-auto mt-5">
        <div class="flex flex-col w-full p-10 gap-y-4">
            <?php
            $res = mysqli_query($conn, "SELECT * FROM `tasks`");
            while ($row = mysqli_fetch_assoc($res)):
            ?>
                <div class="bg-blue-400 w-full p-3 rounded-md flex justify-between">
                    <div>
                        <p class="text-3xl text-white font-semibold uppercase my-3"><?= $row['title'] ?></p>
                        <span id="status-<?php echo $row['id'] ?>" class="inline-block
                        <?php
                        switch ($row['status']) {
                            case 'favor':
                                echo ' bg-purple-600 ';
                                break;
                            case 'active':
                                echo ' bg-green-600 ';
                                break;
                            case 'deleted':
                                echo ' bg-red-500 ';
                                break;
                        } ?> rounded-full px-3 py-1 text-xs font-semibold text-white uppercase">
                            <?= $row['status'] ?>
                        </span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <form onsubmit="submitFunction(event,<?= $row['id'] ?>,'deleted')">
                            <button type="submit" class="rounded-full p-2 bg-red-100">❌</button>
                        </form>
                        <form onsubmit="submitFunction(event,<?= $row['id'] ?>,'favor')">
                            <button type="submit" class="rounded-full p-2 bg-purple-200">⭐</button>
                        </form>
                    </div>
                </div>
            <?php endwhile;  ?>
        </div>

    </main>
</body>
<script>
    function submitFunction(event, task_id, status) {
        event.preventDefault();

        $.ajax({
            url: "actions/task_status.php",
            type: "GET",
            data: {
                id: task_id,
                status: status
            },
            success: (data) => {
                paresedData = JSON.parse(data);
                if (paresedData == "deleted") {
                    $("#status-" + task_id).removeClass("bg-yellow-500 bg-green-600").addClass("bg-red-500").text("Deleted");
                } else if (paresedData == "favor") {
                    $("#status-" + task_id).removeClass("bg-yellow-500 bg-green-600 bg-red-500").addClass("bg-purple-600").text("Favor");
                }
            },
            error: {}
        })
    }
</script>

</html>