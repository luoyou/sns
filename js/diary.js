$('document').ready(function(){
    $('#article_type select').change(function(){
        alert($('option:selected',$(this)).html());
        alert($('option:last', $(this)).html());
        $('#add_column').show();
    });
})