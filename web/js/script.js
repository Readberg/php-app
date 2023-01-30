document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form')
    form.addEventListener('submit', formSend);

    async function formSend(e) {
        e.preventDefault();

        let error = formValidate(form);

        let formData = new FormData();

        if(error === 0) {
            form.classList.add('_sending');
            let response = await fetch('registration.php', {
                method: 'POST',
                body: formData
            });
            if (response.ok) {
                alert('Registration completed successfully');
                form.reset();
                form.classList.remove('_sending');
            } else {
                alert('Registration failed');
                form.classList.remove('_sending');
            }
        } else {
            return await response.text();
        }
    }

    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req');

        for (let i = 0; i < formReq.length; i++) {
            const input = formReq[i];
            formRemoveError(input);

            if (input.value.trim() === '') {
                formAddError(input);
                error++;
            }


            // validation login
            if(input.classList.contains('login')) {
                if(input.value.length < 6) {
                    formAddError(input);
                    document.querySelector('.loginError').innerHTML = 'Minimum 6 characters';
                    error++;
                } else {
                    document.querySelector('.loginError').innerHTML = '';
                }
            }

            // validation email
            if(input.classList.contains('email')) {
                if(emailTest(input)){
                    formAddError(input);
                    document.querySelector('.emailError').innerHTML = 'Incorrect email';
                    error++;
                } else {
                    document.querySelector('.emailError').innerHTML = '';
                }
            }

            // validation password
            if(input.classList.contains('password')) {
                if(passwordTest(input)) {
                    formAddError(input);
                    document.querySelector('.passwordError').innerHTML = 'At least 6 characters, composed of numbers and letters';
                    error++;
                } else {
                    document.querySelector('.passwordError').innerHTML = '';
                }
            }

            // validation name
            if(input.classList.contains('name')) {
                if(nameTest(input)) {
                    formAddError(input);
                    document.querySelector('.nameError').innerHTML = 'At least 2 characters, letters only';
                    error++;
                } else {
                    document.querySelector('.nameError').innerHTML = '';
                }
            }

        }
        return error;
    }
    function formAddError(input) {
        input.parentElement.classList.add('_error');
        input.classList.add('_error');
    }
    function formRemoveError(input) {
        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
    }
    function emailTest(input) {
        return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }
    function passwordTest(input) {
        return !/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/.test(input.value);
    }
    function nameTest(input) {
        return !/^[a-zA-Z]{2,}$/.test(input.value)
    }
});