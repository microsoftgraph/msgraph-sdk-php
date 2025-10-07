<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CitationTemplate extends FilePlanDescriptorTemplate implements Parsable 
{
    /**
     * Instantiates a new CitationTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CitationTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CitationTemplate {
        return new CitationTemplate();
    }

    /**
     * Gets the citationJurisdiction property value. Represents the jurisdiction or agency that published the citation.
     * @return string|null
    */
    public function getCitationJurisdiction(): ?string {
        $val = $this->getBackingStore()->get('citationJurisdiction');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'citationJurisdiction'");
    }

    /**
     * Gets the citationUrl property value. Represents the URL to the published citation.
     * @return string|null
    */
    public function getCitationUrl(): ?string {
        $val = $this->getBackingStore()->get('citationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'citationUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'citationJurisdiction' => fn(ParseNode $n) => $o->setCitationJurisdiction($n->getStringValue()),
            'citationUrl' => fn(ParseNode $n) => $o->setCitationUrl($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('citationJurisdiction', $this->getCitationJurisdiction());
        $writer->writeStringValue('citationUrl', $this->getCitationUrl());
    }

    /**
     * Sets the citationJurisdiction property value. Represents the jurisdiction or agency that published the citation.
     * @param string|null $value Value to set for the citationJurisdiction property.
    */
    public function setCitationJurisdiction(?string $value): void {
        $this->getBackingStore()->set('citationJurisdiction', $value);
    }

    /**
     * Sets the citationUrl property value. Represents the URL to the published citation.
     * @param string|null $value Value to set for the citationUrl property.
    */
    public function setCitationUrl(?string $value): void {
        $this->getBackingStore()->set('citationUrl', $value);
    }

}
