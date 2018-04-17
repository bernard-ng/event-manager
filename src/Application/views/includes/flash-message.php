<?php if ($flashes->has()): ?>
        <?php foreach($flashes->get() as $type => $message): ?>
            <script type="text/javascript">
                var message = "<?php echo $message ?>";
                var type = "<?php echo $type ?>";
                Materialize.toast(message, 5000, type);
            </script>
        <?php endforeach; ?>
<?php endif; ?>
