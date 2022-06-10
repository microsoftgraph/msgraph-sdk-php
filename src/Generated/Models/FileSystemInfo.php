<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileSystemInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $createdDateTime The UTC date and time the file was created on a client.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $lastAccessedDateTime The UTC date and time the file was last accessed. Available for the recent file list only.
    */
    private ?DateTime $lastAccessedDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The UTC date and time the file was last modified on a client.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * Instantiates a new fileSystemInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileSystemInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileSystemInfo {
        return new FileSystemInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the createdDateTime property value. The UTC date and time the file was created on a client.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'lastAccessedDateTime' => function (ParseNode $n) use ($o) { $o->setLastAccessedDateTime($n->getDateTimeValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the lastAccessedDateTime property value. The UTC date and time the file was last accessed. Available for the recent file list only.
     * @return DateTime|null
    */
    public function getLastAccessedDateTime(): ?DateTime {
        return $this->lastAccessedDateTime;
    }

    /**
     * Gets the lastModifiedDateTime property value. The UTC date and time the file was last modified on a client.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('lastAccessedDateTime', $this->lastAccessedDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
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
     * Sets the createdDateTime property value. The UTC date and time the file was created on a client.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the lastAccessedDateTime property value. The UTC date and time the file was last accessed. Available for the recent file list only.
     *  @param DateTime|null $value Value to set for the lastAccessedDateTime property.
    */
    public function setLastAccessedDateTime(?DateTime $value ): void {
        $this->lastAccessedDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The UTC date and time the file was last modified on a client.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

}
