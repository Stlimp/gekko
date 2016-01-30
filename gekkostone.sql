
INSERT INTO `gkk_certificates` (`id`, `type`, `path`, `description`, `thumbnail`) VALUES
(1, 'a', 'images/content/certificates/docs/image-22-04-15-20-47-6.jpeg', '№866 от 01.06.2014', 'images/content/certificates/docs/thumb/IMG_20151020_194441.jpg'),
(2, 'b', 'images/content/certificates/docs/warning2.png', 'TP 2009/013/BY', 'images/content/certificates/docs/thumb/alarm.jpg'),
(3, 'a', 'images/content/certificates/docs/image-22-04-15-20-47-6.jpeg', '№866 от 01.06.2014', 'images/content/certificates/docs/thumb/IMG_20151020_194441.jpg'),
(4, 'a', 'images/content/certificates/docs/image-22-04-15-20-47-6.jpeg', '№866 от 01.06.2014', 'images/content/certificates/docs/thumb/IMG_20151020_194441.jpg'),
(5, 'a', 'images/content/certificates/docs/image-22-04-15-20-47-6.jpeg', '№866 от 01.06.2014', 'images/content/certificates/docs/thumb/IMG_20151020_194441.jpg');

INSERT INTO `gkk_image_categories` (`image_category_id`, `image_category_name`) VALUES
(1, 'Жилые дома и квартиры'),
(2, 'Коммерческие объекты');

INSERT INTO `gkk_image_subcategories` (`image_subcategory_id`, `image_subcategory_name`, `image_category_name`) VALUES
(3, 'Гостинные и жилые комнаты', 'Жилые дома и квартиры'),
(4, 'Каминные порталы', 'Жилые дома и квартиры'),
(2, 'Кухонные и хоз. помещения', 'Жилые дома и квартиры'),
(7, 'Общественные объекты', 'Коммерческие объекты'),
(6, 'Офисные помещения', 'Коммерческие объекты'),
(5, 'Торговые объекты', 'Коммерческие объекты'),
(1, 'Фасады и внутренний двор', 'Жилые дома и квартиры');

INSERT INTO `gkk_photogallery` (`id`, `photo_name`, `photo_category`, `photo_subcategory`, `photo_image`, `photo_product`) VALUES
(1, 'Квартира, Брест', 'Жилые дома и квартиры', 'Фасады и внутренний двор', 'images/content/photogallery/333.jpg', 'Античный кирпич'),
(2, 'Квартира, Брест', 'Жилые дома и квартиры', 'Фасады и внутренний двор', 'images/content/photogallery/1.jpg', 'Античный кирпич'),
(3, 'Квартира, Брест', 'Жилые дома и квартиры', 'Кухонные и хоз. помещения', 'images/content/photogallery/image-269214.jpg', 'Античный кирпич'),
(4, 'Квартира, Брест', 'Жилые дома и квартиры', 'Кухонные и хоз. помещения', 'images/content/photogallery/43298b.jpg', 'sss'),
(5, 'Квартира, Брест', 'Жилые дома и квартиры', 'Гостинные и жилые комнаты', 'images/content/photogallery/108393814_kamen_v_inter_2.jpg', 'Квартира, Брест'),
(6, 'Квартира, Брест', 'Жилые дома и квартиры', 'Каминные порталы', 'http://syndyk.by/sites/syndyk/img/photoreportage/22720/760x570/image-269214.jpg', 'kkkk');


