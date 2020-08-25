$( document ).ready(function () {
    $('.data-table').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

    $('.item-create').submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var url = form.attr('action');
        var method = form.attr('method');

        $.ajax({
            type: method,
            url: url,
            data: form.serialize(),
            success: function(data)
            {
                if(data['status'] == 'success'){
                    console.log('success');
                }else{
                    console.log('not success');
                }
            },
            error: function (data){
                console.log('error');
            }
        });
    });
});
