<?php

interface Cadastro {
   public function registerName();
}


class Pessoa implements Cadastro{

    public  $name;
    private $data;


    public function registerName()
    {
        echo "Seja bem vindo(a) ao curso de PHP"."";
    }



    public function __set($name, $value)
    {
        $this->notFound(__FUNCTION__, $name);
        $this->data[$name] = $value;

    }

    public function __get($name)
    {

        if(!empty($this->data[$name])){
            return $this->data[$name];

        }else{
            $this->notFound(__FUNCTION__,$name);
        }
    }


    private function notFound($method, $name){

        echo  "<p> A propriedade ($name} não existe em " .__CLASS__."</p>";
    }
}