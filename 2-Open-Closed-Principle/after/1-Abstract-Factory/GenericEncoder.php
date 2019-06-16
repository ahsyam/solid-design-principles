<?php

class GenericEncoder {
    private $encoderFactory;
    public function __construct( EncoderFactory $encoderFactory ) {
        $this->encoderFactory = $encoderFactory;
    }
    public function encodeToFormat($data, string $format): string {
        $encoder = $this->encoderFactory->createForFormat($format);
        $data = $this->prepareData($data, $format);
        return $encoder->encode($data);
    }

    public function prepareData($data, $format){
        //code
        return $data;
    }
}