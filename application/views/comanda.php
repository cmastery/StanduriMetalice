<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

    <head>
	<title>Matstubs</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
        <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/material.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/ripples.min.css" rel="stylesheet">
		<style>
			
		#wrapper{
			background-image:url("media/images/bg.jpg");
			background-repeat:no-repeat;
			background-position:center;
			background-attachment: fixed;
			position: fixed;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			z-index:-99999999;

		}
			.presentWrapper{
				width:100%;
				height:400px;
			}
			#playlistWrapper, #socialWrapper{
				height:500px;
				overflow-y:scroll;
			}
			.playerlistFix{
				margin-top:-2em !important;
			}
			.footerFix{
				margin-top:-2em !important;
				background-color:#1c1c1c !important;
				color:#fff;
			}
			#playerWrapper{
				display:none;
			}
		</style>
    </head>

    <body>
		
		<audio id="playerAudio">
			<source id="mp3_src" src="" type="audio/mpeg">
		</audio>
		<div id="wrapper"></div>
		<div class="container">
			<nav class="navbar navbar-info">
				<div class="container-fluid">
					<div class="navbar-header">
						<ul class="nav navbar-nav">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Tour</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
			
			<div class="presentWrapper playerlistFix">
				<span id="logo">
					<img src="media/images/Matstubs_Logo_black_star_decal.png" class="img-responsive">
				</span>
			</div>
			
			<div class="well playerlistFix">
				<div id="playerWrapper" class="row">
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-material-light-blue"><i class="fa fa-search">&nbsp;</i></button>
							<button  onclick="stopPlayer()" type="button" class="btn btn-material-blue-grey"><i class="fa fa-pause"></i></button>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<span id="currentTime" class="pull-left"></span>
						<span id="duration" class="pull-right"></span>
						<div class="clearfix">&nbsp;</div>
						<div class="progress">
							<div id="audioProcess" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">

							</div>
						</div>
						<div id="songName"></div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
						<div class="btn-group">
							<button id="volControlBtn" onclick="volumeControl()" class="btn btn-default dropdown-toggle" type="button">
								 <i class="fa fa-volume-up"></i>
							</button>
						</div>
					</div>
				<hr>
				<hr>
				<hr>
				</div>
				<div class="row">
					<div id="playlistWrapper" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<ul class="list-group">
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="eminem-rap-god.mp3" data-id="Eminem - Rap God (Matstubs TRap God Remix)" data-bg-img="media/images/test.jpg" data-logo-inverse="no"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Eminem - Rap God (Matstubs TRap God Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="label label-info">Share</a>
										<a href="#" class="label label-danger">YouTube</a>
										<a href="#" class="label label-success">Instagram</a>
									</span>
								</div>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="test.mp3" data-id="Jetta - I'd Love to Change the World (Matstubs Remix)" data-bg-img="media/images/test2.jpg" data-logo-inverse="yes"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Jetta - I'd Love to Change the World (Matstubs Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="btn btn-warning btn-sm"><i class="fa fa-soundcloud"></i></a>
										<a href="https://www.youtube.com/watch?v=5hEh9LiSzow" class="btn btn-danger btn-sm"><i class="fa fa-youtube"></i></a>
									</span>
								</div>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="eminem-rap-god.mp3" data-id="Eminem - Rap God (Matstubs TRap God Remix)" data-bg-img="media/images/test.jpg" data-logo-inverse="no"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Eminem - Rap God (Matstubs TRap God Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="label label-info">Share</a>
										<a href="#" class="label label-danger">YouTube</a>
										<a href="#" class="label label-success">Instagram</a>
									</span>
								</div>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="test.mp3" data-id="Jetta - I'd Love to Change the World (Matstubs Remix)" data-bg-img="media/images/test2.jpg" data-logo-inverse="yes"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Jetta - I'd Love to Change the World (Matstubs Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="btn btn-warning btn-sm"><i class="fa fa-soundcloud"></i></a>
										<a href="https://www.youtube.com/watch?v=5hEh9LiSzow" class="btn btn-danger btn-sm"><i class="fa fa-youtube"></i></a>
									</span>
								</div>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="eminem-rap-god.mp3" data-id="Eminem - Rap God (Matstubs TRap God Remix)" data-bg-img="media/images/test.jpg" data-logo-inverse="no"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Eminem - Rap God (Matstubs TRap God Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="label label-info">Share</a>
										<a href="#" class="label label-danger">YouTube</a>
										<a href="#" class="label label-success">Instagram</a>
									</span>
								</div>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="test.mp3" data-id="Jetta - I'd Love to Change the World (Matstubs Remix)" data-bg-img="media/images/test2.jpg" data-logo-inverse="yes"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Jetta - I'd Love to Change the World (Matstubs Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="btn btn-warning btn-sm"><i class="fa fa-soundcloud"></i></a>
										<a href="https://www.youtube.com/watch?v=5hEh9LiSzow" class="btn btn-danger btn-sm"><i class="fa fa-youtube"></i></a>
									</span>
								</div>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="eminem-rap-god.mp3" data-id="Eminem - Rap God (Matstubs TRap God Remix)" data-bg-img="media/images/test.jpg" data-logo-inverse="no"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Eminem - Rap God (Matstubs TRap God Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="label label-info">Share</a>
										<a href="#" class="label label-danger">YouTube</a>
										<a href="#" class="label label-success">Instagram</a>
									</span>
								</div>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="test.mp3" data-id="Jetta - I'd Love to Change the World (Matstubs Remix)" data-bg-img="media/images/test2.jpg" data-logo-inverse="yes"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Jetta - I'd Love to Change the World (Matstubs Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="btn btn-warning btn-sm"><i class="fa fa-soundcloud"></i></a>
										<a href="https://www.youtube.com/watch?v=5hEh9LiSzow" class="btn btn-danger btn-sm"><i class="fa fa-youtube"></i></a>
									</span>
								</div>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="eminem-rap-god.mp3" data-id="Eminem - Rap God (Matstubs TRap God Remix)" data-bg-img="media/images/test.jpg" data-logo-inverse="no"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Eminem - Rap God (Matstubs TRap God Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="label label-info">Share</a>
										<a href="#" class="label label-danger">YouTube</a>
										<a href="#" class="label label-success">Instagram</a>
									</span>
								</div>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="test.mp3" data-id="Jetta - I'd Love to Change the World (Matstubs Remix)" data-bg-img="media/images/test2.jpg" data-logo-inverse="yes"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Jetta - I'd Love to Change the World (Matstubs Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="btn btn-warning btn-sm"><i class="fa fa-soundcloud"></i></a>
										<a href="https://www.youtube.com/watch?v=5hEh9LiSzow" class="btn btn-danger btn-sm"><i class="fa fa-youtube"></i></a>
									</span>
								</div>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="eminem-rap-god.mp3" data-id="Eminem - Rap God (Matstubs TRap God Remix)" data-bg-img="media/images/test.jpg" data-logo-inverse="no"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Eminem - Rap God (Matstubs TRap God Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="label label-info">Share</a>
										<a href="#" class="label label-danger">YouTube</a>
										<a href="#" class="label label-success">Instagram</a>
									</span>
								</div>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
										<button onclick="playerStart(this)" class="btn btn-success" data-audio-src="test.mp3" data-id="Jetta - I'd Love to Change the World (Matstubs Remix)" data-bg-img="media/images/test2.jpg" data-logo-inverse="yes"><i class="fa fa-play"></i></button>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
										<h4>Jetta - I'd Love to Change the World (Matstubs Remix)<h4>
									</div>
									<span class="pull-right">
										<a href="#" class="btn btn-warning btn-sm"><i class="fa fa-soundcloud"></i></a>
										<a href="https://www.youtube.com/watch?v=5hEh9LiSzow" class="btn btn-danger btn-sm"><i class="fa fa-youtube"></i></a>
									</span>
								</div>
							</li>
							<hr>
						</ul>
					</div>
					<div id="socialWrapper" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<section>
							<div class="widget-heading clearfix"><h3>Social</h3></div>
								<script>
									(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) return;
									  js = d.createElement(s); js.id = id;
									  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=395202813876688";
									  fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));
								</script>
								<div class="fb-like-box" data-href="https://www.facebook.com/matstubs" data-colorscheme="dark" data-width="250" data-height="" data-show-faces=true data-header=true data-stream=false data-show-border=true></div>
							
						</section>
						<hr/>
						<blockquote class="twitter-tweet" data-cards="hidden" lang="ro"><p lang="en" dir="ltr">road to 20M :oooo <a href="https://twitter.com/matstubs">@matstubs</a> <a href="http://t.co/Gx9eqLAx0K">pic.twitter.com/Gx9eqLAx0K</a></p>&mdash; Matthy (@MatthyConcepts) <a href="https://twitter.com/MatthyConcepts/status/622032996871372800">17 iulie 2015</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						<hr/>
						<blockquote class="twitter-tweet" lang="ro"><p lang="en" dir="ltr">The <a href="https://twitter.com/matstubs">@matstubs</a> remix of The Hills by <a href="https://twitter.com/theweeknd">@theweeknd</a> is freaking perfect. &#10;ðŸ˜ðŸ˜ðŸ˜ðŸ˜ðŸ˜ðŸ‘ŒðŸ¼ðŸ‘ŒðŸ¼ðŸ‘ŒðŸ¼ðŸ‘ŒðŸ¼ðŸ‘ŒðŸ¼ðŸ‘ŒðŸ¼</p>&mdash; 15//NOT AN APOLOGY (@WeeklyKyla) <a href="https://twitter.com/WeeklyKyla/status/621033314413998080">14 iulie 2015</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
				<hr/>
				<h1>Gallery</h1>
				<div class="row grid">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thumbnail">
						<img src="http://i.ytimg.com/vi/2mEa7SLPuXY/maxresdefault.jpg" class="img-responsive">
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thumbnail">
						<img src="http://i.ytimg.com/vi/ruGc9ywEbIM/maxresdefault.jpg" class="img-responsive">
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thumbnail">
						<img src="https://i1.sndcdn.com/artworks-000082836249-z64p3b-t500x500.jpg" class="img-responsive">
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thumbnail">
						<img src="http://i.ytimg.com/vi/2mEa7SLPuXY/maxresdefault.jpg" class="img-responsive">
					</div>
				</div>
				<div class="row grid">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thumbnail">
						<img src="http://i.ytimg.com/vi/2mEa7SLPuXY/maxresdefault.jpg" class="img-responsive">
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thumbnail">
						<img src="http://i.ytimg.com/vi/2mEa7SLPuXY/maxresdefault.jpg" class="img-responsive">
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thumbnail">
						<img src="http://i.ytimg.com/vi/2mEa7SLPuXY/maxresdefault.jpg" class="img-responsive">
					</div>
				</div>
			</div>
			<div class="well footerFix">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p class="text-muted">Copyright @ Matstubs.com. All Rrights reserved.</a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
						<a href="#" class="text-info">Bio</a> 
						<a href="#" class="text-info">SoundCloud</a> 
						<a href="#" class="text-info">Facebook</a> 
						<a href="#" class="text-info">Tweeter</a> 
						<a href="#" class="text-info">Instagram</a> 
						<a href="#" class="text-info">Contact</a> 
						<a href="#" class="text-info">Tour Dates</a> 
						<a href="#" class="text-info">Sonder EP</a> 
						
					</div>
				</div>
			</div>
			
			
		</div>
	
	
	
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="js/ripples.min.js"></script>
        <script src="js/material.min.js"></script>
		<script>
			$('.grid').masonry({
  // options
  itemSelector: '.thumbnail',
  columnWidth: auto
});
		</script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>
		
	<script>
	function playerStart(e){
		var background = "url('" + $(e).attr("data-bg-img") + "')";
		var logo = $(e).attr("data-logo-inverse");
		$("#mp3_src").attr("src", "media/" + $(e).attr("data-audio-src"));
		$("#songName").html($(e).attr("data-id"));
		
		if($("#playerWrapper").is(":hidden")){
			$("#playerWrapper").slideToggle("slow");
		}
		
		var music = $("#playerAudio")[0];
		music.load();
		
		if(music.paused == true){
			music.play();
			$(e).html("<i class='fa fa-pause'></i>");
		} else {
			music.pause();
			$(e).html("<i class='fa fa-play'></i>");
		}
		
		if(music.paused == false){
			changeBackground(background, logo);
		}
	}
	
	function formatSecondsAsTime(secs, format) {
		var hr  = Math.floor(secs / 3600);
		var min = Math.floor((secs - (hr * 3600))/60);
		var sec = Math.floor(secs - (hr * 3600) -  (min * 60));
	
		if (min < 10){ 
			min = "0" + min; 
		}
		
		if (sec < 10){ 
			sec  = "0" + sec;
		}

		return min + ':' + sec;
	}

	
	setInterval(function(){ 
		var music = $("#playerAudio")[0];
		var width = (music.currentTime / music.duration) * 100;
		$("#currentTime").text(formatSecondsAsTime(Math.floor(music.currentTime))); 
		$("#duration").text(formatSecondsAsTime(music.duration));
		$("#audioProcess").css("width", width + "%");
	}, 100);
	
	function changeBackground(val, logo){
		$("#wrapper").animate({opacity: 0}, 'slow', function() {
			$(this)
				.css({'background-image': val})
				.animate({opacity: 1}, function() {
					if(logo == "yes"){
			$("#logo").fadeOut("slow").html('<img class="img-responsive" src="media/images/Matstubs_Logo_white_star_decal.png">').fadeIn("slow");
		} else {
			$("#logo").fadeOut("slow").html('<img class="img-responsive" src="media/images/Matstubs_Logo_black_star_decal.png">').fadeIn("slow");
		}
				});
		});
		
	}
	
	function volumeControl(){
		var music = $("#playerAudio")[0];
		if(music.muted == true){
			music.muted = false;
			$("#volControlBtn").html("<i class='fa fa-volume-up'></i>");
		} else {
			music.muted = true;
			$("#volControlBtn").html("<i class='fa fa-volume-off'></i>");
		}
	}
	
	function togglePauseMusic(){
		var music = $("#playerAudio")[0];
		if(music.paused == true){
			music.play();
			$("#togglePause").html("<i class='fa fa-pause'></i>");
		} else {
			music.pause();
			$("#togglePause").html("<i class='fa fa-play'></i>");
			$("#startMusicBtn").html("<i class='fa fa-play'></i>");
		}
	}
	
	function stopPlayer(){
		var music = $("#playerAudio")[0];
		music.pause();
		if($(".player-wrapper").is(":visible")){
			$(".player-wrapper").toggle("slow");
		}
	}
	</script>
		
		
    </body>

</html>
