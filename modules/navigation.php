<?php

foreach ($navigation as $k => $v) {
    echo <<<EOT

                        <li>
                            <a href="$v"><span class="menu-item-span">$k</span></a>
                        </li>
EOT;

}