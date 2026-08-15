<?php 
$buttons = $args['buttons'] ?? [];
if (empty($buttons)) {
    return;
}
echo '<div class="flex flex-wrap gap-[21px]">';
    foreach($buttons as $btn){
        load_partial('html/btn-primary', [
            'label' => $btn['label'],
            'url' => $btn['link']
        ]);
    }
echo '</div>';
?>