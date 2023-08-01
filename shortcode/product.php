<?php
function quality_shortcode($atts)
{
    $default = array(
        'title_one' => '-',
        'description_one' => '-',
        'value_one' => '-',
        'title_two' => '-',
        'description_two' => '-',
        'value_two' => '-',
        'title_three' => '-',
        'description_three' => '-',
        'value_three' => '-',
    );

    $data = shortcode_atts($default, $atts);

    $html = '
        <div class="row" style="width: 50%; margin:auto;">
        <div class="col-sm-4 border-end">
            <div class="quality text-center">
                <div class="quality-value">'. $data['value_one'] .'</div>
                <div class="quality-params">'. $data['description_one'] .'</div>
            </div>
            <div class="quality-detail">'. $data['title_one'] .'</div>
        </div>

        <div class="col-sm-4 border-end">
            <div class="quality text-center">
                <div class="quality-value">'. $data['value_two'] .'</div>
                <div class="quality-params">'. $data['description_two'] .'</div>
            </div>
            <div class="quality-detail">'. $data['title_two'] .'</div>
        </div>

        <div class="col-sm-4">
            <div class="quality text-center">
                <div class="quality-value">'. $data['value_three'] .'</div>
                <div class="quality-params">'. $data['description_three'] .'</div>
            </div>
            <div class="quality-detail">'. $data['title_three'] .'</div>
        </div>
    </div>';
    return $html;
}
add_shortcode('quality', 'quality_shortcode');


function fitur_shortcode($atts) {
    $default = array(
        'title' => '-',
        'value' => '-'
    );

    $data = shortcode_atts($default, $atts);
    $html = '
        <div class="fitur">
            <div class="fitur-title">'. $data['title'] .'</div>
            <div class="fitur-value">'. $data['value'] .'</div>
        </div>
    ';
    return $html;
}

add_shortcode('fitur', 'fitur_shortcode');