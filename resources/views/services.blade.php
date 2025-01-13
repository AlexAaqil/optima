<x-general-layout class="Services_Page">
    <section class="Jumbotron">
        <div class="container">
            <h1>Services</h1>
            <div class="navigation">
                <a href="{{ route('home') }}">Home</a>
                <span> / Services</span>
            </div>
        </div>
    </section>

    <section class="Services">
        <div class="container">
            <h2>Our Services</h2>
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

    <x-cta />
</x-general-layout>
