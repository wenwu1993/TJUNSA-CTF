$(function(){
        $('form :input').blur(function(){
            $(this).css("border-color","#e8e7e7");
             var $parent = $(this).parent();
             $parent.find(".formtips").remove();
             //验证用户名
             if( $(this).is('#username') ){
                    if( this.value=="" || this.value.length < 6 ){
                        var errorMsg = '请输入至少6位的用户名.';
                        var $tip = $parent.find("p")
                        $tip.html(errorMsg);
                        $tip.css("color","red")
                    }else{
                        var okMsg = '输入正确.';
                        var $tip = $parent.find("p")
                        $tip.html(okMsg);
                        $tip.css("color","green")
                    }
             }
             //验证邮件
             if( $(this).is('#email') ){
                if( this.value=="" || ( this.value!="" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value) ) ){
                    var errorMsg = '请输入正确的email地址.';
                    var $tip = $parent.find("p")
                    $tip.html(errorMsg);
                    $tip.css("color","red")
                }else{
                    var okMsg = '输入正确.';
                    var $tip = $parent.find("p")
                    $tip.html(okMsg);
                    $tip.css("color","green")
                }
             }
        }).keyup(function(){
           $(this).triggerHandler("blur");
        }).focus(function(){
            $(this).triggerHandler("blur");
            $(this).css("border-color","#3da9f7");
        });//end blur

        //提交，最终验证。
         $('#send').click(function(){
                $("form :input.required").trigger('blur');
                var numError = $('form .onError').length;
                if(numError){
                    return false;
                } 
                alert("注册成功,密码已发到你的邮箱,请查收.");
         });

        //重置
         $('#res').click(function(){
                $(".formtips").remove(); 
         });
})