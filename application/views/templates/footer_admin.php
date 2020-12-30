<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('include/jquery-3.3.1.min.js') ?>"></script>
<!-- Metro 4 -->
<script src="<?= base_url('include/metro4/js/metro.js') ?>"></script>
<!-- Semantic UI -->
<script src="<?= base_url('include/semantic-ui/components/transition.js') ?>"></script>
<script src="<?= base_url('include/semantic-ui/components/dimmer.js') ?>"></script>
<script src="<?= base_url('include/semantic-ui/components/modal.js') ?>"></script>

<script src="<?= base_url('include/jquery.timeago.js') ?>"></script>
<script src="<?= base_url('include/sweetAlert2/sweetalert2.all.min.js') ?>"></script>
<script src="<?= base_url('include/jquery.easing.1.3.js') ?>"></script>
<script src="<?= base_url('include/jquery.mask.min.js') ?>"></script>
<script src="<?= base_url('include/select2/js/select2.js') ?>"></script>


<script src="<?= base_url('include/datatables/js/jquery.dataTables.js') ?>"></script>
<script src="<?= base_url('include/datatables/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('include/datatables/js/buttons.flash.min.js') ?>"></script>
<script src="<?= base_url('include/datatables/js/jszip.min.js') ?>"></script>
<script src="<?= base_url('include/datatables/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('include/datatables/js/buttons.print.min.js') ?>"></script>


<!-- JS Fontawesome -->
<!-- <script src="<?= base_url('include/fontawesome/js/all.min.js') ?>"></script> -->

<script src="<?= base_url('include/js/base.js') ?>"></script>
<!-- Costum Script -->
<?php if ($js != '') : ?>
    <script src="<?= base_url('include/js/' . $js . '') ?>"></script>
<?php endif ?>
</body>

</html>