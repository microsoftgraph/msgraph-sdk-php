<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AttackSimulationSimulationUserCoverage implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AttackSimulationSimulationUserCoverage and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttackSimulationSimulationUserCoverage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttackSimulationSimulationUserCoverage {
        return new AttackSimulationSimulationUserCoverage();
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
     * Gets the clickCount property value. Number of link clicks in the received payloads by the user in attack simulation and training campaigns.
     * @return int|null
    */
    public function getClickCount(): ?int {
        $val = $this->getBackingStore()->get('clickCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clickCount'");
    }

    /**
     * Gets the compromisedCount property value. Number of compromising actions by the user in attack simulation and training campaigns.
     * @return int|null
    */
    public function getCompromisedCount(): ?int {
        $val = $this->getBackingStore()->get('compromisedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compromisedCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attackSimulationUser' => fn(ParseNode $n) => $o->setAttackSimulationUser($n->getObjectValue([AttackSimulationUser::class, 'createFromDiscriminatorValue'])),
            'clickCount' => fn(ParseNode $n) => $o->setClickCount($n->getIntegerValue()),
            'compromisedCount' => fn(ParseNode $n) => $o->setCompromisedCount($n->getIntegerValue()),
            'latestSimulationDateTime' => fn(ParseNode $n) => $o->setLatestSimulationDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'simulationCount' => fn(ParseNode $n) => $o->setSimulationCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the latestSimulationDateTime property value. Date and time of the latest attack simulation and training campaign that the user was included in.
     * @return DateTime|null
    */
    public function getLatestSimulationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('latestSimulationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latestSimulationDateTime'");
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
     * Gets the simulationCount property value. Number of attack simulation and training campaigns that the user was included in.
     * @return int|null
    */
    public function getSimulationCount(): ?int {
        $val = $this->getBackingStore()->get('simulationCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simulationCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attackSimulationUser', $this->getAttackSimulationUser());
        $writer->writeIntegerValue('clickCount', $this->getClickCount());
        $writer->writeIntegerValue('compromisedCount', $this->getCompromisedCount());
        $writer->writeDateTimeValue('latestSimulationDateTime', $this->getLatestSimulationDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('simulationCount', $this->getSimulationCount());
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
     * Sets the clickCount property value. Number of link clicks in the received payloads by the user in attack simulation and training campaigns.
     * @param int|null $value Value to set for the clickCount property.
    */
    public function setClickCount(?int $value): void {
        $this->getBackingStore()->set('clickCount', $value);
    }

    /**
     * Sets the compromisedCount property value. Number of compromising actions by the user in attack simulation and training campaigns.
     * @param int|null $value Value to set for the compromisedCount property.
    */
    public function setCompromisedCount(?int $value): void {
        $this->getBackingStore()->set('compromisedCount', $value);
    }

    /**
     * Sets the latestSimulationDateTime property value. Date and time of the latest attack simulation and training campaign that the user was included in.
     * @param DateTime|null $value Value to set for the latestSimulationDateTime property.
    */
    public function setLatestSimulationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('latestSimulationDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the simulationCount property value. Number of attack simulation and training campaigns that the user was included in.
     * @param int|null $value Value to set for the simulationCount property.
    */
    public function setSimulationCount(?int $value): void {
        $this->getBackingStore()->set('simulationCount', $value);
    }

}
