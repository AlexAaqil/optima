<x-general-layout class="Home_Page">
    <section class="Hero">
        <div class="container">
            <div class="text">
                <h1>Empowering Businesses with Tailored Software Solutions</h1>
                <p>We specialize in developing powerful software to help you streamline your operations, increase productivity and boost revenue.</p>

                <div class="button">
                    <a href="{{ route('contact') }}" class="btn_link">Get a Free Constulation</a>
                </div>
            </div>
        </div>
    </section>

    <section class="Services">
        <div class="container">
            <h2>What we do</h2>
            <div class="services">
                <div class="service">
                    <span>01</span>
                    <span>Custom Software Solutions</span>
                    <span>We design bespoke software tailored to your unique business requirements, ensuring a seamless fit at cost-effective pricing.</span>
                </div>

                <div class="service">
                    <span>02</span>
                    <span>Software Integration</span>
                    <span>Enhance your existing systems with modern API integrations, empowering your legacy software with advanced functionality.</span>
                </div>

                <div class="service">
                    <span>03</span>
                    <span>Web Development</span>
                    <span>Build dynamic, responsive, and visually stunning websites that deliver exceptional user experiences and drive business growth.</span>
                </div>

                <div class="service">
                    <span>04</span>
                    <span>SEO Optimization</span>
                    <span>Boost your online presence with cutting-edge SEO strategies and digital marketing campaigns designed to increase traffic and conversions.</span>
                </div>
            </div>
        </div>
    </section>

    <section class="About_Us">
        <div class="container">
            <h2>Why Choose Optima</h2>
            <div class="abouts">
                <div class="about">
                    <span>Proven Expertise</span>
                    <span>Our team comprises of seasoned professionals with extensive experience across all domains of software engineering.</span>
                </div>
    
                <div class="about">
                    <span>Innovative Solutions</span>
                    <span>We leverage cutting-edge technologies to help you outpace competitors and deliver exceptional results.</span>
                </div>
    
                <div class="about">
                    <span>Effortless Scalability</span>
                    <span>Our solutions are designed to scale seamlessly, adapting to your evolving needs without limits.</span>
                </div>
    
                <div class="about">
                    <span>Fully Customizable</span>
                    <span>We deliver tailor-made solutions uniquely designed to meet your specific business requirements.</span>
                </div>
            </div>
        </div>
    </section>  

    <section class="Team">
        <div class="container">
            <h2>Meet the Team</h2>

            <div class="members">
                <div class="member">
                    <div class="image">
                        <img src="{{ asset('assets/images/charles-maina.jpg') }}" alt="Charles">
                    </div>
                    <div class="text">
                        <p class="title">Charles Maina</p>
                        <p>Founder, CEO</p>
                    </div>
                </div>

                <div class="member">
                    <div class="image">
                        <img src="{{ asset('assets/images/alex-wambui.png') }}" alt="Alex">
                    </div>
                    <div class="text">
                        <p class="title">Alex Wambui</p>
                        <p>Co-Founder, CTO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="CTA">
        <div class="container">
            <div class="ctas">
                <div class="cta">
                    <p class="title">Ready to revolutionize your business?</p>
                    <p>Request a quote or a demo of any of our apps to see how they can help you streamline your operations and boost revenue.</p>
                </div>

                <div class="cta">
                    <div class="button">
                        <a href="{{ route('contact') }}" class="btn_link">Request a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-general-layout>