let api_user = "/api/user"
$.ajax({
    url: api_user,
    method: 'post',
    data: {
        name: 'a',
        phone: '0763377794',
        address: 'asdfasdfaf'
    }
}).then(data => {

}).catch(err => {

})

function addUser() {
    $.ajax({
        url: api_user,
        method: 'post',
        data: {
            name: 'a',
            phone: '0763377794',
            address: 'asdfasdfaf'
        }
    }).then(data => {

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

function getUser(link) {
    $ajax({
        url: link
    }).then(data => {

    }).catch(err => {

    })
}
