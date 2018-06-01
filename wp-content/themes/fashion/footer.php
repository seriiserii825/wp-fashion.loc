</div>

<div class="footer-wrapper">
    <div class="footer-main">
        <div class="foter-left">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo-ftr.jpg" alt="" /></a>
            <p>copyright 2011 <a href="#">www.yoururl.com</a></p>
        </div>
        <div class="foter-right">
            <?php if(!dynamic_sidebar('footer')): ?>
                <h4 style="color: #fff;">Добавьте иконки социальных сетей через виджет html</h4>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

<?php if(is_home() || is_category('portfolio')): ?>

    <script type="text/javascript">
            
        $( '#carousel' ).elastislide();
                
    </script>

<?php endif; ?>

<?php if(in_category('portfolio')): ?>
    <script>
        $(function(){
            $(window).load(function(){
                $('#slide_2').liSlidik({
                    auto:3000,
                    duration: 1000
                });
            })
        });
        </script>
<?php endif; ?>

</body>
</html>
