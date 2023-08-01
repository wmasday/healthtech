<?php
function service_shortcode($atts) {
    $default = array(
        'title' => '-',
        'description' => '-',
        'item' => '-',
        'note' => '-',
        'service' => '-',
    );
    
    $data = shortcode_atts($default, $atts);
    $item = '';
    $arrayItem = explode(',', $data['item']);

    foreach ($arrayItem as $dataItem) {
        $item .= "<div class='item'>
                    <div class='item-value'>". $dataItem ."</div>
                </div>";
    }

    $html = "
        <div class='service p-2 mt-3'>
            <h3 class='text-400'>". $data['title'] ."</h3>
            <p>". $data['description'] ."</p>
            <div class='service-note mt-3'>". $data['note'] ."</div>
            <div class='service-item mt-3'>". $item ."</div>
        </div>";
    return $html;
}
add_shortcode('service', 'service_shortcode');