var ipDesignOptions = {
    color1: function (value) {
        'use strict';
        $('.logo a').css('color', value);
        $('.ipWidget-IpText a, .ipWidget-IpFile a, .ipWidget-IpTextImage a, .ipWidget-IpFaq a').css('color', value);
        ipDesign.reloadLessFiles(['theme', 'ip_content']);
    },
    color2: function (value) {
        'use strict';
        $('.ipWidget h2').css('color', value);
    }
};
