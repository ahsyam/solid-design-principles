<?php

interface ServiceLocatorInterface
{
    public function has($name);
    public function get();
}