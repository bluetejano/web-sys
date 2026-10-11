<?= $this->include('templates/header') ?>

<div class="stats-grid compact-stats">
    <div class="stat-card">
        <p>Total Users</p>
        <h3><?= count($users) ?></h3>
        <span>Sample staff accounts</span>
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
            <h2>User Directory</h2>
            <p>Staff account information and assigned roles</p>
        </div>
        <span class="record-badge"><?= count($users) ?> Records</span>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td class="id-cell">#<?= esc($user['id']) ?></td>
                        <td>
                            <span class="username">
                                @<?= esc($user['username']) ?>
                            </span>
                        </td>
                        <td>
                            <div class="person-cell">
                                <div class="avatar">
                                    <?= esc(strtoupper(substr($user['name'], 0, 1))) ?>
                                </div>
                                <strong><?= esc($user['name']) ?></strong>
                            </div>
                        </td>
                        <td>
                            <span class="role-badge">
                                <?= esc($user['role']) ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="table-footer">
        Showing <?= count($users) ?> user records
    </div>
</div>

<?= $this->include('templates/footer') ?>