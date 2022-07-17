let api_user = "/api/user"

function addUser() {
    $.ajax({
        url: api_user,
        method: 'post',
        data: {
            name: $('#name').val(),
            phone: $('#phone').val(),
            address: $('#address').val(),
            url: window.location.href,
        }
    })
}
