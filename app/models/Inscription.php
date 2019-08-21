<?php

class Inscription extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getMail() {
        return $this->mail;
    }

    function getNum() {
        return $this->num;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setNum($num) {
        $this->num = $num;
    }

        /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $nom;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $prenom;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    public $sexe;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $mail;

    /**
     *
     * @var string
     * @Column(type="string", length=12, nullable=false)
     */
    public $num;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("otaku");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'inscription';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Inscription[]|Inscription
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Inscription
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
