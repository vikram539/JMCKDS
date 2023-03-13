$(function(){
    
    $.getJSON("https://algoindexer.algoexplorerapi.io/v2/assets/805862344/balances", function(data){

        var walletDataArray = [];

        $.each(data['balances'], function(index, value){
            walletDataArray.push(value['address']);
        }) 

        // Check Empty fields
        let checkEmpty = () =>{

            let submiRemoveAttr = $("#signUp-btn").removeAttr("disabled");
            let submitAddAttr = $("#signUp-btn").attr("disabled","disabled");

            var signupName = $("#signupName").val();
            var signupWalletAddress = $("#signupWalletAddress").val();
            var sigiupEmail = $("#sigiupEmail").val();
            var signupPassword = $("#signupPassword").val();
            var signupConfirmpassword = $("#signupConfirmpassword").val();

            var emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,7}\b$/i;
            var passPattren = /^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{6,15}$/;
            let validAddress = walletDataArray.includes(signupWalletAddress, 0);
            
            
            
            if(signupName != "" && signupWalletAddress != "" && sigiupEmail != "" && signupPassword != "" && signupConfirmpassword != ""){
                $("#signUp-btn").removeAttr("disabled");

            }
            // else{
                if(signupName.length == 0){
                    $("#signupName").next().html("<p>This Field is require</p>");                    
                    return false;
                }
                else{
                    if(signupName.replace(/\s+/g, '').length <= 3){
                        $("#signupName").next().html("<p>Field Length not less than 3</p>");
                        $("#signUp-btn").attr("disabled","disabled");
                        return false;
                    }
                    $("#signupName").next().html("");                    
                }
                 
                // Wallet Address
                if(signupWalletAddress.length == 0){
                    $("#signupWalletAddress").next().html("<p>This Field is require</p>");
                    return false;
                }
                else{
                   
                    if(signupWalletAddress.replace(/\s+/g, '').length <= 15){
                        $("#signupWalletAddress").next().html("<p>Field Length not less than 15</p>");
                        $("#signUp-btn").attr("disabled","disabled");
                        return false;
                    }
                    else if(validAddress != true){
                        $("#signupWalletAddress").next().html("<p>Enter Valid Address</p>");
                        $("#signUp-btn").attr("disabled","disabled");
                        return false;
                    }
                    $("#signupWalletAddress").next().html("");                
                }

                // Email Address
                if(sigiupEmail.length == 0){
                    $("#sigiupEmail").next().html("<p>This Field is require</p>");
                    return false;
                }
                else{
                    
                    if(!emailPattern.test(sigiupEmail)){
                        $("#sigiupEmail").next().html("<p>Enter Valid Email Address</p>");
                        $("#signUp-btn").attr("disabled","disabled");
                        return false;
                    }
                    $("#sigiupEmail").next().html("");                
                }
                
                // Password                
                if(signupPassword.length == 0){
                    $("#signupPassword").next().html("<p>This Field is require</p>");
                    return false;
                }
                else{
                    
                    if(!signupPassword.match(passPattren)){
                        $("#signupPassword").next().html("<p>Your password must contain at least 6 max 15  (<strong>One Special characters, one digit, one Uppercase Letters </p>");
                        $("#signUp-btn").attr("disabled","disabled");
                        return false;
                    }
                    $("#signupPassword").next().html("");                
                }

                // Confirm Password               
                if(signupConfirmpassword != signupPassword){
                    $("#signupConfirmpassword").next().html("<p>Password Not Match</p>");
                    $("#signUp-btn").attr("disabled","disabled");
                    return false;
                }
                else{
                    $("#signupConfirmpassword").next().html("");                
                }
            // }
            
        }
        
        $(document).on("keyup", function(){           
            checkEmpty();
        })
        
        // checkEmpty();
       

    }); //End getJSON

    

})