import './bootstrap';
import $ from 'jquery';
import jqueryValidate from "jquery-validation";

function validateFileSize() {
    const file = document.querySelector('#fileInput').files[0];
    const maxSize = 5_242_880;

    if(file.size > maxSize) {
        $('#fileError').removeClass('hidden');
    } else {
        !$('#fileError').hasClass('hidden') && $('#fileError').addClass('hidden');
    }
}

$('form').submit(e => {
    e.preventDefault();
    validateFileSize();
})

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
