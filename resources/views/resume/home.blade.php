@extends('mainlayout')
@section('content')
<?php date_default_timezone_set('Asia/Calcutta'); ?>
	<div class="row m-a-md">
		<div class="col-md-3">
		<img src="{!! asset('/assets/image/profile_pic.jpg') !!}" alt="mohit agrawal" class="img-circle center-block"/>
		</div>
		<div class="col-md-9">
			<div class="row">
				<h1 class="col-md-12">Mohit Agrawal</h1>
				<h4 class="col-md-12 m-t-md"><i class="fa fa-envelope-o"></i> contact- <a href="mailto:er.magrawal@gmail.com?subject=Hello Mohit"" target="_blank">er.magrawal@gmail.com</a></h4>
				<h4 class="col-md-12 m-t-md"><i class="fa fa-github"></i> portfolio- <a href="https://github.com/08euccs014" target="_blank">08euccs014@Github</a></h4>
				<h4 class="col-md-12 m-t-md"><i class="fa fa-linkedin"></i> Network- <a href="    https://in.linkedin.com/in/ermohitagrawal" target="_blank">ermohitagrawal@LinkedIn</a></h4>
			</div>
		</div>
	</div>
	
	<hr />
	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		
		<fieldset>
			<legend>Something about me</legend>
			<p>
					I am a happy engineer. 
					I love the code. 
					I like to work with people of different kind of fields. 
					I want to learn more, teach what i know till and opportunity to apply my skills, resulting in company and individual growth.
			</p>
		</fieldset>
		
		<fieldset>
			<legend>What i have learned</legend>

			<div class="col-md-11 col-md-offset-1">
				<div class="timeline-centered">
				
					<!-- Truelancer -->
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<time class="timeline-time" datetime="{{ date('Y-m-dH:i') }}"><span>{{ date('h:i A') }}</span> <span>Today</span></time>
							<div class="timeline-icon bg-success">
								<i class="entypo-feather"></i>
							</div>
							<div class="timeline-label">
								<h5><strong>Software Developer</strong> at <a href="http://www.truelancer.com" target="_blank">Truelancer Internet Pvt. Ltd.</a></h5>
								<p><span>since 26<sup>th</sup> January 2015</span> </p>
								<p>
									It is global community of trusted freelancer and employers to build a freelancing marketplace platform.
									Where user could post project to get done by curated freelancers within timebounds and freelancer could also sell his service packages directly. 
								</p>


								<p><strong>	Things I have learned and done here</strong></p>
								<ul>
									<li>Comparing freelancer & proposal feature</li>
									<li>User behaviour analytics(tracking user buying)</li>
									<li>Abuse reporting system</li>
									<li>Complete UI change of application compatible with mobile</li>
									<li>Live user statistics using Node server with Socket.io</li>
									<li>Revamp Dashboard</li>
									<li>User Mobile verification</li>
								</ul>
								<p>
									<small>
									<i class="fa fa-map-marker"></i> &nbsp; Company location : New Delhi 
									<br />
									<i class="fa fa-globe"></i> Product site : <a href="http://www.truelancer.com" target="_blank">www.truelancer.com</a>
									</small>
								</p>
							</div>
						</div>
					</article>
					
					<!-- Readybytes -->
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<time class="timeline-time" datetime="2015-01-20"><span>20-01-2015</span><span>Farewell Day</span></time>
							<div class="timeline-icon bg-info">
								<i class="entypo-feather"></i>
							</div>
							<div class="timeline-label">
								<h5><strong>Software Developer</strong> at <a href="http://www.readybytes.net" target="_blank">Ready Bytes Software Labs Pvt. Ltd.</a></h5>
								<p><span>since 23<sup>rd</sup> July 2012</span> </p>
								<p>
									It is an Open source E-Commerce domain company. It developes Joomla(CMS) based web product.
									Which includes Subscription management system, Cart sytem, Invoicing tools, Community Management tools. 
								</p>


								<p><strong>	Things I have learned and done here</strong></p>
							  	<p><strong>E-Commerce Platform</strong></p>
							  	<ul>
									<li>Payplans (membership software)</li>
									<li>Payment Gateway (online transaction)</li>
									<li>Access control apps</li>
									<li>Installation process (includes backup and migration)</li>
									<li>App Store</li>
								</ul>
								<p><strong>Community Platform</strong></p>
								<ul>
									<li>Jomsocial User Search (searching component)</li>
									<li>Access control on Searching</li>
									<li>Exporting Data</li>
									<li>Searching Techniques</li>
								</ul>
								<p><strong>Testing</strong></p>
								<ul>
									<li>PHPUnit Test cases</li>
									<li>Selenium Testing framework</li>
									<li>Jenkins (nightly build, CI server)</li>
								</ul>
								<p><strong>Automated Scripts</strong></p>

								<p>
									<small>
									<i class="fa fa-map-marker"></i> &nbsp; Company location : Bhilwara, Rajasthan
									<br />
									<i class="fa fa-globe"></i> Product site : <a href="http://www.readybytes.net" target="_blank">www.readybytes.net</a>
									</small>
								</p>
							</div>
						</div>
					</article>
					
					<!-- College -->
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<time class="timeline-time" datetime="{{ date('Y-m-dH:i') }}"><span>30-06-2012</span> <span>Farewell Day</span></time>
							<div class="timeline-icon bg-warning">
								<i class="entypo-feather"></i>
							</div>
							<div class="timeline-label">
								<h5><strong>Student</strong> at <a href="http://www.rtu.ac.in/RTU" target="_blank">University College of Engineering, RTU, KOTA</a></h5>
								<p><span>since 18<sup>th</sup> September 2008</span> </p>
								<p>
									Education : Engineering <br />
									Branch : Computer Science 
								</p>
								<p>
									Achivements : 70.2% with Honors <i class="fa fa-graduation-cap"></i>  
								</p>
								
								<p>
									<small>
									<i class="fa fa-map-marker"></i> &nbsp; School location : Nimbahera, Distt-Chittorgarh
									</small>
								</p>
							</div>
						</div>
					</article>
					
					<!-- School -->
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<time class="timeline-time" datetime="{{ date('Y-m-dH:i') }}"><span>30-06-2012</span> <span>Farewell Day</span></time>
							<div class="timeline-icon bg-warning">
								<i class="entypo-feather"></i>
							</div>
							<div class="timeline-label">
								<h5><strong>Student</strong> at <a href="http://www.rtu.ac.in/RTU" target="_blank">Kailash Vidhya Vihar, Nimbahera</a></h5>
								<p><span>since 18<sup>th</sup> September 2008</span> </p>
								<p>
									Education : Senior Secondary <br />
									Subject : PCM
								</p>
								<p>
									<small>
									<i class="fa fa-map-marker"></i> &nbsp; School location : Nimbahera, Distt-Chittorgarh
									</small>
								</p>
							</div>
						</div>
					</article>
					
					
				</div>
				
				
			</div>
			</fieldset>

			
		</div>
	</div>


@stop