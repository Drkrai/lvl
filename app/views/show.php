<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Gallery</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding-left: 270px;
            background-color: #f4f4f4;
        }

        #prod {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start; /* Align items to the left */
            align-items: flex-start; /* Align items to the top */
            padding:50px;
        }

        .product-card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 30px;
            padding: 30px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
            position: relative;
            transition: transform 0.3s ease-in-out;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-card h3 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .product-info {
            margin-top: 15px;
            color: #666;
        }

        .product-info strong {
            color: #333;
        }

        /* Top styles (adjust as needed) */
        .top {
            background-color: #ee4d2d;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Order button styles */
        .order-button {
            margin-top: 15px;
            padding: 10px 16px;
            background-color: #ee4d2d;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .order-button:hover {
            background-color: #ff6347;
        }
    </style>
</head>

<html>
<body>
    <?= include('app/views/user/top.php'); ?>
    <div >
        <?=include('app/views/user/sidebar.php');?>		
        <?=include('app/views/user/script.php');?>		
    </div>
    <div id="prod">
        <?php
        // Reverse the order of the loop to display new products first
        $data = array_reverse($data);

        foreach($data as $datas):
        ?>
            <div class="product-card">
                <h3><?= $datas['prodname'] ?></h3>
                <div class="product-info">
                    <strong>Description:</strong> <?= $datas['description'] ?><br>
                    <strong>Price:</strong> <?= $datas['price'] ?><br>
                    <strong>Stocks:</strong> <?= $datas['stocks'] ?>
                </div>
                <button class="order-button"><a href="<?= site_url('cart/' . $datas['prod_id']); ?>">Add to Cart</a></button>
            </div>
        <?php endforeach; ?>
        
    </div>
    
</body>

</html>
