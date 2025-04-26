<?php

/**
 * Class Contact
 * Cette classe représente un contact
 *
 *  Constructeur de la classe Contact, tous les champs sont optionnels
 * @param int|null $id
 * @param string|null $name
 * @param string|null $email
 * @param string|null $telephone
 */
class Contact
{
    private int $ID;
    private ?string $NAME;
    private ?string $EMAIL;
    private ?string $PHONE_NUMBER;

    public function __toString()
    {
        $format = 'ID : %d Nom : %s Mail : %s Tel : %s %s';
        return sprintf($format ,$this->ID, $this->NAME,$this->EMAIL,$this->PHONE_NUMBER,PHP_EOL);
    }

    Public function getId():int{
        return $this->ID;
    }

    Public function getName():string{
        return $this->NAME;
    }

    Public function setName(string $name):self{
        $this->NAME = $name;
        return $this;
    }


    Public function getEmail():string{
        return $this->EMAIL;
    }

    Public function setEmail(string $mail):self{
        $this->EMAIL = $mail;
        return $this;
    }

    Public function getphone():string{
        return $this->PHONE_NUMBER;
    }

    Public function setphone(string $phone):self{
        $this->PHONE_NUMBER = $phone;
        return $this;
    }
}