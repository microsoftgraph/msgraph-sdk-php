<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BitlockerRecoveryKey extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime The date and time when the key was originally backed up to Azure Active Directory.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $deviceId ID of the device the BitLocker key is originally backed up from.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $key The BitLocker recovery key.
    */
    private ?string $key = null;
    
    /**
     * @var VolumeType|null $volumeType Indicates the type of volume the BitLocker key is associated with. Possible values are: operatingSystemVolume, fixedDataVolume, removableDataVolume, unknownFutureValue.
    */
    private ?VolumeType $volumeType = null;
    
    /**
     * Instantiates a new bitlockerRecoveryKey and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BitlockerRecoveryKey
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BitlockerRecoveryKey {
        return new BitlockerRecoveryKey();
    }

    /**
     * Gets the createdDateTime property value. The date and time when the key was originally backed up to Azure Active Directory.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deviceId property value. ID of the device the BitLocker key is originally backed up from.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'key' => function (ParseNode $n) use ($o) { $o->setKey($n->getStringValue()); },
            'volumeType' => function (ParseNode $n) use ($o) { $o->setVolumeType($n->getEnumValue(VolumeType::class)); },
        ]);
    }

    /**
     * Gets the key property value. The BitLocker recovery key.
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Gets the volumeType property value. Indicates the type of volume the BitLocker key is associated with. Possible values are: operatingSystemVolume, fixedDataVolume, removableDataVolume, unknownFutureValue.
     * @return VolumeType|null
    */
    public function getVolumeType(): ?VolumeType {
        return $this->volumeType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('key', $this->key);
        $writer->writeEnumValue('volumeType', $this->volumeType);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the key was originally backed up to Azure Active Directory.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deviceId property value. ID of the device the BitLocker key is originally backed up from.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the key property value. The BitLocker recovery key.
     *  @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value ): void {
        $this->key = $value;
    }

    /**
     * Sets the volumeType property value. Indicates the type of volume the BitLocker key is associated with. Possible values are: operatingSystemVolume, fixedDataVolume, removableDataVolume, unknownFutureValue.
     *  @param VolumeType|null $value Value to set for the volumeType property.
    */
    public function setVolumeType(?VolumeType $value ): void {
        $this->volumeType = $value;
    }

}
