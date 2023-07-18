<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSource extends DataSource implements Parsable 
{
    /**
     * Instantiates a new userSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.userSource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSource {
        return new UserSource();
    }

    /**
     * Gets the email property value. Email address of the user's mailbox.
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'includedSources' => fn(ParseNode $n) => $o->setIncludedSources($n->getEnumValue(SourceType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'siteWebUrl' => fn(ParseNode $n) => $o->setSiteWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the includedSources property value. Specifies which sources are included in this group. Possible values are: mailbox, site.
     * @return SourceType|null
    */
    public function getIncludedSources(): ?SourceType {
        $val = $this->getBackingStore()->get('includedSources');
        if (is_null($val) || $val instanceof SourceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includedSources'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the siteWebUrl property value. The URL of the user's OneDrive for Business site. Read-only.
     * @return string|null
    */
    public function getSiteWebUrl(): ?string {
        $val = $this->getBackingStore()->get('siteWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteWebUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeEnumValue('includedSources', $this->getIncludedSources());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('siteWebUrl', $this->getSiteWebUrl());
    }

    /**
     * Sets the email property value. Email address of the user's mailbox.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the includedSources property value. Specifies which sources are included in this group. Possible values are: mailbox, site.
     * @param SourceType|null $value Value to set for the includedSources property.
    */
    public function setIncludedSources(?SourceType $value): void {
        $this->getBackingStore()->set('includedSources', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the siteWebUrl property value. The URL of the user's OneDrive for Business site. Read-only.
     * @param string|null $value Value to set for the siteWebUrl property.
    */
    public function setSiteWebUrl(?string $value): void {
        $this->getBackingStore()->set('siteWebUrl', $value);
    }

}
