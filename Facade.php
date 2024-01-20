<?php
// firstly we have to create sub systems
class AudioPlayer {
    public function playAudio($file){
        return "Playing audio file is  $file";
    }
}
class videoPlayer {
    public function playVideo($file){
        return "Playing video file is $file";
    }
}
// now we create our facade class
class MultimediaFacade {
    private $audioPlayer;
    private $videoPlayer;
    public function __construct() {;
        $this->audioPlayer = new AudioPlayer();
        $this->videoPlayer=  new videoPlayer();
    }
    public function playMedia($song,$movie){
        $result = "MultimediaFacade is playing:\n";
        $result .= $this->audioPlayer->playAudio($song) . "\n";
        $result .= $this->videoPlayer->playVideo($movie) . "\n";
        return $result;
    }
}
// let client ...
$multimedia = new MultimediaFacade();
echo $multimedia->playMedia('test.mp-3','movie.mp4');