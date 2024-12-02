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
			<h3>Plastic pollution</h3>
			
			<div class="about-text" style="text-align: left;width:100%">
				<div class="container">
				<div class="row">
					<p style="margin-bottom: 10px;">
						Plastic pollution is a significant environmental issue that occurs when plastic materials, 
						particularly single-use plastics, are improperly disposed of and end up in the environment. 
						Plastic waste can take hundreds of years to degrade naturally, and its accumulation in 
						ecosystems has far-reaching consequences. 
                    </p>
					<p style="margin-bottom: 10px;">
						Here are some key points about the environmental pollution caused by plastic waste: 
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
								  <b>Land pollution :</b>
			  
								  	Improper disposal of plastic waste, such as littering or dumping in 
									landfills, contributes to land pollution. Plastic bags, bottles, and other plastic 
									items can clutter landscapes, affecting the aesthetic appeal of an area and posing 
									hazards to wildlife.
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
									<b>Water pollution :</b>
				
									Plastic pollution is a major contributor to water pollution. Plastics 
									can break down into smaller pieces called microplastics, which contaminate water bodies, 
									including rivers, lakes, and oceans. Marine animals can mistake plastic debris for food, 
									leading to ingestion and entanglement, causing injury or death.
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
									<b>Air pollution :</b>
				
									When plastic waste is burned, it releases harmful pollutants into the atmosphere. 
									Burning plastic releases toxic gases and particulate matter, contributing to air pollution and 
									negatively impacting air quality, which can have detrimental effects on human health.
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
									<b>Soil contamination :</b>
				
									Plastics that leach harmful chemicals into the soil can contaminate agricultural 
									land, affecting the quality and productivity of crops. The presence of plastic waste in soil can 
									also impede the growth of plants and disrupt the natural ecosystem.
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
									<b>Threat to wildlife :</b>
				
									Plastic pollution poses a significant threat to wildlife. Marine animals, such as 
									turtles, seabirds, and marine mammals, can become entangled in plastic debris or ingest it, leading to 
									injury, suffocation, or starvation. Land animals can also be harmed by consuming plastic waste or getting 
									entangled in it.
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
									<b>Impact on human health :</b>
				
									Plastic pollution can indirectly impact human health. When microplastics enter 
									the food chain through contaminated water or consumed by marine animals, they can accumulate in seafood 
									and ultimately be ingested by humans. The long-term health effects of microplastic ingestion are still 
									being studied, but there are concerns about potential health risks.
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
			<h3>What We Thinking To Do</h3>
			<p>  
				The process of converting waste plastic into oil, known as plastic-to-fuel technology, 
				has gained attention as a potential solution for managing plastic waste.
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
						<b>Plastic feedstock:</b> Plastic waste, including various types of plastic such as polyethylene (PE), 
						polypropylene (PP), polystyrene (PS), and polyethylene terephthalate (PET), can be used as feedstock 
						for the conversion process. However, the quality and composition of the plastic feedstock can affect 
						the efficiency and quality of the resulting oil. 
					</p>
					<p>
						<b>Pyrolysis process:</b> The plastic waste is typically shredded into small pieces and fed into a pyrolysis 
						reactor. The reactor is heated to high temperatures (typically between 300 to 500 degrees Celsius) in 
						the absence of oxygen, which prevents complete combustion. This thermal degradation process breaks down 
						the long polymer chains of plastic into smaller hydrocarbon molecules.
					</p>
					<p>
						<b>Byproducts:</b> The pyrolysis process produces a mixture of byproducts, including oil, gas, and solid 
						residue (char). The composition and quality of these byproducts can vary depending on the plastic 
						feedstock, operating conditions, and the specific pyrolysis technology used.
					</p>
					<p>
						<b>Oil refinement:</b> The oil obtained from the pyrolysis process requires further refining to remove 
						impurities and improve its quality. The refining process may involve distillation, fractionation, 
						and purification techniques to obtain a usable fuel product.
					</p>
					<p>
						<b>Fuel applications:</b> The resulting oil can be used as a fuel source in various applications, such 
						as industrial heating, power generation, or even as a diesel substitute in certain cases. However, 
						the suitability of the oil as a fuel depends on its quality, composition, and adherence to local 
						regulations and fuel standards. 
					</p>
					<p>
					It is worth noting that while plastic-to-oil conversion offers a way to recover energy from plastic 
					waste, it is not a complete solution to the plastic pollution problem. It is crucial to prioritize 
					efforts to reduce plastic consumption, improve recycling systems, and promote sustainable alternatives 
					to plastics. Additionally, the environmental impact, energy balance, and economic viability of 
					plastic-to-oil conversion should be carefully evaluated to ensure its overall sustainability.	
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