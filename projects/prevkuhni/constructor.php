<!DOCTYPE html>
<noindex>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Конструктор</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="css/constructor.css">
  <link rel="stylesheet" href="css/constructor_media.css">
  <link rel="stylesheet/less" type="text/less" href="views/style.less" />
	<script type="text/javascript" src="less/dist/less.min.js"></script>
</head>

<body>
<?php require_once 'top.php';?>
  <section>
    <div class="container">
      <h2>Конструктор кухонь</h2>
      <div class="calculator">
        <div class="calculator_bar">
          <div class="calculator_bar_item done">
            <span class="number">1</span>
            <span>Вариант исполнения</span>
          </div>
          <div class="calculator_bar_item">
            <span class="number">2</span>
            <span>Фасады</span>
          </div>
          <div class="calculator_bar_item">
            <span class="number">3</span>
            <span>Столещницы</span>
          </div>
          <div class="calculator_bar_item">
            <span class="number">4</span>
            <span>стеновая панель</span>
          </div>
          <div class="calculator_bar_item">
            <span class="number">5</span>
            <span>Фурнитура</span>
          </div>
          <div class="calculator_bar_item">
            <span class="number">6</span>
            <span>Контакты</span>
          </div>
        </div>
        <div class="calculator_body">
          <form id="calc_form" enctype="multipart/form-data">
            <div class="calc_form_stage active_stage" id="stage1">
              <div class="flex-wrap">
                <select size="4" id="select_stage1" name="Вариант исполнения">
                  <option selected value="Прямая">Прямая</option>
                  <option value="Угловая">Угловая</option>
                  <option value="П-образная">П-образная</option>
                  <option value="Островная">Островная</option>
                </select>
                <div class="select1_container">
                  <div class="select1_box">
                    <div class="select1_box_hover selected"></div>
                    <img class="lozad" src="images/ss1_1.png" alt="">
                    <span>Прямая</span>
                  </div>
                  <div class="select1_box">
                    <div class="select1_box_hover"></div>
                    <img class="lozad" src="images/ss1_2.png" alt="">
                    <span>Угловая</span>
                  </div>
                  <div class="select1_box">
                    <div class="select1_box_hover"></div>
                    <img class="lozad" src="images/ss1_3.png" alt="">
                    <span>П-образная</span>
                  </div>
                  <div class="select1_box">
                    <div class="select1_box_hover"></div>
                    <img class="lozad" src="images/ss1_4.png" alt="">
                    <span>Островная</span>
                  </div>
                </div>
                <div class="stage1_plan">
                  <span class="invalid-desc1">Заполните поле</span>
                  <input type="number" id="size1" name="Размер 1" required>
                  <label for="size1">мм</label>
                  <span class="invalid-desc2">Заполните поле</span>
                  <input type="number" id="size2" name="Размер 2" required>
                  <label for="size2">мм</label>
                  <span class="invalid-desc3">Заполните поле</span>
                  <input type="number" id="size3" name="Размер 3" class="disible_input">
                  <label for="size3">мм</label>
                  <span class="red_desc">* Заполните поля размеров в милиметрах </span>
                  <div class="stage1_plan_item selected">
                    <img class="lozad" src="images/plan1.png" alt="">
                  </div>
                  <div class="stage1_plan_item">
                    <img class="lozad" src="images/plan2.png" alt="">
                  </div>
                  <div class="stage1_plan_item">
                    <img class="lozad" src="images/plan3.png" alt="">
                  </div>
                  <div class="stage1_plan_item">
                    <img class="lozad" src="images/plan4.png" alt="">
                  </div>
                </div>
                <hr class="stage">
                <div class="stage_desc">
                  <p>Выберите форму кухни и заполните размеры,<br>нажимайте "Далее →"</p>
                </div>
              </div>
            </div>
            <div class="calc_form_stage" id="stage2">
              <select size="7" id="select_stage2" name="Фасады">
                <option selected value="ЛДСП"></option>
                <option value="Плёнка"></option>
                <option value="Пластик"></option>
                <option value="Акрил"></option>
                <option value="Эмаль"></option>
                <option value="Шпонированный"></option>
                <option value="Массив"></option>
              </select>
              <div class="select2_container">
                <div class="select1_box">
                  <div class="select1_box_hover selected"></div>
                  <img class="lozad" src="images/ss2_6.png" alt="">
                  <span>ЛДСП</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss2_2.png" alt="">
                  <span>Плёнка</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss2_3.png" alt="">
                  <span>Пластик</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss2_4.png" alt="">
                  <span>Акрил</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss2_5.png" alt="">
                  <span>Эмаль</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" data-class="lozad" src="images/ss2_1.png" alt="">
                  <span>Шпониро-<br>ванный</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss2_7.png" alt="">
                  <span>Массив</span>
                </div>
              </div>
              <hr class="stage">
              <div class="stage_desc">
                <p>От материала фасада зависит общий вид кухни, её долговечность и фасады могут сильно влиять на стоимость кухни. Выбор цветов и фактур очень большой, к сожалению фотография не может передать истинный вид материала. И еще не мало важно учитывать какого производства материал, даже дорогой акрил может быть “китайского” производства.</p><br>
                <p>
                  <ul>
                    <li>Пленка - это самый бюджетный вариант, огромное количество расцветок и возможность фрезеровки фасадов;</li>
                    <li>ЛДСП - это бюджетное решение, цветов меньше, но более надежное;</li>
                    <li>Пластик и акрил - стойкое и долговечное покрытие, может быть глянцевым и супер глянцевым стойким к царапинам;</li>
                    <li>Эмаль - это крашенный МДФ, технология нанесения краски как у автомобилей, возможность использования гнутых фасадов;</li>
                    <li>Шпон - основа МДФ, верхнее покрытие из натурального дерева, красиво и дорого;</li>
                    <li>Массив - это натуральная древесина, дорого, экологично и красиво.</li>
                  </ul>
                   </p>
              </div>
            </div>
            <div class="calc_form_stage" id="stage3">
              <select size="4" id="select_stage3" name="Столешницы">
                <option selected value="Пластик"></option>
                <option value="Акрил"></option>
                <option value="Кварцевый агломерат"></option>
                <option value="Натуральный камень"></option>
              </select>
              <div class="select3_container">
                <div class="select1_box">
                  <div class="select1_box_hover selected"></div>
                  <img class="lozad" src="images/ss3_1.png" alt="">
                  <span>Пластик</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss3_2.png" alt="">
                  <span>Акрил</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss3_3.png" alt="">
                  <span>Кварцевый
                    <br>агломерат</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss3_4.png" alt="">
                  <span>Натуральный камень</span>
                </div>
              </div>
              <hr class="stage">
              <div class="stage_desc">
                <p>Выбор столешниц так же огромный по цвету и материалу.<br>
                    Самый дешевый и распрастраненный это Пластик (пластик внешнее покрытие, внутри как правило ДСП).<br>
                    Акрил и кварцевый агломерат относительно дорогие и долговечные материалы, их характеристики очень сильно зависят от<br>
                    производителя.<br>
                    Натуральный камень самый дорогой материал.</p>
              </div>
            </div>
            <div class="calc_form_stage" id="stage4">
              <select size="4" id="select_stage4" name="Стеновая панель">
                <option selected value="Плитка"></option>
                <option value="Дизайн панели ALBICO"></option>
                <option value="Материал столешницы"></option>
                <option value="Фотопечать (скинали)"></option>
              </select>
              <div class="select4_container">
                <div class="select1_box">
                  <div class="select1_box_hover selected"></div>
                  <img src="images/ss4_1.png" alt="">
                  <span>Плитка</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss4_2.png" alt="">
                  <span>Дизайн панели
                    <br>Albico</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss4_3.png" alt="">
                  <span>Материал<br>столешницы</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss4_4.png" alt="">
                  <span>Фотопечать
                    <br>(скинали)</span>
                </div>
              </div>
              <hr class="stage">
              <div class="stage_desc">
                <p>Стеновая панель не обязательный элемент.<br>
                    Стеновая паленль не только облегчает уборку кухни, но и делает её завершенной.</p>
              </div>
            </div>
            <div class="calc_form_stage" id="stage5">
              <select size="3" id="select_stage5" name="Фурнитура">
                <option selected value="Эконом"></option>
                <option value="Стандарт"></option>
                <option value="Премиум"></option>
              </select>
              <div class="select5_container">
                <div class="select1_box">
                  <div class="select1_box_hover selected"></div>
                  <img class="lozad" src="images/ss5_1.png" alt="">
                  <span>Эконом</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss5_2.png" alt="">
                  <span>Стандарт</span>
                </div>
                <div class="select1_box">
                  <div class="select1_box_hover"></div>
                  <img class="lozad" src="images/ss5_3.png" alt="">
                  <span>Премиум</span>
                </div>
              </div>
              <hr class="stage">
              <div class="stage_desc">
                <p>Фурнитура это ключевая составляющая любой кухни, от нее зависит не только долговечность, но и удобство использования.<br>
                    Если очень грубо разделить по стоимости, то можно выделить три группы “Эконом”, “Стандарт”, “Премиум”.<br><br>
                    Эконом - это бюджетная фурнитура, обычные петли, газ лифты.<br>
                    Стандарт - это петли с доводчиками, подъемные механизмы.<br>
                    Премиум - это дорогая и долговечная фунитура с сервоприводами, которые облегчают использование кухни.</p>
              </div>
            </div>
            <div class="calc_form_stage" id="stage6">
                <p>Напишите ваши контакты и наш специалист сделает предварительный расчет.<br>
                  В комментарии напишите в какое время вам было бы удобно принять звонок от дизайнра. </p>
              <div class="select6_container">
                
                <input type="text" name="Имя" id="name" placeholder="Имя: *" required>
                <input type="text" name="Телефон" id="phone" placeholder="Телефон: *" required>
                <div class="input_row">
                  <label for="file">Прикрепить эскиз:</label>
                  <input type="file" name="file[]" multiple id="file">
                </div>
                <textarea name="Комментарий" id="comment" cols="30" rows="1" placeholder="Оставьте комментарий:"></textarea>
                <span class="requared">* Поля обязательные для заполнения</span>
                <div class="attantion">
                  <span>Нажимая на кнопку отправить, вы соглашаетесь с условиями
                    <a href="politika.pdf" target="_blank">Политики конфиденциальности</a>
                  </span>
                </div>
                <div class="form-group">
                  <button class="back_stage">← Назад</button>
                  <input class="btn" type="submit" value="Отправить">
                </div>
              </div>
            </div>
          </form>
		  <div class="form-success">Ваша заявка успешно отправлена!</div>
        </div>
        <div class="calculator_footer">
          <button class="back_stage">← Назад</button>
          <button class="next_stage">Далее →</button>
        </div>
      </div>
    </div>
  </section>
  <?php require_once 'footer.php';?>
  <!-- scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="form/form.js"></script>  
  <script src="js/calc.js"></script>
</body>

</html>
</noindex>