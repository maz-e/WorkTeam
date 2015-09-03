jQuery(function() {
    document.formvalidator.setHandler('contacto',
        function (value) {
            regex=/^[^0-9]+$/;
            return regex.test(value);
        });
});
