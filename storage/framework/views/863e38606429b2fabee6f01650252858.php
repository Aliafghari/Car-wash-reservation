<div>
    <label for="<?php echo e($id ?? $name); ?>"><?php echo e($label); ?></label>
    <input type="<?php echo e($type ?? 'text'); ?>" name="<?php echo e($name); ?>" id="<?php echo e($id ?? $name); ?>"
        value="<?php echo e($value ?? ''); ?>" class="<?php echo e($class ?? ''); ?>" <?php if(isset($disabled)): ?> disabled <?php endif; ?>>
</div>
<?php /**PATH C:\xampp3\htdocs\Ali\hw19_1\resources\views/components/input.blade.php ENDPATH**/ ?>