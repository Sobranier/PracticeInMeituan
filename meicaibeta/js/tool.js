//切换按钮
function switchShow(pressId, targetId) {
    $(pressId).bind("click", function(){
        $(targetId).toggleClass('vshow');
    }); 
}
function switchAuto(targetId, targetClass, timer) {
    $(targetId).toggleClass(targetClass);
    setTimeout(function(){
        switchAuto(targetId, targetClass, timer);
    }, timer);
}

//slide
function slideShow() {

}
