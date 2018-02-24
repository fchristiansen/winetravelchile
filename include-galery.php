
		<section id="gallery" class="position-relative">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">
						<div class="row">
							<a href="<?php echo get('galery_photo_1'); ?>">
								<?php 
									$ext  = pathinfo(get('galery_photo_1'), PATHINFO_EXTENSION);
									$file = pathinfo(get('galery_photo_1'), PATHINFO_FILENAME);
									$dir  = pathinfo(get('galery_photo_1'), PATHINFO_DIRNAME);
									$foto = $dir.'/'.$file.'-610x355.'.$ext;
								?>
								<img src="<?php echo $foto; ?>" class="img-responsive br5w bb10w">
							</a>
						</div>
						<div class="row">
							<a href="<?php echo get('galery_photo_2'); ?>">
								<?php 
									$ext  = pathinfo(get('galery_photo_2'), PATHINFO_EXTENSION);
									$file = pathinfo(get('galery_photo_2'), PATHINFO_FILENAME);
									$dir  = pathinfo(get('galery_photo_2'), PATHINFO_DIRNAME);
									$foto = $dir.'/'.$file.'-610x427.'.$ext;
								?>
								<img src="<?php echo $foto; ?>" class="img-responsive br5w">
							</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<a href="<?php echo get('galery_photo_3'); ?>">
								<?php 
									$ext  = pathinfo(get('galery_photo_3'), PATHINFO_EXTENSION);
									$file = pathinfo(get('galery_photo_3'), PATHINFO_FILENAME);
									$dir  = pathinfo(get('galery_photo_3'), PATHINFO_DIRNAME);
									$foto = $dir.'/'.$file.'-600x792.'.$ext;
								?>
								<img src="<?php echo $foto; ?>" class="img-responsive br5w bl5w">
							</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<a href="<?php echo get('galery_photo_4'); ?>">
								<?php 
									$ext  = pathinfo(get('galery_photo_4'), PATHINFO_EXTENSION);
									$file = pathinfo(get('galery_photo_4'), PATHINFO_FILENAME);
									$dir  = pathinfo(get('galery_photo_4'), PATHINFO_DIRNAME);
									$foto = $dir.'/'.$file.'-610x425.'.$ext;
									
								?>
								<img src="<?php echo $foto; ?>" class="img-responsive bl5w bb10w">
							</a>
						</div>
						<div class="row">
							<a href="<?php echo get('galery_photo_5'); ?>">
								<?php 
									$ext  = pathinfo(get('galery_photo_5'), PATHINFO_EXTENSION);
									$file = pathinfo(get('galery_photo_5'), PATHINFO_FILENAME);
									$dir  = pathinfo(get('galery_photo_5'), PATHINFO_DIRNAME);
									$foto = $dir.'/'.$file.'-610x357.'.$ext;
								?>
								<img src="<?php echo $foto; ?>" class="img-responsive bl5w">
							</a>
						</div>
					</div>
					
				</div>
			</div>
		</section>