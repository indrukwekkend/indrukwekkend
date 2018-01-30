<div id="contact" class="part-vacature">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-11 col-xl-10">
        <div class="row bg-orange">
          <div class="col-12 pt-4">

            <div class="row mb-4 align-items-center">
              <div class="col-12 col-lg-6 text-lg-right border-right">
                <h4><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_field('title_left')); ?></h4>
              </div>
              <div class="col-12 col-lg-6 text-left">
                <h5><?php echo preg_replace('~((\w+\s){4})~', '$1' . "<br>", get_field('title_right')); ?></h5>
              </div>
            </div>

            <div class="row justify-content-center">
              <div class="col-12 col-md-8">
                <?php $gravityform_id = get_field('gravityforms'); ?>
                <?php gravity_form( $gravityform_id, false, false, false, '', true ); ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