INSERT INTO `gkk_news` (`id`, `post_image`, `header`, `post`, `date`) VALUES
(1, 'images/content/news/thumbnails/newsegipet_turizm_otpusk_reuters_rtr2suqf.jpg', 'Отмена полетов в Египет: что нужно знать белорусам ', '<p>Туристы из Новополоцка планировали отдохнуть в Египте. Вчера, 6 ноября, приехали в аэропорт Москвы, чтобы вылететь в 15.00 в Шарм-эль-Шейх самолетом «Оренбургских авиалиний». Их тур на семь ночей с отдыхом в отеле категории пять звезд на двоих обошелся в сумму в переводе около 900 долларов.</p><figure><img alt="Фото: Reuters" src="http://img.tyt.by/620x620s/n/reuters/10/3/egipet_turizm_otpusk_reuters_rtr2suqf.jpg"><figcaption>Фото: Reuters</figcaption></figure><p>Сначала рейс задержали на два часа, но посадку все-таки организовали. Еще примерно два часа туристы просидели в самолете, затем к ним пришел представитель авиакомпании и сообщил, что рейс отменяется. Сегодня белорусы уже дома, в Новополоцке, но каким образом и в каком объеме им будут возвращать деньги за тур, точно неизвестно.</p><p>Что же нужно знать белорусам, которые сейчас отдыхают в Египте или планировали туда полететь в ближайшее время?<br>Читать полностью: <a href="http://news.tut.by/society/471811.html">http://news.tut.by/society/471811.html</a></p>', '2015-11-07'),
(3, 'images/content/news/thumbnails/newsputin_mart-2015-1.jpg', 'Почему самолеты из России пока не летают в Египет? ', '<p>Президент России <strong>Владимир Путин</strong> 6 ноября согласился с предложением ФСБ <a href="http://news.tut.by/world/471740.html#ua:main_news~7" target="_blank">приостановить полеты</a> в Египет до выяснения причин авиакатастрофы самолета А321 над Синайским полуостровом.</p><p>После этого Ростуризм заявил о создании оперативного штаба по эвакуации российских туристов. На египетских курортах сейчас, как <a href="http://tass.ru/obschestvo/2415403" target="_blank">сообщает ТАСС</a>, находится около 79 тысяч россиян.</p><figure><img alt="Фото: Reuters" src="http://img.tyt.by/620x620s/n/reuters/05/2/putin_mart-2015-1.jpg"><figcaption>Фото: Reuters</figcaption></figure><p>С каждым днем все больше авиакомпаний в мире <a href="http://news.tut.by/world/471578.html" target="_blank">отказываются летать</a> над Синайским полуостровом до выяснения причин крушения российского самолета A321. Эксперты высказывают разные версии крушения лайнера, однако официального заявления о причинах катастрофы пока нет.</p><p>Рейс российской авиакомпании «Когалымавиа» по маршруту Шарм-эль-Шейх — Санкт-Петербург <a href="http://news.tut.by/tag/2214-krushenie-rossiyskogo-samoleta-v-egipte.html" target="_blank">потерпел крушение</a> 31 октября. В самолете находилось 217 пассажиров и семь членов экипажа. Все погибли. Большинство пассажиров были россиянами, среди них оказался один белорус.<br>Читать полностью: <a href="http://news.tut.by/society/471811.html">http://news.tut.by/society/471811.html</a></p>', '2014-11-07'),
(7, 'images/content/news/thumbnails/newsimf_logo_reuters.jpg', 'Тест', '<p><b>a</b></p>', '2015-10-02');


INSERT INTO `gkk_press` (`id`, `link_name`, `link`) VALUES
(1, 'tut.by о Gekkostone', 'http://gekkostone.com');

INSERT INTO `gkk_product_categories` (`product_category_id`, `product_category_name`) VALUES
(2, 'Камень облицовочный'),
(1, 'Кирпич тонкий');


