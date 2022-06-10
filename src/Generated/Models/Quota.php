<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Quota implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $deleted Total space consumed by files in the recycle bin, in bytes. Read-only.
    */
    private ?int $deleted = null;
    
    /**
     * @var int|null $remaining Total space remaining before reaching the quota limit, in bytes. Read-only.
    */
    private ?int $remaining = null;
    
    /**
     * @var string|null $state Enumeration value that indicates the state of the storage space. Read-only.
    */
    private ?string $state = null;
    
    /**
     * @var StoragePlanInformation|null $storagePlanInformation Information about the drive's storage quota plans. Only in Personal OneDrive.
    */
    private ?StoragePlanInformation $storagePlanInformation = null;
    
    /**
     * @var int|null $total Total allowed storage space, in bytes. Read-only.
    */
    private ?int $total = null;
    
    /**
     * @var int|null $used Total space used, in bytes. Read-only.
    */
    private ?int $used = null;
    
    /**
     * Instantiates a new quota and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Quota
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Quota {
        return new Quota();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deleted property value. Total space consumed by files in the recycle bin, in bytes. Read-only.
     * @return int|null
    */
    public function getDeleted(): ?int {
        return $this->deleted;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deleted' => function (ParseNode $n) use ($o) { $o->setDeleted($n->getIntegerValue()); },
            'remaining' => function (ParseNode $n) use ($o) { $o->setRemaining($n->getIntegerValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getStringValue()); },
            'storagePlanInformation' => function (ParseNode $n) use ($o) { $o->setStoragePlanInformation($n->getObjectValue(array(StoragePlanInformation::class, 'createFromDiscriminatorValue'))); },
            'total' => function (ParseNode $n) use ($o) { $o->setTotal($n->getIntegerValue()); },
            'used' => function (ParseNode $n) use ($o) { $o->setUsed($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the remaining property value. Total space remaining before reaching the quota limit, in bytes. Read-only.
     * @return int|null
    */
    public function getRemaining(): ?int {
        return $this->remaining;
    }

    /**
     * Gets the state property value. Enumeration value that indicates the state of the storage space. Read-only.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the storagePlanInformation property value. Information about the drive's storage quota plans. Only in Personal OneDrive.
     * @return StoragePlanInformation|null
    */
    public function getStoragePlanInformation(): ?StoragePlanInformation {
        return $this->storagePlanInformation;
    }

    /**
     * Gets the total property value. Total allowed storage space, in bytes. Read-only.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Gets the used property value. Total space used, in bytes. Read-only.
     * @return int|null
    */
    public function getUsed(): ?int {
        return $this->used;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('deleted', $this->deleted);
        $writer->writeIntegerValue('remaining', $this->remaining);
        $writer->writeStringValue('state', $this->state);
        $writer->writeObjectValue('storagePlanInformation', $this->storagePlanInformation);
        $writer->writeIntegerValue('total', $this->total);
        $writer->writeIntegerValue('used', $this->used);
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
     * Sets the deleted property value. Total space consumed by files in the recycle bin, in bytes. Read-only.
     *  @param int|null $value Value to set for the deleted property.
    */
    public function setDeleted(?int $value ): void {
        $this->deleted = $value;
    }

    /**
     * Sets the remaining property value. Total space remaining before reaching the quota limit, in bytes. Read-only.
     *  @param int|null $value Value to set for the remaining property.
    */
    public function setRemaining(?int $value ): void {
        $this->remaining = $value;
    }

    /**
     * Sets the state property value. Enumeration value that indicates the state of the storage space. Read-only.
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the storagePlanInformation property value. Information about the drive's storage quota plans. Only in Personal OneDrive.
     *  @param StoragePlanInformation|null $value Value to set for the storagePlanInformation property.
    */
    public function setStoragePlanInformation(?StoragePlanInformation $value ): void {
        $this->storagePlanInformation = $value;
    }

    /**
     * Sets the total property value. Total allowed storage space, in bytes. Read-only.
     *  @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value ): void {
        $this->total = $value;
    }

    /**
     * Sets the used property value. Total space used, in bytes. Read-only.
     *  @param int|null $value Value to set for the used property.
    */
    public function setUsed(?int $value ): void {
        $this->used = $value;
    }

}
