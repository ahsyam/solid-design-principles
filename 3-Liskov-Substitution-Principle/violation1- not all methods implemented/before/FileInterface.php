<?php

interface FileInterface {
    public function rename(string $name): void;
    public function changeOwner(string $user, string $group): void;
}