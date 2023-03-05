<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Christian Berbon</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" type="image/png" href="..img/jc.png">
</head>

<body>
    <header>
        <nav id="nav-bar" class="header-nav">
            <div class="nav-logo">
                <a href="index.html"><img src="./img/jc.png" alt="jc logo" height="34" width="38"></a>
                <a href="index.html" class="jc">John Christian Berbon</a>
            </div>

            <ul class="nav-ul main-menu">
                <li class="header-li"><a href="index.html">Home</a></li>
                <li class="header-li"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">About Me</a></li>
                <li class="header-li"><a href="https://github.com/jbberbon">Projects</a></li>
                <li class="header-li"><a href="#">Contact</a></li>
            </ul>
        </nav>

        <div class="landing-page">
            <div class="hero-container">
                <img src="./img/hero.png" alt="hero shot" class="hero">
            </div>

            <article class="landing-text">
                <h1>Hi there! My name is<br>John Christian</h1>
                <p>Join me as I learn and grow my skills in HTML, CSS, and JavaScript.</p>
                <div class="landing-button-container">
                    <a href="#about" class="landing-button"></a>
                </div>
            </article>
        </div>
    </header>

    <main>
        <section id="about" class="about-me">
            <h1>About Me</h1>
            <p>I am an aspiring web developer from Tabaco City, Albay Province who is pursuing <br> Bachelor of Science
                in Information Technology to acquire industry-ready skills. However, to combat burnout, I keep myself
                busy with my more or less twenty cats, playing Clash of Clans, <br>casual photography, and strolling.
            </p>

            <ul class="interest-list">
                <li class="card">Cats Cats Cats</li>
                <li class="card">Strolling</li>
                <li class="card">Photography</li>
                <li class="card">Videography</li>
                <li class="card">Photo Editing</li>
                <li class="card">Video Editing</li>
            </ul>
        </section>

        <section class="gallery">
            <h1>Personal Gallery</h1>


        </section>
    </main>


    <footer>
        <div class="contact">
            <h1 class="contact-me">Contact Me</h1>
            <div class="contact-form-parent">
                <div class="contact-form-text">
                    <p>For inquiries or feedback, fill out the form or you may send me an email. I'll respond right
                        away.
                    </p>
                    <div class="email">
                        <img src="../img/envelope.png">
                        <a
                            href="mailto:jbberbon@student.apc.edu.ph?subject=Inquiry / Feedback">jbberbon@student.apc.edu.ph</a>
                    </div>
                    <div class="github">
                        <img src="../img/github.png" alt="">
                        <a href="github.com/jbberbon">github.com/jbberbon</a>
                    </div>

                </div>
                <div class="contact-form-input">
                    <h2>Leave a Message</h2>
                    <form action="connect.php" method="POST">
                        <input type="text" class="form-text-input" name="name" placeholder="Name" required>
                        <input type="email" class="form-text-input" name="email" placeholder="Email" required>
                        <textarea type="text" class="form-text-input" name="message" rows="5" placeholder="Your Message"
                            required></textarea>
                        <input type="submit" class="form-button" name="send" value="Send">
                    </form>
                </div>
            </div>
        </div>
        <p class="copyright">&copy; All Rights Reserved 2023</p>
    </footer>

    <script src="/app.js"></script>
</body>

</html>