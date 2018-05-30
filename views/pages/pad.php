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

            <div class="left_touches_container_beats">
                <div class="touches touches_beat left_touche_beats key-192" data-sound="pad_1" ><a href="#"></a></div>
                <div class="touches touches_beat left_touche_beats key-49" data-sound="2"><a href="#"></a></div>
                <div class="touches touches_beat left_touche_beats key-50" data-sound="3"><a href="#"></a></div>
                <div class="touches touches_beat left_touche_beats key-51" data-sound="4"><a href="#"></a></div>
                <div class="touches touches_beat left_touche_beats key-52" data-sound="5"><a href="#"></a></div>
                <div class="touches touches_beat left_touche_beats key-53" data-sound="6"><a href="#"></a></div>
            </div>

            <!--RIGHT BEAT TOUCHES -->

            <div class="right_touches_container_beats">
            <div class="touches touches_beat right_touche_beats key-54" data-sound="7"><a href="#"></a></div>
            <div class="touches touches_beat right_touche_beats key-55" data-sound="8"><a href="#"></a></div>
            <div class="touches touches_beat right_touche_beats key-56" data-sound="9"><a href="#"></a></div>
            <div class="touches touches_beat right_touche_beats key-57" data-sound="10"><a href="#"></a></div>
            <div class="touches touches_beat right_touche_beats key-48" data-sound="11"><a href="#"></a></div>
            <div class="touches touches_beat right_touche_beats key-189" data-sound="12"><a href="#"></a></div>
            </div>

            <!--LEFT BASS TOUCHES -->

            <div class="left_touches_container_bass">
            <div class="touches touches_bass left_touche_bass key-65" data-sound="13"><a href="#"></a></div>
            <div class="touches touches_bass left_touche_bass key-90" data-sound="14"><a href="#"></a></div>
            <div class="touches touches_bass left_touche_bass key-69" data-sound="15"><a href="#"></a></div>
            <div class="touches touches_bass left_touche_bass key-82" data-sound="16"><a href="#"></a></div>
            <div class="touches touches_bass left_touche_bass key-84" data-sound="17"><a href="#"></a></div>
            <div class="touches touches_bass left_touche_bass key-89" data-sound="18"><a href="#"></a></div>
            </div>

            <!--RIGHT BASS TOUCHES -->

            <div class="right_touches_container_bass">
            <div class="touches touches_bass right_touche_bass key-85" data-sound="19"><a href="#"></a></div>
            <div class="touches touches_bass right_touche_bass key-73" data-sound="20"><a href="#"></a></div>
            <div class="touches touches_bass right_touche_bass key-79" data-sound="21"><a href="#"></a></div>
            <div class="touches touches_bass right_touche_bass key-80" data-sound="22"><a href="#"></a></div>
            <div class="touches touches_bass right_touche_bass key-229" data-sound="23"><a href="#"></a></div>
            <div class="touches touches_bass right_touche_bass key-221" data-sound="24"><a href="#"></a></div>
                
            </div>

            <!--LEFT MELODIES TOUCHES -->
            <div class="left_touches_container_melodies">
            <div class="touches touches_melodies left_touche_melodies key-81" data-sound="25"><a href="#"></a></div>
            <div class="touches touches_melodies left_touche_melodies key-83" data-sound="26"><a href="#"></a></div>
            <div class="touches touches_melodies left_touche_melodies key-68" data-sound="27"><a href="#"></a></div>
            <div class="touches touches_melodies left_touche_melodies key-70" data-sound="28"><a href="#"></a></div>
            <div class="touches touches_melodies left_touche_melodies key-71" data-sound="29"><a href="#"></a></div>
            <div class="touches touches_melodies left_touche_melodies key-72" data-sound="30"><a href="#"></a></div>
            </div>

            <!--RIGHT MELODIES TOUCHES -->
            <div class="right_touches_container_melodies">
                <div class="touches touches_melodies right_touche_melodies key-74" data-sound="31"><a href="#"></a></div>
                <div class="touches touches_melodies right_touche_melodies key-75" data-sound="32"><a href="#"></a></div>
                <div class="touches touches_melodies right_touche_melodies key-76" data-sound="33"><a href="#"></a></div>
                <div class="touches touches_melodies right_touche_melodies key-77" data-sound="34"><a href="#"></a></div>
                <div class="touches touches_melodies right_touche_melodies key-222" data-sound="35"><a href="#"></a></div>
                <div class="touches touches_melodies right_touche_melodies key-220" data-sound="36"><a href="#"></a></div>
            </div>




        <!-- //////////////////FIRST PAD//////////////// -->


           <!--songs bass -->
            <!--
            <audio class="sound pad_2" src="sons/bass/2.wav"></audio>
            <audio class="sound pad_3" src="sons/bass/3.wav"></audio>
            <audio class="sound pad_4" src="sons/bass/4.wav"></audio>
            <audio class="sound pad_5" src="sons/bass/5.wav"></audio>
            <audio class="sound pad_6" src="sons/bass/6.wav"></audio>
            <audio class="sound pad_7" src="sons/bass/7.wav"></audio>
            <audio class="sound pad_8" src="sons/bass/8.wav"></audio>
            <audio class="sound pad_9" src="sons/bass/9.wav"></audio>
            <audio class="sound pad_10" src="sons/bass/10.wav"></audio>
            <audio class="sound pad_11" src="sons/bass/11.wav"></audio>
            <audio class="sound pad_12" src="sons/bass/12.wav"></audio>-->

            <!--songs beats -->
            <!--<audio class="sound pad_13" src="sons/beats/1.wav"></audio>
            <audio class="sound pad_14" src="sons/beats/2.wav"></audio>
            <audio class="sound pad_15" src="sons/beats/3.wav"></audio>
            <audio class="sound pad_16" src="sons/beats/4.wav"></audio>
            <audio class="sound pad_17" src="sons/beats/5.wav"></audio>
            <audio class="sound pad_18" src="sons/beats/6.wav"></audio>
            <audio class="sound pad_19" src="sons/beats/7.wav"></audio>
            <audio class="sound pad_20" src="sons/beats/8.wav"></audio>
            <audio class="sound pad_21" src="sons/beats/9.wav"></audio>
            <audio class="sound pad_22" src="sons/beats/10.wav"></audio>
            <audio class="sound pad_23" src="sons/beats/11.wav"></audio>
            <audio class="sound pad_24" src="sons/beats/12.wav"></audio>-->

            <!--songs melodies -->
            <!--<audio class="sound pad_25" src="sons/melodies/1.wav"></audio>
            <audio class="sound pad_26" src="sons/melodies/2.wav"></audio>
            <audio class="sound pad_27" src="sons/melodies/3.wav"></audio>
            <audio class="sound pad_28" src="sons/melodies/4.wav"></audio>
            <audio class="sound pad_29" src="sons/melodies/5.wav"></audio>
            <audio class="sound pad_30" src="sons/melodies/6.wav"></audio>
            <audio class="sound pad_31" src="sons/melodies/7.wav"></audio>
            <audio class="sound pad_32" src="sons/melodies/8.wav"></audio>
            <audio class="sound pad_33" src="sons/melodies/9.wav"></audio>
            <audio class="sound pad_34" src="sons/melodies/10.wav"></audio>
            <audio class="sound pad_35" src="sons/melodies/11.wav"></audio>
            <audio class="sound pad_36" src="sons/melodies/12.wav"></audio>-->
        












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