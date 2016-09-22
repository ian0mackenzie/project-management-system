<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=true)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="street_address_1", type="string", length=255, nullable=true)
     */
    private $streetAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="street_address_2", type="string", length=255, nullable=true)
     */
    private $streetAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=2, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=32, nullable=true)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address_1", type="string", length=255, nullable=true)
     */
    private $emailAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address_2", type="string", length=255, nullable=true)
     */
    private $emailAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number_1", type="string", length=255, nullable=true)
     */
    private $phoneNumber1;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number_2", type="string", length=255, nullable=true)
     */
    private $phoneNumber2;

    /**
     * @var string
     *
     * @ORM\Column(name="fax_number", type="string", length=255, nullable=true)
     */
    private $faxNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="associated_user_id", type="integer", nullable=true)
     */
    private $associatedUserId;


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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Contact
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Contact
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Contact
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set streetAddress1
     *
     * @param string $streetAddress1
     *
     * @return Contact
     */
    public function setStreetAddress1($streetAddress1)
    {
        $this->streetAddress1 = $streetAddress1;

        return $this;
    }

    /**
     * Get streetAddress1
     *
     * @return string
     */
    public function getStreetAddress1()
    {
        return $this->streetAddress1;
    }

    /**
     * Set streetAddress2
     *
     * @param string $streetAddress2
     *
     * @return Contact
     */
    public function setStreetAddress2($streetAddress2)
    {
        $this->streetAddress2 = $streetAddress2;

        return $this;
    }

    /**
     * Get streetAddress2
     *
     * @return string
     */
    public function getStreetAddress2()
    {
        return $this->streetAddress2;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Contact
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Contact
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return Contact
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Contact
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set emailAddress1
     *
     * @param string $emailAddress1
     *
     * @return Contact
     */
    public function setEmailAddress1($emailAddress1)
    {
        $this->emailAddress1 = $emailAddress1;

        return $this;
    }

    /**
     * Get emailAddress1
     *
     * @return string
     */
    public function getEmailAddress1()
    {
        return $this->emailAddress1;
    }

    /**
     * Set emailAddress2
     *
     * @param string $emailAddress2
     *
     * @return Contact
     */
    public function setEmailAddress2($emailAddress2)
    {
        $this->emailAddress2 = $emailAddress2;

        return $this;
    }

    /**
     * Get emailAddress2
     *
     * @return string
     */
    public function getEmailAddress2()
    {
        return $this->emailAddress2;
    }

    /**
     * Set phoneNumber1
     *
     * @param string $phoneNumber1
     *
     * @return Contact
     */
    public function setPhoneNumber1($phoneNumber1)
    {
        $this->phoneNumber1 = $phoneNumber1;

        return $this;
    }

    /**
     * Get phoneNumber1
     *
     * @return string
     */
    public function getPhoneNumber1()
    {
        return $this->phoneNumber1;
    }

    /**
     * Set phoneNumber2
     *
     * @param string $phoneNumber2
     *
     * @return Contact
     */
    public function setPhoneNumber2($phoneNumber2)
    {
        $this->phoneNumber2 = $phoneNumber2;

        return $this;
    }

    /**
     * Get phoneNumber2
     *
     * @return string
     */
    public function getPhoneNumber2()
    {
        return $this->phoneNumber2;
    }

    /**
     * Set faxNumber
     *
     * @param string $faxNumber
     *
     * @return Contact
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * Get faxNumber
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Set associatedUserId
     *
     * @param integer $associatedUserId
     *
     * @return Contact
     */
    public function setAssociatedUserId($associatedUserId)
    {
        $this->associatedUserId = $associatedUserId;

        return $this;
    }

    /**
     * Get associatedUserId
     *
     * @return int
     */
    public function getAssociatedUserId()
    {
        return $this->associatedUserId;
    }
}
