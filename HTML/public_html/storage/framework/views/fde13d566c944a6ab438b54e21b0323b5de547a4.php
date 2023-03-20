<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php echo e($site_info->favicon); ?>">
	<?php if(isset($site_info->index_google)): ?>
		<meta name="robots" content="<?php echo e($site_info->index_google == 1 ? 'index, follow' : 'noindex, nofollow'); ?>">
	<?php else: ?>
		<meta name="robots" content="noindex, nofollow">
	<?php endif; ?>
	<?php echo SEO::generate(); ?>

	<meta property="og:url" content="<?php echo e(url('/')); ?>" />
	<meta http-equiv="content-language" content="vi" />
	<meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="Hà Nội" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
 	<meta name="_token" content="<?php echo e(csrf_token()); ?>" />
 	<link rel="canonical" href="<?php echo e(\Request::fullUrl()); ?>">

 	<link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/css/lib/slick.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/css/lib/slick-theme.min.css"> 
    <link rel="stylesheet" type="text/css" title="" href="https://channel.mediacdn.vn/Magazine/pc20220829042536/css/aos.css"> 
    <link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/css/style.css?v=1002"> 
    <link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/css/custom.css"> 
    <script type="text/javascript" src="<?php echo e(__BASE_URL__); ?>/js/lib/jquery.min.js"></script>   

	<link rel="stylesheet" type="text/css" title="" href="<?php echo e(__BASE_URL__); ?>/plugin/jquery.toast.min.css">

 	<?php if(!empty($site_info->google_analytics)): ?>
 		<?php echo $site_info->google_analytics; ?>

 	<?php endif; ?>
	<?php echo $__env->yieldContent('css'); ?>
	
 	<script>
 		var base_url = "<?php echo e(__BASE_URL__); ?>";
 		var base = "<?php echo e(url('/')); ?>";
 	</script>
 	<style type="text/css">

 		.main-color {
		    color: #f9a25c;
		}
		.tb-wrap {
		    position: relative;
		    text-align: center;
		}
		.tb-div {
		    position: relative;
		    margin: 0 auto;
		    max-width: 300px;
		}
		.arrow {
		    position: absolute;
		}
		#arr1 {
		    left: 70px;
		    top: 51px;
		}
		#arr2 {
		    left: 50px;
		    bottom: 10px;
		}
		#arr3 {
		    left: 50px;
		    bottom: 90px;
		}
		#arr4 {
		    left: 50px;
		    top: 60px;
		}
		#arr5 {
		    left: 40px;
		    bottom: 0px;
		}
		#arr6 {
		    left: 144px;
		    bottom: 0px;
		}
		#arr7 {
		    right: 36px;
		    bottom: 0px;
		}
		#arr8 {
		    left: 70px;
		    bottom: 52px;
		}
		@media  only screen and (min-width: 1024px) {
		    table.inner-border {
		        border: 0 !important;
		    }
		}
		@media  only screen and (min-width: 1360px) {
		    #arr1 {
			    left: 53px;
    			top: 51px;
			}
			#arr2 {
			    left: 20px;
			    bottom: 10px;
			}
			#arr3 {
			    left: 20px;
			    bottom: 90px;
			}
			#arr4 {
			    left: 20px;
			    top: 60px;
			}
			#arr5 {
			    left: 125px;
			    bottom: 0px;
			}
			#arr6 {
			    left: 205px;
			    bottom: 0px;
			}
			#arr7 {
			    left: 45px;
			    bottom: 0px;
			}
			#arr8 {
			    left: 50px;
			    bottom: 52px;
			}
		}
		table.inner-border {
		    border-collapse: collapse;
		    border-spacing: 0;
		    border: 1px solid #f9a25c;
		    margin: 0 auto;
		}
		table.inner-border td {
		    border: 1px solid #f9a25c;
		}

		.cell {
		    /*border:1px solid #F9A25C;*/
		    width: 80px;
		    height: 80px;
		    text-align: center;
		    font-size: 24px;
		    text-shadow: 1px 0px 4px rgba(249, 162, 92, 0.8);
		}
		table.inner-border tr:first-child td {
		    border-top: 0;
		}
		table.inner-border tr td:first-child {
		    border-left: 0;
		}
		table.inner-border tr:last-child td {
		    border-bottom: 0;
		}
		table.inner-border tr td:last-child {
		    border-right: 0;
		}

 	</style>
 	
</head> 
	<body>
		<?php echo $__env->make('frontend.teamplate.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<?php echo $__env->yieldContent('main'); ?>

		<?php echo $__env->make('frontend.teamplate.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<script type="text/javascript" src="<?php echo e(__BASE_URL__); ?>/js/lib/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo e(__BASE_URL__); ?>/js/lib/slick.min.js"></script> 
		<script type="text/javascript" src="https://channel.mediacdn.vn/Magazine/pc20220829042536/js/aos.min.js"></script> 
		<script type="text/javascript" src="<?php echo e(__BASE_URL__); ?>/js/private.js"></script> 
		<script type="text/javascript" src="<?php echo e(__BASE_URL__); ?>/plugin/jquery.toast.min.js"></script>

		<?php echo $__env->yieldContent('script'); ?>
		<?php if(Session::has('toastr')): ?>
			<script>
				function showToast(text, heading){
				    $.toast({
				        text: text,
				        heading: heading,
				        icon: 'success',
				        showHideTransition: 'fade',
				        allowToastClose: false,
				        hideAfter: 3000,
				        stack: 5,
				        position: 'top-right',
				        textAlign: 'left', 
				        loader: true, 
				        loaderBg: '#9ec600',
				    });   
				}
				jQuery(document).ready(function($) {
					showToast('<?php echo e(Session::get('toastr')); ?>', 'Thông báo');
				});
			</script>
		<?php endif; ?>
	</body>
</html><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/frontend/master.blade.php ENDPATH**/ ?>