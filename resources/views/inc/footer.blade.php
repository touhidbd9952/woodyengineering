<div class="contact-header row">
<?php  
   if(session()->get('language')=='en')
   {
 ?>
    <h3> contact</h3>
        <p>Please feel free to Contact our Staff by phone/fax/E-mail for your Inquiries. </p>


        {{-- <div class="col-md-2 col-xs-12" style="color:#fff;"></div> --}}
        <div class="col-md-5 col-xs-12" style="color:#fff;margin-bottom:15px;">
        <form action="{{route('general_contactus')}}" method="POST" onsubmit="return checkform()">
	
            @csrf

            

            <div class="range range-sm-bottom"> 
              <div class="form-group cell-sm-6"> 
                <label style="width: 100%;text-align: left;">Name <span id="ename" style="color: red"></span></label>
                <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control form-control-lg" autocomplete="off"     placeholder="Enter name" style="height: 34px;">
              </div>

              <div class="form-group cell-sm-6">
                <label style="width: 100%;text-align: left;">Phone <span id="ephone" style="color: red"></span></label>
                <input type="text" name="phone" id="phone" value="{{old('phone')}}" class="form-control form-control-lg"  placeholder="Enter phone" style="height: 34px;" autocomplete="off">
              </div>

              <div class="form-group cell-xs-12">
                <label style="width: 100%;text-align: left;">Message <span id="emessage" style="color: red"></span></label>
                <textarea   name="message" id="message"  class="form-control form-control-lg"    placeholder="Enter message" style="min-height: 80px;" autocomplete="off">{{old('message')}}</textarea>
              </div>

              <div class="form-group cell-sm-6">
                <label style="width: 100%;text-align: left;">Email address <span id="eemail" style="color: red"></span></label>
                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control form-control-lg"    placeholder="Enter email" style="height: 34px;" autocomplete="off">
              </div>

              <!--------------->

              
              <div class="form-group cell-sm-6"> 
                <label style="width: 100%;text-align: left;">Capcha <span id="ecaptcha" style="color: red"></span></label>
                <?php 
                  $a = rand(1,9);
                  $b = rand(1,9);
                  $c = $a+$b;
                ?>
                <input type="hidden"  name="captcha_result" id="captcha_result" value="<?php echo $c;?>">
                <div style="height: 34px;line-height: 34px;background:#f4f3f3;color: #000;">
                <div style="float: left;width:30;font-size: 18px;">&nbsp;<?php echo $a;?>&nbsp;</div>
                <div style="float: left;width:30;font-size: 18px;">&nbsp;+&nbsp;</div>
                <div style="float: left;width:30;font-size: 18px;">&nbsp;<?php echo $b;?>&nbsp;</div>
                <div style="float: left;width:30;font-size: 18px;">&nbsp;=&nbsp;</div>
                <div style="float: left;width:30;font-size: 18px;">&nbsp;
                  <select  name="captcha" id="captcha" style="width: 80px;" autocomplete="off"> 
                    <option value="0">???</option>
                    <?php
                    for($i=1;$i<100;$i++)
                    { 
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php 
                    }
                    ?>
                  </select>  
                </div>
                </div>
                <span style="font-size: 10px;">Capcha is used for sequrity, please select appropriate summation value</span>
                
              </div>
              

              <div class="cell-sm-6">
                <button class="button button-block button-primary" type="submit" style="float: left;background: #fbb307;border-radius: 3px;">Send Message</button>
              </div>
            </div>
          </form>
        </div>
        
        <div class="col-md-5 col-xs-12" style="color:#fff;">
        <div class="col-md-12 col-xs-12 p50" style="color:#fff;margin-bottom:15px;">
            <ul style="list-style-type:none;text-align:left;">
                <li><h4>Tokyo Office</h4></li>
                <li>
                1-4-4 Higashi Yaguchi Ota-Ku Tokyo,<br> Japan 146-0094
                </li>
                <li>
                    E-mail : info@woodyltd.com
                </li>
                <li>
                    Fax : +81(0)3-5700-4625
                </li>
                <li>
                    Phone No : +81(0)3-5700-4622
                </li>
                <li>
                    Mobile No : +8190-8944-2747
                </li>
                 
            </ul>
        </div>
        <div class="col-md-12 col-xs-12" style="color:#fff;">
            <ul style="list-style-type:none;text-align:left;">
                <li><h4>Factory Office</h4></li>
                <li>
                185-943 Tokura Tomisato-Shi, Chiba 286-0212
                </li>
                <li>
                E-mail : info@woodyltd.com
                </li>
                <li>
                    Fax : +81(0)4-7637-6695
                </li>
                <li>
                Phone No : +81(0)4-7637-6694
                </li>
                
                 
            </ul>
        </div>
    </div>
        <?php     
    }
    else {
    ?>

<h3> お問い合わせ </h3>
<p>お問い合わせはお気軽に電話・FAX・メールにて ご連絡ください。 </p>

<div class="col-md-5 col-xs-12" style="color:#fff;margin-bottom:15px;">
    <form action="{{route('general_contactus')}}" method="POST" onsubmit="return checkform()">

        @csrf

        

        <div class="range range-sm-bottom"> 
          <div class="form-group cell-sm-6"> 
            <label style="width: 100%;text-align: left;">氏名 <span id="ename" style="color: red"></span></label>
            <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control form-control-lg" autocomplete="off"     placeholder="Enter name" style="height: 34px;">
          </div>

          <div class="form-group cell-sm-6">
            <label style="width: 100%;text-align: left;">電話番号 <span id="ephone" style="color: red"></span></label>
            <input type="text" name="phone" id="phone" value="{{old('phone')}}" class="form-control form-control-lg"  placeholder="Enter phone" style="height: 34px;" autocomplete="off">
          </div>

          <div class="form-group cell-xs-12">
            <label style="width: 100%;text-align: left;">お問い合わせ内容 <span id="emessage" style="color: red"></span></label>
            <textarea   name="message" id="message"  class="form-control form-control-lg"    placeholder="Enter message" style="min-height: 80px;" autocomplete="off">{{old('message')}}</textarea>
          </div>

          <div class="form-group cell-sm-6">
            <label style="width: 100%;text-align: left;">Eメール <span id="eemail" style="color: red"></span></label>
            <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control form-control-lg"    placeholder="Enter email" style="height: 34px;" autocomplete="off">
          </div>

          <!--------------->

          
          <div class="form-group cell-sm-6"> 
            <label style="width: 100%;text-align: left;">Capcha <span id="ecaptcha" style="color: red"></span></label>
            <?php 
              $a = rand(1,9);
              $b = rand(1,9);
              $c = $a+$b;
            ?>
            <input type="hidden"  name="captcha_result" id="captcha_result" value="<?php echo $c;?>">
            <div style="height: 34px;line-height: 34px;background:#f4f3f3;color: #000;">
            <div style="float: left;width:30;font-size: 18px;">&nbsp;<?php echo $a;?>&nbsp;</div>
            <div style="float: left;width:30;font-size: 18px;">&nbsp;+&nbsp;</div>
            <div style="float: left;width:30;font-size: 18px;">&nbsp;<?php echo $b;?>&nbsp;</div>
            <div style="float: left;width:30;font-size: 18px;">&nbsp;=&nbsp;</div>
            <div style="float: left;width:30;font-size: 18px;">&nbsp;
              <select  name="captcha" id="captcha" style="width: 80px;" autocomplete="off"> 
                <option value="0">???</option>
                <?php
                for($i=1;$i<100;$i++)
                { 
                ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php 
                }
                ?>
              </select>  
            </div>
            </div>
            <span style="font-size: 10px;">Capcha はセキュリティのために使用されます。適切な合計値を選択してください</span>
            
          </div>
          

          <div class="cell-sm-6">
            <button class="button button-block button-primary" type="submit" style="float: left;background: #fbb307;border-radius: 3px;">Send Message</button>
          </div>
        </div>
      </form>
    </div>
<div class="col-md-5 col-xs-12 p50" style="color:#fff;margin-bottom:15px;">
    <ul style="list-style-type:none;text-align:left;">
        <li><h4>東京オフィス </h4></li>
        <li>
            東京都大田区東矢口1-4-4 
        </li>
        <li>
            TEL : 03-5700-4622
        </li>
        <li>
            FAX : 03-5700-4625
        </li>
        <li>
            携帯 : 090-8944-2747 
        </li>
        <li>
            Eメール : info@woodyltd.com
        </li>
         
    </ul>
</div>
<div class="col-md-5 col-xs-12" style="color:#fff;">
    <ul style="list-style-type:none;text-align:left;">
        <li><h4>ファクトリーオフィス</h4></li>
        <li>
            〒286-0212 <br>
            千葉県富里市十倉185-943
        </li>
        <li>
            TEL : 04-7637-6694
        </li>
        <li>
            FAX : 04-7637-6695
        </li>
        <li>
            Eメール : info@woodyltd.com
        </li>
        
         
    </ul>
</div>
<?php   
 }
?>


</div>