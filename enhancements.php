<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Website enhancements for this website">
        <meta name="keywords" content="Tech Company, Nebula, Space, Jobs, Software">
        <meta name="author" content="Harry Macheda">
        <title>Enhancements</title>
        <link rel="icon" type="image/x-icon" href="./images/tiny_logo.png">
        <link rel="stylesheet" href="./styles/style.css" >
        <link rel="stylesheet" href="./styles/all.css" >
        <meta name="theme-color" content="#F3F1DC"> <!-- set the theme colour so mobile browsers set the background colour -->
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- set the viewport so we know the browsers width for mobile layouts -->
    </head>
    <body>
        <?php include 'nav.inc';?>
        <main id="enhanceMain">
            <h1 id="enhancePageHeading" class="theme-dark heading">Website Enhancements</h1>
            <div id="enhancementsContainers">
            <div id="enhanceFontAwesomeContainer" class="glasspane">
                <h2 class="theme-dark heading">Font Awesome Icons</h2>
                <p>
                    <a class="theme-dark link" href="https://fontawesome.com/">Font Awesome</a> is an icon library availible for free for anyone to use.<br>
                    It is avialble under the <abbr>SIL Open Font License 1.1</abbr> (OFL) meaning 
                    that it is not required to have any credit referenced to it in the project, so while this is not required 
                    thanks to the Font Awesome Library and similar freely avaible projects web development has become
                    much more beginner friendly.
                </p>
                    <span id="enhanceFontIconDisplay">
                        <span class="fa-solid fa-code"></span>
                        <span class="fa-solid fa-battery-half"></span>
                        <span class="fa-solid fa-beer"></span>
                        <span class="fa-solid fa-bomb"></span>
                        <span class="fa-solid fa-terminal"></span>
                        <span class="fa-solid fa-microchip"></span>
                        <span class="fa-solid fa-globe"></span>
                        <span class="fa-solid fa-film"></span>
                        <span class="fa-solid fa-bug"></span>
                        <span class="fa-solid fa-code"></span>
                    </span>
                <p>
                    In our project we use the icons provided in a few different places,
                    such as the navigation bar, and the animated background. Icons are a great
                    way to break up the text on a page, they provide quick,general, and accessible 
                    way to quickly convey the purpose of a button/ or piece of text.
                    <br>
                    <br>
                    The icons are implimented as such:
                    <p class="theme-dark code" >
                        &lt;span class=&quot;fa-solid fa-code&quot;&gt;&lt;/span&gt;
                    </p>
                    <p>We use the span element to apply the class, these classes render as svg to ensure clarity at any resolution.<br>
                    Whenever used these spans are "Aria Hidden" this means that screen readers to do skip over them, 
                    this avoids potential doubling of descriptions which could make the website difficult to navigate for
                    some users.
                    </p>
            </div>
            <div id="enhanceBackgroundContainer" class="glasspane">
                    <h2 class="theme-light heading">Animated page background</h2>
                    <p>The animated background implimented on all the pages goes beyond the simple plain background, 
                    or static image that this assignment requires. This extends the material covered in the topic 
                    by implimenting <abbr>CSS</abbr> (Cascading Style Sheets) Animations which are not covered in the course.<br>
                    <br>
                    This enhancement required a few key technologies to impliment, which due to the limitations 
                    on this assignment required some creative thinking.<br>
                    <br>
                    To impliment this feature we needed to precomputer the random animations and star placements 
                    externally since we were not allowed to use javascript in the website. This was done in a 
                    javascript based project we wrote just for this project.<br>
                    This had two steps:
                    Create the <abbr>HTML</abbr>(Hyper Text Markup Language) in this format:</p>
                    <p class="theme-dark code" >
                        &lt;span class=&quot;circle fa-solid fa-star&quot; id=&quot;circle_0_0&quot;&gt;&lt;/span&gt;
                    </p>
                    Then we create a random class matching the id to have a random position,
                    animation offset, and base size.
                    <p class="theme-dark code" >
                        #circle_0_0 { <br>
                            &emsp;position: absolute;<br> 
                            &emsp;top:38%; left:80%;<br>
                            &emsp;animation-name: starAnimation;<br> 
                            &emsp;animation-delay:990ms;<br> 
                            &emsp;font-size: 10px<br> 
                        }
                    </p>
                    All the stars share a base animation which scales up the star over a time of 
                    2 seconds
                    <p class="theme-dark code" >
                        @keyframes starAnimation {<br> 
                           &emsp;0% {transform: scale(1);}<br> 
                           &emsp;75% {transform: scale(1);}<br> 
                           &emsp;100% {transform: scale(1.3)}<br> 
                        }
                    </p>
            </div>
            <div id="enhanceGlitchContainer" class="glasspane">
                <h2 class="theme-dark heading">Glitch effects</h2>
                <p>
                    The index page has a glitch effect theme.<br>
                    This allows us to show that we are a tech Company, by implimenting tech styled effects.<br>
                    These enhance the page as they allow the page to look more reactive and lively<br><br>
                    These can be viewd on the <a class="theme-dark link" href="./index.html">Index Page</a><br><br>
                    The glitch effect on the text is implimented by a <abbr>CSS</abbr> animation.
                </p>
                <p class="theme-dark code">
                    .welcome-text h1:nth-child(2) {<br>
                        &emsp;color: #ff00f2;<br>
                        &emsp;animation: glitch2 3s infinite;<br>
                    }<br>
                    <br>    
                    @keyframes glitch2 {<br>
                        &emsp;0% {<br>
                            &emsp;&emsp;display: none;<br>
                            &emsp;}<br>
                        <br>
                        &emsp;40%{<br>
                            &emsp;&emsp;transform: none;<br>
                            &emsp;}<br>
                        <br>
                        &emsp;45% {<br>
                            &emsp;&emsp;display: block;<br>
                            &emsp;&emsp;transform: translate(5px,5px);<br>
                            &emsp;}<br>
                        <br>
                        &emsp;75% {<br>
                            &emsp;&emsp;transform: none;<br>
                            &emsp;}<br>
                        <br>
                        &emsp;100% {<br>
                            &emsp;&emsp;display: none;<br>
                            &emsp;}<br>
                    }<br>
                </p>
                <p>
                    We create three copies of the text we wish to glitch<br>
                    We then assign a colour and animation to two with will be the "glitch"
                </p>
            </div>
            </div>
        </main>        
             <?php include 'background.inc';?>      
        <footer>
            <?php include 'footer.inc';?>
        </footer>
    </body>
</html>