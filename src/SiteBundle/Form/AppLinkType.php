<?php
    namespace SiteBundle\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    class AppLinkType extends AbstractType
    {

        public function buildForm( FormBuilderInterface $builder, array $options )
        {
//            $builder->add( 'appId', 'hidden', ['data_class' => 'SiteBundle\Entity\AppEntry'] );
//            $builder->add( 'id', 'hidden', [ 'mapped' => false ] );
            $builder->add( 'url' );
            $builder->add( 'description' );
        }

        public function configureOptions( OptionsResolver $resolver )
        {
            $resolver->setDefaults( [ 'data_class' => 'SiteBundle\Entity\AppLinks' ] );
        }

        /**
         * Returns the name of this type.
         *
         * @return string The name of this type
         */
        public function getName()
        {
            return 'link';
        }
    }