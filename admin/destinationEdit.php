<?php
// include_once "adminLayout/adminHeader.php";
include_once '../head.php';
$editId = $_GET['editId'];
$query = "SELECT * FROM destination WHERE destination_id=$editId";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$destination_name = $row['destination_name'];
$destination_location = $row['destination_location'];
$destination_img = $row['destination_img'];

if (isset($_POST['confirm'])) {
    $updestination_name = $_POST['destination_name'];
    $updestination_location = $_POST['destination_location'];

    // Check if a new image file is uploaded
    if ($_FILES['newdestination_img']['error'] == 0) {
        $updestination_img = '../upload/' . $_FILES['newdestination_img']['name'];
        move_uploaded_file($_FILES['newdestination_img']['tmp_name'], $updestination_img);
    } else {
        // Use the existing image URL if no new image is uploaded
        $updestination_img = $row['destination_img'];
    }

    $sql = "UPDATE `destination` SET destination_name='$updestination_name',destination_location='$updestination_location', destination_img='$updestination_img' WHERE destination_id='$editId'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        // Display Spinner and Redirect
        echo '<div class="d-flex flex-column justify-content-center align-items-center bg-danger" style="height: 100vh;z-index:999; position:absolute; width:100%;height:135vh; padding-bottom:40vh;">
                <h3>Updating destination</h3>
                <div class="spinner-border p-4 mt-3 mb-5" role="status">
                <span class="sr-only p-3 mb-5"></span>
                </div>
                </div>';

        echo '<script>
                // Redirect to the main page after 3 seconds
                setTimeout(function() {
                window.location.href = "destination.php";
                }, 1000); // 1000 milliseconds (1 second) delay before redirection
                </script>';
    } else {
        die(mysqli_error($connection));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel : Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../myStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        main{
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <main class="bg-danger-subtle pt-5">
        <div class="display-1 text-center fw-bold">Edit</div>
        <div class="container py-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="p-5 bg-white rounded-5">
                    <label for="form-label" class="py-3">destination Name</label>
                    <input type="text" name="destination_name" class="form-control" value="<?php echo $destination_name; ?>">

                    <label for="form-label" class="py-3">destination Type</label>
                    <input type="text" name="destination_location" class="form-control" value="<?php echo $destination_location; ?>">

                    <label for="form-label" class="py-3">destination Photo</label>
                    <input type="file" name="newdestination_img" class="form-control">
                    <button class="btn btn-danger me-auto mt-3" name="confirm">Confirm</button>
            </form>
        </div>
    </main>

</body>

</html>