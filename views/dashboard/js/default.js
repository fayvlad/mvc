/**
 * Created by ПК on 16.02.2015.
 */
$(document).ready(function () {

    $.get('dashboard/xhrGetListings', function (o) {
        for (var i = 0; i < o.length; i++) {
            $("#listInserts").append('<div>' + o[i].text + '<a href="#" class="del" rel="' + o[i].id + '">X</a></div>');
        }
    }, 'json');

    $(document).on('click', '.del', function () {
        delItem = $(this);
        var id = $(this).attr('rel');
        $.post('dashboard/xhrDeleteListing', {'id': id}, function (o) {
            $("#listInserts").append('<div>' + o.text + '<a href="#" class="del" rel="' + o.id + '">X</a></div>');
            delItem.parent().remove();
        }, 'json');
        delItem.parent().hide();
        return false;
    });


    $('#randomInsert').submit(function () {
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.post(url, data, function (o) {
            $("#listInserts").append('<div>' + o.text + '<a href="#" class="del" rel="' + o.id + '">X</a></div>');
        }, 'json');
        return false;
    });


});
