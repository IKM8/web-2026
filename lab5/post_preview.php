<div class="post">
    <div class="post__header">
        <div class="post__author">
            <img src="<?= $post['avatar'] ?>" alt="<?= $post['author'] ?>" class="post__avatar">
            <span class="post__author-name"><?= $post['author'] ?></span>
        </div>
        <img src="images/edit.jpg" alt="Редактировать" class="post__edit">
    </div>
    <div class="post__media">
        <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>" class="post__image">
        <?php if ($post['has_slider']): ?>
            <div class="post__indicator">1/<?= $post['images_count'] ?></div>
            <div class="post__slider">
                <img src="images/slider_button.jpg" alt="Вперед" class="post__slider-icon">
            </div>
        <?php endif; ?>
    </div>
    <div class="post__actions">
        <img src="images/like.jpg" alt="Лайк" class="post__like-icon">
        <span class="post__likes-count"><?= $post['likes'] ?></span>
    </div>
    <?php if (!empty($post['subtitle'])): ?>
        <div class="post__text"><?= $post['subtitle'] ?></div>
        <div class="post__more">ещё</div>
    <?php endif; ?>
    <div class="post__time"><?= date('d.m.Y H:i', $post['date']) ?></div>
    <a href="post.php?id=<?= $post['id'] ?>" class="post__link" title="<?= $post['title'] ?>">Читать далее</a>
</div>