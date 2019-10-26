<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container type19">
    <div class="title"> <i class="fa fa-users"></i> Our Team</div>
        <div class="tabs">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="tabs-list">
                        <div class="active tab-active">
                            <a href="#tab1">
                                <img src="images/team1.jpg" alt="team1" class="img-responsive img-team">
                                <h4>Cleveland A. Whited</h4>
                                <p>Manager</p>
                            </a>
                        </div>
                        <div class="tab-active">
                            <a href="#tab2">
                                <img src="images/team2.jpg" alt="team1" class="img-responsive img-team">
                                <h4>Belex Adele</h4>
                                <p>CEO</p>
                            </a>
                        </div>
                        <div class="tab-active">
                            <a href="#tab3">
                                <img src="images/team3.jpg" alt="team1" class="img-responsive img-team">
                                <h4>Matthieu Gonzalez</h4>
                                <p>Employee</p>
                            </a>
                        </div>
                        <div class="tab-active">
                            <a href="#tab4">
                                <img src="images/team4.jpg" alt="team1" class="img-responsive img-team">
                                <h4>Hizo Akamara</h4>
                                <p>Secretary</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div id="tab1" class="tab active">
                        <article class="item-small-news" style="display: block;">
                            <div class="block-des"><i class="fa fa-pencil"></i>Description</div>
                            <img src="images/team1.jpg" alt="team1" class="img-responsive img-team">
                            <h3 class="name-ourteam">Cleveland A. Whited</h3>
                            <h4 class="pos-ourteam">Manager</h4>
                            <div class="infor-ourteam">Infor</div>
                            <p>Cleveland is a founding partner of the company. He was born and raised in New York, and has been a practicing Labor, Employment and Employee Benefit Funds lawyer for over 30 years.</p>
                            <p>During his career, he has represented labor unions in a broad array of industries such as the <br> construction trades, automotive, commercial airlines, commercial baking, trucking, and nursing <br> homes, just to name a few. </p>
                            <p>You must keep your name and reputation in pristine condition to get the best result for the client.</p>
                            <div class="follow-ourteam">Follow Him</div>
                            <div class="follow-icon">
                                <span class="follow-item"><i class="fa fa-facebook-square"></i></span>
                                <span class="follow-item"><i class="fa fa-skype"></i></span>
                                <span class="follow-item"><i class="fa fa-pinterest-square"></i></span>
                                <span class="follow-item"><i class="fa fa-google-plus-square"></i></span>
                                <span class="follow-item"><i class="fa fa-twitter-square"></i></span>
                            </div>
                            <a href="#"><button class="btn-ourteam">READ MORE</button></a>
                        </article>
                    </div>
                    <div id="tab2" class="tab">
                        <article class="item-small-news" style="display: block;">
                            <div class="block-des"><i class="fa fa-pencil"></i>Description</div>
                            <img src="images/team2.jpg" alt="team1" class="img-responsive img-team">
                            <h3 class="name-ourteam">Belex Adele</h3>
                            <h4 class="pos-ourteam">CEO</h4>
                            <div class="infor-ourteam">Infor</div>
                            <p>Belex is a founding partner of the company. He was born and raised in New York, and has been a practicing Labor, Employment and Employee Benefit Funds lawyer for over 30 years.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate deserunt perspiciatis expedita, soluta obcaecati maxime ipsam natus, deleniti dicta recusandae repellat sit ad laudantium, accusantium magni ipsum? Nam, architecto, repudiandae. </p>
                            <p>You must keep your name and reputation in pristine condition to get the best result for the client.</p>
                            <div class="follow-ourteam">Follow Her</div>
                            <div class="follow-icon">
                                <span class="follow-item"><i class="fa fa-facebook-square"></i></span>
                                <span class="follow-item"><i class="fa fa-skype"></i></span>
                                <span class="follow-item"><i class="fa fa-pinterest-square"></i></span>
                                <span class="follow-item"><i class="fa fa-google-plus-square"></i></span>
                                <span class="follow-item"><i class="fa fa-twitter-square"></i></span>
                            </div>
                            <a href="#"><button class="btn-ourteam">READ MORE</button></a>
                        </article>
                    </div>
                    <div id="tab3" class="tab">
                         <article class="item-small-news" style="display: block;">
                            <div class="block-des"><i class="fa fa-pencil"></i>Description</div>
                            <img src="images/team3.jpg" alt="team1" class="img-responsive img-team">
                            <h3 class="name-ourteam">Matthieu Gonzalez</h3>
                            <h4 class="pos-ourteam">Employee</h4>
                            <div class="infor-ourteam">Infor</div>
                            <p>Matthieu is a founding partner of the company. They were PhD students with doctorates at Stanford University in California.They merged into a private company on September 4, 1998</p>
                            <p>During his career, he has represented labor unions in a broad array of industries such as the <br> construction trades, automotive, commercial airlines, commercial baking, trucking, and nursing <br> homes, just to name a few.</p>
                            <p>You must keep your name and reputation in pristine condition to get the best result for the client.</p>
                            <div class="follow-ourteam">Follow Him</div>
                            <div class="follow-icon">
                                <span class="follow-item"><i class="fa fa-facebook-square"></i></span>
                                <span class="follow-item"><i class="fa fa-skype"></i></span>
                                <span class="follow-item"><i class="fa fa-pinterest-square"></i></span>
                                <span class="follow-item"><i class="fa fa-google-plus-square"></i></span>
                                <span class="follow-item"><i class="fa fa-twitter-square"></i></span>
                            </div>
                            <a href="#"><button class="btn-ourteam">READ MORE</button></a>
                        </article>
                    </div>
                    <div id="tab4" class="tab">
                         <article class="item-small-news" style="display: block;">
                            <div class="block-des"><i class="fa fa-pencil"></i>Description</div>
                            <img src="images/team4.jpg" alt="team1" class="img-responsive img-team">
                            <h3 class="name-ourteam">Hizo Akamara</h3>
                            <h4 class="pos-ourteam">Secretary</h4>
                            <div class="infor-ourteam">Infor</div>
                            <p>Hizo is a founding partner of the company. He was born and raised in New York, and has been a practicing Labor, Employment and Employee Benefit Funds lawyer for over 30 years.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate deserunt perspiciatis expedita, soluta obcaecati maxime ipsam natus, deleniti dicta recusandae repellat sit ad laudantium, accusantium magni ipsum? Nam, architecto, repudiandae. </p>
                            <p>You must keep your name and reputation in pristine condition to get the best result for the client.</p>
                            <div class="follow-ourteam">Follow Her</div>
                            <div class="follow-icon">
                                <span class="follow-item"><i class="fa fa-facebook-square"></i></span>
                                <span class="follow-item"><i class="fa fa-skype"></i></span>
                                <span class="follow-item"><i class="fa fa-pinterest-square"></i></span>
                                <span class="follow-item"><i class="fa fa-google-plus-square"></i></span>
                                <span class="follow-item"><i class="fa fa-twitter-square"></i></span>
                            </div>
                            <a href="#"><button class="btn-ourteam">READ MORE</button></a>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: block;">
        </div>
        <div class="jumbotron">
            <div class="row w-100">
                <div class="col-md-3">
                    <div class="card border-info mx-sm-1 p-3">
                        <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-user" aria-hidden="true"></span></div>
                        <div class="text-info text-center mt-3"><h4 class="mt-h4">Employees</h4></div>
                        <div class="text-info text-center mt-2"><h3 class="counter">64</h3></div>
                    </div>
                </div>
                <div class="col-md-3 col-counter">
                    <div class="card border-warning mx-sm-1 p-3">
                        <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
                        <div class="text-warning text-center mt-3"><h4 class="mt-h4">Product</h4></div>
                        <div class="text-warning text-center mt-2"><h3 class="counter">5000</h3></div>
                    </div>
                </div>
                <div class="col-md-3 col-counter">
                    <div class="card border-success mx-sm-1 p-3">
                        <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>
                        <div class="text-success text-center mt-3"><h4 class="mt-h4">View</h4></div>
                        <div class="text-success text-center mt-2"><h3 class="counter">9332</h3></div>
                    </div>
                </div>
                <div class="col-md-3 col-counter">
                    <div class="card border-danger mx-sm-1 p-3">
                        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                        <div class="text-danger text-center mt-3"><h4 class="mt-h4">Like Page</h4></div>
                        <div class="text-danger text-center mt-2"><h3 class="counter">346</h3></div>
                    </div>
                </div>
             </div>
        </div>
</div>

