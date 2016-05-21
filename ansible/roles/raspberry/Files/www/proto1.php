<?php
$arrow_type = 1;

?>
<html>
	<body>
		<script src="/js/jquery-2.1.0.min.js"></script>
		<script src="/js/send-button.js"></script>
		<style>
                    #form-control{
                        float: left;
                    }
                    
                    .control-row img{
                            width: 50px;
                    }
                    
                    video{
                        float: left;
                    }
		</style>
		<center><h1>Arduino serial commander</h1></center>
		
                <!-- just text for action -->
		<!--div id="form-messages"></div>
			<a href="#" class="reply_doc" data-doc_value="Forward">Forward</a><br>
			<a href="#" class="reply_doc" data-doc_value="Back">Back</a><br>
			<a href="#" class="reply_doc" data-doc_value="Left">Left</a><br>
			<a href="#" class="reply_doc" data-doc_value="Right">Right</a><br>
			<a href="#" class="reply_doc" data-doc_value="Stop">Stop</a><br>
		</div-->
		
		<div id="form-control">
			<div class="control-row control-row-1">
				<img src="img/arrow-<?php echo $arrow_type;?>/blank.png" \>
				<a href="#" class="reply_doc" data-doc_value="Forward">
					<img src="img/arrow-<?php echo $arrow_type;?>/up.png" \>
				</a>
			</div>

			<div class="control-row control-row-2">
				<a href="#" class="reply_doc" data-doc_value="Left">
					<img src="img/arrow-<?php echo $arrow_type;?>/left.png" \>
				</a>
				<a href="#" class="reply_doc" data-doc_value="Stop">
					<img src="img/arrow-<?php echo $arrow_type;?>/reload.png" \>
				</a>
				
				<a href="#" class="reply_doc" data-doc_value="Right">
					<img src="img/arrow-<?php echo $arrow_type;?>/right.png" \>
				</a>
			</div>
			
			<div class="control-row control-row-3">
				<img src="img/arrow-<?php echo $arrow_type;?>/blank.png" \>
				<a href="#" class="reply_doc" data-doc_value="Back">
					<img src="img/arrow-<?php echo $arrow_type;?>/down.png" \>
				</a>
			</div>
		</div>

			
		</div>


			
			
					<!--iframe width="560" height="315" src="https://www.youtube.com/embed/aQd41nbQM-U" frameborder="0" allowfullscreen></iframe-->
		
                <video src="/media/Nebulas_HD_1080p.mp4"
                autoplay
                controls
                width="720" height="480">
                Your browser does not support the video element</a>
                </video>

	</body>
</html>
