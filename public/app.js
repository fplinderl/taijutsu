let api_user = "/api/user"

async function addUser() {
    try {
        await $.ajax({
            url: api_user,
            method: 'post',
            data: {
                name: $('#name').val(),
                phone: $('#phone').val(),
                address: $('#address').val(),
                url: window.location.href,
            }
        })
    }catch (e) {

    }finally {
        $('#adduser').modal('hide');
    }

}
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
