
INSERT INTO 
    post (
        user_id,
        subtitle, 
        image, 
        likes
    )
VALUES 
    (1, 'Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в городке, занесенном снегом по ручку двери...»', 'images/photo1.jpg', 203),
    (2, '', 'images/photo2.jpg', 0);


INSERT INTO user (username, avatar, bio)
VALUES 
    ('Ваня Денисов', 'images/avatar1.jpg', 'Привет! Я системный аналитик в ACME :)'),
    ('Лиза Дёмина', 'images/avatar2.jpg', '');

INSERT INTO 
post (
    user_id,
    subtitle,
    image
) 
VALUES
    (1, '', 'images/post2.jpg'),
    (1, '', 'images/post3.jpg'),
    (1, '', 'images/post4.jpg'),
    (1, '', 'images/post5.jpg'),
    (1, '', 'images/post6.jpg'),
    (1, '', 'images/post7.jpg'),
    (1, '', 'images/post8.jpg'),
    (1, '', 'images/post9.jpg');