<?php
    include 'views/partials/navigation.php';
?>
    <div class="container">
    <div class="pad_background items">
            <canvas class="canvas"></canvas>
        </div>
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
            <div class="left_buttons">
                <div class="play">
                    <a><img src="assets/img/play.svg" alt="play"></a>
                </div>
                <div class="rec">
                    <a class="btn btn-primary"><img src="assets/img/rec.svg" alt="rec"></a>
                </div>
                <div class="stop">
                    <a href="#">
                    <a class="btn btn-warning"><img src="assets/img/stop.svg" alt="stop"></a>
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
                <div class="touches touches_beat left_touche_beats key-192" data-sound="sons/beats/1.wav">#</div>
                <div class="touches touches_beat left_touche_beats key-49" data-sound="sons/beats/2.wav">1</div>
                <div class="touches touches_beat left_touche_beats key-50" data-sound="sons/beats/3.wav">2</div>
                <div class="touches touches_beat left_touche_beats key-51" data-sound="sons/beats/4.wav">3</div>
                <div class="touches touches_beat left_touche_beats key-52" data-sound="sons/beats/5.wav">4</div>
                <div class="touches touches_beat left_touche_beats key-53" data-sound="sons/beats/6.wav">5</div>
            </div>

            <!--RIGHT BEAT TOUCHES -->

            <div class="right_touches_container_beats beats">
                <div class="touches touches_beat right_touche_beats key-54" data-sound="sons/beats/7.wav">6</div>
                <div class="touches touches_beat right_touche_beats key-55" data-sound="sons/beats/8.wav">7</div>
                <div class="touches touches_beat right_touche_beats key-56" data-sound="sons/beats/9.wav">8</div>
                <div class="touches touches_beat right_touche_beats key-57" data-sound="sons/beats/10.wav">9</div>
                <div class="touches touches_beat right_touche_beats key-48" data-sound="sons/beats/11.wav">0</div>
                <div class="touches touches_beat right_touche_beats key-189" data-sound="sons/beats/12.wav">)</div>
            </div>

            <!--LEFT BASS TOUCHES -->

            <div class="left_touches_container_bass bass">
                <div class="touches touches_bass left_touche_bass key-65" data-sound="sons/bass/1.wav">A</div>
                <div class="touches touches_bass left_touche_bass key-90" data-sound="sons/bass/2.wav">Z</div>
                <div class="touches touches_bass left_touche_bass key-69" data-sound="sons/bass/3.wav">E</div>
                <div class="touches touches_bass left_touche_bass key-82" data-sound="sons/bass/4.wav">R</div>
                <div class="touches touches_bass left_touche_bass key-84" data-sound="sons/bass/5.wav">T</div>
                <div class="touches touches_bass left_touche_bass key-89" data-sound="sons/bass/6.wav">Y</div>
            </div>

            <!--RIGHT BASS TOUCHES -->

            <div class="right_touches_container_bass bass">
            <div class="touches touches_bass right_touche_bass key-85" data-sound="sons/bass/7.wav">U</div>
            <div class="touches touches_bass right_touche_bass key-73" data-sound="sons/bass/8.wav">I</div>
            <div class="touches touches_bass right_touche_bass key-79" data-sound="sons/bass/9.wav">O</div>
            <div class="touches touches_bass right_touche_bass key-80" data-sound="sons/bass/10.wav">P</div>
            <div class="touches touches_bass right_touche_bass key-219" data-sound="sons/bass/11.wav">^</div>
            <div class="touches touches_bass right_touche_bass key-221" data-sound="sons/bass/12.wav">$</div>
                
            </div>

            <!--LEFT MELODIES TOUCHES -->
            <div class="left_touches_container_melodies melodies">
            <div class="touches touches_melodies left_touche_melodies key-81" data-sound="sons/melodies/1.wav">Q</div>
            <div class="touches touches_melodies left_touche_melodies key-83" data-sound="sons/melodies/2.wav">S</div>
            <div class="touches touches_melodies left_touche_melodies key-68" data-sound="sons/melodies/3.wav">D</div>
            <div class="touches touches_melodies left_touche_melodies key-70" data-sound="sons/melodies/4.wav">F</div>
            <div class="touches touches_melodies left_touche_melodies key-71" data-sound="sons/melodies/5.wav">G</div>
            <div class="touches touches_melodies left_touche_melodies key-72" data-sound="sons/melodies/6.wav">H</div>
            </div>

            <!--RIGHT MELODIES TOUCHES -->
            <div class="right_touches_container_melodies melodies">
                <div class="touches touches_melodies right_touche_melodies key-74" data-sound="sons/melodies/7.wav">J</div>
                <div class="touches touches_melodies right_touche_melodies key-75" data-sound="sons/melodies/8.wav">K</div>
                <div class="touches touches_melodies right_touche_melodies key-76" data-sound="sons/melodies/8.wav">L</div>
                <div class="touches touches_melodies right_touche_melodies key-77" data-sound="sons/melodies/9.wav">M</div>
                <div class="touches touches_melodies right_touche_melodies key-222" data-sound="sons/melodies/10.wav">ù</div>
                <div class="touches touches_melodies right_touche_melodies key-220" data-sound="sons/melodies/11.wav">`</div>
            </div>
        </div>

        <div class="song_select">
            <div class="pop_select genre changeGenreColor">
                <audio controls autoplay loop width=30 class="audio"></audio>
                <button class="js-start">Start</button>
                <button class="js-stop">Stop</button>
            </div>
            <div class="rock_select genre">
                <audio controls autoplay loop width=30 class="audio2"></audio>
                <button class="js-start2">Start</button>
                <button class="js-stop2">Stop</button>
            </div>
            <div class="house_select genre">
                <audio controls autoplay loop width=30 class="audio3"></audio>
                <button class="js-start">Start</button>
                <button class="js-stop">Stop</button>
            </div>
        </div>
        <div class="button_bckg">
            <div class="small_button">
        </div>
        </div>
    </div>
    </div>
    </body>
    <script src="https://cdn.webrtc-experiment.com/MediaStreamRecorder.js"> </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="js/PadMusic.js"></script>
    <script src="js/PadCanvas.js"></script>
    <script src="js/Record.js"></script>
    <script src="js/RecordMicrophone.js"></script>
    <script src="js/Settings.js"></script>
    <script src="js/main.js"></script>

    </html>