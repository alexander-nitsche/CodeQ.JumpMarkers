<?php
namespace CodeQ\JumpMarkers\Validation\Validator;

use Neos\Flow\Validation\Exception\InvalidValidationOptionsException;
use Neos\Flow\Validation\Validator\AbstractValidator;

/**
 * Validator for uniqueness of node property "sectionId" within the document node context.
 */
class UniqueSectionIdValidator extends AbstractValidator
{
    protected function isValid($value)
    {
//        throw new InvalidValidationOptionsException('The UniqueSectionIdValidator cannot be passed.', 1669378776);
        $this->addError('The given section ID was not a valid string.', 1669378776);
    }
}
