<?php

class HTML extends Media {
    private $tmpl_header = "temp/header.temp.html";
    private $tmpl_footer = "temp/footer.temp.html";

    function __construct($par) {
        include $this->tmpl_header;
        ?>
        <h1 class="text-center">Our offer:</h1>
        <div class="container-fluid">
            <div class="row">
            <?php 
            $this->output($par);
            ?>
        </div>
        </div>
        <?php
        include $this->tmpl_footer;
    }
}