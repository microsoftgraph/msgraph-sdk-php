<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TermsOfUseContainer extends Entity 
{
    /** @var array<AgreementAcceptance>|null $agreementAcceptances Represents the current status of a user's response to a company's customizable terms of use agreement. */
    private ?array $agreementAcceptances = null;
    
    /** @var array<Agreement>|null $agreements Represents a tenant's customizable terms of use agreement that's created and managed with Azure Active Directory (Azure AD). */
    private ?array $agreements = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): TermsOfUseContainer {
        return new TermsOfUseContainer();
    }

    /**
     * Gets the agreementAcceptances property value. Represents the current status of a user's response to a company's customizable terms of use agreement.
     * @return array<AgreementAcceptance>|null
    */
    public function getAgreementAcceptances(): ?array {
        return $this->agreementAcceptances;
    }

    /**
     * Gets the agreements property value. Represents a tenant's customizable terms of use agreement that's created and managed with Azure Active Directory (Azure AD).
     * @return array<Agreement>|null
    */
    public function getAgreements(): ?array {
        return $this->agreements;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'agreementAcceptances' => function (self $o, ParseNode $n) { $o->setAgreementAcceptances($n->getCollectionOfObjectValues(AgreementAcceptance::class)); },
            'agreements' => function (self $o, ParseNode $n) { $o->setAgreements($n->getCollectionOfObjectValues(Agreement::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('agreementAcceptances', $this->agreementAcceptances);
        $writer->writeCollectionOfObjectValues('agreements', $this->agreements);
    }

    /**
     * Sets the agreementAcceptances property value. Represents the current status of a user's response to a company's customizable terms of use agreement.
     *  @param array<AgreementAcceptance>|null $value Value to set for the agreementAcceptances property.
    */
    public function setAgreementAcceptances(?array $value ): void {
        $this->agreementAcceptances = $value;
    }

    /**
     * Sets the agreements property value. Represents a tenant's customizable terms of use agreement that's created and managed with Azure Active Directory (Azure AD).
     *  @param array<Agreement>|null $value Value to set for the agreements property.
    */
    public function setAgreements(?array $value ): void {
        $this->agreements = $value;
    }

}
