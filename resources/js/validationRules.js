export const validationRules =  {
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
        maxlength: 500,
    },
    file: {
        required: true
    }
};
