<?php include("header.php") ?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Welcome to <span>The Learning Hub</span></h3>
						<p></p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal2">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>A-Z List of <span>IITJ Subscribed Electronic Resources</span></h3>
						<p></p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="https://library.iitj.ac.in/sp/subjects/databases.php?letter=All" target="_blank" >Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>IIT Jodhpur <span>Theses Repository</span></h3>
						<p>IIT Jodhpur Theses Repository preserves and enables easy access to Ph.D., M.Tech. and M.Sc. Theses to their community.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal4">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>DM  <span>Course.</span></h3>
						<p>Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item5">
				<div class="container">
					<div class="carousel-caption">
						<h3>DM  <span>Course.</span></h3>
						<p>Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>
						</div>
					</div>
				</div>
			</div>-->
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!---------- start Catalog----------->
 <div class="agile-about w3ls-section text-center" id="about">
		<div class="container">
			  
						<div id="bkgroundclr" style="box-shadow: 0px 0px 0px 5px #DBDBDB; -webkit-transition: opacity 0.4s;">
							<div class="tab" style="background-color:#ff4f81;">
							
								<button class="tablinks active" id="def_butt" onclick="opensearch(event, 'catalogue')"> Library Catalogue</button>
								<button class="tablinks" onclick="opensearch(event, 'journal')" >Journals</button>
								<button class="tablinks" onclick="opensearch(event, 'ebook')" >E-Books</button>
								
							</div>
								
							<div id="catalogue" class="tabcontent" style="display:block;">
							<br/><br/>
							   <div  style="margin:10px; padding: 10px;">
								<label for="basicSearchBox" style="font-size:8pt;font-weight:bold;color:#444444;">Search Books in Library Catalogue</label>
								<p>
								<form>
								  <input id="1" class="inputtyp1" size="30" type="text" placeholder=""/>
									
									<select id="2" class="inputtyp1">
										<option selected="selected" size="2">Title</option>
										<option size="2">Author</option>
										<option size="2">Subject</option>
										<option size="2">Keywords</option>
										<option size="2">Classification number</option>
										<option size="2">Accession number</option>
										<option size="2">Catalogue</option> 
									</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button style="background-color: #ff4f81;" onclick="submit1()" class="SearchButton" id="catalogue1">Search</button>
								</form>	
									
									
								</p>
								</div>
							</div>

							<div id="journal" class="tabcontent" style="display:none;">
							<br/><br/>
								<div  style="margin:10px; padding: 10px;">
									<label for="basicSearchBox" style="font-size:8pt;font-weight:bold;color:#444444;">Search for Journals</label>
									<p>
									<form id="form_1" action="electronic_resourses/index.php"  method="get" style="display: inline;">
									
									<input class="inputtyp1" id="browse_txt" type="text" name="srchwrd"  placeholder="Search without spaces" >
									<input  type="hidden" name="id" value="<?php echo 'all_resources'; ?>">
									<input  type="hidden" name="selector" value="<?php echo 5; ?>">
									<input  type="hidden" name="page" value="<?php echo 0; ?>"> 
									<select  name="titlesel" class="inputtyp1">
										<option selected="selected" value="title" size="2">Title</option>
										<option value="author" size="2">Publisher</option>
										<option value="keyword" size="2">Keyword</option>
									</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button onclick="submit()" class="SearchButton" id="catalogue1">Search</button>
									</form>
									</p> 
								</div>
							</div>

							<div id="ebook" class="tabcontent" style="display:none;">
							<br/><br/>
								<div  style="margin:10px; padding: 10px;">
									<label for="basicSearchBox" style="font-size:8pt;font-weight:bold;color:#444444;">Search for E-books</label>
									<p>
									<form id="form_2" action="electronic_resourses/index.php"  method="get" style="display: inline;">
									
									<input class="inputtyp1" id="browse_txt" type="text" name="srchwrd"  placeholder="Search without spaces" >
									<input  type="hidden" name="id" value="<?php echo 'e-books'; ?>">
									<input  type="hidden" name="selector" value="<?php echo 5; ?>">
									<input  type="hidden" name="page" value="<?php echo 0; ?>">
									<select  name="titlesel" class="inputtyp1">
										<option selected="selected" value="title" size="2">Title</option>
										<option value="author" size="2">Author</option>
										<option value="keyword" size="2">Keyword</option>
									</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button onclick="submit()" class="SearchButton" id="catalogue1">Search</button>
								</form>
									</p>
								</div>	
							</div>
						</div>
			
						</div>
						</div>
							
						
									
	<!-------------end Catalog ------------>
				
		<!-- about -->
	
    <div class="agile-about w3ls-section text-center" id="about">
		<div class="container">
		<h3 class="heading-agileinfo">Resources<span></span></h3>
			<!--<div class="agileits-about-grid">
				<p>The Learning Hub (TLH), i.e., the Library, supports the teaching and research activities of the Institute by facilitating acquisition, organization and dissemination of knowledge resources, 
				and also providing library & information services to IIT Jodhpur community. Marking the starting of Innovation Street, Library is sited pre-eminently at the entrance of the academic area of the Institute.
				It stands as the tallest structure, keeping time for the entire campus with a 4-way clock at the clock tower.</p>
			</div>-->
		</div>
	</div>
	
  <!-- //about -->
	<!-- about-bottom -->
	<div class="agileits-about-btm">
		<div class="container">
			<div class="w3-flex">
			<div class="col-md-4 col-sm-4 col-xs-12 ab1 agileits-about-grid1">
				<span class="fa fa-desktop" aria-hidden="true"></span>
				<h4 class="agileinfo-head">Online Resources</h4>
				<h5>E-Journals</h5>
				<p><a href="http://library.iitj.ac.in/sp/subjects/databases.php?letter=bytype&type=full_text" target="_blank">Fulltext Journals</a></p>
				<h5>E-Books</h5>
				<p><a href="https://www.cambridge.org/core/what-we-publish/books" target="_blank">Cambridge University Press</a></p>
				<p><a href="https://search.ebscohost.com" target="_blank">EBSCO eBook Collection</a></p>
				<p><a href="https://www.universitypressscholarship.com/search?q=&searchBtn=Search&isQuickSearch=true" target="_blank">Oxford University Press</a></p>
				<p><a href="https://ebookcentral.proquest.com/lib/iitjin/home.action" target="_blank">ProQuest eBook Central</a></p>
				<p><a href="https://www.taylorfrancis.com/search?key=&isLicensed=true" target="_blank">Taylor & Francis</a></p>
				<h5>Research Databases</h5>
				<p><a href="https://www.scopus.com" target="_blank">Scopus</a></p> 
				<p><a href="https://webofknowledge.com" target="_blank">Web of Science</a></p>
				<p><a href="https://scifinder-n.cas.org" target="_blank">SciFinder</a></p>
				<p><a href="http://www.ams.org/mathscinet/" target="_blank">MathSciNet</a></p>
				<p><a href="http://www.epwrfits.in/" target="_blank">EPWRF India Time Series</a></p>
				<p><a href="https://www.indiastat.com/" target="_blank">IndiaStat</a></p>
				<p><a href="http://isid.org.in/home.html" target="_blank">Institute for Studies in Industrial Development (ISID)</a></p>
				<h5>Newpapers & Magazines</h5>
				<p><a href="https://www.pressreader.com" target="_blank">PressReader</a></p>
			</div>
			<div class="col-md-4 col-sm-4 ab1 agileits-about-grid2">
				<span class="fa  fa-wpforms  wthree-title-list" aria-hidden="true"></span>
				<h4 class="agileinfo-head">Online Forms</h4>
				<h5>Book Borrowing Request Form</h5>
				<p><a href="https://docs.google.com/forms/d/e/1FAIpQLSef4HPxWXcaFK3VwWARgje5z60sgqFbWYTpPlDNox_0XCaPMQ/viewform" target="_blank">Click here</a></p>
				<h5>Article Request Form</h5>
				<p><a href="#" data-toggle="modal" data-target="#myModal5">Click here to fill the form</a></p>
				<h5>Book Acquisition Request Form</h5>
				<p><a href="http://172.16.100.168:8080/jspui/handle/123456789/218" target="_blank">Click here</a></p>
				<h5>Library Membership Form</h5>
				<p><a href="https://docs.google.com/forms/d/e/1FAIpQLSeQCkYy0u91WinRr8gWeJRp-5atenlD6N5Abfs8tvttIsQoTw/viewform" target="_blank">Employee</a></p>
				<p><a href="https://docs.google.com/forms/d/e/1FAIpQLSeZFN86UFitjJZOtMZJ_VR5OeMBfTYRz944QJtS5--1rySqaQ/viewform" target="_blank">Student</a></p>
			</div>
			<div class="col-md-4 col-sm-4 ab1 agileits-about-grid3">
				<span class="fa fa-search  wthree-title-list" aria-hidden="true"></span>
				<h4 class="agileinfo-head">Research Support Tools</h4>
				<h5>Off-campus Resource Access Tool </h5>
				<p><a href="http://iitj.remotexs.in/user" target="_blank">RemoteXs Portal</a></p>
				<p><a href="http://library.iitj.ac.in/sp/subjects/guide.php?subject=RG#tab-4" target="_blank">Instructions for using RemoteXs</a></p>
				<h5>Plagiarism Detection Tools</h5>
				<p><a href="https://www.turnitin.com/login_page.asp?lang=en_us" target="_blank">Turnitin</a></p>
				<p><a href="https://www.ouriginal.com/login/" target="_blank">Ouriginal</a></p>
				<p><p><a href="http://library.iitj.ac.in/sp/subjects/guide.php?subject=RG#tab-5" target="_blank">Instructions for using Turntin and Ouriginal</a></p>
				<h5>Writing Support Tool</h5>
				<p><a href="http://library.iitj.ac.in/sp/subjects/guide.php?subject=RG#tab-6" target="_blank">Grammarly</a></p>
				<h5>Reference Management Tools</h5>
				<p><a href="http://library.iitj.ac.in/sp/subjects/guide.php?subject=RG#tab-7" target="_blank">List of Tools</a></p>
				<h5>Research Management and Analysis Tool</h5>
				<p><a href="https://www.scival.com" target="_blank">SciVal</a></p>
			</div>
			<div class="col-md-4 col-sm-4 ab1 agileits-about-grid3">
				<span class="fa fa-map-o   wthree-title-list" aria-hidden="true"></span>
				<h4 class="agileinfo-head">Guides</h4>
				<h5>Resource Guides</h5>
				<p><a href="http://library.iitj.ac.in/sp/subjects/guide.php?subject=RG" target="_blank">Click here</a></p>
				<h5>List of extended resources during the lockdown</h5>
				<p><a href="http://library.iitj.ac.in/sp/subjects/guide.php?subject=ERL" target="_blank">Click here</a></p>
				<h5>How are books arranged in library?</h5>
				<p><a href="#" data-toggle="modal" data-target="#myModal6">Click here</a></p>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about-bottom -->
