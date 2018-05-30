<?php
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
                    <img class="options_img" src="assets/img/rouage.svg" alt="options">
                </a>
            </div>
            <div class="loop loop_beats">
                <img src="assets/img/loop.svg" alt="loop"> loop
            </div>
            <div class="loop loop_bass">
                <img src="assets/img/loop.svg" alt="loop"> loop
            </div>
            <div class="loop loop_melodies">
                <img src="assets/img/loop.svg" alt="loop"> loop
            </div>
            <div class="left_buttons">
                <div class="play">
                    <a href="#">
                        <img src="assets/img/play.svg" alt="play">
                    </a>
                </div>
                <div class="rec">
                    <a href="#">
                        <img src="assets/img/rec.svg" alt="rec">
                    </a>
                </div>
                <div class="stop">
                    <a href="#">
                        <img src="assets/img/stop.svg" alt="stop">
                    </a>
                </div>
                <div class="loop_song">
                    <a href="#">
                        <img src="assets/img/replay.svg" alt="loopsong">
                    </a>
                </div>
                <div class="delete">
                    <a href="#">
                        <img src="assets/img/delete.svg" alt="delete">
                    </a>
                </div>
                <!-- window.prompt 'etes vous sur?' -->
            </div>


            <div class="touches_container">

            <!--LEFT BEAT TOUCHES -->
            <div class="left_touches_container_beats beats">
                <div class="touches touches_beat left_touche_beats key-192" data-sound="pad_1" ><a href="#"></a></div>
                <div class="touches touches_beat left_touche_beats key-49" data-sound="pad_2"><a href="#"></a></div>
                <div class="touches touches_beat left_touche_beats key-50" data-sound="pad_3"><a href="#"></a></div>
                <div class="touches touches_beat left_touche_beats key-51" data-sound="pad_4"><a href="#"></a></div>
                <div class="touches touches_beat left_touche_beats key-52" data-sound="pad_5"><a href="#"></a></div>
                <div class="touches touches_beat left_touche_beats key-53" data-sound="pad_6"><a href="#"></a></div>
            </div>

            <!--RIGHT BEAT TOUCHES -->

            <div class="right_touches_container_beats beats">
            <div class="touches touches_beat right_touche_beats key-54" data-sound="pad_7"><a href="#"></a></div>
            <div class="touches touches_beat right_touche_beats key-55" data-sound="pad_8"><a href="#"></a></div>
            <div class="touches touches_beat right_touche_beats key-56" data-sound="pad_9"><a href="#"></a></div>
            <div class="touches touches_beat right_touche_beats key-57" data-sound="pad_10"><a href="#"></a></div>
            <div class="touches touches_beat right_touche_beats key-48" data-sound="pad_11"><a href="#"></a></div>
            <div class="touches touches_beat right_touche_beats key-189" data-sound="pad_12"><a href="#"></a></div>
            </div>

            <!--LEFT BASS TOUCHES -->

            <div class="left_touches_container_bass bass">
            <div class="touches touches_bass left_touche_bass key-65" data-sound="pad_13"><a href="#"></a></div>
            <div class="touches touches_bass left_touche_bass key-90" data-sound="pad_14"><a href="#"></a></div>
            <div class="touches touches_bass left_touche_bass key-69" data-sound="pad_15"><a href="#"></a></div>
            <div class="touches touches_bass left_touche_bass key-82" data-sound="pad_16"><a href="#"></a></div>
            <div class="touches touches_bass left_touche_bass key-84" data-sound="pad_17"><a href="#"></a></div>
            <div class="touches touches_bass left_touche_bass key-89" data-sound="pad_18"><a href="#"></a></div>
            </div>

            <!--RIGHT BASS TOUCHES -->

            <div class="right_touches_container_bass bass">
            <div class="touches touches_bass right_touche_bass key-85" data-sound="pad_19"><a href="#"></a></div>
            <div class="touches touches_bass right_touche_bass key-73" data-sound="pad_20"><a href="#"></a></div>
            <div class="touches touches_bass right_touche_bass key-79" data-sound="pad_21"><a href="#"></a></div>
            <div class="touches touches_bass right_touche_bass key-80" data-sound="pad_22"><a href="#"></a></div>
            <div class="touches touches_bass right_touche_bass key-229" data-sound="pad_23"><a href="#"></a></div>
            <div class="touches touches_bass right_touche_bass key-221" data-sound="pad_24"><a href="#"></a></div>
                
            </div>

            <!--LEFT MELODIES TOUCHES -->
            <div class="left_touches_container_melodies melodies">
            <div class="touches touches_melodies left_touche_melodies key-81" data-sound="pad_25"><a href="#"></a></div>
            <div class="touches touches_melodies left_touche_melodies key-83" data-sound="pad_26"><a href="#"></a></div>
            <div class="touches touches_melodies left_touche_melodies key-68" data-sound="pad_27"><a href="#"></a></div>
            <div class="touches touches_melodies left_touche_melodies key-70" data-sound="pad_28"><a href="#"></a></div>
            <div class="touches touches_melodies left_touche_melodies key-71" data-sound="pad_29"><a href="#"></a></div>
            <div class="touches touches_melodies left_touche_melodies key-72" data-sound="pad_30"><a href="#"></a></div>
            </div>

            <!--RIGHT MELODIES TOUCHES -->
            <div class="right_touches_container_melodies melodies">
                <div class="touches touches_melodies right_touche_melodies key-74" data-sound="pad_31"><a href="#"></a></div>
                <div class="touches touches_melodies right_touche_melodies key-75" data-sound="pad_32"><a href="#"></a></div>
                <div class="touches touches_melodies right_touche_melodies key-76" data-sound="pad_33"><a href="#"></a></div>
                <div class="touches touches_melodies right_touche_melodies key-77" data-sound="pad_34"><a href="#"></a></div>
                <div class="touches touches_melodies right_touche_melodies key-222" data-sound="pad_35"><a href="#"></a></div>
                <div class="touches touches_melodies right_touche_melodies key-220" data-sound="pad_36"><a href="#"></a></div>
            </div>
<<<<<<< HEAD
=======

>>>>>>> d770d0a7dfc9b9cec34ca2f8dc2c49a7f32d52df
        </div>

    <div class="song_select">
        <div class="pop_select genre changeGenreColor"><a href="#"></a></div>
        <div class="rock_select genre"><a href="#"></a></div>
        <div class="house_select genre"><a href="#"></a></div>
    </div>




        </div>
    </div>
    </div>
    </body>
    <script src="js/pad.js"></script>

    </html>