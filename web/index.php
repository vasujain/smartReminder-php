<?php
include 'header.php';
?>
<body>			       
	    <div class="wrap">	 
	      <div class="header">
	      	  <div class="header_top">
					  <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
							<ul class="nav">
								<li><a href="#"><i><img src="images/settings.png" alt="" /></i>Settings</a></li>
								<li class="active"><a href="#"><i><img src="images/user.png" alt="" /></i>Account</a></li>
								<li><a href="#"><i><img src="images/mail.png" alt="" /></i>Messages <span class="messages">5</span></a></li>
								<li><a href="fbconnect.php"><i><img src="images/favourite.png" alt="" /></i>Facebook Connect</a></li>
							<div class="clear"></div>
						    </ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				        </div>	
					  <div class="profile_details">
				    		   <div id="loginContainer">
				                  <a id="loginButton" class=""><span>Me</span></a>   
				                    <div id="loginBox">                
				                      <form id="loginForm">
				                        <fieldset id="body">
				                            <div class="user-info">
							        			<h4>Hello,<a href="#"> Username</a></h4>
							        			<ul>
							        				<li class="profile active"><a href="#">Profile </a></li>
							        				<li class="logout"><a href="#"> Logout</a></li>
							        				<div class="clear"></div>		
							        			</ul>
							        		</div>			                            
				                        </fieldset>
				                    </form>
				                </div>
				            </div>
				             <div class="profile_img">	
				             	<a href="#"><img src="images/profile_img40x40.jpg" alt="" />	</a>
				             </div>		
				             <div class="clear"></div>		  	
					    </div>	
		 		      <div class="clear"></div>				 
				   </div>
			</div>	  					     
	</div>
	  <div class="main">  
	    <div class="wrap">  		 
	       <div class="column_left">	          
	    		 <div class="menu_box">
	    		 	 <h3>Menu Box</h3>
	    		 	   <div class="menu_box_list">
				      		<ul>
						  		<li><a href="#" class="messages"><span>Messages</span><label class="digits">24</label><div class="clear"></div></a></li>
						  		<li class="active"><a href="#" class="invites"><span>Invites</span><label class="digits active">3</label><div class="clear"></div></a></li>
						  		<li><a href="#" class="events"><span>Events</span><label class="digits">5</label><div class="clear"></div></a></li>
						  		<li><a href="#" class="account_settings"><span>Account Settings</span></a></li>
						  		<li><a href="#" class="statistics"><span>Statistics</span></a></li>						  	
				    		</ul>
				      </div>
	    		 </div>
	    		 <div class="chart">
		               <h3>Os Audience Stats</h3>
		                <div class="diagram">
		                  <canvas id="canvas" height="220" width="220"> </canvas>
		                  <h4><span>June</span><br />2013</h4>   
		                 </div>
		                     
		               <!----		              
						<span><img src="images/chart.png" alt="" /></span>
						----->					
						<div class="chart_list">
			           	  <ul>
			           	  	<li><a href="#" class="red">ios<p class="percentage">21<em>%</em></p></a></li>
			           	  	<li><a href="#" class="purple">Mac<p class="percentage">48<em>%</em></p></a></li>
			           	  	<li><a href="#" class="yellow">Linux<p class="percentage">9<em>%</em></p></a></li>
			           	  	<li><a href="#" class="blue">Win<p class="percentage">32<em>%</em></p></a></li>
			           	  	<div class="clear"></div>	
			           	  </ul>
			           </div>
			           <script>
						var doughnutData = [
								{
									value: 21,
									color:"#E64C65"
								},
								{
									value : 48,
									color : "#11A8AB"
								},							
								{
									value : 32,
									color : "#4FC4F6"
								},	
								{
									value : 9,
									color : "#FCB150"
								},							
							
							];				
							var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);					
					</script>
		          </div>
		             <div class="graph">
		             	<canvas id="line-chart"> </canvas>
		             	<script>
							var lineChartData = {
								labels : ["Apr","May","Jun"],
								datasets : [									
									{
										fillColor : "rgba(255, 255, 255, 0)",
										strokeColor : "#FFF",
										pointColor : "#11a8ab",
										pointStrokeColor : "#FFF",
										data : [21,48,35]
									}
								]
								
							}
					
						var myLine = new Chart(document.getElementById("line-chart").getContext("2d")).Line(lineChartData);
						
						</script>
		             	<!---
		             	<img src="images/graph.png" alt="" />
		             	------->
		             	<div class="graph_list">
		             		 <div class="week-month-year">
		             		 	<p><a href="#">Week</a></p>
		             		 	<p><a href="#" class="active">Month</a></p>
		             		 	<p><a href="#">year</a></p>
		             		 	<div class="clear"></div>
		             		 </div>
				      			<ul>
						  		    <li><a href="#"><span class="day_name">Apr</span> 2013 
						  			<label class="digits"><span>+</span>21<em>%</em></label><div class="clear"></div></a></li>
						  			<li class="active"><a href="#"><span class="day_name">May</span> 2013 
						  			<label class="digits"><span>+</span>48<em>%</em></label><div class="clear"></div></a></li>
						  			<li><a href="#"><span class="day_name">Jun</span> 2013 
						  			<label class="digits"><span>+</span>35<em>%</em> </label><div class="clear"></div></a></li>						  			
				    		</ul>
				      </div>
		             </div>
		                 <div class="video_palyer">
								<iframe src="//player.vimeo.com/video/24363983" width="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe> 
		                </div>        
		            
		          
		          		<div class="social_network_likes">
				      		<ul>
				      			<li><a href="#" class="facebook"><i><img src="images/facebook_icon.png" alt=""></i> <span>248k</span></a></li>
				      			<li><a href="#" class="twitter"><i><img src="images/tweets.png" alt=""></i> <span>30k</span></a></li>
				      			<li><a href="#" class="googleplus"><i><img src="images/google+.png" alt=""></i> <span>124k</span></a></li>
				      			<li><a href="#" class="mail"><i><img src="images/mail-hover.png" alt=""></i> <span>89k</span></a></li>
				      			<div class="clear"></div>
				    		</ul>
		          		</div>
	  		</div> 
	  		
            <div class="column_middle">
              <div class="column_middle_grid1">
		         <div class="profile_picture">
		        	<a href=""><img src="images/profile_img150x150.jpg" alt="" />	</a>		         
		            <div class="profile_picture_name">
		            	<h2>Anne Hathaway</h2>
		            	<p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
		            </div>
		             <span><a href="#"> <img src="images/follow_user.png" alt="" /> </a></span>
		          </div>
		           <div class="articles_list">
		           	  <ul>
		           	  	<li><a href="#" class="red"> <img src="images/comments.png" alt="" /> 23</a></li>
		           	  	<li><a href="#" class="purple"> <img src="images/views.png" alt="" /> 841</a></li>
		           	  	<li><a href="#" class="yellow"> <img src="images/likes.png" alt="" /> 49</a></li>
		           	  	<div class="clear"></div>	
		           	  </ul>
		           </div>
		       </div>
		         <div class="weather">
		               <h3><i><img src="images/location.png" alt="" /> </i> Cluj-Napoca / Ro</h3>
		              <div class="today_temp">
		                <div class="temp">
							<figure>Fri 29/06<span>24<em>o</em></span></figure>
						</div>
						<img src="images/sun.png" alt="" />
					</div>
						<div class="temp_list">
				      			<ul>
						  		    <li><a href="#"><span class="day_name">Sat</span>&nbsp; 29/06 
						  			<label class="digits">25<em>o</em> <i><img src="images/sun_icon1.png" alt="" /></i></label><div class="clear"></div></a></li>
						  			<li class="active"><a href="#"><span class="day_name">Sun</span>&nbsp; 30/06 
						  			<label class="digits">22<em>o</em> <i><img src="images/clouds.png" alt="" /></i></label><div class="clear"></div></a></li>
						  			<li><a href="#"><span class="day_name">Mon</span>&nbsp; 01/07 
						  			<label class="digits">24<em>o</em> <i><img src="images/clouds.png" alt="" /></i></label><div class="clear"></div></a></li>
						  			<li><a href="#"><span class="day_name">Tue</span>&nbsp; 02/07 
						  			<label class="digits">26<em>o</em> <i><img src="images/sun_icon1.png" alt="" /></i></label><div class="clear"></div></a></li>
						  			<li><a href="#"><span class="day_name">Wed</span>&nbsp; 03/07 
						  			<label class="digits">27<em>o</em> <i><img src="images/sun_icon2.png" alt="" /></i></label><div class="clear"></div></a></li>
						  			<li><a href="#"><span class="day_name">Thu</span>&nbsp; 04/07
						  			<label class="digits">29<em>o</em> <i><img src="images/sun_icon2.png" alt="" /></i></label><div class="clear"></div></a></li>
				    		</ul>
				      </div>
		          </div>	           
		         <div class="tweets">
		               <h3><i><img src="images/tweets.png" alt="" /> </i> Latest Tweets</h3>		              
						<div class="tweets_list">
				      		<ul>
						  		<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore <a href="#">@Neque</a>
						  			<span>10 minutes ago</span></li>
						  	   <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore eiusmod <a href="#">#Creative Cloud</a>
						  			<span>2 hours ago</span></li>
				    		</ul>
				      </div>
		          </div>
		          <div class="social_networks">
				      		<ul>
				      			<li><a href="#" class="facebook"><i><img src="images/facebook_icon.png" alt="" /></i> <span>Share to Facebook</span><div class="clear"></div></a></li>
				      			<li><a href="#" class="twitter"><i><img src="images/tweets.png" alt="" /></i> <span>Share to Twitter</span><div class="clear"></div></a></li>
				      			<li><a href="#" class="googleplus"><i><img src="images/google+.png" alt="" /></i> <span>Share to Google+</span><div class="clear"></div></a></li>
				    		</ul>
		          </div>	           
		       
    	    </div>
    	    
            <div class="column_right">
            	<div class="column_right_grid">
                 <div class="newsletter">
				   <h3>Join the newsletter</h3>
					    <form>
					    	<span>
					 	     <i><img src="images/mail.png" alt="" /></i>
					 	     <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
					 	    </span>			 	    
					 		<input type="submit" class="my_button" value="Subscribe">
					 	</form>
				   </div>
			   </div>
				 <div class="column_right_grid sign-in">
				 	<div class="sign_in">
				       <h3>Sign in to your account</h3>
					    <form>
					    	<span>
					 	    <i><img src="images/mail.png" alt="" /></i><input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
					 	    </span>
					 	    <span>
					 	     <i><img src="images/lock.png" alt="" /></i>
					 	     <input type="password" placeholder="password">
					 	    </span>
					 		<input type="submit" class="my-button" value="Sign In">
					 	</form>
					       <h4><a href="#">Forget Password?</a></h4>				   
          		       </div>
          		 	  <div class="signin_facebook">
					   	 <p><a href="#">  <i> <img src="images/facebook.png" alt="" /></i>Sign in with facebook</a></p>
				      </div>
				   </div>
				   <div class="column_right_grid downloading_uploading">
                      <ul>
					      <li>                              
                            <div class="progress">
                              <div class="progress-bar" style="width:81%"> </div>
                            </div>
                            <div class="clearfix">
                                <p class="downloading"> <i><img src="images/download.png" alt="" /></i> Downloading...</p>
                                <p class="percentage">81<em>%</em></p>
                                <div class="clear"></div>
                            </div>
                           </li>
                           <li>                              
                            <div class="progress">
                              <div class="progress-bar uploading" style="width:43%"> </div>
                            </div>
                            <div class="clearfix">
                                <p class="downloading"><i><img src="images/upload.png" alt="" /></i> Uploading...</p>
                                <p class="percentage">43<em>%</em></p>
                                <div class="clear"></div>
                            </div>
                           </li>
                        </ul>
				   </div>
				   <div class="column_right_grid date_events">
				     	  <h3><a href="#" id="slide_prev"><img src="images/arrow-left.png" alt="" /></a> Wednesday <a href="#" id="slide_next"><img src="images/arrow-right.png" alt="" /></a></h3>
				     	 		<ul id="slide" class="event_dates">					            
						            <li>26</li>
						            <li>25</li>
						            <li>24</li>
						            <li>23</li>
						            <li>22</li>
						            <li>21</li>
						            <li>20</li>
						            <li>19</li>
						            <li>18</li>
						            <li>17</li>
						            <li>16</li>
						            <li>15</li>
						            <li>14</li>
						            <li>13</li>
						            <li>12</li>
						            <li>11</li>
						            <li>10</li>
						            <li>9</li>
						            <li>8</li>
						            <li>7</li>
						            <li>6</li>
						            <li>5</li>
						            <li>4</li>
						            <li>3</li>
						            <li>2</li>
						            <li>1</li>
						            <li>31</li>
						            <li>30</li>
						            <li>29</li>
						            <li>28</li>
						            <li>27</li>
						        </ul>
						         <div class="button"><a href="#">Add Event</a></div>											 				
				           <script type="text/javascript">
				            $(function() {						
				                $('#slide').ulslide({
				                   
									effect: {
										type: 'carousel', // slide or fade
				                        axis: 'x',        // x, y
										showCount:1
									},
				                    nextButton: '#slide_next',
				                    prevButton: '#slide_prev',
				                    duration: 800,
				                    /*autoslide: 2000,*/
									easing: 'easeOutBounce'
				                });
				            });
				        </script>
				    </div>
				   <div class="column_right_grid calender">
                      <div class="cal1"> </div>
				   </div>
             </div>
    	<div class="clear"></div>
 	 </div>
   </div>
	<?php
	include 'footer.php';
	?>
</body>
</html>