<!-- stats -->
	<div class="stats" >
		<div class="container" style="background-color:black; opacity:0.7; ">
		<h3 class="heading-agileinfo">TLH @ A Glance<span class="ttt">Library Collections</span></h3>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
				<span class="fa fa-book" aria-hidden="true"></span>
				<h3>Books</h3>
				<p class="counter">13000+</p>
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
				<span class="fa fa-book" aria-hidden="true"></span>
				<h3>eBooks</h3>
				<p class="counter">261</p>
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
				<span class="fa fa-file-text" aria-hidden="true"></span>
				<h3>Journal Resources</h3>
				<p class="counter">13</p>
				
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
				<span class="fa fa-graduation-cap" aria-hidden="true"></span>
				<h3>Theses</h3>
				<p class="counter">315</p>
				
			</div>
			<!--<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
				<span class="fa fa-newspaper-o" aria-hidden="true"></span>
				<h3>Newspaper and Magazines</h3>
				<p class="counter">7000+</p>-->
				
			<!--</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
				<span class="fa fa-newspaper-o" aria-hidden="true"></span>
				<h3>Newspaper</h3>
				<p class="counter">6</p>-->
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //stats -->
	<!-- services -->
<div class="services">
		<h3 class="heading-agileinfo">Latest @ TLH<span></span></h3>
	<div class="container">
		<div class="services-top-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					<h4>Resource Guides</h4>
					<p><a href="http://library.iitj.ac.in/sp/subjects/guide.php?subject=RG" target="_blank">Click here</a></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-book" aria-hidden="true"></i>
					<h4>Modified Service Hours during CoVID-19 Pandemic Period</h4>
					<p><b>Monday to Saturday</br>
					9:00 am to 5:30 pm</b></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-tasks" aria-hidden="true"></i>
					<h4>PressReader</h4>
					<p>Digital Newspapers and Magazines</br>
					<a href="https://www.pressreader.com" target="_blank">Click here</a></p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<!--<div class="services-bottom-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-comment-o" aria-hidden="true"></i>
					<h4>Online Learning</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-bookmark-o" aria-hidden="true"></i>
					<h4>Summer Session</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-globe" aria-hidden="true"></i>
					<h4>Global Education</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>-->
	</div>
