<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Contains properties describing restart coordination following an app installation.
*/
class Win32LobAppRestartSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new win32LobAppRestartSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppRestartSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppRestartSettings {
        return new Win32LobAppRestartSettings();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the countdownDisplayBeforeRestartInMinutes property value. The number of minutes before the restart time to display the countdown dialog for pending restarts.
     * @return int|null
    */
    public function getCountdownDisplayBeforeRestartInMinutes(): ?int {
        $val = $this->getBackingStore()->get('countdownDisplayBeforeRestartInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countdownDisplayBeforeRestartInMinutes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countdownDisplayBeforeRestartInMinutes' => fn(ParseNode $n) => $o->setCountdownDisplayBeforeRestartInMinutes($n->getIntegerValue()),
            'gracePeriodInMinutes' => fn(ParseNode $n) => $o->setGracePeriodInMinutes($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'restartNotificationSnoozeDurationInMinutes' => fn(ParseNode $n) => $o->setRestartNotificationSnoozeDurationInMinutes($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the gracePeriodInMinutes property value. The number of minutes to wait before restarting the device after an app installation.
     * @return int|null
    */
    public function getGracePeriodInMinutes(): ?int {
        $val = $this->getBackingStore()->get('gracePeriodInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gracePeriodInMinutes'");
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
     * Gets the restartNotificationSnoozeDurationInMinutes property value. The number of minutes to snooze the restart notification dialog when the snooze button is selected.
     * @return int|null
    */
    public function getRestartNotificationSnoozeDurationInMinutes(): ?int {
        $val = $this->getBackingStore()->get('restartNotificationSnoozeDurationInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restartNotificationSnoozeDurationInMinutes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('countdownDisplayBeforeRestartInMinutes', $this->getCountdownDisplayBeforeRestartInMinutes());
        $writer->writeIntegerValue('gracePeriodInMinutes', $this->getGracePeriodInMinutes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('restartNotificationSnoozeDurationInMinutes', $this->getRestartNotificationSnoozeDurationInMinutes());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the countdownDisplayBeforeRestartInMinutes property value. The number of minutes before the restart time to display the countdown dialog for pending restarts.
     * @param int|null $value Value to set for the countdownDisplayBeforeRestartInMinutes property.
    */
    public function setCountdownDisplayBeforeRestartInMinutes(?int $value): void {
        $this->getBackingStore()->set('countdownDisplayBeforeRestartInMinutes', $value);
    }

    /**
     * Sets the gracePeriodInMinutes property value. The number of minutes to wait before restarting the device after an app installation.
     * @param int|null $value Value to set for the gracePeriodInMinutes property.
    */
    public function setGracePeriodInMinutes(?int $value): void {
        $this->getBackingStore()->set('gracePeriodInMinutes', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the restartNotificationSnoozeDurationInMinutes property value. The number of minutes to snooze the restart notification dialog when the snooze button is selected.
     * @param int|null $value Value to set for the restartNotificationSnoozeDurationInMinutes property.
    */
    public function setRestartNotificationSnoozeDurationInMinutes(?int $value): void {
        $this->getBackingStore()->set('restartNotificationSnoozeDurationInMinutes', $value);
    }

}
