$(document).ready(function () {
    // The path to action from CakePHP is in urlToLinkedListFilter 
    $('#department-id').change(function () {
        var departmentId = $(this).val();
        if (departmentId) {
            $.ajax({
                url: urlToLinkedListFilter,
                data: 'department_id=' + departmentId,
                success: function (selections) {
                    $select = $('#selection-id');
                    $select.find('option').remove();
                    $.each(selections, function (key, value)
                    {
                        $.each(value, function (childKey, childValue) {
                            $select.append('<option value=' + childValue.id + '>' + childValue.name + '</option>');
                        });
                    });
                }
            });
        } else {
            $('#selection-id').html('<option value="">Select department first</option>');
        }
    }).change();
});