import './bootstrap';
import $ from 'jquery';
import jqueryValidate from "jquery-validation";

function validateFile() {
    const file = document.querySelector('#fileInput').files[0];
    const maxSize = 5_242_880; // in bytes

    if(!file) {
        return false;
    }

    // check file type
    if(file.type !== 'image/jpeg' && file.type !== 'application/pdf') {
        $('#typeError').removeClass('hidden');
    } else {
        !$('#typeError').hasClass('hidden') && $('#typeError').addClass('hidden');
        return false;
    }

    // check file size
    if(file.size > maxSize) {
        $('#fileError').removeClass('hidden');
    } else {
        !$('#fileError').hasClass('hidden') && $('#fileError').addClass('hidden');
        return false;
    }

    return true;
}

$('form').submit(e => {
    e.preventDefault();
    validateFile();
})

$('form').validate({
    errorClass: "error",
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
