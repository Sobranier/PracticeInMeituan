function loadContent (page) {
    switch (page) {
        case "save" :
              var action1 = "cate.json";
              var action2 = "catlist.json";
              var needSubTitle = true;
              break
        case "discount" :
              var action1 = "cate.json";
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
            createList(response2[0], needSubTitle);
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

function createList (data, ifNeedSubTitle) {
    $('#J-category-wrapper').html('');
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

// 品类选择发送请求
$('#J-sort-wrapper').delegate('li', 'click', function(){
    $(this).addClass('selected')
    .siblings().removeClass('selected');
    console.log($);
    $.get('../../action/catlist.json', {
        pageNum: $(this).children('a').attr('data-id')
    }, function (data, textStatus) {
        if (textStatus == 'success') {
            createList(data, true);
        } else {
            console.log('加载失败');
        }
    });
});

// 监听搜索框
$(function(){
    var resentS = [],
        storage = window.localStorage;
    //storage.setItem(index, JSON.stringify(content));

    // 搜索是不是存在搜索记录
    for (var index in storage) {
        if (index.substring(0,5) == 'bbbbb') {
            var storageItem = JSON.parse(storage.getItem(index));
            var Item = {
                "key": index,
                "word": storageItem
            };
            resentS.push(Item);
        }
    }
    addRecent(resentS);

    $("#J-form-search__input").focus(function(){
        setTimeout(function() {
            $('#J-search-suggest').css("display", "block");
        },500);
    }).blur(function(){
        setTimeout(function() {
            $('#J-search-suggest').css("display", "none");
        },500);
        // 注意点击之前就会先离开input，所以设定一个延时
    });
    $('#J-form-search__input').bind('input propertychange', function() {
        $('#J-search-suggest').html('');
        addRecent(resentS);
        if ($('#J-form-search__input').val().length > 1) {
            $.get('../../action/s_smart.json', {
                mtt: encodeURI($('#J-form-search__input').val())
            }, function (data, textStatus) {
                if (textStatus =='success') {
                    $.each(data, function (index, key) {
                        var $liNd = $('<li class="search-suggest__item">' + key.word + '</li>');
                        $('#J-search-suggest').append($liNd);
                    });
                } else {
                    console.log('智能请求失败');
                }
            
            });
        }
    });

    function addRecent() {
        if (resentS.length > 0) {
            var $liNd = $('<li class="search-suggest__tip">最近搜过</li>'); 
            $('#J-search-suggest').append($liNd);
            $.each(resentS, function (index, value) {
                var $liNd = $('<li class="search-suggest__item search-suggest__item--history"><a href = "javascript:void(0)" class = "remove" data-tip = "' + value.key + '">删除</a>' + value.word + '</li>');
                $('#J-search-suggest').append($liNd);
            });
        }
    }




    $('#J-search-suggest').delegate('li.search-suggest__item', 'click', function(){
        console.log($(this).innerHTML);

        $('#J-search-suggest').css("display", "none");
    
    });

});
