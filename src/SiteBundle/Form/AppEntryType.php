<?php

    namespace SiteBundle\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolverInterface;

    class AppEntryType extends AbstractType
    {
        /**
         * @param FormBuilderInterface $builder
         * @param array                $options
         */
        public function buildForm( FormBuilderInterface $builder, array $options )
        {
            $builder->add( 'entry_type_id' )
                    ->add( 'name' )
                    ->add( 'shortName' )
                    ->add( 'description' )
                    ->add( 'extra' )
                    ->add( 'releaseDate' );
        }

        /**
         * @param OptionsResolverInterface $resolver
         */
        public function setDefaultOptions( OptionsResolverInterface $resolver )
        {
            $resolver->setDefaults( array( 'data_class' => 'SiteBundle\Entity\AppEntry' ) );
        }

        /**
         * @return string
         */
        public function getName()
        {
            return 'SiteBundle_appentry';
        }
    }
