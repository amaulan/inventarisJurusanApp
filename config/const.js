'use strict';

const APIKEY        = "bbFj8HGTPHm8x5uMALCP71g6MsK9pw1EzVzRTpdN90eqcv7pIE";
const BASE_URL      = "http://api.inventory.asdateam.web.id/api/";
const TOKEN         = localStorage.getItem('token');


$.ajaxSetup({
    beforeSend: function(xhr) {
        xhr.setRequestHeader('apikey', APIKEY);
        xhr.setRequestHeader('token', TOKEN);
    }
});