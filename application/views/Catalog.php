<script type="text/javascript">

var totalElements = <?=count($products)?>;
var showedElements = <?=min($elementsOnPage,count($products))?>;
var elementsOnPage = <?=$elementsOnPage?>;

$(document).ready(function(){
    for(i = showedElements+1; i<=totalElements; i++)
        $("#good"+i).hide(0);
        
});


function showNext(flag){
        // Show next part of data
        showTo = Math.min(totalElements,showedElements+elementsOnPage);
      
        if(showedElements < showTo){
          
            for(i = showedElements+1; i<=showTo; i++)
                $("#good"+i).show(0);
                       
            showedElements = showTo;
            
            $("span#showedProducts").html(showedElements);        
            
            if(showedElements == totalElements)
                $("div.display-products").html("Немає більше продуктів");
            else
                $("div.display-products").html("Є ще " + (totalElements-showedElements));
         
            if(flag == 'btn')
                window.scroll(0,document.body.scrollHeight);
            
        }
}

$(window).scroll(function() {  
     
    if ($(document).height() - 100 /*+ Math.ceil(showedElements/elementsOnPage)*100 */ <= $(window).scrollTop() + $(window).height() ) {
           showNext();
    }
});
</script>

<div class="goods">
				<div class="saled">
					<div class="saled-head">
						НЕЙМОВІРНІ АКЦІЇ
					</div>
					<div class="tea-picture">
						<img src="<?=URL::base()?>img/A4.jpg" alt="">
					</div>
					<div class="tea-text">
						<div class="tea-price">
							<span class="tea-price-span">8900</span>
							<span class="tea-price-span-two">гривень</span>
						</div>
						<div class="tea-name-weight">
							Генмайча, 60 грам
						</div>
						<div class="btn-buy">
							ПРИДБАТИ
						</div>
					</div>
				</div>
				<div class="goods-head">
						ФАСОВАНИЙ ЧАЙ
				</div>
				<div class="navigation">
					<span class="navigation-element">Інтернет-супермаркет “Хотей”</span> → <span class="navigation-element">Фасований чай</span> → <span class="navigation-element">Зав’язаний</span>
				</div>
				<div class="number-products">
					Показано <span id="showedProducts"><?=min($elementsOnPage,count($products))?></span> із <?=count($products)?> товарів
				</div>
				<div class="goods-all">

<?php 
    $count = 1; 
     if(isset($products)): 
?>

<?php foreach($products as $item): ?>

					<div class="goods-item" id="good<?=$count++?>">
						<img src="<?=URL::base().$item->logo?>" alt="">
						<div class="goods-item-name">
							<a href="<?=URL::base().'product/'.$item->id?>" class=""><?=$item->title?></a>
						</div>
						<div class="goods-item-price">
							<?=$item->price?><span class="goods-item-price-text">грн.</span>
							<div class="goods-item-price-backet" onclick="addToBacket(<?=$item->id?>,<?=$item->price?>,1)"><img src="<?=URL::base()?>img/Cart_shop.svg" alt=""></div>
						</div>
					</div>
					
        
        <?php endforeach; ?>
        <?php endif; ?>



				
					<div style="clear:both;"></div>
					<div class="display-products" onclick="showNext('btn');">
						<?php if(count($products)-$elementsOnPage < 1): ?>
                            Товарів більше нема
                        <?php else: ?>
                            Є ще <?=count($products)-$elementsOnPage?>
                        <?php endif ?>
					</div>
				</div>
				

			</div>
  
  <div class="news">
				<div class="news-head">
					НОВИНИ <span class="news-symbol">$</span>
				</div>
				<div class="news-block">
					<div class="news-block-date">
						11 жовтня 2014
					</div>
					<div class="news-block-name">
						Скидка на опт -10%
					</div>
					<div class="news-block-text">
						Команда Чайного будинку "Хотей" довго думала, чим же здивувати наших клієнтів. <br>
І ми прийняли рішенння про проведення унікальної короткострокової акції: тільки для наших клієнтів скидка на весь чай по опту
					</div>
				</div>
				<div class="news-line"></div>
				<div class="news-block">
					<div class="news-block-date">
						11 жовтня 2014
					</div>
					<div class="news-block-name">
						Обновлення
					</div>
					<div class="news-block-text">
						На склад поступив новий чай, створюється коміссія по проведенню екскурсій заводом Хотей Да Хун Пао.
					</div>
				</div>
				<div class="news-line"></div>
				<div class="news-block">
					<div class="news-block-date">
						11 жовтня 2014
					</div>
					<div class="news-block-name">
						Чай в пакетиках
					</div>
					<div class="news-block-text">
						Команда Чайного будинку "Хотей" довго думала, чим же здивувати наших клієнтів. <br>
І ми прийняли рішенння про проведення унікальної короткострокової акції: тільки для наших клієнтів скидка на весь чай по опту
					</div>
				</div>
				<div class="all-news">Всі новинки</div>

				<div class="articles-head">
					СТАТТІ
				</div>
				<div class="news-block">
					<div class="news-block-name">
						Виробництво чаю на заводах
					</div>
					<div class="news-block-text">
						Команда Чайного будинку "Хотей" довго думала, чим же здивувати наших клієнтів. <br>
І ми прийняли рішенння про проведення унікальної короткострокової акції: тільки для наших клієнтів скидка на весь чай по опту
					</div>
				</div>
				<div class="news-line"></div>
				<div class="news-block">
					<div class="news-block-name">
						Лекція по приготуванню зеленого чаю
					</div>
					<div class="news-block-text">
						На склад поступив новий чай, створюється коміссія по проведенню екскурсій заводом Хотей Да Хун Пао.
					</div>
				</div>
				<div class="news-line"></div>
				<div class="news-block">
					<div class="news-block-name">
						Пошук правильної води для чаю в пакетиках
					</div>
					<div class="news-block-text">
						Команда Чайного будинку "Хотей" довго думала, чим же здивувати наших клієнтів. <br />
І ми прийняли рішенння про проведення унікальної короткострокової акції: тільки для наших клієнтів скидка на весь чай по опту
					</div>
				</div>
				<div class="all-news">Всі статті</div>
			</div>