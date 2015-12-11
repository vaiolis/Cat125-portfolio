@extends('app')

@section('title', 'About Me')

@section('body')
    <div class="container text-left top-container">
	<div class="row">
	    <div class="col-lg-12">
                <h1 class="text-center">About Me</h1>

<p style="text-indent: 50px">
I faced a major hurdle when constructing this website, and that hurdle was a contradiction inherent to my identity. How can I portray myself as a professional when I am still in the process of discovering what I can do? Despite having nearly 5 years of experience developing websites and 7 years of experience in computer programming, I still find myself faced with projects I want to build without knowing exactly how to make them.</p>

<p style="text-indent: 50px">
I decided to address this hurdle by incorporating it into the core message of my project. I have not completed my studies as a computer engineering candidate at the University of California at San Diego, nor have I become a fully trained software developer with years of experience in industry.  However, I am a tinkerer. I am excited by the prospects of learning new utilities and frameworks and the new tools I can acquire by using them. I get frustrated when I am unable to implement a feature according to the specifications I envisioned of it, and after I inspect every detail of the code I have written, I learn more about the intricacies of the programs with which I am working.</p>

<p style="text-indent: 50px">
This website is an accumulation of my experiences thus far as a web developer. I was introduced to web development in my junior year of high school when I was appointed Vice President of Technology at the local chapter of the Future Business Leaders of America. The first project I was tasked with was a complete transition of the old website to a new content management system. Porting an old website into a content management system I had never worked with in a language I had only a few months of experience in seemed like an insurmountable task, and yet it was completed over the course of the year as I built the website module by module.</p>

<p style="text-indent: 50px">
My experiences in web design have adhered to this recurring theme. A project arrives in one form or another, and I learn how to create the product along the way. While each project varies widely in their design and intended use, I am able to apply my successive experiences to make sense of the project at hand. Over the course of the years, I have learned the ins and outs of various PHP-based content management systems, designed websites ranging in topics from gaming to disaster response systems, and picked up some UI design tricks along the way. I aim to share a few of these experiences in my website, so pick an article to begin reading!</p>
                
        </div>
	</div>
    </div>

	<!-- Portfolio Grid Section -->
    <section class="success" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Articles</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 portfolio-item">
                    <a href="/article-one" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                My Internship in Taiwan
                            </div>
                        </div>
                        <img src="img/portfolio/taiwan.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="/article-two" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Impressions of Laravel PHP
                            </div>
                        </div>
                        <img src="img/portfolio/ruby-or-php.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="/article-three" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Experiments in JQuery
                            </div>
                        </div>
                        <img src="img/portfolio/jquery.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="/article-four" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Picking the Right CMS
                            </div>
                        </div>
                        <img src="img/portfolio/wordpress.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop
