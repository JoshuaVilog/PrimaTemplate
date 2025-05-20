class User {
    constructor(){}

    Login(user){

        $.ajax({
            url: "ajax/login.php",
            method: "POST",
            data: {
                username: user.username.val(),
                password: user.password.val(),
            },
            success: function(response) {
                if(response == "False"){
                    Swal.fire({
                        title: 'Incorrect Username or Password!',
                        text: 'Please check your username or password.',
                        icon: 'warning'
                    })
                    user.password.val("");
                } else if(response == "disabled"){
                    Swal.fire({
                        title: 'The account is restricted!',
                        text: 'Ask the administrator to unrestrict your account',
                        icon: 'warning'
                    })
                } else {
                    let user = JSON.parse(response);
                    
                    localStorage.setItem(lsUserId, JSON.stringify(user));
                    
                    Swal.fire({
                        title: 'Successfully Login!',
                        text: 'Proceed to Homepage!',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Proceed!',
                        timer: 2000,
                        willClose: () => {
                            //window.location.href = "/"+rootFolder+"/dashboard/index.php";
                        },
                       
                    })

                }
                
            }
        });
    }
    Test(){
        $.ajax({
            url: "php/test.php",
            method: "POST",
            data: {
                
            },
            success: function(response) {

                console.log(response);
            }
        });
    }
}

