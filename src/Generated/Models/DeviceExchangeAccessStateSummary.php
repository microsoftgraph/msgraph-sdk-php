<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceExchangeAccessStateSummary implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $allowedDeviceCount Total count of devices with Exchange Access State: Allowed. */
    private ?int $allowedDeviceCount = null;
    
    /** @var int|null $blockedDeviceCount Total count of devices with Exchange Access State: Blocked. */
    private ?int $blockedDeviceCount = null;
    
    /** @var int|null $quarantinedDeviceCount Total count of devices with Exchange Access State: Quarantined. */
    private ?int $quarantinedDeviceCount = null;
    
    /** @var int|null $unavailableDeviceCount Total count of devices for which no Exchange Access State could be found. */
    private ?int $unavailableDeviceCount = null;
    
    /** @var int|null $unknownDeviceCount Total count of devices with Exchange Access State: Unknown. */
    private ?int $unknownDeviceCount = null;
    
    /**
     * Instantiates a new deviceExchangeAccessStateSummary and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceExchangeAccessStateSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceExchangeAccessStateSummary {
        return new DeviceExchangeAccessStateSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedDeviceCount property value. Total count of devices with Exchange Access State: Allowed.
     * @return int|null
    */
    public function getAllowedDeviceCount(): ?int {
        return $this->allowedDeviceCount;
    }

    /**
     * Gets the blockedDeviceCount property value. Total count of devices with Exchange Access State: Blocked.
     * @return int|null
    */
    public function getBlockedDeviceCount(): ?int {
        return $this->blockedDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'allowedDeviceCount' => function (self $o, ParseNode $n) { $o->setAllowedDeviceCount($n->getIntegerValue()); },
            'blockedDeviceCount' => function (self $o, ParseNode $n) { $o->setBlockedDeviceCount($n->getIntegerValue()); },
            'quarantinedDeviceCount' => function (self $o, ParseNode $n) { $o->setQuarantinedDeviceCount($n->getIntegerValue()); },
            'unavailableDeviceCount' => function (self $o, ParseNode $n) { $o->setUnavailableDeviceCount($n->getIntegerValue()); },
            'unknownDeviceCount' => function (self $o, ParseNode $n) { $o->setUnknownDeviceCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the quarantinedDeviceCount property value. Total count of devices with Exchange Access State: Quarantined.
     * @return int|null
    */
    public function getQuarantinedDeviceCount(): ?int {
        return $this->quarantinedDeviceCount;
    }

    /**
     * Gets the unavailableDeviceCount property value. Total count of devices for which no Exchange Access State could be found.
     * @return int|null
    */
    public function getUnavailableDeviceCount(): ?int {
        return $this->unavailableDeviceCount;
    }

    /**
     * Gets the unknownDeviceCount property value. Total count of devices with Exchange Access State: Unknown.
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        return $this->unknownDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('allowedDeviceCount', $this->allowedDeviceCount);
        $writer->writeIntegerValue('blockedDeviceCount', $this->blockedDeviceCount);
        $writer->writeIntegerValue('quarantinedDeviceCount', $this->quarantinedDeviceCount);
        $writer->writeIntegerValue('unavailableDeviceCount', $this->unavailableDeviceCount);
        $writer->writeIntegerValue('unknownDeviceCount', $this->unknownDeviceCount);
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
     * Sets the allowedDeviceCount property value. Total count of devices with Exchange Access State: Allowed.
     *  @param int|null $value Value to set for the allowedDeviceCount property.
    */
    public function setAllowedDeviceCount(?int $value ): void {
        $this->allowedDeviceCount = $value;
    }

    /**
     * Sets the blockedDeviceCount property value. Total count of devices with Exchange Access State: Blocked.
     *  @param int|null $value Value to set for the blockedDeviceCount property.
    */
    public function setBlockedDeviceCount(?int $value ): void {
        $this->blockedDeviceCount = $value;
    }

    /**
     * Sets the quarantinedDeviceCount property value. Total count of devices with Exchange Access State: Quarantined.
     *  @param int|null $value Value to set for the quarantinedDeviceCount property.
    */
    public function setQuarantinedDeviceCount(?int $value ): void {
        $this->quarantinedDeviceCount = $value;
    }

    /**
     * Sets the unavailableDeviceCount property value. Total count of devices for which no Exchange Access State could be found.
     *  @param int|null $value Value to set for the unavailableDeviceCount property.
    */
    public function setUnavailableDeviceCount(?int $value ): void {
        $this->unavailableDeviceCount = $value;
    }

    /**
     * Sets the unknownDeviceCount property value. Total count of devices with Exchange Access State: Unknown.
     *  @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value ): void {
        $this->unknownDeviceCount = $value;
    }

}
