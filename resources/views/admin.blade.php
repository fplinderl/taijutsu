@extends('layout')
@section('content')
    <button type = "button" class = "btn btn-primary" data-bs-toggle = "modal" data-bs-target = "#adduser">
        Add user
    </button>

    <div class = "modal fade" id = "adduser" tabindex = "-1" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-header">
                    <h5 class = "modal-title" id = "exampleModalLabel">Add user</h5>
                    <button type = "button" class = "btn-close" data-bs-dismiss = "modal" aria-label = "Close"></button>
                </div>
                <form>
                    <div class = "modal-body">
                        <div class = "mb-3">
                            <label for = "name" class = "col-form-label">Name</label>
                            <input type = "text" class = "form-control" id = "name">
                        </div>
                        <div class = "mb-3">
                            <label for = "phone" class = "col-form-label">Phone</label>
                            <input type = "text" class = "form-control" id = "phone" oninput = "checkPhone(this)" required>
                            <div class = "invalid-feedback">
                                Please enter correct phone number
                            </div>
                        </div>
                        <div class = "mb-3">
                            <label for = "address" class = "col-form-label">Address</label>
                            <input type = "text" class = "form-control" id = "address">
                        </div>
                    </div>
                    <div class = "modal-footer">
                        <button type = "button" class = "btn btn-secondary" data-bs-dismiss = "modal">Close</button>
                        <button type = "submit" class = "btn btn-primary" id = "submit" onclick = "addUser()">Save
                            changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table class = "table">
        <thead>
        <tr>
            <th scope = "col">#</th>
            <th scope = "col">Name</th>
            <th scope = "col">Phone</th>
            <th scope = "col">Address</th>
            <th scope = "col">Url</th>
            <th scope = "col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan = "6">
                <div class = " d-flex justify-content-center">
                    <div class = "spinner-border" role = "status">
                        <span class = "visually-hidden">Loading...</span>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <script src = "{{ asset('admin.js') }}"></script>
@endsection
