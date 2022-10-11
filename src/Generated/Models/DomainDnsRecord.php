<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainDnsRecord extends Entity implements Parsable 
{
    /**
     * @var bool|null $isOptional If false, this record must be configured by the customer at the DNS host for Microsoft Online Services to operate correctly with the domain.
    */
    private ?bool $isOptional = null;
    
    /**
     * @var string|null $label Value used when configuring the name of the DNS record at the DNS host.
    */
    private ?string $label = null;
    
    /**
     * @var string|null $recordType Indicates what type of DNS record this entity represents.The value can be one of the following: CName, Mx, Srv, Txt.
    */
    private ?string $recordType = null;
    
    /**
     * @var string|null $supportedService Microsoft Online Service or feature that has a dependency on this DNS record.Can be one of the following values: null, Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune.
    */
    private ?string $supportedService = null;
    
    /**
     * @var int|null $ttl Value to use when configuring the time-to-live (ttl) property of the DNS record at the DNS host. Not nullable.
    */
    private ?int $ttl = null;
    
    /**
     * Instantiates a new DomainDnsRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.domainDnsRecord');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainDnsRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainDnsRecord {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.domainDnsCnameRecord': return new DomainDnsCnameRecord();
                case '#microsoft.graph.domainDnsMxRecord': return new DomainDnsMxRecord();
                case '#microsoft.graph.domainDnsSrvRecord': return new DomainDnsSrvRecord();
                case '#microsoft.graph.domainDnsTxtRecord': return new DomainDnsTxtRecord();
                case '#microsoft.graph.domainDnsUnavailableRecord': return new DomainDnsUnavailableRecord();
            }
        }
        return new DomainDnsRecord();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isOptional' => function (ParseNode $n) use ($o) { $o->setIsOptional($n->getBooleanValue()); },
            'label' => function (ParseNode $n) use ($o) { $o->setLabel($n->getStringValue()); },
            'recordType' => function (ParseNode $n) use ($o) { $o->setRecordType($n->getStringValue()); },
            'supportedService' => function (ParseNode $n) use ($o) { $o->setSupportedService($n->getStringValue()); },
            'ttl' => function (ParseNode $n) use ($o) { $o->setTtl($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the isOptional property value. If false, this record must be configured by the customer at the DNS host for Microsoft Online Services to operate correctly with the domain.
     * @return bool|null
    */
    public function getIsOptional(): ?bool {
        return $this->isOptional;
    }

    /**
     * Gets the label property value. Value used when configuring the name of the DNS record at the DNS host.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the recordType property value. Indicates what type of DNS record this entity represents.The value can be one of the following: CName, Mx, Srv, Txt.
     * @return string|null
    */
    public function getRecordType(): ?string {
        return $this->recordType;
    }

    /**
     * Gets the supportedService property value. Microsoft Online Service or feature that has a dependency on this DNS record.Can be one of the following values: null, Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune.
     * @return string|null
    */
    public function getSupportedService(): ?string {
        return $this->supportedService;
    }

    /**
     * Gets the ttl property value. Value to use when configuring the time-to-live (ttl) property of the DNS record at the DNS host. Not nullable.
     * @return int|null
    */
    public function getTtl(): ?int {
        return $this->ttl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isOptional', $this->isOptional);
        $writer->writeStringValue('label', $this->label);
        $writer->writeStringValue('recordType', $this->recordType);
        $writer->writeStringValue('supportedService', $this->supportedService);
        $writer->writeIntegerValue('ttl', $this->ttl);
    }

    /**
     * Sets the isOptional property value. If false, this record must be configured by the customer at the DNS host for Microsoft Online Services to operate correctly with the domain.
     *  @param bool|null $value Value to set for the isOptional property.
    */
    public function setIsOptional(?bool $value ): void {
        $this->isOptional = $value;
    }

    /**
     * Sets the label property value. Value used when configuring the name of the DNS record at the DNS host.
     *  @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value ): void {
        $this->label = $value;
    }

    /**
     * Sets the recordType property value. Indicates what type of DNS record this entity represents.The value can be one of the following: CName, Mx, Srv, Txt.
     *  @param string|null $value Value to set for the recordType property.
    */
    public function setRecordType(?string $value ): void {
        $this->recordType = $value;
    }

    /**
     * Sets the supportedService property value. Microsoft Online Service or feature that has a dependency on this DNS record.Can be one of the following values: null, Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune.
     *  @param string|null $value Value to set for the supportedService property.
    */
    public function setSupportedService(?string $value ): void {
        $this->supportedService = $value;
    }

    /**
     * Sets the ttl property value. Value to use when configuring the time-to-live (ttl) property of the DNS record at the DNS host. Not nullable.
     *  @param int|null $value Value to set for the ttl property.
    */
    public function setTtl(?int $value ): void {
        $this->ttl = $value;
    }

}
