<?php
include 'include/header.php';


// Проверка дали формата е изпратена
$totalMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $selectedProduct = $_POST['product'];

    $quantity = intval($_POST['quantity']);

    $discount = isset($_POST['discount']) ? floatval($_POST['discount']) : 0;

    // Проверка дали избраният продукт съществува и дали количеството е положително
    if (isset($products[$selectedProduct]) && $quantity > 0) {

        $price = $products[$selectedProduct];

        $total = calculateTotal($price, $quantity, $discount);

        $totalMessage = "Общата стойност за $quantity броя от продукт \"$selectedProduct\" е: " . number_format($total, 2) . " лв.";

    } else {

        $errorMessage = "Моля, изберете валиден продукт и въведете положително количество.";
    }
}

?>




<h2 class="text-center pt-5">Изчисли стойността на покупката</h2>

  
<div class="d-flex justify-content-center">

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="">

        <label for="product">Избери продукт:</label>

        <select name="product" id="product" required>

            <option value="">-- Изберете продукт --</option>

            <?php foreach ($products as $product => $price): ?>

                <option value="<?php echo $product; ?>" <?php if (isset($selectedProduct) && $selectedProduct === $product) echo "selected"; ?>>

                    <?php echo ucfirst($product) . " - " . number_format($price, 2) . " лв."; ?>

                </option>

            <?php endforeach; ?>

        </select>

        <label for="quantity">Количество:</label>
        <input type="number" name="quantity" id="quantity" min="1" required value="<?php echo isset($quantity) ? $quantity : ''; ?>">

        <label for="discount">Изберете отстъпка:</label>

        <select id="discount" name="discount">

            <option value="">-- Изберете отстъпка --</option>
            <option value="0">0%</option>
            <option value="5">5%</option>
            <option value="10">10%</option>
            <option value="15">15%</option>
            <option value="20">20%</option>
        </select>

        <button type="submit">Изчисли</button>
    </form>
    </div>

</div>


<?php if ($totalMessage): ?>

    <p class="message"><?php echo $totalMessage; ?></p>

<?php elseif ($errorMessage): ?>

    <p class="error"><?php echo $errorMessage; ?></p>

<?php endif; ?>

<?php include('include/footer.php') ?>