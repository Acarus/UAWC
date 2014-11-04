      <?php

   $arr = array();
    
   if(count($similar_with_bought) > 0)
        $arr[] = "З цим товаром також купують";
    
   if(count($similar_with_revised) > 0)
        $arr[] = "Проглядаються разом з поточним";
   
   if(count($similar_with_basket) > 0)
        $arr[] = "Додаються у кошик разом з поточним";
   
   
   $pState = NULL;
   
   if(count($arr) > 0)
        $pState = $arr[0];
        
        
   $showText = FALSE;
   if(count($arr) > 1)
        $showText = TRUE;
   
   ?>
   
     
     <div class="product-goods">
				<div class="navigation-product">
					<span class="navigation-element">Інтернет-супермаркет “Хотей”</span> → <span class="navigation-element">Фасований чай</span> → <span class="navigation-element">Зав’язаний</span> → <span class="navigation-element">Чай “Сенча” - 50 гр. Японський зелений чай</span>
				</div>
				<div class="after-navigation-line"></div>
				<div class="product-name">
					<?=$product['title']?>
				</div>
				<div class="short-product-description">
					<span class="short-product-description-item">Артикул: <?=$product['articul']?></span>
					<span class="short-product-description-item">Країна: Японія</span>
					<span class="short-product-description-item">Наявність: Уточнюйте по телефону</span>
				</div>
				<div class="product">
					<div>
					<div class="product-picture">
						<img src="<?=URL::base().$product['blogo']?>" alt="" >
					</div>
					<div class="product-form">
						<div class="product-form-name">
							ДОДАТИ ТОВАР У КОШИК
						</div>
						<div class="product-form-cout">
							<div class="cout">
								КІЛЬКІСТЬ
							</div>
							<div class="cout-form">
								<div class="minus" onclick="changeCountProduct(-1)"><div class="minus-line"></div></div>
								<div class="cout-form-center"><span id="count-product">1</span></div>
								<div class="plus" onclick="changeCountProduct(1)"><div class="minus-line"></div><div class="minus-line-vertical"></div></div>
							</div>
						</div>
						<div class="product-price">
							<div class="product-price-first">
									<span class="product-price-first-one">Ваша ціна:</span>
									<span class="product-price-first-two"><?=$product['price']?></span>
									<span class="product-price-first-tree">грн.</span>

							</div>
						</div>
						<div class="svg"><img src="<?=URL::base()?>img/Cart_buy.svg" alt="" ></div>
						<div class="product-add-to-backet">
							
							<span class="backet-add" onclick="addThisProduct(<?=$product['id']?>)">
								У кошик
							</span>

						</div>
						<div style="clear:both;"></div>
						<div class="product-line"></div>
						<div class="product-form-footer">
							<div class="product-form-footer-one">
									<span class="scales"> <img src="<?=URL::base()?>img/scales.png" alt=""></span>
									<span class="scales-text">ПОРІВНЯТИ ТОВАР</span>
							</div>
							<div class="scales-vertical-line"></div>
							<div class="product-form-footer-two">
									До порівняння <br> <span style="margin: 10px 0 0 17px"> 0 товарів </span>
							</div>
						</div>
					</div>
					<div style="clear:both"></div>
					</div>
					<div class="rate">Рейтинг: <span class="rate-symbols"><span class="green">tttt</span>t</span>
					</div>
					<div class="product-social-network">æäåèì	
					</div>
					<div style="clear:both"></div>
					<div class="product-description">
						<div class="product-description-head">
							ОПИС
						</div>
						<div class="product-description-text">
						  <?=$product['description']?>	
                        </div>
					</div>
					<div class="product-buy-description">
						<div class="product-buy-description-head">
							ЯК КУПИТИ ТОВАР?
						</div>
						<div class="product-buy-description-text">
							Узнать подробности о товарах и способе их покупки вы можете по бесплатному телефону:<span class="product-buy-telephone"> <br>  8 (800) 555-26-27 </span>
						</div>
					</div>
					<div style="clear:both"></div>
                    
                    <?php if(count($arr) > 0): ?>
					<div class="product-block-name"><?php if(count($arr) > 0){ echo $arr[0];  array_shift($arr);} ?></div>
					<div class="product-block-under">
						
						<div class="product-block-arrow left" onclick="left()">
							Ô		
						</div>
						<div class="product-block-arrow right" onclick="right()">
							×		
						</div>

						<!-- З ЦИМ ТОВАРОМ ТАКОЖ КУПУЮТЬ -->

						<div class="products-list list-one">
				
		              	<?php foreach($similar_with_bought as $item): ?>
							<div class="product-block-item">
								<div class="product-block-item-img">
									<img src="<?=URL::base().$item->logo?>" alt="<?=$item->title?>">
								</div>
								<div class="product-block-item-name">
									<a href="<?=URL::base().'product/'.$item->id?>"><?=$item->title?></a>
								</div>
								<div class="product-block-item-price">
									   <?=$item->price?>
                                    <span class="goods-item-price-text">грн.</span>
									<div class="product-block-item-backet" onclick="addToBacket(<?=$item->id?>,<?=$item->price?>,1)">
											<img src="<?=URL::base()?>img/Cart_shop.svg" alt="">
									</div>
								</div>
							</div>
                            <?php endforeach; ?>
                            
						</div>

						<!-- Додаються у кошик разом з поточним -->

						<div class="products-list list-two">
				            <?php foreach($similar_with_basket as $item): ?>
							<div class="product-block-item">
								<div class="product-block-item-img">
								 	<img src="<?=URL::base().$item->logo?>" alt="<?=$item->title?>">
								</div>
								<div class="product-block-item-name">
									<a href="<?=URL::base().'product/'.$item->id?>"><?=$item->title?></a>
								</div>
								<div class="product-block-item-price">
									   <?=$item->price?>
                                    <span class="goods-item-price-text">грн.</span>
									<div class="product-block-item-backet" onclick="addToBacket(<?=$item->id?>,<?=$item->price?>,1)">
											<img src="<?=URL::base()?>img/Cart_shop.svg" alt="">
									</div>
								</div>
							</div>
                            <?php endforeach; ?>
						</div>

						<!-- Проглядаються разом з поточним товаром -->

						<div class="products-list list-three">
			
                          <?php foreach($similar_with_revised as $item): ?>
							<div class="product-block-item">
								<div class="product-block-item-img">
							     	<img src="<?=URL::base().$item->logo?>" alt="<?$item->title?>">
								</div>
								<div class="product-block-item-name">
									<a href="<?=URL::base().'product/'.$item->id?>"><?=$item->title?></a>
								</div>
								<div class="product-block-item-price">
									   <?=$item->price?>
                                    <span class="goods-item-price-text">грн.</span>
									<div class="product-block-item-backet" onclick="addToBacket(<?=$item->id?>,<?=$item->price?>,1)">
											<img src="<?=URL::base()?>img/Cart_shop.svg" alt="">
									</div>
								</div>
							</div>
                            <?php endforeach; ?>
						
						</div>

					</div>
					<div class="another-block-inside-left" onclick="swapGroup(1)"><?php if(count($arr) > 0){ echo $arr[0];  array_shift($arr);} ?></div>
					<div class="another-block-inside-center"><?php if($showText): ?>ПОДИВИТИСЯ ТОВАРИ, ЯКІ<?php endif ?></div>
					<div class="another-block-inside-right" onclick="swapGroup(2)"><?php if(count($arr) > 0){ echo $arr[0];  array_shift($arr);} ?></div>
                    
                    <?php endif ?>
				</div>

			</div>

            <script type="text/javascript">
                 initSimilar(<?=count($similar_with_basket)?>,<?=count($similar_with_bought)?>,<?=count($similar_with_revised)?>,'<?=$pState?>');
            </script>

<div class="product-news">
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