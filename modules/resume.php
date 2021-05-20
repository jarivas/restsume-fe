<?php

foreach ($profile['educationView'] as $education){
    echo <<<EOT
                            <li>
                                <div class="timeline-badge"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-body">
                                        <h5 class="timeline-title">{$education['degreeName']}</h5>
                                        <h6 class="timeline-description">{$education['schoolName']} | {$education['timePeriod']}</h6>
                                        <p>{$education['fieldOfStudy']}</p>
                                        <p>{$education['description']}</p>
                                    </div>
                                </div>
                            </li>
EOT;
}

foreach ($profile['positionView'] as $position){
    $location = $position['locationName'] ?? $position['geoLocationName'] ?? '';
    $company = $position['company'] ?? $position['companyName'] ?? '';

    echo <<<EOT
                            <li>
                                <div class="timeline-badge"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-body">
                                        <h5 class="timeline-title">$company</h5>
                                        <h6 class="timeline-description">{$position['timePeriod']}</h6>
                                        <p>$location</p>
                                        <p>{$position['description']}</p>
                                    </div>
                                </div>
                            </li>
EOT;
}