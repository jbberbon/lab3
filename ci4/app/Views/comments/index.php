<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Christian Berbon</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" type="image/png" href="./img/jc.png">
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
    </header>

    <div class = "errors">
            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>
	</div>

    <div class="contact">
    <h1 class="contact-me">Contact Me</h1>
    <div class="contact-form-parent">
        <div class="contact-form-text">
            <p>For inquiries or feedback, fill out the form or you may send me an email. I'll respond right
                away.
            </p>
            <div class="email">
                <img src="./img/envelope.png">
                <a
                    href="mailto:jbberbon@student.apc.edu.ph?subject=Inquiry / Feedback">jbberbon@student.apc.edu.ph</a>
            </div>
            <div class="github">
                <img src="./img/github.png" alt="">
                <a href="github.com/jbberbon">github.com/jbberbon</a>
            </div>

        </div>
        <div class="contact-form-input">
            <h2>Leave a Message</h2>
            <form action="/lab3/ci4/public/comments" method="POST">
                <?= csrf_field() ?>
                <input type="text" class="form-text-input" name="name" placeholder="Name" required>
                <input type="email" class="form-text-input" name="email" placeholder="Email" required>
                <textarea type="text" class="form-text-input" name="message" rows="5" placeholder="Your Message"
                    required></textarea>
                <input type="submit" class="form-button" name="send" value="Send">
            </form>
        </div>
    </div>
</div>


<h1 class="sub-title"><?= esc($title) ?></h1>
    <br><br>
    
    <?php if (! empty($comments) && is_array($comments)): ?>

    <?php foreach ($comments as $comment): ?>

    <div class="portfolio-box">
        <h3><?= esc($comment['name']) ?></h3>
        <p><?= esc($comment['email']) ?></p><br>
        <p><?= esc($comment['message']) ?></p><br>
        </div>
    <br>

<?php endforeach ?>

<?php else: ?>

<h3>No Comments</h3>    

<p>Nothing to see here yet.</p>

<?php endif ?>




