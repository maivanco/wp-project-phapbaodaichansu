<?php 
$featured_product_id = get_sub_field('display_product') ?? 0;
if ($featured_product_id == 0) {
    return;
}
?>

<section class="sec-featured-products bg-cream2 py-25">
    <div class="lg-container">
        <div class="grid grid-cols-2 max-tablet:grid-cols-1">
            <div class="left">
                <?php load_partial('general/section-title', [
                    'section_title' => 'Ngọc Lệ Bi Tâm Quán Thế Âm',
                    'subtitle' => 'ẤN PHẨM ĐẶC BIỆT',
                    'align' => 'left'
                ])?>
                <?php render_img_by_src(IMG_URL . 'slide-ngoc-le-bi-tam-3.jpg', [])?>
            </div>
            <div class="right">
                <div class="wp-editor">
                    <blockquote class="relative">
                        <p>
                            Quyển sách này như Phật Đảnh Liên Hoa, soi sáng và phá tan xích xiềng sanh tử u minh, nâng bước chân ta vượt ngang Tam Giới, đốn chứng Niết Bàn Diệu Tâm, liễu ngộ Thật Tướng Vô Tướng, chấn nhiếp Tứ Ma, xuất ngục Ấm Giới, nhanh chóng thành tựu cứu cánh Phạm Hạnh, viên mãn Đại Bồ Đề.
                        </p>
                    </blockquote>

                    <blockquote class="relative">
                        <p>
                            Đặc biệt, trong tác phẩm này có 108 bài thi kệ “Đại Ngộ Đắc Tự Tại” của bậc chân tu thâm đạt diệu pháp hành - Thầy Thích Long Viễn lần đầu tiên được kính cẩn hiển lộ. Đây không chỉ là thi kệ mà là pháp âm vô ngại, là lời khai thị vượt ngoài mọi chấp ngã, thấu triệt vạn pháp; mỗi bài kệ còn là đạo lộ, là giai đoạn thành tựu của Ngài; mỗi ngôn âm diệu pháp là lưỡi kiếm Vô Năng Thắng giúp hành giả có thể phá tan rừng rậm ma ý, chiến thắng Tứ ma, xuất Ấm Giới ngục, viên giác Đại Tâm, hành dụng độ sanh vô ngại, là tinh chất của 84.000 pháp môn, thâu nhiếp cả 12 loại Kinh giáo, thật là “Tuyệt đãi viên dung”, cũng là “Siêu tình ly kiến”, quả thật “Bất khả tư nghì”, đúng là tinh hoa của Phật pháp, thật khó có khó tìm khó gặp trong đời. 
                        </p>
                    </blockquote>
                </div>

                <?php load_partial('product/product-btn-group', [
                    'product_id' => $featured_product_id
                ])?>

            </div>
        </div>
    </div>
</section>