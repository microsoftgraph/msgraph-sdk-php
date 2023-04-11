<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IdleSessionSignOut implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new idleSessionSignOut and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdleSessionSignOut
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdleSessionSignOut {
        return new IdleSessionSignOut();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'signOutAfterInSeconds' => fn(ParseNode $n) => $o->setSignOutAfterInSeconds($n->getIntegerValue()),
            'warnAfterInSeconds' => fn(ParseNode $n) => $o->setWarnAfterInSeconds($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the isEnabled property value. The isEnabled property
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->getBackingStore()->get('isEnabled');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the signOutAfterInSeconds property value. The signOutAfterInSeconds property
     * @return int|null
    */
    public function getSignOutAfterInSeconds(): ?int {
        return $this->getBackingStore()->get('signOutAfterInSeconds');
    }

    /**
     * Gets the warnAfterInSeconds property value. The warnAfterInSeconds property
     * @return int|null
    */
    public function getWarnAfterInSeconds(): ?int {
        return $this->getBackingStore()->get('warnAfterInSeconds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('signOutAfterInSeconds', $this->getSignOutAfterInSeconds());
        $writer->writeIntegerValue('warnAfterInSeconds', $this->getWarnAfterInSeconds());
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
     * Sets the isEnabled property value. The isEnabled property
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the signOutAfterInSeconds property value. The signOutAfterInSeconds property
     * @param int|null $value Value to set for the signOutAfterInSeconds property.
    */
    public function setSignOutAfterInSeconds(?int $value): void {
        $this->getBackingStore()->set('signOutAfterInSeconds', $value);
    }

    /**
     * Sets the warnAfterInSeconds property value. The warnAfterInSeconds property
     * @param int|null $value Value to set for the warnAfterInSeconds property.
    */
    public function setWarnAfterInSeconds(?int $value): void {
        $this->getBackingStore()->set('warnAfterInSeconds', $value);
    }

}
