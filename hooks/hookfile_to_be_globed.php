<?php

use Dredd\Hooks;

Hooks::before("/message > GET", function(&$transaction) {

    echo "It's me, File3";
});

