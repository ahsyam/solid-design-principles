<?php
class DropboxFile implements FileInterface
{
    public function rename(string $name): void
    {
        // Code ...
    }

    public function changeOwner(string $user, string $group): void
    {
        throw new BadMethodCallException( 'Not implemented for Dropbox files' );
    }
}