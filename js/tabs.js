$(document).ready(function () {
    
   intializeLoadEvent();
    $(document).on('click', '.tabs li', function () {
        debugger;
        var tabId = $(this).attr('data-name');
        $(".tabs li").removeClass('active');
        $(this).addClass('active');
        $(".div-hide").hide();
        $("#" + tabId).show();
    });
});
function intializeLoadEvent() {
    var tabId = $(".tabs li.active").attr('data-name');
    $("#" + tabId).show();
}   