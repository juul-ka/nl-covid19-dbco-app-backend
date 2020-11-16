<?php
declare(strict_types=1);

namespace  DBCO\HealthAuthorityAPI\Application\DTO;

use DateTimeZone;
use DBCO\HealthAuthorityAPI\Application\Models\CovidCase;
use JsonSerializable;

/**
 * Case export DTO.
 *
 * @package DBCO\HealthAuthorityAPI\Application\DTO
 */
class CaseExport implements JsonSerializable
{
    /**
     * @var CovidCase $case
     */
    private CovidCase $case;

    /**
     * Constructor.
     *
     * @param CovidCase $case
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
            'windowExpiresAt' =>
                $this->case->dateOfSymptomOnset
                    ->setTimezone(new DateTimeZone('UTC'))
                    ->format('Y-m-d\TH:i:s\Z'),
            'dateOfSymptomOnset' =>
                $this->case->dateOfSymptomOnset !== null ?
                    $this->case->dateOfSymptomOnset->format('Y-m-d') : null,
            'tasks' => array_map(fn ($t) => new Task($t), $this->case->tasks)
        ];
    }
}
