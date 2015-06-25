<?php

    namespace SiteBundle\Entity;

    use DateTime;
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;
    use Symfony\Component\Validator\Constraints\Date;

    /**
     * AppEntry
     *
     * @ORM\Table()
     * @ORM\Entity
     */
    class AppEntry
    {
        const TBA = null;
        /**
         * @var integer
         *
         * @ORM\Column(name="id", type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $id;

        /**
         * @var AppEntryType
         * @ORM\ManyToOne(targetEntity="AppEntryType")
         * @ORM\JoinColumn(name="entry_type_id", referencedColumnName="id")
         */
        private $entryType;

        /**
         * @var string
         *
         * @ORM\Column(name="name", type="string", length=255)
         */
        private $name;

        /**
         * @var string
         *
         * @ORM\Column(name="short_name", type="string", length=255)
         */
        private $shortName;

        /**
         * @var string
         *
         * @ORM\Column(name="description", type="text")
         */
        private $description;

        /**
         * @var string
         *
         * @ORM\Column(name="extra", type="text", nullable=true)
         */
        private $extra;

        /**
         * @var date
         * @ORM\Column(name="release_date", type="date", nullable=true,
         *                                  options={"default"="now"})
         */
        private $releaseDate;

        /**
         * @var ArrayCollection
         * @ORM\OneToMany(targetEntity="SiteBundle\Entity\AppLinks", mappedBy="appId")
         */
        private $links;


        /**
         * @var int
         * @ORM\Column(name="priority", type="integer",
         *                              options={"default"="0"}, nullable=true)
         */
        private $priority = 0;

        /**
         * @return int
         */
        public function getPriority()
        {
            return $this->priority;
        }


        /************************************************************/
        function __construct()
        {
            $this->links = new ArrayCollection();
        }

        //<editor-fold desc="Getters/Setters">
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
         * Set name
         *
         * @param string $name
         * @return AppEntry
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

        /**
         * Set shortName
         *
         * @param string $shortName
         * @return AppEntry
         */
        public function setShortName( $shortName )
        {
            $this->shortName = $shortName;

            return $this;
        }

        /**
         * Get shortName
         *
         * @return string
         */
        public function getShortName()
        {
            return $this->shortName;
        }

        /**
         * Set description
         *
         * @param string $description
         * @return AppEntry
         */
        public function setDescription( $description )
        {
            $this->description = $description;

            return $this;
        }

        /**
         * Get description
         *
         * @return string
         */
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * Set extra
         *
         * @param string $extra
         * @return AppEntry
         */
        public function setExtra( $extra )
        {
            $this->extra = $extra;

            return $this;
        }

        /**
         * Get extra
         *
         * @return string
         */
        public function getExtra()
        {
            return $this->extra;
        }

        /**
         * @return AppEntryType
         */
        public function getEntryType()
        {
            return $this->entryType;
        }

        /**
         * @param AppEntryType $entryType
         */
        public function setEntryType( $entryType )
        {
            $this->entryType = $entryType;

            return $this;
        }

        /**
         * @return Date
         */
        public function getReleaseDate()
        {
            return $this->releaseDate;
        }

        /**
         * @param \DateTime $releaseDate
         */
        public function setReleaseDate( $releaseDate )
        {
            $this->releaseDate = $releaseDate;

            return $this;
        }

        /**
         * @return ArrayCollection
         */
        public function getLinks()
        {
            return $this->links;
        }

        /**
         * @param ArrayCollection $links
         */
        public function setLinks( $links )
        {
            $this->links = $links;

            return $this;
        }

        /**
         * @param int $priority
         * @return AppEntry
         */
        public function setPriority( $priority )
        {
            $this->priority = $priority;

            return $this;
        }

        //</editor-fold>
    }
