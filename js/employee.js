
var token = $("input[name='_token']").val();
var dtable = $("#datatable tbody");
$(document).ready(function () {
    intializeLoadEvent();
    intializeSubmitEvent();
    initalizeClickEvent();
});
function intializeLoadEvent() {
    $.ajax({
        url: '/test/getuserdetails',
        type: 'get',
        success: function (dataObject) {
            debugger;
            var data = $.parseJSON(dataObject);
            if (data.status == "0") {

                var user_data = data.userdetails;
                dtable.html('');
                $.each(user_data, function (index, item) {

                    var user_id = item.user_id;
                    var name = item.name;
                    var gender = item.gender;
                    var hobbies = item.hobbies;
                    var dob = item.dob;
                    var stream = item.stream;

                    var tr = $('<tr>');

                    var td = $('<td>');
                    td.html(user_id);
                    tr.append(td);

                    var td = $('<td>');
                    td.html(name);
                    tr.append(td);

                    var td = $('<td>');
                    td.html(gender);
                    tr.append(td);

                    var td = $('<td>');
                    td.html(stream);
                    tr.append(td);

                    var td = $('<td>');
                    td.html(hobbies);
                    tr.append(td);

                    var td = $('<td>');
                    td.html(dob);
                    tr.append(td);

                    var td = $('<td>');
                    var updateBtn = $("<button>");
                    updateBtn.addClass("update");
                    updateBtn.html('Update');
                    updateBtn.attr("data-id", user_id);
                    updateBtn.attr("data-name", name);
                    updateBtn.attr("data-dob", dob);
                    updateBtn.attr("data-gender", gender);
                    updateBtn.attr("data-hobbies", hobbies);
                    updateBtn.attr("data-stream", stream);
                    td.append(updateBtn);

                    var deleteBtn = $("<button>");
                    deleteBtn.addClass("delete");
                    deleteBtn.html('Delete');
                    deleteBtn.attr("data-id", user_id);

                    td.append(deleteBtn);

                    tr.append(td);

                    dtable.append(tr);

                });
            } else {
                alert("failure");
            }
        }
    });
}

function intializeSubmitEvent() {
    $("#employee_reg").submit(function (e) {
        debugger;
        e.preventDefault();
        
//        loadershow
        var name = $("#name").val();
        var gender = $("input[name='gender']:checked").attr("data-name");
        var stream = $("#stream").val();
        var hobbies = [];
        var user_id = $(this).attr("data-user_id");
        var i = 1;
        $.each($("[name='hobbies']:checked"), function () {
            hobbies.push($(this).val());
            i++;
        });
        var dob = $("#dob").val();

        $.ajax({
            url: '/test/register',
            data: {
                "name": name,
                "gender": gender,
                "stream": stream,
                "hobbies": hobbies,
                "dob": dob,
                "_token": token,
                "user_id": user_id
            },
            type: "post",
            success: function (dataObject) {
                debugger;
                var data = $.parseJSON(dataObject);
                if (data.status == "0") {
                    intializeLoadEvent();
                     $('#addUser').modal('hide');
                } else {
                    alert("failure");
                }
                //loader hide
            }
        });


    });
}


function initalizeClickEvent() {

    $(document).on('click', '.delete', function () {
        debugger
        var data_id = $(this).attr('data-id');

        $.ajax({
            url: '/test/delete',
            data: {
                "user_id": data_id,
                "_token": token
            },
            type: "post",
            success: function (dataObject) {
                debugger;
                var data = $.parseJSON(dataObject);
                if (data.status == 0) {
                    intializeLoadEvent();
                } else {
                    alert('failure');
                }
            }
        });

    });

    $(document).on('click', '.update', function () {
        debugger
        var data_id = $(this).attr('data-id');
        var name = $(this).attr("data-name");
        var gender = $(this).attr("data-gender");
        var hobbies = $(this).attr("data-hobbies");
        var dob = $(this).attr("data-dob");
        var stream = $(this).attr("data-stream");
        $("#employee_reg").attr("data-user_id", data_id);
        
        $("#name").val(name);
        if (gender == "Female") {
            $("#female").prop("checked", true);
        } else {
            $("#male").prop("checked", true);
        }

        $("#stream").val(stream);
        var hob = JSON.parse(hobbies);
        $("input[type='checkbox']").attr("checked", false);
        $.each(hob, function (index, item) {
            $("input[value='" + item + "']").attr("checked", true);
        });
        $("#dob").val(dob);
        $('#addUser').modal('show');


    });

    $(".addUserPopup").click(function () {
        $('#addUser').modal('show');
    });
}
