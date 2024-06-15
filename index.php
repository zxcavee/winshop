<?php
  session_start();
  
  if (isset($_SESSION['user'])):
    $modeClass = isset($_SESSION['supervisor']) ? 'admin--mode' : 'user--mode';
    $modeText = isset($_SESSION['supervisor']) ? 'Режим администратора' : 'Пользовательский режим';
  else:
    $modeClass = 'guest--mode';
    $modeText = 'Гостевой режим';
  endif;
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
<header class="header <?=$modeClass?>">
    <div class="container">
        <div class="menu">
            <nav class="menu__nav">
                <a href="/">Главная</a>
                <a href="#services">Услуги</a>
                <a href="#">Рассрочка</a>
                <?php if(isset($_SESSION['user'])):?>
                    <?php if(isset($_SESSION['supervisor'])):?>
                        <a href="?page=page-orders">Заказы</a>
                    <?php else: ?>
                        <a href="?page=page-order">Заказ</a>
                    <?php endif; ?>
                <?php endif; ?>
                <a href="#contacts">Контакты</a>
            </nav>
            <div class="menu__contacts">
                <div class="menu__contacts-item">
                    <a href="tel:+77715364260">+7 771 536 4260</a>, <span>г. Кокшетау Бегельдинова 111</span>
                </div>
                <div class="top-line__user">
                    <div class="top-line__user-name">
                      <?php if(isset($_SESSION['user'])):?>
                        <?= implode(' ', array_slice(explode(' ', $_SESSION['name']), 0, 2)) ?> <span>(<?= $_SESSION['user'] ?>)</span>
                      <?php endif; ?>
                    </div>
                    <div class="top-line__user-actions">
                      <?php if(!isset($_SESSION['user'])):?>
                          <a href="?page=page-login">
                              Войти
                          </a>
                      <?php else: ?>
                          <a href="?page=page-logout">
                              Выйти
                          </a>
                      <?php endif; ?>
                        <span> / </span>
                        <a href="/#register">
                            Загеристрироваться
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'page-index';
  include $page . '.php';
?>

<footer class="footer" id="contacts">
    <div class="container">
        <div class="footer-top">
            <div class="footer-row">
                <div class="footer-col">
                    <h3>Контакты</h3>
                    <div class="footer-items footer-links">
                        <a href="tel:+7 771 536 4260">+7 771 536 4260</a>
                        <a href="tel:+7 702 568 4239">+7 702 568 4239</a>
                        <a class="mailto:Pronature.miratorg22@gmail.com">Pronature.miratorg22@gmail.com</a>
                    </div>
                    <h3>Связь с нами</h3>
                    <div class="footer-items footer-social">
                        <img src="images/icons8-instagram-50.png">
                        <img src="images/icons8-facebook-64.png">
                        <img src="images/icons8-твиттер-50.png">
                    </div>
                </div>
                <div class="footer-col">
                    <h3>График работы</h3>
                    <div class="footer-items footer-time">
                        <span>Пн-Пт: с 9:00 до 18:00</span>
                        <span>Сб-Вс: с 10:00 до 15:00</span>
                    </div>
                </div>
            </div>
            <div class="footer-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4012.5750432980776!2d69.40557845936927!3d53.27356554194797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424c9461df8eff7f%3A0xf34c1936304b8469!2zItCS0YvRgdGI0LjQuSDRgtC10YXQvdC40YfQtdGB0LrQuNC5INC60L7Qu9C70LXQtNC2INC40LzQtdC90LggItCl0YPRgNCx0LDQvdCwINCl0LDQvdC00LbQuCI!5e0!3m2!1sru!2skz!4v1714774225155!5m2!1sru!2skz"
                        style="border:0; width: 100%; height: 300px;"  allowfullscreen="true" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <span>Фабричные окна 2024 © Все права защищены</span>
    </div>
</footer>

</body>
</html>

