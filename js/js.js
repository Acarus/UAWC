var state;
var countBacket;
var countBought;
var countRevised;

$(document).ready(function() {
    updateBacketInfo();

    setInterval(function() {

        if ($(document).scrollTop() >= 184) {
            $(".backet-fixed").css("display", "block");
        } else {
            $(".backet-fixed").css("display", "none");
        }

    }, 15);

});

function initSimilar(cBacket, cBought, cRevised, pState) {
    countBacket = cBacket;
    countBought = cBought;
    countRevised = cRevised;

    setState(pState);
}

function setState(s) {

    $(".product-block-arrow").hide(0);

    if (s == "З цим товаром також купують") {
        $(".list-one").show(0);
        $(".list-two").hide(0);
        $(".list-three").hide(0);

        // show/hide arrows
        if (countBought == 4)
            $(".product-block-arrow.right").show(0);

    } else if (s == "Додаються у кошик разом з поточним") {
        $(".list-one").hide(0);
        $(".list-two").show(0);
        $(".list-three").hide(0);

        if (countBacket == 4)
            $(".product-block-arrow.right").show(0);
    } else {
        $(".list-one").hide(0);
        $(".list-two").hide(0);
        $(".list-three").show(0);

        if (countRevised == 4)
            $(".product-block-arrow.right").show(0);

    }

    state = s;
    $(".product-block-name").html(s);

    // start position
    $(".products-list").css("margin-left", "15px");
}

// id 1 - left btn
// id 2 - right btn
function swapGroup(groopId) {

    if (groopId == 1) {
        leftState = $(".another-block-inside-left").html();
        $(".another-block-inside-left").html(state);
        setState(leftState);
    } else {
        rightState = $(".another-block-inside-right").html();
        $(".another-block-inside-right").html(state);
        setState(rightState);
    }
}


function left() {

    if ((state == "З цим товаром також купують" && countBought == 4) || (state == "Додаються у кошик разом з поточним" && countBacket == 4) || (state == "Проглядаються разом з поточним" && countRevised == 4)) {
        $(".products-list").css("margin-left", "15px");

        $(".product-block-arrow.right").show(0);
        $(".product-block-arrow.left").hide(0);
    }
}

function right() {

    if ((state == "З цим товаром також купують" && countBought == 4) || (state == "Додаються у кошик разом з поточним" && countBacket == 4) || (state == "Проглядаються разом з поточним" && countRevised == 4)) {
        $(".products-list").css("margin-left", "-235px");


        $(".product-block-arrow.right").hide(0);
        $(".product-block-arrow.left").show(0);
    }
}


// Backet functions

function addThisProduct(id) {

    price = $("span.product-price-first-two").html();
    count = $("span#count-product").html();

    addToBacket(id, price, count);
}

function addToBacket(id, price, count) {

    if (count < 1)
        return;

    priceOfAllBacket = $.cookie('pbasket');

    if (priceOfAllBacket)
        priceOfAllBacket = parseInt(priceOfAllBacket);
    else
        priceOfAllBacket = 0;

    products = $.cookie('basket');
    counts = $.cookie('bcount');


    if (products) {
        // Send ajax request for creating relation between current element and each of basket

        $.post("ajax/atb", {
            id: id,
            basket: products
        }, function() {});

        eProducts = products.split(',');
        eCounts = counts.split(',');

        // try to find it in backet
        finded = false;
        for (i = 0; i < eProducts.length; i++)
            if (eProducts[i] == id) {
                finded = true;
                // add few elements of this product
                eCounts[i] = parseInt(eCounts[i]) + parseInt(count);
                counts = eCounts.join(',');
                break;
            }

        if (!finded) {
            products = products + "," + id;
            counts = counts + "," + count;
        }


    } else {
        products = id;
        counts = count;
    }

    $.cookie('basket', products, {
        path: '/'
    });
    $.cookie('bcount', counts, {
        path: '/'
    });
    priceOfAllBacket += parseInt(count) * parseInt(price);
    $.cookie('pbasket', priceOfAllBacket, {
        path: '/'
    });
    updateBacketInfo();
}

function updateBacketInfo() {

    bPrice = $.cookie('pbasket');

    if (bPrice)
        bPrice = parseInt(bPrice);
    else
        bPrice = 0;

    $("span#basket-info-price").html(bPrice);

    bCount = $.cookie('basket');

    if (bCount) {
        bCount = bCount.split(',').length;
    } else {
        bCount = 0;
    }

    $("span#basket-info-count").html(bCount);

}

function changeCountProduct(val) {
    count = parseInt($("span#count-product").html());
    count = Math.max(1, count + val);

    $("span#count-product").html(count);
}

function changeCountBacket(val, id, price) {
    count = parseInt($("div#product-line-id" + id).html());
    count = Math.max(1, count + val);

    $("div#product-line-id" + id).html(count);
    $('span#product-calc' + id).html(count * price);

    updateBacketEditor();

}

function updateBacketEditor() {

    products_list = "";

    $('span#product-id').each(function(obj) {
        index = $(this).html();

        if (products_list.length > 0)
            products_list = products_list + ',' + index;
        else
            products_list = index;

    });

    pArr = products_list.split(',');
    countList = "";
    totalPrice = 0;

    for ($i = 0; $i < pArr.length; $i++) {
        cPrice = parseInt($("span#backet-item-price-id" + pArr[$i]).html());
        cCount = parseInt($("div#product-line-id" + pArr[$i]).html());
        totalPrice = totalPrice + cCount * cPrice;

        if (countList.length > 0)
            countList = countList + ',' + cCount.toString();
        else
            countList = cCount.toString();

    }

    if (products_list.length > 0) {
        $.cookie('basket', products_list, {
            path: '/'
        });
        $.cookie('bcount', countList, {
            path: '/'
        });
        $.cookie('pbasket', totalPrice.toString(), {
            path: '/'
        });
        $('span.conclusion-price').html(totalPrice.toString());

    } else {
        $.removeCookie('basket', {
            path: '/'
        });
        $.removeCookie('bcount', {
            path: '/'
        });
        $.removeCookie('pbasket', {
            path: '/'
        });

        $('span.conclusion-price').html("0");
    }

    updateBacketInfo();

}


function deleteProductEditor(id) {
    $("div#backet-item-id" + id).remove();

    updateBacketEditor();
}