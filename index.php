<!DOCTYPE html>
<html>
    <head>
	<meta content="IE=edge" http-equiv="X-UA-Compatible">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Филиал 11 ГУ-ХРО ФСС</title>
        <link rel="stylesheet" href="css/stylefss.css">
	<link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
        <link rel="import4" href="fourtable.html">
        <link rel="import3" href="threetable.html">
        <link rel="import2" href="secondtable.html">
    </head>

    <body>
        <div class="page">
            
        <header class="head">
            <img id="imglog" src="img/fsspro.png" alt="">
            <h1>Филиал №11 </br>Государственного учреждения-Хабаровского регионального отделения</br> Фонда социального страхования РФ</h1>
        </header>

        <main>
            <div class="leftPanel">
                <p class="hrefz">Внутренние порталы</p>
                <ul class="ulhrefz">
                    <li class="lihrefz"><a href="http://10.225.16.30/fss/ui" target="_blank">С Э Д </a></li>
                    <li class="lihrefz"> <a href="http://smev.fca.fss.ru/uslugi/main.html" target="_blank">С М Э В</a> </li>
                    <li class="lihrefz"><a href="http://cr.dpc.fss.ru/" target="_blank">  ПОРТАЛ СОТРУДНИКА Фонда</a></li>
                    <li class="lihrefz"><a href="http://portal.fca.fss.ru/" target="_blank">  ПОРТАЛ ФСС</a></li>
                    <li class="lihrefz"><a href="https://mail.fss.local/owa/" target="_blank">   Н О В А Я ПОЧТА FSS.local</a></li>
                    <li class="lihrefz"><a href="http://ias.int.fss.ru" target="_blank">                   ИАС ФСС</a></li>
                    <li class="lihrefz"><a href="http://sv.dpc.fss.ru/apex/f?p=102:LOGIN:104989652303417:::::" target="_blank">Вход в систему SV DPC</a></li>  
                    <li class="lihrefz"><a href="http://wozm.dpc.fss.ru/wozm/" target="_blank">   Процессинг и управление выплатами  ФИН.МОДУЛЬ</a></li>
                    <li class="lihrefz"><a href="http://wozm-test.dpc.fss.ru/wozm/" target="_blank">                           тест ФИН.МОДУЛЬ</a></li>
                    <li class="lihrefz"><a href="http://10.225.14.12:7777/pls/apex/f?p=170" target="_blank">Витрина данных МСЭ ro_khab ro_khab1 </a></li>
                    <li class="lihrefz"><a href="http://docs-test.fss.ru/home/upload" target="_blank">тест ШЛЮЗ АРМ ЛПУ</a></li>
                    <li class="lihrefz"><a href="http://docs.fss.ru/home/upload" target="_blank">          ШЛЮЗ АРМ ЛПУ</a></li>
                    <li class="lihrefz"><a href="http://www.fss.ru/" target="_blank">     Сайт ФСС</a></li>
                    <li class="lihrefz"><a href="http://r27.fss.ru/" target="_blank">     Сайт ХРО</a></li>
                    <li class="lihrefz"><a href="http://eiis.fca.fss.ru" target="_blank"> Форум ФСС</a></li>
                    <li class="lihrefz"><a href="http://ias.int.fss.ru/" target="_blank"> Информационно-аналитическая система     </a></li> 
                    <li class="lihrefz"><a href="http://10.225.4.11/ssturf" target="_blank">ССТУ     </a></li> 
                    <li class="lihrefz"><a href="http://10.225.12.41:8080/" target="_blank">КАС АХД "Материальный учет и недвижимость"       </a></li> 
                    <li class="lihrefz"><a href="http://10.22.200.12:28081/" target="_blank">СУФД</a></li> 
                    <li class="lihrefz"><a href="http://f4.fss.ru/" target="_blank">Шлюз приема Ф-4</a></li>
                    <li class="lihrefz"><a href="http://docs.fss.ru/" target="_blank">Шлюз приема документов</a></li>
                </ul>
                <p class="hrefz">Справочники</p>
                <ul class="ulhrefz">
                    <li class="lihrefz"><a href="http://10.27.0.133/" target="_blank">Тел. спр. Хабаровска </a></li>
                </ul>
                <img src="img/dr.png" alt="">
            </div>
            <div class="rightPanel">
                <!-- <menu id="emenu">
                    <li class="eli"><a id="a4" href="#ft">4 этаж</a></li>
                    <li class="eli"><a id="a3" href="#tt">3 этаж</a></li>
                    <li class="eli"><a id="a2" href="#st">2 этаж</a></li>
                </menu> -->
                <div class="tabs">
                     <div class="tab">
                        <input type="radio" id="tab1" name="tab-group" checked>
                        <label for="tab1" class="tab-title">4 этаж</label> 
                        <section class="tab-content"><?php include ("fourtable.php");?></section>
                     </div> 
                    <div class="tab">
                        <input type="radio" id="tab2" name="tab-group">
                        <label for="tab2" class="tab-title">3 этаж</label> 
                        <section class="tab-content"><?php include ("threetable.php");?></section>
                    </div>
                    <div class="tab">
                        <input type="radio" id="tab3" name="tab-group">
                        <label for="tab3" class="tab-title">2 этаж</label> 
                        <section class="tab-content"><?php include ("secondtable.php");?></section> 
                    </div> 
                    </div>
                <!-- <div id="tables">
                    <div id="sTable">
                        <?php include ("secondtable.php");?>
                    </div>
                    <div id="tTable">
                        <?php include ("threetable.php");?>
                    </div>
                    <div id="fTable">
                        <?php include ("fourtable.php");?>
                    </div>
                </div> -->

                <div class="dop">
            
            <div class="otherSites">
                        <p>Внешние сайты</p>
                        <ul class="oSul">
                            <li>
                               <a href="https://esia.gosuslugi.ru/" target="_blank">ГосУслуги</a> 
                            </li>
                            <li>
                               <a href="https://kad.arbitr.ru/" target="_blank">Арбитражный суд</a> 
                            </li>
                            <li>
                               <a href="http://www.consultant.ru/online/" target="_blank">Консультант +</a> 
                            </li>
                        </ul>
                    </div>
    
                    <div class="Fed">
                        <p>Федеральные службы</p>
                        <ul class="oSul">
                            <li>
                               <a href="https://www.nalog.ru/rn77/" target="_blank">ФНС</a> 
                            </li>
                            <li>
                               <a href="https://pfr.gov.ru/" target="_blank">ПФР</a> 
                            </li>
                            <li>
                               <a href="http://www.ffoms.gov.ru/" target="_blank">ФФОМС</a> 
                            </li>
                            <li>
                               <a href="https://rosstat.gov.ru/" target="_blank">РОССТАТ</a> 
                            </li>
                        </ul>
                        
                    </div>
            </div>
            </div>
           
        </main>

        
        <footer class="footer">
            <p>© ХРО ФСС РФ Филиал 11 © Комсомольск-на-Амуре © <span id="fyear">2019</span> г. ©</p>
        </footer>    
       
        </div>
        
        <script src="js/jquery.js"></script>
        <script src="js/jsFss.js"></script> 
         <!-- <script src="js/jsdop.js"></script>   -->
   
   
        </body>
    
                   
</html>