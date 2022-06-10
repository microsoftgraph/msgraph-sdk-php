<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationRoot implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<EducationClass>|null $classes The classes property
    */
    private ?array $classes = null;
    
    /**
     * @var EducationUser|null $me The me property
    */
    private ?EducationUser $me = null;
    
    /**
     * @var array<EducationSchool>|null $schools The schools property
    */
    private ?array $schools = null;
    
    /**
     * @var array<EducationUser>|null $users The users property
    */
    private ?array $users = null;
    
    /**
     * Instantiates a new EducationRoot and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationRoot {
        return new EducationRoot();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the classes property value. The classes property
     * @return array<EducationClass>|null
    */
    public function getClasses(): ?array {
        return $this->classes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'classes' => function (ParseNode $n) use ($o) { $o->setClasses($n->getCollectionOfObjectValues(array(EducationClass::class, 'createFromDiscriminatorValue'))); },
            'me' => function (ParseNode $n) use ($o) { $o->setMe($n->getObjectValue(array(EducationUser::class, 'createFromDiscriminatorValue'))); },
            'schools' => function (ParseNode $n) use ($o) { $o->setSchools($n->getCollectionOfObjectValues(array(EducationSchool::class, 'createFromDiscriminatorValue'))); },
            'users' => function (ParseNode $n) use ($o) { $o->setUsers($n->getCollectionOfObjectValues(array(EducationUser::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the me property value. The me property
     * @return EducationUser|null
    */
    public function getMe(): ?EducationUser {
        return $this->me;
    }

    /**
     * Gets the schools property value. The schools property
     * @return array<EducationSchool>|null
    */
    public function getSchools(): ?array {
        return $this->schools;
    }

    /**
     * Gets the users property value. The users property
     * @return array<EducationUser>|null
    */
    public function getUsers(): ?array {
        return $this->users;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('classes', $this->classes);
        $writer->writeObjectValue('me', $this->me);
        $writer->writeCollectionOfObjectValues('schools', $this->schools);
        $writer->writeCollectionOfObjectValues('users', $this->users);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the classes property value. The classes property
     *  @param array<EducationClass>|null $value Value to set for the classes property.
    */
    public function setClasses(?array $value ): void {
        $this->classes = $value;
    }

    /**
     * Sets the me property value. The me property
     *  @param EducationUser|null $value Value to set for the me property.
    */
    public function setMe(?EducationUser $value ): void {
        $this->me = $value;
    }

    /**
     * Sets the schools property value. The schools property
     *  @param array<EducationSchool>|null $value Value to set for the schools property.
    */
    public function setSchools(?array $value ): void {
        $this->schools = $value;
    }

    /**
     * Sets the users property value. The users property
     *  @param array<EducationUser>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value ): void {
        $this->users = $value;
    }

}
