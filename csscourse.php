<?php
session_start();
include 'connect.php';

$student_id = $_SESSION['student_id'];

if(!isset($student_id))
  header('location: login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Basics</title>
    <link rel="stylesheet" href="csscourse.css">
    
    <link rel="stylesheet" href="homestyle.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    
    <script>
      //back to top button 
      function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }
      // Function to show content and save the state in local storage
      function showContent(contentId) {
          // Hide all articles
          var articles = document.querySelectorAll('article');
          articles.forEach(function (article) {
              article.classList.add('hidden');
          });

          // Show the selected article
          var selectedArticle = document.getElementById(contentId);
          if (selectedArticle) {
              selectedArticle.classList.remove('hidden');

              // Save the state in local storage
              localStorage.setItem('selectedContent', contentId);
          }
      }

      // Function to retrieve the stored content and display it on page load
      function loadStoredContent() {
          var storedContent = localStorage.getItem('selectedContent');
          if (storedContent) {
              showContent(storedContent);
          }
      }

      // Call the function on page load
      document.addEventListener('DOMContentLoaded', loadStoredContent);
  </script>
  <style>
    ul,li,table,td,code,span,em,strong {
      color: black;
      margin-left: 1%;
    }
  </style>
</head>

<body class="back-ground">
    <div class="section-1">
    <nav>
          <table>
            <tr>
            <td><a href="home.php"><img src="main_icon.png" class="main_icon"></td></a>
            <td><h1 class="logo"></h1></td>
            </tr>
            </table>
            <div class="navbar">
              <a href="home.php">Home</a>
              <a href="IDE.php">Compiler</a>
              <div class="dropdown">
                <a href="#">Courses</a>
                <div class="dropdown-content">
                  <a href="htmlcourse.php">HTML</a>
                  <a href="csscourse.php">CSS</a>
                </div>
              </div>
              <a href="tutorial.php">Tutorials</a> 
              <a href="team.php">About Us</a>
              <a href="student_portal.php">Classroom</a>
              <div class="dropdown">
              <a href="#">Assessments</a>
                <div class="dropdown-content">
                <a href="HtmlExam.php"> HTML EXAMINATION</a>
                <a href="cssexam.php"> CSS EXAMINATION</a>
                </div>
              </div> 
              <a href="logout.php">
               <i class="fas fa-sign-out-alt"></i> Log Out
              </a>
            </div>
        </nav>
    <header>
        <h1 style="color: white">CSS Basics</h1>
    </header>
    <section>
        <aside>
            <h2 style="text-align: center;">Menu</h2>
            <ul style="line-height: 1.7;">
                <br>
                <li><a href="#" onclick="showContent('introduction')">Introduction</a></li>
                <li><a href="#" onclick="showContent('syntax')">Syntax</a></li>
                <li><a href="#" onclick="showContent('borders')">Borders</a></li>
                <li><a href="#" onclick="showContent('fonts')">Fonts</a></li>
                <li><a href="#" onclick="showContent('links')">Links</a></li>
                <li><a href="#" onclick="showContent('colors')">Colors</a></li>
                <li><a href="#" onclick="showContent('backgrounds')">Backgrounds</a></li>
                <li><a href="#" onclick="showContent('comments')">Comments</a></li>
                <li><a href="#" onclick="showContent('margins')">Margins</a></li>
                <li><a href="#" onclick="showContent('tables')">Tables</a></li>
                
            </ul>
        </aside>

        <article id="introduction"  >
         
        <br>
            <h1>Introduction to CSS</h2>
            <hr><br>
            <div class="course_button">
              <a href="#" onclick="showContent('introduction')"><button class="prv_but">❮ Previous</button></a>
              <a href="#" onclick="showContent('syntax')"><button class="nxt_but">Next ❯</button></a>
          </div><br>
            <br>
            <p>CSS is the language we use to style an HTML document.

                CSS describes how HTML elements should be displayed.
                
                This tutorial will teach you CSS from basic to advanced.</p><br>
            <hr>
            <br>
            <h2>What is CSS?</h2><br>
            <ul>
            <li>CSS stands for Cascading Style Sheets</li>
            <li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
            <li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
            <li>External stylesheets are stored in CSS files</li>
            </ul>
            <br><br>
            <hr><br>
            <h2>CSS Demo - One HTML Page - Multiple Styles!</h2>
            <br>
            <h3>Example Style </h3>
            <br>
            <img src="sample_img/introduction.png" alt="Example Code">
            <img src="sample_img/introduction2.png" alt="Example Code">
            <br><br>
            <h2>CSS Solved a Big Problem</h2>
            <br>
            <p>HTML was NEVER intended to contain tags for formatting a web page!</p>
            
            <p>HTML was created to describe the content of a web page, like:</p>
            <br>
            <h2>&lt;h1&gt;This is a heading&lt;/h1&gt;</h2>
            
            <p>&lt;p&gt;This is a paragraph.&lt;/p&gt;</p>
            <br>
            <div style="line-height: 2.4;">
            <p>When tags like &lt;font&gt;, and color attributes were added to the HTML 3.2 specification, it started a nightmare for web developers. Development of large websites, where fonts and color information were added to every single page, became a long and expensive process.</p>
            
            <p>To solve this problem, the World Wide Web Consortium (W3C) created CSS.</p>
            
            <p>CSS removed the style formatting from the HTML page!</p>
            
            <p>If you don't know what HTML is, we suggest that you read our HTML Tutorial.</p>
            </div>
            <br>
            <h2>CSS Saves a Lot of Work!</h2>
            <br>
            <p>The style definitions are normally saved in external .css files.</p>
            
            <p>With an external stylesheet file, you can change the look of an entire website by changing just one file!</p>
        <hr><br><br>
        <hr><br>
        <div class="course_button">
          <a href="#" onclick="showContent('editors')"><button class="prv_but">❮ Previous</button></a>
          <a href="#" onclick="showContent('elements')"><button class="nxt_but">Next ❯</button></a>
      </div>
      <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
      <footer style="text-align: center;"> <p>Ilearnhub : End of Module 1 Introduction to CSS </p> </footer>

        </article>

        <article id="syntax" >
            <br>
            <h1>Syntax</h2>
              <hr><br>
              <div class="course_button">
                <a href="#" onclick="showContent('introduction')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('borders')"><button class="nxt_but">Next ❯</button></a>
            </div><br>
            <img src="sample_img/syntax.png" alt="syntax">
            <hr>
            <ul style="color: black;">
            <br>

            <li>The selector points to the HTML element you want to style.</li><br>
            <li>The declaration block contains one or more declarations separated by semicolons.</li><br>
            <li>Each declaration includes a CSS property name and a value, separated by a colon.</li><br>
            <li>Multiple CSS declarations are separated with semicolons, and declaration blocks are surrounded by curly braces.</li><br>
            </ul>
            <hr><br>
            <h2>Explanation!</h2>
            <ul>
            <li>p is a selector in CSS (it points to the HTML element you want to style: &lt;p&gt;.)</li>
            <li>color is a property, and red is the property value</li>
            <li>text-align is a property, and center is the property value</li>
            </ul><br><br>
            <p>You will learn much more about CSS selectors and CSS properties in the next chapters!</p>
            <hr>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>

            <footer style="text-align: center;"> <p>Ilearnhub : End of Module 2 CSS Syntax </p> </footer>

        </article>

        <article id="borders" >
            <br>
            <h1>Borders</h1>
              <hr><br>
              <div class="course_button">
                <a href="#" onclick="showContent('syntax')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('fonts')"><button class="nxt_but">Next ❯</button></a>
            </div><br>
            <p>The CSS border properties allow you to specify the style, width, and color of an element's border.</p>
            <img src="sample_img/border1.png" alt="syntax">
            <hr>
            <h2>CSS Border Style</h2>
            <ul>
            <li><code class="w3-codespan">dotted</code> - Defines a dotted border</li>
            <li><code class="w3-codespan">dashed</code> - Defines a dashed border</li>
            <li><code class="w3-codespan">solid</code> - Defines a solid border</li>
            <li><code class="w3-codespan">double</code> - Defines a double border</li>
            <li><code class="w3-codespan">groove</code> - Defines a 3D grooved border. The effect depends on the border-color value</li>
            <li><code class="w3-codespan">ridge</code> - Defines a 3D ridged border. The effect depends on the border-color value</li>
            <li><code class="w3-codespan">inset</code> - Defines a 3D inset border. The effect depends on the border-color value</li>
            <li><code class="w3-codespan">outset</code> - Defines a 3D outset border. The effect depends on the border-color value</li>
            <li><code class="w3-codespan">none</code> - Defines no border</li>
            <li><code class="w3-codespan">hidden</code> - Defines a hidden border</li>
            </ul>
            <br>
            <p>The<code class="w3-codespan">border-style</code> property can have from one to four values (for 
            the top border, right border, bottom border, and the left border).</p>
            <hr>
            <br>
            <img src="sample_img/border2.PNG" alt="">
            <br><br><br>
            <hr><br>
            <h2>CSS Border Width</h2>
            <br>
            <p>The <em style="color:black;">border-width</em> specifies the width of the four borders.</p>
            <p>The width can be set as a specific size (in px, pt, cm, em, etc) or by using 
            one of the three pre-defined values: thin, medium, or thick:</p>
            <br><br>
            <img src="sample_img/border3.PNG" alt="">
            <br><br><hr><br><br>
            <h2>CSS Border Color</h2>
            <br>
            <p>The<code class="w3-codespan">border-color</code>property is used to set the color of the four borders.</p>
            <p>The color can be set by:</p>
            <br>
            <ul>
            <li>name - specify a color name, like "red"</li>
            <li>HEX - specify a HEX value, like "#ff0000"</li>
            <li>RGB - specify a RGB value, like "rgb(255,0,0)"</li>
            <li>HSL - specify a HSL value, like "hsl(0, 100%, 50%)"</li>
            <li>transparent</li>
            </ul>
            <br><strong>Note: border-color is not set, it inherits the color of the element.</strong><br>
            <img src="sample_img/border4.PNG" alt="">
            <br><br><hr><br><br>
            <h2>CSS Rounded Borders</h2>
            <img src="sample_img/border5.PNG" alt="">
            <br><br><hr><br><br>




            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
            <footer style="text-align: center;"> <p>Ilearnhub : End of Module 3 CSS Borders </p> </footer>

        </article>

        <article id="fonts" >
          <br>
            <h1>CSS Fonts</h1>
            <hr><br>
            <div class="course_button">
              <a href="#" onclick="showContent('syntax')"><button class="prv_but">❮ Previous</button></a>
              <a href="#" onclick="showContent('links')"><button class="nxt_but">Next ❯</button></a>
          </div><br><br>
            <p>Choosing the right font for your website is important!</p><br><br>
            <h2>Font Selection is Important</h2>
            <P>Choosing the right font has a huge impact on how the readers experience a website.</P><br>
            <p>The right font can create a strong identity for your brand.</p><br>
            <p>Using a font that is easy to read is important. The font adds value to your text. It is also important to choose the correct color and text size for the font.</p><br><br>
            <h2>Generic Font Families</h2>
            <b>In CSS there are five generic font families:</b>
            <ol> Sans-serif fonts have clean lines (no small strokes attached). They create a modern and minimalistic look.</li>
                <li>Monospace fonts - here all the letters have the same fixed width. They create a mechanical look.</li>
                <li>Cursive fonts imitate human handwriting.</li>
                <li>Fantasy fonts are decorative/playful fonts.</li>

            </ol>
            <br><br>
            <p>All the different font names belong to one of the generic font families. </p><br><br>
            <h2>Difference Between Serif and Sans-serif Fonts</h2>
            <br>
            <img src="sample_img/font.png" alt="font">
            <br>
            <p><b>Note: </b>On computer screens, sans-serif fonts are considered easier to read than serif fonts.</p><br><br>
            <h2>Some Font Examples</h2>
            <table class="t-cont">
                <tr>
                  <th>Generic Font Family</th>
                  <th>Examples of Font Names</th>
                </tr>
                <tr>
                  <td>Serif</td>
                  <td>Times New Roman<br>Georgia<br>Garamond</td>
                </tr>
                <tr>
                  <td>Sans-serif</td>
                  <td>Arial<br>Verdana<br>Helvetica</td>
                </tr>
                <tr>
                  <td>Monospace</td>
                  <td>Courier New<br>Lucida Console<br>Monaco</td>
                </tr>
                <tr>
                  <td>Cursive</td>
                  <td>Brush Script MT<br>Lucida Handwriting</td>
                </tr>
                <tr>
                  <td>Fantasy</td>
                  <td>Copperplate<br>Papyrus</td>
                </tr>
              </table><br><br>
              <h2>The CSS font-family Property</h2>
              <p>In CSS, we use the font-family property to specify the font of a text.</p><br><br>
              <b>Note: If the font name is more than one word, it must be in quotation marks, like: "Times New Roman".</p><br><br>
              <p><b>Tip:</b> The font-family property should hold several font names as a "fallback" system, to ensure maximum compatibility between browsers/operating systems. Start with the font you want, and end with a generic family (to let the browser pick a similar font in the generic family, if no other fonts are available). The font names should be separated with comma. Read more about fallback fonts in the next chapter.
              <br>
            
              <br><br>
              
              <h2>Font Style</h2><br>
              <p>The font-style property is mostly used to specify italic text.</p>
            <p>This property has three values: </p>
            <ul>
                <li>normal - The text is shown normally</li>
                <li>italic - The text is shown in italics</li>
                <li>oblique - The text is "leaning" (oblique is very similar to italic, but less supported)</li><br><br>
            </ul>
            <img src="sample_img/font_style.png" alt="">
            <br>
            <br><h2>Font Weight</h2><br>
            <img src="sample_img/font_weight.png" alt="weight">
            <br>
            <br><p>The font-weight property specifies the weight of a font:</p><br>
            <br><h2>Font Variant</h2><br>
            <p>The font-variant property specifies whether or not a text should be displayed in a small-caps font.</p><br>
            <p>In a small-caps font, all lowercase letters are converted to uppercase letters. However, the converted uppercase letters appears in a smaller font size than the original uppercase letters in the text.</p>
            <h2>Example</h2>
            <img src="sample_img/variant.png" alt="">
            <h2>CSS Font Size</h2><br><br>
            <h2>Font Size</h2><br>
            <p>The font-size property sets the size of the text.</p>
            <p>Being able to manage the text size is important in web design. However, you should not use font size adjustments to make paragraphs look like headings, or headings look like paragraphs.</p><br>
            <p>Always use the proper HTML tags, like &lt;h1&gt; - &lt;h6&gt; for headings and &lt;p&gt; for paragraphs.&lt;/p&gt;.</p><br>
            <p>The font-size value can be an absolute, or relative size.</p><br>
            <p>Absolute size:</p>
            <ul>
                <li>Sets the text to a specified size</li>
                <li>Does not allow a user to change the text size in all browsers (bad for accessibility reasons)</li>
                <li>Absolute size is useful when the physical size of the output is known</li>
            </ul>
            <p>Relative size:</p>
            <ul>
                <li>Sets the size relative to surrounding elements</li>
                <li>Allows a user to change the text size in browsers</li>
            </ul><br>
        <p><b>Note: </b> If you do not specify a font size, the default size for normal text, like paragraphs, is 16px (16px=1em).</p><br><br>
        <h2>Set Font Size With Pixels</h2><br>
        <p>Setting the text size with pixels gives you full control over the text size:</p>
        <h2>Example</h2>
        <img src="sample_img/pixel.png" alt="">
        <br>
        <p><b>Note: </b> If you use pixels, you can still use the zoom tool to resize the entire page.</p><br><br>
        <h2>Set Font Size With Em</h2><br>
        <p>To allow users to resize the text (in the browser menu), many developers use em instead of pixels.</p><br>
        <p>1em is equal to the current font size. The default text size in browsers is 16px. So, the default size of 1em is 16px.</p><br>
        <p>The size can be calculated from pixels to em using this formula: pixels/16=em</p><br>
        <img src="sample_img/em.png" alt="">
        <br>
        
        <p>In the example above, the text size in em is the same as the previous example in pixels. However, with the em size, it is possible to adjust the text size in all browsers.</p><br>
        <p>Unfortunately, there is still a problem with older versions of Internet Explorer. The text becomes larger than it should when made larger, and smaller than it should when made smaller.</p><br><br>
        <h2>Use a Combination of Percent and Em</h2><br>
        <p>The solution that works in all browsers, is to set a default font-size in percent for the &lt;body&gt; element:</p><br>
       <img src="sample_img/percent.png" alt="">
       <br>
        <p>Our code now works great! It shows the same text size in all browsers, and allows all browsers to zoom or resize the text!</p><br><br>
        <h2>Responsive Font Size</h2>
        <p>The text size can be set with a vw unit, which means the "viewport width".</p><br>
        <p>That way the text size will follow the size of the browser window:</p><br>
        <img src="sample_img/big.png" alt="">
        <br>
        <img src="sample_img/big_2.png" alt="">
        <p>Viewport is the browser window size. 1vw = 1% of viewport width. If the viewport is 50cm wide, 1vw is 0.5cm.</p><br><br>
            <hr>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>





        <footer style="text-align: center;"> <p>Ilearnhub : End of Module 3 CSS Fonts </p> </footer>

        </article>

        <article id="links" >
          <br>
          <h1>CSS Links</h1>
          <hr><br>
          <div class="course_button">
            <a href="#" onclick="showContent('fonts')"><button class="prv_but">❮ Previous</button></a>
            <a href="#" onclick="showContent('colors')"><button class="nxt_but">Next ❯</button></a>
        </div>
        <br>
            <p>With CSS, links can be styled in many different ways.</p>
            <img src="sample_img/link.png" alt="">
            <br>
            <h2>Styling Links</h2>
            <p>Links can be styled with any CSS property (e.g. color, font-family, background, etc.).</p><br>
            <img src="sample_img/style.png" alt="">
            <br>
            <p>In addition, links can be styled differently depending on what state they are in.</p><br>
            <p>The four links states are:</p>
            <ul>
                <li>a:link - a normal, unvisited link</li>
                <li>a:visited - a link the user has visited</li>
                <li>a:hover - a link when the user mouses over it</li>
                <li>a:active - a link the moment it is clicked</li>
            </ul>
            <br>
           <img src="sample_img/style_2.png" alt="">
           <br>
            <p>When setting the style for several link states, there are some order rules:</p>
            <ul>
                <li>a:hover MUST come after a:link and a:visited</li>
                <li>a:active MUST come after a:hover</li>
            </ul>
            <br><br>
            <h2>Text Decoration</h2>
            <p>The text-decoration property is mostly used to remove underlines from links:</p>
            <img src="sample_img/dec.png" alt="">
            <br>
            <h2>Background Color</h2>
            <p>The background-color property can be used to specify a background color for links:</p>
           <img src="sample_img/bacolor.png" alt="">
           <br>
            <br>
            <h2>Link Buttons</h2>
            <p>This example demonstrates a more advanced example where we combine several CSS properties to display links as boxes/buttons:</p>
            <img src="sample_img/buttons.png" alt="">
            <br>
            <hr><br>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
            <footer style="text-align: center;"> <p>Ilearnhub : End of Module 4 CSS Links</p> </footer>

        </article>

        <article id="colors">
          <br>
          <h1>CSS Colors</h1>
          <hr><br>
          <div class="course_button">
            <a href="#" onclick="showContent('links')"><button class="prv_but">❮ Previous</button></a>
            <a href="#" onclick="showContent('backgrounds')"><button class="nxt_but">Next ❯</button></a>
        </div>
        <br>
            
            <p>Colors are specified using predefined color names, or RGB, HEX, HSL, RGBA, HSLA values.</p>
            <br>
            <h2>CSS Color Names</h2>
            <p>In CSS, a color can be specified by using a predefined color name:</p><br>
            <img src="sample_img/bgcolors.jpg" alt="">
            <br>
            <h2>CSS Background Color</h2>
            <p>You can set the background color for HTML elements:
            </p><br>
            <img src="sample_img/bgcolors_hello.png" alt="">
            <p>Example</p>
            <br>
            <div class="w3-code notranslate htmlHigh">
              <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="background-color:DodgerBlue;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello World<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="background-color:Tomato;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Lorem 
              ipsum...<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <br>
           
           <br>
           <h2>CSS Text Color</h2>
           <p>You can set the color of text:</p>
           <br>
           <h2 style="color: red;">Hello World</h2>
           <p style="color: blue;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
           <br>
           <p style="color: rgb(24, 150, 41);">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <br><br>
            <h2>Source code:</h2>
            <div class="w3-example">
              
             <div class="w3-code notranslate htmlHigh">
               <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="color:Tomato;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello 
               World<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="color:DodgerBlue;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Lorem 
               ipsum...<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="color:MediumSeaGreen;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Ut wisi 
               enim...<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
             <a target="_blank" href="tryit.asp?filename=trycss_color_text" class="w3-btn w3-margin-bottom">Try it Yourself »</a>
             </div>
             <br>
             <h2>CSS Border Color</h2>
              <p>You can set the color of borders:</p>
              <img src="sample_img/border_color.png" alt="">
              <br>
              <h2 style="color: rgb(0, 0, 0);">CSS Color Values</h2>
              <p style="color: rgb(255, 99, 71);">In CSS, colors can also be specified using RGB values, HEX values, HSL values, 
              RGBA values, and HSLA values:</p>
              <br>
              <img src="sample_img/colorvalues.png" alt="">
              <hr>
              <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
              <footer style="text-align: center;"> <p>Ilearnhub : End of Module 5 CSS Colors</p> </footer>

        </article>

        <article id="backgrounds">
          <br>
            <h1>CSS Backgrounds</h1>
            <hr><br>
            <div class="course_button">
              <a href="#" onclick="showContent('colors')"><button class="prv_but">❮ Previous</button></a>
              <a href="#" onclick="showContent('comments')"><button class="nxt_but">Next ❯</button></a>
          </div><br>
          <br>
            <p>The CSS background properties are used to add background effects for elements.</p>
            <h2>image example here</h2>
            <h2>CSS background-color</h2>
            <p>The background-color property specifies the background color of an element.</p><br>
            <h2>Example</h2>
            <p>The background color of a page is set like this:</p>
            <h2>image example here</h2>
            <br>
            <p>With CSS, a color is most often specified by:</p>
            <ul>
                <li>a valid color name - like "red"</li>
                <li>a HEX value - like "#ff0000"</li>
                <li>an RGB value - like "rgb(255,0,0)"</li>
            </ul><br>
            <p>Look at CSS Color Values for a complete list of possible color values.</p><br>
            <h2>Other Elements</h2>
            <p>You can set the background color for any HTML elements:</p><br>
            <h2>Example</h2>
            <p>Here, the &lt;h1&gt;, &lt;p&gt;, and &lt;div&gt; elements will have different background colors: </p><br>
            <h2>image example here</h2>
            <br><br>
            <h2>Opacity / Transparency</h2>
            <p>The opacity property specifies the opacity/transparency of an element. It can take a value from 0.0 - 1.0. The lower value, the more transparent:</p><br>
            <h2>image example here</h2>
            <h2>Example</h2>
            <h2>example here</h2>
            <p><b>Note: </b>When using the opacity property to add transparency to the background of an element, all of its child elements inherit the same transparency. This can make the text inside a fully transparent element hard to read.</p><br>
            <br>
            <h2>Transparency using RGBA</h2>
            <p>If you do not want to apply opacity to child elements, like in our example above, use <b>RGBA</b> color values. The following example sets the opacity for the background color and not the text:</p><br>
            <h2>image example here</h2>
            <p>You learned from our CSS Colors Chapter, that you can use RGB as a color value. In addition to RGB, you can use an RGB color value with an alpha channel <b>(RGBA)</b> - which specifies the opacity for a color.</p><br>
            <p>An RGBA color value is specified with: rgba(red, green, blue, alpha). The alpha parameter is a number between 0.0 (fully transparent) and 1.0 (fully opaque).</p><br>
            <p><b>Tip: </b>You will learn more about RGBA Colors in our CSS Colors Chapter.</p>
            <h2>Example</h2>
            <h2>image example here</h2>
            <br>
            <h2>The CSS Background Color Property</h2>
            <br><br>
            <table>
                <tr>
                    <th>Property</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>background-color</td>
                    <td>Sets the background color of an element</td>
                </tr>

            </table>
            <br><br>
            <h2>CSS Background Image</h2><br>
            <h2>CSS background-image</h2>
            <p>The background-image property specifies an image to use as the background of an element.</p><br>
            <p>By default, the image is repeated so it covers the entire element.</p><br>
            <h2>Example</h2>
            <p>Set the background image for a page: </p>
            <h2>example here</h2>
            <br>
            <h2>Example</h2>
            <p>This example shows a bad combination of text and background image. The text is hardly readable:</p><br>
            <h2>example here</h2>
            <br>
            <p><b>Note: </b>When using a background image, use an image that does not disturb the text.</p><br>
            <p>The background image can also be set for specific elements, like the &lt;p&gt; element:</p><br>
            <h2>Example</h2>
            <h2>example here</h2>
            <br>
            <h2>The CSS Background Image Property</h2>
            <table>
                <tr>
                    <th>Property</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>background-image</td>
                    <td>Sets the background image for an element</td>
                </tr>

            </table>
            <hr>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
    <footer style="text-align: center;"> <p>Ilearnhub : End of Module 6 CSS Backgrounds </p> </footer>


            








        </article>

        <article id="comments">
            <br>
            <h1>CSS Comments</h1>
            <hr><br>
            <div class="course_button">
              <a href="#" onclick="showContent('backgrounds')"><button class="prv_but">❮ Previous</button></a>
              <a href="#" onclick="showContent('margins')"><button class="nxt_but">Next ❯</button></a>
          </div><br>
            <br>
            <br><p>CSS comments are not displayed in the browser, but they can help document your source code.</p><br>
            <h2>CSS Comments</h2>
            <br><p>Comments are used to explain the code, and may help when you edit the source code at a later date.</p><br>
            <br><p>Comments are ignored by browsers.</p><br>
            <br><p>A CSS comment is placed inside the &lt;style&gt; element, and starts with /* and ends with */:</p><br>
            <img src="sample_img/css_comments.png" alt="Example Code">
            <br><p>You can add comments wherever you want in the code:</p><br>
            <img src="sample_img/comments_2.png" alt="Example Code">
            <br><p>Even in the middle of a code line:</p><br>
            <img src="sample_img/comments_3.png" alt="Example code">
            <br><p>Comments can also span multiple lines:</p><br>
            <img src="sample_img/comments_4.png" alt="Example Code">
            <br>
            <h2>HTML and CSS Comments</h2>
            <br><p>From the HTML tutorial, you learned that you can add comments to your HTML source by using the &lt;!--...--&gt; syntax.</p><br>
            <br><p>In the following example, we use a combination of HTML and CSS comments:</p><br>
            <img src="sample_img/comments_5.png" alt="Example Code">
            <hr>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>








            <footer style="text-align: center;"> <p>Ilearnhub : End of Module 7 CSS Comments </p> </footer>

        </article>

        <article id="margins">
          <br>
            <h1>Margins</h1>
            <hr><br>
            <div class="course_button">
              <a href="#" onclick="showContent('comments')"><button class="prv_but">❮ Previous</button></a>
              <a href="#" onclick="showContent('tables')"><button class="nxt_but">Next ❯</button></a>
          </div><br>
            <br><p>Margins are used to create space around elements, outside of any defined borders.</p><br>
            <h2>Heading with Different Margins</h2>
  
            <p>This is a paragraph with margins set to 10px for all sides.</p>
            
            <h2>The CSS margin properties</h2>
  
            <p>are used to create space around elements, outside of any defined borders. With CSS, you have full control over the margins. There are properties for setting the margin for each side of an element (top, right, bottom, and left).</p>
            <h2>Margin - Individual Sides</h2>
  
  <ul>
    <li><strong>margin-top</strong> - controls the top margin of an element</li>
    <li><strong>margin-right</strong> - sets the right-side margin</li>
    <li><strong>margin-bottom</strong> - defines the bottom margin</li>
    <li><strong>margin-left</strong> - specifies the left-side margin</li>
  </ul>
  
  <p>These properties can accept various values:</p>
  
  <ul>
    <li><strong>auto</strong> - the browser calculates the margin</li>
    <li><strong>length</strong> - specifies a margin in pixels (px), points (pt), centimeters (cm), etc.</li>
    <li><strong>%</strong> - sets the margin as a percentage of the width of the containing element</li>
    <li><strong>inherit</strong> - inherits the margin value from the parent element</li>
  </ul>
  
  <p><em>Note:</em> Negative values are allowed for these properties.</p>
  <img src="sample_img/comments_6.png" alt="example code">
  <h2>Margin - Shorthand Property</h2>
  
  <p>The <strong>margin</strong> property is a shorthand for:</p>
  
  <ul>
    <li><strong>margin-top</strong> - controls the top margin of an element</li>
    <li><strong>margin-right</strong> - sets the right-side margin</li>
    <li><strong>margin-bottom</strong> - defines the bottom margin</li>
    <li><strong>margin-left</strong> - specifies the left-side margin</li>
  </ul>
  
  <p>When using the <strong>margin</strong> property with four values:</p>
  
  <p><code>margin: 25px 50px 75px 100px;</code></p>
  
  <ul>
    <li>Top margin is 25px</li>
    <li>Right margin is 50px</li>
    <li>Bottom margin is 75px</li>
    <li>Left margin is 100px</li>
  </ul>
  <img src="sample_img/comments_7.png" alt="example code">
  <p>If the margin property has three values:</p><br>
  <p>margin: 25px 50px 75px</p>
  <ul>
    <li>top margin is 25px</li>
    <li>right and left margins are 50px</li>
    <li>bottom margin is 75px</li>
  </ul>
  <br><br>
  <img src="sample_img/comments_8.png" alt="example code">
  <br><br>
  <p>If the margin property has two values:</p>
  <p><strong>margin: 25px 50px;</strong></p>
  <ul>
    <li>top and bottom margins are 25px</li>
    <li>right and left margins are 50px</li>

  </ul><br>
  <img src="sample_img/margin_1.png" alt="example code">
  <br>
  <p>If the margin property has one value:</p>
  <ul>
    <li>margin: 25px;</li>
    <li>all four margins are 25px</li>
  </ul><br>
  <img src="sample_img/margin_2.png" alt="example code">
  <h2>The auto Value</h2>
  
  <p>You can use the <strong>margin</strong> property set to <strong>auto</strong> to horizontally center an element within its container.</p>
  
  <p>The specified width of the element will be taken up, and the remaining space will be distributed equally between the left and right margins.</p><br>
  <img src="sample_img/margin_3.png" alt="example code">
  <h2>The inherit Value</h2>
  <br>
  <p>This example lets the left margin of the <p class="ex1"> element be inherited from the parent element (<div>):</p>
    <br>
    <img src="sample_img/margin_4.png" alt="exa">
    <br>
    <h2>All CSS Margin Properties</h2>
    <br>
    <table class="t-cont">
        <tr>
          <th>Property</th>
          <th>Description</th>
        </tr>
        <tr>
          <td>margin</td>
          <td>A shorthand property for setting all the margin properties in one declaration</td>
        </tr>
        <tr>
          <td>margin-bottom</td>
          <td>Sets the bottom margin of an element</td>
        </tr>
        <tr>
          <td>margin-left</td>
          <td>Sets the left margin of an element</td>
        </tr>
        <tr>
          <td>margin-right</td>
          <td>Sets the right margin of an element</td>
        </tr>
        <tr>
          <td>margin-top</td>
          <td>Sets the top margin of an element</td>
        </tr>
      </table>
