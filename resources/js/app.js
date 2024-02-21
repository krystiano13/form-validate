import './bootstrap';
import $ from 'jquery';
import jqueryValidate from "jquery-validation";

$('form').validate({
    rules: {
        name: {
            required: true,
            maxlength: 100
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
            digits: true
        },
        text: {
            required: true,
            maxlength: 500
        },
        file: {
            required: true
        }
    }
});
