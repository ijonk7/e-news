<script>
$(document).ready(function(){
  $('.dropdown-akun').popover({
      title: '<a href="<?= base_url('profile') ?>" class="btn btn-block" style="white-space: nowrap; background-color:#ec4366; color:white;">Edit Profile</a><a href="<?= base_url('login_fb/logout') ?>" class="btn btn-block" style="white-space: nowrap; background-color:#ec4366; color:white;">Logout</a>', 
      content: "", 
      html: true,
      placement: "bottom"
      }); 
});

if (window.location.hash && window.location.hash == '#_=_') {
    if (window.history && history.pushState) {
        window.history.pushState("", document.title, window.location.pathname);
    } else {
        // Prevent scrolling by storing the page's current scroll offset
        var scroll = {
            top: document.body.scrollTop,
            left: document.body.scrollLeft
        };
        window.location.hash = '';
        // Restore the scroll offset, should be flicker free
        document.body.scrollTop = scroll.top;
        document.body.scrollLeft = scroll.left;
    }
}
</script>

<!-- jQuery Plugins -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.stellar.min.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>