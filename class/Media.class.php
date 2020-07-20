<?php 
class Media extends CRUD {

    private $result;

    public function output($par){
        $result = $this->read("media", array("media.title, media.image"));
        foreach ($result as $row) {
            $title = $row["title"];
            $image = $row["image"];

            ?>
            <div class="card_box card col-sm-6 col-md-4 col-lg-3 p-3">
                <img src="img/<?= $image ?>" class="card-img-top" alt="..." height="400px">
                <div class="card-body">
                    <h5 class="card-title"><?= $title ?></h5>
                </div>
            </div>
            <?php
        }
    }
}