<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GranularMailboxRestoreArtifact extends MailboxRestoreArtifact implements Parsable 
{
    /**
     * Instantiates a new GranularMailboxRestoreArtifact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GranularMailboxRestoreArtifact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GranularMailboxRestoreArtifact {
        return new GranularMailboxRestoreArtifact();
    }

    /**
     * Gets the artifactCount property value. This property will be deprecated soon. Don't use.
     * @return int|null
    */
    public function getArtifactCount(): ?int {
        $val = $this->getBackingStore()->get('artifactCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'artifactCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'artifactCount' => fn(ParseNode $n) => $o->setArtifactCount($n->getIntegerValue()),
            'searchResponseId' => fn(ParseNode $n) => $o->setSearchResponseId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the searchResponseId property value. .
     * @return string|null
    */
    public function getSearchResponseId(): ?string {
        $val = $this->getBackingStore()->get('searchResponseId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchResponseId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('artifactCount', $this->getArtifactCount());
        $writer->writeStringValue('searchResponseId', $this->getSearchResponseId());
    }

    /**
     * Sets the artifactCount property value. This property will be deprecated soon. Don't use.
     * @param int|null $value Value to set for the artifactCount property.
    */
    public function setArtifactCount(?int $value): void {
        $this->getBackingStore()->set('artifactCount', $value);
    }

    /**
     * Sets the searchResponseId property value. .
     * @param string|null $value Value to set for the searchResponseId property.
    */
    public function setSearchResponseId(?string $value): void {
        $this->getBackingStore()->set('searchResponseId', $value);
    }

}
