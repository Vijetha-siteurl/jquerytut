$(document).ready(function () {

    intializeLoadEvent();
    initializeClickEvent();
    $(document).on('click', '.tabs li', function () {
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
function initializeClickEvent() {
    nxt();
    prev();
}

function validation(curr) {
    debugger;
    var flag = 1;
    var input_size = $("#" + curr).find("input").length;
    $("#" + curr + " input").each(function () {
        var that = $(this);
        if (that.val() == "") {
            that.siblings("span").html("Please Fill the Details");
            flag = 0;
        } else {
            that.siblings("span").html("");
        }
    });
    if (!flag) {
        return false;
    } else {
        var tabId = $(".tabs li.active").attr('data-name');
        tabId = $(".tabs li.active").next(".tabs li").attr('data-name');
        $(".tabs li.active").next(".tabs li").addClass('active');
        $(".tabs li.active").prev(".tabs li").removeClass('active');
        $(".div-hide").hide();
        $("#" + tabId).show();
    }
}
function nxt() {
    $(document).on('click', '.next1', function () {
        debugger;
        var curr = $(this).attr('data-current');
        var is_avail = validation(curr);



    });
}

function prev() {
    $(document).on('click', '.prev', function () {

        var tabId = $(".tabs li.active").attr('data-name');
        tabId = $(".tabs li.active").prev(".tabs li").attr('data-name');
        $(".tabs li.active").prev(".tabs li").addClass('active');
        $(".tabs li.active").next(".tabs li").removeClass('active');
        $(".div-hide").hide();
        $("#" + tabId).show();
    });
}