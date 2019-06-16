<?php

interface FileWithOwnerInterface extends FileInterface {
    public function changeOwner(string $user, string $group): void;
}