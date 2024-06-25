let buttons = $('.insert-btn');
let btnMinus = $('.fa-minus');
let btnPlus = $('.fa-plus');
let btnDelete = $('.delete-card-btn');
let time = 0;

for (const item of buttons) {
	$(item).click(() => {
		$.ajax({
			method: "POST",
			url: "../insert-product-cart.php",
			data: { idProduct: item.id, idUser: idUser }
		}).done(function(result) {
			alert('Товар успешно добавлен!');
			});
		});
};


for (const item of btnPlus) {
	$(item).click(function () {
		$.ajax({
			method: "POST",
			url: "../insert-product-cart.php",
			data: { idProduct: item.id, idUser: idUser }
		}).done(function(result) {
			$(item).siblings('.text').text(Number($(item).siblings('.count.text').text()) + 1); 
			sumUpdate();
		});
	});
}

for (const item of btnMinus) {
	$(item).click(function () {
		$.ajax({
			method: "POST",
			url: "../delete-product-cart.php",
			data: { idProduct: item.id }
		}).done(function(result) {
			$(item).siblings('.text').text(Number($(item).siblings('.count.text').text()) - 1); 
			sumUpdate();
			checkCount();
		});
	});
}

for (const item of btnDelete) {
	$(item).click(function () {
		$.ajax({
			method: "POST",
			url: "../delete-product-cart.php",
			data: { idProduct: item.id }
		}).done(function(result) {
			$(item).siblings('.text').text(Number($(item).siblings('.count.text').text())); 
			sumUpdate();
			checkCount();
			location.reload();
		});
	});
}

function sumUpdate() {
	let sum = 0;
	for (const item of $(".list .item")) {
		let price = Number(item.querySelector(".price.text").innerText.slice(item.querySelector(".price.text"), -4).replace(/\s+/g, ''));
		let productCount = Number(item.querySelector(".count.text").innerText);
		sum += price * productCount;
		$(".result.text").text(new Intl.NumberFormat('ru-RU').format(sum) + " руб.");
	}
}

function checkCount() {
	for (const item of $(".list .item")) {
		if (Number(item.querySelector(".count.text").innerText) == 0) {
			item.parentNode.removeChild(item);
		}
	}
}


// Сортировка по цене 
let a = document.querySelector('#price-asc')
if(a){
	a.onclick = function () {
		mySort('data-price')
	};

	document.querySelector('#price-desc').onclick = function () {
		mySortDesc('data-price');
	};
	
	document.querySelector('#price-notsort').onclick = function () {
		siteReload();
	};

	const price_btn = document.querySelector('.price__filer--btn');
	price_btn.addEventListener('click', function () {
		document.querySelector('.price__filter').classList.toggle('hide');
	});

	const cat_btn = document.querySelector('.category__filter--btn');
	cat_btn.addEventListener('click', function () {
		document.querySelector('.category__filer').classList.toggle('hide');
	});
	
}




function siteReload() {
	location.reload();
}

function mySort(sortType) {
	let product_card = document.querySelector('.product__cards');
	for (let i = 0; i < product_card.children.length; i++) {
		for (let j = i; j < product_card.children.length; j++) {
			if (+product_card.children[i].getAttribute(sortType) > +product_card.children[j].getAttribute(sortType)) {
				replacedNode = product_card.replaceChild(product_card.children[j], product_card.children[i]);
				insertAfter(replacedNode, product_card.children[i]);
			}
		}
	}
}

function mySortDesc(sortType) {
	let product_card = document.querySelector('.product__cards');
	for (let i = 0; i < product_card.children.length; i++) {
		for (let j = i; j < product_card.children.length; j++) {
			if (+product_card.children[i].getAttribute(sortType) < +product_card.children[j].getAttribute(sortType)) {
				replacedNode = product_card.replaceChild(product_card.children[j], product_card.children[i]);
				insertAfter(replacedNode, product_card.children[i]);
			}
		}
	}
}

function insertAfter(elem, refElem) {
	return refElem.parentNode.insertBefore(elem, refElem.nextSibling);
}

// Фильтр по категориям
let filter = $("[data-filter]");
filter.on("click", function () {
	let cat = $(this).data('filter');

	if (cat == 'All') {
		$("[data-category]").removeClass('hide');
	} else {
		$("[data-category]").each(function () {
			let prodCat = $(this).data('category');
			if (prodCat != cat) {
				$(this).addClass('hide');
			} else {
				$(this).removeClass('hide');
			}
		});
	}
});


