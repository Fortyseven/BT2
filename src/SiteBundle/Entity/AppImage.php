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
         *
         * @ORM\Column(name="app_entry_id", type="integer")
         */
        private $appEntryId;

        /**
         * @var string
         *
         * @ORM\Column(name="filename", type="string", length=255)
         */
        private $filename;


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

        /**
         * Set filename
         *
         * @param string $filename
         * @return AppImage
         */
        public function setFilename( $filename )
        {
            $this->filename = $filename;

            return $this;
        }

        /**
         * Get filename
         *
         * @return string
         */
        public function getFilename()
        {
            return $this->filename;
        }
    }