</div>
<!-- //services -->

	<!-- feedback -->
	<div class="feedback section-w3ls about-w3ls" id="testimonials">
		<div class="feedback-agileinfo">
			<div class="container">
				<h3 class="heading-agileinfo">Service Hours<span class="ttt"></span></h3>
				<div class="agileits-feedback-grids">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p><b>Monday to Saturday</b><p> 
									<p>9.00 am to 8.30 pm</p>
								</div>
								<div class="feedback-grids">
									<!--<div class="feedback-img">
										<img src="images/test1.jpg" alt="" />
									</div>-->
									<div class="feedback-img-info">
										<h5>Opening hours</h5>
										<!--<p>Vestibulum</p>-->
									</div>
									<div class="clearfix"> </div>
								</div>
								<!--<div class="feedback-top">
									<p><b>Monday to Saturday</b><p> 
									<p>9.00 am to 8.30 pm</p>
								</div>-->
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p><b>Check-out</b></p>
									<p>Monday to Saturday</p>
									<p>9.30 am to 6.30 pm</p>
								</div>
								<div class="feedback-top">
									<p><b>Check-in</b></p>
									<p>Monday to Saturday</p>
									<p>9.30 am to 8.30 pm</p>
								</div>
								<div class="feedback-grids">
									<!--<div class="feedback-img">
										<img src="images/test3.jpg" alt="" />
									</div>-->
									<div class="feedback-img-info">
										<h5>Transaction hours</h5>
										<!--<p>Vestibulum</p>-->
									</div>
									<div class="clearfix"> </div>
								</div>
								<!--<div class="feedback-top">
									<p><b>Check-out</b></p>
									<p>Monday to Saturday</p>
									<p>9.30 am to 6.30 pm</p>
								</div>
								<div class="feedback-top">
									<p><b>Check-in</b></p>
									<p>Monday to Saturday</p>
									<p>9.30 am to 8.30 pm</p>
								</div>-->
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Library remains closed on <a href="http://iitj.ac.in/academics/index.php?id=holidays" target="_blank">Institute’s Holidays.</a></p>
								</div>
								<div class="feedback-grids">
									<!--<div class="feedback-img">
										<img src="images/test2.jpg" alt="" />
									</div>-->
									<div class="feedback-img-info">
										<h5>Holidays</h5>
										<!--<p>Vestibulum</p>-->
									</div>
									<div class="clearfix"> </div>
								</div>
								<!--<div class="feedback-top">
									<p> Library remains closed on <a href="http://iitj.ac.in/academics/index.php?id=holidays" target="_blank">Institute’s Holidays.</a></p>
								</div>-->
							</div>
						</div>
						<!--<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p><b>Monday to Saturday</b><p> 
									<p>9.00 am to 8.30 pm</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/test3.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Opening hours</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>-->
						<!--<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/test2.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Guptill</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/test1.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5> Wilson</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //feedback -->
