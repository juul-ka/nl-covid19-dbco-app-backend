<?php
namespace DBCO\HealthAuthorityAPI\Application\Responses;

use DBCO\HealthAuthorityAPI\Application\DTO\Task;
use DBCO\HealthAuthorityAPI\Application\Models\CovidCase;
use DBCO\Shared\Application\Responses\Response;
use JsonSerializable;

/**
 * Case response.
 */
class CaseResponse extends Response implements JsonSerializable
{
    /**
     * @var CovidCase
     */
    private CovidCase $case;

    /**
     * Constructor.
     *
     * @param Case $case
     */
    public function __construct(CovidCase $case)
    {
       $this->case = $case;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'dateOfSymptomOnset' => $this->case->dateOfSymptomOnset,
            'tasks' => array_map(fn ($t) => new Task($t), $this->case->tasks)
        ];
    }
}
