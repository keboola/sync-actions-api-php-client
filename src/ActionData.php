<?php

declare(strict_types=1);

namespace Keboola\SyncActionsClient;

class ActionData
{
    private string $componentId;
    private string $action;
    private array $configData;
    private ?string $tag;
    private ?string $branchId;

    public function __construct(
        string $componentId,
        string $action,
        array $configData = [],
        ?string $tag = null,
        ?string $branchId = null
    ) {
        $this->componentId = $componentId;
        $this->action = $action;
        $this->configData = $configData;
        $this->tag = $tag;
        $this->branchId = $branchId;
    }

    public function getArray(): array
    {
        return [
            'componentId' => $this->componentId,
            'action' => $this->action,
            'configData' => $this->configData,
            'tag' => $this->tag,
            'branchId' => $this->branchId,
        ];
    }
}
