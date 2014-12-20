(function(){
    switchShow("#J-navbar-btn", "#J-navbar-nav"); 
    /*
    setTimeout(function(){
        switchAuto('#J-qcode', 'siteface-qcode', 5000);
    },5000);*/
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })
})();
