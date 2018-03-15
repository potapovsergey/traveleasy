$('.tour').on('click',function (e) {
    $(this).each(function () {
        e.preventDefault();
        var id_tour = $(this).data('id');
        document.location.href = '/tour/view/'+ id_tour;
    });
});

$('.order_tour').on('click',function (e) {
    $(this).each(function () {
        e.preventDefault();
        var id_tour = $(this).data('id');
        document.location.href = '/tour/order/'+ id_tour;
    });
});

