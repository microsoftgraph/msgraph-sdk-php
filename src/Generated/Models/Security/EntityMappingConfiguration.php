<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EntityMappingConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EntityMappingConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EntityMappingConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EntityMappingConfiguration {
        return new EntityMappingConfiguration();
    }

    /**
     * Gets the accounts property value. Mappings from detection query columns to account entities attached to the alert.
     * @return array<AccountEntityMapping>|null
    */
    public function getAccounts(): ?array {
        $val = $this->getBackingStore()->get('accounts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccountEntityMapping::class);
            /** @var array<AccountEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accounts'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the amazonResources property value. Mappings from detection query columns to Amazon Web Services resource entities attached to the alert.
     * @return array<AmazonResourceEntityMapping>|null
    */
    public function getAmazonResources(): ?array {
        $val = $this->getBackingStore()->get('amazonResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AmazonResourceEntityMapping::class);
            /** @var array<AmazonResourceEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'amazonResources'");
    }

    /**
     * Gets the azureResources property value. Mappings from detection query columns to Azure resource entities attached to the alert.
     * @return array<AzureResourceEntityMapping>|null
    */
    public function getAzureResources(): ?array {
        $val = $this->getBackingStore()->get('azureResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AzureResourceEntityMapping::class);
            /** @var array<AzureResourceEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureResources'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cloudApplications property value. Mappings from detection query columns to cloud application entities attached to the alert.
     * @return array<CloudApplicationEntityMapping>|null
    */
    public function getCloudApplications(): ?array {
        $val = $this->getBackingStore()->get('cloudApplications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudApplicationEntityMapping::class);
            /** @var array<CloudApplicationEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudApplications'");
    }

    /**
     * Gets the dns property value. Mappings from detection query columns to DNS entities attached to the alert.
     * @return array<DnsEntityMapping>|null
    */
    public function getDns(): ?array {
        $val = $this->getBackingStore()->get('dns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DnsEntityMapping::class);
            /** @var array<DnsEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dns'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accounts' => fn(ParseNode $n) => $o->setAccounts($n->getCollectionOfObjectValues([AccountEntityMapping::class, 'createFromDiscriminatorValue'])),
            'amazonResources' => fn(ParseNode $n) => $o->setAmazonResources($n->getCollectionOfObjectValues([AmazonResourceEntityMapping::class, 'createFromDiscriminatorValue'])),
            'azureResources' => fn(ParseNode $n) => $o->setAzureResources($n->getCollectionOfObjectValues([AzureResourceEntityMapping::class, 'createFromDiscriminatorValue'])),
            'cloudApplications' => fn(ParseNode $n) => $o->setCloudApplications($n->getCollectionOfObjectValues([CloudApplicationEntityMapping::class, 'createFromDiscriminatorValue'])),
            'dns' => fn(ParseNode $n) => $o->setDns($n->getCollectionOfObjectValues([DnsEntityMapping::class, 'createFromDiscriminatorValue'])),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfObjectValues([FileEntityMapping::class, 'createFromDiscriminatorValue'])),
            'googleCloudResources' => fn(ParseNode $n) => $o->setGoogleCloudResources($n->getCollectionOfObjectValues([GoogleCloudResourceEntityMapping::class, 'createFromDiscriminatorValue'])),
            'hosts' => fn(ParseNode $n) => $o->setHosts($n->getCollectionOfObjectValues([HostEntityMapping::class, 'createFromDiscriminatorValue'])),
            'ips' => fn(ParseNode $n) => $o->setIps($n->getCollectionOfObjectValues([IpEntityMapping::class, 'createFromDiscriminatorValue'])),
            'mailboxes' => fn(ParseNode $n) => $o->setMailboxes($n->getCollectionOfObjectValues([MailboxEntityMapping::class, 'createFromDiscriminatorValue'])),
            'mailClusters' => fn(ParseNode $n) => $o->setMailClusters($n->getCollectionOfObjectValues([MailClusterEntityMapping::class, 'createFromDiscriminatorValue'])),
            'mailMessages' => fn(ParseNode $n) => $o->setMailMessages($n->getCollectionOfObjectValues([MailMessageEntityMapping::class, 'createFromDiscriminatorValue'])),
            'oAuthApplications' => fn(ParseNode $n) => $o->setOAuthApplications($n->getCollectionOfObjectValues([OAuthApplicationEntityMapping::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'processes' => fn(ParseNode $n) => $o->setProcesses($n->getCollectionOfObjectValues([ProcessEntityMapping::class, 'createFromDiscriminatorValue'])),
            'registryValues' => fn(ParseNode $n) => $o->setRegistryValues($n->getCollectionOfObjectValues([RegistryValueEntityMapping::class, 'createFromDiscriminatorValue'])),
            'securityGroups' => fn(ParseNode $n) => $o->setSecurityGroups($n->getCollectionOfObjectValues([SecurityGroupEntityMapping::class, 'createFromDiscriminatorValue'])),
            'urls' => fn(ParseNode $n) => $o->setUrls($n->getCollectionOfObjectValues([UrlEntityMapping::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the files property value. Mappings from detection query columns to file entities attached to the alert.
     * @return array<FileEntityMapping>|null
    */
    public function getFiles(): ?array {
        $val = $this->getBackingStore()->get('files');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileEntityMapping::class);
            /** @var array<FileEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'files'");
    }

    /**
     * Gets the googleCloudResources property value. Mappings from detection query columns to Google Cloud resource entities attached to the alert.
     * @return array<GoogleCloudResourceEntityMapping>|null
    */
    public function getGoogleCloudResources(): ?array {
        $val = $this->getBackingStore()->get('googleCloudResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GoogleCloudResourceEntityMapping::class);
            /** @var array<GoogleCloudResourceEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'googleCloudResources'");
    }

    /**
     * Gets the hosts property value. Mappings from detection query columns to host entities attached to the alert.
     * @return array<HostEntityMapping>|null
    */
    public function getHosts(): ?array {
        $val = $this->getBackingStore()->get('hosts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostEntityMapping::class);
            /** @var array<HostEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hosts'");
    }

    /**
     * Gets the ips property value. Mappings from detection query columns to IP address entities attached to the alert.
     * @return array<IpEntityMapping>|null
    */
    public function getIps(): ?array {
        $val = $this->getBackingStore()->get('ips');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IpEntityMapping::class);
            /** @var array<IpEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ips'");
    }

    /**
     * Gets the mailboxes property value. Mappings from detection query columns to mailbox entities attached to the alert.
     * @return array<MailboxEntityMapping>|null
    */
    public function getMailboxes(): ?array {
        $val = $this->getBackingStore()->get('mailboxes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxEntityMapping::class);
            /** @var array<MailboxEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxes'");
    }

    /**
     * Gets the mailClusters property value. Mappings from detection query columns to mail cluster entities attached to the alert.
     * @return array<MailClusterEntityMapping>|null
    */
    public function getMailClusters(): ?array {
        $val = $this->getBackingStore()->get('mailClusters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailClusterEntityMapping::class);
            /** @var array<MailClusterEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailClusters'");
    }

    /**
     * Gets the mailMessages property value. Mappings from detection query columns to mail message entities attached to the alert.
     * @return array<MailMessageEntityMapping>|null
    */
    public function getMailMessages(): ?array {
        $val = $this->getBackingStore()->get('mailMessages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailMessageEntityMapping::class);
            /** @var array<MailMessageEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailMessages'");
    }

    /**
     * Gets the oAuthApplications property value. Mappings from detection query columns to OAuth application entities attached to the alert.
     * @return array<OAuthApplicationEntityMapping>|null
    */
    public function getOAuthApplications(): ?array {
        $val = $this->getBackingStore()->get('oAuthApplications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OAuthApplicationEntityMapping::class);
            /** @var array<OAuthApplicationEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oAuthApplications'");
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
     * Gets the processes property value. Mappings from detection query columns to process entities attached to the alert.
     * @return array<ProcessEntityMapping>|null
    */
    public function getProcesses(): ?array {
        $val = $this->getBackingStore()->get('processes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProcessEntityMapping::class);
            /** @var array<ProcessEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processes'");
    }

    /**
     * Gets the registryValues property value. Mappings from detection query columns to registry value entities attached to the alert.
     * @return array<RegistryValueEntityMapping>|null
    */
    public function getRegistryValues(): ?array {
        $val = $this->getBackingStore()->get('registryValues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RegistryValueEntityMapping::class);
            /** @var array<RegistryValueEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registryValues'");
    }

    /**
     * Gets the securityGroups property value. Mappings from detection query columns to security group entities attached to the alert.
     * @return array<SecurityGroupEntityMapping>|null
    */
    public function getSecurityGroups(): ?array {
        $val = $this->getBackingStore()->get('securityGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SecurityGroupEntityMapping::class);
            /** @var array<SecurityGroupEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityGroups'");
    }

    /**
     * Gets the urls property value. Mappings from detection query columns to URL entities attached to the alert.
     * @return array<UrlEntityMapping>|null
    */
    public function getUrls(): ?array {
        $val = $this->getBackingStore()->get('urls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UrlEntityMapping::class);
            /** @var array<UrlEntityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urls'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('accounts', $this->getAccounts());
        $writer->writeCollectionOfObjectValues('amazonResources', $this->getAmazonResources());
        $writer->writeCollectionOfObjectValues('azureResources', $this->getAzureResources());
        $writer->writeCollectionOfObjectValues('cloudApplications', $this->getCloudApplications());
        $writer->writeCollectionOfObjectValues('dns', $this->getDns());
        $writer->writeCollectionOfObjectValues('files', $this->getFiles());
        $writer->writeCollectionOfObjectValues('googleCloudResources', $this->getGoogleCloudResources());
        $writer->writeCollectionOfObjectValues('hosts', $this->getHosts());
        $writer->writeCollectionOfObjectValues('ips', $this->getIps());
        $writer->writeCollectionOfObjectValues('mailboxes', $this->getMailboxes());
        $writer->writeCollectionOfObjectValues('mailClusters', $this->getMailClusters());
        $writer->writeCollectionOfObjectValues('mailMessages', $this->getMailMessages());
        $writer->writeCollectionOfObjectValues('oAuthApplications', $this->getOAuthApplications());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('processes', $this->getProcesses());
        $writer->writeCollectionOfObjectValues('registryValues', $this->getRegistryValues());
        $writer->writeCollectionOfObjectValues('securityGroups', $this->getSecurityGroups());
        $writer->writeCollectionOfObjectValues('urls', $this->getUrls());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accounts property value. Mappings from detection query columns to account entities attached to the alert.
     * @param array<AccountEntityMapping>|null $value Value to set for the accounts property.
    */
    public function setAccounts(?array $value): void {
        $this->getBackingStore()->set('accounts', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the amazonResources property value. Mappings from detection query columns to Amazon Web Services resource entities attached to the alert.
     * @param array<AmazonResourceEntityMapping>|null $value Value to set for the amazonResources property.
    */
    public function setAmazonResources(?array $value): void {
        $this->getBackingStore()->set('amazonResources', $value);
    }

    /**
     * Sets the azureResources property value. Mappings from detection query columns to Azure resource entities attached to the alert.
     * @param array<AzureResourceEntityMapping>|null $value Value to set for the azureResources property.
    */
    public function setAzureResources(?array $value): void {
        $this->getBackingStore()->set('azureResources', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cloudApplications property value. Mappings from detection query columns to cloud application entities attached to the alert.
     * @param array<CloudApplicationEntityMapping>|null $value Value to set for the cloudApplications property.
    */
    public function setCloudApplications(?array $value): void {
        $this->getBackingStore()->set('cloudApplications', $value);
    }

    /**
     * Sets the dns property value. Mappings from detection query columns to DNS entities attached to the alert.
     * @param array<DnsEntityMapping>|null $value Value to set for the dns property.
    */
    public function setDns(?array $value): void {
        $this->getBackingStore()->set('dns', $value);
    }

    /**
     * Sets the files property value. Mappings from detection query columns to file entities attached to the alert.
     * @param array<FileEntityMapping>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value): void {
        $this->getBackingStore()->set('files', $value);
    }

    /**
     * Sets the googleCloudResources property value. Mappings from detection query columns to Google Cloud resource entities attached to the alert.
     * @param array<GoogleCloudResourceEntityMapping>|null $value Value to set for the googleCloudResources property.
    */
    public function setGoogleCloudResources(?array $value): void {
        $this->getBackingStore()->set('googleCloudResources', $value);
    }

    /**
     * Sets the hosts property value. Mappings from detection query columns to host entities attached to the alert.
     * @param array<HostEntityMapping>|null $value Value to set for the hosts property.
    */
    public function setHosts(?array $value): void {
        $this->getBackingStore()->set('hosts', $value);
    }

    /**
     * Sets the ips property value. Mappings from detection query columns to IP address entities attached to the alert.
     * @param array<IpEntityMapping>|null $value Value to set for the ips property.
    */
    public function setIps(?array $value): void {
        $this->getBackingStore()->set('ips', $value);
    }

    /**
     * Sets the mailboxes property value. Mappings from detection query columns to mailbox entities attached to the alert.
     * @param array<MailboxEntityMapping>|null $value Value to set for the mailboxes property.
    */
    public function setMailboxes(?array $value): void {
        $this->getBackingStore()->set('mailboxes', $value);
    }

    /**
     * Sets the mailClusters property value. Mappings from detection query columns to mail cluster entities attached to the alert.
     * @param array<MailClusterEntityMapping>|null $value Value to set for the mailClusters property.
    */
    public function setMailClusters(?array $value): void {
        $this->getBackingStore()->set('mailClusters', $value);
    }

    /**
     * Sets the mailMessages property value. Mappings from detection query columns to mail message entities attached to the alert.
     * @param array<MailMessageEntityMapping>|null $value Value to set for the mailMessages property.
    */
    public function setMailMessages(?array $value): void {
        $this->getBackingStore()->set('mailMessages', $value);
    }

    /**
     * Sets the oAuthApplications property value. Mappings from detection query columns to OAuth application entities attached to the alert.
     * @param array<OAuthApplicationEntityMapping>|null $value Value to set for the oAuthApplications property.
    */
    public function setOAuthApplications(?array $value): void {
        $this->getBackingStore()->set('oAuthApplications', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the processes property value. Mappings from detection query columns to process entities attached to the alert.
     * @param array<ProcessEntityMapping>|null $value Value to set for the processes property.
    */
    public function setProcesses(?array $value): void {
        $this->getBackingStore()->set('processes', $value);
    }

    /**
     * Sets the registryValues property value. Mappings from detection query columns to registry value entities attached to the alert.
     * @param array<RegistryValueEntityMapping>|null $value Value to set for the registryValues property.
    */
    public function setRegistryValues(?array $value): void {
        $this->getBackingStore()->set('registryValues', $value);
    }

    /**
     * Sets the securityGroups property value. Mappings from detection query columns to security group entities attached to the alert.
     * @param array<SecurityGroupEntityMapping>|null $value Value to set for the securityGroups property.
    */
    public function setSecurityGroups(?array $value): void {
        $this->getBackingStore()->set('securityGroups', $value);
    }

    /**
     * Sets the urls property value. Mappings from detection query columns to URL entities attached to the alert.
     * @param array<UrlEntityMapping>|null $value Value to set for the urls property.
    */
    public function setUrls(?array $value): void {
        $this->getBackingStore()->set('urls', $value);
    }

}
