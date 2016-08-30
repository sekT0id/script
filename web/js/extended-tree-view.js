$(document).ready(function() {

    $('#btn-expand-all').on('click', function (e) {
        var levels = $('#select-expand-all-levels').val();
        $(tree).treeview('expandAll', { levels: levels, silent: $('#chk-expand-silent').is(':checked') });
    });

    $('#btn-collapse-all').on('click', function (e) {
        $(tree).treeview('collapseAll', { silent: $('#chk-expand-silent').is(':checked') });
    });

    $('#tree').treeview({
        data: treeData,
        enableLinks: true,
        showTags: true,
    });

});
