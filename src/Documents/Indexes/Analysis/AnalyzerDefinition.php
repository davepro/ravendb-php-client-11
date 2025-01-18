<?php

namespace RavenDB\Documents\Indexes\Analysis;

use Symfony\Component\Serializer\Annotation\SerializedName;

class AnalyzerDefinition
{
    /** @SerializedName ("Name") */
    private ?string $name = null;

    /** @SerializedName ("Code") */
    private ?string $code = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }
}
