<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamSummary {
        return new TeamSummary();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'guestsCount' => fn(ParseNode $n) => $o->setGuestsCount($n->getIntegerValue()),
            'membersCount' => fn(ParseNode $n) => $o->setMembersCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ownersCount' => fn(ParseNode $n) => $o->setOwnersCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the guestsCount property value. Count of guests in a team.
     * @return int|null
    */
    public function getGuestsCount(): ?int {
        return $this->getBackingStore()->get('guestsCount');
    }

    /**
     * Gets the membersCount property value. Count of members in a team.
     * @return int|null
    */
    public function getMembersCount(): ?int {
        return $this->getBackingStore()->get('membersCount');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the ownersCount property value. Count of owners in a team.
     * @return int|null
    */
    public function getOwnersCount(): ?int {
        return $this->getBackingStore()->get('ownersCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('guestsCount', $this->getGuestsCount());
        $writer->writeIntegerValue('membersCount', $this->getMembersCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('ownersCount', $this->getOwnersCount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the guestsCount property value. Count of guests in a team.
     * @param int|null $value Value to set for the guestsCount property.
    */
    public function setGuestsCount(?int $value): void {
        $this->getBackingStore()->set('guestsCount', $value);
    }

    /**
     * Sets the membersCount property value. Count of members in a team.
     * @param int|null $value Value to set for the membersCount property.
    */
    public function setMembersCount(?int $value): void {
        $this->getBackingStore()->set('membersCount', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the ownersCount property value. Count of owners in a team.
     * @param int|null $value Value to set for the ownersCount property.
    */
    public function setOwnersCount(?int $value): void {
        $this->getBackingStore()->set('ownersCount', $value);
    }

}
