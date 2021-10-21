function setError(el, errMsg) {
    el.classList.remove('is-invalid');
    el.classList.remove('is-valid');
    el.classList.add('is-invalid');
    // var errEl = document.createElement('div');
    // errEl.classList.add('invalid-feedback');
    // errEl.innerHTML = errMsg;
    var feedback = document.getElementById(el.name + '_feedback');
    feedback.classList.remove('invalid-feedback');
    feedback.classList.remove('valid-feedback');
    feedback.innerHTML = '';
    feedback.classList.add('invalid-feedback');
    feedback.innerHTML = errMsg;
}

function setSuccess(el) {
    el.classList.remove('is-invalid');
    el.classList.remove('is-valid');
    el.classList.add('is-valid');
    var feedback = document.getElementById(el.name + '_feedback');
    feedback.classList.remove('invalid-feedback');
    feedback.classList.remove('valid-feedback');
    feedback.innerHTML = 'Mantap!';
    feedback.classList.add('valid-feedback');
}

function validateEmail(email) {
    const re =
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return !re.test(String(email).toLowerCase());
}

function validation(el) {
    console.log(el.dataset.validation);
    var array_validation = el.dataset.validation.split('|');
    console.log(array_validation);
    var successCount = 0;
    if (array_validation.includes('required')) {
        console.log('required');
        console.log(el.value);
        if (el.value == '') {
            setError(el, "Tidak Boleh Kosong");
            return false;
        } else {
            successCount++;
        }
    }
    if (array_validation.includes('requiredRadio')) {
        console.log('requiredRadio');
        var ele = document.getElementsByName(el.name);
        var uncheck = 0;
        console.log(ele);
        for (j = 0; j < ele.length; j++) {
            if (ele[j].checked) {
                successCount++;
            } else {
                uncheck++;
            }
        }
        if (uncheck == ele.length) {
            setError(el, "Tidak Boleh Kosong");
            return false;
        }
    }
    if (array_validation.includes('min3')) {
        console.log('min3');
        if (el.value.length < 3) {
            setError(el, "Minimal 3 Karakter");
            return false;
        } else {
            successCount++;
        }
    }
    if (array_validation.includes('min4')) {
        console.log('min4');
        if (el.value.length < 4) {
            setError(el, "Minimal 4 Karakter");
            return false;
        } else {
            successCount++;
        }
    }

    if (array_validation.includes('ageMin18')) {
        console.log('ageMin18');
        if (parseInt(el.value) < 18) {
            setError(el, "Usia Minimal 18 Tahun");
            return false;
        } else {
            successCount++;
        }
    }
    if (array_validation.includes('ageMax30')) {
        console.log('ageMax30');
        if (parseInt(el.value) > 30) {
            setError(el, "Usia Maksimal 30 Tahun");
            return false;
        } else {
            successCount++;
        }
    }
    if (array_validation.includes('email')) {
        if (validateEmail(el.value)) {
            console.log('email');
            setError(el, "Harus Format Email");
            return false;
        } else {
            successCount++;
        }
    }


    if (successCount == array_validation.length) {
        setSuccess(el);
        return true;
    }
}

function validateSubmit() {
    var el = document.querySelectorAll(".form-control,.form-select,.form-check-input");
    var countError = 0;
    for (i = 0; i < el.length; i++) {
        if (!validation(el[i])) {
            countError++;
        }
    }
    if (countError > 0) {
        return false;
    }
    return true;
}