<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DocumentSetVersion extends ListItemVersion implements Parsable 
{
    /**
     * @var string|null $comment Comment about the captured version.
    */
    private ?string $comment = null;
    
    /**
     * @var IdentitySet|null $createdBy User who captured the version.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime Date and time when this version was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<DocumentSetVersionItem>|null $items Items within the document set that are captured as part of this version.
    */
    private ?array $items = null;
    
    /**
     * @var bool|null $shouldCaptureMinorVersion If true, minor versions of items are also captured; otherwise, only major versions will be captured. Default value is false.
    */
    private ?bool $shouldCaptureMinorVersion = null;
    
    /**
     * Instantiates a new DocumentSetVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.documentSetVersion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentSetVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentSetVersion {
        return new DocumentSetVersion();
    }

    /**
     * Gets the comment property value. Comment about the captured version.
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * Gets the createdBy property value. User who captured the version.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. Date and time when this version was created.
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
        return array_merge(parent::getFieldDeserializers(), [
            'comment' => function (ParseNode $n) use ($o) { $o->setComment($n->getStringValue()); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'items' => function (ParseNode $n) use ($o) { $o->setItems($n->getCollectionOfObjectValues(array(DocumentSetVersionItem::class, 'createFromDiscriminatorValue'))); },
            'shouldCaptureMinorVersion' => function (ParseNode $n) use ($o) { $o->setShouldCaptureMinorVersion($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the items property value. Items within the document set that are captured as part of this version.
     * @return array<DocumentSetVersionItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the shouldCaptureMinorVersion property value. If true, minor versions of items are also captured; otherwise, only major versions will be captured. Default value is false.
     * @return bool|null
    */
    public function getShouldCaptureMinorVersion(): ?bool {
        return $this->shouldCaptureMinorVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('items', $this->items);
        $writer->writeBooleanValue('shouldCaptureMinorVersion', $this->shouldCaptureMinorVersion);
    }

    /**
     * Sets the comment property value. Comment about the captured version.
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the createdBy property value. User who captured the version.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. Date and time when this version was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the items property value. Items within the document set that are captured as part of this version.
     *  @param array<DocumentSetVersionItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the shouldCaptureMinorVersion property value. If true, minor versions of items are also captured; otherwise, only major versions will be captured. Default value is false.
     *  @param bool|null $value Value to set for the shouldCaptureMinorVersion property.
    */
    public function setShouldCaptureMinorVersion(?bool $value ): void {
        $this->shouldCaptureMinorVersion = $value;
    }

}
