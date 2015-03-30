<?php include('includes/header.html'); ?>


<script type="text/javascript">
$(function(){
	$("#sub_btn").click(function(){
		var email = $("#email").val();
		var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
		if(email=='' || !preg.test(email)){
			$("#chkmsg").html("请填写正确的邮箱！");
		}else{
			$("#sub_btn").attr("disabled","disabled").val('提交中..').css("cursor","default");
			$.post("sendmail.php",{mail:email},function(msg){
				if(msg=="noreg"){
					$("#chkmsg").html("该邮箱尚未注册！");
					$("#sub_btn").removeAttr("disabled").val('提 交').css("cursor","pointer");
				}else{
					$(".demo").html("<h3>"+msg+"</h3>");
				}
			});
		}
	});
})
</script>

<h2></h2>
<form method="post" action="resetpwd/sendmail.php">
<p><strong>Please input your register Email address：</strong></p> 
<p><input type="text" class="input" name="email" id="email"><span id="chkmsg"></span></p> 
<p><input type="button"  class="btn btn-primary btn-large"  id="sub_btn" value="submit"></p> 
</form>
<?php include('includes/footer.html'); ?>