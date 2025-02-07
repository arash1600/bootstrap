<?php

include('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $conn = new mysqli('localhost', 'root', '', 'ezafe');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM e WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "فایل با موفقیت حذف شد!";
        header('Location: tools.php');
    } else {
        echo "خطا در حذف فایل: " . $conn->error;
    }

    $conn->close();
}
?>

<?php

include('footer.php');
?>
