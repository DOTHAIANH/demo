
<?php $__env->startSection('controller', 'Media'); ?>
<?php $__env->startSection('action','Media'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="ckfinder-widget" id="ckfinder-widget"></div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    CKFinder.modal( {
        chooseFiles: true,
        width: 1200,
        height: 600,
        onInit: function( finder ) {
        finder.on( 'files:choose', function( evt ) {
            var file = evt.data.files.first();
            // alert(file.getUrl())
            navigator.clipboard.writeText(file.getUrl());
            document.getElementById( 'url' ).value = file.getUrl();
        });
        finder.on( 'file:choose:resizedImage', function( evt ) {
            navigator.clipboard.writeText(evt.data.resizedUrl);
            document.getElementById( 'url' ).value = evt.data.resizedUrl;
        });
        }
    });
</script>
<?php $__env->stopSection(); ?>
    

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/backend/media.blade.php ENDPATH**/ ?>