
<?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<script>
    // Copy written
    $(document).ready(function () {

        // Title  =>  Meta title.
        $("#title_<?php echo e($lang->lang); ?>").on("input", function () {
            $("#meta_title_<?php echo e($lang->lang); ?>").val(this.value);
        });

        // Title => slug
        $("#title_<?php echo e($lang->lang); ?>").keyup(function () {
            var Text = $(this).val();

            var slug = getSlug(Text);

            $("#slug_<?php echo e($lang->lang); ?>").val(slug);

        });

        // count meta title letters
        $('#meta_title_<?php echo e($lang->lang); ?>').keyup(function() {
            // append them to a span
            $('#titleSpan_<?php echo e($lang->lang); ?>').text('Number of Characters ' + this.value.length).css('color', 'green');
        })

        // count meta desc letters
        $('#meta_desc_<?php echo e($lang->lang); ?>').keyup(function() {
            // append them to a span
            $('#descSpan_<?php echo e($lang->lang); ?>').text('Number of Characters ' + this.value.length).css('color', 'green');
        })



    });
</script>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>