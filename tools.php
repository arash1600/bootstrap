<?php
include("header.html");


$conn = new mysqli("localhost", "root", "", "ezafe");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM e";  
$result = $conn->query($sql);
?>

<div class="container my-4">
    <h1 class="text-primary text-center">ابزارها</h1>
    <a href="add_project.php" class="btn btn-success mb-3">اضافه کردن ابزار جدید</a>
    <div class="row">
        <?php

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card text-center bg-dark text-light">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                            <a href="edit_project.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="btn btn-warning">تغییر</a>
                            <a href="delete_project.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="btn btn-danger" onclick="return confirm('آیا مطمئن هستید که می‌خواهید این ابزار را حذف کنید؟')">حذف</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {

            echo "<div class='col-12'><p class='text-center text-light'>ابزاری بارگذاری نشده است.</p></div>";
        }
        ?>
    </div>
</div>

<?php

$conn->close();


include("footer.html");
?>
