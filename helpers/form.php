<?php

    class Form {

        public $data = array();
        public $surround = 'p';

        public function __construct($data = array())
        {
            $this->data = $data;
        }

        private function surround($html) {
            return "<{$this->surround}>{$html}</{$this->surround}>";
        }

        public function form(){
            return "<form method='post'>";
        }

        public function input() {
            return $this->surround("Nom : <input type='text' placeholder='Entrez un nom'>");
        }

        public function select() {
            return $this->surround("Langue : <select>
                                    <option>Français</option>
                                    <option>Anglais</option>
                                    <option>Néerlandais</option>
                                    </select>");
        }

        public function textarea() {
            return $this->surround("Votre message : <textarea></textarea>");
        }

        public function radio() {
            return $this->surround("<input type='radio'> Oui <input type='radio'> Non");
        }

        public function checkbox() {
            return $this->surround("<input type='checkbox'> J'accepte les conditions générales");
        }

        public function submit() {
            return $this->surround("<button type='submit'>Envoyer</button>");
        }

        public function formEnding(){
            return "</form>";
        }
    }
?>