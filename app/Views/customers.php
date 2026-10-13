<h1>Customers</h1>

/customers/newAdd Customer</a>

<table border="1">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Action</th>
</tr>

<?php foreach($customers as $customer): ?>
<tr>
    <td><?= $customer['full_name'] ?></td>
    <td><?= $customer['email'] ?></td>
    <td><?= $customer['phone'] ?></td>
    <td>
        /customers/edit/<?= $customer['id'] ?>
            Edit
        </a>
    </td>
</tr>
<?php endforeach; ?>

</table>