<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <style>
        .dropdown-menu .nav-item a { color: #000 !important; }
        .dropdown-toggle:after { content: none; }
        .dropdown-menu .dropdown-menu {  margin-left:0%; margin-right: 0;}
        .dropdown-menu li { position: relative; display: block;width:200px }
        .nav-item .submenu { display:none; position: relative;top:100%;left: 1%;}
        .dropdown-menu>li:hover { background-color: transparent; }
        .dropdown-menu>li:hover>.submenu { display: block; }
    </style>
     <nav class="navbar navbar-expand-lg navbar-light "style="background-color: #e3f2fd;height: 100%; display:inline-block"> 
        <div>
        <ul class="navbar-nav mr-auto" style="display:inline-block">
            @each('threelevelmenu.submenu', $menulist, 'menu', 'empty')
        </ul>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">

        $(document).on('click', '.dropdown-menu', ($event) => $event.stopPropagation());
        if ($(window).width() < 992) {
            $('.dropdown-menu a').click(($event) => {
                $event.preventDefault();
                if ($(this).next('.submenu').length) {
                    $(this).next('.submenu').toggle();
                }
                $('.dropdown').on('hide.bs.dropdown', () => $(this).find('.submenu').hide());
            });
        }
        
    </script>
</body>