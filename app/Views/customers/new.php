
<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input[type="text"],
        input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .btn {
            padding: 10px 15px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .back {
            display: inline-block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Add Customer</h1>

    <?php if (session()->has('errors')): ?>
        <?php foreach (session('errors') as $error): ?>
            <p class="error"><?= esc($error) ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <form action="<?= site_url('customers/create') ?>" method="post">

        <?= csrf_field() ?>

        <label for="name">Full Name</label>
        <input type="text"
               id="name"
               name="name"
               value="<?= esc(old('name') ?? '') ?>"
               placeholder="Full Name"
               required>

        <label for="email">Email</label>
        <input type="email"
               id="email"
               name="email"
               value="<?= esc(old('email') ?? '') ?>"
               placeholder="Email"
               required>

        <label for="phone">Phone</label>
        <input type="text"
               id="phone"
               name="phone"
               value="<?= esc(old('phone') ?? '') ?>"
               placeholder="Phone">

        <label for="address">Address</label>
        <input type="text"
               id="address"
               name="address"
               value="<?= esc(old('address') ?? '') ?>"
               placeholder="Address">

        <button type="submit" class="btn">Save Customer</button>

    </form>

    <a href="<?= site_url('customers') ?>" class="back">Back to Customers</a>

</div>

</body>
</html>