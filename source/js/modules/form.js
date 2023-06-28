// $(function () {
//     $('#js-register-form').validate({
//         focusCleanup: true,
//         focusInvalid: false,
//
//         rules: {
//             name: {
//                 required: true
//             },
//
//             email: {
//                 required: true,
//                 email: true
//             },
//         },
//
//         messages: {
//             name: {
//                 required: 'Введите ваше имя'
//             },
//
//             email: {
//                 required: 'Поле email пустое',
//                 email: 'Введите корректный email'
//             },
//         }
//     })
//
// });
//
// $.extend($.validator.messages, {
//     required: "Это поле необходимо заполнить.",
//     remote: "Пожалуйста, введите правильное значение.",
//     email: "Пожалуйста, введите корректный адрес электронной почты.",
//     extension: "Пожалуйста, выберите файл с правильным расширением.",
//     maxlength: $.validator.format("Пожалуйста, введите не больше {0} символов."),
//     minlength: $.validator.format("Пожалуйста, введите не меньше {0} символов."),
// });

export function initForm() {
    const form = document.forms[0];

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        console.log('submit');
    })
}
