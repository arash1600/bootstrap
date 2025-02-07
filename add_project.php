<?php
include("header.html");  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);

    $conn = new mysqli('localhost', 'root', '', 'ezafe');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $stmt = $conn->prepare("INSERT INTO e (name, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $description);  


    if ($stmt->execute()) {
        echo "<p class='text-success'>فایل با موفقیت اضافه شد!</p>";
        header("Location: tools.php"); 
        exit(); 
    } else {
        echo "<p class='text-danger'>خطا در افزودن فایل: " . $stmt->error . "</p>";
    }


    $stmt->close();
    $conn->close();
}
?>

<div class="container my-4">
    <h1 class="text-primary">افزودن ابزار جدید</h1>
    <form method="POST" class="bg-dark text-light p-4 rounded">
        <div class="mb-3">
            <label for="name" class="form-label text-info">نام ابزار</label>
            <input type="text" class="form-control form-control-lg" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-info">توضیحات ابزار</label>
            <textarea class="form-control form-control-lg" id="description" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">افزودن ابزار</button>
    </form>
</div>

<?php

include('footer.html');
?>
