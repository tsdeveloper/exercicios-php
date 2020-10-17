<?php

/**
 * Interface Cadastro
 */
interface Cadastro {
   public function registerName();
}

/**
 * Class Pessoa
 */
class Pessoa implements Cadastro{

    public  $name;
    private $data;

    /**
     * return implements
     */
    public function registerName()
    {
        echo "Seja bem vindo(a) ao curso de PHP";
    }

    public function setName($name){
        $this->name =$name;
    }

    /**
     * @return mixed
     */
    public function getName(){
        return $this->name;
    }


    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->notFound(__FUNCTION__, $name);
        $this->data[$name] = $value;

    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {

        if(!empty($this->data[$name])){
            return $this->data[$name];

        }else{
            $this->notFound(__FUNCTION__,$name);
        }
    }

    /**
     * @param $method
     * @param $name
     */
    private function notFound($method, $name){

        echo  "<p> A propriedade ($name} não existe em " .__CLASS__."</p>";
    }
}