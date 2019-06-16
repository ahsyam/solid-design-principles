<?php

$customEncoderFactory = new MyCustomEncoderFactory($serviceLocator,$factory);
$encoder = new GenericEncoder($customEncoderFactory);