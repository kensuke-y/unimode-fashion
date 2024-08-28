    <body>
       
        <!-- フッター -->
         
         <footer class="contents">
            <section id="Contact">
                <h3 class="main-text">Contact</h3>
                <div id="contact-text">
                    <div id="contact-text2">
                        <p id="contact-text3">テキストテキスト</p>
                        <p id="contact-text4">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        <p id="contact-text5">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                    <form id="cantact-form">
                        <lablel>Name:</lablel>
                        <br>
                        <input class="type-text" type="text"> 
                        <br>
                        <lablel>Mail:</lablel>
                        <br>
                        <input class="type-text" type="text"> 
                        <br>
                        <label>Message</label>
                        <br>
                        <textarea></textarea>
                        <br>
                        <input class="contact-submit" type="submit" value="send">
                    </form>
                </div>
            </section>
        </footer>

        <!-- jqueryの読み込み -->
        <script src="<?php echo get_template_directory_uri(); ?>/https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- slickの読み込み -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!-- javascriptの読み込み -->
        <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
        
        <?php wp_footer(); ?>

    </body>
</html>