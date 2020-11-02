<?php
namespace DBCO\HealthAuthorityAPI\Application\Repositories;

use DBCO\HealthAuthorityAPI\Application\Models\CovidCase;

/**
 * Used for retrieving case specific tasks.
 *
 * @package DBCO\HealthAuthorityAPI\Application\Repositories
 */
interface CaseRepository
{
    /**
     * Returns the case task list.
     *
     * @param string $caseUuid Case identifier.
     *
     * @return CovidCase|null
     */
    public function getCase(string $caseUuid): ?CovidCase;

    /**
     * Submit case tasks.
     *
     * @param string $caseUuid
     * @param string $body
     *
     * @return void
     */
    public function submitCase(string $caseUuid, string $body): void;
}
