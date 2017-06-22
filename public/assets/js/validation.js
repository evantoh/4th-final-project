/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author kariuki
 */

$(document).ready(function () {

    var addUserForm = $("#validation");

    var validator = addUserForm.validate({
        rules: {
            first_name: {required: true},
            last_name: {required: true},
            email: {required: true, email: true, remote: {url: baseURL + "checkEmailExists", type: "post"}},
           id_no: {required: true, digits: true},
            user_type: {required: true},
            dob: {required: true},
            reg_no: {required: true},
            password: {required: true},

        },
        messages: {
            first_name: {required: "Enter your full name"},
            last_name: {required: "Enter your full name"},
            email: {required: "Enter your email", email: "Please enter valid email address", remote: "Email already taken"},
            id_no: {required: "Enter your mobile number", digits: "Please enter numbers only"},
            user_type: {required: "This field is required"},
            dob: {required: "This field is required", digits: "Please enter numbers only"},
            reg_no: {required: "This field is required", digits: "Please enter numbers only"},
            password: {required: "This field is required", digits: "Please enter numbers only"},

        }
    });
});

