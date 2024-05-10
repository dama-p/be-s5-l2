<?php
include_once __DIR__ . '/db.php';
require_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/translations.php';
?>


    <div class="row g-2 mt-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <a href="#" class="btn btn-primary"><?= $labels[$language]['details_btn'] ?></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <a href="#" class="btn btn-primary"><?= $labels[$language]['details_btn'] ?></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <a href="#" class="btn btn-primary"><?= $labels[$language]['details_btn'] ?></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <a href="#" class="btn btn-primary"><?= $labels[$language]['details_btn'] ?></a>
                </div>
            </div>
        </div>
    </div>

<?php

require_once __DIR__ . '/includes/footer.php';