<!DOCTYPE html>
<html>

<head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Jost', sans-serif;
    }
    </style>
</head>

<body class="w3-light-grey">

    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <img src="https://papik.pro/uploads/posts/2022-01/1641163489_28-papik-pro-p-detskii-risunok-stroitelya-30.jpg"
                            style="width:100%" alt="Avatar">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                            <?php //php 7.2.24

              $name = 'Вася';
              $prof = 'Строитель';
              $city = 'Москва';
              $email = 'vasy@my_stroyka.ru';
              $tel = +78004005555;

              ?>
                            <h2><?php echo $name; ?></h2>
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i
                                class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $prof; ?>
                        </p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city; ?>
                        </p>
                        <p><i
                                class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?>
                        </p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $tel; ?>
                        </p>
                        <hr>

                        <p class="w3-large"><b><i
                                    class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
                        <?php //php 7.2.24

            $navyk = [97, 83, 70, 80];

            ?>
                        <p>Кладка кирпича</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal"
                                style="width:<?php echo $navyk[0]; ?>%"><?php echo $navyk[0]; ?>%</div>
                        </div>
                        <p>Сварка</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal"
                                style="width:<?php echo $navyk[1]; ?>%">
                                <div class="w3-center w3-text-white"><?php echo $navyk[1]; ?>%</div>
                            </div>
                        </div>
                        <p>Отделочные работы</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
                        </div>
                        <p>Такелаж</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
                        </div>
                        <br>

                        <p class="w3-large w3-text-theme"><b><i
                                    class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
                        <p>Русский "разговорный"</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                        </div>
                        <p>Русский</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
                        </div>
                        <p>Все остальные народности на стройке</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
                        </div>
                        <br>
                    </div>
                </div><br>

                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>

                    <?php
          $jobs = array(
            'Прораб' => array(
              'text' => 'Строителтство объектов ГавМосСтрой.',
              'data' => 'Jan 2015 - Current'
            ),
            'Крановщик' => array(
              'text' => '..., так получилось.',
              'data' => 'Dec 2010 - Jan 2015'
            ),
            'Сварщик' => array(
              'text' => 'кому то же надо...',
              'data' => 'May 2000 - Dec 2010'
            ),
            'Грузчик' => array(
              'text' => 'парень работящий...',
              'data' => 'Jan 1995 - May 2000'
            )

          );

          foreach ($jobs as $key => $item) {
            echo ' <div class="w3-container">
          <h5 class="w3-opacity"><b>' . $key . '</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>' . $item['data'] . '</h6>
          <p>' . $item['text'] . '</p>
          <hr>
        </div>';
          }
          ?>


                </div>

                <div class="w3-container w3-card w3-white">
                    <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Строительное ПТУ №70</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>1993-1994</h6>
                        <p>, Разнорабочий на стройке</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>СМУ 12</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>1998- 2000</h6>
                        <p>Сварка электродуговая</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>gb.ru</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>В настоящее время</h6>
                        <p>Инженер ИИ</p><br>
                    </div>
                </div>

                <!-- End Right Column -->
            </div>

            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-teal w3-center w3-margin-top">
        <p>Find me on social media.</p>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <!-- End footer -->
    </footer>

</body>

</html>