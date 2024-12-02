@extends('layouts.fontend_master')

@section('content')
 
<style>
	.text-content p{text-align: left;color: #fff;text-align: justify;margin-bottom:15px;}
.header{min-height: 100px;height: 100px;}
.index-banner{display: none;}
.content_text {float: left;width: 65%;color: #fff;}
.content-imag {float: left;width: 27%;margin-right: 5%;}
.content-imag img{max-width: 150px !important;max-height:150px!important;min-height: 150px !important;}
.context_text_area{height: 102px;padding-bottom: 15px;overflow: hidden;text-overflow: ellipsis;word-break: keep-all; text-align:justify;}

@media(max-width:768px) 
{
.context_text_area{height: 150px !important;padding-bottom: 15px;overflow: hidden;text-overflow: ellipsis;word-break: keep-all; text-align:justify;}
.content-imag img {max-width: 90px !important;min-height: 90px !important;max-height: 90px !important;}
}
</style>
 <div class="content">
		<div class="about-section" id="about" id="about">
	<div class="container">
		<div class="about-header">
			<div class="container">
			<div class="row">
			<h3>プラスチック汚染</h3>
			
			<div class="about-text" style="text-align: left;width:100%">
				<div class="container">
				<div class="row">
					<p style="margin-bottom: 10px;">
						プラスチック汚染は、プラスチック材料が劣化したときに発生する重大な環境問題です。
特に使い捨てプラスチックは不適切に廃棄され、環境中に排出されます。
プラスチック廃棄物は自然に分解されるまでに数百年かかる場合があり、その蓄積は
生態系は広範囲にわたる影響を及ぼします。 
                    </p>
					<p style="margin-bottom: 10px;">
						プラスチック廃棄物による環境汚染についての重要なポイントは次のとおりです。
                    </p>
				</div>
				</div>

				<div class="container">
				<div class="row">

					<!---- Start  1 --->
				  <div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
					  <div class="content-imag"> 
					  <a href="javascript:"   title="land-pollution-by-plastic"> 
					  <img src="{{ asset('fontend') }}/images/land-pollution-by-plastic.jpg" onclick="refreshpage()" alt="land-pollution-by-plastic"> 
					  </a> 
					  </div>
					  <div  class="content_text" style="text-align: left;">
						<p class="context_text_area" style="height:145px;"> 
								  <b>土壌汚染 :</b>
			  
                                  プラスチック廃棄物のポイ捨てや投棄などの不適正な処理
                                  埋立地は土地汚染の一因となります。 ビニール袋、ボトル、その他のプラスチック
                                  アイテムは景観を乱雑にし、エリアの美的魅力やポーズに影響を与える可能性があります。
                                  野生動物に対する危険。
						  </p>
						  
						</div>
					</div>
					<!---- End  --->

					<!---- Start  2 --->
					<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
						<div class="content-imag"> 
						<a href="javascript:"   title="water-pollution-by-plastic"> 
						<img src="{{ asset('fontend') }}/images/water-pollution-by-plastic.jpg" onclick="refreshpage()" alt="water-pollution-by-plastic"> 
						</a> 
						</div>
						<div class="content_text" style="text-align: left;">
							<p class="context_text_area" style="height:145px;"> 
									<b>水質汚染 :</b>
				
									プラスチック汚染は水質汚染の主な原因です。 プラスチック
マイクロプラスチックと呼ばれる小さな破片に分解され、水域を汚染する可能性があります。
川、湖、海を含みます。 海洋動物はプラスチックの破片を食べ物と間違える可能性があり、
誤飲や絡まりにつながり、怪我や死亡事故を引き起こす可能性があります。
							</p>
							
						  </div>
					  </div>
					  <!---- End  --->

					  <!---- Start  3 --->
					<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
						<div class="content-imag"> 
						<a href="javascript:"   title="air-pollution-by-plastic"> 
						<img src="{{ asset('fontend') }}/images/air-pollution-by-plastic.jpg" onclick="refreshpage()" alt="air-pollution-by-plastic"> 
						</a> 
						</div>
						<div class="content_text" style="text-align: left;">
							<p class="context_text_area" style="height:145px;"> 
									<b>大気汚染 :</b>
				
									プラスチック廃棄物を燃やすと、有害な汚染物質が大気中に放出されます。
プラスチックが燃えると有毒ガスや粒子状物質が発生し、大気汚染や粒子状物質が発生します。
大気の質に悪影響を及ぼし、人間の健康に悪影響を与える可能性があります。
							</p>
							
						  </div>
					  </div>
					  <!---- End  --->

					  <!---- Start  4 --->
					<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
						<div class="content-imag"> 
						<a href="javascript:"   title="soil-contamination-by-plastic"> 
						<img src="{{ asset('fontend') }}/images/soil-contamination-by-plastic.jpg" onclick="refreshpage()" alt="soil-contamination-by-plastic"> 
						</a> 
						</div>
						<div class="content_text" style="text-align: left;">
							<p class="context_text_area" style="height:145px;"> 
									<b>土壌汚染 :</b>
				
									有害な化学物質が土壌に浸出するプラスチックは農業を汚染する可能性があります
土地、作物の品質と生産性に影響を与えます。 土壌中にプラスチック廃棄物が存在すると、
また、植物の成長を妨げ、自然生態系を破壊します。
							</p>
							
						  </div>
					  </div>
					  <!---- End  --->

					  <!---- Start  5 --->
					<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
						<div class="content-imag"> 
						<a href="javascript:"   title="threat-to-wildlife-by-plastic"> 
						<img src="{{ asset('fontend') }}/images/threat-to-wildlife-by-plastic.jpg" onclick="refreshpage()" alt="threat-to-wildlife-by-plastic"> 
						</a> 
						</div>
						<div class="content_text" style="text-align: left;">
							<p class="context_text_area" style="height:145px;"> 
									<b>野生動物への脅威 :</b>
				
									プラスチック汚染は野生生物に重大な脅威をもたらします。 海洋動物など
カメ、海鳥、海洋哺乳類は、プラスチックの破片に絡まったり、それを摂取したりして、
怪我、窒息、または飢餓。 陸上動物もプラスチック廃棄物を消費したり、有害な物質を摂取したりすることによって被害を受ける可能性があります。
それに巻き込まれます。
							</p>
							
						  </div>
					  </div>
					  <!---- End  --->

					  <!---- Start  6 --->
					<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
						<div class="content-imag"> 
						<a href="javascript:"   title="impact-on-human-life-by-plastic"> 
						<img src="{{ asset('fontend') }}/images/impact-on-human-life-by-plastic.jpg" onclick="refreshpage()" alt="impact-on-human-life-by-plastic"> 
						</a> 
						</div>
						<div class="content_text" style="text-align: left;">
							<p class="context_text_area" style="height:155px;"> 
									<b>人間の健康への影響 :</b>
				
									プラスチック汚染は間接的に人間の健康に影響を与える可能性があります。 マイクロプラスチックが侵入すると
汚染水や海洋動物の摂取による食物連鎖により、魚介類に蓄積する可能性があります。
そして最終的には人間によって摂取されてしまいます。 マイクロプラスチックの摂取による長期的な健康への影響は依然として残っている
研究されていますが、潜在的な健康リスクについての懸念があります。
							</p>
							
						  </div>
					  </div>
					  <!---- End  --->
  
					
  
				</div>
				</div>

					
						
                    
			</div>
			</div>
			</div>
			

			<div class="clearfix"></div>
			</div>
			
	<div class="arrow1">
	<a href="#work" class="scroll"><img src="{{ asset('fontend') }}/images/arrow1.png" alt=""/></a>
	</div>

	</div>
	</div>
	<!-- about-section-ends -->
    
    
	<div class="works-section" id="work">
		<div class="works-header">
			<h3>私たちがやろうと考えていること</h3>
			<p>  
				プラスチック燃料化技術として知られる、廃プラスチックを石油に変換するプロセス。
プラスチック廃棄物を管理する潜在的なソリューションとして注目を集めています。
			</p>
		  </div>
		<div class="portfolio-section-bottom-row" >
			<div class="container">
			
			  
			  
			  
			  
			<div class="row"> 
				
				<!---- Start  1 --->
				<div class="col-md-12 col-xs-12" style="margin-bottom: 15px;">
				<div class="content" style="float: left;margin: 0 15px 15px 0;"> 
				<a href="javascript:"   title="waste-plastic-to-diesel-oil"> 
				<img src="{{ asset('fontend') }}/images/waste-plastic-to-diesel-oil.jpg"  alt="waste-plastic-to-diesel-oil" style="max-height: 220px !important;min-height: 150px !important;"> 
				</a> 
				</div>
				<div class="text-content">
					<p> 
						<b>プラスチック原料:</b> プラスチック廃棄物には、ポリエチレン（PE）などの各種プラスチックが含まれ、
                        ポリプロピレン（PP）、ポリスチレン（PS）、ポリエチレンテレフタレート（PET）を原料として使用可能
                        変換プロセス用。 ただし、プラスチック原料の品質と組成は影響を与える可能性があります。
                        得られるオイルの効率と品質。 
					</p>
					<p>
						<b>熱分解プロセス:</b> プラスチック廃棄物は通常、細かく切り刻まれ、熱分解装置に送られます。
                        反応器。 反応器は高温 (通常 300 ～ 500 ℃) に加熱されます。
                        酸素が存在しないため、完全燃焼が妨げられます。 この熱劣化プロセスは壊れます
                        プラスチックの長いポリマー鎖をより小さな炭化水素分子に変える。
					</p>
					<p>
						<b>副産物:</b> 熱分解プロセスでは、石油、ガス、固体などの副産物の混合物が生成されます。
                        残余（文字）。 これらの副産物の組成と品質はプラスチックによって異なります。
                        原料、操作条件、使用される特定の熱分解技術。
					</p>
					<p>
						<b>石油精製:</b> 熱分解プロセスで得られたオイルは、除去するためにさらに精製する必要があります。
                        不純物を取り除き、品質を向上させます。 精製プロセスには、蒸留、分留、
                        使用可能な燃料製品を得る精製技術。
					</p>
					<p>
						<b>燃料用途:</b> 得られたオイルは燃料源としてさまざまな用途に使用できます。
                        産業用暖房、発電、または場合によってはディーゼルの代替品としても使用されます。 しかし、
                        燃料としてのオイルの適合性は、その品質、組成、および地域の規制の順守によって決まります。
                        規制と燃料規格。
					</p>
					<p>
                        プラスチックから油への変換はプラスチックからエネルギーを回収する方法を提供する一方で、注目に値します。
                        プラスチック汚染問題の完全な解決策ではありません。 優先順位を付けることが重要です
                        プラスチックの消費量を削減し、リサイクルシステムを改善し、持続可能な代替品を促進する取り組み
                        プラスチックに。 さらに、環境への影響、エネルギーバランス、経済性も考慮されます。
                        全体的な持続可能性を確保するには、プラスチックから石油への変換を慎重に評価する必要があります。	
					</p>
					
				  </div>
			  </div>
			  <!---- End  --->
			   
			</div>


		  </div>
		  <div class="arrow1"> <a href="#services" class="scroll"><img src="https://woodyengineering.com/fontend/images/arrow1.png" alt=""/></a> </div>
		  </div>
		</div>
	<!-- portfolio-section-ends -->











	<div class="services-section" id="services">
			<div class="container"> 
			<div class="services-header">
				<h3>サービス</h3>
					<p>
                        当社は重機を専門に扱っております。 当社の資格のあるエンジニアが、当社が取得した製品の検査を実施します。 
                        お客様のご要望に応じて認定検査会社による検査も行います。
                    </p>
			</div>
			<div class="services-sectiongrids">
				<div class="col-md-4 services-grid">
					<img src="{{ asset('fontend') }}/images/img11.png" alt=""/>
					<h4>購入</h4>
					<p>
                        鋼材や水圧部品などの必要な原材料を購入します
					</p>
				</div>
				<div class="col-md-4 services-grid">
					<img src="{{ asset('fontend') }}/images/img22.jpg" alt="" style="border-radius: 50px;"/>
					<h4>メンテナンス</h4>
					<p>
                        お客様のご要望に応じた保守サービスを提供いたします。
                    </p>
				</div>
				<div class="col-md-4 services-grid">
					<img src="{{ asset('fontend') }}/images/img33.png" alt=""/>
					<h4>セール</h4>
					<p>
                        水陸両用機器、鋼材加工品（各種倉庫、ビル、ビラ）、コンテナ製品（ハウス、
                        ショップ、レストラン）など。 
                    </p>
				</div>
				<div class="clearfix"></div>
				<div class="arrow1">
					<a href="#contact" class="scroll"><img src="{{ asset('fontend') }}/images/arrow1.png" alt=""/></a>
					</div>
		</div>
		</div>
		</div>
		<!-- services-section-ends -->

		<!-- google map-start -->
		<div class="map-section" id="googlemap">
			<style>
				#map {
				height: 400px;
				width: 100%;
				}
			</style>		
				
                  <iframe id="map"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1022.1498453863778!2d140.3328498292304!3d35.689316087997106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQxJzIxLjUiTiAxNDDCsDIwJzAwLjIiRQ!5e1!3m2!1sen!2sjp!4v1632961074836!5m2!1sen!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			
		</div>
		<!-- google map-ends -->

	</div>


	

{{-- <script>
	function refreshpage()
	{
		document.location.reload(true);
	}
</script> --}}






  @endsection