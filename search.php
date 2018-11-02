<?php 
include 'dbh.php';
?>

<h1>Zoekresultaat</h1>

<div class="product-container">
<?php
if (isset($_POST['submit'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' 
            OR a_price LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='product-box'>
                <h3>" . $row['a_title'] . "</h3>
                <p>" . $row['a_text'] . "</p>
                <p>" . $row['a_price'] . "</p>
        </div>";
        }
    } else {
        echo "Helaas! Niet gevonden wat u zocht? Neem dan contact met ons op!";
    }
}
?>
</div>