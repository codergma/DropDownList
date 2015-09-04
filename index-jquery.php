<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
*{
  margin:0;
  padding:0;
}
#drop-down{
  background-color:#eee;
  width:600px;
  height:40px;
  margin:0 auto;
}
#drop-down ul{
  list-style:none;
}
#drop-down ul li{
  float:left;
  text-align:center;
  line-height:40px;
}
#drop-down a {
  text-decoration:none;
  color:#000;
  display:block;
  padding: 0 10px;
}
#drop-down ul li a:hover {
  background-color:#666;
  color:#FFF;
}
#drop-down ul li{
  position:relative;
}
#drop-down ul li ul{
  position:absolute;/*配合父元素使用relative*/
  left:0;
  top:40px;
  display:none;
}
#drop-down ul li ul li{
  float:none;/*取消浮动的影响，使竖直排列*/
  background-color:#eee;
  margin-top:2px;
}

</style>
</head>
<body>
<div id="drop-down">
  <ul>
    <li><a href="#">首页</a></li>
    <li onmouseover="showSubMenu(this)" onmouseout="hideSubMenu(this)"><a href="#" >课程大厅</a>
      <ul>
	    <li><a href="#">JavaScriptJavaScript</a></</li>
	    <li><a href="#">jQuery</a></</li>
	  </ul>
	
	</li>
    <li><a href="#">学习中心</a></li>
    <li><a href="#">经典案例</a></li>
    <li><a href="#">关于我们</a></li>
  </ul>

</div>
</body>
</html>
