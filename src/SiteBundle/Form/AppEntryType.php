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
            $builder->add( 'entryType' )
                    ->add( 'name' )
                    ->add( 'shortName' )
                    ->add( 'description', 'textarea' )
                    ->add( 'blurb', 'text' )
                    ->add( 'extra', 'textarea', [ 'required' => false ] )
                    ->add( 'releaseDate', 'date' )
                    ->add( 'screenshot_path', 'hidden', [ 'required' => false, 'mapped' => false ] )
                    ->add( 'file' )
                    ->add( 'remove_screenshot', 'checkbox', [ 'mapped' => false, 'required' => false ] )
                    ->add( 'links',
                           'collection',
                           [ 'type'         => new AppLinkType(),
                             'allow_add'    => true,
                             'allow_delete' => true,
                             'delete_empty' => true,
                           ] );
        }

        /**
         * @param OptionsResolverInterface $resolver
         */
        public function setDefaultOptions( OptionsResolverInterface $resolver )
        {
            $resolver->setDefaults( [ 'data_class' => 'SiteBundle\Entity\AppEntry' ] );
        }

        /**
         * @return string
         */
        public function getName()
        {
            return 'SiteBundle_appentry';
        }
    }
