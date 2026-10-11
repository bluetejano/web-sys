<?= $this->include('templates/header') ?>

<div class="stats-grid compact-stats">
    <div class="stat-card">
        <p>Total Customers</p>
        <h3><?= count($customers) ?></h3>
        <span>Sample customer records</span>
    </div>
    <div class="stat-card">
        <p>Data Source</p>
        <h3>PHP Array</h3>
        <span>No database required</span>
    </div>
</div>

<div class="panel">
    <div class="panel-heading">
        <div>
            <h2>Customer Directory</h2>
            <p>Customer contact information and account records</p>
        </div>
        <span class="record-badge"><?= count($customers) ?> Records</span>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td class="id-cell">
                            #<?= esc($customer['id']) ?>
                        </td>
                        <td>
                            <div class="person-cell">
                                <div class="avatar">
                                    <?= esc(strtoupper(substr($customer['name'], 0, 1))) ?>
                                </div>
                                <strong><?= esc($customer['name']) ?></strong>
                            </div>
                        </td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="table-footer">
        Showing <?= count($customers) ?> customer records
    </div>
</div>

<?= $this->include('templates/footer') ?>