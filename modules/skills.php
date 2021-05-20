<?php

foreach ($profile['skillView'] as $skill) {
    echo <<<EOT
                        <button type="button" class="btn btn-outline-dark btn-sm disabled">{$skill['name']}</button>
EOT;

}