<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EducationRoot implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EducationRoot and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the classes property value. The classes property
     * @return array<EducationClass>|null
    */
    public function getClasses(): ?array {
        return $this->getBackingStore()->get('classes');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'classes' => fn(ParseNode $n) => $o->setClasses($n->getCollectionOfObjectValues([EducationClass::class, 'createFromDiscriminatorValue'])),
            'me' => fn(ParseNode $n) => $o->setMe($n->getObjectValue([EducationUser::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'schools' => fn(ParseNode $n) => $o->setSchools($n->getCollectionOfObjectValues([EducationSchool::class, 'createFromDiscriminatorValue'])),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getCollectionOfObjectValues([EducationUser::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the me property value. The me property
     * @return EducationUser|null
    */
    public function getMe(): ?EducationUser {
        return $this->getBackingStore()->get('me');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the schools property value. The schools property
     * @return array<EducationSchool>|null
    */
    public function getSchools(): ?array {
        return $this->getBackingStore()->get('schools');
    }

    /**
     * Gets the users property value. The users property
     * @return array<EducationUser>|null
    */
    public function getUsers(): ?array {
        return $this->getBackingStore()->get('users');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('classes', $this->getClasses());
        $writer->writeObjectValue('me', $this->getMe());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('schools', $this->getSchools());
        $writer->writeCollectionOfObjectValues('users', $this->getUsers());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the classes property value. The classes property
     *  @param array<EducationClass>|null $value Value to set for the classes property.
    */
    public function setClasses(?array $value): void {
        $this->getBackingStore()->set('classes', $value);
    }

    /**
     * Sets the me property value. The me property
     *  @param EducationUser|null $value Value to set for the me property.
    */
    public function setMe(?EducationUser $value): void {
        $this->getBackingStore()->set('me', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the schools property value. The schools property
     *  @param array<EducationSchool>|null $value Value to set for the schools property.
    */
    public function setSchools(?array $value): void {
        $this->getBackingStore()->set('schools', $value);
    }

    /**
     * Sets the users property value. The users property
     *  @param array<EducationUser>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value): void {
        $this->getBackingStore()->set('users', $value);
    }

}
