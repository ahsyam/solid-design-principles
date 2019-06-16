<?php

class MyCustomEncoderFactory implements EncoderFactoryInterface {

    public $fallbackFactory;
    private $serviceLocator;
    public function __construct(ServiceLocatorInterface $serviceLocator, EncoderFactoryInterface $fallbackFactory) {
        $this->serviceLocator = $serviceLocator;
        $this->fallbackFactory = $fallbackFactory;
    }

    public function createForFormat($format): EncoderInterface
    {
        if($this->serviceLocator->has($format . '.encoder'))
            return $this->serviceLocator->get($format . '.encoder');

        return $this->fallbackFactory->createForFormat($format);
    }
}