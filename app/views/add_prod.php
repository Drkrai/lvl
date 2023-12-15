<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px; /* Increased padding for the form */
            width:100vh;
        }

        .product-form {
            max-width: 500px; /* Increased max-width for the form */
            margin: 0 auto;
        }

        .input-group {
            margin-bottom: 20px;
        }

        h3 {
            color: #343a40;
            font-size: 1.5em;
            margin-bottom: 20px; /* Increased margin for the heading */
        }

        label {
            display: block;
            margin-bottom: 10px; /* Increased margin for labels */
            color: #495057;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button,
        .cancel-button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button {
            background-color: #343a40;
            color: #fff;
        }

        button:hover {
            background-color: #0056b3;
        }

        .cancel-button {
            background-color: #6c757d;
            color: #fff;
            margin-right: 10px;
            text-decoration: none; /* Removed underlined text decoration */
            display: inline-block; /* Displayed as inline block to remove line break */
        }

        .cancel-button:hover {
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="product-form">
            <h3>Add Product</h3>
            <form action="<?= site_url('ProdController/add') ?>" method="post">
                <div class="input-group">
                    <label for="prodname">Product Name</label>
                    <input type="text" id="prodname" name="prodname" placeholder="Enter Product Name" required>
                </div>

                <div class="input-group">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" placeholder="Enter Description" required>
                </div>

                <div class="input-group">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" placeholder="Enter Price" required>
                </div>

                <div class="input-group">
                    <label for="stocks">Stocks</label>
                    <input type="text" id="stocks" name="stocks" placeholder="Enter Stocks" required>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="input-group">
                    <button type="submit" name="add_product">Add Product</button>
                    <a href="<?= site_url('ProductRecords') ?>" class="cancel-button">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
