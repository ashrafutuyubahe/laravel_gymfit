<?php
session_start()
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('nav-images/mdi_weights.png') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZnEOkg4FVyfjJDgxWPPmnOqtBMQE0LSyt09AXOdcczgKmBLyRndVW1XyP1mGyP" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/styles/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles/fitness.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles/achievements.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles/in-touch.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles/message-us.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles/faqs.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles/newsletter.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles/footer.css') }}">

    <title>GYM</title>
</head>
<body>
    <!--Navbar starts-->
    <nav class="navbar">
        <div class="left-section">
        <img src="{{ asset('img/assets/nav-images/mdi_weights.png') }}" class="nav--image">

            <h4>G<span class="black">Y</span>M</h4>
        </div>
        <div class="right-section">
        
            <a href="#home" class="active">Home</a>
            <a href="#fitness">About Us</a>
            <a href="#achievements">Achievements</a>
            <a href="#message--us">Contact</a>
            <a href="#faqs">FAQ's</a>
           
             
            <button><a href="{{asset('sign_up.php')}}">Join Us</a></button>
        </div>
    </nav>
    


    
    <section id="home">
        <div class="left-section--home">
            <p>
                <span class="title">Welcome to GYM!</span>
                <span class="other--text">
                    A place where fitness meets innovation! We are dedicated to revolutionizing the way people experience 
                    fitness by offering state-of-the-art facilities, expert trainers, and cutting-edge equipment. Whether you're 
                    a seasoned athlete or just starting your fitness journey, we provide a welcoming environment for everyone. 
                    Join us and be part of a community that values health, wellness, and pushing boundaries. 
                    We invite you all to explore the endless possibilities at GYM and embark on a transformative fitness experience like no other.
                </span>
            </p>
            <button class="learn--more">Learn More &rarr;</button>
        </div>
        <div class="right-section--home">
           
            <img src="{{ asset('img/assets/home-images/Ellipse 1.png') }}" class="ellipse-1">
            <img src="{{ asset('img/assets/home-images/Ellipse 2.png') }}"  class="ellipse-2">
        </div>
    </section>
    <!--Home section ends-->



    <!--Sports-icons bar starts-->
    <div class="bar">
        <nav>
            <div>
            <img src="{{ asset('img/assets/sport-icons/simple-icons_nike.png') }}"  class="ellipse-2">
           <img src="{{ asset('img/assets/sport-icons/simple-icons_jordan.png') }}"  class="ellipse-2">                
             <img src="{{ asset('img/assets/sport-icons/token_mtv.png') }}" class="sport--icon">                
               
            </div>
        </nav>
    </div>
    <!--Sports-icons bar ends-->
    


    <!--Fitness section starts-->
    <section class="fitness" id="fitness">

        <div class="left-section--fitness">
           
            <img src="{{ asset('img/assets/fitness-images/fitness.png') }}" class="sport--icon">  
        </div>


        <div class="right-section--fitness">
            <div class="upper-section-fitness">
                <h3>Fitness Forward: Discover a New You at GYM!</h3>
                    <p>
                        Welcome to the Fitness Forward section at GYM! 
                        Our facilities, trainers, and classes cater to all fitness levels and goals. 
                        Whether you want circuit training, strength training, cardio, balance, 
                        stay active or any other training we're here to support you. Join us and 
                        discover a fitter, stronger you!
                    </p>
            </div>

            <div class="lower-section-fitness">
                <div class="fit--section">

                    <div class="fit--me">
                        <div class="img">
                            <img src="nav-images/mdi_weights.png" alt="">
                        </div>
                        <div class="img--text">
                            <h4 class="img--text--title">Training Hub</h4>
                            <p class="img--text--desc">
                                Your comprehensive resource for fitness education and guidance.
                            </p>
                        </div>
                    </div>

                    <div class="fit--me">
                        <div class="img">
                            <img src="../css/assets/nav-images/mdi_weights.png" alt="">
                        </div>
                        <div class="img--text">
                            <h4 class="img--text--title">Workout Haven</h4>
                            <p class="img--text--desc">
                                Explore diverse training programs tailored to your fitness goals.
                            </p>
                        </div>
                    </div>

                    <div class="fit--me">
                        <div class="img">
                            <img src="../css/assets/nav-images/mdi_weights.png" alt="">
                        </div>
                        <div class="img--text">
                            <h4 class="img--text--title">Fitness Fusion</h4>
                            <p class="img--text--desc">
                                Discover a blend of innovative workouts to challenge and inspire.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--Fitness section ends-->



    <!--Achievements section starts-->
    <section class="achievements" id="achievements">
        <h4 class="achie--title">Achievements</h4>
        <div class="cards">
            <div class="card">
                <h3>Membership Milestones</h3>
                <p>Join Our Growing Community! Over <span style="font-weight: bolder;">1000</span> Members Strong and Counting!</p>
            </div>
            <div class="card">
                <h3>Fitness Success Stories</h3>
                <p>Transformation Tuesday: Meet <span style="font-weight: bolder;">Linda Kellia</span>, Who Lost <span style="font-weight: bolder;">50 Pounds</span>  and Gained Confidence!</p>
            </div>
            <div class="card">
                <h3>Community Engagement</h3>
                <p>"Giving Back: Our Gym Raises <span style="font-weight: bolder;">$1000</span> for Local Charity in Annual Fundraiser!</p>
            </div>
            <div class="card">
                <h3>Award Recognition</h3>
                <p>Voted <span style="font-weight: bolder;">Best Gym</span> in the City for the <span style="font-weight: bolder;">3rd Year </span>in a Row!</p>
            </div>
            <div class="card">
                <h3>Fitness Challenges</h3>
                <p>Crush Your Goals: <span style="font-weight: bolder;">2023 Fitness Challenge Results</span> Are In!</p>
            </div>
            <div class="card">
                <h3>Innovative Programs</h3>
                <p>Introducing Mindful Movement: Our <span style="font-weight: bolder;">New Yoga Program</span> for Mental and Physical Wellness!</p>
            </div>
        </div>
    </section>
    <!--Achievements section ends-->



    <!--In Touch section starts-->
    <section id="in--touch">
        <h4 class="contact-in-touch-title">Contact</h4>
        <div class="get-in-touch">
            <h4>Get In Touch</h4>
            <div class="in--touch--links">

                <div class="in--touch--title">
                    <div class="in--touch--img">
                        <img src="../css/assets/in-touch-images/Address.png" alt="">
                    </div>
                    <div class="in--touch--img--text">
                        <p>
                            Visit us at <span style="font-weight: bold;">GYM,</span> located at 
                            <span style="font-weight: bold;">123 Fitness Avenue, Workout City, Fitland
                            </span>. Experience top-notch facilities, expert trainers, and a welcoming 
                            atmosphere that sets us apart from the rest. Join us today and embark on a 
                            fitness journey like no other!
                        </p>
                    </div>
                </div>

                <div class="in--touch--title middle">
                    <div class="in--touch--img">
                        <img src="../css/assets/in-touch-images/phone.png" alt="">
                    </div>
                    <div class="in--touch--img--text">
                        <p>
                            For any inquiries or assistance, feel free to call us at <span style="font-weight: bold;">+123-456-7890.</span>
                            Our friendly staff is available to answer your questions and provide you with 
                            the information you need. Whether you're interested in membership details 
                            or class schedules, we're here to help you every step of the way. Don't hesitate 
                            to reach out to us!
                        </p>
                    </div>
                </div>

                <div class="in--touch--title">
                    <div class="in--touch--img">
                        
                        <img src="{{ asset('img/assets/in-touch-images/email.png') }}" > 
                    </div>
                    <div class="in--touch--img--text">
                        <p>
                            Have a question or need more information? Drop us an email at <span style="font-weight: bold;">info@gym.com.</span>
                            Our team will get back to you promptly to assist you with your queries. Whether 
                            it's about our services, facilities, or anything else, we're here to provide you with 
                            the support you need. Contact us today and let us help you achieve your fitness goals!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--In Touch section ends-->



    <!--Message Us section starts-->
    <section id="message--us">
        <div class="left--section--message">
            <div class="upper--section--message">
                <h3>Message Us</h3>
                <p>           
                    Have a question or need assistance? Reach out to us anytime! 
                    Our team is here to help. Whether it's about our services, membership, 
                    or anything else, we're just a message away. Simply fill out the form below, 
                    and we'll get back to you shortly. Your satisfaction is our top priority, and 
                    we're committed to ensuring you have a great experience with us.
                </p>
            </div>

            <div class="lower--section--message">
                <div class="l-sec">
                    <img src="nav-images/mdi_weights.png" class="nav--image">
                    <h4>G<span class="black">Y</span>M</h4>
                </div>
                <div class="m-sec">
                    <span class="line"></span>
                </div>
                <div class="r-sec">
                    <p>
                        Elevate Your Fitness, Transform Your Life: Discover Your Best Self At GYM!
                    </p>
                </div>
            </div>
        </div>


        <div class="right--section--message">
            <form action="" class="form">
                <input type="text" class="sender--info" placeholder="Your Names" id="full-names" required>
                <input type="email" class="sender--info" placeholder="Email" id="email" required>
                <div class="lower--form">
                    <input type="text" class="subject" placeholder="Subject" id="subject">
                    <textarea  id="message--sent" class="message--sent" placeholder="Message"></textarea>
                    <button>Send Message</button>
                </div>
            </form>
        </div>
    </section>
    <!--Message Us section ends-->



    <!--FAQ's section starts-->
    <section id="faqs">
        <h5>Frequently Asked Questions</h5>
        <div class="faq--container">
            <div class="each--faq">
                <h4>What are your membership options?</h4>
                <p>
                    We offer various membership options to suit your needs, 
                    including monthly, quarterly, and annual plans. Each plan 
                    provides access to our facilities and amenities, with the 
                    flexibility to choose what works best for you.
                </p>
            </div>

            <div class="each--faq">
                <h4>Do you offer personal training services?</h4>
                <p>
                    Yes, we offer personalized training programs tailored to your 
                    fitness goals. Our certified trainers will work with you to create 
                    a customized workout plan and provide guidance and support 
                    to help you achieve your objectives.
                </p>
            </div>

            <div class="each--faq">
                <h4>What types of classes do you offer?</h4>
                <p>
                    We offer a wide range of classes, including yoga, Pilates, spinning, 
                    Zumba, Strength Training more. Our classes cater to all fitness levels 
                    and are designed to provide a fun and effective workout experience.
                </p>
            </div>

            <div class="each--faq">
                <h4>Do you have childcare facilities?</h4>
                <p>
                    Yes, we offer childcare services for our members. Our facilities are 
                    equipped with a safe and engaging environment for children to play 
                    while parents focus on their workouts.
                </p>
            </div>

            <div class="each--faq">
                <h4>What amenities do you offer?</h4>
                <p>
                    We offer a variety of amenities, including locker rooms, showers, sauna, 
                    steam room, and a lounge area. These amenities are designed to enhance 
                    your overall gym experience and provide you with comfort and convenience.
                </p>
            </div>

            <div class="each--faq">
                <h4>What safety measures do you have in place?</h4>
                <p>
                    The safety and well-being of our members are our top priorities. We have 
                    implemented various safety measures, including regular cleaning and sanitization 
                    of our facilities, ensuring equipment is properly maintained, and providing guidance 
                    on proper hygiene practices. Additionally, we encourage social distancing and have 
                    adjusted our class sizes and schedules accordingly.
                </p>
            </div>
        </div>
    </section>
    <!--FAQ's section ends-->



    <!--Newsletter section starts-->
    <section class="newsletter" id="newsletter">
        <div class="newsletter-image"></div>
        <div class="newsletter--content">
            <h1>Newsletter</h1>
            <p>
                Stay connected with GYM's exclusive newsletter! 
                Join our community to receive the latest updates, h
                ealth tips, and special offers straight to your inbox.
            </p>
            <form action="">
                <img src="newsletter-images/email.png" alt="">
                <input type="email" placeholder="Enter Your Email" required>
                <button>Submit</button>
            </form>
        </div>
    </section>
    <!--Newsletter section ends-->



    <!--Footer section starts-->
    <section class="footer" id="footer">
        <div class="upper-section-footer">
            <div class="left--section--footer">
                <div class="dropbox">
                    <img src="footer-images/dropbox.png" alt="">
                    <p>Dropbox</p>
                </div>
                <div class="social-media-links">
                    
                    <img src="footer-images/twitter.png" alt="">
                    <img src="footer-images/facebook.png" alt="">
                    <img src="footer-images/instagram.png" alt="">
                    <img src="footer-images/linkedin.png" alt="">
                </div>
            </div>
            <div class="right--section--footer">
                <div class="links-container">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#fitness">About Us</a></li>
                        <li><a href="#achievements">Achievements</a></li>
                        <li><a href="#message--us">Contact</a></li>
                        <li><a href="#faqs">FAQ's</a></li>
                    </ul>
                </div>

                <div class="links-container">
                    <h3>Quick Actions</h3>
                    <ul>
                        <li>Join Us</li>
                        <li>Send</li>
                        <li>Message</li>
                    </ul>
                </div>
                
                <div class="links-container">
                    <h3>FAQ's</h3>
                    <ul>
                        <li><a href="#faqs">What safety measures do you have in place?</a></li>
                        <li><a href="#faqs">What are your membership options?</a></li>
                        <li><a href="#faqs">Do you have childcare facilities?</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="lower-section-footer">
            <p>Copyright@2024 GYM. All rights reserved</p>
        </div>
    </section>
    <!--Footer section ends-->

    <script src="scroll.js"></script>
</body>
</html>
