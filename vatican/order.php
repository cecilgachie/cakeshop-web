<!-- Order Form -->
<form action="order.php" method="POST">
    <label for="cake-type">Choose Cake Type:</label>
    <select name="cake_type" id="cake-type">
        <option value="birthday">Birthday</option>
        <option value="wedding">Wedding</option>
    </select>
    <button type="submit">Next</button>
</form>

<?php
if (isset($_POST['cake_type'])) {
    $cake_type = $_POST['cake_type'];
    if ($cake_type == 'birthday') {
        // Show birthday form
        echo '<form action="order.php" method="POST">
                <label for="birthday-name">Birthday Name:</label><input type="text" name="birthday_name" required><br>
                <label for="collection-date">Collection Date:</label><input type="date" name="collection_date" required><br>
                <label for="deposit">Deposit Amount:</label><input type="number" name="deposit" required><br>
                <label for="size">Size (kg):</label><input type="number" name="size" required><br>
                <label for="color">Color:</label><input type="text" name="color" required><br>
                <button type="submit" name="submit_birthday">Submit</button>
              </form>';
    } else if ($cake_type == 'wedding') {
        // Show wedding form
        echo '<form action="order.php" method="POST">
                <label for="cake-name">Cake Name:</label><input type="text" name="cake_name" required><br>
                <label for="size">Size (kg):</label><input type="number" name="size" required><br>
                <label for="color">Color:</label><input type="text" name="color" required><br>
                <label for="collection-date">Collection Date:</label><input type="date" name="collection_date" required><br>
                <label for="deposit">Deposit Amount:</label><input type="number" name="deposit" required><br>
                <label for="payment">Payment Option:</label><input type="text" name="payment_option" required><br>
                <button type="submit" name="submit_wedding">Submit</button>
              </form>';
    }
}
?>












if (isset($_POST['submit_birthday'])) {
    $birthday_name = $_POST['birthday_name'];
    $collection_date = $_POST['collection_date'];
    $deposit = $_POST['deposit'];
    $size = $_POST['size'];
    $color = $_POST['color'];

    $conn = new mysqli('localhost', 'root', '', 'vatican');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO birthday (birthday_name, collection_date, deposit, size, color) 
            VALUES ('$birthday_name', '$collection_date', '$deposit', '$size', '$color')";
    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
