<?php

foreach ($langs as $l) {
    echo <<<EOT

                            <li>
                                <a href="/?lang=$l"><span class="menu-item-span">$l</span></a>
                            </li>
EOT;

}