jQuery($ => {

    //  Responsive Menu

    $('#open').on('click', show_menu);

    function show_menu() {
        $('#side').animate({ left: 0 });
    }

    $('#close').on('click', hide_menu);

    function hide_menu() {
        $('#side').animate({ left: "-100%" });
    }

});