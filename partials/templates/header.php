<?php
include_once __DIR__ . '/../../env.php';
?>
<header>
    <nav class="navbar navbar-dark navbar-expand bg-dark">
        <a class="navbar-brand" href="<?php echo $base_path; ?>">HOTEL BOOLEAN</a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $base_path; ?>">All Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path; ?>create.php">New Room</a>
            </li>
        </ul>
    </nav>
</header>
<div class="app">