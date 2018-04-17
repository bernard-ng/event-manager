<?php

class flash {

    /**
     * definit un msg flash
     *
     * @param string $type
     * @param string $msg
     * @return void
     */
    public function set(string $type, string $msg): void
    {
        $_SESSION[FLASH_KEY][$type] = $msg;
    }


    /**
     * on recupere les msg flash
     *
     * @return string[]|null
     */
    public function get(): ?array
    {
        $flash = $_SESSION[FLASH_KEY];
        unset($_SESSION[FLASH_KEY]);
        return $flash;
    }


    /**
     * nous renseigne si on a des msg
     * flash.
     *
     * @return boolean
     */
    public function has(): bool
    {
        return isset($_SESSION[FLASH_KEY]);
    }

}
