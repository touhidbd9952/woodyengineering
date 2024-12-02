
<?php  
if(session()->get('language')=='en')
{
?>


<article style="position: relative; width: 100%; opacity: 1;"> 
           <div class="banner-wrap">
          <div class="banner_center">
                {{-- <a href="https://amphibious.woodyengineering.com/" class="oursite">  --}}
                 <h1>Woody Engineering</h1> 
                 {{-- <h2>Amphibious Equipment <span>(WAE)</span></h2> --}}
                {{-- </a> --}}
                 
                 </div>
          </div>
</article>
{{-- <article style="position: absolute; width: 100%; opacity: 0;"> 
    <div class="banner-wrap">
               <div class="banner_center">
                 <a href="" class="oursite">      
                 <h1>Woody</h1> 
                 <h2><span>Environment</span> Protection activities</span></h2>
                 </a>
                 </div>
         </div>
 </article> --}}

<?php     
}
else {
?>


<article style="position: relative; width: 100%; opacity: 1;"> 
        <div class="banner-wrap">
          <div class="banner_center">
                <a href="https://amphibious.woodyengineering.com/" class="oursite"> 
                 <h1>ウッディー エンジニアリング</h1> 
                 {{-- <h2>水陸両用機械 <span>(WAE)</span></h2> --}}
                </a>
          </div>
        </div>
</article>

{{-- <article style="position: absolute; width: 100%; opacity: 0;"> 
        <div class="banner-wrap">
          <div class="banner_center">
                <a href="" class="oursite">   
                <h1>ウッディー</h1> 
                <h2><span>環境</span>保全活動</h2>
                </a>
          </div>
        </div>
</article> --}}

<?php   
 }
?>