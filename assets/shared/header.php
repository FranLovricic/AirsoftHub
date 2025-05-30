<?php 

function getHeader($pageTitle = "Airsoft Hub") {
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>$pageTitle</title>

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
                
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>

            <style>
                body {
                    background-color: #f8f9fa;
                }

                .navbar-brand {
                    font-weight: bold;
                    font-size: 1.5rem;
                    letter-spacing: 1px;
                }

                .nav-link {
                    font-size: 1rem;
                    margin-right: 10px;
                    transition: all 0.2s;
                }

                .nav-link:hover {
                    color: #f8f9fa !important;
                    text-decoration: underline;
                }

                .active-link {
                    font-weight: bold;
                    color: #ffffff !important;
                }
            </style>
        </head>
        <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">Airsoft Hub</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/news">News</a></li>
                        <li class="nav-item"><a class="nav-link" href="/marketplace">Marketplace</a></li>
                        <li class="nav-item"><a class="nav-link" href="/events">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="/teams">Teams</a></li>
                        <li class="nav-item"><a class="nav-link" href="/account"><i class="bi bi-person-circle"></i> Account</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
<?php
}   
?>
