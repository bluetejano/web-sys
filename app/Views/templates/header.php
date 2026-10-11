<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'POS Dashboard') ?> | Point of Sale</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<header>
    <nav>
        <a href="<?= site_url('/') ?>"><strong>POS SYSTEM</strong></a>
        <a href="<?= site_url('/') ?>">Dashboard</a>
        <a href="<?= site_url('customers') ?>">Customers</a>
        <a href="<?= site_url('users') ?>">Users</a>
        <a href="<?= site_url('about') ?>">About</a>
    </nav>
</header>

<main>