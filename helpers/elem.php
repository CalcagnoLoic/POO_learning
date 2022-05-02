<?php
class html {
    public $surround = 'br';

    public function link($url) {
        return "<link rel='stylesheet' href='{$url}'>";
    }

    public function meta($name, $content) {
        return "<meta name='{$name}' content='{$content}'>";
    }

    public function img($url, $alt) {
        return "<img src='{$url}' alt='{$alt}'/>";
    }

    public function a($url) {
        return "<a href='{$url}'>Développeur web à Becode? Tente ta chance</a>";
    }

    public function script($url){
        return "<script src='{$url}'></script>";
    }
}
?>