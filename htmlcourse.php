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
    <link rel="icon" type="image/x-icon" href="main_icon.png">
    <link rel="stylesheet" href="htmlcoursestyle.css">
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body class="back-ground ">
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
        <h1>HTML Basics</h1>
    </header>
    <section>
        <aside>
            <h2>HTML Tutorial</h2>
            <ul>
                <li><a href="#" onclick="showContent('introduction')">Introduction</a></li>
                <li><a href="#" onclick="showContent('editors')">Editors</a></li>
                <li><a href="#" onclick="showContent('basics')">Basics</a></li>
                <li><a href="#" onclick="showContent('elements')">Elements</a></li>
                <li><a href="#" onclick="showContent('attributes')">Attributes</a></li>
                <li><a href="#" onclick="showContent('headings')">Headings</a></li>
                <li><a href="#" onclick="showContent('paragraphs')">Paragraphs</a></li>
                <li><a href="#" onclick="showContent('formatting')">Formatting</a></li>
                <li><a href="#" onclick="showContent('styles')">Styles</a></li>
                <li><a href="#" onclick="showContent('links')">Links</a></li>
                <li><a href="#" onclick="showContent('tables')">Tables</a></li>
            </ul>
        </aside>

        <article id="introduction">  
            <h2> INTRODUCTION </h2>
            <div class="course_button">
                <a href="#"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('editors')"><button class="nxt_but">Next ❯</button></a>
                </div>
            <br><hr><br>
            <p>HTML is the standard markup language for creating Web pages.</p><br>
            <hr>
            <br>
            <h2> What is HTML? </h2>
            <br>
            <ul>
              <li>HTML stands for Hyper Text Markup Language</li>
              <li>HTML is the standard markup language for creating Web pages</li>
              <li>HTML describes the structure of a Web page</li>
              <li>HTML consists of a series of elements</li>
              <li>HTML elements tell the browser how to display the content</li>
              <li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li>
            </ul>
            <br><br>

            <hr><br>
            <h2>A Simple HTML Document</h2>
            <h3>Example</h3>
            <br>
            <img src="img/example.jpg" alt="Example Code">

            <br><br><br>
            <h3>Example Explained</h3>
            <br>                                           
            <li>The <strong>&lt;!DOCTYPE html&gt;</strong> declaration defines that this document is an HTML5 document.</li>
            <li>The <strong>&lt;html&gt;</strong> element is the root element of an HTML page.</li>
            <li>The <strong>&lt;head&gt;</strong> element contains meta information about the HTML page.</li>
            <li>The <strong>&lt;title&gt;</strong> element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab).</li>
            <li>The <strong>&lt;body&gt;</strong> element defines the document's body, and is a container for all the visible contents, such as<br>
                headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
            <li>The &lt;h1&gt; element defines a large heading.</li>
            <li>The &lt;p&gt; element defines a paragraph.</li><br>

            <hr><br>

            <h2>What is an HTML Element?</h2>
            <p>An HTML <strong>element</strong> is defined by a start tag, some content, and an end tag:</p><br><br>

            <h3>&lt;tagname&gt; Content goes here... &lt;tagname&gt;</h3><br><Br>
            <p>HTML element is everything from the start tag to the end tag:</p><br><br>

            <h3>
            &lt;h1&gt;My First Heading&lt;/h1&gt;<br><br>
            &lt;p&gt;My first paragraph.&lt;/p&gt;
            <br><br><br>
            <img src="img/105.jpg" alt="">
            </h3>
            <div class="example_table">
            <table>
                    <tr>
                        <th>Start tag</th>
                        <th>Element content</th>
                        <th>End tag</th>
                    </tr>
                    <tr>
                        <td>&lt;h1&gt;</td>
                        <td>My First Heading</td>
                        <td>&lt;/h1&gt;</td>
                    </tr>
                    <tr>
                        <td>&lt;p&gt;</td>
                        <td>My first paragraph.</td>
                        <td>&lt;/p&gt;</td>
                    </tr>
                    <tr>
                        <td>&lt;br&gt;</td>
                        <td>none</td>
                        <td>none</td>
                    </tr>
            </table>
            </div>
            <p><strong>Note:</strong> Some HTML elements have no content (like the &lt;br&gt; element).
                These elements are called empty elements. Empty elements do not have an end tag!</p><br>
        <hr><br><br>
        <hr><br><br>
        
        <h2>Web Browsers</h2>
        <p>The purpose of a web browser (Chrome, Edge, Firefox, Safari) is to read HTML documents and display them correctly.<br>
        A browser does not display the HTML tags, but uses them to determine how to display the document:</p>
        <br>
        <img src="img/MY FIRST HEADING.jpg" alt="My_Example">
        <br><br>
        <hr><br>
        <h2>HTML Page Structure</h2>
        <p>Below is a visualization of an HTML page structure:</p>
        <br>
        <img src="img/page.jpg" alt="My_Example2">
        <br><Br>
        <p><strong>Note:</strong> The content inside the &lt;body&gt; section will be displayed in a browser. The content inside the &lt;title&gt; element will be shown in the browser's title bar or in the page's tab.</p>
        <br><br>
        <hr><br>

        <h2>HTML History</h2>
        <p>Since the early days of the World Wide Web, there have been many versions of HTML:</p>
        <br>
        <img src="img/year.jpg" alt="My_Example3">
        <br>
        <br><hr><br>
        <p>This tutorial follows the latest HTML5 standard.</p>
        <br>
        <div class="course_button">
        <a href="#"><button class="prv_but">❮ Previous</button></a>
        <a href="#" onclick="showContent('editors')"><button class="nxt_but">Next ❯</button></a>
        </div>
        <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
    </article>


        <article id="editors" >
            <h2>HTML EDITORS</h2>

            <div class="course_button">
                <a href="#" onclick="showContent('introduction')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('basics')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br><hr><br>
            <p>A simple text editor is all you need to learn HTML.</p>
            <br><hr><br>

            <h2>Learn HTML Using Notepad or TextEdit</h2>
            <p>Web pages can be created and modified by using professional HTML editors.<br><br>
            However, for learning HTML we recommend a simple text editor like Notepad (PC) or TextEdit (Mac)..<br><br>
            We believe that using a simple text editor is a good way to learn HTML..<br><br>
            Follow the steps below to create your first web page with Notepad or TextEdit.</p>
            <br><br>

            <h2>Step 1: Open Notepad (PC)</h2>
            <p><strong>Windows 8 or later:</p></strong><br>
            <p>Open the <Strong>Start Screen</Strong> (the window symbol at the bottom left on your screen).<Strong>Type Notepad.</Strong>
            <br><br>
            <Strong>Windows 7 or earlier:</Strong>
            <br><br>
            >Open <strong>Start > Programs > Accessories > Notepad</p></strong>

            <br><hr><br>
            <h2>Step 1: Open TextEdit (Mac)</h2>
            <p>Open <strong>Finder > Applications > TextEdit</strong><br><br>

            Also change some preferences to get the application to save files correctly. In <strong>Preferences > Format ></strong> 
            choose <strong>"Plain Text"</strong><br><br>

            Then under "Open and Save", check the box that says "Display HTML files as HTML code instead of formatted text"<br><br>

            <strong>Then open a new document to place the code.</p></strong>
            <br><hr><br>
            <h2>Step 2: Write Some HTML</h2>
            <p>Write or copye following HTML th code into Notepad:</p>
            <br>
            <img src="img/00.jpg" alt="Write Some HTML Example">
            <br><br>
            <img src="img/000.jpg" alt="Example Code">
            <br>

            <br><hr><br>
            <h2>Step 3: Save the HTML Page</h2>
            <p>Save the file on your computer. Select <strong>File > Save as</strong> in the Notepad menu.<br><br>
            Name the file <Strong>"index.htm"</Strong> and set the encoding to <strong>UTF-8</strong> 
            (which is the preferred encoding for HTML files).</p>
            <br>
            <img src="img/htnl.jpg" alt="Saving HTML File"><br><br>
            <p><strong>Tip: </strong>You can use either .htm or .html as file extension. There is no difference; it is up to you.</p>

            <br><hr><br>
            <h2>Step 4: View the HTML Page in Your Browser</h2> 
            <p>Open the saved HTML file in your favorite browser (double click on the file, or right-click - and choose "Open with").<br><br>
            The result will look much like this:</p><br>
            <img src="img/htnl1.jpg" alt="My First Paragraph">
            <br><br><br>

            <div class="course_button">
                <a href="#" onclick="showContent('introduction')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('basics')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
        </article>


        <article id="basics">
            <h2>HTML BASIC EXAMPLES</h2>
            <div class="course_button">
                <a href="#" onclick="showContent('editors')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('elements')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br><hr><br>
            <p>In this chapter we will show some basic HTML examples.<br><br>
                Don't worry if we use tags you have not learned about yet.</p>
            
                <br><hr><br>
            <h2>HTML Documents</h2>
            <br>
            <p>All HTML documents must start with a document type declaration: <strong>&lt;!DOCTYPE html&gt;.</strong> <br><br>
                The HTML document itself begins with <strong>&lt;html&gt;</strong> and ends with <strong>&lt;/html&gt;.</strong> <br><br>
                The visible part of the HTML document is between <strong>&lt;body&gt;</strong> and <strong>&lt;/body&gt;.</strong> </p><br><br>
            <img src="img/etonayon.jpg" alt="">
            <br><br><hr><br>

            <h2>The &lt;!DOCTYPE&gt; Declaration</h2>
            <p>The <strong>&lt;!DOCTYPE&gt;</strong> declaration represents the document type, and helps browsers to display web pages correctly. <br><br>
                It must only appear once, at the top of the page (before any HTML tags). <br><br>
                The <strong>&lt;!DOCTYPE&gt;</strong> declaration is not case sensitive. <br><br>
                The <strong>&lt;!DOCTYPE&gt;</strong> declaration for HTML5 is:</p><br>
                <img src="img/docc.jpg " alt="">
                <br><br>
                <br><hr><br>

                <h2>HTML Headings</h2>
                <p>HTML headings are defined with the <strong>&lt;h1&gt;</strong> to <strong>&lt;h6&gt;</strong> tags.<br><br>
                <strong>&lt;h1&gt;</strong> defines the most important heading. <strong>&lt;h6&gt;</strong> defines the least important heading: </p><br>
                <img src="img/this is.jpg" alt="">
                <br>
                <br><hr><br>
                <br><hr><br>

                <h2>HTML Paragraphs</h2>
                <p>HTML paragraphs are defined with the <strong>&lt;p&gt;</strong> tag:</p><br>
                <img src="img/100.jpg" alt="">
                <br>
                <br><hr><br>

                <h2>HTML Links</h2>
                <p>HTML links are defined with the <strong>&lt;a&gt;</strong> tag:</p><br>
                <img src="img/101.jpg" alt="">
                <br><br>
                <p>The link's destination is specified in the <strong>href</strong> attribute.<br><br>
                Attributes are used to provide additional information about HTML elements.<br><br>
                You will learn more about attributes in a later chapter.</p>
                <br><hr><br>

                <h2>HTML Images</h2>
                <p>HTML images are defined with the <strong>&lt;img&gt;</strong> tag.<br><br>
                The source file (<strong>src</strong>), alternative text (<strong>alt</strong>), <strong>width</strong>, and <strong>height</strong> are provided as attributes:</p><br>
                <img src="img/102.jpg" alt="">
                <br><br>
                <br><hr><br>

                <h2>How to View HTML Source</h2>
                <p>Have you ever seen a Web page and wondered "Hey! How did they do that?"</p>
                <br>
                <h3>View HTML Source Code:</h3>
                <p>Click CTRL + U in an HTML page, or right-click on the page and select "View Page Source". 
                    This will open a new tab containing the HTML source code of the page.</p>
                    <br>
                <h2>Inspect an HTML Element:</h3>
                <p>Right-click on an element (or a blank area), and choose "Inspect" to see what elements are made up of (you will see both the HTML and the CSS). 
                    You can also edit the HTML or CSS on-the-fly in the Elements or Styles panel that opens.</p><br><Br>
                <div class="course_button">
                    <a href="#" onclick="showContent('editors')"><button class="prv_but">❮ Previous</button></a>
                    <a href="#" onclick="showContent('elements')"><button class="nxt_but">Next ❯</button></a>
                </div>
                <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
        </article>


        <article id="elements" >
            <H2>HTML ELEMENTS</H2>
            <div class="course_button">
                <a href="#" onclick="showContent('basics')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('attributes')"><button class="nxt_but">Next ❯</button></a>
            </div>
            
            <br><hr><br>
            <p>An HTML element is defined by a start tag, some content, and an end tag.</p>
            <br><hr><br>
            <h2>HTML Elements</h2>
            <p>The HTML <strong>element</strong> is everything from the start tag to the end tag:</p>
            <br><br>
            <p> <strong>&lt;tagname&gt;</strong> <strong>Content goes here...</strong> <strong>&lt;/tagname&gt;</strong> </p>
            <h2>Content goes here</h2>
            <h3>Examples of some HTML elements:</h3>
            <br>
            <p> <strong>&lt;h1&gt;</strong> <strong>MY FIRST HEADING</strong> <strong>&lt;/h1&gt;</strong> </p>
            <br><br>
            <p> <strong>&lt;p&gt;</strong>  <strong> My First Paragraph.</strong> <strong>&lt;/p&gt;</strong> </p>
            <br><br>
           
            <img src ="img/Start Tag, End Tag.jpg" alt="Tags">
            <br><br>

            <p><strong>Note:</strong> Some HTML elements have no content (like the &lt;br&gt; element). These elements are called empty elements. Empty elements do not have an end tag!</p>
            <br>
            <div>
            <h2>Nested HTML ELEMENTS</h2>
            </div>
            <p>HTML elements can be nested (this means that elements can contain other elements).</p>
            <br>
            <p>All HTML documents consist of nested HTML elements.</p>
            <br>
            
            <p>The following example contains four HTML elements</p>
            <br>
            <p> <strong>(&lt;html&gt;, &lt;body&gt; , &lt;h1&gt;  and  &lt;p&gt;):</strong> </p>
            <BR><BR>
            
            <img src ="img/example.jpg" alt="pic">
            <br><br>
            <br><br><br>
            
            <h2>Example Explained</h2>

            <p> The <strong>&lt;html&gt;</strong> element is the root element and it defines the whole HTML document.</p>
            <br>
            <p>It has a start tag <strong>&lt;html&gt;</strong> and an end tag <strong>&lt;/html&gt;.</strong> </p>
            <br>
            <p>Then, inside the <strong>&lt;html&gt;</strong> element there is a <strong>&lt;body&gt;</strong> element:</p>
            <br>
            <img src="img/continue.jpg" alt="ediwow">
            <br><br>
            <p>The <strong>&lt;body&gt;</strong> element defines the document's body.</p>
            <br>
            <p>It has a start tag <strong>&lt;body&gt;</strong> and an end tag <strong>&lt;/body&gt;.</strong> </p>
            <br>
            <p>Then, inside the <strong>&lt;body&gt;</strong> element there are two other elements: <strong>&lt;h1&gt;</strong> and <strong>&lt;p&gt;</strong> : </p>
            <br>
            <img src="img/hp.jpg" alt="con">
            <br><br>
            <p>The <strong>&lt;h1&gt;</strong> element defines a heading.</p>
            <br>
            <p>It has a start tag <strong>&lt;h1&gt;</strong> and an end tag <strong>&lt;/h1&gt;</strong>
            </p>
            <br>
            <img src="img/Heading.jpg" alt="it's the heading">
            <br><br>
            <p>The <strong>&lt;p&gt;</strong> element defines a paragraph.</p>
            <br>
            <p>It has a start tag <strong>&lt;p&gt;</strong> and an end tag <strong>&lt;/p&gt;</strong>:</p>
            <br>

            <img src="img/paragraph.jpg" alt="Malaking P"><br>
            <br><hr><br>
            <br><hr><br>

            <h2>Never Skip the End Tag </h2>
            <br>
            <p>Some HTML elements will display correctly, even if you forget the end tag:</p>
            <br>
            <img src="img/NSET.jpg" alt="endtag">
            <br><br>
            <strong>However, never rely on this! Unexpected results and errors may occur if you forget the end tag!</strong><br>
            <br><hr><br>
            <h2>Empty HTML Elements</h2>
            <br>
            <p>HTML elements with no content are called empty elements.</p>
            <br>
            <p>The &lt;br&gt; tag defines a line break, and is an empty element without a closing tag:</p>
            <br>
            <img src="img/br.jpg" alt="break">
            <br>
            <br><hr><br>
            <br>
            <h2>HTML is Not Case Sensitive </h2> 
            <p>HTML tags are not case sensitive: &lt;P&gt; means the same as &lt;p&gt;</p>
            <br>
            <p>The HTML standard does not require lowercase tags, but W3C <strong>recommend</strong> 
                lowercase in HTML, and <strong>demands</strong> lowercase for stricter document types like XHTML.</p>
            <br><br><br>
            <p>At W3Schools we always use lowercase tag names.</p>
            <br><br>
            <br><hr><br>
            <h2>HTML Tag Reference</h2>
            <br>
            <p>W3Schools' tag reference contains additional information 
                about these tags and their attributes.</p>
            <br>
            <img src="img/Tag.jpg" alt="taagg">
            <br><br><br>
        <div class="course_button">
            <a href="#" onclick="showContent('basics')"><button class="prv_but">❮ Previous</button></a>
            <a href="#" onclick="showContent('attributes')"><button class="nxt_but">Next ❯</button></a>
        </div>
        <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
        </article>


        <article id="attributes" >
            <h2>HTML ATTRIBUTES</h2>
           <div class="course_button">
            <a href="#" onclick="showContent('elements')"><button class="prv_but">❮ Previous</button></a>
            <a href="#" onclick="showContent('headings')"><button class="nxt_but">Next ❯</button></a>
        </div>

           <br><hr><br>
           <p>HTML attributes provide additional information about HTML elements.</p>
           <br><hr><br>
           <h2>HTML Attributes</h2>
           <p>&#8594; All HTML elements can have <strong>attributes</strong> </p>
           <br>
           <p>&#8594; Attributes provide <strong>additional information</strong> about elements </p>
           <br>
           <p>&#8594; Attributes are always specified in the <strong>start tag</strong> </p>
           <br>
           <p>&#8594; Attributes usually come in name/value pairs like: <strong>name="value"</strong> </p>
           <br>
           <br><hr><br>
           <h2>The href Attribute</h2>
           <p>The &lt;a&gt; tag defines a hyperlink. The href 
              attribute specifies the URL of the page the link goes to:</p>
            <br>
            <img src="img/href.jpg" alt="edihref">
            <br><br>
            <br><hr><br>
            <h2>The src Attribute</h2>
            <br>
            <p>The &lt;img&gt; tag is used to embed an image in an HTML page.</p>
            <p>&emsp;The src attribute specifies the path to the image to be displayed:</p>
            <br>
            <img src="img/girl.jpg" alt="alammobagirl">
            <br><br>
            <br><hr><br>
            <h2>The width and height Attributes</h2>
            <p>The &lt;img&gt; tag should also contain the width and 
            height attributes,</p> 
            <p>&emsp;which specify the width and height of the image (in pixels):</p>
            <br>
            <img src="img/1111.jpg" alt="edi1">
            <br>
            <br><hr><br>
            <h2>The alt Attribute</h2>
            <br>
            <p>The required alt attribute for the &lt;img&gt; tag specifies an alternate text for an image, if the image for some</p>
            <p>reason cannot be displayed. This can be due to a slow connection, or an error in the src attribute, or if the</p> 
            <p>user uses a screen reader.</p>
            <br>
            <img src="img/girljack.jpg" alt="jacket">
            <br><br>
            <img src="img/jacketlang.jpg" alt="jacket2">
            <br><br>
            <p>You will learn more about images in our HTML Images chapter. </p>
        
            <br><hr><br>
            <br><hr><br>
            <h2>The style Attribute</h2>
            <br>
            <p>The style attribute is used to add styles to an element, such as color, font, size, and more.</p>
            <br>
            <img src="img/red.jpg" alt="pula">
            <br><br>
            <p>You will learn more about styles in our HTML Styles chapter. You can do it!</p>
            <br><hr><br>
            <h2>The lang Attribute</h2>
            <br>
            <p>You should always include the lang attribute inside the &lt;html&gt; tag, to declare the language of the Web page. This is meant to assist search engines and browsers.</p>
            <br>
            <p>The following example specifies English as the language:</p>
            <br>
            <img src="img/en.jpg" alt="en-diwow">
            <br><br>
            <p>Country codes can also be added to the language code in the lang attribute. So, the first two characters define the language of the HTML page, and the last two characters define the country.</p>
            <br>
            <p>The following example specifies English as the language and United States as the country:</p>
            <br>
            <img src="img/en-us.jpg" alt="enustasia">
            <br>
            <br><hr><br>
            <h2>The title Attribute</h2>
            <br>
            <p>The title attribute defines some extra information about an element.</p>
            <br>
            <p>The value of the title attribute will be displayed as a tooltip when you mouse over the element:</p>
            <br>
            <img src="img/tooltip.jpg" alt="tool">
            <br>
            <br><hr><br>
            <h2>We Suggest: Always Use Lowercase Attributes</h2>
            <p>The HTML standard does not require lowercase attribute names.</p>
            <br>
            <p>The title attribute (and all other attributes) can be written with uppercase or lowercase like title or TITLE.</p>
            <br>    
            <p>However, IlearnHub <strong>recommends</strong> lowercase attributes in HTML, and <strong>demands</strong> lowercase attributes for stricter document types like XHTML.</p>
            <br><br><br>
            <p> <strong> At IlearnHub we always use lowercase attribute names.</strong> </p>
            <br><br>
            <br><hr><br>
            <h2>We Suggest: Always Quote Attribute Value</h2>
            <br>
            <p>The HTML standard does not require quotes around attribute values.</p>
            <br>
            <p>However, IlearnHub <strong>recommends</strong> quotes in HTML, and <strong>demands</strong> quotes for stricter document types like XHTML.</p>
            <br>
            <img src="img/good.jpg" alt="ok">
            <br>
            <img src="img/bad.jpg" alt="di-ok">
            <br>
            <p>Sometimes you have to use quotes. This example will not display the title attribute correctly, because it contains a space:</p>
            <br>
            <img src="img/about.jpg" alt="para-ano">
            <br><br>
            <p>At IlearnHub we always use quotes around attribute values.</p>
            <br><br>
            <br><hr><br>
            <h2>Single or Double Quotes?</h2>
            <br>
            <p>Double quotes around attribute values are the most common in HTML, but single quotes can also be used.</p>
            <br>
            <p>In some situations, when the attribute value itself contains double quotes, it is necessary to use single quotes:</p>
            <br>
            <img src="img/shotgun.jpg" alt="shotgundaw">
            <br>
            <p>or vise versa:</p>
            <br>
            <img src="img/shotgun2.jpg" alt="shotgundaw">
            <br>
            <br><hr><br>
            <h2>Chapter Summary</h2>
            <br>
            <p> &#8594; All HTML elements can have attributes </p>
            <br>
            <P> &#8594; The href attribute of &lt;a&gt; specifies the URL of the page the link goes to </P>
            <br>
            <p> &#8594; The src attribute of &lt;img&gt; specifies the path to the image to be displayed </p>
            <br>
            <p> &#8594; The width and height attributes of &lt;img&gt; provide size information for images </p>
            <br>
            <p> &#8594; The alt attribute of &lt;img&gt; provides an alternate text for an image </p>
            <br>
            <p> &#8594; The style attribute is used to add styles to an element, such as color, font, size, and more </p>
            <br>
            <p> &#8594; The lang attribute of the &lt;html&gt; tag declares the language of the Web page </p>
            <br>
            <p> &#8594; The title attribute defines some extra information about an element </p>
            <br>
            <br><hr><br>
            <h2>HTML Exercises</h2>
            <br>
            <img src="img/exercise.jpg" alt="exercisetuwingumaga">
            <br>
            <br><hr><br>
            <div class="course_button">
                <a href="#" onclick="showContent('elements')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('headings')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
        </article>


        <article id="headings" >
            <h2>HTML HEADINGS</h2>
            <div class="course_button">
                <a href="#" onclick="showContent('attributes')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('paragraphs')"><button class="nxt_but">Next ❯</button></a>
            </div>

            <br><hr><br>
            <p>HTML headings are titles or subtitles that you want to display on a webpage.</p>
            <br><hr><br>
            <img src="img/Heading1to6.jpg" alt="1to6">
            <br><hr><br>
            <h2>HTML Headings</h2>
            <br>
            <p>HTML headings are defined with the &lt;h1&gt; to &lt;h6&gt; tags.</p>
            <br>
            <p> &lt;h1&gt; defines the most important heading. &lt;h6&gt; defines the least important heading.</p>
            <br>
            <img src="img/ulo.jpg" alt="heading-daw">
            <br><br>
            <p> <strong>Note:</strong> Browsers automatically add some white space (a margin) before and after a heading.</p>
            <br><br>
            <br><hr><br>
            <h2>Headings Are Important</h2>
            <br>
            <p>Search engines use the headings to index the structure and content of your web pages.</p>
            <br>
            <p>Users of ten skim a page by its headings. It is important to use headings to show the document structure.
            <br><br>
            <p> &lt;h1&gt; headings should be used for main headings, followed by &lt;h2&gt; headings, then the less important &lt;h3&gt;, and so on.</p>
            <br><br><br>
            <p> <strong>Note:</strong> Use HTML headings for headings only. Don't use headings to make text <strong>BIG</strong> or <strong>bold.</strong> </p>
            <br><br>
            <br><hr><br>
            <h2>Bigger Headings</h2>
            <br>
            <p>Each HTML heading has a default size. However, you can specify the size for any heading with the style attribute, using the CSS font-size property:</p>
            <br>
            <img src="img/Heding1.jpg" alt="ulo-nga">
            <br>
            <br><hr><br>
            <br><hr><br>
            <h2>HTML Exercises</h2>
            <img src="img/london.jpg" alt="apin">
            <br>
            <br><hr><br>
            <h2>HTML Tag Reference</h2>
            <br>
            <p>IlearnHub tag reference contains additional information about these tags and their attributes.</p>
            <br>
            <img src="img/description.jpg" alt="basta">
            <br>
            <br><hr><br>

            <div class="course_button">
                <a href="#" onclick="showContent('attributes')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('paragraphs')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
        </article>


        <article id="paragraphs" >
            <h2>HTML PARAGRAPHS</h2>
            <div class="course_button">
                <a href="#" onclick="showContent('headings')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('formatting')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br><hr><br>
            <p>A paragraph always starts on a new line, and is usually a block of text.</p>
            <br><hr><br>
            <h2>HTML Paragraphs</h2>
            <p>The HTML <strong>&lt;p&gt;</strong> element defines a paragraph.</p>
            <br>
            <p>A paragraph always starts on a new line, and browsers automatically add some white space (a margin) before and after a paragraph.</p>
            <br>
            <img src="img/para.jpg" alt="para-saan">
            <br>
            <br><hr><br>
            <h2>HTML Display</h2>
            <br>
            <p>You cannot be sure how HTML will be displayed.</p>
            <br>
            <p>Large or small screens, and resized windows will create different results.</p>
            <br>
            <p>With HTML, you cannot change the display by adding extra spaces or extra lines in your HTML code.</p>
            <br>
            <p>The browser will automatically remove any extra spaces and lines when the page is displayed:</p>
            <br>
            <img src="img/ignores.jpg" alt="dipinapansin">
            <br>
            <br><hr><br>
            <br><hr><br>
            <h2>HTML Horizontal Rules</h2>
            <br>
            <p>The <strong>&lt;hr&gt;</strong> tag defines a thematic break in an HTML page, and is most often displayed as a horizontal rule.</p>
            <br>
            <p>The <strong>&lt;hr&gt;</strong> element is used to separate content (or define a change) in an HTML page:</p><br>

            <img src="img/horizon.jpg" alt="">
            <hr><br><br>
            <hr><br><br>
            <p>The <strong>&lt;hr&gt;</strong> tag is an empty tag, which means that it has no end tag.</p>
            <br><hr><br>
            <h2>HTML Line Breaks</h2>
            <br>
            <p>The HTML <strong>&lt;br&gt;</strong> element defines a line break.</p>
            <p>Use <strong>&lt;br&gt;</strong> if you want a line break (a new line) without starting a new paragraph:</p><br>
            <img src="img/horr.jpg" alt="">
            <hr><br><br>
            <hr><br><br>
            <p>The <strong>&lt;br&gt;</strong> tag is an empty tag, which means that it has no end tag.</p><br>
            <hr><br>
            <h2>The Poem Problem</h2>
            <br>
            <p>This poem will display on a single line:</p>
            <img src="img/poet.jpg" alt="">
            <hr><br><br>
            <hr><br><br>
            <h2>Solution - The HTML <strong>&lt;pre&gt;</strong> Element</h2>
            <br>
            <p>The HTML <strong>&lt;pre&gt;</strong> element defines preformatted text.</p><br>
            <p>The text inside a <strong>&lt;pre&gt;</strong> element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks:</p>
            <br>
            <img src="img/pre.jpg" alt="">
            <hr><br><br>
            <hr><br><br>
            <h2>HTML Exercises</h2>
            <br>
            <img src="img/exer.jpg" alt="">
            <br><br><hr>
            <br><br><hr>
            <h2>HTML Tag Reference</h2>
            <br>
            <p>W3Schools' tag reference contains additional information about HTML elements and their attributes.</p>
            <br>
            <img src="img/sheesh.jpg" alt="">
            <br>
            <br><hr><br>
            <div class="course_button">
                <a href="#" onclick="showContent('headings')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('formatting')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
            </article>


        <article id="formatting" >
                <h2>HTML TEXT FORMATTING</h2>
                <div class="course_button">
                    <a href="#" onclick="showContent('paragraphs')"><button class="prv_but">❮ Previous</button></a>
                    <a href="#" onclick="showContent('styles')"><button class="nxt_but">Next ❯</button></a>
                </div>
                <br>
                <p>HTML contains several elements for defining text with a special meaning.</p>
                <img src="fro.jpg" alt="">
                <br><br>
                <hr><br><br>
                <br><hr> <br>   
            <h2>HTML Formatting Elements</h2>
            <br>
            <p>Formatting elements were designed to display special types of text:</p><br>
            <ul class="formatting">
                <li><strong>&lt;b&gt;</strong> - Bold text</li>
                <li><strong>&lt;strong&gt;</strong> - Important text</li>
                <li><strong>&lt;i&gt;</strong> - Italic text</li>
                <li><strong>&lt;em&gt;</strong> - Emphasized text</li>
                <li><strong>&lt;mark&gt;</strong> - Marked text</li>
                <li><strong>&lt;small&gt;</strong> - Smaller text</li>
                <li><strong>&lt;del&gt;</strong> - Deleted text</li>
                <li><strong>&lt;ins&gt;</strong> - Inserted text</li>
                <li><strong>&lt;sub&gt;</strong> - Subscript text</li>
                <li><strong>&lt;sup&gt;</strong> - Superscript text</li>
            </ul>
            <br><hr><br>

            <h2>HTML &lt;b&gt; and &lt;strong&gt; Elements</h2>
            
            <br><hr><br>
            <p>The HTML &lt;b&gt; element defines bold text, without any extra importance.</p><br>
            <img src="img/bold.jpg" alt="">
            <br><br>
            <p>The HTML &lt;strong&gt; element defines text with strong importance. The content inside is typically displayed in bold.</p>
            <br><br>
            <img src="img/old.jpg" alt="">
            <br>
            <br><hr><br>
            <br><hr><br>
            <h2>HTML &lt;i&gt; and &lt;em&gt; Elements</h2>
            <br>
            <p>The HTML &lt;i&gt; element defines a part of text in an alternate voice or mood. The content inside is typically displayed in italic.</p>
            <br>
            <p>Tip: The &lt;i&gt; tag is often used to indicate a technical term, a phrase from another language, a thought, a ship name, etc.</p>
            <br><br>
            <img src="img/italic.jpg" alt="">
            <br>
            <br><hr><br>
            <p>The HTML &lt;em&gt; element defines emphasized text. The content inside is typically displayed in italic.</p>
            <br>
            <p>Tip: A screen reader will pronounce the words in &lt;em&gt; with an emphasis, using verbal stress.</p>
            <br>
            <br><hr><br>
            <img src="img/stre.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>HTML &lt;small&gt; Element</h2>
            <br>
            <p>The HTML &lt;small&gt; element defines smaller text:</p>
            <br>
            <img src="img/small.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>HTML &lt;mark&gt; Element</h2>
            <br>
            <p>The HTML &lt;mark&gt; element defines text that should be marked or highlighted:</p>
            <br>
            <img src="img/skir.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>HTML &lt;del&gt; Element</h2>
            <br>
            <p>The HTML &lt;del&gt; element defines text that has been deleted from a document. Browsers will usually strike a line through deleted text:</p>
            <br>
            <img src="img/del.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>HTML &lt;ins&gt; Element</h2>
            <br>
            <p>The HTML &lt;ins&gt; element defines a text that has been inserted into a document. Browsers will usually underline inserted text:</p>
            <br>
            <img src="img/dele.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>HTML &lt;sub&gt; Element</h2>
            <br>
            <p>The HTML &lt;sub&gt; element defines subscript text. Subscript text appears half a character below the normal line, and is sometimes rendered in a smaller font. Subscript text can be used for chemical formulas, like H2O:</p>
            <br>
            <img src="img/sub.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>HTML &lt;sup&gt; Element</h2>
            <br>
            <p>The HTML &lt;sup&gt; element defines superscript text. Superscript text appears half a character above the normal line, and is sometimes rendered in a smaller font. Superscript text can be used for footnotes, like WWW[1]:</p>
            <br>
            <img src="img/sup.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>HTML Text Formatting Elements</h2>
            <br>
            <img src="img/oms.jpg" alt="">
            <br><br>
            <p>For a complete list of all available HTML tags, visit our HTML Tag Reference.</p>
            <br><hr><br>





        <div class="course_button">
            <a href="#" onclick="showContent('paragraphs')"><button class="prv_but">❮ Previous</button></a>
            <a href="#" onclick="showContent('styles')"><button class="nxt_but">Next ❯</button></a>
        </div>
        <br><hr><br>
        <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
         </article>


         <article id="styles">
            <h2>HTML STYLES</h2>
            <div class="course_button">
                <a href="#" onclick="showContent('formatting')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('links')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br><hr><br>
        <p>The HTML style attribute is used to add styles to an element, such as color, font, size, and more.</p>
        <br>
            <img src="img/sty.jpg" alt="">
            <br>
        <br><hr><br>
        <h2>The HTML Style Attribute</h2>
            <br>
        <p>Setting the style of an HTML element, can be done with the style attribute.</p>
            <br>
            <p>The HTML style attribute has the following syntax:</p>
            <br>
            <img src="img/ty.jpg" alt="">
            <br>
            <br>
            <p>The property is a CSS property. The value is a CSS value.</p>
            <br><br>
            <p>You will learn more about CSS later in this tutorial.</p>
            <br>
            <br><hr><br>
            <h2>Background Color</h2>
            <br>
            <p>The CSS background-color property defines the background color for an HTML element.</p>
            <br>
            <img src="img/bacolor.jpg" alt="">
            <br><br>
            <img src="img/exa.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>Text Color</h2>
            <br>
            <p>The CSS color property defines the text color for an HTML element:</p>
            <br>
            <img src="img/tex.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>Fonts</h2>
            <br>
            <p>The CSS font-family property defines the font to be used for an HTML element:</p>
            <br>
            <img src="img/font.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>Text Size</h2>
            <br>
            <p>The CSS font-size property defines the text size for an HTML element:</p>
            <br>
            <img src="img/tesy.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>Text Alignment</h2>
            <br>
            <p>The CSS text-align property defines the horizontal text alignment for an HTML element:</p>
            <br>
            <img src="img/shi.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>Chapter Summary</h2>
            <br>
            <ul>
                <li>Use the style attribute for styling HTML elements</li>
                <li>Use background-color for background color</li>
                <li>Use color for text colors</li>
                <li>Use font-family for text fonts</li>
                <li>Use font-size for text sizes</li>
                <li>Use text-align for text alignment</li>
            </ul>
            <br>
            <br><hr><br>



            <div class="course_button">
                <a href="#" onclick="showContent('formatting')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('links')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>

        </article>


        <article id="links">
            <h2>HTML LINKS</h2>
            <div class="course_button">
                <a href="#" onclick="showContent('styles')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('tables')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br>
            <br><hr><br>
            <p>Links are found in nearly all web pages. Links allow users to click their way from page to page.</p>
            <br><hr><br>
            <br>
            <h2>HTML Links - Hyperlinks</h2>
            <br>
            <p>HTML links are hyperlinks.</p>
            <br>
            <p>You can click on a link and jump to another document.</p>
            <br>
            <p>When you move the mouse over a link, the mouse arrow will turn into a little hand.</p>
            <br>
            <br>
            <p>Note: A link does not have to be text. A link can be an image or any other HTML element!</p>
            <br>
            <br><hr><br>
            <h2>HTML Links - Syntax</h2>
            <br>
            <p>The HTML &lt;a&gt; tag defines a hyperlink. It has the following syntax:</p>
            <br>
            <img src="img/syn.jpg" alt="">
            <br>
            <p>The most important attribute of the &lt;a&gt; element is the href attribute, which indicates the link's destination.</p>
            <br>
            <p>The link text is the part that will be visible to the reader.</p>
            <br>
            <p>Clicking on the link text, will send the reader to the specified URL address.</p>
            <br>
            <img src="img/hyp.jpg" alt="">
            <br><br>
            <p>By default, links will appear as follows in all browsers:</p>
            <br>
            <ul>
                <li>An unvisited link is underlined and blue</li>
                <li>A visited link is underlined and purple</li>
                <li>An active link is underlined and red</li>
            </ul>
            <br>
            <p>Tip: Links can of course be styled with CSS, to get another look!</p>
            <br>
            <br><hr><br>
            <h2>HTML Links - The target Attribute</h2>

            <br>
            <p>By default, the linked page will be displayed in the current browser window. To change this, you must specify another target for the link.</p>
            <br>
            <p>The target attribute specifies where to open the linked document.</p>
            <br>
            <p>The target attribute can have one of the following values:</p>
            <br>
            <ul>
                <li>_self - Default. Opens the document in the same window/tab as it was clicked</li>
                <li>_blank - Opens the document in a new window or tab</li>
                <li>_parent - Opens the document in the parent frame</li>
                <li>_top - Opens the document in the full body of the window</li>
            </ul>
            <br>
            <img src="img/tar.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>Absolute URLs vs. Relative URLs</h2>
            <br>
            <p>Both examples above are using an absolute URL (a full web address) in the href attribute.</p>
            <br>
            <p>A local link (a link to a page within the same website) is specified with a relative URL (without the "https://www" part):</p>
            <br>
            <img src="img/url.jpg" alt="">
            <br>
            <br><hr><br>
            <br>
            <br><hr><br>
            <h2>HTML Links - Use an Image as a Link</h2>
            <br>
            <p>To use an image as a link, just put the &lt;img&gt; tag inside the &lt;a&gt; tag:</p>
            <br>
            <img src="img/ht.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>Link to an Email Address</h2>
            <br>
            <p>Use mailto: inside the href attribute to create a link that opens the user's email program (to let them send a new email):</p>
            <br>
            <img src="img/maito.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>Button as a Link</h2>
            <br>
            <p>To use an HTML button as a link, you have to add some JavaScript code.</p>
            <br>
            <p>JavaScript allows you to specify what happens at certain events, such as a click of a button:</p>
            <br>
            <img src="img/def.jpg" alt="">
            <br><br>
            <p>Tip: Learn more about JavaScript in our JavaScript Tutorial.</p>
            <br>
            <br><hr><br>
            <h2>Link Titles</h2>
            <br>
            <p>The title attribute specifies extra information about an element. The information is most often shown as a tooltip text when the mouse moves over the element.</p>
            <br>
            <img src="img/tit.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>Chapter Summary</h2>
            <br>
            <ul>
                <li>Use the &lt;a&gt; element to define a link&lt;/li&gt;
                <li>Use the href attribute to define the link address</li>
                <li>Use the target attribute to define where to open the linked document&lt;/li&gt;
                <li>Use the &lt;img&gt; element (inside &lt;a&gt;) to use an image as a link&lt;/li&gt;
                <li>Use the mailto: scheme inside the href attribute to create a link that opens the user's email program&lt;/li&gt;
            </ul>
            <br>
            <br><hr><br>
            <h2>HTML Link Tags</h2>
            <br>
            <img src="img/taq.jpg" alt="">
            <br>
            <br><hr><br>
         

            <div class="course_button">
                <a href="#" onclick="showContent('styles')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('tables')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>

        </article>


        <article id="tables">
            <h2>HTML TABLES</h2>
            <div class="course_button">
                <a href="#" onclick="showContent('links')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('introduction')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br>
            <br><hr><br>
            <p>HTML tables allow web developers to arrange data into rows and columns.</p>
            <br><hr><br>
            <br>
            <img src="img/les.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>Define an HTML Table</h2>
            <br>
            <p>A table in HTML consists of table cells inside rows and columns.</p>
            <br>
            <img src="img/tr.jpg" alt="">
            <br>
            <br><hr><br>
            <h2>Table Cells</h2>
            <br>
            <p>&lt;p&gt;Each table cell is defined by a  &lt;td&gt; and a &lt;/td&gt; tag. &lt;/td&gt;</p>
            <br>
            <p>("td") stands for table data.</p>
            <br><br>
            <p>Everything between &lt;td&gt;  and &lt;/td&gt; are the content of the table cell.</p>
            <br>
            <img src="img/tra.jpg" alt="">
            <br><br>
            <p>Note: A table cell can contain all sorts of HTML elements: text, images, lists, links, other tables, etc.</p>
            <br>
            <br><hr><br>
            <br><hr><br>
            <h2>Table Rows</h2>
            <br>
           <p> Each table row starts with a &lt;td&gt; and ends with a &lt;/td&gt; tag.</p>
           <br>
           <p>("tr") stands for table row.</p>
           <br> 
           <img src="img/his.jpg" alt="">
            <br><br>
            <p>You can have as many rows as you like in a table; just make sure that the number of cells are the same in each row.</p>
            <br><br><br>
            <p>Note: There are times when a row can have less or more cells than another. You will learn about that in a later chapter.</p>
            <br>
            <br><hr><br>
            <br>
            <br>
            <h2>Table Headers</h2>
            <br>
            <p>Sometimes you want your cells to be table header cells. In those cases use the &lt;th&gt; tag instead of the &lt;td&gt; tag:</p>
            <br><br><br>
            <p>("th") stands for table header.</p>
            <br><br>
            <img src="img/tdd.jpg" alt>
            <br>
            <p>By default, the text in &lt;th&gt; elements are bold and centered, but you can change that with CSS.</p>
            <br>
            <hr>
            <br>
            <h2>HTML Exercises</h2>
            <br><br><br>
            <img src="img/jillsmith.jpg" alt="">
            <br><br>
            <br><hr><br>
            <h2>HTML Table Tags</h2>
            <br>
            <img src="img/tfoot.jpg" alt="">
            <br><br><br>
            <br><hr><br>
            <br><br><br>





            <div class="course_button">
                <a href="#" onclick="showContent('links')"><button class="prv_but">❮ Previous</button></a>
                <a href="#" onclick="showContent('introduction')"><button class="nxt_but">Next ❯</button></a>
            </div>
            <br>
            <div style="margin: auto; margin-left: 0%;">
            <button onclick="scrollToTop()" id="backToTopBtn">Back to Top</button>
            </div>
        </article>
    </section>

    

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
            articles.forEach(function(article) {
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

</body>
</html>