
            
            <?php get_header();?>   
                         
                         <div class="container text-center">
                             <div class="content-one">
             
                             <?php if(have_posts() ): while( have_posts() ): the_post();?>
             
                             <h1><?php the_content();?></h1>
             
                             <?php endwhile; else: endif;?>
                                 <!-- <h1 class="title">Boost your<span id="text-background-color"> business strategy</span></h1> -->
                             </div>
                             <div class="para-one">
                                 <p>Get <u><i>AI-generated answers</i></u> to all your business questions about companies, markets, and contextual business intelligence driving transformational change</p>
                             </div>
                             <div class="button-section">
                                 <button class="btn-google" type="button">Sign up with Google</button>
                                 <button class="btn-email" type="button">Sign up with Email</button>
                             </div>
                             <p>Free seven days trial. Get started in seconds</p>
                             <hr class="dotted-border">
                         </div>
                         
                         <div class="container">
                             <div class="content-two">
                                 <div class="row">
                                     <div class="col-8">
                                         <iframe src="<?php echo get_template_directory_uri(); ?>/images/Home-1.mp4" title="Vizologi" width="100%" height="395" onended="playNextVideo('Home-2.mp4')"></iframe>
                                         <!-- <iframe src="Home-2.mp4" width="100%" height="315" id="Home-2"></iframe>
                                         <iframe src="Home-3.mp4" width="100%" height="315" id="Home-3"></iframe>
                                         <iframe src="Home-4.mp4" width="100%" height="315" id="Home-4"></iframe> -->
                                     </div>
                                     <div class="col-4">
                                         <p><b>Here's how it works</b></p>
                                         <ul>
                                             <li>Brainstorming ideas</li>
                                             <li>Business intelligence</li>
                                             <li>Business plans</li>
                                             <li>Autopilot</li>
                                         </ul>
                                         <p><u>View all features</u></p>
                                     </div>
                                 </div>
                                 <hr class="dotted-border">
                             </div>
                         </div>
                         
                         <div class="container">
                             <div class="content-three text-center">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/time.png">
                                 <h1>Save time on market research and competitive analysis</h1>
                                 <p>Brainstorm startup ideas automatically, reducing time spent on market research and competitive analysis from hours to minutes. Access to a stunning business model canvas database with thousands of examples that will inspire you, create and edit <b>unique business plans</b> using the mash-up method, export your projects easily.</p>
                                 <div class="button-section">
                                     <button class="btn-vizologi" type="button">
                                         See how vizologi works 
                                     </button>
                                     <button class="btn-features" type="button">View all features ></button>
                                 </div>
                             <hr class="dotted-border">
                             </div>
                         </div>
                         
                         <div class="container">
                             <div class="content-four text-center">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/fist.svg">
                                 <h4>Vizologi has helped thousands of people complete</h4>
                                 <h1>over 1.5 million questions in 25+ thousand projects</h1>
                                 <div class="row">
                                     <div class="col-2">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/designit.webp">
                                     </div>
                                     <div class="col-2">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/apple.webp">
                                     </div>
                                     <div class="col-2">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/amazon.webp">
                                     </div>
                                     <div class="col-2">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/autodesk.webp">
                                     </div>
                                     <div class="col-2">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/descript.webp">
                                     </div>
                                     <div class="col-2">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/ey.webp">
                                     </div>
                                 </div>
                         
                                 <div class="row">
                                     <div class="stratergists">
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial-strategist.webp" class="img-fluid" height="250" width="250" >
                                     <p>
                                         “The tool analyzes the existing strategies, identifies areas for improvement, turning the wildest ideas into businesses with long-term viability”.
                                         <b>Laurène Moutot is Business Strategist at HireSweet, New York</b>
                                     </div> 
                         
                                     <div class="creatives">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial-creatives.webp" class="img-fluid" height="250" width="250" >
                                         <p>
                                             “We complete our entire workflow, research, market analysis, business design, and prototyping, using this generative design tool. Awe-inspiring!”.
                                             <b>Andre Kennedy is Business Designer at Making Waves, Stockholm.</b>
                                     </div>
                         
                                     <div class="consultants">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial-consultants.webp" class="img-fluid" height="250" width="250" >
                                         <p>
                                             “We create new value for our clients through innovation reports and presentations; this tool means new money for my company”.
                                             <b>Daniel Scheck is Senior Consultant at dgroup GmbH, Berlin</b>
                                     </div> 
                         
                                     <div class="entrepreuners">
                                     <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial-entrepreneurs.webp" class="img-fluid" height="250" width="250" >
                                     <p>
                                         “Vizo is the perfect tool to discover hidden niches waiting to be disrupted. It inspires you to create unique and original start-ups. Action is the key!”
                                         <b>Andrew Mason is CEO at Descript, California</b>
                                     </div>
                         
                                     <div class="managers">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial-managers.webp" class="img-fluid" height="250" width="250" >
                                         <p>
                                             “It helps us to think outside the box, analyzing new trends, and conducting market research studies to identify new business opportunities against our competitors”.
                                             <b>Gonzalo García Villanueva is Marketing Director at Bloomberg LP, London.</b>   
                                     </div>
                         
                                     <div class="students">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial-students.png" class="img-fluid" height="250" width="250" >
                                         <p>
                                             “In a few clicks, you can access to a stunning knowledge base. The tool is handy and is helping me to find information for my school tasks. Outstanding experience!”.
                                             <b>Tabea Becker is Student at IE Business School, Madrid.</b>
                                     </div>  
                                 </div>              
                         
                                 <div class="button-title">
                                     <div class="row">
                                         <div class="col-2">
                                             <button type="button" class="btn btn-title">Strategist</button>
                                         </div>
                                         <div class="col-2">
                                             <button type="button" class="btn btn-title">Creatives</button>
                                         </div>
                                         <div class="col-2">
                                             <button type="button" class="btn btn-title">Consultants</button>
                                         </div>
                                         <div class="col-2">
                                             <button type="button" class="btn btn-title">Entrepreuners</button>
                                         </div>
                                         <div class="col-2">
                                             <button type="button" class="btn btn-title">Managers</button>
                                         </div>
                                         <div class="col-2">
                                             <button type="button" class="btn btn-title">Students</button>
                                         </div>
                                     </div>
                                 </div>
                             </br>
                             </div>
                         </div>
                         
                         <div class="container">
                             <div class="content-five text-center">
                                 <h3>Transform a cost into revenue</h3>
                                 <p>For every $1 invested in Vizologi you generate over $75 with new ideas.</p>
             
                                 <div class="price-toggler">
                                     <span class="month active">monthly</span>
                                     <span class="year">yearly</span>
                                 </div>
                             
                                 <div class="box-container">
                             
                                     <div class="box">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/bronze-icon.svg">
                                         <div class="price month"><span class="money">$19</span>
                                             <br>
                                             <small class="text-muted">per month</small>
                                         </div>
                                 
                                         <div class="price year"><span class="money">$9</span>
                                             <br>
                                             <small class="text-muted">per month(billed yearly)</small>
                                         </div>
                                         <div class="list">
                                             <ul class="list-unstyled mt-3 mb-4">
                                                 <li>4k credits/month</li>
                                                 <li>1 list/month</li>
                                                 <li>1 project/month</li>
                                                 <li<u><b>View all</b></u></li>
                                             </ul>
                                         </div>
                                         <a href="#" class="btn">choose plan</a>
                                         <small class="text-muted">Free 7 day trial</small>
                                     </div>
                             
                                     <div class="box">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/silver-icon.svg">
                                         <div class="price month"><span class="money">$29</span>
                                             <br>
                                             <small class="text-muted">per month</small>
                                         </div>
                                 
                                         <div class="price year"><span class="money">$19</span>
                                             <br>
                                             <small class="text-muted">per month(billed yearly)</small>
                                         </div>
                                         <div class="list">
                                             <ul class="list-unstyled mt-3 mb-4">
                                                 <li>4k credits/month</li>
                                                 <li>1 list/month</li>
                                                 <li>1 project/month</li>
                                                 <li<u><b>View all</b></u></li>
                                             </ul>
                                         </div>
                                         <a href="#" class="btn">choose plan</a>
                                         <small class="text-muted">Free 7 day trial</small>
                                     </div>
                             
                                     <div class="box">
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/gold-icon.svg">
                                         <div class="price month"><span class="money">$49</span>
                                             <br>
                                             <small class="text-muted">per month</small>
                                         </div>
                                 
                                         <div class="price year"><span class="money">$39</span>
                                             <br>
                                             <small class="text-muted">per month(billed yearly)</small>
                                         </div>
                                 
                                         <div class="list">
                                             <ul class="list-unstyled mt-3 mb-4">
                                                 <li>4k credits/month</li>
                                                 <li>1 list/month</li>
                                                 <li>1 project/month</li>
                                                 <li<u><b>View all</b></u></li>
                                             </ul>
                                         </div>
                                         <a href="#" class="btn">choose plan</a>
                                         <small class="text-muted">Free 7 day trial</small>
                                     </div>
                             
                                 </div>
                                     
                     
                             <div class="content-six text-center">
                                 <h1>Craft a Business Plan FAST using AI</h1>
                                 <h5>It’s FREE and EASY to get started. Two things people love.</h5>
                                 <button class="btn-google">Sign up with google account</button>
                                 <p>OR</p>
                                 <input type="text" class="newtext" placeholder="Your email">
                                 <br>
                                 <button class="btn-getstarted">Get started</button>
                                 <p>Free 7 days trial - Get started in seconds</p>
                             </div>
                             </div>
                             
                             </br>
                             
                             
                     <script>
                     
                         let month = document.querySelector('.price-toggler .month');
                         let year = document.querySelector('.price-toggler .year');
                         let monthAmount = document.querySelectorAll('.box-container .box .month');
                         let yearAmount = document.querySelectorAll('.box-container .box .year');
                         
                         year.onclick = () =>{
                             year.classList.add('active');
                             month.classList.remove('active');
                         
                             monthAmount.forEach(mo =>{ mo.style.display = 'none' });
                             yearAmount.forEach(yr =>{ yr.style.display = 'block' });
                         };
                         
                         month.onclick = () =>{
                             year.classList.remove('active');
                             month.classList.add('active');
                         
                             monthAmount.forEach(mo =>{ mo.style.display = 'block' });
                             yearAmount.forEach(yr =>{ yr.style.display = 'none' });
                         };
             
                     </script>
                         
                     <?php get_footer();?>