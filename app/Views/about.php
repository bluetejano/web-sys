<?= $this->include('templates/header') ?>

<div class="panel about-panel">
    <div class="about-icon">P</div>
    <p class="eyebrow">ABOUT THE PROJECT</p>
    <h2>Point of Sale Management System</h2>

    <p class="about-description">
        This project is a basic Point of Sale (POS) management website
        developed using CodeIgniter 4. It demonstrates how a web
        application can organize pages and display records through
        the Model-View-Controller (MVC) architecture.
    </p>

    <div class="info-grid">
        <div class="info-item">
            <span>Framework</span>
            <strong>CodeIgniter 4</strong>
        </div>
        <div class="info-item">
            <span>Language</span>
            <strong>PHP</strong>
        </div>
        <div class="info-item">
            <span>Architecture</span>
            <strong>MVC</strong>
        </div>
        <div class="info-item">
            <span>Data Source</span>
            <strong>Static PHP Arrays</strong>
        </div>
    </div>

    <div class="notice">
        <strong>Current Version</strong>
        <p>
            Customer and user records are sample data stored in PHP arrays.
            No database connection is used in this activity.
        </p>
    </div>

    <a href="<?= site_url('/') ?>" class="btn-primary">← Back to Dashboard</a>
</div>

<?= $this->include('templates/footer') ?>