/**
 * Created by Bui on 6/1/16.
 */

$(function(){

    $( "#preview" ).dialog({
        show : {
            effect: 'fade',
            duration: 1000 //at your convenience
        },
        open: function() {
            $('.ui-dialog').addClass('card blue-grey white-text');
            $('.ui-widget-header').addClass('orange-text');
            $('.ui-button').addClass('orange-text');
        },
        autoOpen: false,
        modal : true,
        width : '60vw'

    });
    $( "a.preview" ).click(function(event) {
        var text = "post"+event.target.id;
        text = $( "p#"+text).text();
        $( "#preview").text(text).dialog( "open" ).
            bind('clickoutside',function(){
                $("#preview").dialog('close');
        });
        $(".ui-widget-overlay").click(function(){
            $("#preview").dialog("close");
        });
    });
});