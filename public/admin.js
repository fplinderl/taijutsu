getUser()
const exampleModal = document.getElementById('adduser')
exampleModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget
    const recipient = button.getAttribute('data-bs-whatever')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')
    modalBodyInput.value = recipient
})

function checkPhone(e) {
    let pattern = /^(09|01|08|03|07|05)[0-9]{8}$/;
    let phone = $('#phone')
    if (!pattern.test(e.value)) {
        if (!phone.hasClass("is-invalid"))
            phone.addClass("is-invalid")
        $('#submit').prop('disabled', true);
    } else {
        if (phone.hasClass("is-invalid"))
            phone.removeClass("is-invalid")
        $('#submit').prop('disabled', false);
    }
}
