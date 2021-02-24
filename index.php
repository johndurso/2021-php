<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/mauiwaui.css">
    <title>Providing web experiences for the masses | johndurso.co</title>
    <meta name="description" content="Modern and accessbile web design and development by John Durso.">
</head>
<body data-theme="light">
    <nav role="navigation">
        <ul class="navigationMenu" aria-label="main navigation">
            <li><a href="#blog">blog</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#contact">contact</a></li>
            <li>
                <button class="js-theme-btn theme-button" onclick="setTheme()" onkeyup="setTheme()" tabindex="0">
                    <span class="moon">
                        <img src="assets/images/moon.svg" width="35" alt="Moon icon for dark mode">
                    </span>
                    <span class="sun">
                        <img src="assets/images/sun.svg" width="35" alt="Sun icon for light mode">
                    </span>
                </button>
            </li>
        </ul>
        <div class="john" id="john" role="button" aria-pressed="false" aria-label="press to open social media" onfocus="openMenu()" onblur="closeMenu()" onclick="toggleMenu()" tabindex="0">
            <img src="assets/images/globe.svg" alt="Icon of globe with magnifying glass" width="50">
        </div>
        <ul class="socialMenu" id="socialMenu" aria-label="social media navigation">
            <li>
                <a target="_blank" href="https://www.linkedin.com/in/johnkyrondurso/" title="Visit John Durso's LinkedIn profile" onfocus="openMenu()" onblur="closeMenu()" tabindex="0">
                    <img src="assets/images/linkedin.svg" alt="LinkedIn logo" title="Visit John Durso's LinkedIn!" width="40">
                    <span>LinkedIn</span>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://github.com/johndurso" title="Visit John Durso's GitHub profile" onfocus="openMenu()" onblur="closeMenu()" tabindex="0">
                    <img src="assets/images/github.svg" alt="GitHub logo" title="Visit John Durso's GitHub!" width="40">
                    <span>GitHub</span>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://codepen.io/johndursodev" title="Visit John Durso's CodePen profile" onfocus="openMenu()" onblur="closeMenu()" tabindex="0">
                    <img src="assets/images/codepen.svg" alt="CodePen logo" title="Visit John Dursos' CodePen!" width="40">
                    <span>CodePen</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <header>
            <h1>
                John Durso
                <span>is a web designer that is passionate about providing a quality web experience for <br><strong><em>all</em></strong></span>
            </h1>    
            <img src="assets/images/accessibility.svg" alt="accessbility focused icon" width="120">            
        </header>
        <section id="blog">
            <h2>blog</h2>
            <ul class="recentBlogPosts" id="recentBlogPosts"></ul>
            <a href="/blog.php">view all blog posts ></a>
            <div id="allBlogPosts" style="display: none;"></div>
        </section>
        <section id="services">
            <h2>services</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae at ipsum voluptatum commodi voluptates voluptatibus dignissimos ut. 
                Quo non, porro at aliquid necessitatibus deleniti nisi! Modi delectus dolore beatae ipsam.</p>
            <ul>
                <li>
                    <h3>modern web design</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo blanditiis consequuntur pariatur nisi? Possimus magnam atque minus quisquam aspernatur voluptates, veritatis facere modi voluptate. Harum!</p>
                </li>
                <li>
                    <h3>website optimization</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates mollitia voluptatum dolorem itaque repellat fugit ipsam est omnis totam aspernatur, amet repudiandae similique incidunt consequatur.</p>
                </li>
                <li>
                    <h3>accessibility-focused design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus officia nesciunt illo doloremque ipsum recusandae nam voluptatum, commodi dolorem praesentium vel asperiores ipsam doloribus.</p>
                </li>
            </ul>
        </section>
        <section id="contact">
            <h2>reach out to me</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque doloremque tempora expedita harum, corporis vitae.</p>
            <form action="">
                <div>
                    <label for="firstName">
                        first name<br>
                        <input type="text" name="firstName" placeholder="hubert" required>
                    </label>
                </div>

                <div>
                    <label for="lastName">
                        last name<br>
                        <input type="text" name="lastName" placeholder="wolfeschlegelsteinhausenbergerdorff" required>
                    </label>
                </div>
                
                <div>
                    <label for="emailAddress">
                        email<br>
                        <input type="email" placeholder="your.email@protonmail.com" required>
                    </label>
                </div>
                
                <div>
                    <label for="reason">
                        reason for contact<br>
                        <select name="reason" id="reason" required>
                            <option value="">please select...</option>
                            <option value="design">web design</option>
                            <option value="optimization">website optimization</option>
                            <option value="accessibility">accessbility audit</option>
                            <option value="other">other</option>
                        </select>
                    </label>
                </div>

                <div>
                    <label for="message">
                        message<br>
                        <textarea name="message" id="message" placeholder="type your message here..." cols="30" rows="5"></textarea>
                    </label>
                </div>
                
                <div>
                    <input type="submit" name="submit" value="submit">
                </div>
                <div>
                    <input type="reset" name="clear" value="clear">
                </div>
            </form>
        </section>
    </div>

    <footer>
        <h4>johndurso.co / &copy; <time aria-label="aria-label attribute" title="title attribute current year"><script>document.write(new Date().getFullYear())</script></time></h4>
    </footer>

    <script src="/assets/js/blog-posts.js"></script>
    <script src="/assets/js/columbianGold.js"></script>
</body>
</html>