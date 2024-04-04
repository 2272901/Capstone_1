<?php

class KKController
{
    private KKDao $kkDao;
    public function  __construct()
    {
        $this->kkDao = new KKDao();
    }
    public function index()
    {
        $kks = $this->kkDao->showall();
        include_once 'view/kk.index.php';
    }

    public  function create()
    {
        include_once 'view/kk.create.php';
    }

    public function store()
    {
        $submitted = filter_input(INPUT_POST, 'btnSave');
        if(isset($submitted)){
            $kkNumber = trim(filter_input(INPUT_POST, 'kkID'));
            $kkHead = trim(filter_input(INPUT_POST, "kkName"));
            if(empty($kkHead)||empty($kkNumber)){
                header('location:index.php?menu=kk-create&msg=Masukkan nomor KKK dan kepala keluarga');

            }else {
                $newKK = new KartuKeluarga();
                $newKK->setNo($kkNumber);
                $newKK->setKepalaKeluarga($kkHead);
                if($this->kkDao->addKartuKluarga($newKK)){
                    header('location:index.php?menu=kk');
                }else{
                    header('location:index.php?menu=kk-create&msg= Error untuk mengambil data');
                }
            }

        }
    }
}