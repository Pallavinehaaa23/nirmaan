const but=document.getElementById('butn');

but.addEventListener('click',function(){
   document.write(`<div class="regform" id="botn">
   <a>FILL UPS</a>
   Are you a donor?<input type="radio"><br>
   Are you a reciever?<input type="radio"><br>
   Name<input type="text" placeholder="Enter Your NAME">
</div>
`)
})
