<?php

namespace RavenDB\Documents\Operations\Expiration;

class ConfigureExpirationOperationResult
{
    private ?int $raftCommandIndex = null;

    public function getRaftCommandIndex(): ?int
    {
        return $this->raftCommandIndex;
    }

    public function setRaftCommandIndex(?int $raftCommandIndex): void
    {
        $this->raftCommandIndex = $raftCommandIndex;
    }
}
