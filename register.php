<?php 

require_once('db.php');
 $login = $_POST['login'];
 $pass = $_POST['pass'];
 $repeatpass = $_POST['repeatpass'];
 $email = $_POST['email'];


if (empty($login) || empty($pass)){
    echo "Заполните все поля";
} else 
{
    $sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login', '$pass', '$email')";
     if ($conn -> query($sql) === TRUE){
        echo "Успешная регистрация";
     }
     else {
        echo "Ошибка:" . $conn->error;
     }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
   
    <div class="logo-img">
        <div class="container">
            <img src="image-4.jpg" class="l2">
            <img src="Прямоугольник 1.png" class="l1">
            <img src="Прямоугольник 1.png" class="l4">
            <img src="Прямоугольник 2.png" class="l3">
            <img src="Прямоугольник 1.png" class="l5">
            <img src="Прямоугольник 1.png" class="l6">
            <img src="Прямоугольник 2.png" class="l9">
            <img src="Прямоугольник 1.png" class="l7">
            <img src="Прямоугольник 2.png" class="l8">
            
            
        </div>
    </div>

            <nav class="nav">
                <a class="nav-bar" href="Untitled-1.html" >Главная</a>
                <a href="#red" class="nav-bar" >Услуги</a>
                <a class="nav-bar" href="рассрочка.html">Рассрочка</a>
                <a href="#red2" class="nav-bar" href="">Контакты</a>
         
            </nav>
        </header>

        <div class="intro-bg">
            <div class="container">
                <div class="intro-inner">
                    <h1 class="intro-title" >SHOWCASE</h1>
                    <h2 class="intro-title2">Ремонт и утепление окон 
                       <br> с бесплатной диагностикой</h2>
                       <a href="#red3"class="knop">Войти</a>
                       <h2 class="intro-title3"> +7 771 536 4260
                        <br>г. Кокшетау  Бегельдинова 111</h2>
                </div>
            </div>
        </div>

                    

        <div class="menu-text1">
            <div class="container">
                <img src="1.png" class="v1">
                <div class="menu-inner1">
                    <h1 class="menu-title1">РЕМОНТ ОКОН</h1>
                   
                        <div class="menu-title2"><p> Компания «Окна Комфорта»
                           <br>предоставляет платный сервис
                           <br>по ремонту изделий из ПВХ и 
                           <br>алюминия.
                            </p>                
                </div>
            </div>
        </div>

        <div class="menu-text1">
            <div class="container">
                <img src="2.jpg" class="v2">
                <div class="menu-inner2">
                    <h1 class="menu-title3"id="red">ГАРАНТИЯ И СЕРВИС</h1>
                   
                        <div class="menu-title4"><p>Устанавливая окна, мы 
                           <br> несем гарантийные обязательства
                           <br> за конструкции и монтаж.
                            </p>                
                </div>
            </div>
        </div>

        <div class="menu-text1">
            <div class="container">
                <img src="images.jpeg" class="v3">
                <div class="menu-inner3">
                    <h1 class="menu-title5">ЗАМЕР ОКОН</h1>
                    <h1 class="op">Услуги</h1>
                    
                   
                        <div class="menu-title6"><p>Перед тем как заказать 
                            <br>окна необходимо измерить
                            <br>оконные проемы. В среднем 
                            <br>замер окон занимает 25 мин
                            </p>                
                </div>
            </div>
        </div>
        
        <div class="menu-text1">
            <div class="container">
                <img src="4.jpeg" class="v4">
                <div class="menu-inner4">
                    <h1 class="menu-title7">ОТДЕЛКА ОТКОСОВ</h1>
                   
                        <div class="menu-title8"><p>Для гармоничного вида 
                            <br> пвх окна и улучшения его 
                            <br> теплоизоляционных показателей 
                            <br> рекомендуем установку 
                            <br>пластиковых откосов.
                            </p>                
                </div>
            </div>
        </div>

        <div class="menu-text1">
            <div class="container">
                <img src="5.jpg" class="v5">
                <div class="menu-inner5">
                    <h1 class="menu-title9">ДОСТАВКА И САМОВЫВОЗ </h1>
                   
                        <div class="menu-title10"><p>С производственного комплекса 
                            <br> окна доставляются до места
                            <br>   установки на специальных 
                            <br> машинах – «пирамидах» для 
                            <br>  обеспечения сохранности заказа.
                            </p>                
                </div>
            </div>
        </div>
        <div class="menu-text1">
            <div class="container">
                <img src="6.jpg" class="v6">
                <div class="menu-inner6">
                    <h1 class="menu-title11">УСТАНОВКА ОКОН</h1>
                   
                        <div class="menu-title12"><p>Мы предлагаем два варианта 
                            <br> установки пластиковых окон «Классик» 
                            <br> (монтаж по ГОСТу) и «Идеал» 
                            <br> (монтаж с применением ПСУЛ, 
                            <br> термо- и пароизоляционных лент).
                            </p>                
                </div>
            </div>
        </div>

        <div class="menu-text1">
            <div class="container">
                <img src="a1.jpg" class="a1">
                <div class="menu-inner2">
                    <h1 class="menu-titlea">Стандарт</h1>
                    <h1 class="op2">Система остикленения</h1>
                   
            </div>
        </div>
        <div class="menu-text1">
            <div class="container">
                <img src="a2.png" class="a2">
                <div class="menu-inner2">
                    <h1 class="menu-titlea2">Стандарт+</h1>
              
                   
            </div>
        </div>
        <div class="menu-text1">
            <div class="container">
                <img src="a3.png" class="a3">
                <div class="menu-inner2">
                    <h1 class="menu-titlea3"id="red3">Intelio 80</h1>
                 
                   
            </div>
        </div>

        <div class="menu-text1">
            <div class="container">
                <img src="a4.png" class="a4">
                <div class="menu-inner2">
                    <h1 class="menu-titlea4">Премиум</h1>
                 
                   
            </div>
        </div>

        <div class="menu-text1">
            <div class="container">
                <img src="a5.png" class="a5">
                <div class="menu-inner2">
                    <h1 class="menu-titlea5">Эксклюзив</h1>
                 
                   
            </div>
        </div>
</div>




<div class="p22">Авторизация
   
    <br>
    <br>
    <br>Мы за короткое время изготовим 
    <BR>для вас подходящую систему остекления
        <BR>по индивидуальному заказу и нашим 
            <BR>точным замерам.Мы работаем для вас
                <BR> и отвечаем за качество товаров и 
                    <BR> услуг, даем гарантии и предлагаем 
                        <BR> выгодные цены.
</div>
    </div>
<form action="login.php" method="post">
<label for="login"><p><span class="pik">Ф.И.О</span><p></label>
<input type="text" placeholder="" name="login" id="login" required class="buttons">
<label for="email"><p><span class="pik2">Эл.почта</span><p></label>
<input type="email" placeholder="" name="email" required class="buttons1">
<label for="pass"><p><span class="pik1">Пароль</span><p></label>
<input type="password" placeholder="" name="pass" required class="buttons2">
<button type="submit" class="reg">Войти</button>

  <div class="menu-text1">
    <div class="container">
        <img src="lo2.png" class="log1">
        <div class="menu-inner1">
            <h1 class="menu-titlel1">ТЫСЯЧИ БЛАГОДАРНОСТЕЙ</h1>
           
                <div class="menu-titlel2">За более, чем 20-летнюю историю 
                    <br>мы заслужили безупречную репутацию 
                    <br>среди наших частных и корпоративных 
                    <br>клиентов
                    </p>
                
                </div>
          </div>
    </div>
    
  <div class="menu-text1">
    <div class="container">
        <img src="lo3.png" class="log2">
        <div class="menu-inner1">
            <h1 class="menu-titlel3">БОЛЕЕ 20 ЛЕТ ОПЫТА</h1>
           
                <div class="menu-titlel4">с 1999 года мы выросли от небольшой 
                    <br>компании до одного из лидеров на рынке 
                    <br>пластиковых окон в Кокшетау
                    </p>
                
                </div>
          </div>
    </div>

    <div class="menu-text1">
        <div class="container">
            <img src="lo1.png" class="log3">
            <div class="menu-inner1">
                <h1 class="menu-titlel5">ПРОИЗВОДСТВО БЕЗ БРАКА</h1>
               
                    <div class="menu-titlel6">Благодаря современному немецкому 
                        <br> оборудованию и квалифицированному 
                        <br>персоналу вероятность брака 
                        <br>крайне мала
                    
                    </div>
              </div>
        </div>

        <div class="menu-text1">
            <div class="container">
                <img src="icons8-гарантия-48.png" class="log4">
                <div class="menu-inner1">
                    <h1 class="menu-titlel7">ГАРАНТИЯ ДО 10 ЛЕТ</h1>
                   
                        <div class="menu-titlel8">Даем гарантию на окна до 10 
                            <br> лет! При возникновении гарантийного 
                            <br>  случая - бесплатно приедем  и устраним
                            <br> за свой счет!
                        
                        </div>
                  </div>
            </div>
            <div class="menu-text1">
                <div class="container">
                    <img src="lo4.png" class="log5">
                    <div class="menu-inner1">
                        <h1 class="menu-titlel9">ЗАБОТА О КЛИЕНТЕ </h1>
                       
                            <div class="menu-titlel10">Забота о клиенте - наш главный 
                                <br> принцип. Поэтому большинство наших 
                                <br> клиентов приходят по рекомендациям
                                <br>  и обращаются к нам повторно
                            
                            </div>
                      </div>
                </div>
    


                <div class="menu-text1">
                    <div class="container">
                        <img src="icons8-instagram-50.png" class="icon">
                        <img src="icons8-facebook-64.png" class="icon2">
                        <img src="icons8-твиттер-50.png" class="icon3">
                        <div class="menu-inner16">
                            <h1 class="kon">Контакты</h1>
                            <h1 class="kon2">Связь с нами</h1>
                            <h1 class="kon3">График работы</h1>
                            
                          
                         
          
                                    <a class="wa" id="red2">+7 771 536 4260</a>
                                    <a class="wa2" >+7 702 568 4239</a>
                                    <a class="wa3" >Pronature.miratorg22@gmail.com</a>
                                       <a class="wa5" >Пн-Пт: с 9:00 до 18:00
                                        <br>Сб-Вс: с 10:00 до 15:00</a>
                                        <a class="wa6" >Фабричные окна 2024 © Все права защищены</a>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4012.5750432980776!2d69.40557845936927!3d53.27356554194797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424c9461df8eff7f%3A0xf34c1936304b8469!2zItCS0YvRgdGI0LjQuSDRgtC10YXQvdC40YfQtdGB0LrQuNC5INC60L7Qu9C70LXQtNC2INC40LzQtdC90LggItCl0YPRgNCx0LDQvdCwINCl0LDQvdC00LbQuCI!5e0!3m2!1sru!2skz!4v1714774225155!5m2!1sru!2skz" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
                            
                                </div>
                            </div>
                        </div>

        </body>
        </html>














 