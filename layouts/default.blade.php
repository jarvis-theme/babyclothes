<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
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
                    {{-- Theme::partial('slider') --}}
                            
                    {{ Theme::place('content') }}
                </section>
                    
            </section> <!--#main-wrapper-->
            
            
            {{ Theme::partial('footer') }}
            
        </div><!--.container-->
        <hr class="line-btm">
        {{ Theme::partial('defaultjs') }}
        {{ Theme::asset()->scripts() }} 
        {{ Theme::asset()->container('footer')->scripts() }}
        {{ Theme::partial('analytic') }}
    </body>
</html>