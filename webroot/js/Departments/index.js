
// Update the Departments data list
function getDepartments() {
    $.ajax({
        type: 'GET',
        url: urlToRestApi,
        dataType: "json",
        success:
                function (data) {
                    var departmentTable = $('#departmentData');
                    departmentTable.empty();
                    $.each(data.departments, function (key, value)
                    {
                        var editDeleteButtons = '</td><td>' +
                                '<a href="javascript:void(0);" class="btn btn-warning" rowID="' +
                                    value.id + 
                                    '" data-type="edit" data-toggle="modal" data-target="#modalDepartmentAddEdit">' + 
                                    'edit</a>' +
                                '<a href="javascript:void(0);" class="btn btn-danger"' +
                                    'onclick="return confirm(\'Are you sure to delete data?\') ?' + 
                                    'departmentAction(\'delete\', \'' + 
                                    value.id + 
                                    '\') : false;">delete</a>' +
                                '</td></tr>';
                        departmentTable.append('<tr><td>' + value.id + '</td><td>' + value.name + '</td><td>' + value.code + editDeleteButtons);
 
                    });

                }

    });
}

 /* Function takes a jquery form
 and converts it to a JSON dictionary */
function convertFormToJSON(form) {
    var array = $(form).serializeArray();
    var json = {};

    $.each(array, function () {
        json[this.name] = this.value || '';
    });

    return json;
}


function departmentAction(type, id) {
    id = (typeof id == "undefined") ? '' : id;
    var statusArr = {add: "added", edit: "updated", delete: "deleted"};
    var requestType = '';
    var departmentData = '';
    var ajaxUrl = urlToRestApi;
    frmElement = $("#modalDepartmentAddEdit");
    if (type == 'add') {
        requestType = 'POST';
        departmentData = convertFormToJSON(frmElement.find('form'));
    } else if (type == 'edit') {
        requestType = 'PUT';
        ajaxUrl = ajaxUrl + "/" + id;
        departmentData = convertFormToJSON(frmElement.find('form'));
    } else {
        requestType = 'DELETE';
        ajaxUrl = ajaxUrl + "/" + id;
    }
    frmElement.find('.statusMsg').html('');
    $.ajax({
        type: requestType,
        url: ajaxUrl,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify (departmentData),
        success: function (msg) {
            if (msg) {
                frmElement.find('.statusMsg').html('<p class="alert alert-success">Department data has been ' + statusArr[type] + ' successfully.</p>');
                getDepartments();
                if (type == 'add') {
                    frmElement.find('form')[0].reset();
                }
            } else {
                frmElement.find('.statusMsg').html('<p class="alert alert-danger">Some problem occurred, please try again.</p>');
            }
        }
    });
}

// Fill the department's data in the edit form
function editDepartment(id) {
    $.ajax({
        type: 'GET',
        url: urlToRestApi + "/" + id,
        dataType: 'JSON',
      // data: 'action_type=data&id=' + id,
        success: function (data) {
            $('#id').val(data.department.id);
            $('#code').val(data.department.code);
            $('#name').val(data.department.name);
            
        }
    });
}

// Actions on modal show and hidden events
$(function () {
    $('#modalDepartmentAddEdit').on('show.bs.modal', function (e) {
        var type = $(e.relatedTarget).attr('data-type');
        var departmentFunc = "departmentAction('add');";
        $('.modal-title').html('Add new department');
        if (type == 'edit') {
            var rowId = $(e.relatedTarget).attr('rowID');
            departmentFunc = "departmentAction('edit'," + rowId +");";
            $('.modal-title').html('Edit department');

            editDepartment(rowId);
        }
        $('#departmentSubmit').attr("onclick", departmentFunc);
    });

    $('#modalDepartmentAddEdit').on('hidden.bs.modal', function () {
        $('#departmentSubmit').attr("onclick", "");
        $(this).find('form')[0].reset();
        $(this).find('.statusMsg').html('');
    });
});



