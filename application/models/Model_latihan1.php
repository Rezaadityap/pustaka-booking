<?php
class Model_latihan1 extends CI_Model
{
    // Membuat variable untuk menampung nilai
    public $nilai1, $nilai2, $hasil;
    // Method Penjumlahan
    public function jumlah($n1 = null, $n2 = null)
        {
            $this->niali1 = $n1;
            $this->nilai2 = $n2;
            $this->hasil = $n1 + $n2;
            return $this->hasil;
        }
    }
    