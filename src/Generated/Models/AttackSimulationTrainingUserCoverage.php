<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AttackSimulationTrainingUserCoverage implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AttackSimulationTrainingUserCoverage and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttackSimulationTrainingUserCoverage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttackSimulationTrainingUserCoverage {
        return new AttackSimulationTrainingUserCoverage();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the attackSimulationUser property value. User in an attack simulation and training campaign.
     * @return AttackSimulationUser|null
    */
    public function getAttackSimulationUser(): ?AttackSimulationUser {
        $val = $this->getBackingStore()->get('attackSimulationUser');
        if (is_null($val) || $val instanceof AttackSimulationUser) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attackSimulationUser'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attackSimulationUser' => fn(ParseNode $n) => $o->setAttackSimulationUser($n->getObjectValue([AttackSimulationUser::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'userTrainings' => fn(ParseNode $n) => $o->setUserTrainings($n->getCollectionOfObjectValues([UserTrainingStatusInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the userTrainings property value. List of assigned trainings and their statuses for the user.
     * @return array<UserTrainingStatusInfo>|null
    */
    public function getUserTrainings(): ?array {
        $val = $this->getBackingStore()->get('userTrainings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserTrainingStatusInfo::class);
            /** @var array<UserTrainingStatusInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userTrainings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attackSimulationUser', $this->getAttackSimulationUser());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('userTrainings', $this->getUserTrainings());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the attackSimulationUser property value. User in an attack simulation and training campaign.
     * @param AttackSimulationUser|null $value Value to set for the attackSimulationUser property.
    */
    public function setAttackSimulationUser(?AttackSimulationUser $value): void {
        $this->getBackingStore()->set('attackSimulationUser', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the userTrainings property value. List of assigned trainings and their statuses for the user.
     * @param array<UserTrainingStatusInfo>|null $value Value to set for the userTrainings property.
    */
    public function setUserTrainings(?array $value): void {
        $this->getBackingStore()->set('userTrainings', $value);
    }

}
