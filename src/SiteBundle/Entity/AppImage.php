<?php
    namespace SiteBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * AppImage
     *
     * @ORM\Table()
     * @ORM\Entity
     */
    class AppImage
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
         * @var integer
         * @ORM\ManyToOne(targetEntity="SiteBundle\Entity\AppEntry", inversedBy="images")
         * @ORM\JoinColumn(name="app_id", referencedColumnName="id", nullable=false)
         */
        private $appId;

        /**
         * @var string
         * @ORM\Column(name="name", type="string", length=255)
         */
        private $name;

        /**
         * @var string
         * @ORM\Column(name="web_path", type="string", length=255)
         */
        private $webPath;

        //<editor-fold desc="Getters/Setters">

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         *
         * @return AppImage
         */
        public function setName( $name )
        {
            $this->name = $name;

            return $this;
        }

        /**
         * @return string
         */
        public function getWebPath()
        {
            return $this->webPath;
        }

        /**
         * @param string $webPath
         *
         * @return AppImage
         */
        public function setWebPath( $webPath )
        {
            $this->webPath = $webPath;

            return $this;
        }

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
         * Set appEntryId
         *
         * @param integer $appEntryId
         *
         * @return AppImage
         */
        public function setAppEntryId( $appEntryId )
        {
            $this->appEntryId = $appEntryId;

            return $this;
        }

        /**
         * Get appEntryId
         *
         * @return integer
         */
        public function getAppEntryId()
        {
            return $this->appEntryId;
        }
        //</editor-fold>
    }
