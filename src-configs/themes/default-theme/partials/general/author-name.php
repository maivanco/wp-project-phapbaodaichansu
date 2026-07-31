<?php 
$name = $args['name'] ?? '';
$extra_class = $args['extra_class'] ?? '';
?>

<div class="flex items-center justify-end gap-3 <?php echo $extra_class ?>">
    <span class="block w-12 h-px bg-gradient-to-r from-gold to-transparent"></span>
    <svg width="16" height="16" viewBox="0 0 16 16" class="text-gold flex-shrink-0">
        <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
        <circle cx="8" cy="8" r="5" fill="none" stroke="currentColor" stroke-width="0.5"></circle>
        <circle cx="8" cy="8" r="7.5" fill="none" stroke="currentColor" stroke-width="0.3" stroke-dasharray="2 2"></circle>
    </svg>
    <p class="text-right text-gold-gradient "><?php echo $name;?></p>
</div>