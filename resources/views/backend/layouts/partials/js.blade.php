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
<!-- Plugins JS start-->
<script src="{{asset('back-assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('back-assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<!-- Theme js-->
<script src="{{asset('back-assets/js/script.js')}}"></script>
<script src="{{asset('back-assets/js/theme-customizer/customizer.js')}}"></script>
<!-- Plugin used-->
<script type="text/javascript">
    $(document).ready(function(){
        $(".flash-message").delay(5000).fadeOut(600);
    });
    // Marketing Settings
    $(document).ready(function(){
        $(".divOne").hide();
        $(".divTwo").hide();
        $(".divThree").hide();

        $("#divOne").click(function(){
            var x = 
            $(".divOne").show();
            $(".divTwo").hide();
            $(".divThree").hide();
        });

        $("#divTwo").click(function(){
            $(".divOne").hide();
            $(".divTwo").show();
            $(".divThree").hide();
        });

        $("#divThree").click(function(){
            $(".divOne").hide();
            $(".divTwo").hide();
            $(".divThree").show();
        });        
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

    // Cascading Dropdown
    $(document).ready(function () {
        $('.country-dropdown').on('change', function () {
            var idState = this.value;
            $(".city-dropdown").html('');
            $.ajax({
                url: "{{url('api/fetch-cities')}}",
                type: "POST",
                data: {
                    id: idState,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {

                    $('.city-dropdown').html('<option value="0">-- Select Provinces --</option>');

                    $.each(res.cities, function (key, value) {
                        $(".city-dropdown").append('<option value="' + value
                            .id + '">' + value.provinces_name + '</option>');
                    });
                }
            });
        });
    });
</script>