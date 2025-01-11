<?php
    $navigation = "
    <nav>
        <ul>
            <li><a href='index.php?page=home'>Home</a>|</li>
            <li><a href='index.php?page=about'>About</a>|</li>
            <li><a class='active' href='index.php?page=contact'>Contact</a>|</li>
            <li><a href='index.php?page=projects'>Projects</a>|</li>                            
        </ul>
    </nav>
    ";
    $page = "
    <section class='form-sec'>
        <form id='contact'>
            <ul class='form-element-sec'>
                <li>
                    <label for='name'>Name: </label>
                    <input id='name' type='text' placeholder='Enter name......'>
                </li>
                <li>
                    <label for='name'>Password: </label>
                    <input id='email' type='password' placeholder='Enter email......' required>
                </li>
                <li>
                    <input class='form-cntrl-btn' type='submit' value='Submit'>
                    <input class='form-cntrl-btn' type='reset' value='Reset'>
                </li>
            </ul>
        </form>
    </section>
    ";
?>