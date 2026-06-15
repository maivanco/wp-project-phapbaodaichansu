<?php 
$bg_img_id = get_sub_field('background_image');
$hero_title = get_sub_field('hero_title');
$description = get_sub_field('description');
$buttons = get_sub_field('buttons');
?>

<section class="min-h-screen bg-no-repeat bg-cover relative flex items-end p-[80px_92px]
after:content-['']
after:absolute
after:top-0
after:left-0
after:w-full
after:h-full
after:bg-gradient-to-t 
after:from-black 
after:to-transparent
">
    <?php 
    render_img_by_id($bg_img_id, 'large', [
        'class' => 'absolute top-0 left-0 w-full h-full object-cover z-0'
    ]);
    ?>
    <div class="flex flex-col items-bottom z-10 gap-[40px] max-w-[690px]">
        <h1 class="text-[72px] leading-[1.1] text-white">
            <?php echo $hero_title;?>
        </h1>
        <div class="short-intro text-white">
            <?php echo $description;?>
        </div>
        <?php load_partial('html/group-buttons', ['buttons' => $buttons]);?>
    </div>
</section>