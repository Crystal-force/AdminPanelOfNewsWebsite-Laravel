const { reject, defaultsDeep } = require("lodash");

function Register() {
    let admin_email;
    let admin_name;
    let admin_pwd;
    let admin_conpwd;
    let check_val;

    admin_email = $("#register_email").val();
    admin_name = $('#register_name').val();
    admin_pwd = $('#register_pwd').val();
    admin_conpwd = $('#register_conpwd').val();
    check_val = $('#accept').is(':checked');
    if (admin_email == "" || admin_name == "" || admin_pwd == "" || admin_conpwd == "") {
        $("#register_error").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
    } else {
        if (admin_pwd != admin_conpwd) {
            $("#register_again").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
        } else {
            if (check_val == true) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/newadmin',
                    method: 'post',
                    data: {
                        email: admin_email,
                        name: admin_name,
                        password: admin_pwd,
                    },
                    dataType: false,
                    success: function(data) {
                        if (data.data == '0') {
                            $("#register_exit").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
                        } else {
                            window.location.href = '/dashboard';
                        }
                    }
                });
            } else {
                $("#register_accept").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
            }
        }
    }
}

function Login() {
    let login_name;
    let login_pwd;

    login_name = $("#loing_name").val();
    login_pwd = $("#loing_pwd").val();

    if (login_name == "" || login_pwd == "") {
        $("#login_error").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
    } else if (login_name != "" && login_pwd != "") {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/admin_login',
            method: 'POST',
            data: {
                admin_name: login_name,
                admin_pwd: login_pwd
            },
            dataType: false,
            success: function(data) {
                if (data.data == '0') {
                    $("#login_null").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
                } else {
                    window.location.href = '/dashboard';
                }
            }
        });
    }
}

function ForgotPassword() {
    let forgot_email;
    let forgot_name;
    let forgot_pwd;
    let forgot_conpwd;

    forgot_email = $("#forgot_email").val();
    forgot_name = $("#forgot_name").val();
    forgot_pwd = $("#forgot_pwd").val();
    forgot_conpwd = $("#forgot_conpwd").val();

    if (forgot_email == "" || forgot_name == "" || forgot_pwd == "" || forgot_conpwd == "") {
        $('#forgot_error').delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
    } else {
        if (forgot_pwd != forgot_conpwd) {
            $("#forgot_confirm").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/reset',
            method: 'post',
            data: {
                reset_email: forgot_email,
                reset_name: forgot_name,
                reset_pwd: forgot_pwd
            },
            dataType: false,
            success: function(data) {
                if (data.data == 0) {
                    $("#forgot_again").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
                } else {
                    window.location.href = '/';
                }
            }
        });
    }
}

function Logout() {
    window.location.href = "/logout";
}


var userremove_id;

function UserRemove(elem) {
    userremove_id = $(elem).attr('data-id');
    console.log(userremove_id);
    if (userremove_id != "") {
        $('.user-cancel').modal('show');
    }
}

function Cancel_UsersRemove() {
    $('.user-cancel').modal('hide');
}

function Users_Remove() {
    console.log(userremove_id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/user-remove',
        method: 'post',
        data: {
            re_userid: userremove_id
        },
        dataType: false,
        success: function(data) {
            if (data.data == 1) {
                location.reload();
            }
        }
    });
}




function ReturnUsers() {
    // window.history.back();
    window.location.href = "user-management";
}

function ReturnAddUsers() {
    window.location.href = "newuser-show";
}

function ReturnNews() {
    window.history.back();
}

function CancelRemove() {
    $('.news-modal').modal('hide');
}

var ciu_id;

function NewsRemove(elem) {
    ciu_id = $(elem).attr('data-id');
    if (ciu_id != "") {
        $('.news-modal').modal('show');
    }
}

function ConfirmRemove() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/remove-news',
        method: 'post',
        data: {
            remove_id: ciu_id
        },
        dataType: false,
        success: function(data) {
            if (data.data == 1) {
                location.reload(true);
            }
        }
    });
}


var user_id;

function UserReject(elem) {
    user_id = $(elem).attr('data-id');
    if (user_id != "") {
        $("#reject-user").modal('show');
    }
}

function RejectConfirm() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: 'reject-user',
        method: 'post',
        data: {
            reject_id: user_id
        },
        dataType: false,
        success: function(data) {
            if (data.data == 1) {
                location.reload();
            }
        }
    });
}

function CancelReject() {
    $("#reject-user").modal('hide');
}

function NewUserAdd(elem) {
    var accept_id = $(elem).attr('data-id');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/accept-user',
        method: 'post',
        data: {
            add_id: accept_id
        },
        dataType: false,
        success: function(data) {
            if (data.data == 1) {
                $("#accept-success").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
                window.location.href = "/user-management"
            }
        }
    });
}

function NewUserReject(elem) {
    var accept_id = $(elem).attr('data-id');

    $('#send-comment').delay(1000).show();
}

function ReturnAcceptNews() {
    window.location.href = "/dashboard";
}

function NewsPublish(elem) {
    var news_accept_id = $(elem).attr('data-id');
    var edit_title = $('#edited_title').val();
    var edit_content = $('#edited_content').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/accept-news',
        method: 'post',
        data: {
            news_id: news_accept_id,
            editcontent: edit_content,
            edittitle: edit_title
        },
        dataType: false,
        success: function(data) {
            if (data.data == 1) {
                $("#accept-news").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
                window.location.href = "/dashboard";
            }
        }
    });

}

function NewReject() {
    $('#user_comment').show();
}

var new_newsid;

function AddedNewsRemove(elem) {
    new_newsid = $(elem).attr('data-id');
    if (new_newsid != "") {
        $('#news-cancel').show();
    }
}

function News_Remove() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/news-remove',
        method: 'post',
        data: {
            new_newsid: new_newsid
        },
        dataType: false,
        success: function(data) {
            if (data.data == 1) {
                location.reload();
            } else {
                return 0;
            }
        }
    });
}