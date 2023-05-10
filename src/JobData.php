<?php

declare(strict_types=1);

namespace Keboola\SyncActionsClient;

readonly class JobData
{
    public function __construct(
        private string $componentId,
        private string $action,
        private array $configData = [],
        private ?string $tag = null,
        private ?string $branchId = null,
    ) {
    }

    public function getArray(): array
    {
        return [
            'component' => $this->componentId,
            'action' => $this->action,
            'configData' => $this->configData,
            'tag' => $this->tag,
            'branchId' => $this->branchId,
        ];
    }
}
