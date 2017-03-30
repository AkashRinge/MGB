<div class="mynav">
  <ul class="myul">
    <li class="myli"><a class="mya" onclick="profile()">Profile</a></li>
    <li class="myli"><a class="mya" onclick="mybooks()">My Books</a></li>
    <li class="myli"><a class="mya" onclick="booklist()">Library</a></li>
  </ul>
</div>
<style>
.mynav {
  background: #111;
 border-right: 1px solid #000;
  box-shadow:  1px 0 0 #222;
  width: 220px;
  position: absolute;
  margin-top: -5%
}

.myul {
  background: #111;
  border-bottom: 1px solid #222;  
  margin-top: 30%
} 

.myli {
  display: block;
}

.mya {
  background: #111;
  border-bottom: 1px solid #000;
  border-top: 1px solid #222;
  box-shadow:
    inset -5px 0 0 hsla(0, 0%, 0%, .2),
    inset 0 20px 0 #161616
  ;
  color: #bbb;
  display: block;
  font-size: 14px;
  height: 40px;
  line-height: 40px;
  padding: 0 45px;
  text-align: right;
  text-decoration: none;
  text-shadow: 0 -1px 1px hsla(0, 0%, 0%, .5);
  transition: all 300ms;
}

.mya:hover,
.mya:focus,
li.current a {
  background: #222;
  border-top-color: #3a3a3a;
  box-shadow: 
    inset -5px 0 0 #3a3a3a,
    inset 0 20px 0 #282828
  ;
  color: #ddd;
  outline: 0  ;
  padding: 0 30px;
  transition: all 300ms;
}

.myli.current a {
  box-shadow:
    inset -5px 0 0 #e00,
    inset 0 20px 0 #282828
  ;
  padding: 0 45px;
}

.mya:active {
  background: #333;
  border-top-color: #666;
  box-shadow: 
    inset -5px 0 0 #666,
    inset 0 20px 0 #444
  ;
  color: #fff;
  transition: all 50ms;
}

.myli:first-child a {
   border-top: none; 
}
</style>
<script>
	$li = $('.myli');
	$a = $('.mya');

	$a.on('click', function(e){
	e.preventDefault();
	$li.removeClass('current');
	$(this).parent().addClass('current');
	});
	function profile()
	{
		window.location.href = "profile.php";
	}
	
	function mybooks()
	{
		window.location.href = "mybooks.php";
	}
	
	function booklist()
	{
		window.location.href = "booklist.php";
	}
</script>
