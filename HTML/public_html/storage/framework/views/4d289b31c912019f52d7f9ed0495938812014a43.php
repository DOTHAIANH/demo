
<?php $__env->startSection('main'); ?>
<main>
    <section class="box-homepage result-banner result-old-1">
        <div class="container">
            <div class="content-home text-center">
                <div class="txt-result-home">
                    <p  data-aos="fade-down">Xin Chúc mừng!</p>
                    <p  data-aos="fade-up">Kết quả tra cứu của <span><?php echo e($data['name'] ?? ''); ?></span> đã sẵn sàng</p>
                    <div class="view-result"  data-aos="zoom-out" data-aos-delay="600"><a href="<?php echo e(route('result',['name' => request('name'),'day' => request('day'),'month' => request('month'),'year' => request('year')])); ?>">XEM NGAY</a></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/frontend/pages/number.blade.php ENDPATH**/ ?>