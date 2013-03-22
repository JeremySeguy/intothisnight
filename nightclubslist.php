<?php
	require "php/config.php";

	$sql = "SELECT * FROM club WHERE city='San Francisco'";
	$result = mysql_query($sql);
	$num_fields = mysql_num_fields($result);
	echo $num_fields . "<br>";
	while($row = mysql_fetch_array($result)){
		echo $row['name'] . ",&emsp;&emsp;" . $row['city'];
		echo "<br />";
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,300italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
    	<div id="fb-root"></div>
			<script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=565531223459937";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <header id="header">
            <div class="container clearfix">
                    <div id="logo">
                        <img style="position: absolute; top: 18px; height: 40px;" src="img/itnlogo.png" alt="Into This Night ©">
                    </div>
                    <nav id="menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="expectations.html">Expectations</a></li>
                            <li><a href="nightclubslist.html">Night Clubs</a></li>
                            <li>
                                <a href="http://www.facebook.com/pages/Intothisnightcom/506587609387251?fref=ts" target="_blank">
                                    <img src="img/social/facebook.png" alt="Facebook">
                            	</a>
                                &emsp;&emsp;
                                <a href="https://twitter.com/Intothisnight" target="_blank">
                                    <img src="img/social/twitter.png" alt="Facebook">
                            	</a>
                            </li>
                        </ul>
                    </nav>
                </div>
        </header>
        <article id="main">
            <section id="banner">
                <div id="lead-text" class="clearfix">
                    <span class="lead-line">See here the list</span>
                    <span class="lead-line">of all nightclubs</span>
                </div>
            </section>
            <section id="searchbar">
                <div class="container clearfix">
                    <input style="width:300px;" id="hashtags" type='hidden' placeholder="Search a hashtag">
                    <select style="width:300px;" multiple="" name="nightclubs-list" id="nightclubs-list">
                       <optgroup label="Alaskan/Hawaiian Time Zone">
                           <option value="AK">Alaska</option>
                           <option value="HI">Hawaii</option>
                       </optgroup>
                       <optgroup label="Pacific Time Zone">
                           <option value="CA">California</option>
                           <option value="NV">Nevada</option>
                           <option value="OR">Oregon</option>
                           <option value="WA">Washington</option>
                       </optgroup>
                       <optgroup label="Mountain Time Zone">
                           <option value="AZ">Arizona</option>
                           <option value="CO">Colorado</option>
                           <option value="ID">Idaho</option>
                           <option value="MT">Montana</option><option value="NE">Nebraska</option>
                           <option value="NM">New Mexico</option>
                           <option value="ND">North Dakota</option>
                           <option value="UT">Utah</option>
                           <option value="WY">Wyoming</option>
                       </optgroup>
                       <optgroup label="Central Time Zone">
                           <option value="AL">Alabama</option>
                           <option value="AR">Arkansas</option>
                           <option value="IL">Illinois</option>
                           <option value="IA">Iowa</option>
                           <option value="KS">Kansas</option>
                           <option value="KY">Kentucky</option>
                           <option value="LA">Louisiana</option>
                           <option value="MN">Minnesota</option>
                           <option value="MS">Mississippi</option>
                           <option value="MO">Missouri</option>
                           <option value="OK">Oklahoma</option>
                           <option value="SD">South Dakota</option>
                           <option value="TX">Texas</option>
                           <option value="TN">Tennessee</option>
                           <option value="WI">Wisconsin</option>
                       </optgroup>
                       <optgroup label="Eastern Time Zone">
                           <option value="CT">Connecticut</option>
                           <option value="DE">Delaware</option>
                           <option value="FL">Florida</option>
                           <option value="GA">Georgia</option>
                           <option value="IN">Indiana</option>
                           <option value="ME">Maine</option>
                           <option value="MD">Maryland</option>
                           <option value="MA">Massachusetts</option>
                           <option value="MI">Michigan</option>
                           <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                           <option value="NY">New York</option>
                           <option value="NC">North Carolina</option>
                           <option value="OH">Ohio</option>
                           <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                           <option value="VT">Vermont</option><option value="VA">Virginia</option>
                           <option value="WV">West Virginia</option>
                       </optgroup>
                      </select>
                </div>
            </section>

            <div class="container clearfix">
                <section id="results" class="clearfix">
                    <div class="result-item clearfix" id="1" data-location="AK" data-hashtags="1,2">
                        <div class="result-item-title">
                          <h2>Title of nightclub</h2>
                        </div>
                        <div class="col1">
                          <header class="result-item-header" style="background-image:url(images/klangprojektor.jpeg);">
                              <div class="result-item-map">
                                  <img src="http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211&sensor=false">
                              </div>
                          </header>
                          <div class="result-item-main clearfix">  
                              <div class="result-item-info">
                                  <span class="result-item-name">The Night Club Lore</span>
                                  <span class="result-item-city">The City</span>
                                  <span class="result-item-adress">The Adress</span>
                              </div>
                          </div>
                        </div>
                        <div class="col2">
                          <div class="hashtags-container">
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">78</span>
                              <span class="hashtag-number">1</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">54</span>
                              <span class="hashtag-number">2</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">43</span>
                              <span class="hashtag-number">3</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">32</span>
                              <span class="hashtag-number">4</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">28</span>
                              <span class="hashtag-number">5</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">15</span>
                              <span class="hashtag-number">6</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                          </div>
                          <div class="rating-container">
                            <div class="rating-stars">
                              <div class="rate-stars rate-stars-1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="friends">
                          <ul class="grid clearfix">
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                          </ul>
                        </div>
                        <div class="result-item-buttons clearfix">
                            <div class="result-item-social">
                                <a class="result-item-buttons-like result-item-buttons-button"><i class="icon-heart"></i> 45</a>
                                <a class="result-item-buttons-button"><i class="icon-share"></i> Share</a>
                            </div>
                            <div class="result-item-tools">
                                <a class="result-item-buttons-button result-item-map-button"><i class="icon-map-marker"></i></a>
                                <a class="result-item-buttons-button result-item-picture-button"><i class="icon-picture"></i></a>
                                <a class="result-item-buttons-button"><i class="icon-info-sign"></i>   <i class="icon-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="result-item clearfix" id="2" data-location="AK" data-hashtags="1,3,4">
                        <div class="result-item-title">
                          <h2>Title of nightclub</h2>
                        </div>
                        <div class="col1">
                          <header class="result-item-header" style="background-image:url(images/klangprojektor.jpeg);">
                              <div class="result-item-map">
                                  <img src="http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211&sensor=false">
                              </div>
                          </header>
                          <div class="result-item-main">
                              <div class="result-item-info">
                                  <span class="result-item-name">The Night Club Ipsu</span>
                                  <span class="result-item-city">The City</span>
                                  <span class="result-item-adress">The Adress</span>
                              </div>
                          </div>
                        </div>
                        <div class="col2">
                          <div class="hashtags-container">
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">78</span>
                              <span class="hashtag-number">1</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">54</span>
                              <span class="hashtag-number">2</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">43</span>
                              <span class="hashtag-number">3</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">32</span>
                              <span class="hashtag-number">4</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">28</span>
                              <span class="hashtag-number">5</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">15</span>
                              <span class="hashtag-number">6</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                          </div>
                          <div class="rating-container">
                            <div class="rating-stars">
                              <div class="rate-stars rate-stars-5"></div>
                            </div>
                          </div>
                        </div>
                        <div class="friends">
                          <ul class="grid clearfix">
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                          </ul>
                        </div>
                        <div class="result-item-buttons clearfix">
                            <div class="result-item-social">
                                <a class="result-item-buttons-like result-item-buttons-button"><i class="icon-heart"></i> 45</a>
                                <a class="result-item-buttons-button"><i class="icon-share"></i> Share</a>
                            </div>
                            <div class="result-item-tools">
                                <a class="result-item-buttons-button result-item-map-button"><i class="icon-map-marker"></i></a>
                                <a class="result-item-buttons-button result-item-picture-button"><i class="icon-picture"></i></a>
                                <a class="result-item-buttons-button"><i class="icon-info-sign"></i>   <i class="icon-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="result-item clearfix" id="3" data-location="HI" data-hashtags="1,3,4">
                        <div class="result-item-title">
                          <h2>Title of nightclub</h2>
                        </div>
                        <div class="col1">
                          <header class="result-item-header" style="background-image:url(images/klangprojektor.jpeg);">
                              <div class="result-item-map">
                                  <img src="http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211&sensor=false">
                              </div>
                          </header>
                          <div class="result-item-main">
                              <div class="result-item-info">
                                  <span class="result-item-name">The Night Club Dolor</span>
                                  <span class="result-item-city">The City</span>
                                  <span class="result-item-adress">The Adress</span>
                              </div>
                          </div>
                        </div>
                        <div class="col2">
                          <div class="hashtags-container">
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">78</span>
                              <span class="hashtag-number">1</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">54</span>
                              <span class="hashtag-number">2</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">43</span>
                              <span class="hashtag-number">3</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">32</span>
                              <span class="hashtag-number">4</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">28</span>
                              <span class="hashtag-number">5</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">15</span>
                              <span class="hashtag-number">6</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                          </div>
                          <div class="rating-container">
                            <div class="rating-stars">
                              <div class="rate-stars rate-stars-4"></div>
                            </div>
                          </div>
                        </div>
                        <div class="friends">
                          <ul class="grid clearfix">
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                          </ul>
                        </div>
                        <div class="result-item-buttons clearfix">
                            <div class="result-item-social">
                                <a class="result-item-buttons-like result-item-buttons-button"><i class="icon-heart"></i> 45</a>
                                <a class="result-item-buttons-button"><i class="icon-share"></i> Share</a>
                            </div>
                            <div class="result-item-tools">
                                <a class="result-item-buttons-button result-item-map-button"><i class="icon-map-marker"></i></a>
                                <a class="result-item-buttons-button result-item-picture-button"><i class="icon-picture"></i></a>
                                <a class="result-item-buttons-button"><i class="icon-info-sign"></i>   <i class="icon-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="result-item clearfix" id="4" data-location="HI" data-hashtags="1,2">
                        <div class="result-item-title">
                          <h2>Title of nightclub</h2>
                        </div>
                        <div class="col1">
                          <header class="result-item-header" style="background-image:url(images/klangprojektor.jpeg);">
                              <div class="result-item-map">
                                  <img src="http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211&sensor=false">
                              </div>
                          </header>
                          <div class="result-item-main">
                              <div class="result-item-info">
                                  <span class="result-item-name">The Night Club Sit</span>
                                  <span class="result-item-city">The City</span>
                                  <span class="result-item-adress">The Adress</span>
                              </div>
                          </div>
                        </div>
                        <div class="col2">
                          <div class="hashtags-container">
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">78</span>
                              <span class="hashtag-number">1</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">54</span>
                              <span class="hashtag-number">2</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">43</span>
                              <span class="hashtag-number">3</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">32</span>
                              <span class="hashtag-number">4</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">28</span>
                              <span class="hashtag-number">5</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">15</span>
                              <span class="hashtag-number">6</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                          </div>
                          <div class="rating-container">
                            <div class="rating-stars">
                              <div class="rate-stars rate-stars-1"></div>
                            </div>
                          </div>
                        </div>
                        <div class="friends">
                          <ul class="grid clearfix">
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                          </ul>
                        </div>
                        <div class="result-item-buttons clearfix">
                            <div class="result-item-social">
                                <a class="result-item-buttons-like result-item-buttons-button"><i class="icon-heart"></i> 45</a>
                                <a class="result-item-buttons-button"><i class="icon-share"></i> Share</a>
                            </div>
                            <div class="result-item-tools">
                                <a class="result-item-buttons-button result-item-map-button"><i class="icon-map-marker"></i></a>
                                <a class="result-item-buttons-button result-item-picture-button"><i class="icon-picture"></i></a>
                                <a class="result-item-buttons-button"><i class="icon-info-sign"></i>   <i class="icon-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="result-item clearfix" id="5" data-location="HI" data-hashtags="1,3,4">
                        <div class="result-item-title">
                          <h2>Title of nightclub</h2>
                        </div>
                        <div class="col1">
                          <header class="result-item-header" style="background-image:url(images/klangprojektor.jpeg);">
                              <div class="result-item-map">
                                  <img src="http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211&sensor=false">
                              </div>
                          </header>
                          <div class="result-item-main">
                              <div class="result-item-info">
                                  <span class="result-item-name">The Night Club Amet</span>
                                  <span class="result-item-city">The City</span>
                                  <span class="result-item-adress">The Adress</span>
                              </div>
                          </div>
                        </div>
                        <div class="col2">
                          <div class="hashtags-container">
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">78</span>
                              <span class="hashtag-number">1</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">54</span>
                              <span class="hashtag-number">2</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">43</span>
                              <span class="hashtag-number">3</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">32</span>
                              <span class="hashtag-number">4</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">28</span>
                              <span class="hashtag-number">5</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">15</span>
                              <span class="hashtag-number">6</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                          </div>
                          <div class="rating-container">
                            <div class="rating-stars">
                              <div class="rate-stars rate-stars-3"></div>
                            </div>
                          </div>
                        </div>
                        <div class="friends">
                          <ul class="grid clearfix">
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                          </ul>
                        </div>
                        <div class="result-item-buttons clearfix">
                            <div class="result-item-social">
                                <a class="result-item-buttons-like result-item-buttons-button"><i class="icon-heart"></i> 45</a>
                                <a class="result-item-buttons-button"><i class="icon-share"></i> Share</a>
                            </div>
                            <div class="result-item-tools">
                                <a class="result-item-buttons-button result-item-map-button"><i class="icon-map-marker"></i></a>
                                <a class="result-item-buttons-button result-item-picture-button"><i class="icon-picture"></i></a>
                                <a class="result-item-buttons-button"><i class="icon-info-sign"></i>   <i class="icon-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="result-item clearfix" id="6" data-location="CA" data-hashtags="1,2">
                        <div class="result-item-title">
                          <h2>Title of nightclub</h2>
                        </div>
                        <div class="col1">
                          <header class="result-item-header" style="background-image:url(images/klangprojektor.jpeg);">
                              <div class="result-item-map">
                                  <img src="http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211&sensor=false">
                              </div>
                          </header>
                          <div class="result-item-main">
                              <div class="result-item-info">
                                  <span class="result-item-name">The Night Club Cons</span>
                                  <span class="result-item-city">The City</span>
                                  <span class="result-item-adress">The Adress</span>
                              </div>
                          </div>
                        </div>
                        <div class="col2">
                          <div class="hashtags-container">
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">78</span>
                              <span class="hashtag-number">1</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">54</span>
                              <span class="hashtag-number">2</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">43</span>
                              <span class="hashtag-number">3</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">32</span>
                              <span class="hashtag-number">4</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">28</span>
                              <span class="hashtag-number">5</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">15</span>
                              <span class="hashtag-number">6</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                          </div>
                          <div class="rating-container">
                            <div class="rating-stars">
                              <div class="rate-stars rate-stars-2"></div>
                            </div>
                          </div>
                        </div>
                        <div class="friends">
                          <ul class="grid clearfix">
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                          </ul>
                        </div>
                        <div class="result-item-buttons clearfix">
                            <div class="result-item-social">
                                <a class="result-item-buttons-like result-item-buttons-button"><i class="icon-heart"></i> 45</a>
                                <a class="result-item-buttons-button"><i class="icon-share"></i> Share</a>
                            </div>
                            <div class="result-item-tools">
                                <a class="result-item-buttons-button result-item-map-button"><i class="icon-map-marker"></i></a>
                                <a class="result-item-buttons-button result-item-picture-button"><i class="icon-picture"></i></a>
                                <a class="result-item-buttons-button"><i class="icon-info-sign"></i>   <i class="icon-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="result-item clearfix" id="7" data-location="CA" data-hashtags="1,2">
                        <div class="result-item-title">
                          <h2>Title of nightclub</h2>
                        </div>
                        <div class="col1">
                          <header class="result-item-header" style="background-image:url(images/klangprojektor.jpeg);">
                              <div class="result-item-map">
                                  <img src="http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211&sensor=false">
                              </div>
                          </header>
                          <div class="result-item-main">
                              <div class="result-item-info">
                                  <span class="result-item-name">The Night Club Adipi</span>
                                  <span class="result-item-city">The City</span>
                                  <span class="result-item-adress">The Adress</span>
                              </div>
                          </div>
                        </div>
                        <div class="col2">
                          <div class="hashtags-container">
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">78</span>
                              <span class="hashtag-number">1</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">54</span>
                              <span class="hashtag-number">2</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">43</span>
                              <span class="hashtag-number">3</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">32</span>
                              <span class="hashtag-number">4</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">28</span>
                              <span class="hashtag-number">5</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">15</span>
                              <span class="hashtag-number">6</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                          </div>
                          <div class="rating-container">
                            <div class="rating-stars">
                              <div class="rate-stars rate-stars-5"></div>
                            </div>
                          </div>
                        </div>
                        <div class="friends">
                          <ul class="grid clearfix">
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                          </ul>
                        </div>
                        <div class="result-item-buttons clearfix">
                            <div class="result-item-social">
                                <a class="result-item-buttons-like result-item-buttons-button"><i class="icon-heart"></i> 45</a>
                                <a class="result-item-buttons-button"><i class="icon-share"></i> Share</a>
                            </div>
                            <div class="result-item-tools">
                                <a class="result-item-buttons-button result-item-map-button"><i class="icon-map-marker"></i></a>
                                <a class="result-item-buttons-button result-item-picture-button"><i class="icon-picture"></i></a>
                                <a class="result-item-buttons-button"><i class="icon-info-sign"></i>   <i class="icon-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="result-item clearfix" id="8" data-location="CA" data-hashtags="1,3,4">
                        <div class="result-item-title">
                          <h2>Title of nightclub</h2>
                        </div>
                        <div class="col1">
                          <header class="result-item-header" style="background-image:url(images/klangprojektor.jpeg);">
                              <div class="result-item-map">
                                  <img src="http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211&sensor=false">
                              </div>
                          </header>
                          <div class="result-item-main">
                              <div class="result-item-info">
                                  <span class="result-item-name">The Night Club Elit</span>
                                  <span class="result-item-city">The City</span>
                                  <span class="result-item-adress">The Adress</span>
                              </div>
                          </div>
                        </div>
                        <div class="col2">
                          <div class="hashtags-container">
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">78</span>
                              <span class="hashtag-number">1</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">54</span>
                              <span class="hashtag-number">2</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">43</span>
                              <span class="hashtag-number">3</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">32</span>
                              <span class="hashtag-number">4</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">28</span>
                              <span class="hashtag-number">5</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">15</span>
                              <span class="hashtag-number">6</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                          </div>
                          <div class="rating-container">
                            <div class="rating-stars">
                              <div class="rate-stars rate-stars-3"></div>
                            </div>
                          </div>
                        </div>
                        <div class="friends">
                          <ul class="grid clearfix">
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                          </ul>
                        </div>
                        <div class="result-item-buttons clearfix">
                            <div class="result-item-social">
                                <a class="result-item-buttons-like result-item-buttons-button"><i class="icon-heart"></i> 45</a>
                                <a class="result-item-buttons-button"><i class="icon-share"></i> Share</a>
                            </div>
                            <div class="result-item-tools">
                                <a class="result-item-buttons-button result-item-map-button"><i class="icon-map-marker"></i></a>
                                <a class="result-item-buttons-button result-item-picture-button"><i class="icon-picture"></i></a>
                                <a class="result-item-buttons-button"><i class="icon-info-sign"></i>   <i class="icon-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="result-item clearfix" id="9" data-location="NV" data-hashtags="1,2">
                        <div class="result-item-title">
                          <h2>Title of nightclub</h2>
                        </div>
                        <div class="col1">
                          <header class="result-item-header" style="background-image:url(images/klangprojektor.jpeg);">
                              <div class="result-item-map">
                                  <img src="http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211&sensor=false">
                              </div>
                          </header>
                          <div class="result-item-main">
                              <div class="result-item-info">
                                  <span class="result-item-name">The Night Club Aliquam</span>
                                  <span class="result-item-city">The City</span>
                                  <span class="result-item-adress">The Adress</span>
                              </div>
                          </div>
                        </div>
                        <div class="col2">
                          <div class="hashtags-container">
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">78</span>
                              <span class="hashtag-number">1</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">54</span>
                              <span class="hashtag-number">2</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">43</span>
                              <span class="hashtag-number">3</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">32</span>
                              <span class="hashtag-number">4</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">28</span>
                              <span class="hashtag-number">5</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">15</span>
                              <span class="hashtag-number">6</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                          </div>
                          <div class="rating-container">
                            <div class="rating-stars">
                              <div class="rate-stars rate-stars-2"></div>
                            </div>
                          </div>
                        </div>
                        <div class="friends">
                          <ul class="grid clearfix">
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                          </ul>
                        </div>
                        <div class="result-item-buttons clearfix">
                            <div class="result-item-social">
                                <a class="result-item-buttons-like result-item-buttons-button"><i class="icon-heart"></i> 45</a>
                                <a class="result-item-buttons-button"><i class="icon-share"></i> Share</a>
                            </div>
                            <div class="result-item-tools">
                                <a class="result-item-buttons-button result-item-map-button"><i class="icon-map-marker"></i></a>
                                <a class="result-item-buttons-button result-item-picture-button"><i class="icon-picture"></i></a>
                                <a class="result-item-buttons-button"><i class="icon-info-sign"></i>   <i class="icon-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="result-item clearfix" id="10" data-location="NV" data-hashtags="1,3,4">
                        <div class="result-item-title">
                          <h2>Title of nightclub</h2>
                        </div>
                        <div class="col1">
                          <header class="result-item-header" style="background-image:url(images/klangprojektor.jpeg);">
                              <div class="result-item-map">
                                  <img src="http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211&sensor=false">
                              </div>
                          </header>
                          <div class="result-item-main">
                              <div class="result-item-info">
                                  <span class="result-item-name">The Night Club Sodales</span>
                                  <span class="result-item-city">The City</span>
                                  <span class="result-item-adress">The Adress</span>
                              </div>
                          </div>
                        </div>
                        <div class="col2">
                          <div class="hashtags-container">
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">78</span>
                              <span class="hashtag-number">1</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">54</span>
                              <span class="hashtag-number">2</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">43</span>
                              <span class="hashtag-number">3</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">32</span>
                              <span class="hashtag-number">4</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">28</span>
                              <span class="hashtag-number">5</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                            <div class="hashtag-item clearfix">
                              <span class="hashtag-count">15</span>
                              <span class="hashtag-number">6</span>
                              <span class="hashtag-name">#hotchicks</span>
                              <span class="hashtag-toolbar">
                                <a href="#" class="hashtag-agree"><i class="icon-ok"></i></a>
                                <a href="#" class="hashtag-disagree"><i class="icon-remove"></i></a>
                              </span>
                            </div>
                          </div>
                          <div class="rating-container">
                            <div class="rating-stars">
                              <div class="rate-stars rate-stars-4"></div>
                            </div>
                          </div>
                        </div>
                        <div class="friends">
                          <ul class="grid clearfix">
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Félix Bayart"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c29.29.363.363/s160x160/74442_582458745098899_394996390_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Jérémy Sg"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c83.0.828.828/s160x160/481154_10200837362195546_1997031289_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="David Kalinovsky"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/545039_100538186790552_1795431383_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Antoine Joussain"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/c42.42.522.522/s160x160/486595_3795724925654_1907975254_n.jpg" height="40" width="40"/></a></li>
                            <li><a href="#" class="has-tip tip-top" title="Bastien Fanteistic"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/c3.18.160.160/36743_411154368865_3418977_a.jpg" height="40" width="40"/></a></li>
                          </ul>
                        </div>
                        <div class="result-item-buttons clearfix">
                            <div class="result-item-social">
                                <a class="result-item-buttons-like result-item-buttons-button"><i class="icon-heart"></i> 45</a>
                                <a class="result-item-buttons-button"><i class="icon-share"></i> Share</a>
                            </div>
                            <div class="result-item-tools">
                                <a class="result-item-buttons-button result-item-map-button"><i class="icon-map-marker"></i></a>
                                <a class="result-item-buttons-button result-item-picture-button"><i class="icon-picture"></i></a>
                                <a class="result-item-buttons-button"><i class="icon-info-sign"></i>   <i class="icon-caret-down"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="noMatches">
                  <h1>There is no match to that search, sorry</h1>
                </section>
                <section id="results-pagination-container">
                    <ul id="results-pagination">
                    </ul>
                </section>
            </div>
        </article>
   

        <footer id="footer">

        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-38547756-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
    </body>
</html>
