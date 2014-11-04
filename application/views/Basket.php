
			<div class="backet-main">
				<div class="navigation-product">
					<span class="navigation-element">Інтернет-супермаркет “Хотей”</span> → <span class="navigation-element">Особистий кабінет</span> → <span class="navigation-element">Мій кошик</span>
				</div>
				<div class="after-navigation-line"></div>
				<div class="backet-main-name">
					МІЙ КОШИК
				</div>
				<div class="backet-short-information">
				Задати будь-які питання з приводу оформлення заказу ви можете нашим менеджерам за телефонами:  <span class="backet-telephone">8 800 555-26-27, 8 495 626-26-27</span>
				</div>
				<div class="backet-table-up">
					<span class="table-name">НАЗВА ТОВАРУ</span>
					<span class="table-price">ЦІНА ЗА ОДИНИЦЮ</span>
					<span class="table-cout">КІЛЬКІСТЬ</span>
					<span class="table-sum">СУММА</span>
				</div>
                
                <?php $total_price = 0; ?>
                <?php foreach($products as $item): ?>
                
				<div class="backet-item" id="backet-item-id<?=$item['id']?>">
                
					<span id="product-id" style="display: none;"><?=$item['id']?></span>
                    
                    <div class="backet-item-picture">
					 	<img src="<?=URL::base().$item['logo']?>" alt="<?=$item['title']?>" height="167px;">
					</div>
					<div class="backet-item-name">
						<?=$item['title']?>
					</div>
					<div class="backet-item-price">
						<span id="backet-item-price-id<?=$item['id']?>"><?=$item['price']?></span> гривень
					</div>
					<div class="backet-item-cout">
						<div class="cout-form">
							<div class="minus" onclick="changeCountBacket(-1,<?=$item['id']?>,<?=$item['price']?>)"><div class="minus-line"></div></div>
							<div class="cout-form-center" id="product-line-id<?=$item['id']?>"><?=$item['count']?></div>
							<div class="plus" onclick="changeCountBacket(1,<?=$item['id']?>,<?=$item['price']?>)"><div class="minus-line"></div><div class="minus-line-vertical"></div></div>
						</div>
					</div>
					<div class="backet-item-sum">
						<span id="product-calc<?=$item['id']?>"><?=$item['price']*$item['count']?><?php $total_price+=$item['price']*$item['count']; ?></span> гривень
					</div>
					<div class="backet-item-close" onclick="deleteProductEditor(<?=$item['id']?>)" >Î</div>
					<div style="clear:both;"></div>
				</div>
                
                <?php endforeach ?>
				
				
				<div class="conclusion">
					ПІДСУМОК (без вартості доставки): <span class="conclusion-price"><?=$total_price?></span>
				</div>
				
               
                <div class="erros-container">
                <?php if(isset($errors)): ?>
                <?php foreach($errors as $key => $value): ?>
                    <span style="color: red;"><?=$value?></span><br />
                <?php endforeach; ?>
                <?php endif; ?>
                </div>
    
                
                <form method="post">
                    <div class="backet-input">
                <input type="text" placeholder="Введіть П.І.Б" name="name"><span class="backet-input-red">*</span>
                </div>
                    <input type="submit" name="btn" value="ОФОРМИТИ ЗАКАЗ" class="btn-order" style="display: block;" />
                </form>
               
				<div class="under-btn">
					Це займе не більше 5 хвилин
				</div>
				<div class="go-back">
				<a href="<?=URL::base()?>"><span class="go-back-symbol">Ô</span> ВЕРНУТИСЯ ДО ПОКУПОК</a>
				</div>
			</div>	