INSERT INTO `gkk_product` (`product_product_id`, `product_product_name`, `product_product_image`, `product_category_name`, `product_regular_size`, `product_regular_thickness`, `product_regular_weight`, `product_regular_quantity`, `product_regular_repeatability`, `product_angular_size`, `product_angular_thickness`, `product_angular_weight`, `product_angular_quantity`, `product_angular_repeatability`,  `product_regular_calculation_size`, `product_angular_calculation_size`, `product_angular_calculation_size_square`, `product_price`, `product_regular_seamless_calculation_size`, `product_angular_seamless_calculation_size`, `product_angular_seamless_calculation_size_square`, `product_price_seamless`) VALUES
(1, 'Античный', 'http://stroykadoma.org/wp-content/uploads/2015/11/m_24.jpg', 'Кирпич тонкий', '265 х 60 мм (+/- 4 мм).', '12 мм (+/- 2 мм)', 22, '1,2 усл.м2 (61 шт.)', '42 шт. (0,83 м2)', '120/265 х 60 мм (+/- 4 мм)', '12 мм (+/- 2 мм).', 8, '1,728 усл.м.пог. (24 шт.)', '10 шт. (0,72 м.пог.)\r\n', 1.2, 0.072, 0.382, 228000, 0.959, 0.06, 0.37, 285297),
(4, 'Классический', 'http://www.vicanti.ru/images/cms/headers/is_kam/white_hills/uord_hill_130-50.jpg', 'Кирпич тонкий', '265 х 60 мм (+/- 4 мм).', '12 мм (+/- 2 мм)', 22, '1,2 усл.м2 (61 шт.)', '42 шт. (0,83 м2)', '120/265 х 60 мм (+/- 4 мм)', '12 мм (+/- 2 мм).', 8, '1,728 усл.м.пог. (24 шт.)', '10 шт. (0,72 м.пог.)\r\n', 1.2, 0.072, 0.382, 22.8, 0, 0, 0, 0),
(8, 'Пальчики', 'http://www.magijakamnja.ru/content/images/3-AAaAa_AAAaYaY_AAY._YA.1.jpg/2100-1W0.jpg', 'Камень облицовочный', '265 х 60 мм (+/- 4 мм).', '12 мм (+/- 2 мм)', 22, '1,2 усл.м2 (61 шт.)', '42 шт. (0,83 м2)', '120/265 х 60 мм (+/- 4 мм)', '12 мм (+/- 2 мм).', 8, '1,728 усл.м.пог. (24 шт.)', '10 шт. (0,72 м.пог.)\r\n', 1.2, 0.072, 0.382, 228000, 0.959, 0.06, 0.37, 285297),
(6, 'Скала состарен.', 'http://images.freemarket.kiev.ua/images_message/663/81729/328211/176671.jpg', 'Камень облицовочный', '265 х 60 мм (+/- 4 мм).', '12 мм (+/- 2 мм)', 22, '1,2 усл.м2 (61 шт.)', '42 шт. (0,83 м2)', '120/265 х 60 мм (+/- 4 мм)', '12 мм (+/- 2 мм).', 8, '1,728 усл.м.пог. (24 шт.)', '10 шт. (0,72 м.пог.)\r\n', 1.2, 0.072, 0.382, 228000, 0.959, 0.06, 0.37, 285297),
(5, 'Скала тонкая', 'http://saw-wood.ru/userfiles/3(28).jpg', 'Камень облицовочный', '265 х 60 мм (+/- 4 мм).', '12 мм (+/- 2 мм)', 22, '1,2 усл.м2 (61 шт.)', '42 шт. (0,83 м2)', '120/265 х 60 мм (+/- 4 мм)', '12 мм (+/- 2 мм).', 8, '1,728 усл.м.пог. (24 шт.)', '10 шт. (0,72 м.пог.)\r\n', 1.2, 0.072, 0.382, 228000, 0.959, 0.06, 0.37, 285297),
(2, 'Скалистая гора', 'http://www.om.tom.ru/_mod_files/ce_images/eshop/decor_stone/1.jpg', 'Камень облицовочный', '265 х 60 мм (+/- 4 мм).', '12 мм (+/- 2 мм)', 22, '1,2 усл.м2 (61 шт.)', '42 шт. (0,83 м2)', '120/265 х 60 мм (+/- 4 мм)', '12 мм (+/- 2 мм).', 8, '1,728 усл.м.пог. (24 шт.)', '10 шт. (0,72 м.пог.)\r\n', 1.2, 0.072, 0.382, 228000, 0.959, 0.06, 0.37, 285297),
(3, 'Состаренный', 'http://ecostones.ru/wp-content/uploads/2012/12/%D0%BA%D0%B0%D0%B9%D0%BB%D0%B0%D1%883.27-989.jpg', 'Кирпич тонкий', '265 х 60 мм (+/- 4 мм).', '12 мм (+/- 2 мм)', 22, '1,2 усл.м2 (61 шт.)', '42 шт. (0,83 м2)', '120/265 х 60 мм (+/- 4 мм)', '12 мм (+/- 2 мм).', 8, '1,728 усл.м.пог. (24 шт.)', '10 шт. (0,72 м.пог.)\r\n', 1.2, 0.072, 0.382, 228000, 0.959, 0.06, 0.37, 285297),
(7, 'Травертин', 'http://domweb.com.ua/files/Dekorativnuy-kamen-einhorn-Abray-110.JPG', 'Камень облицовочный', '265 х 60 мм (+/- 4 мм).', '12 мм (+/- 2 мм)', 22, '1,2 усл.м2 (61 шт.)', '42 шт. (0,83 м2)', '120/265 х 60 мм (+/- 4 мм)', '12 мм (+/- 2 мм).', 8, '1,728 усл.м.пог. (24 шт.)', '10 шт. (0,72 м.пог.)\r\n', 1.2, 0.072, 0.382, 228000, 0.959, 0.06, 0.37, 285297);



