<?php
    include 'views/partials/header.php';
    include 'views/partials/navigation.php';
?>

    <div class="container">
        <div class="items">
            <?php
            include 'navigation.php';
        ?>
        </div>
        <div class="pad_background items"></div>
        <div class="pad items">
            <span class="top_title_beats top_title">BEATS</span>
            <span class="top_title_bass top_title">BASS</span>
            <span class="top_title_melodies top_title">MELODIES</span>
            <div class="options">
                <a href="#">
                    <img class="options_img" src="../assets/img/rouage.svg" alt="options">
                </a>
            </div>
            <div class="loop loop_beats">
                <img src="../assets/img/loop.svg" alt="loop"> loop
            </div>
            <div class="loop loop_bass">
                <img src="../assets/img/loop.svg" alt="loop"> loop
            </div>
            <div class="loop loop_melodies">
                <img src="../assets/img/loop.svg" alt="loop"> loop
            </div>
            <div class="left_buttons">
                <div class="play">
                    <a href="#">
                        <img src="../assets/img/play.svg" alt="play">
                    </a>
                </div>
                <div class="rec">
                    <a href="#">
                        <img src="../assets/img/rec.svg" alt="rec">
                    </a>
                </div>
                <div class="stop">
                    <a href="#">
                        <img src="../assets/img/stop.svg" alt="stop">
                    </a>
                </div>
                <div class="loop_song">
                    <a href="#">
                        <img src="../assets/img/replay.svg" alt="loopsong">
                    </a>
                </div>
                <div class="delete">
                    <a href="#">
                        <img src="../assets/img/delete.svg" alt="delete">
                    </a>
                </div>
                <!-- window.prompt 'etes vous sur?' -->
            </div>
            <div class="left_touches_container_beats">
                <div class="touches_beat left_touche_beats"></div>
                <div class="touches_beat left_touche_beats"></div>
                <div class="touches_beat left_touche_beats"></div>
                <div class="touches_beat left_touche_beats"></div>
                <div class="touches_beat left_touche_beats"></div>
                <div class="touches_beat left_touche_beats"></div>
            </div>
            <div class="right_touches_container_beats">
                <div class="touches_beat right_touche_beats"></div>
                <div class="touches_beat right_touche_beats"></div>
                <div class="touches_beat right_touche_beats"></div>
                <div class="touches_beat right_touche_beats"></div>
                <div class="touches_beat right_touche_beats"></div>
                <div class="touches_beat right_touche_beats"></div>
            </div>
            <div class="left_touches_container_bass">
                <div class="touches_bass left_touche_bass"></div>
                <div class="touches_bass left_touche_bass"></div>
                <div class="touches_bass left_touche_bass"></div>
                <div class="touches_bass left_touche_bass"></div>
                <div class="touches_bass left_touche_bass"></div>
                <div class="touches_bass left_touche_bass"></div>
            </div>
            <div class="right_touches_container_bass">
                <div class="touches_bass right_touche_bass"></div>
                <div class="touches_bass right_touche_bass"></div>
                <div class="touches_bass right_touche_bass"></div>
                <div class="touches_bass right_touche_bass"></div>
                <div class="touches_bass right_touche_bass"></div>
                <div class="touches_bass right_touche_bass"></div>
            </div>
            <div class="left_touches_container_melodies">
                <div class="touches_melodies left_touche_melodies"></div>
                <div class="touches_melodies left_touche_melodies"></div>
                <div class="touches_melodies left_touche_melodies"></div>
                <div class="touches_melodies left_touche_melodies"></div>
                <div class="touches_melodies left_touche_melodies"></div>
                <div class="touches_melodies left_touche_melodies"></div>
            </div>
            <div class="right_touches_container_melodies">
                <div class="touches_melodies right_touche_melodies"></div>
                <div class="touches_melodies right_touche_melodies"></div>
                <div class="touches_melodies right_touche_melodies"></div>
                <div class="touches_melodies right_touche_melodies"></div>
                <div class="touches_melodies right_touche_melodies"></div>
                <div class="touches_melodies right_touche_melodies"></div>
            </div>
        </div>
        <!--
                <div class="touches_container">
                    <div class="touches_beat">
                        <div class="button button_1 key-65" data-sound="clap"></div>
                        <div class="button button_2 key-90" data-sound="hi-hat"></div>
                        <div class="button button_3 key-69" data-sound="kick"></div>
                        <div class="button button_4 key-82" data-sound="open-hat"></div>
                        <div class="button button_5 key-84" data-sound="snare"></div>
                        <div class="button button_6 key-89"></div>
                        <div class="button button_7"></div>
                        <div class="button button_8"></div>
                        <div class="button button_9"></div>
                        <div class="button button_10"></div>
                        <div class="button button_11"></div>
                        <div class="button button_12"></div>
                    </div>
                    <div class="touches_bass">
                        <div class="button button_1"></div>
                        <div class="button button_2"></div>
                        <div class="button button_3"></div>
                        <div class="button button_4"></div>
                        <div class="button button_5"></div>
                        <div class="button button_6"></div>
                        <div class="button button_7"></div>
                        <div class="button button_8"></div>
                        <div class="button button_9"></div>
                        <div class="button button_10"></div>
                        <div class="button button_11"></div>
                        <div clazss="button button_12"></div>
                    </div>
                    <div class="touches_melodies">
                        <div class="button button_1"></div>
                        <div class="button button_2"></div>
                        <div class="button button_3"></div>
                        <div class="button button_4"></div>
                        <div class="button button_5"></div>
                        <div class="button button_6"></div>
                        <div class="button button_7"></div>
                        <div class="button button_8"></div>
                        <div class="button button_9"></div>
                        <div class="button button_10"></div>
                        <div class="button button_11"></div>
                        <div class="button button_12"></div>
                    </div>
                </div>-->
    </div>


    </div>
    </body>
    <script src="js/pad.js"></script>
    <script src="js/main.js"></script>

    </html>