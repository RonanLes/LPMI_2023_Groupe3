<!DOCTYPE html>
<html>

<head>
    <title>Panier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border-bottom: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #f9f9f9;
        }

        #total-panier {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #ff9900;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #ffbb33;
        }
    </style>
</head>

<body>
    <h1>Votre Panier</h1>

    <table>
        <thead>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Parcours de chaque produit dans le panier
            if (isset($_SESSION['cart'])) {
                $total = 0;
                foreach ($_SESSION['cart'] as $product) {
                    list($productName,$productPrice) = explode(":",$product); 
                    $total += $productPrice;  
                    ?>
                    <tr>
                        <td>
                            <?php echo $productName; ?>
                        </td>
                        <td>
                            <?php echo number_format($productPrice, 2) . '€'; ?>
                        </td>
                    </tr>
                <?php }
            } ?>
        </tbody>
    </table>

    <p>Total du panier : <span id="total-panier"><?=$total. '€'?></span></p>

    <button>Passer la commande</button>
</body>

</html>