INSERT INTO `gkk_product_color` (`product_color_id`, `product_color_name`, `product_article`, `product_3ds_link`, `product_subcategory_name`, `product_color_image`) VALUES
(1, 'Венецианский обожженный', '01-109', 'http://google.com', 'Античный', 'http://www.sunprecast.com/sites/default/files/imagecache/large/Color%20137%20-%20Light%20Buff.jpg'),
(2, 'Венецианский красн', '01-110', 'http://google.com', 'Античный', 'http://cs1.livemaster.ru/storage/cc/75/dd59a250279efcbcd8412d851brg--materialy-dlya-tvorchestva-tychinki-venetsianskij-krasnyj.jpg'),
(3, 'Альбион', '01-111', 'http://google.com', 'Античный', 'http://dergachev.ru/images/Landscapes/Way-of-Britishers/02/image020.jpg'),
(4, 'Сахара', '01-112', 'http://google.com', 'Античный', 'http://terramia.ru/wp-content/uploads/2012/12/sahara-20.jpg'),
(5, 'Хамелеон', '01-112', 'http://google.com', 'Античный', 'http://zhozefina.com/wp-content/uploads/2012/06/goluboj-hameleon.jpg'),
(6, 'Коррида', '01-113', 'http://google.com', 'Античный', 'http://spanhome.com/otdux/gif/korrida3.jpg'),
(7, 'Карбон', '01-114', 'http://google.com', 'Античный', 'http://old.motoraid.ru/fiber.jpeg'),
(11, 'Венецианский обожженный', '01-109', 'http://google.com', 'Классический', 'http://www.sunprecast.com/sites/default/files/imagecache/large/Color%20137%20-%20Light%20Buff.jpg'),
(12, 'Венецианский красн', '01-110', 'http://google.com', 'Классический', 'http://cs1.livemaster.ru/storage/cc/75/dd59a250279efcbcd8412d851brg--materialy-dlya-tvorchestva-tychinki-venetsianskij-krasnyj.jpg'),
(13, 'Альбион', '01-111', 'http://google.com', 'Классический', 'http://dergachev.ru/images/Landscapes/Way-of-Britishers/02/image020.jpg'),
(14, 'Сахара', '01-112', 'http://google.com', 'Классический', 'http://terramia.ru/wp-content/uploads/2012/12/sahara-20.jpg'),
(15, 'Хамелеон', '01-112', 'http://google.com', 'Классический', 'http://zhozefina.com/wp-content/uploads/2012/06/goluboj-hameleon.jpg'),
(16, 'Коррида', '01-113', 'http://google.com', 'Классический', 'http://spanhome.com/otdux/gif/korrida3.jpg'),
(17, 'Карбон', '01-114', 'http://google.com', 'Классический', 'http://old.motoraid.ru/fiber.jpeg');


