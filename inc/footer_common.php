 <!--jquery.js--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!--javascript-->   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script> 
<script>
function toggleMobileMenu()
    {
    var $mobileMenu = $('#mobile-main-menu');
    $mobileMenu.slideToggle('fast');
}

$(document).ready(function(){
                  $('"mobile-menu-button').on('click', toggleMobileMenu);
                  });
        
        
</script>