<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BitLockerRemovableDrivePolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $blockCrossOrganizationWriteAccess This policy setting determines whether BitLocker protection is required for removable data drives to be writable on a computer.
    */
    private ?bool $blockCrossOrganizationWriteAccess = null;
    
    /**
     * @var BitLockerEncryptionMethod|null $encryptionMethod Select the encryption method for removable  drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
    */
    private ?BitLockerEncryptionMethod $encryptionMethod = null;
    
    /**
     * @var bool|null $requireEncryptionForWriteAccess Indicates whether to block write access to devices configured in another organization.  If requireEncryptionForWriteAccess is false, this value does not affect.
    */
    private ?bool $requireEncryptionForWriteAccess = null;
    
    /**
     * Instantiates a new bitLockerRemovableDrivePolicy and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BitLockerRemovableDrivePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BitLockerRemovableDrivePolicy {
        return new BitLockerRemovableDrivePolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the blockCrossOrganizationWriteAccess property value. This policy setting determines whether BitLocker protection is required for removable data drives to be writable on a computer.
     * @return bool|null
    */
    public function getBlockCrossOrganizationWriteAccess(): ?bool {
        return $this->blockCrossOrganizationWriteAccess;
    }

    /**
     * Gets the encryptionMethod property value. Select the encryption method for removable  drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     * @return BitLockerEncryptionMethod|null
    */
    public function getEncryptionMethod(): ?BitLockerEncryptionMethod {
        return $this->encryptionMethod;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockCrossOrganizationWriteAccess' => function (ParseNode $n) use ($o) { $o->setBlockCrossOrganizationWriteAccess($n->getBooleanValue()); },
            'encryptionMethod' => function (ParseNode $n) use ($o) { $o->setEncryptionMethod($n->getEnumValue(BitLockerEncryptionMethod::class)); },
            'requireEncryptionForWriteAccess' => function (ParseNode $n) use ($o) { $o->setRequireEncryptionForWriteAccess($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the requireEncryptionForWriteAccess property value. Indicates whether to block write access to devices configured in another organization.  If requireEncryptionForWriteAccess is false, this value does not affect.
     * @return bool|null
    */
    public function getRequireEncryptionForWriteAccess(): ?bool {
        return $this->requireEncryptionForWriteAccess;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('blockCrossOrganizationWriteAccess', $this->blockCrossOrganizationWriteAccess);
        $writer->writeEnumValue('encryptionMethod', $this->encryptionMethod);
        $writer->writeBooleanValue('requireEncryptionForWriteAccess', $this->requireEncryptionForWriteAccess);
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
     * Sets the blockCrossOrganizationWriteAccess property value. This policy setting determines whether BitLocker protection is required for removable data drives to be writable on a computer.
     *  @param bool|null $value Value to set for the blockCrossOrganizationWriteAccess property.
    */
    public function setBlockCrossOrganizationWriteAccess(?bool $value ): void {
        $this->blockCrossOrganizationWriteAccess = $value;
    }

    /**
     * Sets the encryptionMethod property value. Select the encryption method for removable  drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     *  @param BitLockerEncryptionMethod|null $value Value to set for the encryptionMethod property.
    */
    public function setEncryptionMethod(?BitLockerEncryptionMethod $value ): void {
        $this->encryptionMethod = $value;
    }

    /**
     * Sets the requireEncryptionForWriteAccess property value. Indicates whether to block write access to devices configured in another organization.  If requireEncryptionForWriteAccess is false, this value does not affect.
     *  @param bool|null $value Value to set for the requireEncryptionForWriteAccess property.
    */
    public function setRequireEncryptionForWriteAccess(?bool $value ): void {
        $this->requireEncryptionForWriteAccess = $value;
    }

}
