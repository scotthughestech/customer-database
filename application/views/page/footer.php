    <hr>
    <footer>
        Copyright &copy; 2017 FreeCustomerDatabaseSoftware.com
    </footer>
</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<!-- Knockout JS -->
<script src="<?php echo base_url('assets/js/knockout.min.js'); ?>"></script>
<!-- Javascript utility functions -->
<script>
    function base_url(url) {
        return '<?php echo base_url(); ?>' + url;
    }
    function site_url(url) {
        return '<?php echo site_url(); ?>' + '/' + url;
    }
</script>
<!-- Custom javascript -->
<?php if (isset($scripts)): ?>
    <?php foreach ($scripts as $script): ?>
        <script src="<?php echo base_url('assets/js/' . $script); ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>