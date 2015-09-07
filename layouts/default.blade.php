<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }}  
        {{ Theme::asset()->styles() }} 
    </head>
    <body> 
    <div class="preloader"></div>
        <div class="container">
            <section id="main-wrapper">
                {{ Theme::partial('header') }} 
                 
                <section id="main-content">
                    {{ Theme::place('content') }}
                </section>
            </section> <!--#main-wrapper-->
            
            {{ Theme::partial('footer') }}
        </div><!--.container-->
        <hr class="line-btm">
        {{ Theme::partial('defaultjs') }}
        {{ Theme::partial('analytic') }}
    </body>
</html>