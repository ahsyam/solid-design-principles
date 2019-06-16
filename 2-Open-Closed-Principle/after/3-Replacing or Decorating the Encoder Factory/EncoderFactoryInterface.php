<?php

interface EncoderFactoryInterface
{
    public function createForFormat(string $format): EncoderInterface;
}