  
<style>
  .dropdown-content a{color: #f30606 !important;}
</style>
<div class="top-menu">
    <span class="menu"> </span>
<?php  
   if(session()->get('language')=='en')
   {
 ?>
 <ul>
      <nav class="cl-effect-5">
     <li><a class="active" href="https://woodyengineering.com"><span data-hover="Home">home</span></a></li>
     <li><a href="#about" class="scroll"><span data-hover="about">about</span></a></li>
     {{-- <li><a href="#work" class="scroll"><span data-hover="work"><span>work</span></a></li> --}}
     <li>
      <div class="dropdown">
        <a href="javascript:" class="scroll"><span data-hover="product">product</span></a>
        <div class="dropdown-content">
          
          <a href="https://woodyengineering.com/amphibious/amphibious/1">Amphibious Excavator</a> <br>
          <a href="https://woodyengineering.com/amphibious/amphibious/2">Water Management Equipment</a> <br>
          <a href="https://woodyengineering.com/amphibious/amphibious/3">Manatee (Pontoon)</a> <br>
          <a href="https://woodyengineering.com/amphibious/amphibious/7">Barge excavator</a> <br>
          <a href="https://woodyengineering.com/amphibious/amphibious/5">Attachment</a> <br>
          <a href="https://woodyengineering.com/amphibious/amphibious/4">Boom arm bucket</a> <br>
          <a href="https://woodyengineering.com/amphibious/amphibious/8">Customize Vehicles</a>

        </div>
      </div>
    </li>
     <li><a href="#services" class="scroll"><span data-hover="services">services</span></a></li>
     <li><a href="#contact" class="scroll"><span data-hover="contact">contact</span></a></li>
     </nav>
  </ul>
<?php     
}
else {
?>
<ul>
<nav class="cl-effect-5">
<li><a class="active" href="https://woodyengineering.com"><span data-hover="Home">ホーム</span></a></li>
<li><a href="#about" class="scroll"><span data-hover="about">会社概要</span></a></li>
{{-- <li><a href="#work" class="scroll"><span data-hover="work"><span>作業</span></a></li> --}}
<li>
  <div class="dropdown">
    <a href="javascript:" class="scroll"><span data-hover="product">製品</span></a>
    <div class="dropdown-content">
      <a href="https://woodyengineering.com/amphibious/amphibious/1">水陸両用掘削機</a> <br>
      <a href="https://woodyengineering.com/amphibious/amphibious/2">水管理装置</a> <br>
      <a href="https://woodyengineering.com/amphibious/amphibious/3">マナティー（ポンツーン</a> <br>
      <a href="https://woodyengineering.com/amphibious/amphibious/7">はしけ掘削機</a> <br>
      <a href="https://woodyengineering.com/amphibious/amphibious/5">アタッチメント</a> <br>
      <a href="https://woodyengineering.com/amphibious/amphibious/4">ブームアームバケット</a> <br>
      <a href="https://woodyengineering.com/amphibious/amphibious/8">車両をカスタマイズする</a>
    </div>
  </div>
</li>
<li><a href="#services" class="scroll"><span data-hover="services">サービス</span></a></li>
<li><a href="#contact" class="scroll"><span data-hover="contact">コンタクト</span></a></li>
</nav>
</ul>
<?php   
 }
?>
  </div>
  <!--script-nav-->


<script>
$("span.menu").click(function(){
$(".top-menu ul").slideToggle("slow" , function(){
});
});
</script>