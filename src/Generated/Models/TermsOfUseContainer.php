<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TermsOfUseContainer extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new termsOfUseContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TermsOfUseContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TermsOfUseContainer {
        return new TermsOfUseContainer();
    }

    /**
     * Gets the agreementAcceptances property value. Represents the current status of a user's response to a company's customizable terms of use agreement.
     * @return array<AgreementAcceptance>|null
    */
    public function getAgreementAcceptances(): ?array {
        $val = $this->getBackingStore()->get('agreementAcceptances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgreementAcceptance::class);
            /** @var array<AgreementAcceptance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agreementAcceptances'");
    }

    /**
     * Gets the agreements property value. Represents a tenant's customizable terms of use agreement that's created and managed with Azure Active Directory (Azure AD).
     * @return array<Agreement>|null
    */
    public function getAgreements(): ?array {
        $val = $this->getBackingStore()->get('agreements');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Agreement::class);
            /** @var array<Agreement>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agreements'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agreementAcceptances' => fn(ParseNode $n) => $o->setAgreementAcceptances($n->getCollectionOfObjectValues([AgreementAcceptance::class, 'createFromDiscriminatorValue'])),
            'agreements' => fn(ParseNode $n) => $o->setAgreements($n->getCollectionOfObjectValues([Agreement::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('agreementAcceptances', $this->getAgreementAcceptances());
        $writer->writeCollectionOfObjectValues('agreements', $this->getAgreements());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the agreementAcceptances property value. Represents the current status of a user's response to a company's customizable terms of use agreement.
     * @param array<AgreementAcceptance>|null $value Value to set for the agreementAcceptances property.
    */
    public function setAgreementAcceptances(?array $value): void {
        $this->getBackingStore()->set('agreementAcceptances', $value);
    }

    /**
     * Sets the agreements property value. Represents a tenant's customizable terms of use agreement that's created and managed with Azure Active Directory (Azure AD).
     * @param array<Agreement>|null $value Value to set for the agreements property.
    */
    public function setAgreements(?array $value): void {
        $this->getBackingStore()->set('agreements', $value);
    }

}
