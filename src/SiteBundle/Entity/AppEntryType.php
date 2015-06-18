<?php

    namespace SiteBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * AppEntryType
     *
     * @ORM\Table()
     * @ORM\Entity
     */
    class AppEntryType
    {
        /**
         * @var integer
         *
         * @ORM\Column(name="id", type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $id;

        /**
         * @var string
         *
         * @ORM\Column(name="name", type="string", length=255)
         */

        private $name;


        /**
         * Get id
         *
         * @return integer
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param $id
         * @return AppEntryType
         */
        public function setId( $id )
        {
            $this->id = $id;

            return $this;
        }

        /**
         * Set name
         *
         * @param string $name
         * @return AppEntryType
         */
        public function setName( $name )
        {
            $this->name = $name;

            return $this;
        }

        /**
         * Get name
         *
         * @return string
         */
        public function getName()
        {
            return $this->name;
        }
    }
