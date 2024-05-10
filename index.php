<?php
include_once __DIR__ . '/db.php';
require_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/translations.php';


if ($language === "it"){
    $sqlQuery= "SELECT * FROM News_It";
} else {
    $sqlQuery = "SELECT * FROM News_En";
}

$stmt = $pdo->query($sqlQuery);
$news = $stmt->fetchAll();


?>


    <div class="row g-2 mt-5">
    <?php
        foreach ($news as $row)
                
        { ?>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['Title'] ?></h5>
                    <p class="card-text"><?= $row['Description'] ?>
                    </p>
                    <p class="card-text"><?= $row['Author'] ?>
                    </p>
                    <a href="#" class="btn btn-primary"><?= $labels[$language]['details_btn'] ?></a>
                </div>
            </div>
        </div>

        <?php
        } ?>

        
    </div>

<?php

require_once __DIR__ . '/includes/footer.php';