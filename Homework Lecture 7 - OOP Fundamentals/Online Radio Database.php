<?php
$numberOfSongs = trim(fgets(STDIN));
$playlist = [];
$finalLength = 0;
$hour = 0;
$minute = 0;
$second = 0;
$finalPlaylistArr = [];

for ($i = 0; $i < $numberOfSongs; $i++) {
    $playlist[$i] = trim(fgets(STDIN));
    $playlist[$i] = explode(";", $playlist[$i]);
}
$countSongs = 0;

//var_dump($playlist);


class Playlist
{
    private $artist;
    private $song;
    private $length;


    public function __construct($artist, $song, $length)
    {
        $this->setArtist($artist);
        $this->setSong($song);
        $this->setLength($length);
    }

    public function __toString()
    {
        return "Song added." . "\n";
    }

    public function getArtist()
    {
        return $this->artist;
    }


    public function setArtist($artist)
    {
        if (strlen($artist) > 20 || strlen($artist) < 3) {
            throw new Exception("Artist name should be between 3 and 20 symbols.");
        }
        $this->artist = $artist;
    }


    public function getSong()
    {
        return $this->song;
    }


    public function setSong($song)
    {
        if (strlen($song) > 30 || strlen($song) < 3) {
            throw new Exception("Song name should be between 3 and 30 symbols.");
        }
        $this->song = $song;
    }


    public function getLength()
    {
        return $this->length;
    }


    public function setLength($length)
    {
        $arr = explode(":", $length);
        if (($arr[0] < 0 && $arr[1] < 0) || ($arr[0] > 14 && $arr[1] > 59)) {
            throw new Exception("Invalid song length.");
        }
        if ($arr[0] < 0 || $arr[0] > 14) {
            throw new Exception("Song minutes should be between 0 and 14.");
        }
        if ($arr[1] < 0 || $arr[1] > 59) {
            throw new Exception("Song seconds should be between 0 and 59.");
        }
        $this->length = $length;
    }
}


for ($i = 0; $i < count($playlist); $i++) {
    try {
        $songInPlaylist = new Playlist($playlist[$i][0], $playlist[$i][1], $playlist[$i][2]);
        echo $songInPlaylist;
        $countSongs++;

        $length = explode(":", $playlist[$i][2]);
        $minute += $length[0];
        $second += $length[1];


        if ($second > 59) {
            $second = $second - 60;
            $minute++;
        }


        if ($second < 10) {
            $second = "0" . $second;
        }

        if ($second == 0) {
            $second = "00";
        }
        if ($minute > 59) {
            $minute = $minute - 60;
            $hour++;
        }
        if ($minute < 10) {
            $minute = "0" . $minute;
        }

        if ($minute == 0) {
            $minute = "00";
        }
        $sum = "{$hour}h {$minute}m {$second}s";


    } catch (Exception $e) {
        echo $e->getMessage() . "\n";
    }
}
echo "Songs added: " . $countSongs . "\n";
echo "Playlist length: " . $sum;