<!-- news -->
	<div class="news">
		<div class="container">  
				<h2 class="heading-agileinfo">Events<span></span></h2>
			<div class="news-agileinfo"> 
				<div class="news-w3row"> 
					<!--<div class="wthree-news-grids">
						<div class="col-md-5 col-xs-5 datew3-agileits">
							<img src="images/cup1.png" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-7 col-xs-7 datew3-agileits-info ">
							<h5><a href="#" data-toggle="modal" data-target="#myModal"> Publishing journal papers and books/ book chapters - Author Workshop with experts from <b>Cambridge University Press</b></a></h5>
							<h6>Date: 9 April 2021, Friday</h6>
							<h6>Time: 4:30 pm</h6>
							<!--<p>This session would include glimpse about publishing Open Access and live demo of Taylor & Francis intuitive platforms where you can access Journals & eBooks. 
							This will help researchers in gaining the skills, knowledge and confidence to publish papers in academic journal and to make the best use of the subscribed content.</br> 
							Topics covered:
                             <ul>
							  <li>How to publish in an open access journal?</li>
							  <li>Live session on how to access Taylor & Francis Journals & eBooks subscribed by IIT Jodhpur</li>
							  </ul>  </p>
							<p>Click here to access <a href="https://www.cambridge.org/core/" target="_blank">Cambridge University Press Resources</a></p>
						</div>
						<div class="clearfix"> </div>-->
					</div>
					<!--<div class="wthree-news-grids news-grids-mdl">
						<div class="col-md-5 col-xs-5 datew3-agileits datew3-agileits-fltrt">
							<img src="images/scopus.png" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-7 col-xs-7 datew3-agileits-info datew3-agileits-info-fltlft">
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Understanding the research landscape to make effective workflow planning using <b>Scopus</b> and <b>SciVal</b></a></h5>
							<h6>Date: 20 April 2021, Tuesday</h6>
							<h6>Time: 4:30 pm</h6>
							<p>Click here to access<a href="https://www.scopus.com" target="_blank"> Scopus</a></p>
							<p>Click here to access<a href="https://www.scival.com" target="_blank"> SciVal</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>-->
					<div class="wthree-news-grids">
						<div class="col-md-5 col-xs-5 datew3-agileits">
							<img src="images/urkund.png" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-7 col-xs-7 datew3-agileits-info ">
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Avoiding plagiarism with ShodhShuddhi <b>(Ouriginal - erstwhile Urkund)</b></a></h5>
							<h6>Date: 27 April 2021, Tuesday</h6>
							<h6>Time: 4:30 pm</h6>
							<p>Click here to <a href="https://bit.ly/3eqYBic" target="_blank">Register</a></p>
							
							<p>Click here to access<a href="https://www.ouriginal.com/login/" target="_blank">Ouriginal</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- //news -->
	<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


<script>
function opensearch(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
	
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<?php include("footer.php") ?>
	