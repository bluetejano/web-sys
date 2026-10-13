<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 30px;
    }

    .container {
        max-width: 900px;
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

    .btn {
        display: inline-block;
        padding: 10px 15px;
        background: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        border: none;
        cursor: pointer;
    }

    .btn:hover {
        background: #0056b3;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th {
        background: #007bff;
        color: white;
        padding: 12px;
    }

    table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    input[type="text"],
    input[type="email"],
    input[type="file"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
    }

    img.avatar {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #ddd;
    }

    .actions a {
        margin: 0 5px;
    }

    .nav {
        text-align: center;
        margin-bottom: 20px;
    }

    .nav a {
        text-decoration: none;
        margin: 0 10px;
        color: #007bff;
        font-weight: bold;
    }

    .nav a:hover {
        color: #0056b3;
    }
</style>
<h1>Edit Customer</h1>

/customers/update/<?= $customer['id'] ?> method="post">

    <input type="text"
           name="full_name"
           value="<?= $customer['full_name'] ?>">

    <br><br>

    <input type="email"
           name="email"
           value="<?= $customer['email'] ?>">

    <br><br>

    <input type="text"
           name="phone"
           value="<?= $customer['phone'] ?>">

    <br><br>

    <button type="submit">
        Update
    </button>

</form>