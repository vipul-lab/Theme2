(function($){

    function addLayoutImages() {
        $('.acf-fc-popup ul li a').each(function(){

            var layoutName = $(this).attr('data-layout');

            if(!layoutName) return;

            var imageUrl = acfPreview.themeUrl + '/acf-layout-previews/' + layoutName + '.png';
           
            // Prevent duplicate
            if ($(this).find('img').length) return;

            var img = $('<img>', {
                src: imageUrl,
                css: {
                    display: 'block',
                    maxWidth: '140px',
                    marginTop: '6px',
                    borderRadius: '6px',
                    border: '1px solid #ddd'
                }
            });

            $(this).append(img);
        });
    }

    // When popup opens
    $(document).on('click', '.acf-button[data-name="add-layout"]', function(){
        setTimeout(addLayoutImages, 50);
    });

})(jQuery);