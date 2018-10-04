<?php

namespace MP\LogistiqueBundle\Entity;

/**
 * Employer
 */
class Employer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $employerNom;

    /**
     * @var string
     */
    private $employerPrenom;

    /**
     * @var string
     */
    private $employerDateNaissance;

    /**
     * @var string
     */
    private $employerLieuNaissance;

    /**
     * @var string
     */
    private $employerCin;

    /**
     * @var string
     */
    private $employerAdresse;

    /**
     * @var string
     */
    private $employerTelephone;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set employerNom
     *
     * @param string $employerNom
     *
     * @return Employer
     */
    public function setEmployerNom($employerNom)
    {
        $this->employerNom = $employerNom;

        return $this;
    }

    /**
     * Get employerNom
     *
     * @return string
     */
    public function getEmployerNom()
    {
        return $this->employerNom;
    }

    /**
     * Set employerPrenom
     *
     * @param string $employerPrenom
     *
     * @return Employer
     */
    public function setEmployerPrenom($employerPrenom)
    {
        $this->employerPrenom = $employerPrenom;

        return $this;
    }

    /**
     * Get employerPrenom
     *
     * @return string
     */
    public function getEmployerPrenom()
    {
        return $this->employerPrenom;
    }

    /**
     * Set employerDateNaissance
     *
     * @param string $employerDateNaissance
     *
     * @return Employer
     */
    public function setEmployerDateNaissance($employerDateNaissance)
    {
        $this->employerDateNaissance = $employerDateNaissance;

        return $this;
    }

    /**
     * Get employerDateNaissance
     *
     * @return string
     */
    public function getEmployerDateNaissance()
    {
        return $this->employerDateNaissance;
    }

    /**
     * Set employerLieuNaissance
     *
     * @param string $employerLieuNaissance
     *
     * @return Employer
     */
    public function setEmployerLieuNaissance($employerLieuNaissance)
    {
        $this->employerLieuNaissance = $employerLieuNaissance;

        return $this;
    }

    /**
     * Get employerLieuNaissance
     *
     * @return string
     */
    public function getEmployerLieuNaissance()
    {
        return $this->employerLieuNaissance;
    }

    /**
     * Set employerCin
     *
     * @param string $employerCin
     *
     * @return Employer
     */
    public function setEmployerCin($employerCin)
    {
        $this->employerCin = $employerCin;

        return $this;
    }

    /**
     * Get employerCin
     *
     * @return string
     */
    public function getEmployerCin()
    {
        return $this->employerCin;
    }

    /**
     * Set employerAdresse
     *
     * @param string $employerAdresse
     *
     * @return Employer
     */
    public function setEmployerAdresse($employerAdresse)
    {
        $this->employerAdresse = $employerAdresse;

        return $this;
    }

    /**
     * Get employerAdresse
     *
     * @return string
     */
    public function getEmployerAdresse()
    {
        return $this->employerAdresse;
    }

    /**
     * Set employerTelephone
     *
     * @param string $employerTelephone
     *
     * @return Employer
     */
    public function setEmployerTelephone($employerTelephone)
    {
        $this->employerTelephone = $employerTelephone;

        return $this;
    }

    /**
     * Get employerTelephone
     *
     * @return string
     */
    public function getEmployerTelephone()
    {
        return $this->employerTelephone;
    }
}

