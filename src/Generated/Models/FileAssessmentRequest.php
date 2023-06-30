<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileAssessmentRequest extends ThreatAssessmentRequest implements Parsable 
{
    /**
     * Instantiates a new FileAssessmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.fileAssessmentRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileAssessmentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileAssessmentRequest {
        return new FileAssessmentRequest();
    }

    /**
     * Gets the contentData property value. Base64 encoded file content. The file content cannot fetch back because it isn't stored.
     * @return string|null
    */
    public function getContentData(): ?string {
        $val = $this->getBackingStore()->get('contentData');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentData'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentData' => fn(ParseNode $n) => $o->setContentData($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileName property value. The file name.
     * @return string|null
    */
    public function getFileName(): ?string {
        $val = $this->getBackingStore()->get('fileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contentData', $this->getContentData());
        $writer->writeStringValue('fileName', $this->getFileName());
    }

    /**
     * Sets the contentData property value. Base64 encoded file content. The file content cannot fetch back because it isn't stored.
     * @param string|null $value Value to set for the contentData property.
    */
    public function setContentData(?string $value): void {
        $this->getBackingStore()->set('contentData', $value);
    }

    /**
     * Sets the fileName property value. The file name.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

}
