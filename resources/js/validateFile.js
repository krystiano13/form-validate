import $ from "jquery";

export function validateFile() {
    const file = document.querySelector('#fileInput').files[0];
    const maxSize = 5_242_880; // in bytes

    if(!file) {
        return false;
    }

    // check file type
    if(file.type !== 'image/jpeg' && file.type !== 'application/pdf') {
        $('#typeError').removeClass('hidden');
        return false;
    } else {
        !$('#typeError').hasClass('hidden') && $('#typeError').addClass('hidden');
    }

    // check file size
    if(file.size > maxSize) {
        $('#fileError').removeClass('hidden');
        return false;
    } else {
        !$('#fileError').hasClass('hidden') && $('#fileError').addClass('hidden');
    }

    return true;
}
