<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Contract extends DirectoryObject implements Parsable 
{
    /**
     * @var string|null $contractType Type of contract. Possible values are:  SyndicationPartner, BreadthPartner, ResellerPartner. See more in the table below.
    */
    private ?string $contractType = null;
    
    /**
     * @var string|null $customerId The unique identifier for the customer tenant referenced by this partnership. Corresponds to the id property of the customer tenant's organization resource.
    */
    private ?string $customerId = null;
    
    /**
     * @var string|null $defaultDomainName A copy of the customer tenant's default domain name. The copy is made when the partnership with the customer is established. It is not automatically updated if the customer tenant's default domain name changes.
    */
    private ?string $defaultDomainName = null;
    
    /**
     * @var string|null $displayName A copy of the customer tenant's display name. The copy is made when the partnership with the customer is established. It is not automatically updated if the customer tenant's display name changes.
    */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new Contract and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Contract
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Contract {
        return new Contract();
    }

    /**
     * Gets the contractType property value. Type of contract. Possible values are:  SyndicationPartner, BreadthPartner, ResellerPartner. See more in the table below.
     * @return string|null
    */
    public function getContractType(): ?string {
        return $this->contractType;
    }

    /**
     * Gets the customerId property value. The unique identifier for the customer tenant referenced by this partnership. Corresponds to the id property of the customer tenant's organization resource.
     * @return string|null
    */
    public function getCustomerId(): ?string {
        return $this->customerId;
    }

    /**
     * Gets the defaultDomainName property value. A copy of the customer tenant's default domain name. The copy is made when the partnership with the customer is established. It is not automatically updated if the customer tenant's default domain name changes.
     * @return string|null
    */
    public function getDefaultDomainName(): ?string {
        return $this->defaultDomainName;
    }

    /**
     * Gets the displayName property value. A copy of the customer tenant's display name. The copy is made when the partnership with the customer is established. It is not automatically updated if the customer tenant's display name changes.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contractType' => function (ParseNode $n) use ($o) { $o->setContractType($n->getStringValue()); },
            'customerId' => function (ParseNode $n) use ($o) { $o->setCustomerId($n->getStringValue()); },
            'defaultDomainName' => function (ParseNode $n) use ($o) { $o->setDefaultDomainName($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contractType', $this->contractType);
        $writer->writeStringValue('customerId', $this->customerId);
        $writer->writeStringValue('defaultDomainName', $this->defaultDomainName);
        $writer->writeStringValue('displayName', $this->displayName);
    }

    /**
     * Sets the contractType property value. Type of contract. Possible values are:  SyndicationPartner, BreadthPartner, ResellerPartner. See more in the table below.
     *  @param string|null $value Value to set for the contractType property.
    */
    public function setContractType(?string $value ): void {
        $this->contractType = $value;
    }

    /**
     * Sets the customerId property value. The unique identifier for the customer tenant referenced by this partnership. Corresponds to the id property of the customer tenant's organization resource.
     *  @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value ): void {
        $this->customerId = $value;
    }

    /**
     * Sets the defaultDomainName property value. A copy of the customer tenant's default domain name. The copy is made when the partnership with the customer is established. It is not automatically updated if the customer tenant's default domain name changes.
     *  @param string|null $value Value to set for the defaultDomainName property.
    */
    public function setDefaultDomainName(?string $value ): void {
        $this->defaultDomainName = $value;
    }

    /**
     * Sets the displayName property value. A copy of the customer tenant's display name. The copy is made when the partnership with the customer is established. It is not automatically updated if the customer tenant's display name changes.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
