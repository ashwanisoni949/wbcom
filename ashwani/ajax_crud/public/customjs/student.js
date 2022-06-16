$(document).ready(function () {
    listData();
});

$("#studentForm").on("submit", function (e) {
    e.preventDefault();
    jQuery.ajax({
        url: siteURL + "/save",
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.status == false && response.status_code == 301) {
                alert(response.message);
            } else if (response.status == true && response.status_code == 200) {
                alert(response.message);
                $("#studentForm").trigger("reset");
                $("#button").text("Save");
            } else if (
                response.status == false &&
                response.status_code == 201
            ) {
                alert(response.message);
            }
            $("#dataTable").DataTable().destroy();
            listData();
        },
    });
});

function listData() {
    $("#dataTable").DataTable({
        processing: true,
        serverSide: true,
        ordering: true,
        order: [[0, "desc"]],
        ajax: siteURL + "/showlist",
        columns: [
            { data: "id", name: "id" }, //first id is defined database//second-->name-->value
            { data: "name", name: "name" },
            { data: "email", name: "email" },
            { data: "address", name: "address" },
            { data: "action", name: "action" },
            { data: "abcd", name: "abcd" },
        ],
    });
}
function deletedata(id) {
    if (confirm("Are you ure delete data")) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
            },
        });
        $.ajax({
            url: siteURL + "/delete",
            data: { student_id: id },
            type: "POST",
            success: function (responses) {
                if (responses.status == true && responses.status_code == 200) {
                    alert(responses.message);
                } else if (
                    responses.status == false &&
                    responses.status_code == 201
                ) {
                    alert(responses.message);
                }
                $("#dataTable").DataTable().destroy();
                listData();
            },
        });
    }
}
function editdata(id) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
        },
    });
    $.ajax({
        url: siteURL + "/edit",
        data: { edit_id: id },
        type: "POST",
        success: function (responses) {
            if (
                responses.status == true &&
                responses.status_code == 200 &&
                responses.data.lenght != 0
            ) {
                $("#title").val(responses.data.name);
                $("#author").val(responses.data.email);
                $("#address").val(responses.data.address);
                $("#student_id").val(responses.data.id);
                $("#button").text("Update");
            } else if (
                responses.status == false &&
                responses.status_code == 201
            ) {
                alert(responses.message);
            }
        },
    });
}
