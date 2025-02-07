<?php

include('header.html');

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $conn = new mysqli('localhost', 'root', '', 'ezafe');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $stmt = $conn->prepare("SELECT * FROM e WHERE id = ?");
    $stmt->bind_param("i", $id); 
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $project = $result->fetch_assoc();
    } else {
        echo "<p>پروژه یافت نشد!</p>";
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);


        $update_sql = $conn->prepare("UPDATE e SET name = ?, description = ? WHERE id = ?");
        $update_sql->bind_param("ssi", $name, $description, $id);  
        
        if ($update_sql->execute()) {
            echo "<p class='text-success'>فایل با موفقیت ویرایش شد!</p>";
            header('Location: tools.php');
            exit(); 
        } else {
            echo "<p class='text-danger'>خطا در ویرایش فایل: " . $conn->error . "</p>";
        }
    }


    $stmt->close();
    $conn->close();
}
?>

<div class="container my-4">
    <h1 class="text-primary">ویرایش ابزار</h1>
    <form method="POST" class="bg-dark p-4 rounded">
        <div class="mb-3">
            <label for="name" class="form-label text-light">نام ابزار</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($project['name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-light">توضیحات ابزار</label>
            <textarea class="form-control" id="description" name="description" required><?php echo htmlspecialchars($project['description']); ?></textarea>
        </div>
        <button type="submit" class="btn btn-warning">ویرایش ابزار</button>
    </form>
</div>

<?php

include('footer.html');
?>