INSERT INTO `gkk_q_and_a` (`id`, `chapter`, `question`, `answer`) VALUES
(1, 'Общие вопросы', 'Вопрос1', 'Ответ 1'),
(2, 'Укладка камня', 'Вопрос 2', 'Ответ 2'),
(3, 'Общие вопросы', 'Вопрос 3', 'Ответ 3'),
(4, 'Камнеукладка', 'ывафыав', 'ывафывафыв'),
(5, 'Камнеукладка', '111111', '111111');

INSERT INTO `gkk_stores` (`id`, `country`, `city`, `description`) VALUES
(1, 'Беларусь', 'Брест', '<img src="images/content/store1.png" alt="">г. Брест, Красный Двор-108,<br>\r\nр-н Картингового стадиона.<br>\r\nтел. +375 29 7208060, +375 29 9324060<br>\r\n<u><b>Время работы магазина:</u></b> (без перерывов)<br>\r\nПонедельник - Четверг:  <b>8.00 - 17.00</b><br>\r\nПятница:  <b>8.00 - 12.00</b><br>\r\nСуббота, Воскресенье -  <b>выходные</b>.<br>\r\n\r\n'),
(2, 'Беларусь', 'Минск', '<p><img src="http://gekkostone/web/images/content/news/guest/4204dc3a11-store1.png">г. Брест, Красный Двор-108,</p><p>р-н Картингового стадиона.</p><p>тел. +375 29 7208060, +375 29 9324060</p><p><strong><u>Время работы магазина:</u></strong> (<a href="http://google.com" target="_blank">без перерывов)</a></p><p>Понедельник - Четверг: <strong>8.00 - 17.00</strong></p><p>Пятница: <strong>8.00 - 12.00</strong></p><p>Суббота, Воскресенье - в<strong>ыходные</strong>.</p>'),
(3, 'Россия', 'Москва', '<p><img src="http://gekkostone/web/images/content/news/guest/4204dc3a11-store1.png">г. Брест, Красный Двор-108,</p><p>р-н Картингового стадиона.</p><p>тел. +375 29 7208060, +375 29 9324060</p><p><strong><u>Время работы магазина:</u></strong> (без перерывов)</p><p>Понедельник - Четверг: <strong>8.00 - 17.00</strong></p><p>Пятница: <strong>8.00 - 12.00</strong></p><p>Суббота, Воскресенье - в<strong>ыходные</strong>.</p>'),
(4, 'Poland', 'Lublin', '<p><img src="/web/images/content/news/guest/4204dc3a11-store1.png">г. Брест, Красный Двор-108,</p><p>р-н Картингового стадиона.</p><p>тел. +375 29 7208060, +375 29 9324060</p><p><strong><u>Время работы магазина:</u></strong> (без перерывов)</p><p>Понедельник - Четверг: <strong>8.00 - 17.00</strong></p><p>Пятница: <strong>8.00 - 12.00</strong></p><p>Суббота, Воскресенье - в<strong>ыходные</strong>.</p>');

INSERT INTO `gkk_videogallery` (`id`, `video_name`, `video_description`, `video_link`, `video_thumbnail`) VALUES
(1, 'Видео облицовка фасада натуральным камнем', 'Облицовка фасадов натуральным камнем самый распространенный способ украсить свой дом', 'https://www.youtube.com/watch?v=EGxKXqiUh5o', 'http://img.youtube.com/vi/EGxKXqiUh5o/hqdefault.jpg');

