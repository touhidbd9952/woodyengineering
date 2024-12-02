@extends('layouts.fontend_master')

@section('content')
 
<style>
	.content_text {float: left;width: 65%;color: #fff;}
	.content-imag {float: left;width: 27%;margin-right: 5%;}
	.content-imag img{max-width: 150px !important;max-height:150px!important;min-height: 150px !important;}
	.context_text_area{height: 102px;padding-bottom: 15px;overflow: hidden;text-overflow: ellipsis;word-break: keep-all; text-align:justify;}
	
	@media(max-width:768px) 
	{
	.context_text_area{height: 44px !important;padding-bottom: 15px;overflow: hidden;text-overflow: ellipsis;word-break: keep-all; text-align:justify;}
	.content-imag img {max-width: 90px !important;min-height: 90px !important;max-height: 90px !important;}
	}
	</style>

 <div class="content">
		<div class="about-section" id="about" id="about">
	<div class="container">
		<div class="about-header">
			<div class="row">
			<h3>会社概要</h3>
			<div class="about-imag">
			<img src="{{ asset('fontend') }}/images/pic-9.jpg" alt="" class="img-about" style="display:none" />
			</div>
			<div class="about-text" style="text-align: left;width:100%">
					<p>
						有限会社ウッディーは1991年12月に設立しました。
                        それ以来、会社は成長しています。  
                        何年間にもわたって、ウッディーは世界中のお客様に対し、信頼の上で成り立った迅速なサービスを提供しています。 
                    </p> 
                    
					<p>
						私たちは建設重機やペーパーミル、スチールミルなどのさまざまな産業プラントを専門としています。
                        現在、お客様のニーズに基づいて作業環境を強化しています。 倉庫、コンテナハウス、コンテナショップ、コンテナオフィスなどを
                        製造することから製鉄加工を開始しました。

                        川や運河のゴミ洗浄機、浅瀬に浮かぶ浚渫作業など、市場の要求に応じて水陸両用機器を製造しています。

                    </p>
                    
                    <p>
						私たちは、お客様に最高品質の製品を提供すると同時に、お客様がそれぞれの業界のリーダーになるよう努めています。
                    </p>
                    
			</div>
			</div>
			

			<div class="row">
				<div class="col-md-4">
					<video width="320" height="240" controls>
						<source src="{{ asset('/') }}fontend/video/CSPI-EXPO.mp4" type="video/mp4">
						<source src="{{ asset('/') }}fontend/video/CSPI-EXPO.mp4" type="video/ogg">
						Your browser does not support the video tag.
					</video>
				</div>
				<div class="col-md-4">
					<video width="320" height="240" controls>
						<source src="{{ asset('/') }}fontend/video/woody_excavator.mp4" type="video/mp4">
						<source src="{{ asset('/') }}fontend/video/woody_excavator.mp4" type="video/ogg">
						Your browser does not support the video tag.
					</video>
				</div>
				<div class="col-md-4">
					<video width="320" height="240" controls>
						<source src="{{ asset('/') }}fontend/video/woody_excavator_activity.mp4" type="video/mp4">
						<source src="{{ asset('/') }}fontend/video/woody_excavator_activity.mp4" type="video/ogg">
						Your browser does not support the video tag.
					</video>
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
			<h3>業務内容</h3>
			<p> 
				鉄鋼製造、コンテナハウス、コンテナショップ、水陸両用機器の購入、販売を行っています。 また、古い水陸両用品を購入し、修理し、必要に応じて市場に販売します。
			</p>
		  </div>
		<div class="portfolio-section-bottom-row" >
			<div class="container">

			  
				<div class="row"> 
					<!---==== Amphibious Equipment =======-->
					<div class="col-md-12 col-xs-12 works-header" style="margin-top:15px;">
					{{-- <a  href="javascript:">	 --}}
					 <h3 style="color:#FFF;margin-bottom:30px; text-align:left !important;">水陸両用装備</h3>
					{{-- </a> --}}
				  </div>
					<!---- Start  1 Amphibious Excavator--->
					<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> 
					<a href="https://amphibious.woodyengineering.com/amphibious/view/1"   title="Amphibious Excavator"> 
					<img src="https://woodyengineering.com/fontend/images/amphibious-1.jpg" onclick="refreshpage()" alt="Amphibious Excavator"> 
					</a> 
					</div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>水陸両用掘削機 :</b>
			
								水陸両用掘削機は、柔らかい地面に浮かんで浚渫作業を行うことができるタイプの掘削機です。
								沼地、湿地、浅瀬などの地形。 お客様のご要望に基づいて設計いたします
								多くのオプションを備えた水陸両用掘削機を作成します ... 
						</p>
						<p>
							<a href="https://amphibious.woodyengineering.com/amphibious/view/1" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
								詳細を見る
							</a>
						</p>
					  </div>
				  </div>
				  <!---- End  --->
				   <!---- Start   2 Manatee (Pontoon)--->
					<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> 
					<a href="https://amphibious.woodyengineering.com/amphibious/view/10"   title="Barge excavator"> 
					<img src="https://woodyengineering.com/fontend/images/amphibious-2.jpg" onclick="refreshpage()" alt="Barge excavator" > 
					</a> 
					</div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>はしけ掘削機 :</b>
			
								はしけ掘削機 は 主に河川、水路の浚渫に使用されます。 ポンツーンに取り付けて安定化
								スパッドを使って水中で使用したり、川や川で使用したりできます。  ... 
						</p>
						<p>
							<a href="https://amphibious.woodyengineering.com/amphibious/view/10" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
								詳細を見る
							</a>
						</p>
					  </div>
				  </div>
				  <!---- End  --->
				   <!---- Start  3 Water floating garbage cleaner--->
					<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> 
					<a href="https://amphibious.woodyengineering.com/amphibious/view/2"   title="river cleaner">  
					<img src="https://woodyengineering.com/fontend/images/amphibious-3.jpg" onclick="refreshpage()" alt="river cleaner" > 
					</a> 
					</div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>水上浮遊ゴミクリーナー :</b>
			
								当社の水上浮遊ゴミクリーナーは主に浮遊ゴミの回収に使用されます。
貯水池、川、湖、海岸の水生植物。使いやすく、効率が高く、
池、水路、河川のゴミ洗浄剤として安定しています 
						</p>
						<p>
							<a href="https://amphibious.woodyengineering.com/amphibious/view/2" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
								詳細を見る
							</a>
						</p>
					  </div>
				  </div>
				  <!---- End  --->
				  <!---- Start  4 Excavator Attachment--->
				<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> 
					<a href="https://amphibious.woodyengineering.com/amphibious/view/17"   title="river cleaner">  
					<img src="https://amphibious.woodyengineering.com//uploads/images/product/thambnail/1768645744061530.jpg" onclick="refreshpage()" alt="river cleaner" > 
					</a> 
					</div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>ショベルアタッチメント :</b>
			
								浚渫カッターヘッドは、浚渫作業に使用される特殊な掘削機のアタッチメントです。
土砂、汚泥、その他の物質を遺体から掘削して除去するように設計されています。
川、湖、港、水路などの水...
						</p>
						<p>
							<a href="https://amphibious.woodyengineering.com/amphibious/view/17" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
								詳細を見る
							</a>
						</p>
					  </div>
				  </div>
				  <!---- End  --->
				  
				   
				</div>



				{{-- Woody Boom Arm Bucket Arrachment --}}
				<div class="row">
					<div class="col-md-12 col-xs-12 works-header" style="margin-top:15px;">
						{{-- <a  href="javascript:"> --}}
						  <h3 style="color:#FFF;margin-bottom:30px; text-align:left !important;">ウッディーブームアームバケットアタッチメント</h3>
						{{-- </a> --}}
					  </div>
					  <!---- Start  1 Boom arm bucket--->
					<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
						<div class="content-imag"> 
						<a href="https://amphibious.woodyengineering.com/amphibious/view/12"   title="Boom arm bucket"> 
						<img src="https://amphibious.woodyengineering.com//uploads/images/product/multipleimage/1768206700355923.jpg" onclick="refreshpage()" alt="Boom arm bucket"> 
						</a> 
						</div>
						<div class="content_text" style="text-align: left;">
							<p class="context_text_area"> 
									<b>ブームアームバケット :</b>
				
									建設機械向けには、掘削機ブームやアーティキュレート油圧式油圧ショベルブームを製造しています。
掘削用掘削バケットを備えたアーム ...
							</p>
							<p>
								<a href="https://amphibious.woodyengineering.com/amphibious/view/12" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
									詳細を見る
								</a>
							</p>
						  </div>
					  </div>
					  <!---- End  --->
					  <!---- Start  2 Material Handler--->
				<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> 
					<a href="https://amphibious.woodyengineering.com/amphibious/view/11"   title="river cleaner">  
					<img src="https://amphibious.woodyengineering.com//uploads/images/product/multipleimage/1768092497035380.jpg" onclick="refreshpage()" alt="river cleaner" > 
					</a> 
					</div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>マテリアルハンドラー:</b>
			
								石材チップや穀物を積み降ろすためのマテリアルハンドリングブームアーム
掘削機または同様の機械で使用される特殊なアタッチメントです。
石やチップなどのバルク材料を効率的に処理できるように設計されています... 
						</p>
						<p>
							<a href="https://amphibious.woodyengineering.com/amphibious/view/11" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
								詳細を見る
							</a>
						</p>
					  </div>
				  </div>
				  <!---- End  --->
	
					  
	
				  </div>




				  <div class="row">
					<!---==== Woody Customize Container =======-->
					<div class="col-md-12 col-xs-12 works-header" style="margin-top:15px;">
						{{-- <a  href="javascript:"> --}}
						  <h3 style="color:#FFF;margin-bottom:30px; text-align:left !important;">
							ウッディカスタマイズコンテナ
						  </h3>
						{{-- </a> --}}
					  </div>
					<!---- Start  1 Container House--->
				  <div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
					  <div class="content-imag"> 
					  <a href="https://steelfabrication.woodyengineering.com/fabrication/view/4"   title="Container House"> 
					  <img src="https://steelfabrication.woodyengineering.com//uploads/images/product/multipleimage/1711389956294654.jpg" onclick="refreshpage()" alt="Container House"> 
					  </a> 
					  </div>
					  <div class="content_text" style="text-align: left;">
						  <p class="context_text_area"> 
								  <b>コンテナハウス :</b>
			  
								  コンテナハウスの建設は非常に費用対効果が高いです。 簡単に変更できます
モダンで洗練された外観を作成する輸送コンテナ。輸送コンテナは次のとおりです。 ...
						  </p>
						  <p>
							  <a href="https://steelfabrication.woodyengineering.com/fabrication/view/4" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
								詳細を見る
							  </a>
						  </p>
						</div>
					</div>
					<!---- End  --->
	
					<!---- Start  2 Container Office--->
				  <div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
					  <div class="content-imag"> 
					  <a href="https://steelfabrication.woodyengineering.com/fabrication/view/6"   title="Container Office"> 
					  <img src="https://steelfabrication.woodyengineering.com//uploads/images/product/thambnail/1711387899653800.jpg" onclick="refreshpage()" alt="Container Office"> 
					  </a> 
					  </div>
					  <div class="content_text" style="text-align: left;">
						  <p class="context_text_area"> 
								  <b>コンテナオフィス :</b>
			  
								  コンテナハウスは事務所としても使えます。 コンテナオフィスの建設には莫大な費用がかかる
効果的で見栄えも良い。 当社の専門エンジニアが輸送用コンテナを簡単に変更できます
必要に応じてオフィスに行きます。
						  </p>
						  <p>
							  <a href="https://steelfabrication.woodyengineering.com/fabrication/view/6" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
								詳細を見る
							  </a>
						  </p>
						</div>
					</div>
					<!---- End  --->
	
				</div>



				<div class="row"> 
					<!---==== Woody Boats =======-->
					<div class="col-md-12 col-xs-12 works-header" style="margin-top:15px;">
					{{-- <a  href="javascript:"> --}}
					  <h3 style="color:#FFF;margin-bottom:30px; text-align:left !important;">ウッディ- ボート</h3>
					{{-- </a> --}}
				  </div>
					<!---- Start  1 House Boat--->
					<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> <a href="https://woodyengineering.com/boats/woodyboats/1"   title="House Boat"> 
					<img src="https://woodyengineering.com/boats/uploads/images/product/thambnail/1756865067262681.png" onclick="refreshpage()" alt="Heavy Steel Building"> </a> </div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>ハウスボート :</b>
			
								ハウスボートは、水上の家として使用するように設計されたボートの一種です。
伝統的なボートとは異なり、ハウスボートには船上に恒久的な生活施設があり、
寝室、バスルーム、キッチン、リビングエリアを含む.... 
						</p>
						<p>
							<a href="https://woodyengineering.com/boats/woodyboats/1" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
								詳細を見る
							</a>
						</p>
					  </div>
				  </div>
				  <!---- End  --->
	
				  <!---- Start  2 Pontoon Boat--->
					<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
						<div class="content-imag"> <a href="https://woodyengineering.com/boats/woodyboats/2"   title="Pontoon Boat"> 
						<img src="https://woodyengineering.com/boats/uploads/images/product/thambnail/1757145229423356.png" onclick="refreshpage()" alt="Heavy Steel Building"> </a> </div>
						<div class="content_text" style="text-align: left;">
							<p class="context_text_area"> 
									<b>ポンツーンボート :</b>
				
									ポンツーンボートは、平らな船体で構成されるレクリエーション用水上バイクの一種です。
と呼ばれるいくつかのチューブで支えられた、水の上に浮かぶ浮力のあるプラットフォーム。
「ポンツーン」。 ポンツーンボートは通常、釣りなどのレジャー活動に使用されます。
泳いだり、水上でリラックスしたり.... 
							</p>
							<p>
								<a href="https://woodyengineering.com/boats/woodyboats/2" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
									詳細を見る
								</a>
							</p>
						  </div>
					  </div>
					  <!---- End  --->
	
				</div>



				<div class="row"> 
					<!---==== Woody Customize Vehicles =======-->
					<div class="col-md-12 col-xs-12 works-header" style="margin-top:15px;">
					{{-- <a  href="javascript:"> --}}
					  <h3 style="color:#FFF;margin-bottom:30px; text-align:left !important;">ウッディのカスタマイズビークル</h3>
					{{-- </a> --}}
				  </div>
					<!---- Start  1 Campain Car--->
					<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> <a href="https://amphibious.woodyengineering.com/amphibious/view/13"   title="House Boat"> 
					<img src="https://amphibious.woodyengineering.com//uploads/images/product/thambnail/1768647751227564.jpg" onclick="refreshpage()" alt="Heavy Steel Building"> </a> </div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>キャンペーンカー :</b>
			
								選挙カーとは、選挙活動に使用される車両のことをいいます。
候補者または政党を宣伝するための政治キャンペーン..... 
						</p>
						<p>
							<a href="https://amphibious.woodyengineering.com/amphibious/view/13" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
								詳細を見る
							</a>
						</p>
					  </div>
				  </div>
				  <!---- End  --->
	
				  <!---- Start  2 Campain Trailer--->
					<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
						<div class="content-imag"> <a href="https://amphibious.woodyengineering.com/amphibious/view/14"   title="Pontoon Boat"> 
						<img src="https://amphibious.woodyengineering.com//uploads/images/product/thambnail/1768648189607593.jpg" onclick="refreshpage()" alt="Heavy Steel Building"> </a> </div>
						<div class="content_text" style="text-align: left;">
							<p class="context_text_area"> 
									<b>キャンペーントレーラー :</b>
				
									選挙トレーラーカーは、政治活動中に使用される車両の一種です。
候補者または政党の可視性と影響力を強化します。 車両に連結されたトレーラーです。
通常は乗用車またはトラックであり、移動手段として機能します。 ....
	
							</p>
							<p>
								<a href="https://amphibious.woodyengineering.com/amphibious/view/14" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
									詳細を見る
								</a>
							</p>
						  </div>
					  </div>
					  <!---- End  --->
	
					  
	
				</div>


				<div class="row"> 
					<!---==== Woody Environment Protection activities =======-->
					<div class="col-md-12 col-xs-12 works-header" style="margin-top:15px;">
					{{-- <a  href="{{route('plastice_waste_replace')}}"> --}}
					  <h3 style="color:#FFF;margin-bottom:30px; text-align:left !important;">木質環境保全活動</h3>
					{{-- </a> --}}
				  </div>
					<!---- Start  1 --->
					<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> <a href="{{route('plastice_waste_replace')}}"   title="House Boat"> 
					<img src="{{ asset('fontend') }}/images/waste-plastic-to-diesel-oil.jpg" onclick="refreshpage()" alt="Heavy Steel Building"> </a> </div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>プラスチック廃棄物の交換 :</b>
			
								プラスチック廃棄物を置き換えるには、代替の材料や代替手段を見つけることが必要です。
プラスチックとしての目的を持ちながら、より持続可能で環境に優しい... 
						</p>
						<p>
							<a href="{{route('plastice_waste_replace')}}" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
								詳細を見る
							</a>
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
				<h3>サービス </h3>
					<p>
					私たちは重機を専門としています。 当社の資格のあるエンジニアは、当社が行う買収の検査を実施します。 認定検査会社による検査も、お客様のご要望に応じて実施しております。 
                    </p>
			</div>
			<div class="services-sectiongrids">
				<div class="col-md-4 services-grid">
					<img src="{{ asset('fontend') }}/images/img11.png" alt=""/>
					<h4>購入 </h4>
					<p>
                    鉄鋼や油圧部品など必要な原材料を購入します。
                    </p>
				</div>
				<div class="col-md-4 services-grid">
					<img src="{{ asset('fontend') }}/images/img22.jpg" alt="" style="border-radius: 50px;"/>
					<h4>メンテナンス </h4>
					<p>
                    お客様の必要に応じてメンテナンスサービスを提供します。 
                    </p>
				</div>
				<div class="col-md-4 services-grid">
					<img src="{{ asset('fontend') }}/images/img33.png" alt=""/>
					<h4>セール</h4>
					<p>
                    水陸両用機器、鉄鋼製品（各種ウェアハウス、ビル、ビラ）、コンテナ製品（住宅、ショップ、レストラン）などを販売しております。  
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


  @endsection>>>>