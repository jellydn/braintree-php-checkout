<?php 
  $loader           = require __DIR__.'/vendor/autoload.php';
  
  use DebugBar\StandardDebugBar;
  
  $debugbar         = new StandardDebugBar();
  $debugbarRenderer = $debugbar->getJavascriptRenderer();
  ob_start();
  include("_header-alt.php");
  $buffer=ob_get_contents();
  ob_end_clean();
  $buffer=str_replace("%TITLE%","Order",$buffer);
  echo $buffer;
?>
<style type="text/css">
  .gradient {
    background: #7873eb; /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzc4NzNlYiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMzNDU3YmEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(left,  #7873eb 0%, #3457ba 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right top, color-stop(0%,#7873eb), color-stop(100%,#3457ba)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(left,  #7873eb 0%,#3457ba 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(left,  #7873eb 0%,#3457ba 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(left,  #7873eb 0%,#3457ba 100%); /* IE10+ */
    background: linear-gradient(to right,  #7873eb 0%,#3457ba 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7873eb', endColorstr='#3457ba',GradientType=1 ); /* IE6-8 */
  }
  .oj {color:#009D90;}
  .blue {color:#3557BA;}
  .dkblue {color:#05507E;}
  .orange-bg {padding:60px 0;}
  .bg-grey-lt {background:#f1f1f1;border-top:1px solid;border-bottom:1px solid;border-color:#d6d6d6;padding:40px 0;}
    .bg-grey-lt.bg-sm {background:#f1f1f1;border:none;padding:30px 0;}
      .bg-grey-lt.bg-sm h2 {margin:0;}
      .bg-grey-lt.bg-sm h2 .glyphicon {font-size:50px !IMPORTANT;position:relative;top:-3px;}
  .glyphicon {vertical-align:middle;}
  .p1050 {padding:10px 50px;}
  p {font-size:17px;color:#454545;margin-bottom:27px;line-height:24px;}
  h2.t34 {line-height:34px;}
  .lh28 {line-height:26px;}
  .lh46 {line-height:46px;}
  .lt-grey {color:#828282;}
  .green {color:#5cb85c;}
  .dkgrey {color:#2a2a2a;}
  .ml15 {margin-left:15px;}
  .panel .glyphicon {vertical-align:baseline;font-size:18px;}

/* Interview Sprite */
.interview-andreesen, .interview-dubin, .interview-forbes, .interview-huffington, .interview-teller { max-width: 100%; background-size: 100%; background-image: url('/assets/img/interview-sprite.jpg'); }
 .interview-andreesen { background-position: 0 0%; background-size: 100%; }
.interview-dubin { background-position: 0 25%; background-size: 100%; }
.interview-forbes { background-position: 0 50%; background-size: 100%; }
.interview-huffington { background-position: 0 75%; background-size: 100%; }
.interview-teller { background-position: 0 100%; background-size: 100%; }

/* Checkout */
.well {margin-bottom:-1px;border-radius:0;border:none; border-bottom:1px solid #bbb;}
.panel-oj {border:1px solid #eb5c03;}
.panel-heading-oj {background:#eb5c03 !IMPORTANT;}

@media screen and (max-width: 991px) {
  img.pull-right {float:none !IMPORTANT;text-align:center;display: block;margin: 0 auto;}
  .bg-grey-lt.bg-sm h2 {font-size:28px !IMPORTANT;text-align:center;}
    .bg-grey-lt.bg-sm h2 .glyphicon {display: block;text-align: center;margin-bottom:10px;}
  .paragraph-reset {margin-top:0px !IMPORTANT;}
}

@media screen and (max-width: 767px) {
  .p1050 {padding:10px 15px; font-size:20px;}  
  .mb0 {margin-bottom:25px;}
  .speaker-name {display:block;} 
  .panel-mm {height:auto !IMPORTANT; display:none;}
  .panel-oj {margin-top:30px;}
  .btn-wrap {white-space: normal;}
}  
</style>
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

      <nav class="navbar navbar-default gradient">
        <div class="container text-center">          
            <span class="navbar-brand" style="width:100%;margin-left:0;"><img src="/assets/img/exp-think-tank-logo.png" style="max-height:100px;display:inline;margin:5px 0;" /></span>          
        </div>
      </nav>
      
      <div class="container">  
        <div class="row text-center">
          <h2 class="mb0 mt10 t24"><em>Urgent Executive Alert:</em></h2>
          <h1 class="mb0 mt10 mb30 lh46">You are charged with setting direction and you're good at it. But the best captain sailing the high seas can't win against a tsunami's tidal wave. <span class="dblock oj">And you are about to face one.</span></h1>
          <!--<h2 class="mt10 mb30 t24" style="line-height:32px;"><em>Having a chief marketing officer on staff can be cripplingly expensive. The same is true about a chief technology officer, or a chief Science Officer. You need their expertise to make sure your company is making the right moves, just not their price! Here’s the good news: You don’t need in-house executive level officers in order to have a high level of confidence in your mission-critical business decisions...</em></h2>-->
          
        </div>
      </div>
    
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="560" height="315" src="//www.youtube.com/embed/X7DYJlotsr4?rel=0&showinfo=0&controls=0&autoplay=0" frameborder="0" allowfullscreen></iframe>
            </div>         
          </div>          
        </div>              
      </div>
     
     <div class="bg-grey-lt mt50 mb50"> 
       <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <h1 class="t44 mt0"><strong>Introducing Exponential Think Tank</strong></h1>
            <h2 class="t24 mt0">Our goal is to help entrepreneurs understand their true potential. Through <strong>Exponential Think Tank</strong> we can help you and your team achieve your potential by providing you the tools, the mindset and the inspiration to take your business to the next level.</h2>
            <a href="process.php"><button class="btn btn-success t28 p1050 btn-wrap"><span class="glyphicon glyphicon-ok" style="vertical-align:baseline;"></span> <strong>Apply Now &raquo;</strong></button></a>            
          </div>
        </div>
       </div>
     </div>         
                
    <div class="container">      
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1"> 
          <p><strong>Dear business executive</strong>,</p>
          
          <p><em>“40% of today's Fortune 500 companies will no longer exist in 10 years."</em></p>

          <p>That troubling statement comes from one of the leading futurists, Peter H. Diamandis. Even if you're not a Fortune 500, your business, your hard work, your very reputation has been placed in peril.</p> 
          
          <p>The storm of exponential change is fast approaching your industry.</p> 
          
          <p>The epicenter will be in your office.</p> 
          
          <p>Even if you don’t have a name for it, you’ve felt it coming…</p>
          
          <p>Just as Gordon Moore predicted in 1965, technological speeds are doubling every 18 months. That means your phone today, already with 100x more processing power than the computers that took the US to the moon in 1969, will be a worthless block in only 6 fiscal quarters. Moore’s law is the exponential power of computing.  That same exponential change is happening in all other technological fields, and the way you do business.</p>
          
          <p>But this isn’t about your phone. This is about how you and your business can weather the tide of exponential change, and how you can be on the bleeding edge of innovation in your industry.</p> 
          
          <h2 class="text-center t34 blue"><strong>If you don’t take action on this opportunity, your future success is not certain.</strong></h2>
          
          <p>When Peter H. Diamandis released his second New York Times Bestseller “BOLD: How to Go Big, Create Wealth and Impact the World,” he revealed a formula for detecting and taking advantage of emerging industries and technologies quickly, so you can serve the world and push humanity forward. He called that formula the “6 D’s of Exponential Growth.”</p>
          
          <p>At first, a new technology may be <strong>deceptive</strong>. Did you know the engineers at Kodak first invented the digital camera way back in 1975? The problem was, the resolution was pitiful, so they made a strategic decision to keep it under wraps—to abandon development in lieu of selling more paper and chemicals.</p> 
          
          <p>That’s the thing about exponential growth. It looks deceptive because 0.01 megapixels improving to 0.02 megapixels in 18 months is teeny-tiny. Then, when it doubles to 0.04, it’s barely an improvement. By the time it got to 0.08 megapixels, it had already been over four years. At this point, it starts to get <strong>disruptive</strong>.</p> 
          
          <p>As the resolution continues to double every 18 months, the industry starts to take notice. Within short order, we’re at 1.28 megapixels, which is worlds away from the initial Kodak invention. It’s easy to see that the resolution will continue to improve every 18 months.</p> 
          
          <p><strong>Digitization</strong> is a stage in exponential growth where something that was analog flips digital. <strong>Dematerialization</strong> and <strong>demonetization</strong> follow, with <strong>democratization</strong> of the technology being the final stage.</p> 
          
          <p>We’ve seen this with the taxi industry with companies like Uber and Lyft. They’ve digitized the hailing of a taxi, and they’ve dematerialized the cars. Uber doesn’t own the cars they employ like the taxi companies of the past paradigm still do. Both Uber and Lyft have found ways to reduce the cost of a ride, meaning less cost to the consumer.</p> 
          
          <h2 class="text-center t34 blue"><strong>How will your industry be disrupted?</strong></h2>
          
          <p>You and I are in a miraculous time. Never before has it been possible for a single person, or a single company to dramatically change the way goods and services are rendered. With the advent of crowdfunding, products can be pre-sold to the most rabid early adopters, footing the bill for machine tooling and manufacturing costs. Risk is lower and profit percentages have increased.</p>
          
          <p>If you are not having <em>monthly</em> conversations around the latest technological shifts, the emerging leaders in this tsunami, you’ll be washed out to sea. It’s your ability to have regular conversations with experts, who help you sort through what is important and what’s irrelevant—that’s what will give you the best chance to capitalize on your industry knowledge and experience.</p>
          
          <p>Your competition might be hiring a consultant to jump into the middle of their business and try to find the right direction to grow their business. Even if you choose a savvy, experienced consultant, they’ll be pricey. They’ll need to spend time learning holistically about your business and your goals, and then take a stab at helping you. They’ll also be slow. They don’t have your experience. They don’t have what has gotten you to where you are—no consultant has what you have.</p>
          
          <p>That’s why you need to take the mission to start having a regular dialogue with your executive team, even if that’s just you and your business partner—or you and a group of people you trust. You need to know what’s in development in your industry and sector and how it will impact your business, so your 2-year plan isn’t foiled by a new disruptive technology.</p>
          
          <h2 class="text-center t34 blue"><strong>In a world of noise and very little signal, you need a group of discipline experts facilitating conversations to help you curate the daily news to find what impacts you, and what can be thrown out.</strong></h2> 
          
          <p>Moreover, as Napoleon Hill wrote in “Think and Grow Rich,” one of the fastest ways to improve your financial position in life is to have regular mastermind meetings with others who share your same values. Values like providing value, serving our fellow humans, and building wealth—with an exponential mindset.</p>                     
    		  
       </div>
      </div>
    </div>



    <div class="orange-bg gradient mt50 mb50">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <h1 class="mt0 white"><strong>Introducing Exponential Think Tank</strong></h1>
            <h2 class="white t24 lhnorm"><strong>Exponential Think Tank</strong> and group forum are the future-focused executive’s answer to mission-critical business decisions and the way to stay up to speed on emerging science and technology that matter for long-term success</h2>
          </div>
        </div>
      </div>
    </div>
		
    

    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1"> 
    		  <p>For those who qualify for the Exponential Think Tank (ExTank), weekly conversations will be held with exponential ideas being shared.</p> 
          <p>Our team of discipline experts will facilitate discussions around the three most critical pieces of your business:</p>
    			
          <ul>
    				<li>Science &mdash; From 3D prinitng, robotics, sensors and sensing to biohacking, wearables and quantum computing, our resident PhD will show you what’s new and what’s worth knowing about. He will comb through the latest developments in the field of science and present on topics that are worth your attention in laymans terms.</li> 
            <li>Technology &mdash; From</li> 
            <li>Marketing &mdash; Peter Drucker, the famous management consultant said “because the purpose of business is to create a customer, the business enterprise has two–and only two–basic functions: marketing and innovation. Marketing and innovation produce results; all the rest are costs. Marketing is the distinguishing, unique function of the business.” Emerging science and technology are what will make you unique, marketing is how you’ll convey your value.</li>
    			</ul>
          
    		  <h2 class="t34 blue mb30 mt30"><strong>Our format is simple.</strong></h2>
          
	     </div>
      </div>
     </div>     
     
     <!--<div class="bg-grey-lt mt50 mb50"> 
       <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <h2 class="text-center t34 dkblue"><strong>You may have a lawyer on retainer… why not a Chief Marketing Officer, Chief Science Officer and a Chief Technology Officer?</strong></h2>
          </div>
        </div>
       </div>
     </div>-->          
		  	  
     <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-8">
              <ul>
              	<li><strong>Emerging Technology, Scientific Discovery and Marketing Lectures</strong>: Twice each month, you’ll have access to live lectures where the ExTank team will lecture, along with founding members Peter H. Diamandis, Genius Network founder Joe Polish, and other very special guests. These lectures will be based around your needs, as well as content we think you need to be aware of.</li> 	
            <li><strong>Twice a month Open Office Hours</strong>: In these hour-long sessions, you and other members, will have full access to the ExTank Team team. You’ll be able to ask specific questions around technology, science, marketing, strategy, planning, or whatever else your business needs to know.</li> 	
            <li><strong>Access to the Members Forum group</strong>: This is for daily discussion around your business. Experience the mastermind effect when you post your question to the group and have others answer it. The group is lively, and we encourage you to invite three of your executive team to join - at no added cost.</li> 	
            <li><strong>Exclusive Membership Site</strong>: With over 57 hours of high-quality content already loaded into the membership site, we’ve created a massive repository of some of the best instruction on the planet. Peter Diamandis has provided dozens of interviews that he’s had with today’s top industry mavericks, as well as never-before-seen videos from his 2015 $10,000-a-ticket Abundance360 event in Beverly Hills. Joe Polish has provided his best foundational training to the membership site as well, in order to give you access to the best strategies to grow your organization with a rock-solid foundation. This repository grows every month, and as a member, you’ll receive immediate access.</li>	
            <li><strong>Done-For-You Emails</strong>: Every month, we’ll summarize the biggest group take-aways and craft an email for you. You’ll then be able to take that email and copy-paste it to your team, so they can all be abreast to the new education you’ve been a part of. This way, you’ll continue to lead your team with confidence, and give them the education without needing to do much explaining yourself. Even if you’re a team-of-one, these emails will help you by succinctly recapping the major discussions of the month.</li>
              </ul>
            </div>
            <div class="col-sm-4 text-center">
              <img src="assets/img/peter-diamandis-circle.png" class="img-responsive mt30" />
              <p class="t16 blue mt5 mb15">Peter <strong>Diamandis</strong></p>
              <img src="assets/img/joe-polish-circle.png" class="img-responsive mt15" />
              <p class="t16 blue mt5 mb15">Joe <strong>Polish</strong></p>
            </div>
           </div>              	    		  
        </div>
      </div>
    </div>
    

    
    <div class="container">
      <div class="row mt15">
        <div class="col-sm-12">
          <hr /> 
          <h2 class="text-center t34 lhnorm blue mt0" style="line-height:normal !IMPORTANT;">As a member of <strong>ExTank</strong>, you’ll have access to the kind of content and instruction that will keep you on the bleeding edge. Each month, we’ll be hosting a brand-new webinar on the changing landscape of the entrepreneurial world. We’ll be showing you how to identify disrupting markets; how to build a huge community, secrets to raising capital and pitching to VC’s; exciting updates in 3D printing, AI, sensors and robots, and other topics that will keep you sharp.</h2>
          <hr />
          <h2 class="text-center t34 wt400 dkblue mt30 mb10"><strong><em>As an <strong>ExTank</strong> Member, you will receive access to:</em></strong></h2>
        </div>
      </div>
    </div>
    
    <div class="bg-grey-lt bg-sm mt30 mb30">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h2 class="dkgrey t38 wt300"><span class="glyphicon glyphicon-play-circle oj"></span> Foundational Video Training Curriculum</h2>         
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-1">
          <p class="mb0 paragraph-reset" style="margin-top:40px;">Modules will include video training from Peter Diamandis on Exponential Entrepreneurs, Moonshot Thinking, Billionaire Mindset, Exponential Organizations, Data Mining, Artificial Intelligence, Machine Learning, 3D Printing and Robotics, and a whole lot more. These modules will get you “caught up” with today’s exciting technological forefront. Along with content from Peter, you'll find highly valued and specialized marketing content from Joe Polish.</p>
        </div>
        <div class="col-sm-4 text-center">
          <img class="img-responsive" src="/assets/img/portal-foundational-training.jpg" />
        </div>
      </div>
    </div>
            
    <div class="bg-grey-lt bg-sm mt30 mb30">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h2 class="dkgrey t38 wt300"><span class="glyphicon glyphicon-user oj"></span> Leaders Interview Series with Peter Diamandis</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <p class="paragraph-reset">As a member of <strong>ExTank</strong>, you’ll have access to over 50 interviews that Peter Diamandis has recorded with today’s entrepreneurial leaders. He's releasing an interview he did with Steve Jobs years ago, as well as recent interviews with young inventors, game theory experts, successful startup partners and other highly disruptive geniuses. These are the same interviews Peter has pulled many of the stories in <em>BOLD</em> from. Get the full story and hear their expertise yourself.</p>
          <p class=""><strong>The list of interviews includes:</strong></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-offset-1 col-sm-2 text-center"><img class="interview-forbes img-responsive" alt="BOLD Interview with Steve Forbes" src="/assets/img/spacer-175.png" /><span class="speaker-name t13"><strong>Steve Forbes</strong> <br /><em>Forbes</em><span>        </div>
        <div class="col-sm-2 text-center"><img class="interview-dubin img-responsive" alt="BOLD Interview with Michael Dubin" src="/assets/img/spacer-175.png" /><span class="speaker-name t13"><strong>Michael Dubin</strong> <br /><em>Dollar Shave Club</em><span></div>
        <div class="col-sm-2 text-center"><img class="interview-andreesen img-responsive" alt="BOLD Interview with Marc Andreessen" src="/assets/img/spacer-175.png" /><span class="speaker-name t13"><strong>Marc Andreessen</strong> <br /><em>PayPal</em><span></div>
        <div class="col-sm-2 text-center"><img class="interview-huffington img-responsive" alt="BOLD Interview with Arianna Huffington" src="/assets/img/spacer-175.png" /><span class="speaker-name t13"><strong>Arianna Huffington</strong> <br /><em>The Huffington Post</em><span></div>
        <div class="col-sm-2 text-center"><img class="interview-teller img-responsive" alt="BOLD Interview with Astro Teller" src="/assets/img/spacer-175.png" /><span class="speaker-name t13"><strong>Astro Teller</strong> <br /><em>Google[x]</em><span></div>
      </div>
    </div>
    
    <div class="bg-grey-lt bg-sm mt30 mb30">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h2 class="dkgrey t38 wt300"><span class="glyphicon glyphicon-calendar oj"></span> Monthly Content Updates</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-1">
          <p class="mb0 paragraph-reset" style="margin-top:50px;">In our ever-changing world, if you’re not keeping up the date with the latest technology and breakthroughs, your business is dead in the water. The <strong>ExTank</strong> team will be finding and curating relevant content, adding it to the members portal. Conversations in the Think Tank will point to this content, and you'll only need to review what matters—not all the noise that exists online.</p>
        </div>
        <div class="col-sm-4 text-center">
          <img class="img-responsive" src="/assets/img/portal-updates.jpg" />
        </div>
      </div>
    </div>
    
    <div class="bg-grey-lt bg-sm mt30 mb30">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h2 class="dkgrey t38 wt300"><span class="glyphicon glyphicon-facetime-video oj"></span> Twice Monthly Lectures</h2>
          </div>                    
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-1">
          <p class="mb0 paragraph-reset" style="margin-top:20px;">Every two weeks, we'll be offering a live lecture in two formats. The first week of the month, we will find and bring in talent to lecture on the future of science, technology or marketing. Topics will cover all aspects of business, becoming an educational platform for executives. The presenters will be industry leaders, with unique content, most of which hasn't been shared with any group before. The third week of the month, we'll be offering an "internal lecture" with one of the <strong>ExTank</strong> Officers, giving their take on things that deserve your attention.</p>
        </div>
        <div class="col-sm-4 text-center">
          <img class="img-responsive" src="/assets/img/portal-webinar.jpg" />
        </div>
      </div>
    </div>
                  
    <div class="bg-grey-lt bg-sm mt30 mb30">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h2 class="dkgrey t38 wt300"><span class="glyphicon glyphicon-time oj"></span> Open Office Hours</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-1">
          <p class="paragraph-reset" style=""><strong>This is your chance to gain access to the Exponential Think Tank dedicated team of experts that have advised Peter, Joe and <em>hundreds</em> of other highly successful entrepreneurs and business owners.</strong></p>
          <p class="mb0">During Open Office Hours, you’ll be able to ask questions your mission-critical questions, live, to technologists, business consultants, marketing advisors and scientists. Held every-other-week, this is your time to go beyond the typical interactions in the forum mastermind. You’ll be able to get answers to questions about growing your business and achieving your massively transformative purpose. Get plugged into a team that thinks with a bold and abundant mindset and is a big part of my own personal success!</p>
        </div>
        <div class="col-sm-4 text-center">
          <img class="img-responsive" src="/assets/img/bold-expert-team.jpg" />
        </div>
      </div>
    </div>
    
    <div class="bg-grey-lt bg-sm mt30 mb30">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h2 class="dkgrey t38 wt300"><span class="glyphicon glyphicon-thumbs-up oj"></span> <strong>ExTank</strong> Forum Community Access</h2>
          </div>                    
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-1">
          <p class="paragraph-reset">As an <strong>ExTank</strong> member, you’ll have <strong>access to a private, curated digital community</strong> where you and <em>up to three of your executives</em> can post your business-critical questions as often as you have them. Get crowdsourced answers from a trusted inner circle of advisors. This will be the active Q&A on strategy and discussion of Peter and Joe's concepts. Your executive team is invited to be part of this group.</p>
          <p class="mb0"><strong>We’re building a close-knit group of entrepreneurs and executives that are driven to exhibit the exponential mindset in their daily lives.</strong> In addition to the community connections, you’ll also get exclusive updates and be able to interact with the same advisors Peter and Joe lean on for marketing, science and technology questions.</p>
        </div>
        <div class="col-sm-4 text-center">
          <img class="img-responsive" src="/assets/img/bold-community.jpg" />
        </div>
      </div>
    </div>        
    
    <div class="bg-grey-lt bg-sm mt30 mb30">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h2 class="dkgrey t38 wt300"><span class="glyphicon glyphicon-envelope oj"></span> Done-For-You Diagnostic Emails</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-1">
          <p class="mb0 paragraph-reset" style="margin-top:40px;">Each month, you'll receive relevant, transformative Done-For-You Diagnostic Emails and Innovation Management Best Practices. You’ll be able to copy-and-paste these emails, <strong>send them to your team and level up your organization</strong>. We’ll write updates for you to send to your organization, so that each member can get the brain upgrade you’re getting — along with questions for them to answer so that you can determine if they’re thinking far enough ahead.</p>
        </div>
        <div class="col-sm-4 text-center">
          <img class="img-responsive" src="/assets/img/bold-emails.jpg" />
        </div>
      </div>
    </div>  
    
    <div class="bg-grey-lt bg-sm mt30 mb30" style="background-color:#FFFBDD !IMPORTANT;">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h2 class="dkgrey t38 wt300"><span class="glyphicon glyphicon-lock oj"></span> Exclusive Membership Approval Process</h2>
          </div>                    
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <p>Exponential ThinkTank is an exclusive program that is only opening up to highly motivated, future-focused, big-picture entrepreneurs. If you apply, you will be conditionally pre-approved, pending submission of your Application. For members, we'll provide the best resources we have and really believe will help you move towards your goals.</p>
          <p class="mb0">By applying below, you're reserving a spot in the <strong>Exponential Think Tank</strong> membership class. Once your reservation is received, you'll receive an <strong>Exponential Think Tank</strong> Application to fill out. If the team has further questions or feels that you might not be a proper fit for the group, we will contact you to discuss them. <strong><em>It is critical for the success of the group that all members are coming in with the appropriate mindset and thinking</em></strong>. If it's determined that you're not a proper fit for the team, we will refund your reservation payment in full.</p>
        </div>
      </div>
    </div>   


    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1"> 
 			<h2 class="text-center t34 mt30 mb30"><strong>Not All Who Apply Will Be Admitted</strong></h2>
			<p>Quite seriously, this program is not a good fit for everyone. This isn’t a group for wantrapreneurs, nor is it a group for big egos. The intention is to create an engaging discussion around science and technology, with the goal of keeping you and your business on a trajectory for major success. If you’re up for the challenge of slogging through the difficulties in your industry with the Exponential ThinkTank team  ready to help you, then...</p>
			<hr />
      <h2 class="text-center t34 blue mt30 mb30"><strong><span class="glyphicon glyphicon-ok" style="vertical-align:baseline;"></span> Apply Today for Consideration</strong></h2>
      <hr />
			<p>There is a lengthy application that you’ll need to fill out. We want to learn more about you, your business, your goals, and your past successes (and failures!) When you fill out an application, you’ll be called by one of our officers to have a conversation. If we deem you as a good fit, you’ll be enrolled in the program. All applicants will be given a “conditional approval” at the time of submitting an application. This means that you’ll have full access immediately into the service, but may have your access revoked upon the phone call.</p>
			
<p>Group co-founder Peter Diamandis said that "40% of today’s Fortune 500 businesses won’t be around in another 10 years." They’ll get eaten alive by competition, or will become irrelevant with new technologies. Don’t fall into that trap—buttress your organization by having regular and powerful conversations around disruptive technologies, exponential growth and the happenings of industries you can learn directly from. Failure to do so will give you the same outcome Kodak, the inventor of the digital camera, had: Bankruptcy a few months before Instagram was acquired for $1B.</p>
			
<p>The fee for immediate access for you and 3 of your executives to the exclusive membership site, <strong>Exponential Think Tank</strong> community forum, bi-weekly access to Open Office Hours with the ExTank discipline experts and Done-For-You emails is at the monthly investment of $500. There are no contracts, and you’re welcome to cancel at any time.</p>
		</div>
      </div>
    </div>   


    
    <div class="container text-center mt0 mb0">
      <hr class="mt30 mb30" />
      <h2 class="text-center t34 lhnorm blue"><strong>If you think you’re a fit for the program, we welcome your application. During the next steps, you’ll be able to tell us more about yourself, your business and goals. Once we've processed your credit card and your application, you’ll be enrolled <em>conditionally</em>. Our team will then reach out to you to set up a time to talk and discuss your application. If you meet all the criteria, you’ll be a member in good standing. For those who do not meet the qualifications of the application will be refunded their first month’s fee.</h2>
    </div>

     <div class="bg-grey-lt mt50 mb50"> 
       <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <h1 class="t44 mt0"><strong>Apply for Membership</strong></h1>
            <h2 class="t24 mt0">Our goal is to help entrepreneurs understand their true potential. Through Exponential Think Tank we can help you and your team achieve your potential by providing you the tools, the mindset and the inspiration to take your business to the next level.</h2>
            <a href="#ordernow"><button class="btn btn-success t28 p1050 btn-wrap"><span class="glyphicon glyphicon-ok" style="vertical-align:baseline;"></span> <strong>Apply Now &raquo;</strong></button></a>
          </div>
        </div>
       </div>
     </div>
     
     <!--<div class="container text-center mt0 mb0">
      <hr class="mt30 mb30" />
      <h2 class="text-center t34 lhnorm blue"><strong>If you think you’re a fit for the program, we welcome your application. During the next steps, you’ll be able to tell us more about yourself, your business and goals. Once we've processed your credit card and your application, you’ll be enrolled <em>conditionally</em>. Our team will then reach out to you to set up a time to talk and discuss your application. If you meet all the criteria, you’ll be a member in good standing. For those who do not meet the qualifications of the application will be refunded their first month’s fee.</h2>
    </div>-->
    
    
    <div class="orange-bg gradient mt50 mb50">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <h1 class="mt0 white"><strong>Meet the Exponential Think Tank Founders</strong>:</h1>
            <!--<h2 class="white t24 lhnorm"><strong>Exponential Think Tank</strong> and group forum are the future-focused executive’s answer to mission-critical business decisions and the way to stay up to speed on emerging science and technology that matter for long-term success</h2>-->
          </div>
        </div>
      </div>
    </div>
    
    <div class="container mt0 mb0">
    
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
        
          <div class="row">
          	<div class="col-sm-3 text-center"><img src="assets/img/joe-polish-circle.png" class="img-responsive" /></div>
          	<div class="col-sm-9"><p class="mb0" style="margin-top:10px;"><strong>Joe Polish</strong> &mdash; Creator of Genius Network&reg; Interview Series, founder of Genius Network&reg; (also known as the 25K Group), and co-founder of 10XTalk.com, and ILoveMarketing.com, two highly popular free podcasts on iTunes. President of Piranha Marketing Inc. His marketing expertise has been utilized to build thousands of businesses and has generated hundreds of millions of dollars for his clients, ranging from large corporations to small family-owned businesses. Known for his entrepreneurial focus on value creation, connection, and contribution, Joe’s leadership is the reason he’s one of the most sought after marketers alive today.</p></div>
          </div>
          <hr class="mt30 mb30" />
          <div class="row">
          	<div class="col-sm-3 text-center"><img src="assets/img/peter-diamandis-circle.png" class="img-responsive" /></div>
          	<div class="col-sm-9"><p class="mb0" style="margin-top:10px;"><strong>Peter Diamandis</strong> &mdash; Named one of the "World's 50 Greatest Leaders" by Fortune Magazine, Dr. Peter H. Diamandis has been an international pioneer in the fields of innovation, incentive competitions and commercial space. Dr. Diamandis is the Chairman and CEO of XPRIZE, which leads the world in designing and launching large incentive prizes to drive radical breakthroughs for the benefit of humanity. Best known for the $10 million Ansari XPRIZE for private spaceflight and the $10 million Progressive Automotive XPRIZE for 100 mile-per-gallon equivalent cars, XPRIZE is now launching prizes in Exploration, Life Sciences, Energy, and Education.</p></div>
          </div>
          <hr class="mt30 mb30" />
          <div class="row">
          	<div class="col-sm-3 text-center"><img src="assets/img/vincent-mamo-circle.png" class="img-responsive" /></div>
          	<div class="col-sm-9"><p class="mb0" style="margin-top:30px;"><strong>Dr. Vincent Mamo</strong> &mdash; Our Chief Science Officer. With a Ph.D. in Applied Physics from Georgetown University, Dr. Mamo brings a passion for science to the ExTank team. He is also a registered Patent Agent and former Patent Examiner at the USPTO. With a history of science-based startups and having helped <em>hundreds</em> of entrepreneurs with their patent filings, questions and even prosecution services, Dr. Mamo has the skills and experience to help you in a few unique ways.</p></div>
          </div>
          <hr class="mt30 mb30" />
          <div class="row">
          	<div class="col-sm-3 text-center"><img src="assets/img/bill-ferrante-circle.png" class="img-responsive" /></div>
          	<div class="col-sm-9"><p class="mb0" style="margin-top:30px;"><strong>Bill Ferrante</strong> &mdash; Our Chief Technology Officer. His background includes a deep knowledge of public information systems as an early employee at 2 companies credited with inventing the data fusion field. These companies now make up the Risk Management division of LexisNexis. At AOL he was the Technical Director of the Content Publishing Platform running over 300 sites on the AOL network. He actively advises 3 tech startup companies, one of which is a Y Combinator company.</p></div>
          </div>
          <hr class="mt30 mb30" />
          <div class="row">
          	<div class="col-sm-3 text-center"><img src="assets/img/casey-stanton-circle.png" class="img-responsive" /></div>
          	<div class="col-sm-9"><p class="mb0" style="margin-top:20px;"><strong>Casey Slaughter Stanton</strong> &mdash; Our Chief Marketing Officer. As a Professor of Practice in Marketing at Tulane University’s A.B. Freeman School of Business, Casey has a passion for helping others in marketing. With nearly a decade of experience in both online and offline marketing, Casey has a number of successful campaigns. From helping Peter Diamandis’ Planetary Resources raise $1.5M on their ARKYD Kickstarter to providing marketing consulting and strategy for both Peter’s “Abundance” and “BOLD” book launches, Casey is someone who you can trust to help you find the <em>right</em> way to market your business and ideas.</p></div>
          </div>          
        
        </div>    
      </div>
    </div>         


      <!-- Site footer -->
      <hr />
      <footer class="footer mb50">
        <div class="container text-center">
          <p class="t12 mb0">Copyright &copy; 2015 &mdash;  Exponential Think Tank &mdash; 800 Corporate Pointe Suite 350 - Culver City, CA 90230 &mdash; <a href="mailto:support@exponentialthinktank.com" target="_blank">support@exponentialthinktank.com</a></p>
          <p class="mt0 t12"><a href="#" data-toggle="modal" data-target="#modalContact">Contact Us</a> &mdash; <a href="#" data-toggle="modal" data-target="#modalPrivacy">Terms and Conditions</a> &mdash; <a href="#" data-toggle="modal" data-target="#modalPrivacy">Privacy Policy</a></p>
        </div>
      </footer>

<!-- Modal Contact -->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Information</h4>
      </div>
      <div class="modal-body">
        <p>Got a question and need to get in touch with us? Please feel free to drop an email to our support staff an email at the address below.</p>
        <p><strong>Email:</strong> <br /><a href="mailto:support@exponentialthinktank.com" target="_blank">support@exponentialthinktank.com</a></p>
        <hr class="mt15 mb15" />
        <p><strong>Address:</strong> <br />
        Exponential Think Tank <br />
        800 Corporate Pointe Suite 350<br />
        Culver City, CA 90230</p>
      </div>
    </div>
  </div>
</div>

<!-- Modal Privacy -->
<div class="modal fade" id="modalPrivacy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Terms and Conditions & Privacy Policy</h4>
      </div>
      <div class="modal-body">
        <h2 class="t24 mt0"><strong>Privacy Policy</strong></h2><p>This Privacy Policy governs the manner in which Exponential Think Tank&nbsp;collects, uses, maintains and discloses information collected from users (each, a "User") of the http://www.exponentialthinktank.com website ("Site"). This privacy policy applies to the Site and all products and services offered by Exponential Think Tank.</p><h6><strong>Personal identification information</strong></h6><p>We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, register on the siteplace an orderfill out a formrespond to a surveysubscribe to the newsletter and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name,  email address,  mailing address,  phone number,  credit card information,  </p><p>Users may, however, visit our Site anonymously.</p>
        <p>We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.</p><h6><strong>Non-personal identification information</strong></h6><p>We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.</p><h6><strong>Web browser cookies</strong></h6>
        <p>Our Site may use "cookies" to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.</p><h6><strong>How we use collected information</strong></h6><p>Exponential Think Tank collects and uses Users personal information for the following purposes:</p>
        <ul><li><i>To improve customer service</i><br>Your information helps us to more effectively respond to your customer service requests and support needs.</li> <li><i>To personalize user experience</i><br>We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.</li> <li><i>To improve our Site</i><br>We continually strive to improve our website offerings based on the information and feedback we receive from you.</li> <li><i>To process transactions</i><br>We may use the information Users provide about themselves when placing an order only to provide service to that order. We do not share this information with outside parties except to the extent necessary to provide the service.</li> <li><i>To administer a content, promotion, survey or other Site feature</i><br>To send Users information they agreed to receive about topics we think will be of interest to them.</li> <li><i>To share your information with third parties</i><br>We may share or sell information with third parties for marketing or other purposes.</li>
        <li><em>To send periodic emails</em><br>The email address Users provide for order processing, will only be used to send them information and updates pertaining to their order. It may also be used to respond to their inquiries, and/or other requests or questions. If User decides to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc. If at any time the User would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email or User may contact us via our Site.</li></ul><h6><strong>How we protect your information</strong></h6><p>We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.</p>
        <p>Sensitive and private data exchange between the Site and its Users happens over a SSL secured communication channel and is encrypted and protected with digital signatures.</p><h6><strong>Sharing your personal information</strong></h6><p>We do not sell, trade, or rent users personal identification information with third-parties. We reseve the right to share personal identification information regarding users with our business partners. We may use third party service providers to help us operate our business and the Site or administer activities on our behalf, such as sending out newsletters or surveys. We may share your information with these third parties for those limited purposes provided that you have given us your permission.</p><h6><strong>Third party websites</strong></h6>
        <p>Users may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licensors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website's own terms and policies.</p><p></p><h6><strong>Changes to this privacy policy</strong></h6>
        <p>Exponential Think Tank&nbsp;has the discretion to update this privacy policy at any time. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.</p><h6><strong>Your acceptance of these terms</strong></h6><p>By using this Site, you signify your acceptance of this policy and terms of service. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.</p><h6><strong>Contacting us</strong></h6><p>If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at:<br><br>Exponential Think Tank<br>http://www.exponentialthinktank.com<br>800 Corporate Pointe Suite 350 - Culver City, CA 90230<br>support@exponentialthinktank.com</p><h2 class="t24"><strong>Terms and Conditions</strong></h2><p>Last Revised: January 13, 2015</p><p>These terms and conditions govern your use of this web site and our membership site(s). By accessing this web site and/or our membership site(s), you are acknowledging and accepting these terms and conditions. These terms and conditions are subject to change by Exponential Think Tank Inc. (hereinafter “Company”) at any time and at our discretion without notice. Your use of this web site and/or our membership site(s) after any changes are implemented constitutes your acceptance of the changes. As a result, we encourage you to consult the terms and conditions each time you use this web site and/or our membership site(s).</p><ol ><li><p>INTELLECTUAL PROPERTY</p></li>
        </ol><p>You acknowledge and agree that all content and materials available on this site are protected by copyrights, trademarks, service marks, patents, trade secrets, or other proprietary rights and laws. Except as expressly authorized by COMPANY, you agree not to sell, license, rent, modify, distribute, copy, reproduce, transmit, publicly display, publicly perform, publish, adapt, edit, or create derivative works from such materials or content.</p><p>As noted above, reproduction, copying, or redistribution for commercial purposes of any materials or design elements on this site is strictly prohibited without the express written permission of COMPANY. For information on requesting such permission, please contact Kelley at Kelley@a360.com.</p><ol start="2"><li><p>THIRD PARTY REFERENCES / HYPERLINKS</p></li>
        </ol><p>This site and/or our membership site(s) may link you to other sites on the Internet. These sites may contain information or material that some people may find inappropriate or offensive. These other sites are not under the control of COMPANY, and you acknowledge that COMPANY is not responsible for the accuracy, copyright compliance, legality, decency, or any other aspect of the content of such sites. The inclusion of such a link does not imply endorsement of the site by or any association with its operators. However, we may from time to time be compensated for referring you to certain vendors, and in such circumstances, we will let you know of that relationship.</p><ol start="3"><li><p>MEMBERSHIP PROGRAM(S)</p></li></ol><ol ><li><p>PRICING</p></li></ol><p>COMPANY may offer one or more membership programs on this web site. The pricing for any such membership program will be clearly stated on the applicable order form.</p><ol ><li><p>DISCLOSURE OF INFORMATION ON PRIVATE MEMBERSHIP SITE</p></li>
        </ol><p>As a member of one of the membership programs offered by COMPANY, you may submit content to the membership site, including photos and user comments. You shall be solely responsible for your own content and the consequences of submitting and publishing your content.</p><p>You further agree and understand that other individual members of the program that are separate from COMPANY may see the information that you post on any applicable membership site. For this reason, you agree that you shall NOT post any information that you do not want others to see. You agree that anything you post in the applicable membership site is at your own risk, and you further agree to hold COMPANY harmless from any and all damage that could occur to you from any information that you post. For additional details, please see our Privacy Policy.</p>
        <p>You affirm, represent, and warrant that you own or have the necessary licenses, rights, consents, and permissions to publish content you submit. You agree that content you submit will not contain third party copyrighted material, or material that is subject to other third party proprietary rights, unless you have permission from the rightful owner of the material or you are otherwise legally entitled to post the material and to grant COMPANY all of the license rights granted herein. COMPANY does not endorse any content submitted to COMPANY by any user or other licensor.</p><ol ><li><p>YOUR CONDUCT</p></li></ol><p>COMPANY does not permit copyright infringing activities and infringement of intellectual property rights on this site and/or membership site(s), and COMPANY will remove all content if properly notified that such content infringes on another’s intellectual property rights.</p>
        <p>You also affirm, represent, and warrant that your participation on this web site and/or in the membership program(s) and the content you submit does not relate to pornography, illegal activities of any kind, occult, hate, or racism. You also affirm, represent, and warrant that you shall not make any statements or take any actions against COMPANY or other members that would constitute libel or slander.</p><p>COMPANY reserves the right to make the final decision regarding what is appropriate. COMPANY further reserves the right to remove content or terminate your account without prior notice for a violation of this provision.</p><p>Further details regarding the conduct that is expected of all participants in the membership program can also be found in the first post that you will find inside the membership site.</p><ol ><li><p>TERMINATION OF MEMBERSHIP</p></li>
        </ol><p>Either you or COMPANY can cancel your participation in any of our membership programs at any time. No refunds for previous months of membership will be given once the initial refund period has passed. COMPANY’s refund policy is described in further detail in Section 3(E) herein, as follows.</p><ol ><li><p>REFUND POLICY</p></li></ol><p>COMPANY offers a 30-day money back guarantee. If you are not satisfied with our program within the first 30 days for any reason, you can simply contact us within that period and request a full refund of the membership fee that you paid.</p><ol ><li><p>CUSTOMER DISCLAIMERS</p></li></ol><p>COMPANY is not acting as a financial or legal advisor and does not guarantee that you will achieve any particular result from participating in any of COMPANY’s membership programs or from using any of the information on this site. Please see our complete earnings disclaimers for details.</p><ol start="4"><li><p>ABILITY TO ACCEPT TERMS AND CONDITIONS</p></li>
        </ol><p>You affirm that you are either more than 18 years of age, or an emancipated minor, or possess legal parental or guardian consent, and are fully able and competent to enter into the terms, conditions, obligations, affirmations, representations, and warranties set forth in these Terms and Conditions, and to abide by and comply with these Terms and Conditions.</p><ol start="5"><li><p>CONTACTING US </p></li></ol><p>If you need to contact us, you can email Kelley at <a href="mailto:Kelley@a360.com" >Kelley@a360.com</a>.</p><ol start="6"><li><p>DISCLAIMER OF WARRANTIES</p></li>
        </ol><p>ALL MATERIALS, INFORMATION, SOFTWARE, PRODUCTS, AND SERVICES INCLUDED IN OR AVAILABLE THROUGH THIS SITE (THE “CONTENT”) ARE PROVIDED “AS IS” AND “AS AVAILABLE” FOR YOUR USE. THE CONTENT IS PROVIDED WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NONINFRINGEMENT. COMPANY AND ITS AGENTS DO NOT WARRANT THAT THE CONTENT IS ACCURATE, RELIABLE OR CORRECT; THAT THIS SITE WILL BE AVAILABLE AT ANY PARTICULAR TIME OR LOCATION; THAT ANY DEFECTS OR ERRORS WILL BE CORRECTED; OR THAT THE CONTENT IS FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. YOUR USE OF THIS SITE IS SOLELY AT YOUR RISK. BECAUSE SOME JURISDICTIONS DO NOT PERMIT THE EXCLUSION OF CERTAIN WARRANTIES, THESE EXCLUSIONS MAY NOT APPLY TO YOU.</p><ol start="7"><li><p>LIMITATION OF LIABILITY</p></li>
        </ol><p>UNDER NO CIRCUMSTANCES SHALL COMPANY OR ITS AGENTS BE LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL, OR CONSEQUENTIAL DAMAGES THAT RESULT FROM THE USE OF, OR INABILITY TO USE, THIS SITE. THIS LIMITATION APPLIES WHETHER THE ALLEGED LIABILITY IS BASED ON CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY, OR ANY OTHER BASIS, EVEN IF COMPANY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. BECAUSE SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF INCIDENTAL OR CONSEQUENTIAL DAMAGES, COMPANY’S LIABILITY IN SUCH JURISDICTIONS SHALL BE LIMITED TO THE EXTENT PERMITTED BY LAW.</p><ol start="8"><li><p>INDEMNIFICATION</p></li></ol><p>Upon a request by COMPANY, you agree to defend, indemnify, and hold COMPANY and its other affiliated companies harmless, and their employees, contractors, officers, and directors from all liabilities, claims, and expenses, including attorney’s fees, that arise from your misuse of this site and/or the membership programs.</p>
        <ol start="9"><li><p>SEVERABILITY AND INTEGRATION </p></li></ol><p>Unless otherwise specified herein, this agreement constitutes the entire agreement between you and COMPANY with respect to this site and supersedes all prior or contemporaneous communications between you and COMPANY with respect to this site. If any part of these Terms and Conditions is held invalid or unenforceable, that portion shall be construed in a manner consistent with applicable law to reflect, as nearly as possible, the original intentions of the parties, and the remaining portions shall remain in full force and effect.</p><ol start="10"><li><p>JURISDICTION</p></li></ol><p>These Terms and Conditions shall be governed by and construed in accordance with the laws of the State of Texas. You hereby consent to binding arbitration in the State of Texas to resolve any disputes arising under this Terms and Conditions.</p>
      </div>
    </div>
  </div>
</div>    
          
      <!-- Bootstrap core JS -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/owl/owl.carousel.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
      <script type="text/javascript">		   	    
    		jQuery(function ($) {    				
    			// Change Selected Text
          $('#digital-btn').click(function() {
            $("#progSelected").text("O<sup>2</sup>");
            $('html, body').animate({
                scrollTop: $("#orderForms").offset().top
            }, 1200);
          });
          
          $('#bold-btn').click(function() {
            $("#progSelected").text("O<sup>2</sup>");
            $('html, body').animate({
                scrollTop: $("#orderForms").offset().top
            }, 1200);            
          });
                              
          
    		});	
    </script>
  </body>
</html>
