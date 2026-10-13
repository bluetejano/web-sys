<!DOCTYPE html>
<html>
<head>
    <title>POS System</title>

    <style>
    body {
    font-family: Arial, sans-serif;
    background: #fff0f5;
    margin: 0;
    padding: 40px;
}

.container {
    max-width: 1200px;
    margin: auto;
}

h1 {
    text-align: center;
    color: #d63384;
    margin-bottom: 10px;
}

.subtitle {
    text-align: center;
    color: #666;
    margin-bottom: 40px;
}

.section-title {
    text-align: center;
    color: #d63384;
    margin-bottom: 25px;
}

.cards,
.navigation {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-bottom: 50px;
}

.card,
.nav-card {
    background: #ffffff;
    padding: 25px;
    text-align: center;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(214, 51, 132, 0.15);
    border: 2px solid #ffd6e8;
    transition: all 0.2s ease;
}

.card:hover,
.nav-card:hover {
    transform: translateY(-5px);
}

.card h3,
.nav-card h3 {
    color: #d63384;
}

.number {
    font-size: 42px;
    font-weight: bold;
    color: #ff69b4;
    margin: 15px 0;
}

.card a,
.nav-card a {
    display: inline-block;
    padding: 10px 16px;
    background: #ff69b4;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    margin-top: 10px;
    font-weight: bold;
}

.card a:hover,
.nav-card a:hover {
    background: #d63384;
}

.nav-card p {
    color: #666;
    line-height: 1.5;
}
    </style>
</head>
<body>

<div class="container">

    <h1>Point of Sale</h1>

    <p class="subtitle">
        Manage your customer and staff records in one place.
    </p>


<h2 class="section-title">Quick Navigation</h2>

<div class="navigation">

    <div class="nav-card">
        <h3>Customer Accounts</h3>
        <p>View customer names, emails, and phone numbers.</p>
        <a href="/customers">Open</a>
    </div>

    <div class="nav-card">
        <h3>User Accounts</h3>
        <p>View staff usernames, names, and roles.</p>
        <a href="/users">Open</a>
    </div>

    <div class="nav-card">
        <h3>About This Project</h3>
        <p>Read the purpose and technologies used.</p>
        <a href="/about">Open</a>
    </div>

</div>