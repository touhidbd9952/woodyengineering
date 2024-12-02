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
			<h3>about</h3>
			<div class="about-imag">
			<img src="{{ asset('fontend') }}/images/pic-9.jpg" alt="woody factory" class="img-about" style="display:none" />
			</div>
			<div class="about-text" style="text-align: left;width:100%">
					<p>
                    Woody Co., Ltd. was established December of 1991 with a capital of JPY 30,000,000. Since then the company has been moving forward. Through the years, Woody Co., Ltd. has established good business relationship based on trust and Prompt Services with our Customers all over the globe. 
                    </p> 
                    
					<p>
						We started steel fabrication on the basis of our customer potential requirement to customize equipment to work in various environment and bring useful solution. We manufacture various amphibious equipment ( Amphibious Excavator, Dragging Equipment, Manatee, River Cleaning Machine,pontoon Boat, Houseboat).

                    </p>
                    
                    <p>
                    We provide the highest-quality end products to our customers, while striving to make them the leaders in their respective industries.
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
			<h3>What We Do</h3>
			<p> We are certified company, we deal with steel fabrication, container house, container shop, amphibious equipment purchase, sales and supplier. We also do purchase old amphibious , repair it and sale it to market where required </p>
		  </div>
		<div class="portfolio-section-bottom-row" >
			<div class="container">
			
			  
			  
			  
			  
			<div class="row"> 
				<!---==== Amphibious Equipment =======-->
				<div class="col-md-12 col-xs-12 works-header" style="margin-top:15px;">
				{{-- <a  href="javascript:">	 --}}
				 <h3 style="color:#FFF;margin-bottom:30px; text-align:left !important;">Amphibious Equipment</h3>
				{{-- </a> --}}
			  </div>
				<!---- Start  1 --->
				<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
				<div class="content-imag"> 
				<a href="https://amphibious.woodyengineering.com/amphibious/view/1"   title="Amphibious Excavator"> 
				<img src="https://woodyengineering.com/fontend/images/amphibious-1.jpg" onclick="refreshpage()" alt="Amphibious Excavator"> 
				</a> 
				</div>
				<div class="content_text" style="text-align: left;">
					<p class="context_text_area"> 
							<b>Amphibious Excavator :</b>
		
		An amphibious excavator is a type of excavator that can perform dredging while afloat on soft terrain such as swamp, wet land, and shallow water. On the base of customer requirement we design and create amphibious excavator with many options ... 
					</p>
					<p>
						<a href="https://amphibious.woodyengineering.com/amphibious/view/1" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
						View Details
						</a>
					</p>
				  </div>
			  </div>
			  <!---- End  --->
			   <!---- Start   2--->
				<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
				<div class="content-imag"> 
				<a href="https://amphibious.woodyengineering.com/amphibious/view/10"   title="Barge excavator"> 
				<img src="https://woodyengineering.com/fontend/images/amphibious-2.jpg" onclick="refreshpage()" alt="Barge excavator" > 
				</a> 
				</div>
				<div class="content_text" style="text-align: left;">
					<p class="context_text_area"> 
							<b>Barge excavator :</b>
		
		Barge excavator mainly use for dredging in river, channel. Mounted on pontoons and stabilized in the water by means of spuds, they can be used on rivers and  ... 
					</p>
					<p>
						<a href="https://amphibious.woodyengineering.com/amphibious/view/10" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
						View Details
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
							<b>Water floating garbage cleaner :</b>
		
							Our water floating garbage cleaner is mainly used to collect the floating debris 
							aquatic plants in reservoirs, rivers, lakes and seashores. It is easy to use, high efficiency and 
							stable as pond, cannel, river garbage cleaner. 
					</p>
					<p>
						<a href="https://amphibious.woodyengineering.com/amphibious/view/2" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
						View Details
						</a>
					</p>
				  </div>
			  </div>
			  <!---- End  --->

			  <!---- Start  4 --->
				<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> 
					<a href="https://amphibious.woodyengineering.com/amphibious/view/17"   title="river cleaner">  
					<img src="https://amphibious.woodyengineering.com//uploads/images/product/thambnail/1768645744061530.jpg" onclick="refreshpage()" alt="river cleaner" > 
					</a> 
					</div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>Excavator Attachment :</b>
			
								A dredge cutter-head is a specialized excavator attachment used for dredging operations. 
								It is designed to excavate and remove sediment, sludge, or other materials from bodies of 
								water, such as rivers, lakes, harbors, or channels...
						</p>
						<p>
							<a href="https://amphibious.woodyengineering.com/amphibious/view/17" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
							View Details
							</a>
						</p>
					  </div>
				  </div>
				  <!---- End  --->

			  
			   
			</div>
			
			<div class="row">
				<div class="col-md-12 col-xs-12 works-header" style="margin-top:15px;">
					{{-- <a  href="javascript:"> --}}
					  <h3 style="color:#FFF;margin-bottom:30px; text-align:left !important;">
						Woody Boom Arm Bucket Arrachment
					</h3>
					{{-- </a> --}}
				  </div>
				  <!---- Start  1 --->
				<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> 
					<a href="https://amphibious.woodyengineering.com/amphibious/view/12"   title="Boom arm bucket"> 
					<img src="https://amphibious.woodyengineering.com//uploads/images/product/multipleimage/1768206700355923.jpg" onclick="refreshpage()" alt="Boom arm bucket"> 
					</a> 
					</div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>Boom arm bucket :</b>
			
								For construction equipment, we make Excavator Boom or articulated hydraulic Arm with excavating digging bucket ...
						</p>
						<p>
							<a href="https://amphibious.woodyengineering.com/amphibious/view/12" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
							View Details
							</a>
						</p>
					  </div>
				  </div>
				  <!---- End  --->

				  <!---- Start  2 --->
				<div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> 
					<a href="javascript:"   title="river cleaner">  
					<img src="https://amphibious.woodyengineering.com//uploads/images/product/multipleimage/1768092497035380.jpg" onclick="refreshpage()" alt="river cleaner" > 
					</a> 
					</div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>Material Handler:</b>
			
								A material handling boom arm for loading and unloading stone chips and grains 
								is a specialized attachment used with an excavator or a similar machine. 
								It is designed to efficiently handle bulk materials such as stones, chips... 
						</p>
						<p>
							<a href="https://amphibious.woodyengineering.com/amphibious/view/11" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
							View Details
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
						Woody Customize Container
					  </h3>
					{{-- </a> --}}
				  </div>
				<!---- Start  1 --->
			  <div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
				  <div class="content-imag"> 
				  <a href="https://steelfabrication.woodyengineering.com/fabrication/view/4"   title="Container House"> 
				  <img src="https://steelfabrication.woodyengineering.com//uploads/images/product/multipleimage/1711389956294654.jpg" onclick="refreshpage()" alt="Container House"> 
				  </a> 
				  </div>
				  <div class="content_text" style="text-align: left;">
					  <p class="context_text_area"> 
							  <b>Container House :</b>
		  
							  Building a container home is extremely cost effective. we easily can modify shipping container to create a modern sleek look.Shipping containers are ...
					  </p>
					  <p>
						  <a href="https://steelfabrication.woodyengineering.com/fabrication/view/4" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
						  View Details
						  </a>
					  </p>
					</div>
				</div>
				<!---- End  --->

				<!---- Start  2 --->
			  <div class="col-md-6  col-xs-12" style="margin-bottom: 15px;">
				  <div class="content-imag"> 
				  <a href="https://steelfabrication.woodyengineering.com/fabrication/view/6"   title="Container Office"> 
				  <img src="https://steelfabrication.woodyengineering.com//uploads/images/product/thambnail/1711387899653800.jpg" onclick="refreshpage()" alt="Container Office"> 
				  </a> 
				  </div>
				  <div class="content_text" style="text-align: left;">
					  <p class="context_text_area"> 
							  <b>Container Office :</b>
		  
							  Container house can be use as office. Building a container office is extremely cost effective and well looking. Our expert engineer easily can modify shipping container to office as you required.
					  </p>
					  <p>
						  <a href="https://steelfabrication.woodyengineering.com/fabrication/view/6" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">
						  View Details
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
				  <h3 style="color:#FFF;margin-bottom:30px; text-align:left !important;">Woody Boats</h3>
				{{-- </a> --}}
			  </div>
				<!---- Start  1 --->
				<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
				<div class="content-imag"> <a href="https://woodyengineering.com/boats/woodyboats/1"   title="House Boat"> 
				<img src="https://woodyengineering.com/boats/uploads/images/product/thambnail/1756865067262681.png" onclick="refreshpage()" alt="Heavy Steel Building"> </a> </div>
				<div class="content_text" style="text-align: left;">
					<p class="context_text_area"> 
							<b>House Boat :</b>
		
							A house boat is a type of boat that is designed to be used as a floating home. Unlike traditional boats, house boats have permanent living facilities on board, including bedrooms, bathrooms, kitchens, and living areas.... 
					</p>
					<p>
						<a href="https://woodyengineering.com/boats/woodyboats/1" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">View Details</a>
					</p>
				  </div>
			  </div>
			  <!---- End  --->

			  <!---- Start  2 --->
				<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> <a href="https://woodyengineering.com/boats/woodyboats/2"   title="Pontoon Boat"> 
					<img src="https://woodyengineering.com/boats/uploads/images/product/thambnail/1757145229423356.png" onclick="refreshpage()" alt="Heavy Steel Building"> </a> </div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>Pontoon Boat :</b>
			
								A pontoon boat is a type of recreational watercraft that consists of a flat, buoyant platform that floats on top of the water, supported by several tubes called "pontoons". Pontoon boats are typically used for leisure activities such as fishing, swimming, and relaxing on the water.... 
						</p>
						<p>
							<a href="https://woodyengineering.com/boats/woodyboats/2" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">View Details</a>
						</p>
					  </div>
				  </div>
				  <!---- End  --->

			</div>






			<div class="row"> 
				<!---==== Woody Boats =======-->
				<div class="col-md-12 col-xs-12 works-header" style="margin-top:15px;">
				{{-- <a  href="javascript:"> --}}
				  <h3 style="color:#FFF;margin-bottom:30px; text-align:left !important;">Woody Customize Vehicles</h3>
				{{-- </a> --}}
			  </div>
				<!---- Start  1 --->
				<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
				<div class="content-imag"> <a href="https://amphibious.woodyengineering.com/amphibious/view/13"   title="House Boat"> 
				<img src="https://amphibious.woodyengineering.com//uploads/images/product/thambnail/1768647751227564.jpg" onclick="refreshpage()" alt="Heavy Steel Building"> </a> </div>
				<div class="content_text" style="text-align: left;">
					<p class="context_text_area"> 
							<b>Campain Car :</b>
		
							A campaign car, also known as a campaign vehicle, refers to a vehicle used during political campaigns to promote a candidate or political party..... 
					</p>
					<p>
						<a href="https://amphibious.woodyengineering.com/amphibious/view/13" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">View Details</a>
					</p>
				  </div>
			  </div>
			  <!---- End  --->

			  <!---- Start  2 --->
				<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
					<div class="content-imag"> <a href="https://amphibious.woodyengineering.com/amphibious/view/14"   title="Pontoon Boat"> 
					<img src="https://amphibious.woodyengineering.com//uploads/images/product/thambnail/1768648189607593.jpg" onclick="refreshpage()" alt="Heavy Steel Building"> </a> </div>
					<div class="content_text" style="text-align: left;">
						<p class="context_text_area"> 
								<b>Campain Trailer :</b>
			
								A campaign trailer car is a type of vehicle used during political campaigns to augment the visibility and impact of a candidate or political party. It is a trailer that is hitched to a vehicle, typically a car or a truck, and serves as a mobile ....

						</p>
						<p>
							<a href="https://amphibious.woodyengineering.com/amphibious/view/14" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">View Details</a>
						</p>
					  </div>
				  </div>
				  <!---- End  ---> 

			</div>

			<div class="row"> 
				<!---==== Woody Boats =======-->
				<div class="col-md-12 col-xs-12 works-header" style="margin-top:15px;">
				{{-- <a  href="javascript:"> --}}
				  <h3 style="color:#FFF;margin-bottom:30px; text-align:left !important;">Woody Environment Protection activities</h3>
				{{-- </a> --}}
			  </div>
				<!---- Start  1 --->
				<div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
				<div class="content-imag"> <a href="{{route('plastice_waste_replace')}}"   title="House Boat"> 
				<img src="{{ asset('fontend') }}/images/waste-plastic-to-diesel-oil.jpg" onclick="refreshpage()" alt="Heavy Steel Building"> </a> </div>
				<div class="content_text" style="text-align: left;">
					<p class="context_text_area"> 
							<b>Plastice Waste Replace :</b>
		
							Replacing plastic waste involves finding alternative materials or practices that can serve the same 
							purpose as plastic while being more sustainable and environmentally friendly... 
					</p>
					<p>
						<a href="{{route('plastice_waste_replace')}}" onclick="refreshpage()" style="color: #ef664d;padding:5px;border:1px solid #ef664d;margin-top: 15px;float: left;">View Details</a>
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
				<h3>services</h3>
					<p>
                    We specializes in heavy equipments. Our Qualified Engineers perfom the Inspection of the acquisitions that we make. Inspection by a Certified Inspection Company is also performed as per customer request. 
                    </p>
			</div>
			<div class="services-sectiongrids">
				<div class="col-md-4 services-grid">
					<img src="{{ asset('fontend') }}/images/img11.png" alt=""/>
					<h4>Purchase</h4>
					<p>
                    we purchase necessary raw materials like steels and hydrolic components
					</p>
				</div>
				<div class="col-md-4 services-grid">
					<img src="{{ asset('fontend') }}/images/img22.jpg" alt="" style="border-radius: 50px;"/>
					<h4>Mainteinance</h4>
					<p>
                    We provide maintenance service as required about customer.
                    </p>
				</div>
				<div class="col-md-4 services-grid">
					<img src="{{ asset('fontend') }}/images/img33.png" alt=""/>
					<h4>Sale</h4>
					<p>
                    we sale amphibious equipment, fabricated steel products(various wearhouse, building, vila), container product(house,
					shop, restaurent) and so on. 
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