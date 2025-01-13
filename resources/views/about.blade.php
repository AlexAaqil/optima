<x-general-layout class="About_Page">
    <section class="Jumbotron">
        <div class="container">
            <h1>About Us</h1>
            <div class="navigation">
                <a href="{{ route('home') }}">Home</a>
                <span> / About</span>
            </div>
        </div>
    </section>

    <section class="Intro">
        <div class="container">
            <h2>Who We Are</h2>
            <p>OptimaSoft is a premier SaaS application provider committed to delivering innovative, dependable, and user-centric software solutions tailored for businesses of all scales.</p>
            <p>Our mission is to streamline operations and drive tangible results across diverse industries with intelligent, cost-efficient solutions. At OptimaSoft, we empower organizations to simplify workflows, enhance productivity, and achieve their objectives effortlessly.</p>
            <p>From fee management systems for schools to performance tracking and data solutions for businesses, our tools are designed to automate repetitive tasks, optimize processes, and create significant value for our clients. We focus on building scalable, future-ready technology that not only addresses current challenges but also minimizes long-term operational costs.</p>
            <p>With innovation, affordability, and efficiency at the core of everything we do, OptimaSoft is your trusted partner in navigating the ever-evolving technological landscape.</p>
        </div>
    </section>

    <section class="Mission_Vision">
        <div class="container">
            <div class="statements">
                <div class="statement">
                    <p class="title">Our Vision</p>
                    <p>To be the leading provider of transformative technology solutions that inspire progress and foster success across industries worldwide.</p>
                </div>
                <div class="statement">
                    <p class="title">Our Mission</p>
                    <p>To empower businesses and institutions with reliable, intuitive, and efficient technology solutions that enhance operations, drive productivity, and deliver measurable impact.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="Work_Process">
        <div class="container">
            <h2>Our Work Process</h2>
            <div class="processes">
                <div class="process">
                    <div class="icon">
                        <span class="fas fa-scroll"></span>
                    </div>
                    <div class="text">
                        <p class="title">Research</p>
                        <p>We conduct comprehensive research to understand your unique needs, challenges, and goals, laying the foundation for a tailored solution.</p>
                    </div>
                </div>

                <div class="process">
                    <div class="icon">
                        <span class="fas fa-code"></span>
                    </div>
                    <div class="text">
                        <p class="title">Design & Development</p>
                        <p>Our team designs and develops custom software solutions with precision, ensuring scalability, functionality, and user satisfaction.</p>
                    </div>
                </div>

                <div class="process">
                    <div class="icon">
                        <span class="fas fa-sliders-h"></span>
                    </div>
                    <div class="text">
                        <p class="title">Installation & Testing</p>
                        <p>We ensure seamless deployment and rigorous testing of the solution to guarantee flawless performance and reliability.</p>
                    </div>
                </div>

                <div class="process">
                    <div class="icon">
                        <span class="fas fa-recycle"></span>
                    </div>
                    <div class="text">
                        <p class="title">Project Delivery & Maintenance</p>
                        <p>We deliver the final solution with ongoing support and maintenance to ensure sustained efficiency and effectiveness over time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-the-team />

    <x-cta />
</x-general-layout>
