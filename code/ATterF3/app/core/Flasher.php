<?php

class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '
            <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show position-fixed" style="bottom: 1rem; right: 2rem; z-index: 100;" role="alert">
                <strong>' . $_SESSION['flash']['pesan'] . '</strong>' . ' ' . $_SESSION['flash']['aksi'] . '
                <button type="button" class="btn-close pt-3" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            unset($_SESSION['flash']);
            
        }
    }
}
