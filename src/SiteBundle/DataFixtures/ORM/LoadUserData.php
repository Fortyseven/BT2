<?php

    namespace SiteBundle\DataFixtures\ORM;


    use SiteBundle\Entity\AppEntry;
    use SiteBundle\Entity\AppEntryType;
    use SiteBundle\Entity\AppLinks;
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\Common\DataFixtures\FixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;

    class LoadUserData implements FixtureInterface
    {

        /**
         * Load data fixtures with the passed EntityManager
         *
         * @param ObjectManager $manager
         */
        public function load( ObjectManager $manager )
        {
            $this->loadAppEntryTypes( $manager );
            $manager->flush(); // Need to have these available ASAP

            $this->loadTestData( $manager );
            $manager->flush();
        }

        private function loadAppEntryTypes( ObjectManager $manager )
        {
            echo "* Loading entry types.\n";
            $appEntryType = new AppEntryType();
            $appEntryType->setName( "Other" );
            $manager->persist( $appEntryType );

            $appEntryType = new AppEntryType();
            $appEntryType->setName( "Game" );
            $manager->persist( $appEntryType );

            $appEntryType = new AppEntryType();
            $appEntryType->setName( "Web" );
            $manager->persist( $appEntryType );

            $appEntryType = new AppEntryType();
            $appEntryType->setName( "Mobile" );
            $manager->persist( $appEntryType );

            $appEntryType = new AppEntryType();
            $appEntryType->setName( "Legacy" );
            $manager->persist( $appEntryType );
        }

        /**
         * @param ObjectManager $manager
         */
        private function loadTestData( ObjectManager &$manager )
        {
            echo "* Loading test data.\n";

            /*****************************************/
            $app_entry = new AppEntry();

            $app_entry->setName( "LaserSmash" )
                      ->setShortName( "lasersmash" )
                      ->setDescription( "\"<i>A time long ago, a lone laser defense platform was our people's last line of defense against
                                            a raging meteor storm. And now, the storm has come again -- and this time, our enemies are
                                            taking advantage of it. Defend us, once more</i>\"
                                            As a life long fan of Mattel's amazing Astrosmash arcade shooter for the Intellivision, creating
                                            a remake of it has been something I've always started, but never finished. I have half-finished
                                            versions in C++, Flash, and more. When I finally settled on Unity for game development, I wanted
                                            to get this out of my system once and for all. And I wanted to create it from scratch, but try to
                                            stay somewhat faithful to the spirit of the original game." )
                      ->setReleaseDate( AppEntry::TBA );

            $type = $this->findAppType( $manager, "Game" );

            $links = new ArrayCollection();

            $links[ ] = $this->createLink( $manager,
                                           $app_entry,
                                           "Development Blog",
                                           "http://btsmash.tumblr.com/" );
            $links[ ] = $this->createLink( $manager,
                                           $app_entry,
                                           "Older, playable WIP Version",
                                           "http://gamejolt.com/games/arcade/lasersmash/34900/" );

            $app_entry->setLinks( $links )
                      ->setEntryType( $type );

            $manager->persist( $app_entry );

            /*****************************************/
            $app_entry = new AppEntry();

            $app_entry->setName( "Mexican Pissing Warrior2" )
                      ->setDescription( "This is a game." )
                      ->setReleaseDate( new \DateTime( 'now' ) )
                      ->setShortName( "testapp1" );

            $type = $this->findAppType( $manager, "Game" );

            $links = new ArrayCollection();

            $links[ ] = $this->createLink( $manager,
                                           $app_entry,
                                           "This is a link. The first one.",
                                           "http://cnn.com" );
            $links[ ] = $this->createLink( $manager,
                                           $app_entry,
                                           "This is another link. The SECOND one.",
                                           "http://faceplump.net" );

            $app_entry->setLinks( $links )
                      ->setEntryType( $type );

            $manager->persist( $app_entry );
        }


        /**
         * @param $manager
         * @param $type_name
         * @return AppEntryType
         */
        private function findAppType( ObjectManager &$manager, $type_name )
        {
            return $manager->getRepository( "SiteBundle:AppEntryType" )
                           ->findOneBy( array( "name" => "Game" ) );

        }

        /**
         * @param ObjectManager $manager
         * @param AppEntry      $parent_app_entry
         * @param               $description
         * @param               $url
         * @return AppLinks
         */
        private function createLink( ObjectManager &$manager,
                                     AppEntry &$parent_app_entry,
                                     $description,
                                     $url )
        {
            $link = new AppLinks();

            $link->setDescription( $description )
                 ->setUrl( $url )
                 ->setAppId( $parent_app_entry );

            $manager->persist( $link );

            return $link;
        }


    }