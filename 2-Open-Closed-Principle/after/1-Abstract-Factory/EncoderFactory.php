<?php

class EncoderFactory {
    public function createForFormat( string $format) : EncoderInterface {
        if ($format === 'json') {
            return new JsonEncoder();
        } elseif ($format === 'xml') {
            return new XmlEncoder();
        } elseif ($format == 'yml') {
            return new YamlEncoder();
        }
        throw new InvalidArgumentException('Unknown format');
    }
}