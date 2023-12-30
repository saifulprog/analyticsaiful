<script src="{{asset('back-assets/js/jquery-3.5.1.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('back-assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('back-assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('back-assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('assets/js/config.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('back-assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('back-assets/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('back-assets/js/script.js')}}"></script>
<script src="{{asset('back-assets/js/theme-customizer/customizer.js')}}"></script>
<!-- Plugin used-->
<script type="text/javascript">
    $(document).ready(function(){
        $(".flash-message").delay(5000).fadeOut(600);
    });

    const slugify = (string, separator = '-') => {
        return string
        .toString()    // Convert input to string (optional)
        .replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
        .toLowerCase()    // Convert the string to lowercase letters
        .replace(/^\s+|\s+$/gm,'')
        .trim()    // Remove whitespace from both sides of the string
        .replace(/\s+/g, separator)    // Replace spaces with hyphen (-)
        .replace(/[^\w\-]+/g, '')    // Remove all non-word characters
        .replace(/\_/g, separator)    // Replace underscore (_) with hyphen (-)
        .replace(/\-\-+/g, separator)    // Replace multiple (-) with single (-)
        .replace(/\-$/g, '')    // Remove trailing (-)
    }
</script>