<br>
<hr>
<br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
 

        





<footer style="text-align: center;"> <p>Ilearnhub : End of Module 8 CSS Margins </p> </footer>

        </article>

        <article id="tables">
            <br>
            <h1>CSS Tables</h1>
            <hr><br>
            <div class="course_button">
              <a href="#" onclick="showContent('margins')"><button class="prv_but">❮ Previous</button></a>
              <a href="#" onclick="showContent('introduction')"><button class="nxt_but">Next ❯</button></a>
          </div><br>
            <br>
            <p>The look of an HTML table can be greatly improved with CSS:</p>
            <img src="sample_img/mar.png" alt="">
            <h2>Table Borders</h2>
            <p>To specify table borders in CSS, use the border property.</p>
            <p> The example below specifies a solid border for &lt;table&gt;, &lt;th&gt;, and &lt;td&gt; elements:
                <br>
                Firstname: Peter, Lois
                <br>
                Lastname: Griffin, Griffin</p>
                <br>
                <table class="t-cont">
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th>
                    </tr>
                    <tr>
                      <td>Peter</td>
                      <td>Griffin</td>
                    </tr>
                    <tr>
                      <td>Lois</td>
                      <td>Griffin</td>
                    </tr>
                  </table>
                  <br>
                  <img src="sample_img/tab.png" alt="">
                  <br>
        <h2>Full-Width Table</h2>
        <p>The table above might seem small in some cases. If you need a table that should span the entire screen (full-width), add width: 100% to the <table> element:</p>
            <br>
            <img src="sample_img/fullwidth.png" alt="">
<br>
<img src="sample_img/hundred.png" alt="">
<br>
<h2>Double Borders</h2>
<p>Notice that the table in the examples above have double borders. This is because both the table and the &lt;th&gt; and &lt;td&gt; elements have separate borders.</p>
<br>
<p>To remove double borders, take a look at the example below.</p>
<br>
<h2>Collapse Table Borders</h2>
<br>
<p>The border-collapse property sets whether the table borders should be collapsed into a single border:</p>
<br>
<img src="sample_img/colla.png" alt="">
  <br>
  <img src="sample_img/collapse.png" alt="">
  <br>
  <p>If you only want a border around the table, only specify the border property for &lt;table&gt;:</p>
  <img src="sample_img/table.png" alt="">
  <br><br>
  <hr>
  <br>
  <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
  <footer style="text-align: center;"> <p>Ilearnhub : End of Module 9 CSS Table </p> </footer>

        </article>

    </section>
</body>
</html>
