function loadContent (page) {
    switch (page) {
        case "save" :
              var action1 = "cate.json";
              var action2 = "catlist.json";
              var needSubTitle = false;
              break
        case "discount" :
              var action2 = "catlist.json";
              var needSubTitle = false;
              break;
        default:
              var action1 = "cate.json";
              var action2 = "catlist.json";
              var needSubTitle = true;
    }
    if (action1 && action2) {
        action1 = "../../action/" + action1;
        action2 = "../../action/" + action2;
        $.when($.ajax(action1), $.ajax(action2)).done(function(response1,  response2){
            var categoryList = response1[0][0].categoryList;
            createCategory(categoryList);
            createList(response2[0]);
            }).fail(function(){
                console.log('加载失败');
        });
    }

}

function createCategory (data) {
    $.each(data, function (index, category) {
        var className = (index == 0) ? 'selected' : '';
        var $liNd = $('<li class="' + className + '"><a data-id="' + category.linkrel + '" class="imgsort-list">' + category.categoryBigName + '</a></li>');
        $('#J-sort-wrapper').append($liNd);
    });
};

function createList (data) {
    $('#J-category-wrapper').html('');
    console.log(data);
    $.each(data, function (index, datalist) {
        var $wrapperNd = $('<div class="category-floor"><div class="floor__head">' + datalist.categoryName + '</div></div>'),
        $floorNd = $('<ul class="floor__body category__list cf"></ul>');
        $.each(datalist.dealList, function (index, deal) {
            var $liNd = $('<li class="deal-title">'
                + '<div class="deal-title__cover">'
                +   '<img src="' + deal.imgsrc + '" width=200 height=200/>'
                +   '<div class="deal-title__cart">'
                +       '<div class="cart-select__area">'
                +           '<span class="cart-select__area-btn">-</span>'
                +           '<span class="cart-select__area-number">0</span>'
                +           '<span class="cart-select__area-btn">+</span>'
                +       '</div>'
                +       '<div class="cart-select__result">已选（1袋）20斤</div>'
                +   '</div>'
                + '</div>'
                + '<div class="deal-title__describe">'
                +   '<h3>' + deal.name + '</h3>'
                +   '<p>' + deal.des + '</p>'
                +   '<p><strong class="num">' + deal.price + '</strong>元/' + deal.unit + '（' + deal.amount + deal.amountUnit + '）</p>'
                +   '<p><strong class="num">' + deal.averagePrice + '</strong>' + deal.averageUnit + '</p>'
                + '</div>'
                + '<span class="sales">已售' + deal.total + '</span>'
                + '</li>');
            $floorNd.append($liNd);
        });
        $wrapperNd.append($floorNd);
        $('#J-category-wrapper').append($wrapperNd);
    
    });
};

$('#J-sort-wrapper').delegate('li', 'click', function(){
    $(this).addClass('selected')
    .siblings().removeClass('selected');
    console.log($);
    $.get('../../action/catlist.json', {
        pageNum: $(this).children('a').attr('data-id')
    }, function (data, textStatus) {
        if (textStatus == 'success') {
            createList(data);
        } else {
            console.log('加载失败');
        }
    });
});


