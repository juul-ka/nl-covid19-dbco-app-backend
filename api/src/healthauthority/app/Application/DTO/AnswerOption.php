<?php

declare(strict_types=1);

namespace App\Application\DTO;

use App\Application\Models\AnswerOption as AnswerOptionModel;

/**
 * Answer option DTO.
 *
 * @package App\Application\Actions
 */
class AnswerOption implements JsonSerializable
{
    /**
     * @var AnswerOptionModel $answerOption
     */
    private AnswerOptionModel $answerOption;

    /**
     * Constructor.
     *
     * @param AnswerOptionModel $answerOption
     */
    public function __construct(AnswerOptionModel $answerOption)
    {
        $this->answerOption = $answerOption;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'label' => $this->answerOption->label,
            'value' => $this->answerOption->value
        ];
    }
}
