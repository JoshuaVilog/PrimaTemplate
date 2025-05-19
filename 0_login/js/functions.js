$(document).ready(function(){
    
    $("#btnLogin").click(function(){
        let txtUsername = $("#txtUsername");
        let txtPassword = $("#txtPassword");

        let user = new User();
        user.username = txtUsername;
        user.password = txtPassword;

        user.Login(user);
        
    });
});


