<?php

class KKDao
{
    public function showAll()
    {
        $conn = PDOUtil::createDBConnection();
        $query = "SELECT no, nama_kepala FROM kartu_keluarga";
        $stmt = $conn->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, KartuKeluarga::class);
        $stmt->execute();
        $conn = null;
        return $result;
    }

    public function addKartuKeluarga(KartuKeluarga $kk)
    {
        $result = 0;
        $conn = PDOUtil::createDBConnection();
        $query = "INSERT INTO kartu_keluarga(no,nama_kepala)VALUES(?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(1, $kk->getNo());
        $stmt->bindValue(2, $kk->getKepalaKeluarga());
        $conn->beginTransaction();
        if($stmt->execute()){
            $conn->commit();
            $result = 1;
        } else {
            $conn->rollBack();
        }
        $conn=null;
        return $result;
    }

}