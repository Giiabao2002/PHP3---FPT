@extends('components.layout')

@section('title')
    Thông Tin SV
@endsection

@section('content')
    

<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>


<div id="menu-bars" class="fas fa-bars"></div>

<section class="home" id="home">
    
    <div class="content">
        <span class="hi"> Xin chào... </span>
        <h3> Tôi là <span> gia bảo </span> </h3>
        <p class="info"> Đây là hồ sơ của tôi </p>
        <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias quidem excepturi natus iste ut. Alias, quod? Earum pariatur obcaecati dolorum! </p>
        <a href="#about" class="btn">Khám phá</a>
    </div>
    
    <div class="image">
        <img src="images/me.jpg" alt="">
    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">
    
    <h1 class="heading"> about <span> me </span> </h1>
    
    <div class="row-1">
        
        <div class="image">
            <img src="images/me.jpg" alt="">
        </div>
        
        <div class="content">
            <h3> Chúc một ngày tốt lành tôi dưới đây là một số thông tin về tôi </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi error molestias impedit officia! Exercitationem dignissimos esse eos quas nisi impedit delectus, voluptate ullam iste nostrum at. Dolor culpa eaque omnis.</p>
            <div class="box-container">
                <div class="box">
                    <p> <span> age : </span> 20 </p>
                    <p> <span> gender : </span> male </p>
                    <p> <span> language : </span> vietnames, english </p>
                    <p> <span> work : </span> fullstack developer </p>
                </div>
                <div class="box">
                    <p> <span> freelance : </span> available </p>
                    <p> <span> phone : </span> +123-456-7890 </p>
                    <p> <span> email : </span> giiabao@gmail.com </p>
                    <p> <span> country : </span> vietnam </p>
                </div>
            </div>
            <a href="#" class="btn">download CV</a>
            <a href="#" class="btn">hire me</a>
        </div>
        
</div>

<h1 class="heading"> <span> my </span> skills </h1>

<div class="row-2">
    
    <div class="skills">
        <div class="progress">
            <h3> web design <span> 95% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> web development <span> 80% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> UI design <span> 75% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> seo marketing <span> 85% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
    </div>
    
    <div class="box-container">
        
        <div class="box">
            <h3> >> 2+ </h3>
            <p>years of experience</p>
        </div>
        <div class="box">
            <h3> >> 250+ </h3>
            <p>happy clients</p>
        </div>
        <div class="box">
            <h3> >> 150+ </h3>
            <p>projects completed</p>
        </div>
        <div class="box">
            <h3> >> 12+ </h3>
            <p>awards won</p>
        </div>
        
    </div>
    
</div>

</section>

<!-- about section ends -->

<!-- service section starts  -->

<section class="service" id="service">
    
    <h1 class="heading"> <span> my </span> services </h1>
    
    <div class="box-container">
        
        <div class="box">
            <i class="fas fa-code"></i>
            <h3>web design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>
        
        <div class="box">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>
        
        <div class="box">
            <i class="fas fa-mobile"></i>
            <h3>responsive design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>
        
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>seo marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>
        
        <div class="box">
            <i class="fas fa-chart-line"></i>
            <h3>digital marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>
        
        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>
        
    </div>
    
</section>

<!-- service section ends -->

<!-- experience section starts  -->

<section class="experience" id="experience">
    
    <h1 class="heading"> <span> my </span> experience </h1>
    
    <div class="box-container">

        <div class="box">
            <div class="content">
                <span> 2015 - 2016 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>
        
        <div class="box">
            <div class="content">
                <span> 2016 - 2017 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>
        
        <div class="box">
            <div class="content">
                <span> 2017 - 2018 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>
        
        <div class="box">
            <div class="content">
                <span> 2018 - 2019 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>
        
        <div class="box">
            <div class="content">
                <span> 2019 - 2020 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>
        
        <div class="box">
            <div class="content">
                <span> 2020 - 2021 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>
        
    </div>
    
</section>
    
@endsection