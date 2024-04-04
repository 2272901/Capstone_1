<?php



class KartuKeluarga
{private string $no;

    private string $kepalaKeluarga;

    /**
     * @return string
     */
    public function getKepalaKeluarga()
    {
        return $this->kepalaKeluarga;
    }

    /**
     * @param string $kepalaKeluarga
     */
    public function setKepalaKeluarga($kepalaKeluarga)
    {
        $this->kepalaKeluarga = $kepalaKeluarga;
    }
    public function __set(string $name,$value):void
     {
    if($name == 'name_kepala'){
        $this->kepalaKeluarga=$value;}}

}