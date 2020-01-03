<?php

namespace PersonalNumberGenerator;

class PersonalNumberInternationalization
{
    /** @var PersonalNumberInterface */
   private $PersonalNumberInterface;

    /**
     * PersonalNumberInternationalization constructor.
     * @param PersonalNumberInterface $PersonalNumberInterface
     */
    public function __construct(PersonalNumberInterface $PersonalNumberInterface)
    {
        $this->PersonalNumberInterface = $PersonalNumberInterface;
    }

    public function generate()
    {
        return $this->PersonalNumberInterface->generate();
    }


}
