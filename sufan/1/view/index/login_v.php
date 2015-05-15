<div class="container">
    <img class="logo" src="<?php e(URL.IMG)?>zhujiang.png"/>
      <div id="form_container" class="form-container">
        <form id="user_login" action="<?php e(URL)?>index/login" method="post">
          <div class="enter-area">
          <span class="entypo-user"></span>
          <input id="name" type="text" placeholder="请输入登录号" name="doctor_login"/>
          </div>
          <div class="enter-area">
          <span class="entypo-lock"></span>
          <input id="pwd" type="password" placeholder="密码" name="doctor_pass"/>
          </div>
          <div class="enter-area">
             <span class="entypo-right-bold"></span>
             <input type="button" value="登录" id="sub" />
          </div>
        </form> 
      </div>
</div>
<p class='tips'id='tip'>密码错误</p>
<script type="text/javascript">
  window.onload=function(){
    var doctor_login = document.getElementById("name"),
        doctor_pass  = document.getElementById("pwd"),
        submit       = document.getElementById("sub"),
        form         = document.getElementById("user_login"),
        tip          = document.getElementById('tip');
    function checkLogin(){
        if(doctor_login.value!=''&&doctor_pass!=''){
          var ajax = new Ajax('http://www.sufan.sinaapp.com/index/loginHandler','doctor_login='+doctor_login.value+'&doctor_pass='+doctor_pass.value);
          var json =ajax.post();
       
          if(json.doctor_login==false){
            tip.innerHTML='用户名不存在';
            tip.style.display='block';
            setTimeout("tip.style.display='none'",2500);
          }else{
            if(json.doctor_pass==false){
              tip.innerHTML='密码错误';
              tip.style.display='block';
              setTimeout("tip.style.display='none'",2500);
            }else{
              form.submit();
            }
          }
        }
        else{
          tip.innerHTML='输入到数据不完整';
          tip.style.display='block';
          setTimeout("tip.style.display='none'",2500);
        }
      }
    submit.onclick =checkLogin;

    function Ajax(url,data){
      this.url = url;
      this.data= data;
    }
    Ajax.prototype = {
      post:function(){
        var result;
        var xmlhttp;
        if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
        }
        else if(window.ActiveXObject){
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange =function(){
          if(xmlhttp.readyState == 4 &&xmlhttp.status == 200){
            result = eval('('+xmlhttp.responseText+')');
          }
        };
        xmlhttp.open('POST',this.url,false);    //将值赋予TRUE的话为异步执行，修改不了result的值
        xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=UTF-8");
        xmlhttp.send(this.data);
        return result;
      },
      get:function(){
        var result;
        var xmlhttp;
        if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
        }
        else if(window.ActiveXObject){
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange =function(){
          if(xmlhttp.readyState == 4 &&xmlhttp.status == 200){
            result = eval('('+xmlhttp.responseText+')');
          }
        };
        xmlhttp.open('GET',this.url);
        xmlhttp.send();
      }
    };
  };
  

</script> 