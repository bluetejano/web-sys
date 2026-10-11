<div class="dashboard">
    <p class="welcome-label">WELCOME BACK</p>
    <h1>Your POS Dashboard</h1>
    <p>Manage your customer and staff records in one place.</p>

    <section class="overview">
        <h2>Management Overview</h2>
        <p>Quick access to your system pages.</p>

        <div class="dashboard-cards">
            <a href="<?= site_url('customers') ?>" class="dashboard-card">
                <span class="card-icon">♙</span>
                <h3>Total Customer Records</h3>
                <p class="card-number">05</p>
                <span>View customer accounts →</span>
            </a>

            <a href="<?= site_url('users') ?>" class="dashboard-card">
                <span class="card-icon">♧</span>
                <h3>Total User Records</h3>
                <p class="card-number">05</p>
                <span>View staff accounts →</span>
            </a>

            <a href="<?= site_url('about') ?>" class="dashboard-card">
                <span class="card-icon">ⓘ</span>
                <h3>System Information</h3>
                <p class="card-number">About</p>
                <span>Learn about this system →</span>
            </a>
        </div>
    </section>

    <section class="overview">
        <h2>Quick Navigation</h2>
        <p>Select a page to get started.</p>

        <div class="dashboard-cards">
            <a href="<?= site_url('customers') ?>" class="dashboard-card">
                <h3>Customer Accounts</h3>
                <p>View customer names, emails, and phone numbers.</p>
            </a>

            <a href="<?= site_url('users') ?>" class="dashboard-card">
                <h3>User Accounts</h3>
                <p>View staff usernames, names, and roles.</p>
            </a>

            <a href="<?= site_url('about') ?>" class="dashboard-card">
                <h3>About This Project</h3>
                <p>Read the purpose and technologies used.</p>
            </a>
        </div>
    </section>
</div>