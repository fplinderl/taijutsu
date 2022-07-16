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
    }).then(data => {
        if (window.location.href.includes('admin')) {
            getUser()
        } else {

        }
    }).catch(err => {

    })
}

function editUser(id) {
    $.ajax({
        url: api_user + '/' + id,
        method: 'put',
        data: {
            name: 'a',
            phone: '0763377794',
            address: 'asdfasdfaf'
        }
    }).then(data => {

    }).catch(err => {

    })
}

function deleteUser(id) {
    $.ajax({
        url: api_user + '/' + id,
        method: 'delete'
    }).then(data => {

    }).catch(err => {

    })
}

function getUser(link = 'https://taijutsu.info/api/user') {
    $.ajax({
        url: link,
        method: 'get'
    }).then(data => {
        showData(data)
    }).catch(err => {

    })
}

function showData(data) {
    let body = ''
    for (let user of data.data.data) {
        body += `<tr>
            <th scope = "row">${user.id}</th>
            <td>${user.name}</td>
            <td>${user.phone}</td>
            <td>${user.address}</td>
            <td>${user.url}</td>
            <td>${user.url}</td>
        </tr>`
    }
    if (!body) {
        body = `<tr>
            <td colspan="6" class="text-center">No data</td>
        </tr>`
    }
    $('.table tbody').html(body)
}
