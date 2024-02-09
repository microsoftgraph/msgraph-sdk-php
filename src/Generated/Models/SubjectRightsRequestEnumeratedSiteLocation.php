<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SubjectRightsRequestEnumeratedSiteLocation extends SubjectRightsRequestSiteLocation implements Parsable 
{
    /**
     * Instantiates a new SubjectRightsRequestEnumeratedSiteLocation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.subjectRightsRequestEnumeratedSiteLocation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubjectRightsRequestEnumeratedSiteLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubjectRightsRequestEnumeratedSiteLocation {
        return new SubjectRightsRequestEnumeratedSiteLocation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'urls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUrls($val);
            },
        ]);
    }

    /**
     * Gets the urls property value. Collection of site URLs that should be included. Includes the URL of each site, for example, https://www.contoso.com/site1.
     * @return array<string>|null
    */
    public function getUrls(): ?array {
        $val = $this->getBackingStore()->get('urls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urls'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('urls', $this->getUrls());
    }

    /**
     * Sets the urls property value. Collection of site URLs that should be included. Includes the URL of each site, for example, https://www.contoso.com/site1.
     * @param array<string>|null $value Value to set for the urls property.
    */
    public function setUrls(?array $value): void {
        $this->getBackingStore()->set('urls', $value);
    }

}
