
$(function () {

    $('.drag').draggable({
        helper: 'clone'
    });
    $('.leftcase').droppable({
        activeClass: 'active',
        hoverClass: 'hover',
        drop: function (event, ui) {
            var block = ui.draggable;
            $(this).append(block);
        }
    });
    $('.rightcase').droppable({
        activeClass: 'active',
        hoverClass: 'hover',
        drop: function (event, ui) {
            var block = ui.draggable;
            $(this).append(block);
        }
    });

});

$(function () {

    $('.dragnote').draggable({
        helper: 'clone'
    });
    $('.notecase').droppable({
        activeClass: 'active',
        hoverClass: 'hover',
        drop: function (event, ui) {
            var block = ui.draggable;
            $(this).append(block);
        }
    });
});

$(function () {
    $('#leftcase').sortable();
});
$(function () {
    $('#rightcase').sortable();
});

function get_content_from_class(){

    var cod = document.getElementById("bl-area");
    console.log(cod);
    var text = cod.innerHTML;
    $('#text-ar').val(text.trim());
}

